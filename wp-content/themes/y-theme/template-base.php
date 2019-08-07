<?php
// =============================================================================
// TEMPLATE NAME: Base
// -----------------------------------------------------------------------------
// Base template.
// =============================================================================


get_header();
if (is_home()) { ?>
<div class="header-base header-default-blog">
    <div class="container">
        <div class="title-base text-center">
            <h1>
                <?php esc_attr_e("Blog","y-theme") ?>
            </h1>
        </div>
    </div>
</div>
<div class="container content">
    <?php wptf_default_blog() ?>
</div>
<?php
} else {
   wptf_the_content();
}
get_footer();
?>
