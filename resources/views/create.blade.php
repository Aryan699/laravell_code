<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])/}}">
        @csrf
        <LABEl>Name:</LABEl>
        <input type="text" name="name" required>
        <label>Adress:</label>
        <input type="text" name="adress" required>
        <label>Roll no:</label>
        <input type="text" name="dob" required>
        <input type="submit">
</form>
    
</body>
</html>