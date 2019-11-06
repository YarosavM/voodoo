    <!-- Footer -->
    <?php /*?>
    <nav class="footer-menu <?php if($post->post_type == "gallery" and !is_single()) { echo""; } elseif(is_page_template('template-contact.php') or is_page_template('template-about.php') or is_404() or is_page_template('template-award.php') or is_page_template('page-home.php')  or is_page_template('template-press.php')){  echo ""; } else { echo "no-fixed";}    ?>">

        <!-- Social -->
        <ul class="left">
            <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed" rel="external"></a></li><?php } ?>
        </ul>

        <?php if(is_page_template('page-home.php')){ ?>
        <!-- Footer Menu -->
        <div class="center">
            <ul class="nav">
                <li><span><?php echo ale_get_option('footermenutitle'); ?></span>
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </li>
            </ul>
        </div>
        <?php } ?>

        <!-- Copy -->
        <?php if (ale_get_option('copyrights')) : ?>
            <p class="right"><?php echo ale_option('copyrights'); ?></p>
        <?php else: ?>
            <p class="right">&copy; <?php _e('2013 ALL RIGHTS RESERVED', 'aletheme')?></p>
        <?php endif; ?>

    </nav>


    <?php */?>









    <footer class="footer" id="footer">
    <div class="sub-footer">
        <div class="footer-content">
            <div class="footer-content-dau">
                <div class="footer-social-links">
                    <div class="footer-main-logo">
                        <div class="voodoo-logo"></div>
                    </div>
                    <div class="fsl-zone">
                        <h2 class="fsl-header">Follow Us</h2>
                        <div class="fsl-sub-header">to get newest information, events, etc. first and never miss something important!</div>
                        <ul class="fsl-list">
                            <li class="fsl-l-el">
                                <div class="facebook-logo"></div>
                            </li>
                            <li class="fsl-l-el">
                                <div class="instagram-logo"></div>
                            </li>
                            <li class="fsl-l-el">
                                <div class="twitter-logo"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-menu">
                    <div class="footer-menu-zone">
                        <ul align="center" class="fm-list-prop">
                            <li class="fm-list-el">
                                <a href="#top" class="def-link">
                                    <div class="fm-list-el-into fml-el-main">Up</div>
                                </a>
                            </li>

                            <li class="fm-list-el">
                                <a href="index.html" class="def-link">
                                    <div class="fm-list-el-into">
                                        <ul class="fm-list-sub-prop">
                                            <li class="def">Home</li>
                                        </ul>
                                    </div>
                                </a>
                            </li>





                            <li class="fm-list-el"> 
                                <div class="fm-list-el-into">
                                    <ul class="fm-list-sub">
                                        <li class="fml-sub-el">
                                            <a href="blog.html" class="def-link">Blog</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="blog.html" class="def-link">News</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="blog.html" class="def-link">Events</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="fm-list-el">
                                <div class="fm-list-el-into">
                                    <ul class="fm-list-sub">
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Prices</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Set prices</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Corporatives/Birthdays</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Mini-shop</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="fm-list-el">
                                <a href="gallery.html" class="def-link">
                                    <div class="fm-list-el-into">Gallery</div>
                                </a>
                            </li>
                            <li class="fm-list-el">
                                <div class="fm-list-el-into">
                                    <ul class="fm-list-sub">
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Voodoo</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Contacts</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Sponsors</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Support</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Advertising</a>
                                        </li>
                                        <li class="fml-sub-el">
                                            <a href="404.html" class="def-link">Jobs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-contacts">
                    <div class="fc-zone">
                        <h2 class="fc-header">Contact Us</h2>
                        <div class="fc-block">
                            <h3 class="fc-block-header">Adress</h3>
                            <div class="fc-block-intro">Lvivs'ka oblast', Lviv, Bruhovychy, Plyazhna 15</div>
                        </div>
                        <div class="fc-block">
                            <h3 class="fc-block-header">Phone</h3>
                            <div class="fc-block-intro">+38069-1488-228<br>+38044-0691-228</div>
                        </div>
                        <div class="fc-block">
                            <h3 class="fc-block-header">Mail</h3>
                            <div class="fc-block-intro">voodoo@wake.info</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="terms-zone">
            <div class="copyright-pl">
                <div>Voodoo Wake Park &copy2015-2019. All right reserved</div>
            </div>
            <div class="developer-pl">
                Site created by 
                <span class="unique-text">
                    Valsorya
                </span>
            </div>
        </div>
    </div>
</footer>









    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>