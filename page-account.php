<?php
/*
 * Template name: Account page
 */

get_header();?>

<div class="page__account">
    <div class="container">
        <div class="page__account__wrapper">
            <div class="page__account__person-card-wrapper">
                <aside class="page__account__person-card">
                    <div class="page__account__person-card__top">
                        <div class="page__account__person-card__top__profile-picture">
                            <img src="<?php echo get_theme_file_uri() . '/assets/images/profile-pic.webp'; ?>" alt="Profile picture">
                        </div>
                        <div class="page__account__person-card__top__profile-info">
                            <a href="#" class="page__account__person-card__top__profile-info__name"><?php _e('X @NAME','tt'); ?></a>
                            <a href="#" class="page__account__person-card__top__profile-info__name"><?php _e('WALLET','tt'); ?></a>
                            <a href="#" class="page__account__person-card__top__profile-info__name"><?php _e('OTHER','tt'); ?></a>
                        </div>
                    </div>
                    <div class="page__account__person-card__bottom">
                        <div class="page__account__person-card__bottom__points">
                            <?php _e('TOTAL POINTS','tt'); ?>
                            <span class="actual-points">0,125</span>
                        </div>
                        <div class="page__account__person-card__bottom__progress-area">
                            <div class="progress-bar"></div>
                            <div class="levels">
                                <span class="progress-bar-level lvl-1"><?php _e('LVL 1','tt'); ?></span>
                                <span class="progress-bar-level lvl-2"><?php _e('LVL 2','tt'); ?></span>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="page__account__page-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();