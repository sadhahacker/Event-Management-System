<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset</title>
    <style>
        /* Reset default styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #ffffff;
        }

        /* Wrapper */
        .wrapper {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Logo */
        .logo {
            font-weight: bold;
            font-size: 24px;
            color: #000;
        }

        /* Button */
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            color: #fff !important;
            background-image: linear-gradient(to right top, #021d68, #052579, #072d8b, #09369d, #093fb0) !important;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn:hover {
            opacity: 0.8;
        }

        /* Content */
        .content {
            padding: 36px 30px 42px 30px;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding-top: 20px;
            color: #888;
        }

        /* Responsive */
        @media screen and (max-width: 600px) {
            .wrapper {
                padding: 10px;
            }
            .content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Logo -->
        <div class="logo" style="text-align: center;">
            Eventina
        </div>

        <!-- Content -->
        <div class="content">
            <p style="font-weight:bold;margin:0 0 20px 0;">Hello {{ $user ? $user : '' }},</p>
            <p style="margin:0 0 12px 0;">We've received a request to reset the password.</p>
            <p style="margin:10px 0 12px 0;">You can reset your password by clicking the button below:</p>
            <br>
            <p style="text-align: center;">
                <a href="{{'http://localhost:8000/reset?token='.$token}}" class="btn">Reset your password</a>
            </p>
            <p style="margin:100px 0 12px 0;">Thank you,</p>
            <p style="margin:0 0 12px 0;">Eventina</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Thank you,</p>
            <p>Eventina Team</p>
        </div>
    </div>
</body>

</html>
