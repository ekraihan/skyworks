<?php
/**
 * login.css
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */
//session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Skyworks</title>
    <link rel="stylesheet" type="text/css" href="styles/app.css">
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
</head>
<body>

    <div class="login-view">
        <h1>Ticket Hawk</h1>

        <?php if (isset($_GET["email"])): ?>
            <div>Email set to <?php echo $_GET["email"] ?></div>
        <?php elseif (isset($_GET["code"])) : ?>
            <?php if (isset($user_activation_failed)): ?>
                <div>User failed to activate</div>
            <?php else : ?>
                <div>User Successfully Activated Click <a href="index.php?module=login">here</a> to login </div>
            <?php endif; ?>
        <?php else : ?>
            <form action="index.php?module=login" method="post">
                <?php if (!$user_valid) : ?>
                    <div>Username or Password invalid</div>
                <?php endif; ?>
                <input placeholder="Username" name="username" value=<?php if (isset($username)) echo $username; ?>>
                <input placeholder="Password" name="password" type="password">

                <button type="submit" name="login">Login</button>

                <span><a href="index.php?module=register">Register</a></span>
                <span><a href="index.php?module=forgotpassword">Forgot Password?</a></span>
            </form>
        <?php endif; ?>
    </div>
</body>