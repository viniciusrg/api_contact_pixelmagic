<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            /* color: #333; */
            margin: 20px;
        }

        h1 {
            /* color: #f1f1f1; */
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>New Contact Landing Page - IRONPLAN</h1>
    <p><strong>Name:</strong> {{$data['name']}}</p>
    <p><strong>Email:</strong> {{$data['email']}}</p>
    <p><strong>Message:</strong> {{$data['message']}}</p>
</body>

</html>
