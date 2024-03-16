@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/742415451f.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <link rel="stylesheet" href="/css/style.css"> 

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
       
    </head>
    <style>
        
    </style>
    <body>
        <section id="home">
            
        </section>
            <div class="text" style="z-index:0;" data-aos="fade-up">
                    <h2>We help building the best online <br> shopping experience</h2>
            </div>
            <div class="paragraph" style="z-index:0;">
                <p>
                    Our ecommerce development agency will design, develop & support your digital store. 
                    We take your shopping experience to next level focusing on significant growth in revenue, business and brand.
                </p>
            </div>
            <div class="button" style="z-index:0;">
                <a href="cartmade#contact"><button type="button">Book your ecommerce</button></a>
            </div>



<!-- ========================================About us==================================================== -->
        <section id="about">
            <div class="about-container">
                
                <div class="para">
                    <div class="about-container-topic">
                        About Us
                    </div>
                    <p class="about_para" data-aos="fade-right">
                        Cartmade Ecommerce is Kathmandu based full fledged ecommerce development service agency with highly experienced in developing user 
                        friendly & optimized online ecommerce stores to help you grow your business along with providing all 
                        the necessary techniques, strategies, tools for your business growth.
                        <br>
                        The best solution for quick kick start to your ecommerce store. 
                        We are expert on creating the ecommerce stores using shopify and experienced on building business specific 
                        customizations and middlware & apps development Whether you're already on Shopify, 
                        starting a new shop, or looking to migrate over from another platform, we'd love to talk about how we can help.
                    </p>
                </div>

                <div class="img" data-aos="flip-left">
                    <img src="/image/laptop.jpg" alt="stock laptop image">
                </div>
            </div>

        </section>


        <!-- =========================================blog========================================================== -->

        <section id="blog">
            <div class="container-cards">
                <div class="flip-card" data-aos="fade-down">
                    <div class="flip-card-inner">
                        <div class="flip-card-front1">
                            
                            <p>Theme Customization</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title">Theme Customization</p>
                            <p style="text-align:justify;">we customized the theme by modifying and personalizing the apperance and funcitonality of a 
                                pre-designed website or application theme. It allows individuals or business to tailor the theme 
                                to their specific requirements, brands identity, and design preferences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card" data-aos="fade-down">
                    <div class="flip-card-inner">
                        <div class="flip-card-front2">
                            
                            <p>Apps & middleware development</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title">Apps & middleware development</p>
                            <p style="text-align:justify;">
                                We develop custom apps and middleware for Shopify stores. We have a wide range of experience in developing
                                apps and middleware for shopify stores. we develops apps for specific platforms such as mobile devices, desktop devices or the web.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card" data-aos="fade-down">
                    <div class="flip-card-inner">
                        <div class="flip-card-front3">
                            
                            <p> Store optimization</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title"> Store optimization</p>
                            <p style="text-align:justify;">
                                we optimized your online store by enhancing its performance, user expericence and ultimately dive more conversion and sales.
                                we optimized your ecommerce store by simplified checkout process, security and trust, personalization and recommendation etc. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <div class="swiper">
                
                <div class="swiper-wrapper">
                   
                    <div class="swiper-slide">
                        <div class="cardsss">
                            <div class="image">
                                <img src="/image/user2.avif" alt="profile">
                            </div>
                            <div class="Title">
                                <p>linda</p>
                            </div>
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="desc">
                                <p>
                                    cartmade made my business easier than before.<br>
                                    thank you cartmade
                                </p>
                            </div>
                        </div> 
                    </div>
                    <div class="swiper-slide">
                    <div class="cardsss">
                            <div class="image">
                                <img src="/image/user3.webp" alt="profile">
                            </div>
                            <div class="Title">
                                <p>Robit</p>
                            </div>
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="desc">
                                <p>
                                    its really healpful that cartmade help me by building the ecommerce webpage for my business.
                                </p>
                            </div>
                        </div> 
                    </div>
                    <div class="swiper-slide">
                    <div class="cardsss">
                            <div class="image">
                                <img src="/image/user1.jpg" alt="profile">
                            </div>
                            <div class="Title">
                                <p>Leewa</p>
                            </div>
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    voluptatibus minima at officiis delectus aliquid neque veritatis facere?
                                </p>
                            </div>
                        </div> 
                    </div>
                    
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
             </div>

        <!-- =============================================we offer==================================================== -->

        <section id="we_offer">
            <div class="offer_text_container">
                <p id="offer_title">
                    We Offer
                </p>
                <p id="offer_text">
                    We only take on what we are good at. <br>
                    We are experts in world's most popular ecommerce platform Shopify.
                </p>
            </div>
            <div class="offer_table" data-aos="zoom-in">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">starter</th>
                            <th scope="col">professional</th>
                            <th scope="col">enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>$4000</td>
                        <td>$10000</td>
                        <td>$15000</td>
                    </tr>
                    <tr>
                        <td>up to 2 hours business requirements reviews</td>
                        <td>everything in the starter packege</td>
                        <td>everything in the business package</td>
                    </tr>
                    <tr>
                        <td>all native shopify functionality</td>
                        <td>4 hours business requirements review</td>
                        <td>up to 10 hours business requirements review</td>
                    </tr>
                    <tr>
                        <td>Development Operations Setup</td>
                        <td>Design Process</td>
                        <td>Shopify Plus Feature Set</td>
                    </tr>
                    <tr>
                        <td>Premium Theme Implementation</td>
                        <td>Email Marketing Integration</td>
                        <td>Wholesale Pricing Group setup</td>
                    </tr>
                    <tr>
                        <td>Shipping Configuration</td>
                        <td>Up to 5 Additional Apps Installed</td>
                        <td>Mega Menu</td>
                    </tr>
                    <tr>
                        <td>Contact Form</td>
                        <td>11 page templates designed and develop</td>
                        <td>Style Guide</td>
                    </tr>
                    <tr>
                        <td>Catalog Setup Consultation</td>
                        <td>SEO Consultation</td>
                        <td>Data Translation Services</td>
                    </tr>
                    <tr>
                        <td>Admin Panel Configuration</td>
                        <td>4 hour training session</td>
                        <td>Up to 6 hour Training Session</td>
                    </tr>
                    <tr>
                        <td>Payment Gateway Configuration</td>
                        <td>30 day warranty</td>
                        <td>45 day warranty</td>
                    </tr>
                </tbody>
                </table>
            </div>
            <br>
            <div class="offer_footer">
                <p>
                    We understand that not every use case will fit these packages therefore we recommend to get in touch and communicate 
                    the project throughly. 
                    We provide you estimation document which would price based on our per hour rate.
                </p>
            </div>
        </section>


        <!-- ========================================contact us==================================================== -->

        <section id="contact">
            <div class="contact-container">
                <div class="contact" data-aos="fade-down">
                    <p id="text1">
                        Contact us
                    </p>
                    <p id="text2">
                        Cartmade Ecommerce Pvt. Ltd.
                    </p>
                    <div class="c1">
                        <i class="fa-solid fa-envelope"></i>
                        hello@cartmade.com
                    </div>
                    <div class="c1">
                        <i class="fa-solid fa-mobile"></i>
                        (+977) 9843309042
                    </div>
                    <div class="c1">
                        <i class="fa-solid fa-location-dot"></i>
                        Maitrinagar, Kirtipur 44600 Kathmandu, Nepal
                    </div>
                    <div class="c1">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <a target="_blank"   href="https://www.google.com/maps/place/Cartmade+Ecommerce+Pvt.+Ltd./@27.6885187,85.2752535,15z/data=!4m6!3m5!1s0x39eb191cc21633e1:0x8f4b41888eb15e1b!8m2!3d27.6853636!4d85.2766925!16s%2Fg%2F11h87nkjm1">
                            Find us in google map
                        </a>
                    </div>
                </div>
                <div class="form" data-aos="flip-right">
                    <p id="msg">Get In Touch</p>
                    <div class="inner-form">
                        <form action="cartmade" method="post" onsubmit="return valid()">
                            @csrf
                            <input type="text" placeholder="First Name" name="fname" id="fname" required>
                            <input type="text" placeholder="Last Name" name="lname" id="lname" required><br>
                            <input type="email" placeholder="Email" name="email" id="email" required>
                            <input type="text" placeholder="Phone" name="phone" id="phone" required><br>
                            <input type="text" placeholder="Address" name="address" id="address" required><br>
                            <textarea rows="5" cols="50" name="message" id="message" required>
                            </textarea><br>
                            <input type="submit" value="send" id="submit">

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        
            
        });

    </script>
</html>
@endsection