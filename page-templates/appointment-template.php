<?php
  
/*

Template Name: appointment Template

*/

get_header();

?>



<div class="appointmentPageBack">
    <div class="appointmentPage">
        <div class="appointment">
            <div class="appointmentText mainView">
                <h1>دریافت مشاوره</h1>
            </div>
            <div class="backgroundOverlay"></div>
        </div>
        <div class="mainAppointment mainView">
            <div class="mainAppointmentForm">
                <?php echo do_shortcode('[contact-form-7 id="d66a7ab" title="فرم دریافت مشاوره"]') ?>
            </div>
            <div class="mainAppointmentText">
                <h3><?php echo get_field('top_title') ?></h3>
                <h2><?php echo get_field('title') ?></h2>
                <p><?php echo get_field('bottom_title') ?></p>
                <div class="openinghours">
                    <h4><?php echo get_field('hours_title') ?></h4>
                    <?php
                        $opening_Hours=get_field('opening_Hours');
                        if($opening_Hours){
                            foreach ($opening_Hours as $hours) {
                            ?>
                                <div class="time">
                                    <span><?php echo $hours['day'] ?></span>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 204.8 204.8"><path d="M102.4 25.6a76.8 76.8 0 1 0 76.8 76.8 76.888 76.888 0 0 0-76.8-76.8Zm0 140.8a64 64 0 1 1 64-64 64.072 64.072 0 0 1-64 64ZM49.328 23.728l-25.6 25.6a6.4 6.4 0 0 1-9.056-9.056l25.6-25.6a6.4 6.4 0 1 1 9.056 9.056Zm140.8 25.6a6.4 6.4 0 0 1-9.056 0l-25.6-25.6a6.4 6.4 0 0 1 9.056-9.056l25.6 25.6a6.4 6.4 0 0 1 0 9.056ZM147.2 96a6.4 6.4 0 0 1 0 12.8h-44.8a6.4 6.4 0 0 1-6.4-6.4V57.6a6.4 6.4 0 0 1 12.8 0V96Z"></path></svg><?php echo $hours['hours'] ?></span>
                                </div>
                            <?php
                            }
                        }
                    ?>
                    
                </div>
                <h4><?php echo get_field('support_title') ?></h4>
                <p><?php echo get_field('support_text') ?></p>
                <div class="support">
                    <div class="contact">
                        <?php echo get_field('svg1') ?>
                        <div class="text">
                            <h4><?php echo get_field('title1') ?></h4>
                            <span><?php echo get_field('text1') ?></span>
                        </div>
                    </div>
                    <div class="contact">
                        <?php echo get_field('svg2') ?>
                        <div class="text">
                            <h4><?php echo get_field('title2') ?></h4>
                            <span><?php echo get_field('text2') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>