<?php 
/** This is the default page. To change the 'banner' enter the path to the new image.
 *  For consistency please upload to the img folder and change the file name in the img tag.
 */
get_header(); ?>
<div class="w3-center" id='home'>
    <div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/404_trash.png" class='w3-image'>
    </div>
<?php wp_list_pages(array( 'title_li' => '' )); ?>
</div>
<?php get_footer(); ?>
