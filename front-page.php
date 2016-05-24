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
    <h2><?php the_field( 'portfolio_headding' ); ?></h2>

    <div class="portfolio-item-wrap">
      <?php
          if( have_rows('portfolio_item') ):

          while ( have_rows('portfolio_item') ) : the_row();

          ?>
              <div class="portfolio-item">
                <div class="image-wrap">
                  <a href="<?php the_sub_field('portfolio_link'); ?>"><img src="<?php the_sub_field('portfolio_image'); ?>"></a>
                </div>

                <div class="portfolio-caption"><?php the_sub_field('portfolio_caption'); ?></div>
              </div>

          <?php

          endwhile;

      else :

          // no rows found

      endif;

      ?>
    </div>
  </div>

  <div class="services">
    <h2><?php the_field( 'services_headding' ); ?></h2>

    <div class="service-wrap">
      <?php

          if( have_rows('service') ):

              while ( have_rows('service') ) : the_row();

                  ?>

                  <div class="service">
                    <img src="<?php the_sub_field('service_image'); ?>">
                    <h3><?php the_sub_field('service_name'); ?></h3>
                    <p><?php the_sub_field('service_description'); ?></p>
                  </div>

                  <?php
              endwhile;

          else :

              // no rows found

          endif;

      ?>
    </div>
  </div>

  <div class="contact-us">
    <h2><?php the_field( 'contact_headding' ); ?></h2>

    <div class="contact-wrap">

      <div class="contact-form">
        <?php
          $form_object = get_field('contact_form');
          gravity_form_enqueue_scripts($form_object['id'], true);
          gravity_form($form_object['id'], true, true, false, '', true, 1);
        ?>
      </div>

      <div class="contact-info">
        <h3><?php the_field( 'contact_info_headding' ); ?></h3>

        <section class="left-column">
          <?php the_field( 'contact_info_left' ); ?>
        </section>

        <section class="right-column">
          <?php the_field( 'contact_info_right' ); ?>
        </section>
      </div>
    </div>
  </div>

  <?php
}

 genesis();
