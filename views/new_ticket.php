<?php
/**
 * new_ticket.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<div class="new-ticket-view">
    <div>
        <span>Choose Product: </span>
        <select>
            <?php foreach ($products as $id => $product): ?>
                <option>
                    <?php echo $product ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <span>Are you having any of these problems? (Show common or recent problems)</span>
    </div>

    <div>
        <textarea rows="20" cols="90" placeholder="Type Ticket Info Here"></textarea>
    </div>

    <div>
        <button class="submit-ticket">Submit Ticket</button>
    </div>

    <div class="possible-answers"></div>

</div>

<script type="text/javascript" src="javascript/new-ticket.js"></script>