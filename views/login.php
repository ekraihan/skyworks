<?php
/**
 * login.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<main>
    <form action="index.php?module=login" method="post">
        <input placeholder="Username">
        <input placeholder="Password">

        <button type="submit" name="user_login">User Login</button>
        <button type="submit" name="agent_login">Agent Login</button>
        <button type="submit" name="admin_login">Admin Login</button>
        <button type="submit" name="super_admin_login">Super Admin Login</button>
    </form>
</main>