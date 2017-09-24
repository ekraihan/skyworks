<?php
/**
 * register.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<div class="contact">
    <h1>User Registration</h1>
    <?php if ($send_email_error) : ?>
        <h3 class="error"><?php echo $send_email_error ?></h3>
    <?php endif; ?>
    <form action="lab3.php" method="post">
        <?php if (!$first_name_valid) : ?>
            <span class='error'>Field Required</span>
        <?php endif; ?>
        <input maxlength="50"
               type="text"
               name="first_name"
               placeholder="First Name"
               value="<?php echo $_SESSION['user']->first_name ?>"/>

        <?php if (!$last_name_valid) : ?>
            <span class='error'>Field Required</span>
        <?php endif; ?>
        <input maxlength="50"
               type="text"
               name="last_name"
               placeholder="Last Name"
               value="<?php echo $_SESSION['user']->last_name ?>"/>

        <?php if (!$email_present) : ?>
            <span class='error'>Field Required</span>
        <?php elseif (!$email_format_valid) : ?>
            <span class='error'>Invalid Email</span>
        <?php endif; ?>
        <input maxlength="50"
               type="email"
               name="email"
               placeholder="Email"
               value="<?php echo $_SESSION['user']->email ?>"/>

        <?php if (!$emails_match) : ?>
            <span class='error'>Emails Don't Match</span>
        <?php endif; ?>
        <input maxlength="50"
               type="email"
               name="confirm_email"
               placeholder="Confirm Email"
               value="<?php echo $confirm_email ?>"/>

        <?php if (!$password_valid) : ?>
            <span class='error'>Invalid Password</span>
        <?php endif; ?>
        <input maxlength="50"
               type="password"
               name="password"
               placeholder="Password"
               value="<?php echo $_SESSION['user']->password ?>"/>

        <?php if (!$passwords_match) : ?>
            <span class='error'>Passwords don't match</span>
        <?php endif; ?>
        <input maxlength="50"
               type="password"
               name="confirm_password"
               placeholder="Confirm Password"
               value="<?php echo $confirm_password ?>"/>

        <?php foreach ($genders as $gender): ?>
            <div class="radio-div">
                <input type="radio"
                       name="gender"
                       value="<?php echo $gender ?>"
                    <?php if ($_SESSION['user']->is_gender_selected($gender)) echo "checked"?>/>
                <span><?php echo $gender ?></span>
            </div>
        <?php endforeach; ?>

        <span class="department-name">Department:</span>
        <select name = "department">
            <?php foreach ($departments as $department): ?>
                <option <?php if ($_SESSION['user']->is_department_selected($department)) echo "selected" ?>>
                    <?php echo $department ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <span class="status-name">Status:</span>
        <?php foreach ($statuses as $status): ?>
            <div class="status-div">
                <input type="checkbox"
                       name="status[]"
                       value="<?php echo $status ?>"
                    <?php if ($_SESSION['user']->is_status_selected($status)) echo "checked"?>/>
        <span><?php echo $status ?></span>
            </div>
        <?php endforeach; ?>

        <span class="agreement">By clicking this checkbox, you agree to the terms and policies</span><br>
        <?php if (!$agreed) : ?>
            <span class='error'>You must agree to the terms!</span></br>
        <?php endif; ?>
        <input type="checkbox" name="agree"/>
        <input name="enter" type="submit" value="Submit" />
    </form>
</div>
