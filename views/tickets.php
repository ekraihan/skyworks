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
                    <span><?php echo $ticket['name']?></span>
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
                <div>Ticket Info</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="javascript/ticket.js"></script>