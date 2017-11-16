<?php
/**
 * edit.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

?>

<div class="edit-view">
    <div class="select-person-type">
        <?php if ($_SESSION['current_person']->SuperAdmin == true) : ?>
            <a href="index.php?module=edit&action=view_admins">
                <button>Admins</button>
            </a>
        <?php endif; ?>
        <a href="index.php?module=edit&action=view_agents">
            <button>Agents</button>
        </a>
        <a href="index.php?module=edit">
            <button>Users</button>
        </a>
    </div>
    <div class="filter"></div>
    <div class="users">
        <div class="user-list">
            <?php foreach ($people as $person) : ?>
                <form action="index.php?module=edit" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $person->PersonId ?>"/>
                    <button type="submit" class="user">
                        <?php echo $person->FirstName.' '.$person->LastName?>
                    </button>
                </form>
            <?php endforeach; ?>
            <form method="post" action="index.php?module=edit&action=add_user">
                <button name="add_usr_btn" type="submit">+ Add User</button>
            </form>
        </div>
        <div class="user-box">
            <?php if ($this->is_adding_user) : ?>
                <form class="user-info" method="post" action="index.php?module=edit&action=add_user">
                    <?php if (!$username_valid) : ?>
                        <span class='error'>Invalid Field</span>
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
                    <div>
                        <button type="submit" name="add_user">Save</button>
                    </div>
                </form>
            <?php elseif ($this->current_editing) : ?>
                <form class="user-info" method="post" action="index.php?module=edit">
                    <div>
                        <span>First Name: </span>
                        <?php if ($this->is_editing) : ?>
                            <input name="first_name"
                                   placeholder="First Name"
                                   value="<?php echo $this->current_editing->FirstName ?>"/>
                            <?php if (!VerifyService::first_name_valid($this->current_editing->FirstName)) : ?>
                                <span>Invalid First Name</span>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php echo $this->current_editing->FirstName ?>
                        <?php endif; ?>
                    </div>
                    <div>
                        <span>Last Name: </span>
                        <?php if ($this->is_editing) : ?>
                            <input name="last_name"
                                   placeholder="Last Name"
                                   value="<?php echo $this->current_editing->LastName ?>"/>
                            <?php if (!VerifyService::last_name_valid($this->current_editing->LastName)) : ?>
                                <span>Invalid Last Name</span>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php echo $this->current_editing->LastName ?>
                        <?php endif; ?>
                    </div>
                    <div>
                        <span>Email: </span>
                        <?php if ($this->is_editing) : ?>
                            <input name="email"
                                   placeholder="Email"
                                   value="<?php echo $this->current_editing->Email ?>"/>
                            <?php if (!VerifyService::email_valid($this->current_editing->Email)) : ?>
                                <span>Invalid Email</span>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php echo $this->current_editing->Email ?>
                        <?php endif; ?>
                    </div>

                    <div>
                        <?php if ($this->is_editing) : ?>
                            <button class="edit-user" name="save_btn" type="submit">Save</button>
                        <?php else : ?>
                            <button class="edit-user" name="edit_btn" type="submit">Edit</button>
                            <button class="edit-user" name="delete_btn" type="submit">Delete</button>
                        <?php endif; ?>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="javascript/edit.js"></script>
