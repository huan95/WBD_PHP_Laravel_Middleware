<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Enter your age</h1>
<form method="get" action="{{ route('confirm') }}">
    <input name="age" placeholder="Enter your age">
    <input type="submit" value="Check">
</form>
</body>
</html>