<?php
/**
 * edit.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

?>

<div class="edit-view">
    <div class="filter">
        <div><span>Search</span>
            <input placeholder="Person Name">
        </div>

        <div><span>Filter By Person Type</span>
            <select>
                <?php foreach ($filter_options as $id => $filter_option): ?>
                    <option>
                        <?php echo $filter_option ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="users">
        <div class="user-list">
            <?php foreach ($users as $id => $user) : ?>
                <a href="index.php?module=edit&user_id=<?php echo $id; ?>" class="user">
                    <span><?php echo $user['first_name'].' '.$user['last_name']?></span>
                </a>
            <?php endforeach; ?>
            <form method="post" action="index.php?module=edit">
                <button name="add-usr-btn" type="submit">+ Add User</button>
            </form>
        </div>
        <div class="user-box">

            <?php if ($is_adding_user) : ?>
                <form class="user-info" method="post" action="index.php?module=edit">
                    <div>
                        <input placeholder="First Name"/>
                    </div>
                    <div>
                        <input placeholder="Last Name"/>
                    </div>
                    <div>
                        <button type="submit">Save</button>
                    </div>
                </form>
            <?php elseif (isset($current_user)) : ?>
                <form class="user-info" method="post" action="index.php?module=edit&user_id=<?php echo $current_user_id; ?>">
                    <div>
                        <span>First Name: </span>
                        <?php if ($is_editing) : ?>
                            <input name="first_name"
                                   placeholder="First Name"
                                   value="<?php echo $current_user['first_name'] ?>"/>
                        <?php else : ?>
                            <?php echo $current_user['first_name'] ?>
                        <?php endif; ?>
                    </div>
                    <div>
                        <span>Last Name: </span>
                        <?php if ($is_editing) : ?>
                            <input name="last_name"
                                   placeholder="Last Name"
                                   value="<?php echo $current_user['last_name'] ?>"/>
                        <?php else : ?>
                            <?php echo $current_user['last_name'] ?>
                        <?php endif; ?>
                    </div>
                    <div>
                        <span>Role: </span><?php echo $current_user['role'] ?>
                    </div>

                    <div>
                        <?php if ($is_editing) : ?>
                            <button class="edit-user" name="save-btn" type="submit">Save</button>
                        <?php else : ?>
                            <button class="edit-user" name="edit-btn" type="submit">Edit</button>
                            <button class="edit-user" name="delete-btn" type="submit">Delete</button>
                        <?php endif; ?>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="javascript/edit.js"></script>
