<?php
/**
 * new_ticket.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<div class="new-ticket-view">
    <form action="index.php?module=newticket&action=save">
        <div>
            <span>Choose Product: </span>
            <select name="product">
                <?php foreach ($products as $product): ?>
                    <option>
                        <?php echo $product->Name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <span>Are you having any of these problems? (Show common or recent problems)</span>
        </div>

        <div>
            <textarea rows="20" cols="90" placeholder="Type Ticket Info Here" name="text"></textarea>
        </div>
        <div>
            <button class="submit-ticket" type="submit" name="submit"> Submit Ticket</button>
        </div>
    </form>

    <div class="possible-answers"></div>

</div>

<script type="text/javascript" src="javascript/new-ticket.js"></script>