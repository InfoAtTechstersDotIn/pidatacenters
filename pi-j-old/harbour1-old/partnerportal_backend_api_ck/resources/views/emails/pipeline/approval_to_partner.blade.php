<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
</head>
<body>
        
    <p>Dear {{ $data['partner_name'] }},</p>
    
    <p>Your new potential created for {{ $data['partner_org_name'] }} against <a href="https://harbour1.in/partnerportal/pipeline" target='_blank'>{{ $data['pipe_potential_id'] }}</a> for 
    INR INR {{ $data['pipe_mrc'] }} MCR , INR {{ $data['pipe_otc'] }} OTC, and INR {{ $data['pipe_arc'] }} ARC 
    for a {{ $data['pipe_cp'] }} months contract period has been approved</p>

    <p>
    @include('emails.shared.signature')
    </p>

</body>
</html>