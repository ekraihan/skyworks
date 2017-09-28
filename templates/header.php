
<?php
    /**
     * header.php
     * AUTHOR: Elias Kraihanzel
     * DATE: 9/17/17
     */

//    session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Skyworks</title>
    <link rel="stylesheet" type="text/css" href="styles/app.css">
    <script type="text/javascript" src="libraries/jquery/dist/jquery.min.js"></script>
</head>
<body>
<header>
    <a href="index.php"><h1 class="site-title">TicketHawk</h1></a>

    <nav>

        <?php if (isset($_SESSION['person_type'])) : ?>
            <a href="index.php?module=header&action=logout"><span>Logout</span></a>
            <a href="index.php?module=personinfo"><span>User Profile</span></a>
            <a href="index.php?module=ticket"><span>Current Tickets</span></a>
            <?php if ($_SESSION['person_type'] === Roles::USER) : ?>
                <a href="index.php?module=newticket"><span>Make a Ticket</span></a>
            <?php elseif ($_SESSION['person_type'] === Roles::ADMIN || $_SESSION['person_type'] === Roles::SUPER_ADMIN) : ?>
                <a href="index.php?module=report"><span>Reports</span></a>
                <a href="index.php?module=edit"><span>Edit Users</span></a>
            <?php endif; ?>
        <? endif; ?>
    </nav>
</header>
<main>
