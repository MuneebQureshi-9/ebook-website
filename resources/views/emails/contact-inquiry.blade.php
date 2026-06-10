<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Inquiry</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f1f5f9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; -webkit-font-smoothing: antialiased;">

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color: #f1f5f9; padding: 40px 20px;">
        <tr>
            <td align="center">
                <!-- Main Card -->
                <table role="presentation" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); margin: auto;" cellspacing="0" cellpadding="0">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #1e293b; background-image: linear-gradient(to right, #1e293b, #0f172a); padding: 48px 40px; text-align: center;">
                            <div style="display: inline-block; background-color: rgba(255, 255, 255, 0.1); padding: 16px; border-radius: 50%; margin-bottom: 16px;">
                                <span style="font-size: 32px; line-height: 1;">📬</span>
                            </div>
                            <h1 style="color: #ffffff; font-size: 28px; margin: 0 0 12px; font-weight: 800; letter-spacing: -0.5px;">New Inquiry Received</h1>
                            <p style="color: #94a3b8; font-size: 16px; margin: 0; font-weight: 400;">A prospective client has reached out to you.</p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 40px;">
                            
                            <p style="margin: 0 0 32px 0; font-size: 16px; color: #475569; line-height: 1.6;">
                                Hello there,<br><br>
                                You have a new message from your website's contact form. Here are the details of the inquiry:
                            </p>

                            <!-- Data Grid -->
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                
                                <!-- Name -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 16px 20px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px;">
                                                    <p style="margin: 0 0 6px 0; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.08em;">Full Name</p>
                                                    <p style="margin: 0; font-size: 16px; color: #0f172a; font-weight: 600;">{{ $inquiry['full_name'] }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Email -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 16px 20px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px;">
                                                    <p style="margin: 0 0 6px 0; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.08em;">Email Address</p>
                                                    <p style="margin: 0; font-size: 16px; font-weight: 600;">
                                                        <a href="mailto:{{ $inquiry['email'] }}" style="color: #2563eb; text-decoration: none;">{{ $inquiry['email'] }}</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Phone -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 16px 20px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px;">
                                                    <p style="margin: 0 0 6px 0; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.08em;">Phone Number</p>
                                                    <p style="margin: 0; font-size: 16px; font-weight: 600;">
                                                        <a href="tel:{{ $inquiry['phone'] }}" style="color: #2563eb; text-decoration: none;">{{ $inquiry['phone'] }}</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Service -->
                                @if (!empty($inquiry['service']))
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 16px 20px; background-color: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px;">
                                                    <p style="margin: 0 0 6px 0; font-size: 12px; font-weight: 700; color: #166534; text-transform: uppercase; letter-spacing: 0.08em;">Service Requested</p>
                                                    <p style="margin: 0; font-size: 16px; color: #15803d; font-weight: 600;">
                                                        {{ config("ebook.service_links.{$inquiry['service']}", $inquiry['service']) }}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                @endif

                                <!-- Message -->
                                <tr>
                                    <td>
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 20px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px;">
                                                    <p style="margin: 0 0 10px 0; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.08em;">Message</p>
                                                    <p style="margin: 0; font-size: 15px; color: #334155; line-height: 1.7; white-space: pre-wrap;">{{ $inquiry['message'] }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>
                            
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-top: 32px;">
                                <tr>
                                    <td align="center">
                                        <a href="mailto:{{ $inquiry['email'] }}" style="display: inline-block; padding: 14px 28px; background-color: #2563eb; color: #ffffff; font-size: 16px; font-weight: 600; text-decoration: none; border-radius: 8px; transition: background-color 0.2s;">Reply to Inquiry</a>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 30px 40px; background-color: #f8fafc; border-top: 1px solid #e2e8f0; text-align: center;">
                            <a href="{{ config('app.url') }}" style="display: inline-block; margin-bottom: 16px;">
                                <img src="{{ $message->embed(public_path('images/logo/PNG 2.png')) }}" alt="Pookybooks Logo" style="height: 50px; width: auto; display: block; margin: 0 auto;">
                            </a>
                            <p style="font-size: 13px; color: #94a3b8; margin: 0;">
                                This is an automated email from your website's contact form.
                            </p>
                        </td>
                    </tr>

                </table>
                
                <!-- Extra space at bottom -->
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                    <tr><td style="height: 40px;"></td></tr>
                </table>
            </td>
        </tr>
    </table>

</body>
</html>
