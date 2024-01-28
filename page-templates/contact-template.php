<?php 



/*

Template Name: Contact Template



*/



get_header();

?>





<div class="contactPageBack">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7698.840948507322!2d51.416698024697425!3d35.77626365964958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0792eec009bf%3A0x37bab448d467d35c!2z2LTYsdqp2Kog2qnYp9ix2YYg2LfYqA!5e0!3m2!1sfa!2s!4v1704545710731!5m2!1sfa!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="contactPage mainView">
        <div class="mainContactUs">
            <div class="mainContactUsText">
                <h2><?php echo get_field('top_title') ?></h2>
                <h1><?php echo get_field('title') ?></h1>
                <p><?php echo get_field('bottom_title') ?></p>
                <div class="information">
                    <div class="columnInformation">
                        <div class="informationSvg">
                        <?php echo get_field('right_box')['svg'] ?>
                        </div>
                        <h2><?php echo get_field('right_box')['title'] ?></h2>
                        <span><?php echo get_field('right_box')['text1'] ?></span>
                        <span><?php echo get_field('right_box')['text2'] ?></span>
                        <span><?php echo get_field('right_box')['text3'] ?></span>
                    </div>
                    <div class="columnInformation">
                        <div class="informationSvg">
                        <?php echo get_field('left_box')['svg'] ?>
                        </div>
                        <h2><?php echo get_field('left_box')['title'] ?></h2>
                        <span><?php echo get_field('left_box')['text1'] ?></span>
                        <span><?php echo get_field('left_box')['text2'] ?></span>
                        <span><?php echo get_field('left_box')['text3'] ?></span>
                    </div>
                </div>
            </div>
            <div class="mainContactUsForm">
                <?php echo do_shortcode('[contact-form-7 id="de155b4" title="فرم تماس با ما"]') ?>
            </div>
        </div>
    </div>
</div>








































<?php 

get_footer();