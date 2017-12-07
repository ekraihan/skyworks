
<?php
    /**
     * header.php
     * AUTHOR: Elias Kraihanzel
     * DATE: 9/17/17
     */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Skyworks</title>
    <link rel="stylesheet" type="text/css" href="styles/app.css">
    <link rel="stylesheet" href="node_modules/datatables/media/css/jquery.dataTables.css">

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/datatables/media/js/jquery.dataTables.js"></script>

    <script src="node_modules/RGraph/libraries/RGraph.svg.common.core.js"></script>
    <script src="node_modules/RGraph/libraries/RGraph.svg.pie.js"></script>

</head>
<body>
<header>
    <a href="index.php"><h1 class="site-title">TicketHawk</h1></a>

    <nav>

        <?php if (isset($_SESSION['current_person'])) : ?>
            <a href="index.php?module=header&action=logout"><span>Logout</span></a>
            <a href="index.php?module=personinfo"><span>User Profile</span></a>
            <a href="index.php?module=ticket"><span>Current Tickets</span></a>
            <?php if ($_SESSION['current_person']->Role === Roles::USER) : ?>
                <a href="index.php?module=newticket"><span>Make a Ticket</span></a>
            <?php elseif ($_SESSION['current_person']->Role === Roles::ADMIN) : ?>
                <a href="index.php?module=report"><span>Reports</span></a>
                <a href="index.php?module=edit"><span>Edit People</span></a>
            <?php endif; ?>
        <? endif; ?>
    </nav>
</header>
<main>
