<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style_789.css"> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
</head>

<body>

<h1 id="signup_skit">Sudent Registration sign up</h1>
<div id="yessir">
<p>Please create a username and password to continue.</p>
<form action="submit.PHP" method="post">
    <p>
        <label for = "Username">Username: </label>
        <input type="text" name="Username" id="username" maxlength='15' required/>
    </p>
    <p>
        <label for ="Password">Password: </label>
        <input type="password" name="Password" id="password" maxlength='15' required/>
    <p>
        <label>&nbsp;</label>
        <input type="submit" value="Sign up" class="btnSubmit">
    </p>
</form>

<p><a href="index.php">Back to Main</a></p>

</div>

</body>

</html>