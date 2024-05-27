<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style_789.css"> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
</head>

<body>


<h1>Sudent Registration</h1>
<p>     </p>
<h1>Login</h1>
<div id="yessir">
    <form> 
        <!--<p> 
            <label for="setColor"> Set color: </label>
            <input type="text" name="setColor" id="setColor" maxlength="20">
            <input type="submit" value="Set color" id="Button"> 
        </p> -->
    </form>
    <p>Please enter your username and password to continue.</p>
    <form action="submit.php" method="post">
        <p>
            <label for = "Username">Username: </label>
            <input type="text" name="Username" id="username" maxlength='15' required/>
        </p>
        <p>
            <label for ="Password">Password: </label>
            <input type="password" name="Password" id="password" maxlength='15' required/>
        <p>
            <label >&nbsp;</label>
            <input id= "KnappSak" type="submit" value="Login" class="btnSubmit">
        </p>
    </form>
    
    <p> Dont have an account? Sign up here:</p>
    <p><a href="Sign_up.php" class="link"> Sign up</a> </p>
    <p><a href="Elever.php" class="link"> Show students</a></p>
    <p><a href="index.php " class="link">Back to Main</a></p>
</div>

</body>

</html>
