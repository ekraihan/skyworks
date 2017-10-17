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
        <?php if ($is_editing) : ?>
            <input name="first_name"
                   placeholder="First Name"
                   value="<?php echo $_SESSION['current_person']->FirstName ?>"/>
        <?php else : ?>
            <?php echo $_SESSION['current_person']->FirstName ?>
        <?php endif; ?>
    </div>
    <div>
        <span>Last Name: </span>
        <?php if ($is_editing) : ?>
            <input name="last_name"
                   placeholder="Last Name"
                   value="<?php echo $_SESSION['current_person']->LastName ?>"/>
        <?php else : ?>
            <?php echo $_SESSION['current_person']->LastName ?>
        <?php endif; ?>
    </div>
    <div>
        <span>Email: </span>
        <?php if ($is_editing) : ?>
            <input name="email"
                   placeholder="Email"
                   value="<?php echo $_SESSION['current_person']->Email ?>"/>
        <?php else : ?>
            <?php echo $_SESSION['current_person']->Email ?>
        <?php endif; ?>
    </div>
    <div>
        <span>Username: </span>
        <?php if ($is_editing) : ?>
            <input name="username"
                   placeholder="Username"
                   value="<?php echo $_SESSION['current_person']->UserName ?>"/>
        <?php else : ?>
            <?php echo $_SESSION['current_person']->UserName ?>
        <?php endif; ?>
    </div>
    <?php if ($_SESSION['current_person']->Role === Roles::AGENT) : ?>
        <div>
            <span>Rating: </span>
            <?php print_r($_SESSION['current_person']->Rating) ?>
        </div>
    <?php endif; ?>
    <div>
        <?php if ($is_editing) : ?>
            <button class="edit-user" name="save-btn" type="submit">Save</button>
        <?php else : ?>
            <button class="edit-user" name="edit-btn" type="submit">Edit</button>
        <?php endif; ?>
    </div>
</form>