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
 * @package Let`s_Rock
 */

get_header(); ?>
<?php /*
    <section class="members-section clearfix">
        <div class="container-main">
            <div class="heading">
                <h2 class="second-heading">INTRODUCING
                    <span class="third-heading">
                    Our members
                </span>
                </h2>
            </div>
            <div class="custom-navigation">
                <ul class="custom-arrows-introducing">
                    <li>
                        <a href="#" class="flex-prev">
                            <i class="fa fa-chevron-left" aria-hidden="true" title="previous"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex-next">
                            <i class="fa fa-chevron-right" aria-hidden="true" title="next"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flexslider2 clearfix">
                <ul class="slides">
                    <li class="member">
                        <a href="#" class="member-link" target="_self">
                            <img src="images/member-1.png" alt="Jone Smith" class="member-image">
                            <div class="member-desc">
                                <h4 class="member-name">Jone Smith</h4>
                                <p class="member-genre">Vocal</p>
                                <ul class="socials-items members">
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-facebook" aria-hidden="true" title="facebook">
                                            <span class="like-number">
                                                32k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true" title="twitter">
                                            <span class="like-number">
                                                52k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-google-plus" aria-hidden="true" title="google-plus">
                                            <span class="like-number">
                                                23k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="member">
                        <a href="#" class="member-link" target="_self">
                            <img src="images/member-2.png" alt="Rendi Outhor" class="member-image">
                            <div class="member-desc">
                                <h4 class="member-name">Rendi Outhor</h4>
                                <p class="member-genre">Drum</p>
                                <ul class="socials-items members">
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-facebook" aria-hidden="true" title="facebook">
                                            <span class="like-number">
                                                32k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true" title="twitter">
                                            <span class="like-number">
                                                52k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-google-plus" aria-hidden="true" title="google-plus">
                                            <span class="like-number">
                                                23k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="member">
                        <a href="#" class="member-link" target="_self">
                            <img src="images/member-3.png" alt="Renes Odim" class="member-image">
                            <div class="member-desc">
                                <h4 class="member-name">Renes Odim</h4>
                                <p class="member-genre">Guitar</p>
                                <ul class="socials-items members">
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-facebook" aria-hidden="true" title="facebook">
                                            <span class="like-number">
                                                32k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true" title="twitter">
                                            <span class="like-number">
                                                52k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-google-plus" aria-hidden="true" title="google-plus">
                                            <span class="like-number">
                                                23k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="member">
                        <a href="#" class="member-link" target="_self">
                            <img src="images/member-1.png" alt="Jone Smith" class="member-image">
                            <div class="member-desc">
                                <h4 class="member-name">Jone Smith</h4>
                                <p class="member-genre">Vocal</p>
                                <ul class="socials-items members">
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-facebook" aria-hidden="true" title="facebook">
                                            <span class="like-number">
                                                32k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true" title="twitter">
                                            <span class="like-number">
                                                52k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-google-plus" aria-hidden="true" title="google-plus">
                                            <span class="like-number">
                                                23k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="member">
                        <a href="#" class="member-link" target="_self">
                            <img src="images/member-2.png" alt="Rendi Outhor" class="member-image">
                            <div class="member-desc">
                                <h4 class="member-name">Rendi Outhor</h4>
                                <p class="member-genre">Drum</p>
                                <ul class="socials-items members">
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-facebook" aria-hidden="true" title="facebook">
                                            <span class="like-number">
                                                32k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true" title="twitter">
                                            <span class="like-number">
                                                52k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-google-plus" aria-hidden="true" title="google-plus">
                                            <span class="like-number">
                                                23k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="member">
                        <a href="#" class="member-link" target="_self">
                            <img src="images/member-3.png" alt="Renes Odim" class="member-image">
                            <div class="member-desc">
                                <h4 class="member-name">Renes Odim</h4>
                                <p class="member-genre">Guitar</p>
                                <ul class="socials-items members">
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-facebook" aria-hidden="true" title="facebook">
                                            <span class="like-number">
                                                32k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true" title="twitter">
                                            <span class="like-number">
                                                52k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="socials-popup">
                                        <a href="#" class="socials-link" target="_blank">
                                            <i class="fa fa-google-plus" aria-hidden="true" title="google-plus">
                                            <span class="like-number">
                                                23k
                                            </span>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="upcoming-latest">
        <div class="container-main upcoming">
            <section class="upcoming-conserts">
                <div class="heading">
                    <h2 class="second-heading">
                        UPCOMING
                        <span class="third-heading">
                        Consert
                    </span>
                    </h2>
                </div>
                <div class="upcoming-consert-details">
                    <div class="consert-image">
                        <a href="#" class="consert-image-link" target="_self">
                            <img src="images/Texas.png" alt="Texas Rock Nation 2016" title="Texas Rock Nation 2016">
                        </a>
                    </div>
                    <div class="consert-details">
                        <h4 class="consert-details-heading">Texas Rock Nation 2016</h4>
                        <table>
                            <tr>
                                <td>Location</td>
                                <td>:</td>
                                <td>31 Great Smith Street, UK</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>:</td>
                                <td> July 13, 2017</td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>:</td>
                                <td>10:00 AM</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>$40</td>
                            </tr>
                        </table>
                        <a href="#" class="purchase-link-section" target="_blank">purchase ticket</a>
                    </div>
                </div>
                <div class="progress-bar-upcoming">
                    <div class="progress-bar-string"></div>
                </div>
            </section>
            <section class="latest-video">
                <div class="heading">
                    <h2 class="second-heading">LATEST
                        <span class="third-heading">
                        Video
                    </span>
                    </h2>
                </div>
                <div class="custom-navigation">
                    <ul class="custom-arrows-video">
                        <li>
                            <a href="#" class="flex-prev">
                                <i class="fa fa-chevron-left" aria-hidden="true" title="previous"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex-next">
                                <i class="fa fa-chevron-right" aria-hidden="true" title="next"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flexslider3">
                    <ul class="slides">
                        <li>
                            <iframe width="372" height="290"
                                    src="https://www.youtube.com/embed/HIsGEAhNNTc?rel=0&amp;controls=0&amp;showinfo=0"
                                    frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <section class="founder" id="learn-more-popup">
        <div class="container-main">
            <p class="cantus-founder">
                <img src="images/cantus-founder.png" alt="Cantus founder 1982" class="cantus-founder-image">
            </p>
            <div class="container-founder">
                <h2 class="section-heading">Our Founder staying in our hearts</h2>
                <p class="section-desc">
                    1982 <span class="cantus">cantus</span> Start jurny and now it‘s top class Rock Band in the
                    California.
                </p>
                <a href="#learn-more-popup" class="learn-more-link" target="_self">Learn more</a>
                <div class="popup">
                    <div class="popup-block">
                        <h5>Kurt Donald Cobain</h5>
                        <p>Kurt Donald Cobain (February 20, 1967 – April 5, 1994) was an American singer, songwriter,
                            and
                            musician. Born in Aberdeen, Washington, Cobain formed the band Nirvana with Krist Novoselic
                            and
                            Aaron Burckhard in 1987 and established it as part of the Seattle music scene which later
                            became
                            known as grunge. Nirvana's debut album Bleach was released on the independent record label
                            Sub
                            Pop in 1989.</p>
                        <a href="#learn-more-popup" class="close-popup-link">Close window</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-instagram">
        <div class="container-main popular">
            <section class="polular-songs">
                <div class="heading">
                    <h2 class="second-heading">POPULAR
                        <span class="third-heading">
                        Songs
                    </span>
                    </h2>
                </div>
                <iframe width="100%" height="166" scrolling="no" frameborder="no"
                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/298569188&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>
                <ul class="song-list">
                    <li class="song-item">01. My heart is dancing</li>
                    <li class="song-item">05. My heart is dancing</li>
                    <li class="song-item">09. My heart is dancing</li>
                    <li class="song-item">02. Good day</li>
                    <li class="song-item">06. Good day</li>
                    <li class="song-item">10. Good day</li>
                    <li class="song-item">03. Life for rent</li>
                    <li class="song-item">07. Life for rent</li>
                    <li class="song-item">11. Life for rent</li>
                    <li class="song-item">04. Hello It’s me</li>
                    <li class="song-item">08. Hello It’s me</li>
                    <li class="song-item">12. Hello It’s me</li>
                </ul>
            </section>
            <section class="instagram-feed">
                <div class="heading">
                    <h2 class="second-heading">INSTAGRAM
                        <span class="third-heading">
                        Feed
                    </span>
                    </h2>
                </div>
                <ul class="instagram-list">
                    <li class="instagram-image-item">
                        <a href="#" class="instagram-image-link" target="_blank">
                            <img src="images/insta-1.png" alt="Instagram account" class="instagram-image">
                        </a>
                    </li>
                    <li class="instagram-image-item">
                        <a href="#" class="instagram-image-link" target="_blank">
                            <img src="images/insta-2.png" alt="Instagram account" class="instagram-image">
                        </a>
                    </li>
                    <li class="instagram-image-item">
                        <a href="#" class="instagram-image-link" target="_blank">
                            <img src="images/insta-3.png" alt="Instagram account" class="instagram-image">
                        </a>
                    </li>
                    <li class="instagram-image-item">
                        <a href="#" class="instagram-image-link" target="_blank">
                            <img src="images/insta-4.png" alt="Instagram account" class="instagram-image">
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </section>
    <section class="download app">
        <div class="container-main image">
            <div class="container-section">
                <h2 class="section-heading">Download Our Official Apps</h2>
                <p class="section-desc">
                    Never stop listening. Take your playlists and likes wherever you go.
                </p>
                <ul class="download-store-list">
                    <li class="store-item">
                        <a href="#" class="app-store-link" target="_blank"></a>
                    </li>
                    <li class="store-item">
                        <a href="#" class="googleplay-link" target="_blank"></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="subscription">
        <div class="container-form">
            <form action="#" id="newsletter" name="newsletter" method="post">
                <input type="email" id="email" name="email" required="required" placeholder="subscribe newsletter"
                       class="email">
                <button><i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </section>
*/; ?>
<?php
get_sidebar();
get_footer();



