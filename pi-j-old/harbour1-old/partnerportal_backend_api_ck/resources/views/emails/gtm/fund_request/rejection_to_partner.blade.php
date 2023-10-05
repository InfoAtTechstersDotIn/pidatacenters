<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
</head>
<body>
        
    <p>Dear {{ $data['partner_name'] }}</p>
    
    <p>Your GTM fund request for {{ $data['project_name'] }}  has been reviewed but could not be approved.<br/>
    Please reach out to your partner support manager for further understanding.</p>

    <p>
    @include('emails.shared.signature')
    </p>

</body>
</html>