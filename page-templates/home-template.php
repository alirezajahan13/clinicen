<?php
/*
Template Name: Home Template
*/
get_header();
$karenclinic_home_sectionOne = get_field('karenclinic_home_sectionOne');
$karenclinic_home_sectionOne_box1 = get_field('karenclinic_home_sectionOne_box1');
$karenclinic_home_sectionOne_box2 = get_field('karenclinic_home_sectionOne_box2');
$karenclinic_home_sectionTwo = get_field('karenclinic_home_sectionTwo');
$karenclinic_home_sectionThree = get_field('karenclinic_home_sectionThree');
$karenclinic_home_sectionFour = get_field('karenclinic_home_sectionFour');
$karenclinic_home_sectionFive = get_field('karenclinic_home_sectionFive');
$karenclinic_home_sectionSeven = get_field('karenclinic_home_sectionSeven');
?>
<div class="clkarenIntroSectionContainer">
    <div class="clkarenIntroSection mainView">
        <div class="introSectionContentPart">
            <h1><?php echo $karenclinic_home_sectionOne['web_title'] ?></h1>
            <p><?php echo $karenclinic_home_sectionOne['subheading'] ?></p>
            <div class="introSectionBtnPart">
                <a class="generalButton" href="<?php echo $karenclinic_home_sectionOne['link_button_1']['url']; ?>" target="<?php echo $karenclinic_home_sectionOne['link_button_1']['target']; ?><?php echo $karenclinic_home_sectionOne['link_button_1']['title']; ?>"><?php echo $karenclinic_home_sectionOne['text_button_1'] ?></a>
                <a class="generalButtonPlay" href="<?php echo $karenclinic_home_sectionOne['link_button_2']['url']; ?>" target="<?php echo $karenclinic_home_sectionOne['link_button_2']['target']; ?><?php echo $karenclinic_home_sectionOne['link_button_2']['title']; ?>">
                    <div class="buttonPlay">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256"><path d="M240,128a15.74,15.74,0,0,1-7.6,13.51L88.32,229.65a16,16,0,0,1-16.2.3A15.86,15.86,0,0,1,64,216.13V39.87a15.86,15.86,0,0,1,8.12-13.82,16,16,0,0,1,16.2.3L232.4,114.49A15.74,15.74,0,0,1,240,128Z"></path></svg>
                    </div>
                    <span><?php echo $karenclinic_home_sectionOne['text_button_2'] ?></span>
                </a>
            </div>
        </div>
        <div class="introSectionEmptyPart"></div>
    </div>
</div>
<div class="clkarenHomeCantactUsSectionContainer">
    <div class="clkarenHomeContactUsSection mainView">
        <div class="homeContactUsHowToHelpPart">
            <div class="howToHelpPartRight">
                <h2><?php echo $karenclinic_home_sectionOne_box1['heading'] ?></h2>
                <p><?php echo $karenclinic_home_sectionOne_box1['subheading'] ?></p>
                <a class="generalButton arrowButton" href="<?php echo $karenclinic_home_sectionOne_box1['link_button']['url']; ?>" target="<?php echo $karenclinic_home_sectionOne_box1['link_button']['target']; ?><?php echo $karenclinic_home_sectionOne_box1['link_button']['title']; ?>"><?php echo $karenclinic_home_sectionOne_box1['text_button'] ?></a>
            </div>
            <div class="howToHelpPartLeft">
                <?php if ($karenclinic_home_sectionOne_box1['items']) {?>
                    <?php foreach ($karenclinic_home_sectionOne_box1['items'] as $items) {
                        ?>
                            <li class="checkListStyle"><?php echo $items['item'] ?></li>
                        <?php
                    } ?>
                <?php }?>
            </div>
        </div>
        <div class="homeContactUsConsultationPart">
            <h2><?php echo $karenclinic_home_sectionOne_box2['heading'] ?></h2>
            <p><?php echo $karenclinic_home_sectionOne_box2['subheading'] ?></p>
            <div class="consultationPhonPart"> 
                <span><?php echo $karenclinic_home_sectionOne_box2['icon'] ?></span>
                <a href="tel://<?php echo $karenclinic_home_sectionOne_box2['phoneNum'] ?>"><?php echo $karenclinic_home_sectionOne_box2['phoneNum'] ?></a>
            </div>
        </div>
    </div>
