<?php
/**
 * new_ticket.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

?>

<div class="new-ticket-view">
<!--    <form action="index.php?module=newticket" method="post">-->
        <div>
            <span>Choose Product: </span>
            <select name="product">
                <?php foreach ($products as $product): ?>
                    <option value="<?php echo $product->ProductId ?>">
                        <?php echo $product->Name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <?php if (!$ticket_valid) : ?>
            <span class='error'>Required Field</span>
        <?php endif; ?>
        <div>
            <textarea rows="20" cols="90"
                      placeholder="Type Question Here"
                      name="ticket-text"
            required></textarea>
        </div>
        <div>
            <button class="submit-ticket" name="submit"> Submit Ticket</button>
        </div>
<!--    </form>-->

    <div class="possible-answers"></div>
</div>

<script type="text/javascript" src="javascript/new-ticket.js"></script>