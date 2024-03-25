<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Success</title>
    <style>
        /* Reset default styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        /* Wrapper */
        .wrapper {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .header {
            text-align: center;
            padding-bottom: 20px;
        }

        .header h1 {
            color: #007bff;
        }

        /* Content */
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Button */
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding-top: 20px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        <div class="header">
            <h1>Registration Success</h1>
        </div>

        <!-- Content -->
        <div class="content">
            <p>Hello <strong>{{ $user }}</strong>,</p>
            <p>Your registration was successful!</p>
            <p>Welcome to Eventina. We're excited to have you on board.</p>

            <!-- Button -->
            <p style="text-align: center;">
                <a href="http://localhost:8000/login" class="btn">Login to your account</a>
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Thank you,</p>
            <p>Eventina Team</p>
        </div>
    </div>
</body>

</html>
