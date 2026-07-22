@extends('mail.hrMailHeader')
@section('content')
    <p>Hello {{ $name }},</p>
    <p>We're elated that you showed interest in working with our company. Our HR Team will be in touch soon.</p>
    <p>In case you've any queries/doubts, please write to us at info@kreditsathi.com</p>
    <p>
        Thanks & Regards,<br />
        Kreditsathi
    </p>
@endsection