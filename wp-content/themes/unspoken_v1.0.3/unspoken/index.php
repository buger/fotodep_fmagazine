<?php get_header(); ?>

<div id="content">
    <div class="archive">

        <div class="title"><?php _e('Latest entries', 'unspoken'); ?><a href="javascript: void(0);" id="mode" class="<?php if ($_COOKIE['mode'] == 'grid') echo 'flip'; ?>"></a></div>

        <?php get_template_part('loop'); ?>

        <?php get_template_part('pagination'); ?>

    </div> <!-- .archive -->
</div> <!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
