<?php 
/*
  * Template name: Home
  * */
get_header(); 
/*

 if(ale_get_meta('descr1')){
     echo ale_get_meta('descr1');
 }

echo "Home page";

$custom_query = new WP_Query( array( 'post_type' => 'services','posts_per_page'=>'1' ) );

if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <div class="h2" ><?php the_title(); ?></div>
    <div class="contact-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>


<h1>Пагинация для Галерей</h1>
<section>
    <?php //global $query_string; query_posts($query_string.'&posts_per_page=3');

    if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
    elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
    else { $paged = 1; }


    $custom_query = new WP_Query(array('post_type'=>'gallery','posts_per_page'=>'3','paged'=>$paged));


   ?>
    <?php if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <!-- Item -->
        <div>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <div class="portfolio-text">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="by">by <?php the_author(); ?></p>
                <div class="text">
                    <?php echo ale_trim_excerpt(15); ?>
                </div>
            </div>
        </div>
    <?php endwhile;  endif;  ?>
</section>

<div class="pagination"><?php ale_page_links_custom($custom_query); ?></div>
*/



/*
 *
 *
 *
 *
 */
?>
    <div class="total">
        <div class="content">
            <div class="c-left">
                <div class="c-link-zone">
                    <ul class="c-link-list">
                        <li class="c-link"><a href="blog.html">
                            <div class="c-link-block c-lb-blog">
                                <div class="point-to-black">
                                    <div class="c-lb-text">
                                        <div class="c-lb-text-zone">
                                            <div class="c-lb-txt">Blog</div>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </li>
                        <li class="c-link"><a href="gallery.html">
                            <div class="c-link-block c-lb-price">
                                <div class="point-to-black">
                                    <div class="c-lb-text">
                                        <div class="c-lb-text-zone">
                                            <div class="c-lb-txt">Gallery</div>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </li>
                        <li class="c-link">
                            <div class="c-link-block c-lb-shop">
                                <div class="point-to-black">
                                    <div class="c-lb-text">
                                        <div class="c-lb-text-zone">
                                            <div class="c-lb-txt">Shop</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="c-right">
                <div class="content-wrap">
                    <div class="c-heading-zone">
                        <h2 class="c-header"></h2>
                    </div>
                    <div class="c-info-zone">
                        <div class="c-info">
                            <span class="sel-text">Voodoo Wake Park</span> - єдиний вейк парк у західній Україні. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
            <div class="short-blog">
                <div class="sb-blacking">
                </div>      
            </div>
        -->

        <div class="video-zone">
            <video autoplay loop id="myVideo" poster="css/img/background1.jpg">
                <source src="css/video/demo1.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>


<?php
/*
 *
 *
 *
 *
 */



get_footer();