<!DOCTYPE html>
<html>
<head>
    <title>New Enquiry</title>
</head>
<body>
    <h2>You have received a new contact enquiry</h2>
    <p><strong>Name:</strong> {{ $contactData['name'] }}</p>
    <p><strong>Phone:</strong> {{ $contactData['phone'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Subject:</strong> {{ $contactData['subject'] }}</p>
    <p><strong>Message:</strong><br>{{ $contactData['message'] }}</p>
</body>
</html>