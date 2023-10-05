<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
</head>
<body>
        
    <p>Dear {{ $data['partner_name'] }},</p>
    
    <p>Your request for collateral for {{ $data['product_services'] }} for {{ $data['event_name'] }}  has been reviewed but could not be approved.<br/>

    Please reach out to your partner support manager for further understanding. </p>

    <p>
    @include('emails.shared.signature')
    </p>

</body>
</html>