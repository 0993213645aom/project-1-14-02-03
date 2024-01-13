<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>SnackStation By Bangonssss</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favicon.png') }}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate-3.7.0.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-4.7.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/messageImage_1692608842824232323456.jpg') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="about.html">about</a></li>
                            <li><a href="menu.html">menu</a></li>
                            <li><a href="contact-us.html">contact</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="{{ route('login' ) }}">เข้าสู่ระบบ</a></li>
                            <li><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h6>That easy but it's a good way</h6> -->
                    <h1>  <span class="prime-color"> </span><br>  
                    <span class="style-change">  <span class="prime-color"> </span> </span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="{{ asset('frontend/assets/images/welcome-bg.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">ยินดีต้อนรับ</span> <br>สู่ร้านค้า บังอรร้อยอย่าง</h3>
                        <p class="pt-3">ร้านค้าสร้างเมื่อ พ.ศ.2017 โดย นางอรอนงค์ และมีผู้ช่วยคือ นายวุฒิพงศ์</p>
                        <p>ร้านบังอรร้อยอย่าง ส่วนมากขายขนม ลูกชิ้นและข้าวกล่อง ซึ่งอาหารได้รับมาต่อเช่นขนมเทียน ข้าวต้มมัดและอื่นๆ ก่อนมาจัดตั้งร้าน ได้ประกอบอาชีพ ขายของ และได้นำขายเช่น เครื่องมือช่าง เสื้อผ้า จนได้ขายอาหาร และได้ทำเลขายที่ดีจนมาถึงปัจจุบัน</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">รายการ</span> <br>เมนูอาหารนิยม</h3>
                        <p class="pt-3">สินค้ายอดนิยม หรือ เมนู Signature ของทางร้านที่จะมานำเสนอ</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/food1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ข้าวหน้าปลาแกะ</h5>
                                <span class="style-change">35 ฿</span>
                            </div>
                            <p class="pt-3">ส่วนผสมหลักคือ ปลาไร้ก้างเนื่องจากถูกแกะออกแล้ว และกลายเป็นชื่อเมนู</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/food2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ข้าวต้มมัด</h5>
                                <span class="style-change">8 ฿</span>
                            </div>
                            <p class="pt-3">ขนมโบราณ ยอดฮิต ส่วนผสมข้างเหนียว กล้วย และ ถั่วดำ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/food3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>เมนูอาหาร</h5>
                                <span class="style-change">ราคา ฿</span>
                            </div>
                            <p class="pt-3">รายละเอียดอาหาร</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/food4.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>เมนูอาหาร</h5>
                                <span class="style-change">ราคา ฿</span>
                            </div>
                            <p class="pt-3">รายละเอียดอาหาร</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/food5.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>เมนูอาหาร</h5>
                                <span class="style-change">ราคา ฿</span>
                            </div>
                            <p class="pt-3">รายละเอียดอาหาร</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/food6.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>เมนูอาหาร</h5>
                                <span class="style-change">ราคา ฿</span>
                            </div>
                            <p class="pt-3">รายละเอียดอาหาร</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Reservation Area Starts -->
    <div class="reservation-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>อาหารสดใหม่ ถูกหลักอนามัย</h2>
                    <h4 class="mt-4">การซื้อขาย จัดใส่กล่องอย่างเรียบร้อย</h4>
                    <a href="" class="template-btn template-btn2 mt-4">สั่งซื้อ</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->
    
    <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Our <span>special</span> deshes</h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-center">
                    <h1>01.</h1>
                    <div class="deshes-text">
                        <h3><span>Garlic</span><br> green beans</h3>
                        <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.</p>
                        <span class="style-change">$12.00</span>
                        <a href="#" class="template-btn3 mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="{{ asset('frontend/assets/images/deshes1.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="{{ asset('frontend/assets/images/deshes2.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2">
                    <h1>02.</h1>
                    <div class="deshes-text">
                        <h3><span>Lemon</span><br> rosemary chicken</h3>
                        <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.</p>
                        <span class="style-change">$12.00</span>
                        <a href="#" class="template-btn3 mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deshes Area End -->

    <!-- Testimonial Area Starts -->
    <section class="testimonial-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>สมาชิกในกลุ่ม <span>2</span></h3>
                        <p><i>รวมสมาชิกในกลุ่ม 2 รายละเอียดส่วนตัว และหน้าที่</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{ asset('frontend/assets/images/customer1.png') }}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>นายอติพร หวาดอิ่ม</h5>
                                <span><i>Coding</i></span>
                                <p class="pt-3">พิมพ์โค้ด และออกแบบหน้า User-interface ระบบ UX/UI</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{ asset('frontend/assets/images/customer2.png') }}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>adam nahan</h5>
                                <span><i>Chief Customer</i></span>
                                <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{ asset('frontend/assets/images/customer1.png') }}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>adame nesane</h5>
                                <span><i>Chief Customer</i></span>
                                <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{ asset('frontend/assets/images/customer1.png') }}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>adame nesane</h5>
                                <span><i>Chief Customer</i></span>
                                <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-widget single-widget1">
                            <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/logo2.png') }}" alt=""></a>
                            <p class="mt-3">ช่องทางการซื้อขายอยู่ในซอย ข้างโรงเรียน ในตอนนี้ยังไม่รับสั่งออนไลน์ อยู่ในซอยวัดบางโพ ตรงข้ามซอยโรงไม้ และอยู่ติดโรงเรียนวัดบางโพโอมาวาส    </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget2 my-5 my-md-0">
                            <h5 class="mb-4">contact us</h5>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-text">
                                    <p>53 ซอยประชาราษฎร์ สาย1 ซอย19 เขตบางซื่อ อำเภอบางซื่อ กรุงเทพมหานคร 10800 </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-text">
                                    <p>(+66) 94 817 9358</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="info-text">
                                    <p>support@zsmodify.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget3">
                            <h5 class="mb-4">opening hours</h5>
                            <p>Monday .............. 5 am - 12 pm</p>
                            <p>Tue-Fri .............. 5 am - 12 pm</p>
                            <p>Sat-Sun .............. 5 am - 11 pm</p>
                            <p>Holidays .............. 5 am - 12 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://colorlib.com" target="_blank">Zucidalz </a> <a><i class="fa fa-heart-o" aria-hidden="true"></i></a> <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li class="no-margin">Follow Us</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/vendor/bootstrap-4.1.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/owl-carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>
</html>
