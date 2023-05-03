    <div class="background_rectangles">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
    </div>

<?php get_header(); ?>

<div class="showcase">
        <h1 class="h1"><?php the_field('titre_de_la_page'); ?></h1>
        <p class="h1_sub --uppercase --spacing-y-4"><?php the_field('tagline'); ?></p>
        <p class="h1_sub"><?php the_field('sous-titre'); ?></p>
    </div>
    <div class="presentation">
        <div id="project" class="project --white">
            <h2 class="h2 project_left"><?php the_field('le_projet'); ?></h2>
            <div class="project_right">
                <h3 class="h3"><?php the_field('sous-titre_presentation_projet'); ?></h3>
                <p><?php the_field('paragraphe_presentation_projet'); ?></p>
                <h3 class="h3"><?php the_field('sous-titre_presentation_nft'); ?></h3>
                <p><?php the_field('paragraphe_presentation_nft'); ?></p>    
            </div>
        </div>
        <div class="off">
            <h3 class="h3"><?php the_field('sous-titre_presentation_festival'); ?></h3>
            <p><?php the_field('paragraphe_presentation_festival'); ?></p>
        </div>    
    </div>

    <?php 
    $nfts = get_field('nfts');
    if( $nfts ): ?>
    <div id="nfts" class="nfts --white">
        <?php foreach( $nfts as $post ): 
            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); 
            $alt = get_post_meta ( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
            ?>
            <div class="nfts_item">
                <h3 class="nfts_h3"><?php the_title() ?></h3>
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php echo $alt ?>" class="nfts_img"/>
            </div>
        <?php endforeach; ?>
        </div>
        <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>

<?php get_footer(); ?>