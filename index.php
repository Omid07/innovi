<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desher-khobor
 */

get_header(); ?>

    <div class="logo"></div>

    <div class="morph-button morph-button-overlay morph-button-fixed">
        <button type="button"></button>
        <div class="morph-content">
            <div>
                <div class="content-style-overlay">
                    <span class="icon icon-close">Close the overlay</span>
                    <ul class="menu-in-overlay">
                        <li><div class="cl-effect-11"><a href="index.html" data-hover="HOME">HOME</a></div></li>
                        <li><div class="cl-effect-11"><a href="about.html" data-hover="ABOUT">ABOUT</a></div></li>
                        <li><div class="cl-effect-11"><a href="work.html" data-hover="WORK">WORK</a></div></li>
                        <li><div class="cl-effect-11"><a href="services.html" data-hover="SERVICES">SERVICES</a></div></li>
                        <li><div class="cl-effect-11"><a href="contact.html" data-hover="CONTACT">CONTACT</a></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="myContainer">
        <div class="ms-left">
            <div class="ms-section" id="left1">
                <div class="just_pattern"></div>
                <ul class="flippy">
                    <li>
                        <div class="big-text">CREATIVITY</div>
                        <div class="text-line"></div>
                        <div class="small-text-down">Lab for Dreams</div>
                    </li>
                    <li>
                        <div class="big-text">INNOVATION</div>
                        <div class="text-line"></div>
                        <div class="small-text-down">Solution for idea seekers</div>
                    </li>
                    <li>
                        <div class="big-text">EXCELLENCE</div>
                        <div class="text-line"></div>
                        <div class="small-text-down">Factory for concept exercise</div>
                    </li>
                </ul>
            </div>
            <div class="ms-section" id="left2">
                <div class="black-back"></div>
                <div class="sections-link"><div class="cl-effect-11"><a href="about.html" data-hover="find out more">find out more</a></div></div>
            </div>
            <div class="ms-section" id="left3">
                <div class="just_pattern"></div>
                <div class="big-text-down">our work</div>
                <div class="text-line-down"></div>
                <ul class="flippy">
                    <li>
                        <div class="small-text-down">We have a solid vision of lifting our clients to stand out.</div>
                    </li>
                    <li>
                        <div class="small-text-down">Our design is a blend of classic and modern elements.</div>
                    </li>
                </ul>
            </div>
            <div class="ms-section" id="left4">
                <div class="black-back"></div>
                <div class="sections-link"><div class="cl-effect-11"><a href="services.html" data-hover="Find out more">Find out more</a></div></div>
            </div>
            <div class="ms-section" id="left5">
                <div id="map"></div>
                <div class="map-shadow"></div>
            </div>
        </div>

        <div class="ms-right">
            <div class="ms-section" id="right1">
                <div class="black-back"></div>
                <div class="scrolling">scroll down</div>
            </div>
            <div class="ms-section" id="right2">
                <div class="just_pattern"></div>
                <div class="big-text-down">ABOUT US</div>
                <div class="text-line-down"></div>
                <ul class="flippy">
                    <li>
                        <div class="small-text-down">We strive hard for perfection to create a ground-breaking output.</div>
                    </li>
                    <li>
                        <div class="small-text-down">Let us provide you a higher level of uniqueness and quality.</div>
                    </li>
                </ul>
            </div>
            <div class="ms-section" id="right3">
                <div class="black-back"></div>
                <div class="sections-link"><div class="cl-effect-11"><a href="work.html" data-hover="discover">discover</a></div></div>
            </div>
            <div class="ms-section" id="right4">
                <div class="just_pattern"></div>
                <div class="big-text-down">services</div>
                <div class="text-line-down"></div>
                <ul class="flippy">
                    <li>
                        <div class="small-text-down">GRAPHICS DESIGN</div>
                    </li>
                    <li>
                        <div class="small-text-down">BRANDING</div>
                    </li>
                    <li>
                        <div class="small-text-down">PRINTING SERVICES</div>
                    </li>
                    <li>
                        <div class="small-text-down">EVENTS SUPPORT</div>
                    </li>
                </ul>
            </div>
            <div class="ms-section" id="right5">
                <div class="black-back"></div>
                <div class="sections-link"><div class="cl-effect-11"><a href="contact.html" data-hover="get in touch">get in touch</a></div></div>
            </div>
        </div>
    </div>

<?php
get_sidebar();
get_footer();
