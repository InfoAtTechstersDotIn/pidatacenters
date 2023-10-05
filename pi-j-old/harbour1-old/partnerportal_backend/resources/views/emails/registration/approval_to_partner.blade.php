<!DOCTYPE html>
    <html>
    <head>
     <title>{{ $subject }}</title>
    </head>
    <body>
         
        <p>Dear {{ $partner_admin_name }}</p>
        <p>We at Pi DATACENTERS are thrilled to welcome {{ $partner_name }} as our Registered Business Partner (RBP) & have you onboard, this exciting journey with us.<br/>
        At Pi, we take pride in delivering value, professional growth & personal glory for our associated partners.</p>

        <p>
        We foster a culture of service excellence & be the trusted ally to our customers.<br/>
        We team up with like-minded partners for the common goal of business acquisition, through professional ethics, customer experience and lasting relationships.
        </p>

        <p>We look forward to a long & productive association with you.</p>

        <p>For any process related queries, please do not hesitate to contact us on bhaswati.de@pidatacenters.com<br/>
        For any business queries, please do continue to engage with your Pi business SPOC.
        </p>
        <p>Your credentials are: <br/>
            Email: {{ $partner_email }} <br/>
            Password: {{ $partner_pass }} <br/>
	    <span style="color:#00B050;"><strong>Note: </strong>Please change your password on first login.</span>
        </p>

        <p>Your RBP certificate is enclosed herewith.</p>

        <p>
        @include('emails.shared.signature')
        </p>
        

    </body>
    </html>
