<?php
/**
 * product.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */
?>
<div>
    <a href="index.php?module=Product&data=<?php echo $product->get_name(); ?>">
        <div style="height: 40px; width: 100px; margin: 10px; border: solid">
            <b><?php echo $product->get_name(); ?></b>
        </div>
    </a>
</div>

