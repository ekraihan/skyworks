<?php
/**
 * register.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<div class="register-view">
    <h1>Registration</h1>
    <form action="index.php?module=register" method="post">
<!--        --><?php //if (!$first_name_valid) : ?>
<!--            <span class='error'>Field Required</span>-->
<!--        --><?php //endif; ?>
<!--        <input maxlength="50"-->
<!--               type="text"-->
<!--               name="first_name"-->
<!--               placeholder="First Name"-->
<!--               value="--><?php //echo $_SESSION['user']->first_name ?><!--"/>-->
<!---->
<!--        --><?php //if (!$last_name_valid) : ?>
<!--            <span class='error'>Field Required</span>-->
<!--        --><?php //endif; ?>
<!--        <input maxlength="50"-->
<!--               type="text"-->
<!--               name="last_name"-->
<!--               placeholder="Last Name"-->
<!--               value="--><?php //echo $_SESSION['user']->last_name ?><!--"/>-->
<!---->
<!--        --><?php //if (!$email_present) : ?>
<!--            <span class='error'>Field Required</span>-->
<!--        --><?php //elseif (!$email_format_valid) : ?>
<!--            <span class='error'>Invalid Email</span>-->
<!--        --><?php //endif; ?>
<!--        <input maxlength="50"-->
<!--               type="email"-->
<!--               name="email"-->
<!--               placeholder="Email"-->
<!--               value="--><?php //echo $_SESSION['user']->email ?><!--"/>-->
<!---->
<!--        --><?php //if (!$emails_match) : ?>
<!--            <span class='error'>Emails Don't Match</span>-->
<!--        --><?php //endif; ?>
<!--        <input maxlength="50"-->
<!--               type="email"-->
<!--               name="confirm_email"-->
<!--               placeholder="Confirm Email"-->
<!--               value="--><?php //echo $confirm_email ?><!--"/>-->
<!---->
<!--        --><?php //if (!$password_valid) : ?>
<!--            <span class='error'>Invalid Password</span>-->
<!--        --><?php //endif; ?>
<!--        <input maxlength="50"-->
<!--               type="password"-->
<!--               name="password"-->
<!--               placeholder="Password"-->
<!--               value="--><?php //echo $_SESSION['user']->password ?><!--"/>-->
<!---->
<!--        --><?php //if (!$passwords_match) : ?>
<!--            <span class='error'>Passwords don't match</span>-->
<!--        --><?php //endif; ?>
<!--        <input maxlength="50"-->
<!--               type="password"-->
<!--               name="confirm_password"-->
<!--               placeholder="Confirm Password"-->
<!--               value="--><?php //echo $confirm_password ?><!--"/>-->

        <input name="register" type="submit" value="Submit"/>
    </form>
</div>
