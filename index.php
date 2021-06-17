<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liftcom
 */

get_header();
?>

</div><!-- container -->
<div class="affiche">
    <div class="affiche__tagline">
        <h1 class="affiche__h1">ОБСЛУЖИВАНИЕ ЛИФТОВ</h1>
        <p class="affiche__p">Качество. Надежность. Скорость.</p>
    </div>
</div>

<div class="wrapper-body">
       <div class="container">
           <div class="services">
                <div class="delimiter"></div>
                <h2 class="index__h2">Услуги</h2>
                  <div class="block-services">
                    <div class="block-containers">
                        <a href="/repair-of-elevators/">
                            <div class="circle rem"></div>
                            <h4>ремонт лифтов</h4>
                        </a>
                    </div>
                    <div class="block-containers">
                        <a href="/maintenance/">
                            <div class="circle to"></div>
                            <h4>техническое обсулживание</h4>
                        </a>
                    </div>
                    <div class="block-containers">
                        <a href="/emergency-service/">
                            <div class="circle ai"></div>
                            <h4>аварийное обслуживание</h4>
                        </a>
                    </div>
                    <div class="block-containers">
                        <a href="/technical-examination/">
                            <div class="circle tos"></div>
                            <h4>техническое освидетельствование</h4>
                        </a>
                    </div>
                    <div class="block-containers">
                        <a href="/dispatcher/">
                            <div class="circle dis"></div>
                            <h4>диспечеризация</h4>
                        </a>
                    </div>
                    <div class="block-containers">
                        <a href="/modernization/">
                            <div class="circle mm"></div>
                            <h4>модернизация</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="company">
                <div class="company__bg"></div>
                <div class="company__left">
                    <div class="delimiter"></div>
                    <h2 class="index__h2">о компании</h2>
                    <p class="index__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea                                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="company__right">
                    <div class="company__block5 fl1">
                        <p class="number">18</p>
                        <p>сотрудников</p>
                    </div>
                    <div class="company__block5 fl2">
                        <p class="number">26</p>
                        <p>обслуживаемых объектов</p>
                    </div>
                    <div class="company__block5 bg1 fl3"></div>
                    <div class="company__block5 bg2 fl4"></div>
                    <div class="company__block5 fl5">
                        <p class="number">41</p>
                        <p>округов мо</p>
                    </div>
                </div>
            </div>            
        </div>

        <div class="map" onclick="this.className = (this.className == 'map' ? 'map-new' : 'map')"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.981821013512!2d37.23728721600395!3d55.758817998995326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5451cba63d221%3A0x832ba5aaab8f876f!2z0YPQuy4g0JvQtdC90LjQvdCwLCAxMCwg0JjQu9GM0LjQvdGB0LrQvtC1LCDQnNC-0YHQutC-0LLRgdC60LDRjyDQvtCx0LsuLCAxNDM0MjE!5e0!3m2!1sru!2sru!4v1618664793213!5m2!1sru!2sru" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>       
    </div>
     <div class="container"><!-- закрывается в footer -->
    <style>
        .container{
            min-height: 0;
        }
    </style>
<?php
get_footer();
