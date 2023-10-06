<!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
</head>
<body>

    <p>Dear {{ $email }}!</p>  
    <p>You have requested a link to change your password.</p>     
    <p>You can change you password by navigating to the hyperlink <a href="https://harbour1.in/partnerportal/login/reset-password?pt={{$token}}">here</a>.</p>
    <p>This link will be active for 5 mins only.</p>
    <p><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#262626">Warm Regards <br/>Pi Partner Group.</span></p>
</body>
</html>