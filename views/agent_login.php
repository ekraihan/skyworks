<?php
/**
 * agent_login.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/27/17
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
        <h3>Agent Login</h3>

        <form action="index.php?module=login&action=login_agent" method="post">
            <?php if (!$user_valid) : ?>
                <div>Username or Password invalid</div>
            <?php endif; ?>
            <input placeholder="Username" name="username">
            <input placeholder="Password" name="password" type="password">

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>


