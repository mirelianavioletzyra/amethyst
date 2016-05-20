<?php
/**
 *
 */

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_content_sidebar_wrap', 'front_page_content');

function front_page_content() {
  echo 'helo dicks';

  ?>

  <div class="hero">
    <h1></h1>
    <span class="tagline-1"></span>
    <span class="tagline-2"></span>

    <section class="buttons">
      <a href="#" class="purple-button"></a>
      <a href="#" class="light-purple-button"></a>
    </section>

    <a href="#" class="down-button"><img src="#"></a>
  </div>

  <div class="about">
    <h2></h2>

    <section class="text">
    </section>
  </div>

  <div class="portfolio">
  </div>

  <div class="services">
  </div>

  <div class="contact-us">
  </div>

  <?php
}

 genesis();
