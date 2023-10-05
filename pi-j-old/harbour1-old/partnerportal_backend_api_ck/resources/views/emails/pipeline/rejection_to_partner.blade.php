<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
</head>
<body>
        
    <p>Dear {{ $data['partner_name'] }}</p>
    
    <p>Your opportunity submitted against the potential id {{ $data['pipe_potential_id'] }}, 
    for customer {{ $data['partner_org_name'] }}, has been rejected for further processing. </p>

    <p>You are advised to connect with your Pi Business SPOC for further details.</p>

    <p>
    @include('emails.shared.signature')
    </p>

</body>
</html>