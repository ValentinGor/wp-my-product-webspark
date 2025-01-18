<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!isset($product) || !$product instanceof WC_Product) {
    echo "<p>" . __("Error: Product data is unavailable.", "wp-my-product-webspark") . "</p>";
    return;
}

$author_id = get_post_field('post_author', $product->get_id());
$product_link = admin_url('post.php?post=' . $product->get_id() . '&action=edit');
$author_link = admin_url('user-edit.php?user_id=' . $author_id);

?>
<p>
    <?php 
    echo sprintf(
        __("<strong>%s</strong> has been %s.", "wp-my-product-webspark"),
        esc_html($product->get_name()),
        
        $action_label = '';
        if ($action === 'create') {
            $action_label = __("created", "wp-my-product-webspark");
        } else {
            $action_label = __("updated", "wp-my-product-webspark");
        }
    ); 
    ?>
</p>
<ul>
    <li><a href="<?php echo esc_url($product_link); ?>"><?php echo __("Product", "wp-my-product-webspark"); ?></a></li>
    <li><a href="<?php echo esc_url($author_link); ?>"><?php echo __("Avthor", "wp-my-product-webspark"); ?></a></li>
</ul>
