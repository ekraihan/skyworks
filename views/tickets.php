<?php
/**
 * tickets.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<div class="ticket-view">
    <div class="filter">
        <div><span>Search</span>
            <input placeholder="Ticket Name or Content">
        </div>

        <div><span>Filter By Status</span>
            <select>
                <?php foreach ($filter_options as $id => $filter_option): ?>
                    <option>
                        <?php echo $filter_option ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="tickets">
        <div class="ticket-list">
            <?php foreach ($tickets as $id => $ticket) : ?>
                <a href="index.php?module=ticket&ticket_id=<?php echo $id; ?>" class="ticket">
                    <span><?php echo $ticket->ProductId?></span>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="ticket-box">
            <?php if (isset($current_ticket)) : ?>
                <div class="message-string">
                    <?php foreach ($current_ticket['messages'] as $id => $message) : ?>
                        <div class="message"><?php echo $message?></div>
                    <?php endforeach; ?>
                    <div class="reply-body"></div>
                    <div class="reply">
                        <button class="reply-btn">Reply</button>
                    </div>
                </div>


                <form class="ticket-info" method="post" action="index.php?module=ticket&ticket_id=<?php echo $id; ?>">
                    <span><b>Ticket Info</b></span>
                    <div>
                        <span>Current Status:</span>
                        <?php if ($is_editing) : ?>
                            <select>
                                <?php foreach ($statuses as $id => $status): ?>
                                    <option>
                                        <?php echo $status ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        <?php else : ?>
                            <?php echo $current_ticket['status'] ?>
                        <?php endif; ?>
                    </div>

                    <div>
                        <?php if ($is_editing) : ?>
                            <button class="edit-user" name="save-btn" type="submit">Save</button>
                        <?php else : ?>
                            <button class="edit-user" name="edit-btn" type="submit">Edit</button>
                        <?php endif; ?>
                    </div>

                    <div>
                        <button class="edit-user" name="delete-btn" type="submit">Delete Ticket</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<select style="display: none" class="statuses">
    <?php foreach ($filter_options as $id => $filter_option): ?>
        <option>
            <?php echo $filter_option ?>
        </option>
    <?php endforeach; ?>
</select>

<script type="text/javascript" src="javascript/ticket.js"></script>