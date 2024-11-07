<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .footer{
            position: absolute;
            bottom: 0;
            text-align: center;
            padding: 10px;
            background-color: skyblue;
            width: 100%
        }

        .main{
            text-align: center;
            margin: 100px;

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Login</a>
            </li>
        </ul>
    </div>
    <div>
        @section('main')
        <h5>This is common part</h5>
        @show
    </div>
    <div class="footer">
        <p>This is a footer</p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
