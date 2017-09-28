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
                   value="Billy"/>
        <?php else : ?>
            <?php echo "Billy" ?>
        <?php endif; ?>
    </div>
    <div>
        <span>Last Name: </span>
        <?php if ($is_editing) : ?>
            <input name="last_name"
                   placeholder="Last Name"
                   value="<?php echo "Bob" ?>"/>
        <?php else : ?>
            <?php echo "Bob" ?>
        <?php endif; ?>
    </div>
    <div>
        <?php if ($is_editing) : ?>
            <button class="edit-user" name="save-btn" type="submit">Save</button>
        <?php else : ?>
            <button class="edit-user" name="edit-btn" type="submit">Edit</button>
        <?php endif; ?>
    </div>
</form>