</div>
<div class="clkarenAboutUsSectionContainer">
    <div class="clkarenAboutUsSection mainView">
        <div class="homeAboutUsContentPart">
            <span class="homeAboutUsSubtitle"><?php echo $karenclinic_home_sectionTwo['topheading'] ?></span>
            <h2><?php echo $karenclinic_home_sectionTwo['heading'] ?></h2>
            <p><?php echo $karenclinic_home_sectionTwo['subheading'] ?></p>
            <div class="homeAboutUsCard">
                <div class="aboutUsCardIconPart">
                <?php echo $karenclinic_home_sectionTwo['section_inner1']['icon'] ?>
                </div>
                <div class="aboutUsCardContentPart">
                    <h3><?php echo $karenclinic_home_sectionTwo['section_inner1']['title'] ?></h3>
                    <p><?php echo $karenclinic_home_sectionTwo['section_inner1']['text'] ?></p>
                </div>
            </div>
            <div class="homeAboutUsCard">
            <div class="aboutUsCardIconPart">
                <?php echo $karenclinic_home_sectionTwo['section_inner2']['icon'] ?>
                </div>
                <div class="aboutUsCardContentPart">
                    <h3><?php echo $karenclinic_home_sectionTwo['section_inner2']['title'] ?></h3>
                    <p><?php echo $karenclinic_home_sectionTwo['section_inner2']['text'] ?></p>
                </div>
            </div>
            <div class="homeAboutUsCard">
                <div class="aboutUsCardIconPart">
                <?php echo $karenclinic_home_sectionTwo['section_inner3']['icon'] ?>
                </div>
                <div class="aboutUsCardContentPart">
                    <h3><?php echo $karenclinic_home_sectionTwo['section_inner3']['title'] ?></h3>
                    <p><?php echo $karenclinic_home_sectionTwo['section_inner3']['text'] ?></p>
                </div>
            </div>
            <div class="homeAboutUsBtnContainer">
                <a class="generalButton" href="<?php echo $karenclinic_home_sectionTwo['link_button']['url']; ?>" target="<?php echo $karenclinic_home_sectionTwo['link_button']['target']; ?><?php echo $karenclinic_home_sectionTwo['link_button']['title']; ?>"><?php echo $karenclinic_home_sectionTwo['text_button'] ?></a>
                <div class="homeAboutUsFounderPart">
                    <div class="founderPartImg"><img src="<?php echo $karenclinic_home_sectionTwo['image_profile']['url'] ?>" alt="<?php echo $karenclinic_home_sectionTwo['image_profile']['alt'] ?>"></div>
                    <div class="founderPartName">
                        <h3><?php echo $karenclinic_home_sectionTwo['name'] ?></h3>
                        <span><?php echo $karenclinic_home_sectionTwo['position'] ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeAboutUsImagePart">
            <div class="div1"><img src="<?php echo $karenclinic_home_sectionTwo['images_1']['url'] ?>" alt="<?php echo $karenclinic_home_sectionTwo['images_1']['alt'] ?>"></div>
            <div class="div2"><img src="<?php echo $karenclinic_home_sectionTwo['images_2']['url'] ?>" alt="<?php echo $karenclinic_home_sectionTwo['images_2']['alt'] ?>"></div>
            <div class="div3"><img src="<?php echo $karenclinic_home_sectionTwo['images_3']['url'] ?>" alt="<?php echo $karenclinic_home_sectionTwo['images_3']['alt'] ?>"></div>
        </div>
    </div>
