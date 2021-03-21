<?php
require_once 'includes/header.php';
?>

<div>
<h1>Register</h1>

<p>Existing member? <a href="register.php">register here!</a></p>

<form action="includes/register-inc.php" method="post">

    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">  
    <input type="password" name="confirmPassword" placeholder="Confirm Password">
    <button type="submit" name="submit">Register</button>
</form>
</div>
<?php
require_once 'includes/footer.php';
?>