<?php
/**
 * register.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */
include_once "services/VerifyService.php";
?>

<div class="register-view">
    <h1>Registration</h1>
    <form action="index.php?module=register" method="post">
        <?php if (!$username_valid) : ?>
            <span class='error'>Invalid Field</span>
        <?php elseif ($username_taken) :?>
            <span class='error'>Username Already Taken</span>
        <?php endif; ?>
        <input maxlength="50"
               name="username"
               placeholder="Username"
               value="<?php echo $new_user->UserName ?>"/>

        <?php if (!$first_name_valid) : ?>
            <span class='error'>Invalid Field</span>
        <?php endif; ?>
        <input maxlength="50"
               type="text"
               name="first_name"
               placeholder="First Name"
               value="<?php echo $new_user->FirstName ?>"/>

        <?php if (!$last_name_valid) : ?>
            <span class='error'>Invalid Field</span>
        <?php endif; ?>
        <input maxlength="50"
               type="text"
               name="last_name"
               placeholder="Last Name"
               value="<?php echo $new_user->LastName ?>"/>

        <?php if (!$email_valid) : ?>
            <span class='error'>Invalid Field</span>
        <?php endif; ?>
        <input maxlength="50"
               type="email"
               name="email"
               placeholder="Email"
               value="<?php echo $new_user->Email ?>"/>

        <?php if (!$password_valid) : ?>
            <span class='error'>Invalid Field</span>
        <?php endif; ?>
        <input maxlength="50"
               type="password"
               name="password"
               placeholder="Password"
               value="<?php echo $new_user->Password ?>"/>

        <input name="register" type="submit" value="Submit"/>
    </form>
</div>