</div>
<div class="clkarenHomeCounterContainer extraHighMargined">
    <div class="clkarenHomeCounter mainView" id="counterNumbers">  
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <span class="counterItemSvg"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#fff" viewBox="0 0 246.154 246.154"><path d="M207.692 61.538H169.23v-7.692a23.077 23.077 0 0 0-23.077-23.077H99.999a23.077 23.077 0 0 0-23.077 23.077v7.692h-38.46a15.385 15.385 0 0 0-15.385 15.385V200a15.385 15.385 0 0 0 15.385 15.385h169.231A15.385 15.385 0 0 0 223.078 200V76.923a15.385 15.385 0 0 0-15.385-15.385ZM92.308 53.846A7.692 7.692 0 0 1 100 46.154h46.154a7.692 7.692 0 0 1 7.692 7.692v7.692H92.308ZM207.693 200H38.462V76.923h169.231V200Zm-53.846-61.538a7.692 7.692 0 0 1-7.692 7.692H130.77v15.385a7.692 7.692 0 0 1-15.385 0v-15.385H100a7.692 7.692 0 0 1 0-15.385h15.385v-15.385a7.692 7.692 0 0 1 15.385 0v15.385h15.385a7.692 7.692 0 0 1 7.692 7.692Z"/></svg></span>
            <div class="counterNumber"><span id="counter-1">98</span><span class="plus">%</span></div>
            <div class="counterTitle">رضایت بیمار</div>
        </div>
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <span class="counterItemSvg"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#fff" viewBox="0 0 256 256"><path d="M216 96a88 88 0 1 0-144 67.83V240a8 8 0 0 0 11.58 7.16L128 225l44.43 22.21a8.07 8.07 0 0 0 3.57.79 8 8 0 0 0 8-8v-76.17A87.85 87.85 0 0 0 216 96ZM56 96a72 72 0 1 1 72 72 72.08 72.08 0 0 1-72-72Zm112 131.06-36.43-18.21a8 8 0 0 0-7.16 0L88 227.06v-52.69a87.89 87.89 0 0 0 80 0ZM128 152a56 56 0 1 0-56-56 56.06 56.06 0 0 0 56 56Zm0-96a40 40 0 1 1-40 40 40 40 0 0 1 40-40Z"/></svg></span>
            <div class="counterNumber"><span class="plus">+</span><span id="counter-2">7</span></div>
            <div class="counterTitle">پزشک متخصص</div>
        </div>
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <span class="counterItemSvg"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#fff" viewBox="0 0 256 256"><path d="M176 16H80a24 24 0 0 0-24 24v176a24 24 0 0 0 24 24h96a24 24 0 0 0 24-24V40a24 24 0 0 0-24-24Zm8 200a8 8 0 0 1-8 8H80a8 8 0 0 1-8-8V40a8 8 0 0 1 8-8h96a8 8 0 0 1 8 8ZM140 60a12 12 0 1 1-12-12 12 12 0 0 1 12 12Z"/></svg></span>
            <div class="counterNumber"><span class="plus">+</span><span id="counter-3">264</span></div>
            <div class="counterTitle">مشاوره آنلاین</div>
        </div>
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <span class="counterItemSvg"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#fff" viewBox="0 0 256 256"><path d="M27.2 126.4a8 8 0 0 0 11.2-1.6 52 52 0 0 1 83.2 0 8 8 0 0 0 11.2 1.59 7.73 7.73 0 0 0 1.59-1.59 52 52 0 0 1 83.2 0 8 8 0 0 0 12.8-9.61A67.85 67.85 0 0 0 203 93.51a40 40 0 1 0-53.94 0 67.27 67.27 0 0 0-21 14.31 67.27 67.27 0 0 0-21-14.31 40 40 0 1 0-53.94 0A67.88 67.88 0 0 0 25.6 115.2a8 8 0 0 0 1.6 11.2ZM176 40a24 24 0 1 1-24 24 24 24 0 0 1 24-24Zm-96 0a24 24 0 1 1-24 24 24 24 0 0 1 24-24Zm123 157.51a40 40 0 1 0-53.94 0 67.27 67.27 0 0 0-21 14.31 67.27 67.27 0 0 0-21-14.31 40 40 0 1 0-53.94 0A67.88 67.88 0 0 0 25.6 219.2a8 8 0 1 0 12.8 9.6 52 52 0 0 1 83.2 0 8 8 0 0 0 11.2 1.59 7.73 7.73 0 0 0 1.59-1.59 52 52 0 0 1 83.2 0 8 8 0 0 0 12.8-9.61A67.85 67.85 0 0 0 203 197.51ZM80 144a24 24 0 1 1-24 24 24 24 0 0 1 24-24Zm96 0a24 24 0 1 1-24 24 24 24 0 0 1 24-24Z"/></svg></span>
            <div class="counterNumber"><span class="plus">+</span><span id="counter-4">264</span></div>
            <div class="counterTitle">مشاوره آنلاین</div>
        </div>
    </div>
