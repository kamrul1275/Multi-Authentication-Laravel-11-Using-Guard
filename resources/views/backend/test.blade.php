<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Welcome Admin Pannel</h1>

<h3>Hi... {{ Auth::guard('admin')->user()->name }}</h3>


<h5>
    <a href="{{route('admin.logout')}}">Logout</a>
</h5>
</body>
</html>