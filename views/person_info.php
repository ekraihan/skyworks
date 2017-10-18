<?php
/**
 * person_info.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<form class="user-info" method="post" action="index.php?module=personinfo">
    <div>
        <span>First Name: </span>
        <?php if ($this->is_editing) : ?>
            <input name="first_name"
                   placeholder="First Name"
                   value="<?php echo $this->person->FirstName ?>"/>
            <?php if (!$this->person->first_name_valid()) : ?>
                <span>Invalid First Name</span>
            <?php endif; ?>
        <?php else : ?>
            <?php echo $_SESSION['current_person']->FirstName ?>
        <?php endif; ?>
    </div>
    <div>
        <span>Last Name: </span>
        <?php if ($this->is_editing) : ?>
            <input name="last_name"
                   placeholder="Last Name"
                   value="<?php echo $this->person->LastName ?>"/>
            <?php if (!$this->person->last_name_valid()) : ?>
                <span>Invalid Last Name</span>
            <?php endif; ?>
        <?php else : ?>
            <?php echo $_SESSION['current_person']->LastName ?>
        <?php endif; ?>
    </div>
    <div>
        <span>Email: </span>
        <?php if ($this->is_editing) : ?>
            <input name="email"
                   placeholder="Email"
                   value="<?php echo $this->person->Email ?>"/>
            <?php if (!$this->person->email_valid()) : ?>
                <span>Invalid Email</span>
            <?php endif; ?>
        <?php else : ?>
            <?php echo $_SESSION['current_person']->Email ?>
        <?php endif; ?>
    </div>
    <div>
        <span>Password: </span>
        <?php if ($this->is_editing) : ?>
            <input name="password"
                   placeholder="Password"
                   value="<?php echo $this->person->Password ?>"/>
            <?php if (!$this->person->password_valid()) : ?>
                <span>Invalid Password</span>
            <?php endif; ?>
        <?php else : ?>
            <?php echo "*****" ?>
        <?php endif; ?>
    </div>
    <div>
        <span>Username: </span>
        <?php echo $_SESSION['current_person']->UserName ?>
    </div>
    <?php if ($_SESSION['current_person']->Role === Roles::AGENT) : ?>
        <div>
            <span>Rating: </span>
            <?php echo $_SESSION['current_person']->Rating ?>
        </div>
    <?php endif; ?>
    <div>
        <?php if ($this->is_editing) : ?>
            <button class="edit-user" name="save-btn" type="submit">Save</button>
        <?php else : ?>
            <button class="edit-user" name="edit-btn" type="submit">Edit</button>
        <?php endif; ?>
    </div>
</form>