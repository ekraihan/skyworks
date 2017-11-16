<?php
/**
 * tickets.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<div class="ticket-view">
    <div class="tickets">
        <div class="ticket-list">
            <?php foreach ($tickets as $ticket) : ?>
                <a href="index.php?module=ticket&ticket_id=<?php echo $ticket->TicketId; ?>" class="ticket">
                    <div>Product: <?php echo ProductService::get_by_id($ticket->ProductId)->Name?></div>
                    <div>Status: <?php echo StatusService::get_by_id($ticket->StatusId)->Name?></div>
                    <div>Agent: <?php $agent = AgentService::get_by_id($ticket->AgentId);
                                    echo $agent->FirstName . " " . $agent->LastName
                                ?>
                    </div>
                    <div>
                        <?php $messages = MessageService::get_all_by_ticket_id($ticket->TicketId);
                            if (count($messages) !== 0)
                                echo substr($messages[0]->Message,0, 25) . "...";
                        ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="ticket-box">
            <?php if (isset($current_ticket)) : ?>
                <form class="message-string" method="post" action="index.php?module=ticket&ticket_id=<?php echo $current_ticket->TicketId; ?>">
                        <?php foreach ($current_messages as $message) : ?>
                            <div class="message"><?php echo $message->Message?></div>
                        <?php endforeach; ?>
                        <div class="reply-body"></div>
                        <div class="reply">
                            <button class="reply-btn" type="button">Reply</button>
                        </div>
                </form>

                <form class="ticket-info" method="post" action="index.php?module=ticket&ticket_id=<?php echo $current_ticket->TicketId; ?>">
                    <span><b>Ticket Info</b></span>
                    <div>
                        <span>Current Status:</span>
                        <?php if ($is_editing) : ?>
                            <select>
                                <?php foreach ($statuses as $status): ?>
                                    <option>
                                        <?php echo $status ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        <?php else : ?>
                            <?php echo StatusService::get_by_id($current_ticket->StatusId)->Name ?>
                        <?php endif; ?>
                    </div>

                    <div>
                        <?php if ($is_editing) : ?>
                            <button class="edit-user" name="save-btn" type="submit">Save</button>
                        <?php elseif ($_SESSION['current_person']->Role === Roles::ADMIN || $_SESSION['current_person']->Role === Roles::AGENT): ?>
                            <button class="edit-user" name="edit-btn" type="submit">Edit</button>
                        <?php endif; ?>
                    </div>

                    <?php if ($_SESSION['current_person']->Role === Roles::ADMIN) : ?>
                        <div>
                            <button class="edit-user" name="delete-btn" type="submit">Delete Ticket</button>
                        </div>
                    <?php endif; ?>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="javascript/ticket.js"></script>