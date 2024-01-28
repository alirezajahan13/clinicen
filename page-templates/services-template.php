<?php 
$karenmed_service_section1=get_field('karenmed_service_section1');
$karenmed_service_section2=get_field('karenmed_service_section2');
$karenmed_service_section3=get_field('karenmed_service_section3');
/*
Template Name: Services Template
*/
get_header();
?>

<div class="servicesPageBack">
    <div class="servicesDetailsSec highMargined mainView">
        <div class="imageBox">
            <img src="<?php echo $karenmed_service_section1['image']['url'] ?>" alt="<?php echo $karenmed_service_section1['image']['alt'] ?>">
        </div>
        <div class="detailBox">
            <h2><?php echo $karenmed_service_section1['title'] ?></h2>
            <p><?php echo $karenmed_service_section1['text'] ?></p>
        </div>
    </div>
    <div class="clkarenHomeCounterContainer extraHighMargined">
    <div class="clkarenHomeCounter mainView" id="counterNumbers">  
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <span class="counterItemSvg"><?php echo $karenmed_service_section2['svg1'] ?></span>
            <div class="counterNumber"><span id="counter-1"><?php echo $karenmed_service_section2['title1'] ?></span><span class="plus">%</span></div>
            <div class="counterTitle"><?php echo $karenmed_service_section2['text1'] ?></div>
        </div>
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <span class="counterItemSvg"><?php echo $karenmed_service_section2['svg2'] ?></span>
            <div class="counterNumber"><span class="plus">+</span><span id="counter-2"><?php echo $karenmed_service_section2['title2'] ?></span></div>
            <div class="counterTitle"><?php echo $karenmed_service_section2['text2'] ?></div>
        </div>
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <span class="counterItemSvg"><?php echo $karenmed_service_section2['svg3'] ?></span>
            <div class="counterNumber"><span class="plus">+</span><span id="counter-3"><?php echo $karenmed_service_section2['title3'] ?></span></div>
            <div class="counterTitle"><?php echo $karenmed_service_section2['text3'] ?></div>
        </div>
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <span class="counterItemSvg"><?php echo $karenmed_service_section2['svg4'] ?></span>
            <div class="counterNumber"><span class="plus">+</span><span id="counter-4"><?php echo $karenmed_service_section2['title4'] ?></span></div>
            <div class="counterTitle"><?php echo $karenmed_service_section2['text4'] ?></div>
        </div>
    </div>
</div>
    <div class="servicesEntryContent highMargined mainView">
        <!-- <div class="generalHeading highMargined centeredText bottomBorder">
            <h3 class="entryContentTitle">خدمت رسانی</h3>
        </div> -->
        <div class="servicesEntryContentHeader highMargined bottomBorder">
            <div class="servicesEntryContentTitle">
                <span class="topHeading"><?php echo $karenmed_service_section3['top_title'] ?></span>
                <h2><?php echo $karenmed_service_section3['title'] ?></h2>
                <div class="servicesEntryContentHeaderCount">
                    <div class="commentsCount">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="scale(-1 1)"><path fill-rule="evenodd" clip-rule="evenodd" d="M20.991 4.8c0-.99-.801-1.8-1.791-1.8H4.8C3.81 3 3 3.81 3 4.8v10.8c0 .99.81 1.8 1.8 1.8h12.6L21 21l-.009-16.2Zm-1.791 0v11.853L18.147 15.6H4.8V4.8h14.4ZM17.4 12H6.6v1.8h10.8V12ZM6.6 9.3h10.8v1.8H6.6V9.3Zm10.8-2.7H6.6v1.8h10.8V6.6Z" fill="#e3b077"/></svg>
                        <span class="commentsCountText">تعداد نظرات:</span>
                        <span class="commentsCountNum"><?php comments_number( '0', '1', '%' ); ?></span>
                    </div>
                    <div class="viewPageCount">
                        <svg height="20" width="20" fill="#e3b077" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42" xml:space="preserve"><path d="M15.3 20.1c0 3.1 2.6 5.7 5.7 5.7s5.7-2.6 5.7-5.7-2.6-5.7-5.7-5.7-5.7 2.6-5.7 5.7zm8.1 12.3C30.1 30.9 40.5 22 40.5 22s-7.7-12-18-13.3c-.6-.1-2.6-.1-3-.1-10 1-18 13.7-18 13.7s8.7 8.6 17 9.9c.9.4 3.9.4 4.9.2zM11.1 20.7c0-5.2 4.4-9.4 9.9-9.4s9.9 4.2 9.9 9.4S26.5 30 21 30s-9.9-4.2-9.9-9.3z"/></svg>
                        <span class="viewCountText">تعداد بازدید:</span>
                        <span class="viewCountNum"><?php echo get_page_views(get_the_ID()); ?></span>
                    </div>
                </div>
            </div>
            <span class="servicesEntryContentHeaderInnerBtn"><a class="generalButton arrowButton" href="<?php echo $karenmed_service_section3['link']['url']; ?>" target="<?php echo $karenmed_service_section3['link']['target']; ?><?php echo $karenmed_service_section3['link']['title']; ?>"><?php echo $karenmed_service_section3['text_link'] ?></a></span>
        </div>
        <p><?php echo $karenmed_service_section3['text1'] ?></p>
        <img src="<?php echo $karenmed_service_section3['image']['url'] ?>" alt="<?php echo $karenmed_service_section3['alt'] ?>">
        <div class="lightBorder highRadius mediumPadding mediumMargined">
            <p class="noMargin"><?php echo $karenmed_service_section3['text2'] ?></p>
        </div>
    </div>
    <div class="servicesFormSection highMargined mainView">
        <div class="generalHeading highMargined centeredText">
            <h3 class="entryContentTitle">فرم تماس</h3>
        </div>
        <div class="servicesFormSectionInner">
            <div class="formSection">
                <?php echo do_shortcode('[contact-form-7 id="ae581f2" title="فرم خدمات"]') ?>
            </div>
            <div class="imgSection">
            <img src="<?php echo get_field('karenmed_service_image_section4')['url'] ?>" alt="<?php echo get_field('karenmed_service_image_section4')['alt'] ?>">
            </div>
        </div>
    </div>
    <?php comments_template('/services-comments.php'); ?>
</div>

<?php 
get_footer();