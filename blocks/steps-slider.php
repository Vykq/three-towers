<section class="steps-block">
    <div class="steps-block__container">
        <div class="steps-block__top">
            <?php if(get_field('title')): ?>
                <h1 class="steps-block__title"><?php echo get_field('title'); ?></h1>
            <?php endif; ?>
            <?php if(have_rows('step')) : ?>
                <div class="steps-block__arrows">
                    <button class="steps-block__arrow steps-block__arrow--prev">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                 <path d="M24.0575 18.5575L20.6225 22L24.0575 25.4425L23 26.5L18.5 22L23 17.5L24.0575 18.5575Z" fill="white"/>
                            </g>
                        </svg>
                    </button>
                    <button class="steps-block__arrow steps-block__arrow--next">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M19.9425 18.5575L23.3775 22L19.9425 25.4425L21 26.5L25.5 22L21 17.5L19.9425 18.5575Z" fill="white"/>
                            </g>
                        </svg>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <?php if(have_rows('step')): ?>
            <div class="steps-block__bottom">
            <div class="steps-block__bottom--slider-area">
                <div class="splide steps-block__slider" role="group" aria-label="<?php _e('Cards slider','tt'); ?>">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while(have_rows('step')) : the_row(); ?>
                                <li class="splide__slide steps-block__slide <?php echo (get_sub_field('completed')) ? ' steps-block__slide--completed' : ' steps-block__slide--active'; ?>">
                                    <div class="steps-block__slide-top">
                                        <div class="steps-block__slide-number">
                                            <?php echo str_pad(get_row_index(), 3, '0', STR_PAD_LEFT); ?>
                                        </div>

                                        <?php if(get_sub_field('completed')) : ?>
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.54998 13L0.849976 7.30001L2.27498 5.87501L6.54998 10.15L15.725 0.975006L17.15 2.40001L6.54998 13Z" fill="#1BCA95"/>
                                            </svg>
                                        <?php else: ?>
                                            <div class="steps-block__small-number"><?php echo get_sub_field('small_number'); ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="steps-block__slide-title">
                                        <?php echo get_sub_field('step_title'); ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        <?php endif; ?>
    </div>
</section>
