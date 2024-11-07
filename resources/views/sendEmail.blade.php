<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
</head>

<body>
    <h1>
        Send Email
    </h1>

    <div>
        <form action="sendMail" method="get">
            @csrf
            <input type="text" name="receiver" placeholder="Enter receiver">
            <br>
            <br>
            <input type="text" name="subject" placeholder="Enter subject">
            <br>
            <br>
            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Enter message"></textarea>
            <br>
            <br>
            <button>Send</button>
        </form>
    </div>
</body>

</html>
