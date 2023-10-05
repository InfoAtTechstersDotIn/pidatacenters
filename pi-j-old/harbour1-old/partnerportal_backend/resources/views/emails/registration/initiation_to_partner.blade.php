<!DOCTYPE html>
    <html>
    <head>
     <title>{{ $subject }}</title>
    </head>
    <body>
         
        <p>Dear {{ $partner_name }},</p>
        <p>Your registration for Pi Partner Program has been initiated.
        <br/>You shall be communicated at your registered email with login credentials once your registration has been approved.</p>

        <p> Your unique reference id for all further communications is <b> {{ $partner_ref_id }}</b>.</p>

        <p>
        @include('emails.shared.signature')
        </p>

    </body>
    </html>
