<?php
if (!defined("ABSPATH")) {
    exit();
}

if (!isset($product) || !$product instanceof WC_Product) {
    echo __("Error: Product is unavailable.", "wp-my-product-webspark");
    return;
}

$author_id = get_post_field("post_author", $product->get_id());
$product_link = admin_url("post.php?post=" . $product->get_id() . "&action=edit");
$author_link = admin_url("user-edit.php?user_id=" . $author_id);

$action_label = "";
if ($action === "create") {
    $action_label = __("created", "wp-my-product-webspark");
} else {
    $action_label = __("updated", "wp-my-product-webspark");
}

echo sprintf(__("\"%s\" has been %s.", "wp-my-product-webspark"), esc_html($product->get_name()), $action_label) . "\n";

echo sprintf("%s: %s\n", __("Product", "wp-my-product-webspark"), esc_url($product_link));
echo sprintf("%s: %s\n", __("Avthor", "wp-my-product-webspark"), esc_url($author_link));