</div>
<div class="clkarenHomeOurServicesContainer">
    <div class="clkarenHomeOurServices mainView">
        <div class="clkarenHomeOurServicesHeader">
            <div class="homeOurServicesHeaderTitle">
                <span><?php echo $karenclinic_home_sectionThree['topheading'] ?></span>
                <h2><?php echo $karenclinic_home_sectionThree['heading'] ?></h2>
            </div>
            <span class="homeOurServicesHeaderParagraph"><?php echo $karenclinic_home_sectionThree['text'] ?></span>
            <a class="generalButton" href="<?php echo $karenclinic_home_sectionThree['link_button']['url']; ?>" target="<?php echo $karenclinic_home_sectionThree['link_button']['target']; ?><?php echo $karenclinic_home_sectionThree['link_button']['title']; ?>"><?php echo $karenclinic_home_sectionThree['text_button'] ?></a>
        </div>
        <div class="clkarenHomeOurServicesCardsParent">
            <a href="<?php echo $karenclinic_home_sectionThree['services_box_1']['link_to']['url']; ?>" target="<?php echo $karenclinic_home_sectionThree['services_box_1']['link_to']['target']; ?><?php echo $karenclinic_home_sectionThree['services_box_1']['link_to']['title']; ?>" class="ourServicesCard">
                <div class="ourServicesCardHeader">
                    <img src="<?php echo $karenclinic_home_sectionThree['services_box_1']['image1']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_1']['image']['alt'] ?>">
                    <div class="ourServicesCardFooter">
                        <img decoding="async" src="<?php echo $karenclinic_home_sectionThree['services_box_1']['icon1']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_1']['icon']['alt'] ?>">
                        <div class="ourServicesCardFooterInner">
                            <h3><?php echo $karenclinic_home_sectionThree['services_box_1']['title']?></h3>
                            <span><?php echo $karenclinic_home_sectionThree['services_box_1']['texts']?></span>
                            <span class="generalButton arrowButton"><?php echo $karenclinic_home_sectionThree['services_box_1']['text_bottun']?></span>
                        </div>
                </div>
                </div>
            </a>
            <a href="<?php echo $karenclinic_home_sectionThree['services_box_2']['link_to']['url']; ?>" target="<?php echo $karenclinic_home_sectionThree['services_box_2']['link_to']['target']; ?><?php echo $karenclinic_home_sectionThree['services_box_2']['link_to']['title']; ?>" class="ourServicesCard">
                <div class="ourServicesCardHeader">
                    <img src="<?php echo $karenclinic_home_sectionThree['services_box_2']['image2']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_2']['image']['alt'] ?>">
                    <div class="ourServicesCardFooter">
                        <img decoding="async" src="<?php echo $karenclinic_home_sectionThree['services_box_2']['icon2']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_2']['icon']['alt'] ?>">
                        <div class="ourServicesCardFooterInner">
                            <h3><?php echo $karenclinic_home_sectionThree['services_box_2']['title']?></h3>
                            <span><?php echo $karenclinic_home_sectionThree['services_box_2']['texts']?></span>
                            <span class="generalButton arrowButton"><?php echo $karenclinic_home_sectionThree['services_box_2']['text_bottun']?></span>
                        </div>
                </div>
                </div>
            </a>
            <a href="<?php echo $karenclinic_home_sectionThree['services_box_3']['link_to']['url']; ?>" target="<?php echo $karenclinic_home_sectionThree['services_box_3']['link_to']['target']; ?><?php echo $karenclinic_home_sectionThree['services_box_3']['link_to']['title']; ?>" class="ourServicesCard">
                <div class="ourServicesCardHeader">
                    <img src="<?php echo $karenclinic_home_sectionThree['services_box_3']['image3']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_3']['image']['alt'] ?>">
                    <div class="ourServicesCardFooter">
                        <img decoding="async" src="<?php echo $karenclinic_home_sectionThree['services_box_3']['icon3']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_3']['icon']['alt'] ?>">
                        <div class="ourServicesCardFooterInner">
                            <h3><?php echo $karenclinic_home_sectionThree['services_box_3']['title']?></h3>
                            <span><?php echo $karenclinic_home_sectionThree['services_box_3']['texts']?></span>
                            <span class="generalButton arrowButton"><?php echo $karenclinic_home_sectionThree['services_box_3']['text_bottun']?></span>
                        </div>
                </div>
                </div>
            </a>
            <a href="<?php echo $karenclinic_home_sectionThree['services_box_4']['link_to']['url']; ?>" target="<?php echo $karenclinic_home_sectionThree['services_box_4']['link_to']['target']; ?><?php echo $karenclinic_home_sectionThree['services_box_4']['link_to']['title']; ?>" class="ourServicesCard">
                <div class="ourServicesCardHeader">
                    <img src="<?php echo $karenclinic_home_sectionThree['services_box_4']['image4']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_4']['image']['alt'] ?>">
                    <div class="ourServicesCardFooter">
                        <img decoding="async" src="<?php echo $karenclinic_home_sectionThree['services_box_4']['icon4']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_4']['icon']['alt'] ?>">
                        <div class="ourServicesCardFooterInner">
                            <h3><?php echo $karenclinic_home_sectionThree['services_box_4']['title']?></h3>
                            <span><?php echo $karenclinic_home_sectionThree['services_box_4']['texts']?></span>
                            <span class="generalButton arrowButton"><?php echo $karenclinic_home_sectionThree['services_box_4']['text_bottun']?></span>
                        </div>
                </div>
                </div>
            </a>
            <a href="<?php echo $karenclinic_home_sectionThree['services_box_5']['link_to']['url']; ?>" target="<?php echo $karenclinic_home_sectionThree['services_box_5']['link_to']['target']; ?><?php echo $karenclinic_home_sectionThree['services_box_5']['link_to']['title']; ?>" class="ourServicesCard">
                <div class="ourServicesCardHeader">
                    <img src="<?php echo $karenclinic_home_sectionThree['services_box_5']['image5']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_5']['image']['alt'] ?>">
                    <div class="ourServicesCardFooter">
                        <img decoding="async" src="<?php echo $karenclinic_home_sectionThree['services_box_5']['icon5']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_5']['icon']['alt'] ?>">
                        <div class="ourServicesCardFooterInner">
                            <h3><?php echo $karenclinic_home_sectionThree['services_box_5']['title']?></h3>
                            <span><?php echo $karenclinic_home_sectionThree['services_box_5']['texts']?></span>
                            <span class="generalButton arrowButton"><?php echo $karenclinic_home_sectionThree['services_box_5']['text_bottun']?></span>
                        </div>
                </div>
                </div>
            </a>
            <a href="<?php echo $karenclinic_home_sectionThree['services_box_6']['link_to']['url']; ?>" target="<?php echo $karenclinic_home_sectionThree['services_box_6']['link_to']['target']; ?><?php echo $karenclinic_home_sectionThree['services_box_6']['link_to']['title']; ?>" class="ourServicesCard">
                <div class="ourServicesCardHeader">
                    <img src="<?php echo $karenclinic_home_sectionThree['services_box_6']['image6']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_6']['image']['alt'] ?>">
                    <div class="ourServicesCardFooter">
                        <img decoding="async" src="<?php echo $karenclinic_home_sectionThree['services_box_6']['icon6']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['services_box_6']['icon']['alt'] ?>">
                        <div class="ourServicesCardFooterInner">
                            <h3><?php echo $karenclinic_home_sectionThree['services_box_6']['title']?></h3>
                            <span><?php echo $karenclinic_home_sectionThree['services_box_6']['texts']?></span>
                            <span class="generalButton arrowButton"><?php echo $karenclinic_home_sectionThree['services_box_6']['text_bottun']?></span>
                        </div>
                </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="clkarenHomeImageSliderContainer">
    <div class="clkarenHomeImageSliderImage">
        <img class="clkarenHomeImageSliderImage1" src="<?php echo $karenclinic_home_sectionFour['image1']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['image1']['alt'] ?>">
        <img class="clkarenHomeImageSliderImage2" src="<?php echo $karenclinic_home_sectionFour['image2']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['image2']['alt'] ?>">
        <img class="clkarenHomeImageSliderImage3" src="<?php echo $karenclinic_home_sectionFour['image3']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['image3']['alt'] ?>">
        <img class="clkarenHomeImageSliderImage4" src="<?php echo $karenclinic_home_sectionFour['image4']['url'] ?>" alt="<?php echo $karenclinic_home_sectionThree['image4']['alt'] ?>">
    </div>
    <div class="imageSliderParent">
        <a class="imageSlider imageSlider1" href="#">
            <h2><?php echo $karenclinic_home_sectionFour['headings1'] ?></h2>
        </a>
        <a class="imageSlider imageSlider2" href="#">
            <h2><?php echo $karenclinic_home_sectionFour['headings2'] ?></h2>
        </a>
        <a class="imageSlider imageSlider3" href="#">
            <h2><?php echo $karenclinic_home_sectionFour['headings3'] ?></h2>
        </a>
        <a class="imageSlider imageSlider4" href="#">
            <h2><?php echo $karenclinic_home_sectionFour['headings4'] ?></h2>
        </a>
    </div>
