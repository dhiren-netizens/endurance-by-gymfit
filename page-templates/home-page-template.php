<?php 
/* Template Name: Home Page Template */

get_header();
$theme_option = get_option('redux_demo');
?>
    <body>

    <!-- MAIN SECTIONS START FROM HERE -->
    <main class="main_wrapper">

        <!-- BANNER SECTION START FROM HERE -->
        <div class="default-padding">
            <div class="banner-wrapper">
                <?php if(isset( $theme_option['endurance_banner_background_image']['url'] ) && !empty( $theme_option['endurance_banner_background_image']['url'] )) { ?>
                    <img src="<?php echo esc_url( $theme_option['endurance_banner_background_image']['url'] ); ?>" alt="strips" class="strips">
                <?php } ?>
                <div class="container">
                    <div class="banner-block wow fadeInDown">
                        <div class="textBlock">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-lg-flex d-block align-items-center text-lg-start text-center pb-sm-2 pb-0">
                                        <?php if(isset( $theme_option['endurance_banner_title']['box1'] ) && !empty( $theme_option['endurance_banner_title']['box1'] )) { ?>
                                            <h1 class="title p-0"><?php echo esc_html( $theme_option['endurance_banner_title']['box1'] ); ?></h1>
                                        <?php } ?>
                                        <?php if(isset( $theme_option['endurance_banner_pattern_image']['url'] ) && !empty( $theme_option['endurance_banner_pattern_image']['url'] )) { ?>
                                        <img src="<?php echo esc_url( $theme_option['endurance_banner_pattern_image']['url'] ); ?>" alt="Line" class="ps-3 d-lg-block d-none" loading="lazy">
                                        <?php } ?>
                                    </div>
                                    <?php if(isset( $theme_option['endurance_banner_title']['box2'] ) && !empty( $theme_option['endurance_banner_title']['box2'] )) { ?>
                                        <h1 class="title text-lg-end text-center"><?php echo esc_html( $theme_option['endurance_banner_title']['box2'] ); ?></h1>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex flex-lg-row flex-column-reverse align-items-center text-lg-start text-center">
                                        <?php $endurance_gt_link = isset( $theme_option['endurance_gt_link'] ) ? $theme_option['endurance_gt_link'] : '#';
                                        if(isset( $theme_option['endurance_gt_text'] ) && !empty( $theme_option['endurance_gt_text'] )) { ?>
                                            <a href="<?php echo esc_attr( $endurance_gt_link ); ?>" class="btn_wrapper"><?php echo esc_html( $theme_option['endurance_gt_text'] ); ?></a>
                                        <?php } ?>
                                        <?php if(isset( $theme_option['endurance_banner_description'] ) && !empty( $theme_option['endurance_banner_description'] )) { ?>
                                            <p class="ps-lg-4 p-0 mb-lg-0 mb-3"><?php echo esc_html( $theme_option['endurance_banner_description'] ); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="imgBlock pt-lg-0 pt-sm-5 pt-4">
                    <?php if(isset( $theme_option['endurance_banner_image']['url'] ) && !empty( $theme_option['endurance_banner_image']['url'] )) { ?>
                        <img src="<?php echo esc_url( $theme_option['endurance_banner_image']['url'] ); ?>" alt="banner" class="bannerImg wow fadeInLeftBig">
                    <?php } ?>
                    <div class="container position-relative wow fadeInUp">
                        <div class="members d-lg-flex d-none align-items-center">
                            <?php if(isset( $theme_option['endurance_banner_members_image']['url'] ) && !empty( $theme_option['endurance_banner_members_image']['url'] )) { ?>
                                <img src="<?php echo esc_url( $theme_option['endurance_banner_members_image']['url'] ); ?>" alt="Members" class="pe-2">
                            <?php } ?>
                            <?php if(isset( $theme_option['endurance_banner_members_text'] ) && !empty( $theme_option['endurance_banner_members_text'] )) {
                                echo esc_html( $theme_option['endurance_banner_members_text'] );
                            } ?>
                        </div>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#myModal" class="btn_wrapper White-btn ms-lg-auto mx-auto mt-lg-0 mt-3">
                            <?php if(isset( $theme_option['endurance_banner_tutorial_text'] ) && !empty( $theme_option['endurance_banner_tutorial_text'] )) {
                                echo esc_html( $theme_option['endurance_banner_tutorial_text'] );
                            } ?>
                            <?php if(isset( $theme_option['endurance_banner_tutorial_play_btn_icon']['url'] ) && !empty( $theme_option['endurance_banner_tutorial_play_btn_icon']['url'] )) { ?>
                                <img src="<?php echo esc_url( $theme_option['endurance_banner_tutorial_play_btn_icon']['url'] ); ?>" alt="Arrow">
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER SECTION END'S FROM HERE -->

        <!-- SUCCESS SECTION START FROM HERE -->
        <div class="default-padding">
            <div class="success-section">
                <div class="container">
                    <div class="title text-center">Gear Up for Success</div>
                    <div class="success-wrapper">
                        <div class="row gy-lg-0 gy-4">
                            <div class="col-lg-4 col-sm-6 order-2">
                                <div class="success-box first-box wow fadeIn">
                                    <div class="image-wrapper">
                                        <?php if(isset( $theme_option['endurance_gear_up_learn_image']['url'] ) && !empty( $theme_option['endurance_gear_up_learn_image']['url'] )) { ?>
                                            <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_gear_up_learn_image']['url'] ); ?>" alt="success-1" class="box_img">
                                        <?php } ?>
                                    </div>
                                    <div class="box-text position">
                                        <?php if(isset( $theme_option['endurance_gear_up_learn_title'] ) && !empty( $theme_option['endurance_gear_up_learn_title'] )) { ?>
                                            <span class="white"><?php echo esc_html( $theme_option['endurance_gear_up_learn_title'] ); ?></span>
                                        <?php }
                                        if(isset( $theme_option['endurance_gear_up_learn_description'] ) && !empty( $theme_option['endurance_gear_up_learn_description'] )) { ?>
                                            <p><?php echo esc_html( $theme_option['endurance_gear_up_learn_description'] ); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-2 order-1">
                                <div class="row gy-4 justify-content-between wow fadeIn">
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="success-box last-box opacity-box icon-box">
                                            <div class="image-wrapper icon">
                                                <?php if(isset( $theme_option['endurance_gear_up_track_image']['url'] ) && !empty( $theme_option['endurance_gear_up_track_image']['url'] )) { ?>
                                                    <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_gear_up_track_image']['url'] ); ?>" alt="success-icon">
                                                <?php } ?>
                                            </div>
                                            <div class="box-text">
                                                <?php if(isset( $theme_option['endurance_gear_up_track_title'] ) && !empty( $theme_option['endurance_gear_up_track_title'] )) { ?>
                                                    <span class="gradient"><?php echo esc_html( $theme_option['endurance_gear_up_track_title'] ); ?></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="success-box first-box opacity-box icon-box">
                                            <div class="image-wrapper icon icon-2">
                                                <?php if(isset( $theme_option['endurance_gear_up_improve_image']['url'] ) && !empty( $theme_option['endurance_gear_up_improve_image']['url'] )) { ?>
                                                    <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_gear_up_improve_image']['url'] ); ?>" alt="success-icon">
                                                <?php } ?>
                                            </div>
                                            <div class="box-text">
                                                <?php if(isset( $theme_option['endurance_gear_up_improve_title'] ) && !empty( $theme_option['endurance_gear_up_improve_title'] )) { ?>
                                                    <span class="gradient gradient-2"><?php echo esc_html( $theme_option['endurance_gear_up_improve_title'] ); ?></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 order-3">
                                <div class="success-box last-box wow fadeIn">
                                    <div class="image-wrapper">
                                        <?php if(isset( $theme_option['endurance_gear_up_motivated_image']['url'] ) && !empty( $theme_option['endurance_gear_up_motivated_image']['url'] )) { ?>
                                            <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_gear_up_motivated_image']['url'] ); ?>" alt="success-2" class="box_img">
                                        <?php } ?>
                                    </div>
                                    <div class="box-text position">
                                        <?php if(isset( $theme_option['endurance_gear_up_motivated_title'] ) && !empty( $theme_option['endurance_gear_up_motivated_title'] )) { ?>
                                            <span class="white"><?php echo esc_html( $theme_option['endurance_gear_up_motivated_title'] ); ?></span>
                                        <?php }
                                        if(isset( $theme_option['endurance_gear_up_motivated_description'] ) && !empty( $theme_option['endurance_gear_up_motivated_description'] )) { ?>
                                            <p><?php echo esc_html( $theme_option['endurance_gear_up_motivated_description'] ); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUCCESS SECTION END'S FROM HERE -->

        <!-- ABOUT SECTION START FROM HERE -->
        <div class="default-padding">
            <div class="about-section">
                <div class="container">
                    <div class="about-wrapper">
                        <div class="row gy-sm-5 gy-4 justify-content-center align-items-center">
                            <div class="col-lg-7 col-sm-10 order-lg-1 order-2">
                                <div class="image-wrapper d-flex justify-content-center wow fadeInLeft">
                                    <?php if(isset( $theme_option['endurance_about_us_image']['url'] ) && !empty( $theme_option['endurance_about_us_image']['url'] )) { ?>
                                        <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_about_us_image']['url'] ); ?>" alt="about-img" id="about_img1">
                                    <?php }
                                    if(isset( $theme_option['endurance_about_us_logo_image']['url'] ) && !empty( $theme_option['endurance_about_us_logo_image']['url'] )) { ?>
                                        <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_about_us_logo_image']['url'] ); ?>" alt="white-logo" class="logo" id="about_img2">
                                    <?php }
                                    if(isset( $theme_option['endurance_about_us_background_image']['url'] ) && !empty( $theme_option['endurance_about_us_background_image']['url'] )) { ?>
                                        <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_about_us_background_image']['url'] ); ?>" alt="strips" class="strips">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-5 order-lg-2 order-1">
                                <div class="about-text text-lg-start text-center wow fadeInRight">
                                    <?php if(isset( $theme_option['endurance_about_us_title'] ) && !empty( $theme_option['endurance_about_us_title'] )) { ?>
                                        <div class="title"><?php echo esc_html( $theme_option['endurance_about_us_title'] ); ?></div>
                                    <?php } 
                                    if(isset( $theme_option['endurance_about_us_description'] ) && !empty( $theme_option['endurance_about_us_description'] )) { ?>
                                        <p>
                                            <?php echo esc_html( $theme_option['endurance_about_us_description'] ); ?>
                                        </p>
                                    <?php } ?>
                                    <?php $endurance_about_us_gt_link = isset( $theme_option['endurance_about_us_gt_link'] ) ? $theme_option['endurance_about_us_gt_link'] : '#';
                                    if(isset( $theme_option['endurance_about_us_gt_text'] ) && !empty( $theme_option['endurance_about_us_gt_text'] )) { ?>
                                        <a href="<?php echo esc_attr( $endurance_about_us_gt_link ); ?>" class="btn_wrapper mx-lg-0 mx-auto"><?php echo esc_html( $theme_option['endurance_about_us_gt_text'] ); ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SECTION END'S FROM HERE -->

        <!-- CTA SECTION END'S FROM HERE -->
        <div class="cta-section default-padding pb-0 wow fadeInUp">
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="cta-text text-lg-start text-center d-flex align-items-center gap-4">
                                <div>
                                    <?php if(isset( $theme_option['endurance_smart_app_title'] ) && !empty( $theme_option['endurance_smart_app_title'] )) { ?>
                                        <div class="title pb-1"><?php echo esc_html( $theme_option['endurance_smart_app_title'] ); ?></div>
                                    <?php } 
                                    if(isset( $theme_option['endurance_smart_app_description'] ) && !empty( $theme_option['endurance_smart_app_description'] )) { ?>
                                        <p><?php echo esc_html( $theme_option['endurance_smart_app_description'] ); ?></p>
                                    <?php } ?>
                                </div>
                                <div class="image-wrapper d-lg-block d-none">
                                    <?php if(isset( $theme_option['endurance_smart_app_download_image']['url'] ) && !empty( $theme_option['endurance_smart_app_download_image']['url'] )) { ?>
                                        <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_smart_app_download_image']['url'] ); ?>" alt="cta-appstore-img">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="image-wrapper mockup mx-lg-0 mx-auto">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-10 col-lg-8 col-sm-10">
                                        <?php if(isset( $theme_option['endurance_smart_app_mobile_image']['url'] ) && !empty( $theme_option['endurance_smart_app_mobile_image']['url'] )) { ?>
                                            <img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_smart_app_mobile_image']['url'] ); ?>" alt="cta-mockup" class="d-block mx-auto">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA SECTION END'S FROM HERE -->
        
        <!-- NOTICE SECTION START FROM HERE -->
        <div class="notice-section default-padding wow fadeIn">
            <div class="notice">
                <div class="notice-slide">
                    <?php if(isset( $theme_option['endurance_marquee_notice_image']['url'] ) && !empty( $theme_option['endurance_marquee_notice_image']['url'] )) { ?>
                        <img loading="lazy" src="<?php echo esc_url($theme_option['endurance_marquee_notice_image']['url']); ?>" alt="marquee-icon">
                        <img loading="lazy" src="<?php echo esc_url($theme_option['endurance_marquee_notice_image']['url']); ?>" alt="marquee-icon">
                        <img loading="lazy" src="<?php echo esc_url($theme_option['endurance_marquee_notice_image']['url']); ?>" alt="marquee-icon">
                    <?php } ?>
                </div>
                <div class="notice-slide">
                    <?php if(isset( $theme_option['endurance_marquee_notice_image']['url'] ) && !empty( $theme_option['endurance_marquee_notice_image']['url'] )) { ?>
                        <img loading="lazy" src="<?php echo esc_url($theme_option['endurance_marquee_notice_image']['url']); ?>" alt="marquee-icon">
                        <img loading="lazy" src="<?php echo esc_url($theme_option['endurance_marquee_notice_image']['url']); ?>" alt="marquee-icon">
                        <img loading="lazy" src="<?php echo esc_url($theme_option['endurance_marquee_notice_image']['url']); ?>" alt="marquee-icon">
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- NOTICE SECTION END'S FROM HERE -->
        
        <!-- STAND WITH SECTION START FROM HERE -->
        <div class="stand-with-section strips default-padding">
            <div class="container">
                <div class="stand-with-wrapper">
                    <div class="top-block wow fadeIn">
                        <div class="d-lg-flex justify-content-end d-block align-items-center text-lg-start text-center pb-sm-2 pb-0">
                            <h1 class="title p-0">Stand out with</h1>
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/line-pettern.svg" alt="Line" class="px-xl-5 px-4 mx-xl-5 mx-4 d-lg-block d-none">
                        </div>
                        <h1 class="title text-lg-end text-center">High Endurance</h1>
                    </div>
                    <div class="row pb-lg-0 pb-4">
                        <div class="col-lg-4">
                            <div class="text-block text-lg-start text-center wow fadeInLeft">
                                <span class="mb-2">Defy The Limits</span>
                                <p>We are the ultimate destination for those seeking to push their boundaries, elevate their endurance, and achieve greatness.</p>
                                <a href="#" class="btn_wrapper mx-lg-0 mx-auto">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-block wow fadeInUpBig">
                <div class="container">
                    <div class="image-wrapper">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/stand-with-img.webp" alt="stand-with-img" class="d-block mx-auto">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#myModal" class="btn_wrapper White-btn ms-lg-auto mx-auto mt-lg-0 mt-3">
                            watch tutorial
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/btn-arrow.svg" alt="Arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- STAND WITH SECTION END'S FROM HERE -->

        <!-- PRICING SECTION START FROM HERE -->
        <div id="pricing">
            <div class="pricing-section default-padding">
                <div class="container">
                    <div class="content">
                        <div class="title text-center pb-sm-5 pb-4">Pricing Plan</div>
                        <div class="pricing-wrapper">
                            <div class="row">
                                <div class="col-4">
                                    <div class="option-wrapper wow fadeInLeft">
                                        <ul class="nav nav-pills mb-sm-5 mb-4" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">
                                                    monthly
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-annually-tab" data-bs-toggle="pill" data-bs-target="#pills-annually" type="button" role="tab" aria-controls="pills-annually" aria-selected="false">
                                                    annually
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="options">
                                            <ul>
                                                <li>Workouts</li>
                                                <li>Progress Tracking</li>
                                                <li>Nutritional Guidance</li>
                                                <li>One-on-One Coaching</li>
                                                <li>Priority Event Registration</li>
                                                <li>Bonus Workshops/Seminars</li>
                                                <li>Personalized Support</li>
                                            </ul>
                                            <span class="price">prices</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="pricing-block wow fadeInRight">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="pricing-plan free">
                                                            <div class="title mb-sm-5 mb-4">free</div>
                                                            <ul>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                            </ul>
                                                            <div class="pricing">
                                                                <span class="free">--</span>
                                                                <p>Lifetime Free</p>
                                                            </div>
                                                            <a href="#" class="btn_wrapper mt-2 mx-auto">sign up</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="pricing-plan basic">
                                                            <div class="title mb-sm-5 mb-4">Basic</div>
                                                            <ul>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                            </ul>
                                                            <div class="pricing">
                                                                <span>$9.99</span>
                                                                <p>/Monthly</p>
                                                            </div>
                                                            <a href="#" class="btn_wrapper mt-2 mx-auto">sign up</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="pricing-plan pro">
                                                            <div class="title mb-sm-5 mb-4">pro</div>
                                                            <ul>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                            </ul>
                                                            <div class="pricing">
                                                                <span>$19.99</span>
                                                                <p>/Monthly</p>
                                                            </div>
                                                            <a href="#" class="btn_wrapper mt-2 mx-auto">sign up</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="pricing-plan ultimate">
                                                            <div class="title mb-sm-5 mb-4">ULTIMATE</div>
                                                            <ul>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                            </ul>
                                                            <div class="pricing">
                                                                <span>$29.99</span>
                                                                <p>/Monthly</p>
                                                            </div>
                                                            <a href="#" class="btn_wrapper mt-2 mx-auto">sign up</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="pills-annually" role="tabpanel" aria-labelledby="pills-annually-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="pricing-plan free">
                                                            <div class="title mb-sm-5 mb-4">free</div>
                                                            <ul>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                            </ul>
                                                            <div class="pricing">
                                                                <span class="free">--</span>
                                                                <p>Lifetime Free</p>
                                                            </div>
                                                            <a href="#" class="btn_wrapper mt-2 mx-auto">sign up</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="pricing-plan basic">
                                                            <div class="title mb-sm-5 mb-4">Basic</div>
                                                            <ul>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                            </ul>
                                                            <div class="pricing">
                                                                <span>$49.99</span>
                                                                <p>/Annual</p>
                                                            </div>
                                                            <a href="#" class="btn_wrapper mt-2 mx-auto">sign up</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="pricing-plan pro">
                                                            <div class="title mb-sm-5 mb-4">pro</div>
                                                            <ul>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon-2.svg" width="30" height="30" alt="pricing-icon"></li>
                                                            </ul>
                                                            <div class="pricing">
                                                                <span>$69.99</span>
                                                                <p>/Annual</p>
                                                            </div>
                                                            <a href="#" class="btn_wrapper mt-2 mx-auto">sign up</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="pricing-plan ultimate">
                                                            <div class="title mb-sm-5 mb-4">ULTIMATE</div>
                                                            <ul>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                                <li><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pricing-icon.svg" width="30" height="30" alt="pricing-icon"></li>
                                                            </ul>
                                                            <div class="pricing">
                                                                <span>$99.99</span>
                                                                <p>/Annual</p>
                                                            </div>
                                                            <a href="#" class="btn_wrapper mt-2 mx-auto">sign up</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRICING SECTION END'S FROM HERE -->

        <!-- SPECIAL SECTION START FROM HERE -->
        <div class='special-section default-padding wow fadeIn'>
            <div class="container">
                <div class="special-wrapper">
                    <div class="title text-center wow fadeInDown">Special addons</div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="special-block first-box text-lg-start text-center pb-0 wow fadeInUp">
                                        <span>Workouts & Training</span>
                                        <p>We focus on building cardiovascular endurance, muscular stamina, and mental resilience, enabling athletes and fitness enthusiasts to sustain physical effort over extended periods.</p>
                                        <span class="tags">#EndureDrills</span>
                                        <div class="image-wrapper mt-4 wow fadeInUpBig">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/special-1.webp" alt="special-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="special-block second-box text-lg-start text-center mt-lg-5 mt-0 pt-0 wow fadeInUp">
                                        <div class="image-wrapper mb-4 wow fadeInDownBig">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/special-2.webp" alt="special-2">
                                        </div>
                                        <span>Workouts & Training</span>
                                        <p>We focus on building cardiovascular endurance, muscular stamina, and mental resilience, enabling athletes and fitness enthusiasts to sustain physical effort over extended periods.</p>
                                        <span class="tags">#EndureDrills</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SPECIAL SECTION END'S FROM HERE -->
        
        <!-- CLIENT SECTION START FROM HERE -->
        <div class="client-section default-padding">
            <div class="container">
                <div class="client-wrapper">
                    <div class="row gy-sm-5 gy-4 align-items-center justify-content-between">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="image-wrapper clientImg wow fadeInLeft">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client-img.webp" alt="client-img" class="d-block mx-auto">
                                <div class="pettern image-wrapper">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
                                </div>
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/strips.svg" alt="strips" class="strips">
                            </div>
                        </div>
                        <div class="col-xxl-5 col-lg-6 order-lg-2 order-1">
                            <div class="client-text wow fadeInRight">
                                <div class="title text-lg-start text-center">Our Happy Clients</div>
                                <div class="swiper ClientSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="review-block">
                                                <div class="text pb-4">
                                                    <p class="mb-3">As an avid fitness enthusiast, I've always sought a platform that could help me push beyond my limits and unlock my true potential. Joining Endurance Unleashes Premium subscription has been a game-changer for me! From the moment I signed up, I knew I was in for an extraordinary journey.</p>
                                                    <p>The mission to fuel the spirit of champions resonates deeply with me. The abundance of finely curated tools, top-notch gear.</p>
                                                </div>
                                                <div class="review">
                                                    <div class="image-wrapper pe-4">
                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/review-img.webp" alt="review-img">
                                                    </div>
                                                    <div class="review-text">
                                                        <span>Angela Lipton</span>
                                                        <p class="mb-1">Google Reviews</p>
                                                        <div class="image-wrapper">
                                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/stars.svg" alt="stars" width="126" height="22">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="review-block">
                                                <div class="text pb-4">
                                                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum suscipit voluptate aliquam officia voluptatem! Minus dolorem tempora optio quisquam odio. Minima temporibus molestias aspernatur neque veniam ducimus, placeat ratione eligendi!</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores minima voluptatum dignissimos vitae repudiandae non vel sint, accusamus excepturi atque dicta, sunt eligendi molestias asperiores sapiente quis provident animi tenetur.</p>
                                                </div>
                                                <div class="review">
                                                    <div class="image-wrapper pe-4">
                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/review-img-2.webp" alt="review-img-2">
                                                    </div>
                                                    <div class="review-text">
                                                        <span>Johnny depp</span>
                                                        <p class="mb-1">Person Reviews</p>
                                                        <div class="image-wrapper">
                                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/stars.svg" alt="stars" width="126" height="22">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-block pt-lg-0 pt-3">
                                        <div class="button prev image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" width="24" height="24" alt="arrow-left"></div>
                                        <div class="button next image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" width="24" height="24" alt="arrow-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CLIENT SECTION END'S FROM HERE -->

        <!-- BLOG SECTION START FROM HERE -->
        <div class="blog-section default-padding">
            <div class="container">
                <div class="blog-wrapper wow fadeInUp">
                    <div class="row gy-lg-0 gy-4">
                        <div class="col-lg-4">
                            <div class="title pb-3 text-lg-start text-center"><span>Read Our</span> Articles</div>
                            <p class="text-lg-start text-center">Unlock the secrets of endurance and elevate your performance with our insightful articles.</p>
                            <div class="btn-block">
                                <div class="button prev image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" width="24" height="24" alt="arrow-left"></div>
                                <div class="button next image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" width="24" height="24" alt="arrow-right"></div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="swiper BlogSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="blog-block">
                                            <div class="image-wrapper pb-4">
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-8.webp" alt="blog-8">
                                            </div>
                                            <p class="blog-title">Mastering Cardiovascular Fitness: Your Path to Endurance Excellence</p>
                                            <div class="read d-flex gap-3 align-items-center justify-content-between">
                                                <a href="blog-details.html">Read Now</a>
                                                <p>14th August, 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-block">
                                            <div class="image-wrapper pb-4">
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-9.webp" alt="blog-9">
                                            </div>
                                            <p class="blog-title">Mastering Cardiovascular Fitness: Your Path to Endurance Excellence</p>
                                            <div class="read d-flex gap-3 align-items-center justify-content-between">
                                                <a href="blog-details.html">Read Now</a>
                                                <p>14th August, 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG SECTION END'S FROM HERE -->

        <!-- INSTAGRAM SECTION START FROM HERE -->
        <div class="instagram-section default-padding wow fadeIn" data-wow-duration="1.2s">
            <div class="instagram-wrapper">
                <div class="image-wrapper">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/paper-texture.webp" alt="papper-texture">
                    <div class="img-block">
                        <div class="row g-0 h-100 justify-content-between">
                            <div class="col-6">
                                <div class="row g-0 h-100">
                                    <div class="col-4">
                                        <div class="image-wrapper h-100 d-flex flex-column justify-content-between">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-1.webp" alt="img-1" class="img-1 z-1" id="floatingImage1">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-2.webp" alt="img-2" class="img-2" id="floatingImage2">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="image-wrapper h-100 d-flex flex-column justify-content-center">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-3.webp" alt="img-3" class="img-3" id="floatingImage3">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-4.webp" alt="img-4" class="img-4" id="floatingImage4">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="image-wrapper h-100">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-5.webp" alt="img-5" class="img-5" id="floatingImage5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row g-0 h-100">
                                    <div class="col-6">
                                        <div class="image-wrapper h-100 d-flex flex-column justify-content-center">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-6.webp" alt="img-6" class="img-6" id="floatingImage6">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-7.webp" alt="img-7" class="img-7" id="floatingImage7">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="image-wrapper h-100">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-8.webp" alt="img-8" class="img-8" id="floatingImage8">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/instagram-img-9.webp" alt="img-9" class="img-9" id="floatingImage9">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-block text-center">
                    <p>Follow Us on Instagram</p>
                    <a href="#!">@Gymfit</a>
                </div>
            </div>
        </div>
        <!-- INSTAGRAM SECTION END'S FROM HERE -->

    </main>
    <!-- MAIN SECTIONS END'S FROM HERE -->

    <!-- VIDEO MODAL START FROM HERE -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close d-block ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <video controls="" id="video1">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!-- VIDEO MODAL END'S FROM HERE -->
    

    <!-- FLOATING IMG JS -->
    <script>
        /* ========= ABOUT US FLOATING IMAGES ========= */
        /* IMG 1 */
        const about_img1 = document.getElementById('about_img1');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            about_img1.style.transform = `translate(${offsetX * 10}px, ${offsetY * 10}px)`;
        });
        /* IMG 2 */
        const about_img2 = document.getElementById('about_img2');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            about_img2.style.transform = `translate(calc(-50% + ${offsetX * -10}px), calc(-50% + ${offsetY * -10}px))`;
        });
        /* ========= ABOUT US FLOATING IMAGES ========= */


        /* ========= INSTAGRAM FLOATING IMAGES ========= */
        /* Img 1 */
        const floatingImage1 = document.getElementById('floatingImage1');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage1.style.transform = `translate(${offsetX * 10}px, ${offsetY * 10}px)`;
        });

        /* Img 2 */
        const floatingImage2 = document.getElementById('floatingImage2');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage2.style.transform = `translate(${offsetX * -10}px, ${offsetY * -10}px)`;
        });

        /* Img 3 */
        const floatingImage3 = document.getElementById('floatingImage3');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage3.style.transform = `translate(${offsetX * -10}px, ${offsetY * -10}px)`;
        });

        /* Img 4 */
        const floatingImage4 = document.getElementById('floatingImage4');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage4.style.transform = `translate(${offsetX * 5}px, ${offsetY * 5}px)`;
        });

        /* Img 5 */
        const floatingImage5 = document.getElementById('floatingImage5');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage5.style.transform = `translate(${offsetX * 5}px, ${offsetY * 5}px)`;
        });

        /* Img 6 */
        const floatingImage6 = document.getElementById('floatingImage6');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage6.style.transform = `translate(${offsetX * -5}px, ${offsetY * -5}px)`;
        });

        /* Img 7 */
        const floatingImage7 = document.getElementById('floatingImage7');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage7.style.transform = `translate(${offsetX * 20}px, ${offsetY * 20}px)`;
        });

        /* Img 8 */
        const floatingImage8 = document.getElementById('floatingImage8');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage8.style.transform = `translate(${offsetX * 15}px, ${offsetY * 15}px)`;
        });

        /* Img 9 */
        const floatingImage9 = document.getElementById('floatingImage9');

        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            // Calculate percentage offsets
            const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
            const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

            // Apply the transform
            floatingImage9.style.transform = `translate(${offsetX * -20}px, ${offsetY * -20}px)`;
        });
        /* ========= INSTAGRAM FLOATING IMAGES ========= */
    </script>

    </body>
<?php
get_footer();