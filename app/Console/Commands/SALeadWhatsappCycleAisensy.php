<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SALeadWhatsappCycleAisensy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whatsapp:sa-lead-cycle-aisensy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info("start : running SA Lead Whatsapp Aisensy command");
        try {
            try {
                Log::info("start run SALeadWhatsappCycleAisensy");
                $aisensy = DB::table('aisensy_settings')->where('type','remarketing')->where('product','SA')->first();
                $now = now();
                $nowFormatted = $now->format('H:i');

                $schedules = config('remarketing.saLeadWhatsappAisensy');

                foreach ($schedules as $daysAgo => $times) {
                    $response = $wpresponse = "";
                    $arrnumbers = 1;
                    foreach ($times as $time) {
                        $scheduledTime = Carbon::createFromFormat('H:i', $time);

                        if ($now->diffInMinutes($scheduledTime) == 0) {
                            $targetDate = $now->copy()->subDays($daysAgo)->toDateString();

                            $users = DB::table('user_registrations as r')
                                ->join('loan_applications as a', 'a.userid', '=', 'r.id')
                                ->select(
                                    'r.id',
                                    'r.update_date',
                                    'r.first_name',
                                    'r.last_name',
                                    'r.mobile',
                                    'r.email',
                                    'a.monthly_income',
                                    'a.loan_type',
                                    'a.currentemi',
                                    'a.loan_amount'
                                )
                                ->whereDate('r.update_date', '=', $targetDate)
                                //->where('r.update_date', '>=', '2025-08-06 00:00:00')
                                ->where('r.isUser', 1)
                                ->where('r.acc_type', 1)
                                ->where('r.isDnd', 0)
                                ->where('r.isActive', 1)
                                ->where('r.isDelete', 0)
                                ->where('a.isDelete', 0)
                                ->orderBy('r.id', 'asc')
                                ->get();

                            $adminUsers = ['9558539698', '8160409166', '7698476009'];
                            if ($users->isNotEmpty()) {
                                $data1 = array(
                                    'rec_date' => date('Y-m-d H:i:s'),
                                    'crontype' => 'Self Apply Lead Whatsapp Aisensy',
                                    'parentid' => 11, 
                                    'cronname' => 'Whatsapp Aisensy Day - ' . $daysAgo,
                                    'msgcount' => $arrnumbers,
                                    'msgresponse' => $wpresponse
                                );
                                $insertId = DB::table('sms_log')->insertGetId($data1);

                                foreach ($adminUsers as $admin) {
                                    $eligibilityAmt = 500000;

                                   /* aisensy code starts here */
                                    $data1 = array(
                        				"apiKey" => $aisensy->api_key,
                        				"campaignName" => $aisensy->campaign_name,
                        				"destination" => "+91".$admin,
                        				"media" => array(
                        					"url" => $aisensy->media_url,
                        					"filename" => $aisensy->media_filename
                        				),
                        				"userName" => 'Kreditsathi Admin',
                        				"tags" => array("Get Offer"),
                        				"attributes" => array(
                        					"EligibleAmount" => strval($eligibilityAmt)
                        				),
                        				"templateParams" => array('$Name', '$EligibleAmount'),
                        			);
                        			$response = aisensy_track($data1);
                        			/* aisensy code neds here */

                                    $wpresponse .= $admin . "-" . $response . "|";

                                    $data4 = array(
                                        'msgcount' => $arrnumbers,
                                        'msgresponse' => $wpresponse
                                    );

                                    $query = DB::table('sms_log')->where('id', $insertId)->update($data4);
                                    $arrnumbers++;
                                }


                                foreach ($users as $user) {
                                    $eligibilityAmt = calEligiblity($user->monthly_income, $user->currentemi, (($user->loan_type == 2) ? 11.5 : 12.5), $user->loan_amount);

                                    /* aisensy code starts here */
                                    $data1 = array(
                        				"apiKey" => $aisensy->api_key,
                        				"campaignName" => $aisensy->campaign_name,
                        				"destination" => "+91".$user,
                        				"media" => array(
                        					"url" => $aisensy->media_url,
                        					"filename" => $aisensy->media_filename
                        				),
                        				"userName" => 'Kreditsathi Admin',
                        				"tags" => array("Get Offer"),
                        				"attributes" => array(
                        					"EligibleAmount" => strval($eligibilityAmt)
                        				),
                        				"templateParams" => array('$Name', '$EligibleAmount'),
                        			);
                        			$response = aisensy_track($data1);
                        			/* aisensy code neds here */

                                    $wpresponse .= $user->mobile . "-" . $response . "|";

                                    $data4 = array(
                                        'msgcount' => $arrnumbers,
                                        'msgresponse' => $wpresponse
                                    );

                                    $query = DB::table('sms_log')->where('id', $insertId)->update($data4);
                                    $arrnumbers++;
                                }
                            }

                            break;
                        }
                    }
                }
            } catch (\Exception $e) {
                Log::error('Error in Self Apply Lead Whatsapp Aisensy Service: ' . $e->getMessage());
            }
        } catch (\Exception $e) {
            Log::error('Error running SA Lead Whatsapp Aisensy command: ' . $e->getMessage());
            $this->error('Command failed: ' . $e->getMessage());
        }
    }
}
