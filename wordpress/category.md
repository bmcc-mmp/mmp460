---
site: MMP 460 Multimedia Project Lab
categories: wordpress
---

## Show a number of posts from a certain category only

Above your loop code add (type your category name and desired number of posts):

          <?php query_posts('category_name=cat_name&posts_per_page=10'); ?>
          
If you plan to have another loop on the page that will show post from another category you must reset the WP loop with

        <?php wp_reset_query(); ?>
        
placed at the top of the loop code.
