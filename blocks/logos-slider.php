<section class="logo-slider">
    <div class="logo-slider__container">
        <div class="logo-slider__header">
            <?php if(get_field('title')): ?>
                <h1 class="logo-slider__title"><?php echo get_field('title'); ?></h1>
            <?php endif; ?>
            <?php if(have_rows('cards')) : ?>
                <div class="logo-slider__controls">
                    <button class="logo-slider__arrow logo-slider__arrow--prev">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M24.0575 18.5575L20.6225 22L24.0575 25.4425L23 26.5L18.5 22L23 17.5L24.0575 18.5575Z" fill="white"/>
                            </g>
                        </svg>
                    </button>
                    <button class="logo-slider__arrow logo-slider__arrow--next">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M19.9425 18.5575L23.3775 22L19.9425 25.4425L21 26.5L25.5 22L21 17.5L19.9425 18.5575Z" fill="white"/>
                            </g>
                        </svg>
                    </button>
                </div>
            <?php endif; ?>
        </div>

        <?php if(have_rows('cards')): ?>
            <div class="logo-slider__content">
                <div class="logo-slider__slider splide" role="group" aria-label="<?php _e('Cards slider','tt'); ?>">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while(have_rows('cards')) : the_row(); ?>
                                <li class="logo-slider__slide splide__slide">
                                    <div class="logo-slider__slide-wrapper">
                                        <div class="logo-slider__slide-content">
                                            <div class="logo-slider__slide-title"><?php echo get_sub_field('card_title'); ?></div>
                                            <div class="logo-slider__slide-text"><?php echo get_sub_field('card_subtitle'); ?></div>

                                            <div class="logo-slider__earn">
                                                <div class="logo-slider__earn-text"><?php _e('Earn','tt'); ?></div>
                                                <div class="logo-slider__earn-points"><?php echo get_sub_field('earn_points'); ?></div>
                                            </div>
                                        </div>
                                        <div class="logo-slider__slide-meta">
                                            <div class="logo-slider__slide-meta-content">
                                                <div class="logo-slider__slide-number">
                                                    <?php echo str_pad(get_row_index(), 3, '0', STR_PAD_LEFT); ?>
                                                </div>
                                                <div class="logo-slider__slide-logo">
                                                    <img src="<?php echo get_sub_field('logo'); ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
