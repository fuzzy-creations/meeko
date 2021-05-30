<?php get_header(); ?>

<main class="archive-main">
    <!-- <section class="archive-main-header">
        <div class="archive-main-header__image1">
        </div>
        <div class="archive-main-header__container">
        <div class="archive-main-header__container__title"><?php the_archive_title(); ?></div>
        <div class="archive-main-header__container__sub">
            <?php the_archive_description(); ?>
        </div>
        <div class="archive-main-header__container__search">
            See All
        </div>
        </div>
        <div class="archive-main-header__image2">
        </div>
    </section> -->


      <section class="blog-main-gallery">
      <?php
    while(have_posts()) {
      the_post() ?>

<div class="blog-main-gallery__item">
        <div class="blog-main-gallery__item__image">
            <a href="<?php the_permalink() ?>">
                <?php if (has_post_thumbnail()) { the_post_thumbnail();} else { ?>
                    <img src="<?php echo get_theme_file_uri('/images/misc/no-media.png'); ?>" />
                <?php } ?>
            </a>
        </div>
        <ul class="blog-main-gallery__item__category">

            <?php
            $categories = get_the_category( get_the_ID() );
            foreach($categories as $category) { 
                $color = get_term_meta($category->term_id, 'cat_color', true);
            ?>
    <li class="blog-main-gallery__item__category--element" style="background:<?php echo $color; ?>21">
        <a href="<?php echo get_category_link( $category->term_id ); ?>" style="color:  <?php echo $color; ?>" >
            <?php echo $category->name ; ?>
        </a>
    </li>
            <?php 
            }
            ?>    
        </ul>
        <div class="blog-main-gallery__item__title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title() ?>
            </a>
        </div>
        <div class="blog-main-gallery__item__short">
            <?php if (has_excerpt()) {
                echo get_the_excerpt();
            } else {
                $titleLength = str_word_count(get_the_title());
                $cutLength = 30 - $titleLength;

                echo wp_trim_words(get_the_content(), $cutLength);
            } ?>
        </div>
        <div class="blog-main-gallery__item__author">
            <div class="blog-main-gallery__item__author__image">
                <?php $imageURL = get_avatar_url(get_the_author_meta('ID')); ?>
                <img src="<?php echo $imageURL ?>" />
            </div>
            <div class="blog-main-gallery__item__author__name"><?php the_author_posts_link() ?></div>
            <div class="blog-main-gallery__item__author__date">
                <span><i class="far fa-calendar"></i></span>
                <?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?>
            </div>
        </div>
    </div> 
        <?php } ?>      
    </section>
        </main>

<?php get_footer(); ?>