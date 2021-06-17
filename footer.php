            </div><!-- закрываем открытый в header блок container -->
                <footer class="block-footer">
                    <div class="footer-container">
                        <div class="footer-logo">
                            <div class="footer-logo__name"><a href="http://liftcom-group.ru/" class="footer-logo__name_link footer-ancor">ЛИФТКОМ</a></div>
                            <div class="footer-logo__line"></div>
                            <div class="footer-logo__contact">
                                <a class="footer-ancor" href="tel:+79858566300">8&nbsp;(985)&nbsp;856 6300</a>
                            </div>
                        </div>   
                        <div class="footer-contact">
                            <a class="footer-ancor" href="https://goo.gl/maps/UCfHvgtEWrxCS5XZ7">123456, Одинцово, ул. Ленина, 10</a>
                            <a class="tel footer-ancor" href="tel:+79858566300">8&nbsp;(985)&nbsp;856 6300</a>
                            <a class="mail footer-ancor" href="mailto:liftcom_info@mail.ru">liftcom_info@mail.ru</a>
                            <a class="developer footer-ancor" href="#">Разработано kubyshkin.r</a>
                        </div>

                        <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-menu-1',
                                        'container' => 'div',
                                        'container_class' => 'footer-menu-one',
                                        'menu_class' => false,
                                    )
                                );
                            ?>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer-menu-2',
                                    'container' => 'div',
                                    'container_class' => 'footer-menu-two',
                                    'menu_class' => false,
                                )
                            );
                            ?>

                    </div>
                </footer>    

            <?php wp_footer(); ?>
                
    </body>
</html> 
