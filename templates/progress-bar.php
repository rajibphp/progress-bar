<div id="<?= is_checkout() ? 'checkout-job': 'post-job'?>">
    <ul id="progressbar">
        <li class="active">Dateneingabe</li>
        <li><?php esc_html_e('Preview', 'wp-job-manager'); ?></li>
        <li><?php _e('Choose a package', 'wp-job-manager-wc-paid-listings'); ?></li>
        <li>Checkout</li>
    </ul>
</div>