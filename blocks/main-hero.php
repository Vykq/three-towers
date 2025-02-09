<section class="main-hero-block">
    <div class="container">
        <div class="main-hero-block__top">
            <?php if(get_field('title')): ?>
                <h1 class="main-hero-block__top--title"><?php echo get_field('title'); ?></h1>
            <?php endif; ?>
            <?php if(get_field('subtitle')): ?>
                <div class="main-hero-block__top--subtitle"><?php echo get_field('subtitle'); ?></div>
            <?php endif; ?>
        </div>

        <?php if(have_rows('cards')):
            $count = 1; ?>
            <div class="main-hero-block__bottom">
                <div class="main-hero-block__bottom__cards-wrapper">
                    <?php while(have_rows('cards')) : the_row(); ?>
                        <div class="main-hero-block__bottom__cards-wrapper__single-card <?php echo (get_sub_field('completed')) ? 'completed' : 'active'; ?>">
                            <div class="main-hero-block__bottom__cards-wrapper__single-card__top">
                                <div class="main-hero-block__bottom__cards-wrapper__single-card__top__step">
                                    <?php echo str_pad($count, 3, '0', STR_PAD_LEFT); ?>
                                </div>
                                <div class="main-hero-block__bottom__cards-wrapper__single-card__top__small-number">
                                    <?php
                                    if(!get_sub_field('completed')):
                                        echo get_sub_field('small_numbers');
                                    else: ?>
                                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.54998 13L0.849976 7.30001L2.27498 5.87501L6.54998 10.15L15.725 0.975006L17.15 2.40001L6.54998 13Z" fill="#1BCA95"/>
                                    </svg>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="main-hero-block__bottom__cards-wrapper__single-card__bottom">
                                <div class="main-hero-block__bottom__cards-wrapper__single-card__bottom__title">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                                <div class="main-hero-block__bottom__cards-wrapper__single-card__bottom__text">
                                    <?php echo get_sub_field('text'); ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    $count++;
                    endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>