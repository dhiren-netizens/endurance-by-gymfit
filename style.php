<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!is_admin()) {
    $theme_option = get_option('redux_demo');
    ?>
    <style>
        .banner-wrapper .imgBlock{
            <?php if(( isset( $theme_option['endurance_banner_line_pattern_image']['url'] ) && !empty( $theme_option['endurance_banner_line_pattern_image']['url'] )) && ( isset( $theme_option['endurance_general_background_image']['url'] ) && !empty( $theme_option['endurance_general_background_image']['url'] ))) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_banner_line_pattern_image']['url']); ?>), url(<?php echo esc_url($theme_option['endurance_general_background_image']['url']); ?>);
            <?php } ?>
        }
        .banner-wrapper .imgBlock:before {
            <?php if( isset( $theme_option['endurance_general_background_color1'] ) && !empty( $theme_option['endurance_general_background_color1'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_general_background_color1']); ?>;
                opacity: 0.5;
            <?php } ?>
        }
        .banner-wrapper .imgBlock:after {
            <?php if( isset( $theme_option['endurance_general_background_color2'] ) && !empty( $theme_option['endurance_general_background_color2'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_general_background_color2']); ?>;
                opacity: 0.5;
            <?php } ?>
        }
        .banner-wrapper:before {
            <?php if( isset( $theme_option['endurance_general_background_color1'] ) && !empty( $theme_option['endurance_general_background_color1'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_general_background_color1']); ?>;
            <?php } ?>
        }
        .banner-wrapper:after {
            <?php if( isset( $theme_option['endurance_general_background_color2'] ) && !empty( $theme_option['endurance_general_background_color2'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_general_background_color2']); ?>;
            <?php } ?>
        }
        .success-section .success-wrapper .success-box.first-box {
            <?php if( isset( $theme_option['endurance_gear_up_learn_color'] ) && !empty( $theme_option['endurance_gear_up_learn_color'] ) && is_array( $theme_option['endurance_gear_up_learn_color'] )) { ?>
                background: linear-gradient(180deg, <?php echo esc_attr( $theme_option['endurance_gear_up_learn_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_learn_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_gear_up_learn_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_learn_color']['gradient-reach']['to'] ). '%'; ?>);
            <?php } ?>
        }
        .success-section .success-wrapper .success-box.last-box.opacity-box {
            <?php if( isset( $theme_option['endurance_gear_up_track_color'] ) && !empty( $theme_option['endurance_gear_up_track_color'] ) && is_array( $theme_option['endurance_gear_up_track_color'] )) { ?>
                background: linear-gradient(180deg, <?php echo esc_attr( $theme_option['endurance_gear_up_track_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_track_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_gear_up_track_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_track_color']['gradient-reach']['to'] ). '%'; ?>);
            <?php } ?>
        }
        .success-section .success-wrapper .success-box .box-text span.gradient {
            <?php if( isset( $theme_option['endurance_gear_up_track_title_color'] ) && !empty( $theme_option['endurance_gear_up_track_title_color'] ) && is_array( $theme_option['endurance_gear_up_track_title_color'] )) { ?>
                background: linear-gradient(180deg, <?php echo esc_attr( $theme_option['endurance_gear_up_track_title_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_track_title_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_gear_up_track_title_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_track_title_color']['gradient-reach']['to'] ). '%'; ?>);
                background-clip: text;
            <?php } ?>
        }
        .success-section .success-wrapper .success-box.first-box.opacity-box {
            <?php if( isset( $theme_option['endurance_gear_up_improve_color'] ) && !empty( $theme_option['endurance_gear_up_improve_color'] ) && is_array( $theme_option['endurance_gear_up_improve_color'] )) { ?>
                background: linear-gradient(180deg, <?php echo esc_attr( $theme_option['endurance_gear_up_improve_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_improve_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_gear_up_improve_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_improve_color']['gradient-reach']['to'] ). '%'; ?>);
            <?php } ?>
        }
        .success-section .success-wrapper .success-box .box-text span.gradient-2 {
            <?php if( isset( $theme_option['endurance_gear_up_improve_title_color'] ) && !empty( $theme_option['endurance_gear_up_improve_title_color'] ) && is_array( $theme_option['endurance_gear_up_improve_title_color'] )) { ?>
                background: linear-gradient(180deg, <?php echo esc_attr( $theme_option['endurance_gear_up_improve_title_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_improve_title_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_gear_up_improve_title_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_improve_title_color']['gradient-reach']['to'] ). '%'; ?>);
                background-clip: text;
            <?php } ?>
        }
        .success-section .success-wrapper .success-box.last-box {
            <?php if( isset( $theme_option['endurance_gear_up_motivated_color'] ) && !empty( $theme_option['endurance_gear_up_motivated_color'] ) && is_array( $theme_option['endurance_gear_up_motivated_color'] )) { ?>
                background: linear-gradient(180deg, <?php echo esc_attr( $theme_option['endurance_gear_up_motivated_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_motivated_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_gear_up_motivated_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_gear_up_motivated_color']['gradient-reach']['to'] ). '%'; ?>);
            <?php } ?>
        }
        .about-section .about-wrapper .image-wrapper:before {
            <?php if( isset( $theme_option['endurance_general_background_color1'] ) && !empty( $theme_option['endurance_general_background_color1'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_general_background_color1']); ?>;
            <?php } ?>
        }
        .about-section .about-wrapper .image-wrapper:after {
            <?php if( isset( $theme_option['endurance_general_background_color2'] ) && !empty( $theme_option['endurance_general_background_color2'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_general_background_color2']); ?>;
            <?php } ?>
        }
        .cta-section {
            <?php if( isset( $theme_option['endurance_smart_app_line_background_image']['url'] ) && !empty( $theme_option['endurance_smart_app_line_background_image']['url'] )) { ?>
                background: url(<?php echo esc_url($theme_option['endurance_smart_app_line_background_image']['url']); ?>) no-repeat;
                background-size: contain;
                background-position: top center;
            <?php } ?>
        }
        .cta-section .cta-wrapper .cta-text {
            <?php if( isset( $theme_option['endurance_smart_app_background_color'] ) && !empty( $theme_option['endurance_smart_app_background_color'] ) && is_array( $theme_option['endurance_smart_app_background_color'] )) { ?>
                background: radial-gradient(119.23% 119.23% at 50% -19.23%, <?php echo esc_attr( $theme_option['endurance_smart_app_background_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_smart_app_background_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_smart_app_background_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_smart_app_background_color']['gradient-reach']['to'] ). '%'; ?>) , #d9d9d9;
            <?php } ?>
        }
        .notice-section .notice .notice-slide {
            <?php if( isset( $theme_option['endurance_marquee_notice_color'] ) && !empty( $theme_option['endurance_marquee_notice_color'] ) && is_array( $theme_option['endurance_marquee_notice_color'] )) { ?>
                background: linear-gradient(<?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['gradient-angle'] ) . 'deg'; ?>, <?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_marquee_notice_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['from'] ) . ' '; ?> 32%, <?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['to'] ) . ' '; ?> 66%, <?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_marquee_notice_color']['gradient-reach']['to'] ). '%'; ?>);
            <?php } ?>
        }
        .notice-section .notice .notice-slide:last-child {
            <?php if( isset( $theme_option['endurance_marquee_notice_color'] ) && !empty( $theme_option['endurance_marquee_notice_color'] ) && is_array( $theme_option['endurance_marquee_notice_color'] )) { ?>
                background: linear-gradient(270deg, <?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_marquee_notice_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['from'] ) . ' '; ?> 32%, <?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['to'] ) . ' '; ?> 66%, <?php echo esc_attr( $theme_option['endurance_marquee_notice_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_marquee_notice_color']['gradient-reach']['to'] ). '%'; ?>);
            <?php } ?>
        }
        .stand-with-section.strips:after, .client-section .client-wrapper .clientImg:before {
            <?php if( isset( $theme_option['endurance_general_background_color1'] ) && !empty( $theme_option['endurance_general_background_color1'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_general_background_color1']); ?>;
            <?php } ?>
        }
        .stand-with-section.strips:before, .client-section .client-wrapper .clientImg:after {
            <?php if( isset( $theme_option['endurance_general_background_color2'] ) && !empty( $theme_option['endurance_general_background_color2'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_general_background_color2']); ?>;
            <?php } ?>
        }
        .stand-with-section .img-block .image-wrapper {
            <?php if( isset( $theme_option['endurance_stand_out_line_pattern_image']['url'] ) && !empty( $theme_option['endurance_stand_out_line_pattern_image']['url'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_stand_out_line_pattern_image']['url']); ?>);
            <?php } ?>
        }
        .special-section .special-wrapper .special-block {
            <?php if( (isset( $theme_option['endurance_special_addons_box1_color'] ) && !empty( $theme_option['endurance_special_addons_box1_color'] ) && is_array( $theme_option['endurance_special_addons_box1_color'] )) && (isset( $theme_option['endurance_special_addons_box1_pattern_image']['url'] ) && !empty( $theme_option['endurance_special_addons_box1_pattern_image']['url'] ) ) ) { ?>
                background-image: url(<?php echo esc_attr( $theme_option['endurance_special_addons_box1_pattern_image']['url'] ); ?>),linear-gradient(<?php echo esc_attr( $theme_option['endurance_special_addons_box1_color']['gradient-angle']) . 'deg'; ?>, <?php echo esc_attr( $theme_option['endurance_special_addons_box1_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_special_addons_box1_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_special_addons_box1_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_special_addons_box1_color']['gradient-reach']['to'] ) . '%'; ?>)
            <?php } ?>
        }
        .special-section .special-wrapper .special-block.second-box {
            <?php if( (isset( $theme_option['endurance_special_addons_box2_color'] ) && !empty( $theme_option['endurance_special_addons_box2_color'] ) && is_array( $theme_option['endurance_special_addons_box2_color'] )) && (isset( $theme_option['endurance_special_addons_box2_pattern_image']['url'] ) && !empty( $theme_option['endurance_special_addons_box2_pattern_image']['url'] ) ) ) { ?>
                background-image: url(<?php echo esc_attr( $theme_option['endurance_special_addons_box2_pattern_image']['url'] ); ?>),linear-gradient(<?php echo esc_attr( $theme_option['endurance_special_addons_box2_color']['gradient-angle']) . 'deg'; ?>, <?php echo esc_attr( $theme_option['endurance_special_addons_box2_color']['from'] ) . ' '; echo esc_attr( $theme_option['endurance_special_addons_box2_color']['gradient-reach']['from'] ) . '%'; ?>, <?php echo esc_attr( $theme_option['endurance_special_addons_box2_color']['to'] ) . ' '; echo esc_attr( $theme_option['endurance_special_addons_box2_color']['gradient-reach']['to'] ) . '%'; ?>)
            <?php } ?>
        }
        .special-section {
            <?php if( isset( $theme_option['endurance_special_addons_section_background_image']['url'] ) && !empty( $theme_option['endurance_special_addons_section_background_image']['url'] )) { ?>
                background: url(<?php echo esc_url($theme_option['endurance_special_addons_section_background_image']['url']); ?>) no-repeat;
                background-size: 100% 100%;
                background-position: 0 center;
            <?php } ?>
        }
        .stand-with-section.strips {
            <?php if( isset( $theme_option['endurance_general_background_image'] ) && !empty( $theme_option['endurance_general_background_image'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_general_background_image']['url']); ?>), url(<?php echo esc_url($theme_option['endurance_general_background_image']['url']); ?>);
            <?php } ?>
        }
        .stand-with-section .img-block .image-wrapper{
            <?php if( isset( $theme_option['stand_out_with_pettern'] ) && !empty( $theme_option['stand_out_with_pettern'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['stand_out_with_pettern']['url']); ?>), url(<?php echo esc_url($theme_option['stand_out_with_pettern']['url']); ?>);
            <?php } ?>
        }
        .mission-section .mission-wrapper .image-wrapper::before{
            <?php if( isset( $theme_option['endurance_banner_background_color1'] ) && !empty( $theme_option['endurance_banner_background_color1'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_banner_background_color1']); ?>;
            <?php } ?>
        }
        .mission-section .mission-wrapper .image-wrapper::after{
            <?php if( isset( $theme_option['endurance_banner_background_color2'] ) && !empty( $theme_option['endurance_banner_background_color2'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_banner_background_color2']); ?>;
            <?php } ?>
        }
        .contact-section.details-section{
            <?php if( isset( $theme_option['endurance_call_us_bg_img'] ) && !empty( $theme_option['endurance_call_us_bg_img'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_call_us_bg_img']['url']); ?>), url(<?php echo esc_url($theme_option['endurance_call_us_bg_img']['url']); ?>);
            <?php } ?>
        }
        .error-wrapper .wrapper::before{
            <?php if( isset( $theme_option['endurance_banner_background_color1'] ) && !empty( $theme_option['endurance_banner_background_color1'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_banner_background_color1']); ?>;
            <?php } ?>
        }
        .error-wrapper .wrapper::after{
            <?php if( isset( $theme_option['endurance_banner_background_color2'] ) && !empty( $theme_option['endurance_banner_background_color2'] )) { ?>
                background-color: <?php echo esc_attr($theme_option['endurance_banner_background_color2']); ?>;
            <?php } ?>
        }
        .error-wrapper .wrapper{
            <?php if( isset( $theme_option['endurance_general_background_image'] ) && !empty( $theme_option['endurance_general_background_image'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_general_background_image']['url']); ?>), url(<?php echo esc_url($theme_option['endurance_general_background_image']['url']); ?>);
            <?php } ?>
        }
        .error-wrapper::before{
            <?php if( isset( $theme_option['endurance_coming_soon_bg2'] ) && !empty( $theme_option['endurance_coming_soon_bg2'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_coming_soon_bg2']['url']); ?>), url(<?php echo esc_url($theme_option['endurance_coming_soon_bg2']['url']); ?>);
            <?php } ?>
        }
        .error-wrapper::after{
            <?php if( isset( $theme_option['endurance_coming_soon_bg1'] ) && !empty( $theme_option['endurance_coming_soon_bg1'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_coming_soon_bg1']['url']); ?>), url(<?php echo esc_url($theme_option['endurance_coming_soon_bg1']['url']); ?>);
            <?php } ?>
        }
        .fill-up-form form .form-group input[type="submit"]:before{
            background-image:url('assets/images/icon/search-icon.svg');
            content: "";
            position:absolute;
        }
        .error-wrapper{
            <?php if( isset( $theme_option['endurance_404_line_bg_img'] ) && !empty( $theme_option['endurance_404_line_bg_img'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_404_line_bg_img']['url']); ?>), url(<?php echo esc_url($theme_option['endurance_404_line_bg_img']['url']); ?>);
            <?php } ?>
        }
        .pricing-section{
            <?php if( isset( $theme_option['endurance_pricing_plan_background_image'] ) && !empty( $theme_option['endurance_pricing_plan_background_image'] )) { ?>
                background-image: url(<?php echo esc_url($theme_option['endurance_pricing_plan_background_image']['url']); ?>);
            <?php } ?>
        }
        .pricing-section .pricing-wrapper .pricing-block::before{
            <?php if( isset( $theme_option['endurance_pricing_plan_background_color1'] ) && !empty( $theme_option['endurance_pricing_plan_background_color1'] )) { ?>
                background: <?php echo esc_attr($theme_option['endurance_pricing_plan_background_color1']); ?>;
            <?php } ?>
        }
        .pricing-section .pricing-wrapper .option-wrapper .nav .nav-item .nav-link.active {
            <?php if( isset( $theme_option['endurance_nav_text_color'] ) && !empty( $theme_option['endurance_nav_text_color'] ) && is_array( $theme_option['endurance_nav_text_color'] )) { ?>
                background: linear-gradient(180deg, <?php echo esc_attr( $theme_option['endurance_nav_text_color']['from'] ) . ' '; ?> -80%, <?php echo esc_attr( $theme_option['endurance_nav_text_color']['to'] ) . ' 100%'; ?>);
            <?php } ?>
        }
        .pricing-section .pricing-wrapper .pricing-block .pricing-plan:hover .title{
            <?php if( isset( $theme_option['endurance_nav_text_color'] ) && !empty( $theme_option['endurance_nav_text_color'] ) && is_array( $theme_option['endurance_nav_text_color'] )) { ?>
                background: linear-gradient(180deg, <?php echo esc_attr( $theme_option['endurance_nav_text_color']['from'] ) . ' '; ?> -80%, <?php echo esc_attr( $theme_option['endurance_nav_text_color']['to'] ) . ' 100%'; ?>);
            <?php } ?>
            -webkit-background-clip: text;
        }
    </style>
    <?php
}
