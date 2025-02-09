<section class="cta-block">
    <div class="cta-block__container">
        <div class="cta-block__top">
            <?php if(get_field('title')): ?>
                <h1 class="cta-block__title"><?php echo get_field('title'); ?></h1>
            <?php endif; ?>
            <?php if(get_field('subtitle')): ?>
                <div class="cta-block__subtitle"><?php echo get_field('subtitle'); ?></div>
            <?php endif; ?>
        </div>

        <div class="cta-block__card">
            <div class="cta-block__card-wrapper">
                <div class="cta-block__content">
                    <div class="cta-block__content-title"><?php echo get_field('card_title'); ?></div>
                    <div class="cta-block__content-text"><?php echo get_field('card_text'); ?></div>

                    <div class="cta-block__buttons-area">
                       <?php echo get_template_part('components/button','',['button' => get_field('card_button')]); ?>
                        <div class="cta-block__button-small-text">
                            <?php echo get_field('card_small_text'); ?>
                        </div>
                    </div>
                </div>

                <div class="cta-block__image-area">
                    <img src="<?php echo get_field('card_image'); ?>" alt="<?php echo strip_tags(get_field('title')); ?>">
                </div>
            </div>
        </div>
    </div>

</section>
