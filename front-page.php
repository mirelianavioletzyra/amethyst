<?php
/**
 *
 */

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_content_sidebar_wrap', 'front_page_content');

function front_page_content() {

  ?>

  <div class="hero" style="background: url('<?php the_field( 'hero_img' ); ?>')">
    <div class="inner-wrap">
      <h1><?php the_field( 'headding' ); ?></h1>
      <h2 class="tagline-1"><?php the_field( 'tagline_one' ); ?></h2>
      <h3 class="tagline-2"><?php the_field( 'tagline_two' ); ?></h3>

      <section class="buttons">
        <a href="<?php the_field( 'button_one_link' ); ?>" class="purple-button"><?php the_field( 'button_one_text' ); ?></a>
        <a href="<?php the_field( 'button_two_link' ); ?>" class="light-purple-button"><?php the_field( 'button_two_text' ); ?></a>
      </section>

      <a href="<?php the_field( 'down_arrow_link' ); ?>" class="down-button"><img src="<?php the_field( 'down_arrow' ); ?>"></a>
    </div>
  </div>

  <div id="about" class="about" style="background: url('<?php the_field( 'about_background' ); ?>') no-repeat center;">
    <h2><?php the_field( 'about_headding' ); ?></h2>

    <section class="text">
      <?php the_field( 'about_content' ); ?>
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
