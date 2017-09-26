<?php
/**
 * tickets.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */
?>



<div class="ticket-view">
    <div class="filter">
        <select>
            <?php foreach ($filter_options as $id => $filter_option): ?>
                <option>
                    <?php echo $filter_option ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="tickets">
        <?php foreach ($tickets as $id => $ticket) : ?>
            <a href="index.php?module=ticket&ticket_id=<?php echo $id; ?>" class="ticket">
                <span><?php echo $ticket?></span>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="ticket-box">
        <?php echo $current_ticket; ?>
    </div>
</div>
