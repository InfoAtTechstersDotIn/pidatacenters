<!DOCTYPE html>
<html>
    <head>
     <title>{{ $subject }}</title>
    </head>
<body>
         
    <p>Dear {{ $partner_admin_name }},</p>
        
    @if($rejection_comment != null) 
        <p>Your registration submitted against the registration id {{ $partner_ref_no }}, has been rejected due to: </p>
        <p>&quot;{{$rejection_comment}}&quot;</p>
    @else
    <p>Your registration submitted against the registration id {{ $partner_ref_no }}, has been rejected for further processing.</p>
    @endif

    <p>You are advised to register with the correct information/changes in the Pi Partner Portal.<br/><br/>
    For further assistance, please contact Pi, Partner Alliance Support on bhaswati.de@pidatacenters.com
    </p>


    <p>
    @include('emails.shared.signature')
    </p>
        
</body>
</html>