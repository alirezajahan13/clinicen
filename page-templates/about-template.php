<?php
$karenmed_about_section1=get_field('karenmed_about_section1');
$karenmed_about_section2=get_field('karenmed_about_section2');
$karenmed_about_section3=get_field('karenmed_about_section3');
$karenmed_about_section4=get_field('karenmed_about_section4');
$karenmed_about_section5=get_field('karenmed_about_section5');


/*



Template Name: about Template



*/



get_header();



?>



<div class="clkarenAboutUsPageBack">

    <div class="clkarenAboutUsPage">

        <div class="clkarenAboutUs">

            <div class="aboutUsText mainView">

                <h1>درباره ما</h1>

                <?php

				if ( function_exists('yoast_breadcrumb') ) {

				yoast_breadcrumb( '<p id="breadcrumbs" class="blogBreadCrumbs">','</p>' );

				}  

				?>

            </div>

            <div class="backgroundOverlay"></div>

        </div>

        <div class="clkarenAboutUsSectionContainer">

            <div class="clkarenAboutUsSection mainView">

                <div class="homeAboutUsContentPart">

                    <span class="homeAboutUsSubtitle"><?php echo $karenmed_about_section1['top_title'] ?></span>

                    <h2><?php echo $karenmed_about_section1['title'] ?></h2>

                    <p><?php echo $karenmed_about_section1['bottom_title'] ?></p>

                    <div class="homeAboutUsCard">

                        <div class="abourUsCardIconPart">

                        <?php echo $karenmed_about_section1['svg1'] ?>

                        </div>

                        <div class="aboutUsCardContentPart">

                            <h3><?php echo $karenmed_about_section1['title1'] ?></h3>

                            <p><?php echo $karenmed_about_section1['text1'] ?></p>

                        </div>

                    </div>

                    <div class="homeAboutUsCard">

                        <div class="abourUsCardIconPart middleCardIcon">

                        <?php echo $karenmed_about_section1['svg2'] ?>

                        </div>

                        <div class="aboutUsCardContentPart">

                            <h3><?php echo $karenmed_about_section1['title2'] ?></h3>

                            <p><?php echo $karenmed_about_section1['text2'] ?></p>

                        </div>

                    </div>

                    <div class="homeAboutUsCard">

                        <div class="abourUsCardIconPart">

                        <?php echo $karenmed_about_section1['svg3'] ?>

                        </div>

                        <div class="aboutUsCardContentPart">

                            <h3><?php echo $karenmed_about_section1['title3'] ?></h3>

                            <p><?php echo $karenmed_about_section1['text3'] ?></p>

                        </div>

                    </div>

                    <div class="homeAboutUsBtnContainer">

                        <div class="homeAboutUsFounderPart">

                            <div class="founderPartImg"><img src="<?php echo $karenmed_about_section1['profile_image']['url'] ?>" alt="<?php echo $karenmed_about_section1['profile_image']['alt'] ?>"></div>

                            <div class="founderPartName">

                                <h3><?php echo $karenmed_about_section1['profile_name'] ?></h3>

                                <span><?php echo $karenmed_about_section1['profile_ability'] ?></span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="homeAboutUsImagePart">

                <div class="div1"><img src="<?php echo $karenmed_about_section1['image1']['url'] ?>" alt="<?php echo $karenmed_about_section1['image1']['alt'] ?>"></div>

                <div class="div2"><img src="<?php echo $karenmed_about_section1['image2']['url'] ?>" alt="<?php echo $karenmed_about_section1['image2']['alt'] ?>"></div>

                <div class="div3"><img src="<?php echo $karenmed_about_section1['image3']['url'] ?>" alt="<?php echo $karenmed_about_section1['image3']['alt'] ?>"></div>

                </div>

            </div>

            <div class="clkarenChooseUsSection">

                <div class="clkarenChooseUsImg">

                    <div class="ChooseUsBackground"></div>

                </div>

                <div class="clkarenChooseUsText">

                    <span class="clkarenChooseUsSubtitle"><?php echo $karenmed_about_section2['top_title'] ?></span>

                    <h2><?php echo $karenmed_about_section2['title'] ?></h2>

                    <p><?php echo $karenmed_about_section2['bottom_title'] ?></p>

                    <div class="clkarenChooseUsCards">

                        <div class="clkarenChooseUsCard">

                            <span><?php echo $karenmed_about_section2['right_number'] ?></span>

                            <h3><?php echo $karenmed_about_section2['right_title'] ?></h3>

                            <p><?php echo $karenmed_about_section2['right_text'] ?></p>

                        </div>

                        <div class="clkarenChooseUsCard">

                            <span><?php echo $karenmed_about_section2['left_number'] ?></span>

                            <h3><?php echo $karenmed_about_section2['left_title'] ?></h3>

                            <p><?php echo $karenmed_about_section2['left_text'] ?></p>

                        </div>

                    </div>

                    <a href="<?php echo $karenmed_about_section2['link']['url']; ?>" target="<?php echo $karenmed_about_section2['link']['target']; ?><?php echo $karenmed_about_section2['link']['title']; ?>"><?php echo $karenmed_about_section2['text_link'] ?></a>

                </div>

            </div>

            <div class="clkarenOurDoctorsSection mainView">

                <span class="clkarenOurDoctorSubtitle"><?php echo $karenmed_about_section3['top_title'] ?></span>

                <h2><?php echo $karenmed_about_section3['title'] ?></h2>

                <p><?php echo $karenmed_about_section3['bottom_title'] ?></p>

                <div class="clkarenOurDoctorCards">

                    <div class="clkarenOurDoctorCard">

                        <div class="OurDoctorCardImg">

                            <img src="<?php echo $karenmed_about_section3['right_box']['image1']['url'] ?>" alt="<?php echo $karenmed_about_section3['right_box']['image1']['alt'] ?>" >

                        </div>

                        <div class="OurDoctorCardText">

                            <h3><?php echo $karenmed_about_section3['right_box']['name'] ?></h3>

                            <span><?php echo $karenmed_about_section3['right_box']['ability'] ?></span>

                        </div>

                        <div class="OurDoctorCardSocialMedia">

                            <a href="<?php echo $karenmed_about_section3['right_box']['svg_link1']['url']; ?>" target="<?php echo $karenmed_about_section3['right_box']['svg_link1']['target']; ?><?php echo $karenmed_about_section3['right_box']['svg_link1']['title']; ?>"><?php echo $karenmed_about_section3['svg1'] ?></a>

                            <a href="<?php echo $karenmed_about_section3['right_box']['svg_link2']['url']; ?>" target="<?php echo $karenmed_about_section3['right_box']['svg_link2']['target']; ?><?php echo $karenmed_about_section3['right_box']['svg_link2']['title']; ?>"><?php echo $karenmed_about_section3['svg2'] ?></a>

                            <a href="<?php echo $karenmed_about_section3['right_box']['svg_link3']['url']; ?>" target="<?php echo $karenmed_about_section3['right_box']['svg_link1']['target']; ?><?php echo $karenmed_about_section3['right_box']['svg_link1']['title']; ?>"><?php echo $karenmed_about_section3['svg3'] ?></a>

                        </div>

                    </div>

                    <div class="clkarenOurDoctorCard">

                        <div class="OurDoctorCardImg">

                            <img src="<?php echo $karenmed_about_section3['center_box']['image2']['url'] ?>" alt="<?php echo $karenmed_about_section3['center_box']['image2']['alt'] ?>" >
                        </div>

                        <div class="OurDoctorCardText">

                            <h3><?php echo $karenmed_about_section3['center_box']['name'] ?></h3>

                            <span><?php echo $karenmed_about_section3['center_box']['ability'] ?></span>

                        </div>

                        <div class="OurDoctorCardSocialMedia">

                            <a href="<?php echo $karenmed_about_section3['center_box']['svg_link1']['url']; ?>" target="<?php echo $karenmed_about_section3['center_box']['svg_link1']['target']; ?><?php echo $karenmed_about_section3['center_box']['svg_link1']['title']; ?>"><?php echo $karenmed_about_section3['svg1'] ?></a>

                            <a href="<?php echo $karenmed_about_section3['center_box']['svg_link2']['url']; ?>" target="<?php echo $karenmed_about_section3['center_box']['svg_link2']['target']; ?><?php echo $karenmed_about_section3['center_box']['svg_link2']['title']; ?>"><?php echo $karenmed_about_section3['svg2'] ?></a>

                            <a href="<?php echo $karenmed_about_section3['center_box']['svg_link3']['url']; ?>" target="<?php echo $karenmed_about_section3['center_box']['svg_link3']['target']; ?><?php echo $karenmed_about_section3['center_box']['svg_link3']['title']; ?>"><?php echo $karenmed_about_section3['svg3'] ?></a>

                        </div>

                    </div>

                    <div class="clkarenOurDoctorCard">

                        <div class="OurDoctorCardImg">

                            <img src="<?php echo $karenmed_about_section3['left_box']['image3']['url'] ?>" alt="<?php echo $karenmed_about_section3['left_box']['image3']['alt'] ?>" >

                        </div>

                        <div class="OurDoctorCardText">

                            <h3><?php echo $karenmed_about_section3['left_box']['name'] ?></h3>

                            <span><?php echo $karenmed_about_section3['left_box']['ability'] ?></span>

                        </div>

                        <div class="OurDoctorCardSocialMedia">

                            <a href="<?php echo $karenmed_about_section3['left_box']['svg_link1']['url']; ?>" target="<?php echo $karenmed_about_section3['left_box']['svg_link1']['target']; ?><?php echo $karenmed_about_section3['left_box']['svg_link1']['title']; ?>"><?php echo $karenmed_about_section3['svg1'] ?></a>

                            <a href="<?php echo $karenmed_about_section3['left_box']['svg_link2']['url']; ?>" target="<?php echo $karenmed_about_section3['left_box']['svg_link2']['target']; ?><?php echo $karenmed_about_section3['left_box']['svg_link2']['title']; ?>"><?php echo $karenmed_about_section3['svg2'] ?></a>

                            <a href="<?php echo $karenmed_about_section3['left_box']['svg_link3']['url']; ?>" target="<?php echo $karenmed_about_section3['left_box']['svg_link3']['target']; ?><?php echo $karenmed_about_section3['left_box']['svg_link3']['title']; ?>"><?php echo $karenmed_about_section3['svg3'] ?></a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="clkarenOurMotiveSection">

                <div class="ourNativeText">

                    <svg width="70" height="70" viewBox="-3.9 0.9 28 30" xmlns="http://www.w3.org/2000/svg"><path d="m4 6 16.5 10L4 26V6Z"/></svg>

                    <h2><?php echo $karenmed_about_section4['title'] ?></h2>

                    <p><?php echo $karenmed_about_section4['bottom_title'] ?></p>

                    <a href="<?php echo $karenmed_about_section4['link']['url']; ?>" target="<?php echo $karenmed_about_section4['link']['target']; ?><?php echo $karenmed_about_section4['link']['title']; ?>"><?php echo $karenmed_about_section4['text_link'] ?></a>

                </div>

                <div class="backgroundOverlay"></div>

            </div>

            <div class="clkarenOurBlogSection mainView">

                <span class="clkarenOurDoctorSubtitle"><?php echo $karenmed_about_section5['top_title'] ?></span>

                <h2><?php echo $karenmed_about_section5['title'] ?></h2>

                <p><?php echo $karenmed_about_section5['bottom_title'] ?></p>

                <div class="clkarenOurBlog"> 

                    <?php

                        $recent_posts_args = array(

                        'posts_per_page' => 4,

                        'orderby' => 'date',

                        'order' => 'DESC',

                        );

                        $recent_posts_query = new WP_Query($recent_posts_args);

                        if ($recent_posts_query->have_posts()) {

                        while ($recent_posts_query->have_posts()) {

                            $recent_posts_query->the_post();

                            ?>

                                <a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('highRadius mediumMargined whiteBg'); ?>>

                                    <div class="archiveCardImg"><?php the_post_thumbnail() ?></div>

                                    <div class="cardText">

                                        <header class="entry-header">

                                            <?php if ( is_home() && ! is_front_page() ){ ?>

                                                <h2 class="entry-title"><?php echo get_the_title() ?></h2>

                                            <?php } else{ ?>

                                                <h3 class="entry-title"><?php echo get_the_title() ?></h3>

                                            <?php } ?>

                                        </header><!-- .entry-header -->

                                        <div class="archivePostFooter">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 7v5l2.5 1.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>

                                            <span><?php echo get_the_date() ?></span>

                                        </div>

                                        <?php the_excerpt(); ?>

                                    

                                        <div class="readMore">

                                            <span>ادامه مطلب</span>

                                            <svg width="16" height="16" viewBox="0 0 0.375 0.375" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><path d="M.207.057a.025.025 0 0 1 .035 0L.355.17a.025.025 0 0 1 0 .035L.242.318A.025.025 0 0 1 .207.283l.068-.07H.038a.025.025 0 0 1 0-.05h.237L.207.093a.025.025 0 0 1 0-.035Z"/></svg>

                                        </div>

                                    </div>

                                </a><!-- #post-<?php the_ID(); ?> -->

                            <?php

                        }

                        }

                        wp_reset_postdata();

                    ?>

                </div>

            </div>

        </div>

    </div>

</div>





<?php get_footer();