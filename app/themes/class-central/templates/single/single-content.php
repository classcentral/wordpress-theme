<main class="main col-md-8" role="main">

    <article <?php post_class(); ?>>
      <header>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <div class="post-header-info">
          <span class="read-icon">
            <svg class="icon icon-read-icon" viewBox="0 0 26 32"><use xlink:href="#icon-read-icon"></use></svg>
          </span>
          <span class="read-length"><?php echo cc_get_reading_time(); ?> read&nbsp;</span>
          <span class="written-by">written by&nbsp;</span>
          <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="cc-post-author"><?php echo cc_get_author_name(); ?></a>
        </div>
        <?php the_content(); ?>


        <div class="wideBlock">
          <div class="reviewWidget">

            <div class="reviewWidget_topBar">
              <svg role="logo" aria-label="class central logo" viewBox="0 0 332 32" class="class-central-logo">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cc-logo"></use>
              </svg>
              <span class="reviewWidget_topBar_title">Review</span>
              <a href="https://www.class-central.com" class="reviewWidget_topBar_link">class-central.com</a>
            </div>

            <div class="reviewWidget_header">
              <span class="reviewWidget_title">A Quick Introduction to Interactive Programming using only Python.</span>
            </div>

            <div class="reviewWidget_body">
              <div class="reviewWidget_info">
                <div class="reviewWidget_info_block reviewWidget_info_block-provider">
                  <div class="reviewWidget_info_icon">
                    <svg class="icon icon-provider-icon" viewBox="0 0 38 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-provider-icon"></use></svg>
                  </div>
                  <div class="reviewWidget_info_text">Coursera</div>
                </div>
                <div class="reviewWidget_info_block reviewWidget_info_block-institution">
                  <div class="reviewWidget_info_icon">
                    <svg class="icon icon-institution-icon" viewBox="0 0 22 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-institution-icon"></use></svg>
                  </div>
                  <div class="reviewWidget_info_text">MIT</div>
                </div>
                <div class="reviewWidget_info_block reviewWidget_info_block-duration">
                  <div class="reviewWidget_info_icon">
                    <svg class="icon icon-calendar-icon" viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-calendar-icon"></use></svg>
                  </div>
                  <div class="reviewWidget_info_text">3 wks</div>
                </div>
                <div class="reviewWidget_info_block reviewWidget_info_block-intensity">
                  <div class="reviewWidget_info_icon">
                    <svg class="icon icon-calendar-icon" viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-calendar-icon"></use></svg>
                  </div>
                  <div class="reviewWidget_info_text">5-8 hpw</div>
                </div>
                <div class="reviewWidget_info_block reviewWidget_info_block-difficulty">
                  <div class="reviewWidget_info_icon">
                    <svg class="icon icon-calendar-icon" viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-calendar-icon"></use></svg>
                  </div>
                  <div class="reviewWidget_info_text">Hard</div>
                </div>
              </div>
              <div class="reviewWidget_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
              </div>
            </div>

            <div class="reviewWidget_footer">
              <div class="reviewWidget_footer_ccRating">
                <svg class="icon icon-cc-logo-circle" viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cc-logo-circle"></use></svg>
                <div class="starRating rating45">
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="reviewWidget_footer_communityRating">
                <span class="communityRating_text">Community rating</span>
                <div class="starRating rating30 starRating-small starRating-gray">
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                  <div class="starRating_star">
                    <svg class="starRating_starShape starRating_starShape-blank">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-full">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                    </svg>
                    <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                    </svg>
                  </div>
                </div>
                <a href="#" class="number-of-ratings-bubble">34</a>
              </div>

              <a href="#" class="reviewWidget_footer_button">Go To Class</a>



            </div>

          </div>
        </div>


      </div>
      <footer>
        <?php get_template_part('templates/single/single-footer'); ?>
      </footer>
    </article>

</main><!-- /.main -->


