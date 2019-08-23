---
site: MMP 460 Multimedia Project Lab
categories: wordpress 
---

## The WordPress Loop

The WordPress *Loop* is PHP/HTML code that displays the content of the posts or pages. For Post pages or other pages that include multiple posts, the Loop code will loop through all relevant posts and display them in a chronological order.

Simple loop for page templates (page.php):

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>

        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

This loop does not include date, author and other post’s metadata. For a loop for blog templates (index.php), that includes information such as author, date, category and comments use the following code:

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <article class="blogPost">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <small><?php the_date(); ?> by <?php the_author(); ?></small>

        <?php the_content(); ?>
        <small>Category: <?php the_category(', ') ?> | <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)'))?> | <?php edit_post_link('Edit'); ?></small>
        </article>

        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

More about the loop in the [WordPress Codex](http://codex.wordpress.org/The_Loop).

##  Loop files

A recommended practice is to store the loop code in its own file and to reference it from the template. These loop files are stored in a directory called *template-parts* and are named content-.php. For example content-page.php or content-home.php. The default one will be called content.php. To reference a 