</div>
<div class="clkarenHomeOurApproachContainer">
    <div class="clkarenOurApproachSection mainView">
        <div class="homeOurApproachContentPart">
            <span class="homeOurApproachSubtitle"><?php echo $karenclinic_home_sectionFive['topheading'] ?></span>
            <h2><?php echo $karenclinic_home_sectionFive['heading'] ?></h2>
            <p><?php echo $karenclinic_home_sectionFive['subheading'] ?></p>
            <div class="homeOurApproachCards">
            <div class="homeOurApproachCard">
                <div class="aboutUsCardIconPart">
                    <div class="aboutUsCardIconPartInner">
                        <?php echo $karenclinic_home_sectionFive['box1']['icon'] ?>
                    </div>
                </div>
                <div class="OurApproachCardContentPart">
                    <h3><?php echo $karenclinic_home_sectionFive['box1']['title'] ?></h3>
                    <p><?php echo $karenclinic_home_sectionFive['box1']['text'] ?></p>
                </div>
            </div>
            <div class="homeOurApproachCard">
                <div class="aboutUsCardIconPart">
                    <div class="aboutUsCardIconPartInner">
                        <?php echo $karenclinic_home_sectionFive['box2']['icon'] ?>
                    </div>
                    </div>
                    <div class="OurApproachCardContentPart">
                        <h3><?php echo $karenclinic_home_sectionFive['box2']['title'] ?></h3>
                        <p><?php echo $karenclinic_home_sectionFive['box2']['text'] ?></p>
                    </div>
                </div>
            <div class="homeOurApproachCard">
                <div class="aboutUsCardIconPart">
                    <div class="aboutUsCardIconPartInner">
                        <?php echo $karenclinic_home_sectionFive['box3']['icon'] ?>
                    </div>
                </div>
                <div class="OurApproachCardContentPart">
                    <h3><?php echo $karenclinic_home_sectionFive['box3']['title'] ?></h3>
                    <p><?php echo $karenclinic_home_sectionFive['box3']['text'] ?></p>
                </div>
            </div>
            <div class="homeOurApproachCard">
                <div class="aboutUsCardIconPart">
                    <div class="aboutUsCardIconPartInner">
                        <?php echo $karenclinic_home_sectionFive['box4']['icon'] ?>
                    </div>
                </div>
                <div class="OurApproachCardContentPart">
                    <h3><?php echo $karenclinic_home_sectionFive['box4']['title'] ?></h3>
                    <p><?php echo $karenclinic_home_sectionFive['box4']['text'] ?></p>
                </div>
            </div>
            </div>
        </div>
        <div class="homeOurApproachImagePart">
            <div class="div1">
                <img src="<?php echo $karenclinic_home_sectionFive['photo']['url'] ?>" alt="<?php echo $karenclinic_home_sectionFive['photo']['alt'] ?>">
                <div>
                    <h3><?php echo $karenclinic_home_sectionFive['title_in_image'] ?></h3>
                    <span class="generalButton arrowButton" href="<?php echo $karenclinic_home_sectionFive['link_in_image']['url']; ?>" target="<?php echo $karenclinic_home_sectionFive['link_in_image']['target']; ?><?php echo $karenclinic_home_sectionFive['link_in_image']['title']; ?>"><?php echo $karenclinic_home_sectionFive['text_link_in_image'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clkarenHomeViewContainer">
    <div class="clkarenHomeView mainView">
        <div class="swiper imageSwiper">
            <div class="swiper-wrapper">
                <?php
                    $karenclinic_home_sectionSix = get_field('karenclinic_home_sectionSix');
                    foreach ($karenclinic_home_sectionSix as $comments) {
                        ?>
                        <div class="swiper-slide innerSwiper">
                            <p><?php echo $comments['txt_com'] ?></p>
                            <ul>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 85.333 85.333"><path d="m78.167 38.127-15.033 13.12 4.503 19.533a5.333 5.333 0 0 1-7.947 5.78L42.653 66.227l-17 10.333a5.333 5.333 0 0 1-7.947-5.78l4.497-19.513-15.037-13.14a5.333 5.333 0 0 1 3.037-9.353l19.82-1.717L37.76 8.604a5.317 5.317 0 0 1 9.813 0l7.76 18.453 19.813 1.717a5.333 5.333 0 0 1 3.037 9.353Z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 85.333 85.333"><path d="m78.167 38.127-15.033 13.12 4.503 19.533a5.333 5.333 0 0 1-7.947 5.78L42.653 66.227l-17 10.333a5.333 5.333 0 0 1-7.947-5.78l4.497-19.513-15.037-13.14a5.333 5.333 0 0 1 3.037-9.353l19.82-1.717L37.76 8.604a5.317 5.317 0 0 1 9.813 0l7.76 18.453 19.813 1.717a5.333 5.333 0 0 1 3.037 9.353Z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 85.333 85.333"><path d="m78.167 38.127-15.033 13.12 4.503 19.533a5.333 5.333 0 0 1-7.947 5.78L42.653 66.227l-17 10.333a5.333 5.333 0 0 1-7.947-5.78l4.497-19.513-15.037-13.14a5.333 5.333 0 0 1 3.037-9.353l19.82-1.717L37.76 8.604a5.317 5.317 0 0 1 9.813 0l7.76 18.453 19.813 1.717a5.333 5.333 0 0 1 3.037 9.353Z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 85.333 85.333"><path d="m78.167 38.127-15.033 13.12 4.503 19.533a5.333 5.333 0 0 1-7.947 5.78L42.653 66.227l-17 10.333a5.333 5.333 0 0 1-7.947-5.78l4.497-19.513-15.037-13.14a5.333 5.333 0 0 1 3.037-9.353l19.82-1.717L37.76 8.604a5.317 5.317 0 0 1 9.813 0l7.76 18.453 19.813 1.717a5.333 5.333 0 0 1 3.037 9.353Z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 85.333 85.333"><path d="m78.167 38.127-15.033 13.12 4.503 19.533a5.333 5.333 0 0 1-7.947 5.78L42.653 66.227l-17 10.333a5.333 5.333 0 0 1-7.947-5.78l4.497-19.513-15.037-13.14a5.333 5.333 0 0 1 3.037-9.353l19.82-1.717L37.76 8.604a5.317 5.317 0 0 1 9.813 0l7.76 18.453 19.813 1.717a5.333 5.333 0 0 1 3.037 9.353Z"/></svg>
                            </ul>
                            <div class="homeAboutUsFounderPart">
                                <div class="founderPartImg">
                                    <img src="<?php echo $comments['img_user']['url'] ?>" alt="<?php echo $comments['img_user']['alt'] ?>">
                                </div>
                                <div class="founderPartName">
                                    <h3><?php echo $comments['name_user'] ?></h3>
                                    <span><?php echo $comments['txt_sub_name'] ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="clkarenOurBlogSection mainView">
    <span class="clkarenOurDoctorSubtitle"><?php echo $karenclinic_home_sectionSeven['top_title'] ?></span>
    <h2><?php echo $karenclinic_home_sectionSeven['title'] ?></h2>
    <p><?php echo $karenclinic_home_sectionSeven['bottom_title'] ?></p>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" viewBox="0 0 256 256"><path d="M208 32h-24v-8a8 8 0 0 0-16 0v8H88v-8a8 8 0 0 0-16 0v8H48a16 16 0 0 0-16 16v160a16 16 0 0 0 16 16h160a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16ZM72 48v8a8 8 0 0 0 16 0v-8h80v8a8 8 0 0 0 16 0v-8h24v32H48V48Zm136 160H48V96h160v112Z"/></svg>
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
<?php
get_footer();