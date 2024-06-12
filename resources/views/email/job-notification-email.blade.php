<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Notification Email</title>
</head>
<body>
    <h3>Hello {{ $mailData['employer']->name }}, There is a new application has been submitted for the your job posted on Career Hub. Here are the details:</h3>
    
    <h3>Job Title : {{ $mailData['job']->title  }}</h3>

    <h3>======== Applicant Details ==========</h3>
    
    <p>Name        : {{ $mailData['user']->name }}</p>
    <p>Email       : {{ $mailData['user']->email }}</p>
    <p>Mobile No   : {{ $mailData['user']->mobile }}</p>
    <p>
        <br></br>  From, Career Hub
    </p>

</body>
</html>