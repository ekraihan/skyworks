<?php
/**
 * forgot_password.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

?>

<h3>Enter an email and we'll send you a new password</h3>
<form action="index.php?module=forgotpassword" method="post">
    <?php if (!$email_valid) : ?>
        <div>Invalid Email</div>
    <?php endif; ?>
    <input type="text" name="email" placeholder="Email" value="<?php echo $email?>" required>
    <input type="submit" name="submit">
</form>
