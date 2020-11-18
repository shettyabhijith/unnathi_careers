<?php 

    session_start();
    
    if(!isset($_SESSION['email'])){
        
        ?>
        <style type="text/css">
            /* #myModal {
                display:block;
                background: #00000066;
            }

            .main_register_form{
                background-image: none !important;
            }

            body{
                overflow:hidden;
            } */
            
        </style>
        <?php
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
        <link rel="icon" href="images/unnathi_fav_icon.ico">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/header_footer.css" />
        <link rel="stylesheet" href="css/register_modal.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Unathi Career Academy</title>
    </head>

    <body>
        


        <!-- Register Login Modal Box Starts Here -->
        <?php include("includes/register_modal.php"); ?>
        <!-- Register Login Modal Box Starts Here -->







        <!-- left Right Box Starts Here -->

        <!-- <div class="left_right_box">
            <div class="left_box">
                <img src="images/left.jpg" class="img-fluid left_img" />
            </div>
            <div class="right_box">
                <img src="images/right.jpg" class="img-fluid right_img" />
                
            </div>
        </div> -->


        <div class="left_right_2">
            <div class="home_main_img_box">
                <div class="home_img_set">
                    <!-- Header Starts Here -->
                    <?php include("includes/header.html"); ?>
                    <!-- Header Ends Here -->

                   

                    <div class="who_we_flip_box">
                        <div class="flip_box_layout">
                            <div class="flip_card_5">
                                <div class="flip_card_5_inner">
                                    <div class="flip_card_5_front">
                                        <p class="who_we_qsn">Who We Are?</p>
                                    </div>
                                    <div class="flip_card_5_back">
                                        <p class="who_we_explained"> “Unnathi” means progress. The best way to contribute for the progress of the Nation is to see that the youth of the Nation are on the path of progress.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flip_card_5">
                                <div class="flip_card_5_inner">
                                    <div class="flip_card_5_front">
                                        <p class="who_we_qsn">What We Do?</p>
                                    </div>
                                    <div class="flip_card_5_back">
                                        <ul class="who_we_explained" style="text-align:left;">
                                            <li> Skill Tests </li>
                                            <li> Career Counseling </li>
                                            <li> Training </li>
                                            <li> International & Globally Recognized Certificate Program </li>
                                            <li> Placement Assistance </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="flip_card_5">
                                <div class="flip_card_5_inner">
                                    <div class="flip_card_5_front">
                                        <p class="who_we_qsn">Modes Of Training</p>
                                    </div>
                                    <div class="flip_card_5_back">
                                        <ul class="who_we_explained" style="text-align:left;">
                                            <li> Classroom </li>
                                            <li> Online </li>
                                            <li> Self Paced </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <!-- Right Left Box Ends Here -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

                <!-- Find Dream Job Starts Here -->

                <div class="banner_section">
                    <div class="row" style="margin:0px">
                        <div class="col-md-6">
                            <div class="find_dream_job">
                                <img src="images/career_banner1.png" class="img-fluid dream_job_img" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLScm0v5WYYlb93cd5TXS90-y_tXpkkuLosmO59Bat7COTVKCXg/viewform?vc=0&c=0&w=1&flr=0&gxids=7628')" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="find_dream_job">
                                <img src="images/find_your_dream_job_banner.jpeg" class="img-fluid dream_job_img" onclick="window.open('https://unnathijob.com/')" />
                            </div>
                            
                        </div>
                    </div>
                </div>

        <!-- Find Dream Job Ends Here -->

        
        <!-- Business Partner Starts Here -->
        <div class="business_partner_box">
            <div class="business_partner_head">
                <p>Busine<span class="business_partner_edit">ss Pa</span>rtners</p>
            </div>


            <div class="business_partner_box2">
                <div class="business_row1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="business_part_2a">
                                <div class="business_image_2a_layout">
                                    <img src="images/amcat_logo2.png" alt="Business Partners" class="img-responsive img-fluid business_img_2a_1" >
                                </div>
                                <div class="business_img_2a_back ">
                                    <div class="business_img_header_section d-flex">
                                        <div class="img_box_business_2ab">
                                            <img src="images/amcat_logo2.png" alt="Business Partners" class="img-responsive img-fluid business_img_2a_2" >
                                        </div>
                                        <p class="img_business_2a_explain">About AMCAT</p>
                                    </div>
                                    <div class="business_about_other_exp">
                                        <p class="business_explained_other">
                                            Send converted leads directly from your Instapage post-click landing pages into your HubSpot leads database. Together Instapage and HubSpot allow marketers
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="business_part_2a">
                                <div class="business_image_2a_layout">
                                    <img src="images/logo-aptech.jpg" alt="Business Partners" class="img-responsive img-fluid business_img_2a_1" >
                                </div>
                                <div class="business_img_2a_back ">


                                    <div class="business_img_header_section d-flex">
                                        <div class="img_box_business_2ab">
                                            <img src="images/logo-aptech.jpg" alt="Business Partners" class="img-responsive img-fluid business_img_2a_2" >
                                        </div>
                                        <p class="img_business_2a_explain">About APTECH</p>
                                    </div>
                                    <div class="business_about_other_exp">
                                        <p class="business_explained_other">
                                            Send converted leads directly from your Instapage post-click landing pages into your HubSpot leads database. Together Instapage and HubSpot allow marketers
                                        </p>
                                    </div>


                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="business_part_2a">
                                <div class="business_image_2a_layout">
                                    <img src="images/ayatalogo2.png" alt="Business Partners" class="img-responsive img-fluid business_img_2a_1" >
                                </div>
                                <div class="business_img_2a_back ">


                                    <div class="business_img_header_section d-flex">
                                        <div class="img_box_business_2ab">
                                            <img src="images/ayatalogo2.png" alt="Business Partners" class="img-responsive img-fluid business_img_2a_2" >
                                        </div>
                                        <p class="img_business_2a_explain">About IATA</p>
                                    </div>
                                    <div class="business_about_other_exp">
                                        <p class="business_explained_other">
                                            Send converted leads directly from your Instapage post-click landing pages into your HubSpot leads database. Together Instapage and HubSpot allow marketers
                                        </p>
                                    </div>




                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="business_row2">
                    <div class="row">
                        <div class="col-md-2">

                        </div>

                        <div class="col-md-4">
                            <div class="business_part_2a">
                                <div class="business_image_2a_layout">
                                    <img src="images/srininvas_logo3.png" alt="Business Partners" class="img-responsive img-fluid business_img_2a_1 srinivas_logo2" >
                                </div>
                                <div class="business_img_2a_back">



                                    <div class="business_img_header_section d-flex">
                                        <div class="img_box_business_2ab">
                                            <img src="images/srininvas_logo3.png" alt="Business Partners" class="img-responsive img-fluid business_img_2a_2 srinivas_logo2 srinivas_logo2" >
                                        </div>
                                        <p class="img_business_2a_explain">About SRINIVAS</p>
                                    </div>
                                    <div class="business_about_other_exp">
                                        <p class="business_explained_other">
                                            Send converted leads directly from your Instapage post-click landing pages into your HubSpot leads database. Together Instapage and HubSpot allow marketers
                                        </p>
                                    </div>




                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="business_part_2a">
                                <div class="business_image_2a_layout">
                                    <img src="images/logo-ibm.jpg" alt="Business Partners" class="img-responsive img-fluid business_img_2a_1" >
                                </div>
                                <div class="business_img_2a_back">



                                    <div class="business_img_header_section d-flex">
                                        <div class="img_box_business_2ab">
                                            <img src="images/logo-ibm.jpg" alt="Business Partners" class="img-responsive img-fluid business_img_2a_2" >
                                        </div>
                                        <p class="img_business_2a_explain">About IBM</p>
                                    </div>
                                    <div class="business_about_other_exp">
                                        <p class="business_explained_other">
                                            Send converted leads directly from your Instapage post-click landing pages into your HubSpot leads database. Together Instapage and HubSpot allow marketers
                                        </p>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="business_partner_slide">
                <div id="business_partner_carousel" class="owl-carousel owl-theme owl-loaded owl-drag" >
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div class="ibm_1_all">
                                    <img src="images/logo-ibm.jpg" class="ibm_img" />
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="ibm_1_all">
                                    <img src="images/logo-lakme.jpg" class="ibm_img" />
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="ibm_1_all">
                                    <img src="images/logo-aptech.jpg" class="ibm_img" />
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="ibm_1_all">
                                    <img src="images/ayatalogo2.png" class="ayata_logo_img" />
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="ibm_1_all">
                                    <img src="images/srininvas_logo3.png" class="srininvas_logo_img" />
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="ibm_1_all">
                                    <img src="images/amcat_logo2.png" class="ibm_img" />
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>


                </div>
               
                
                
            </div> -->
        </div>
        <!-- Business Partner Ends Here -->


        <!-- Learn about our Program Starts here-->
        <div class="our_progran_box">
            <div class="our_program_head">
                <p class="our_program_h1" >Learn About Our Programs </p>
            </div>
            <div class="our_program_exp">
                <a href="#" class="our_program_button">KNOW OUR FULL PROGRAM</a>
            </div>
        </div>
        <!-- Learn about our Program Ends here-->

        <!-- Who We Are Starts Here -->
        <!-- <div class="who_we_are_box">
           
            <div class="row row_edit">
                <div class="col-md-9">
                    <div class="who_we_are_head">
                        <p class="who_all_head"><span class="who_w">W</span>ho <span>We Are?</span></p>
                    </div>
                    <div class="who_we_detail">
                        <p>“Unnathi” means progress. The best way to contribute for the progress of the Nation is to see that the youth of the Nation are on the path progress. It is our unique project wherein we empower the youth by providing him/her the right job and career at a right time. If the intellect, skill and the energy of the youth is not harnessed or channelized in the right direction then we are depriving the Nation of its qualitative contribution. It is the need of the hour to place the youngsters in the right place so that the best out of them will come out and create an atmosphere of wellness.</p>
                    </div>
                </div>
                <div class="col-md-3">
                <div class="who_we_video">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/140680130" class="who_we_video1a" frameborder="0" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div> -->
        <!-- Who We are Ends Here -->


        <!-- Top 10 Company Starts Here -->
        <div class="top_10_company">
            
            <div class="top_10_all">
                
                <div id="top_10_slider" class="text-center owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="top_10_head">
                        <p class="top_10_headset"><span class="top_10_top">Pla</span>cement <span class="top_10_companies_last">Partners</span></p>
                    </div>
                    <div class="owl-stage-outer ggg">
                        <div class="owl-stage abcd">
                           <div class="owl-item top_10_1_head">
                               <div class="top_10_img_cover">
                               <div class="top_10_layout_with_exp">
                                  <img src="images/top_10_image1.png" class="top_10_img_slide img-fluid" />
                                  <p class="top_10_logo_name"> Technologies</p>
                               </div>
                               </div>
                           </div>

                           <div class="owl-item top_10_1_head">
                            <div class="top_10_img_cover">
                            <div class="top_10_layout_with_exp">
                                <img src="images/top_10_image2.png" class="top_10_img_slide img-fluid" />
                                <p class="top_10_logo_name">NIIT Technologies</p>
                            </div>
                           </div>
                           </div>

                           <div class="owl-item top_10_1_head">
                            <div class="top_10_img_cover">
                            <div class="top_10_layout_with_exp">
                                <img src="images/top_10_image3.jpg" class="top_10_img_slide img-fluid" />
                                <p class="top_10_logo_name"> Technologies</p>
                                </div>
                            </div>
                           </div>

                           <div class="owl-item top_10_1_head">
                            <div class="top_10_img_cover">
                                <div class="top_10_layout_with_exp">
                                <img src="images/sbi_logo.png" class="top_10_img_slide img-fluid" />
                                <p class="top_10_logo_name">SBI</p>
                                
                                </div>
                                
                            </div>
                           </div>

                           <div class="owl-item top_10_1_head">
                            <div class="top_10_img_cover">
                            <div class="top_10_layout_with_exp">
                                <img src="images/sangeetha_logo.jpg" class="top_10_img_slide img-fluid" />
                                <p class="top_10_logo_name">Sangeetha Mobiles</p>
                                </div>
                            </div>
                           </div>

                           <div class="owl-item top_10_1_head">
                            <div class="top_10_img_cover">
                            <div class="top_10_layout_with_exp">
                                <img src="images/reliance_digital_logo.jpg" class="top_10_img_slide img-fluid" />
                                <p class="top_10_logo_name">Reliance Digital</p>
                                </div>
                            </div>
                           </div>

                           <div class="owl-item top_10_1_head">
                            <div class="top_10_img_cover">
                            <div class="top_10_layout_with_exp">
                                <img src="images/pai_logo.webp" class="top_10_img_slide img-fluid" />
                                <p class="top_10_logo_name">Pai International</p>
                                </div>
                            </div>
                           </div>

                           
                        </div>
                     </div>
                   

                </div>
            </div>
        </div>
        <!-- Top 10 Company Ends Here -->
        



        <!-- Our Certification Starts Here -->
    <!-- <div class="cert_all_container23">
    
        <div class="our_certification_head">
            <p class="our_cert_1a"><span class="our_cert_1b">O</span>ur <span class="our_cert_1c">Certifications</span></p>
        </div>   
        <div class="cert_box_container">
            <div class="certificate_groups_2">
                <div class="our_cert_img1" data-toggle="modal" data-target="#exampleModal">
                    <img src="images/certificate1.jpg" class="our_cert_image1a" />
                </div>

                <div class="our_cert_img1" data-toggle="modal" data-target="#exampleModal2">
                    <img src="images/certificate1.jpg" class="our_cert_image1a" />
                </div>
            </div>
        </div>             
        
             
        

            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                
                <div class="modal-body modal_full_box">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close_icon_modal_cert">×</span>
                    </button>
                    <div class="img_modal_certificate1">
                        <img src="images/certificate1.jpg" class="our_cert_image1ab" />
                    </div>
                    
                </div>
                
                </div>
            </div>
            </div>

            
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    
                    <div class="modal-body modal_full_box">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="close_icon_modal_cert">×</span>
                        </button>
                        <div class="img_modal_certificate1">
                            <img src="images/certificate1.jpg" class="our_cert_image1ab" />
                        </div>
                        
                    </div>
                    
                    </div>
                </div>
            </div>

            

    </div>     -->

<!-- Our Certification Ends Here -->
        


        
        <!-- Testimonials Starts Here -->
        <div class="testimonial_box">
            <div class="testimonial_head">
                <p>Test<span class="testim_head_span">imo</span>nials</p>
            </div>
            <div class="testimonial_lists">
                <div id="testimonial_carousel" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item testim_students_li_head">
                                <div class="testim_box_12">
                                    <div class="testim_layout_12">
                                        <div class="testim_12_img_layout">
                                            <img src="images/career_testimonial_full_img1.png" class="img-fluid testim_students_li">
                                        </div>
                                        <div class="testim_12_exp">
                                            <p class="testim_12_detail">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <p class="testim_name">Mr. Guru</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item testim_students_li_head">
                                <div class="testim_box_12">
                                    <div class="testim_layout_12">
                                        <div class="testim_12_img_layout">
                                            <img src="images/career_testimonial_full_img2b.png" class="img-fluid testim_students_li">
                                        </div>
                                        <div class="testim_12_exp">
                                            <p class="testim_12_detail">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <p class="testim_name">Mr. Guru</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="owl-item testim_students_li_head">
                                <div class="testim_box_12">
                                    <div class="testim_layout_12">
                                        <div class="testim_12_img_layout">
                                            <img src="images/career_testimonial_full_img3a.png" class="img-fluid testim_students_li">
                                        </div>
                                        <div class="testim_12_exp">
                                            <p class="testim_12_detail">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <p class="testim_name">Mr. Guru</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="owl-item testim_students_li_head">
                                <div class="testim_box_12">
                                    <div class="testim_layout_12">
                                        <div class="testim_12_img_layout">
                                            <img src="images/career_testimonial_full_img4.png" class="img-fluid testim_students_li">
                                        </div>
                                        <div class="testim_12_exp">
                                            <p class="testim_12_detail">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <p class="testim_name">Mr. Guru</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="owl-item testim_students_li_head">
                                <div class="testim_box_12">
                                    <div class="testim_layout_12">
                                        <div class="testim_12_img_layout">
                                            <img src="images/career_testimonial4.png" class="img-fluid testim_students_li">
                                        </div>
                                        <div class="testim_12_exp">
                                            <p class="testim_12_detail">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <p class="testim_name">Mr. Guru</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Ends Here -->



        <!-- Find Your Career Starts Here -->
        <!-- <div class="find_career_box">
            <img src="images/am_banner_test1.png" onclick="location.href='https://www.unnathijob.com/amcat/'" class="find_career_img" />
        </div> -->
        <!-- Find Your Career Ends Here -->


        <!-- Reach Out Us Starts -->
            
            <div class="reach_us_layout">
                <div class="reach_us_box">
                    <div class="reach_out_us_headeer">
                        <p class="reach_out_us_exp"> Reach Out Us @ </p>
                    </div>
                    <div class="reach_us_tabs">
                        <div class="reach_udpi_tab">
                            <button class="btn udupi_btn" onclick="udupi_1()"> Udupi </button>
                        </div>
                        <div class="reach_udpi_tab">
                            <button class="btn udupi_btn" onclick="bengaluru_1()"> Bengaluru </button>
                        </div>
                        <div class="reach_udpi_tab">
                            <button class="btn udupi_btn" onclick="mangalore_1()"> Mangalore </button>
                        </div>
                    </div>
                    <div class="reach_us_exp">
                        <div class="reach_udupi_layout animate__animated animate__fadeInLeft" id="udupi_id_box">
                            <div class="reach_all_cmn">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="reach_side_box_1">
                                            <div class="reach_adress_box1">
                                                <div class="reach_adress_1">
                                                    <div class="reach_address_icon">
                                                        <i class="fa fa-map-marker reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_address_exp">
                                                        <p class="address_line1"> Ashachandra Trade Center, </p>
                                                        <p class="address_line1"> 2nd Floor, </p>
                                                        <p class="address_line1"> PPC 1st Cross, </p>
                                                        <p class="address_line1"> Udupi, 576101 </p>
                                                    </div>
                                                </div>

                                                <div class="reach_phone_box">
                                                    <div class="reach_phone_icon">
                                                        <i class="fa fa-phone reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_phone_exp">
                                                        <a href="tel:7026882303" class="reach_phone_number">+91 7026882303,</a>
                                                        <a href="tel:0820-2530303" class="reach_phone_number">+91 0820-2530303</a>
                                                    </div>
                                                </div>

                                                <div class="reach_email_box">
                                                    <div class="reach_email_icon">
                                                    <i class="fa fa-envelope-o reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_email_exp">
                                                        <a href="mailto:info@unnathi.careers" class="reach_email_number">info@unnathi.careers </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="map_udupi">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15529.34914374214!2d74.73675637786523!3d13.329282999949712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbcbb6431c7fa35%3A0x1e25937a8ae3879b!2sUnnathi%20Jobs%20-%20Training%20%26%20Placements!5e0!3m2!1sen!2sin!4v1600429255683!5m2!1sen!2sin" class="map_bangalore_in" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="reach_udupi_layout animate__animated animate__fadeInUp" id="bengaluru_id_box">
                            <div class="reach_all_cmn">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="reach_side_box_1">
                                            <div class="reach_adress_box1">
                                                <div class="reach_adress_1">
                                                    <div class="reach_address_icon">
                                                        <i class="fa fa-map-marker reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_address_exp">
                                                        <p class="address_line1"> No.483, 'Sathya Lakshmi Square', </p>
                                                        <p class="address_line1"> CMH Road, Near Indiranagar Metro Station, </p>
                                                        <p class="address_line1"> Indiranagar, </p>
                                                        <p class="address_line1"> Bengaluru, 560038 </p>
                                                    </div>
                                                </div>

                                                <div class="reach_phone_box">
                                                    <div class="reach_phone_icon">
                                                        <i class="fa fa-phone reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_phone_exp">
                                                        <a href="tel:7338515117" class="reach_phone_number">+91 7338515117 (Lakme),</a>
                                                        <a href="tel:7619224999" class="reach_phone_number">+91 7619224999 (Aviation)</a>
                                                    </div>
                                                </div>

                                                <div class="reach_email_box">
                                                    <div class="reach_email_icon">
                                                    <i class="fa fa-envelope-o reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_email_exp">
                                                        <a href="mailto:info@unnathi.careers" class="reach_email_number">info@unnathi.careers </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="map_udupi">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15529.34914374214!2d74.73675637786523!3d13.329282999949712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbcbb6431c7fa35%3A0x1e25937a8ae3879b!2sUnnathi%20Jobs%20-%20Training%20%26%20Placements!5e0!3m2!1sen!2sin!4v1600429255683!5m2!1sen!2sin" class="map_bangalore_in" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="reach_udupi_layout animate__animated animate__fadeInRight" id="mangalore_id_box">
                            <div class="reach_all_cmn">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="reach_side_box_1">
                                            <div class="reach_adress_box1">
                                                <div class="reach_adress_1">
                                                    <div class="reach_address_icon">
                                                        <i class="fa fa-map-marker reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_address_exp">
                                                        <p class="address_line1"> Maruthi Plaza, </p>
                                                        <p class="address_line1"> Hampankatta, </p>
                                                        <p class="address_line1"> Balmata, </p>
                                                        <p class="address_line1"> Mangalore, 575001 </p>
                                                    </div>
                                                </div>

                                                <div class="reach_phone_box">
                                                    <div class="reach_phone_icon">
                                                        <i class="fa fa-phone reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_phone_exp">
                                                        <a href="tel:7026520303" class="reach_phone_number" id="contact_nuber_mlore">+91 7026520303,</a>
                                                    </div>
                                                </div>

                                                <div class="reach_email_box">
                                                    <div class="reach_email_icon">
                                                    <i class="fa fa-envelope-o reach" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="reach_email_exp">
                                                        <a href="mailto:info@unnathi.careers" class="reach_email_number">info@unnathi.careers </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="map_udupi">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15529.34914374214!2d74.73675637786523!3d13.329282999949712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbcbb6431c7fa35%3A0x1e25937a8ae3879b!2sUnnathi%20Jobs%20-%20Training%20%26%20Placements!5e0!3m2!1sen!2sin!4v1600429255683!5m2!1sen!2sin" class="map_bangalore_in" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>

        <!-- Reach Out Us Ends -->



        <!-- Registration form to open website -->

       
<!-- <div class="register_login_layout"  >
   <div class="form_section5">
      <div class="candidate_on_img ">
         <form class="left_right_form" action="registration.php" method="POST">
            <p class="form_head">
               NEW VISITORS
            </p>
            <?php 
               $msg = "";
               
               if(isset($_GET['register_blank'])){
                 $msg = "Please Fill all the Fields to Enter to Your Career Website";
                 echo '<div class="alert alert-danger">'.$msg.'</div>';
               }
               
                  if(isset($_GET['error_registration'])){
                      $msg = "Email Already Exsists, Please Enter Your Email in the Login Form and Continue.";
                      echo '<div class="alert alert-danger">'.$msg.'</div>';
                   }
                   
                   ?>
            <div class="register_form_input_box">
               <div class="left_right_name">
                  <div class="contact_form_label_cover">
                     <span class="contact_span_logo"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                     <input type="text"  name="name" class="area_of_interest1" placeholder="Full Name" />
                  </div>
               </div>
               <div class="left_right_name">
                  <div class="contact_form_label_cover">
                     <span class="contact_span_logo"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                     <input type="email"  name="email" class="area_of_interest1" placeholder="Email" />
                  </div>
               </div>
               <div class="left_right_name">
                  <div class="contact_form_label_cover">
                     <span class="contact_span_logo"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                     <input type="number" name="number" class="area_of_interest1" placeholder="Contact No." />
                  </div>
               </div>
               <div class="left_right_name">
                  <select name="course_dropdown" class="area_of_interest1" id="left_dropdown" >
                     <option value="" disabled selected> Area of Interest </option>
                     <option value="Aviation" class="area_of_interest_li">Aviation</option>
                     <option value="IBM" class="area_of_interest_li">IBM Education</option>
                     <option value="English" class="area_of_interest_li">English & Personality Developement</option>
                  </select>
               </div>
               <div class="left_right_submit">
                  <label class="left_right_labels1"></label>
                  <div class="btn_left_right_sub2">
                     <button type="submit" class="submit_left_btn" name="submit">Register</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div class="login_form_layout">
         <form class="login_form" action="validation.php" method="POST">
            <p class="login_header"> EXSITING USERS</p>
            <?php
               if(isset($_GET['login_blank'])){
                         $msg = "Please Fill the Registered Email Address Here.";
                       echo '<div class="alert alert-danger">'.$msg.'</div>' ;
                      }
               ?>
            <?php
               if(isset($_GET['error_login'])){
                         $msg = "Email does not exists, Please Register as a New Visitor.";
                       echo '<div class="alert alert-danger">'.$msg.'</div>' ;
                      }
               ?>
            <div class="login_form_group2">
               <div class="login_box_1">
                  <span class="contact_span_logo"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                  <input type="email" class="email_box" name="email" placeholder="Email">
               </div>
               <div class="login_btn_box">
                  <button class="btn login_btn" name="submit" type="submit">Login</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div> -->

        <!-- Registration form to open website ends -->





        <!-- Footer Starts Here -->
        <?php 
             include("includes/footer.html") ;
        ?>
        <!-- Footer Ends Here -->


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169323747-4"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-169323747-4');
        </script>



        


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
        <script src="javascript/js.js"></script>
        <script src="javascript/header_footer.js"></script>
        <script src="javascript/register_modal.js"></script>

   
    </body>
</html>


