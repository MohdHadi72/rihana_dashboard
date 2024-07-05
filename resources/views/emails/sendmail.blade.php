<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Form Submission</title>
</head>
<body>
    <h2>New Form Submission</h2>
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Mobile:</strong> {{ $formData['mobile'] }}</p>
    <p><strong>Message:</strong> {{ $formData['message'] }}</p>
    <h1>Thank You?</h1>
</body>
</html>
