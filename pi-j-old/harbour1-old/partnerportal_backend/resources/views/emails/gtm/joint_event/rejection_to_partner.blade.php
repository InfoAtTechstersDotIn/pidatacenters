<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
</head>
<body>
        
    <p>Dear {{ $data['partner_name'] }},</p>
    
    <p>Your Joint Event request for {{ $data['product_services'] }} for {{ $data['event_name'] }}  has been reviewed but could not be approved<br/>

    Please reach out to your partner support manager for further details and execution</p>

    <p>
    @include('emails.shared.signature')
    </p>

</body>
</html>