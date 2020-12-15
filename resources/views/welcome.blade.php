<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/layout.css') }}" >
    <title>SFT</title>
</head>
<body>
    
    <div class="container">
        <div class="background-image">
            <form action="" method="POST">
            @csrf
            <h2> LOGIN </h2>
    
                <label for="">Username</label> <br>
                <input type="text" name="username"><br><br>
                <label for="">Password</label><br>
                <input type="password" name="password"><br>
                <br>
                <button type="submit"> Sing In 

             </form>
        </div>
    <div>

</body>
</html>