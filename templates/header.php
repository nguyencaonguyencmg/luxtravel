<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUX Travel</title>
	<link rel="icon" href="assets/img/logo.png">
	<link rel="stylesheet" href="assets/libs/hover.css">
    <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo rand();?>">
    <link rel="stylesheet" href="assets/css/reponsive.css">
    <link rel="stylesheet" href="assets/font/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/load/load.css">
    <link rel="stylesheet" href="assets/css/load/owl.transitions.css">
	<link rel="stylesheet" href="assets/css/load/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/load/hover.css">
	<link rel="stylesheet" href="assets/css/load/owl.theme.css">
	<link rel="stylesheet" href="assets/css/load/animate.min.css">	

    <link rel="stylesheet" href="assets/js/Libs/owl.carousel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"> -->
    
    
</head>
    <body class="reload">

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
        <header id="header" class="container">
            <div class="info ">
                <div class="phone_mail">
                    <img src="assets/img/logo.png" alt="" id= "logo"></img>
                    <a href="mailto: caonguyencmg2010@gmail.com" class="phone-mail__text  pl-4 pulse">Luxtravel@gmail.com</a>
                    <a href="tel: +84868027061" class="phone-mail__text  pl-4 pulse">0868.027.061</a>
                </div>
                <div class="help">
                    <a href="#" class="mr-3  pulse phone-mail__text"><i class="far fa-bell"> Thông báo</i></a>
                    <a class="phone-mail__icon"><i class="far fa-bell phone-mail__icon"></i></a>
                    <a href="tvkh.php" class="mr-3  pulse phone-mail__text" > <i class="far fa-question-circle"> Trợ giúp</i></a>
                    <a class="phone-mail__icon"><i class="far fa-question-circle phone-mail__icon"></i></a>
                    <nav class="ml-3 main-nav">
                        <ul id="nav">
                            <li >
                                <span href="#" class=" phone-mail__text"><i class="nav-arrow-down fa fa-user-circle ">Tài khoản</i><i class="fa fa-angle-down"></i></span>
                                <span class="phone-mail__icon"> <i class="fa fa-user-circle"></i>  <i class="fa fa-angle-down"></i></span>
                                <ul class="subnav taikhoan text-center">
                                    <li><a href ="">Đăng Nhập</a></li>
                                    <li><a href ="login.php">Host</a></li>
                                    <li><a href ="">Đăng Xuất</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="border-bottom"></div>

            <div class="main-header ">
                
                <ul id="nav-bar" class="">
                    <li><a href ="index.php" >Trang chủ</a></li>
                    <li>
                    <a href ="hotelhomestay.php" >Hotel và Homestay <i class="nav-arrow-down fas fa-angle-down"></i></a>
                        <ul class="subnav">
                            <li><a href ="danangcontent.php" >Hotel Đà Nẵng</a></li>
                            <li><a href ="nhatrangcontent.php">Hotel Nha Trang</a></li>
                            <li><a href ="vungtaucontent.php">Hotel Vũng Tàu</a></li>
                            <li><a href ="halongcontent.php">Hotel Hạ Long</a></li>
                            <li><a href ="hanoicontent.php">Hotel Hà Nội</a></li>
                            <li><a href ="saigoncontent.php">Hotel Hồ Chí Minh</a></li>
                            <li><a href ="dalatcontent.php">Homestay Đà Lạt</a></li>
                            <li><a href ="phanthietcontent.php">Homestay Phan Thiết</a></li>
                            <li><a href ="sapacontent.php">Homestay Sapa</a></li>
                        </ul>
                    </li>
                    <li><a href ="cs-ud.php">Chính sách và Ưu đãi</a></li>
                    <li><a href ="contact.php">Chăm sóc khách hàng</a></li>
                </ul>
                <form id="search" method = "POST" action = "search.php">
                    <div class="wraper">
                        <div class="search-content-items ">
                            <div class="search-content-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <input class="input-search" name="Search" type="text" placeholder="Bạn muốn đi đâu" />
                                <div class="autobox">
                                    <li>Hà Nội</li>
                                    <li>Hải Phòng</li>
                                    <li>Hà Giang</li>
                                    <li>Nghệ An</li>
                                    <li>Phú Quốc</li>
                                    <li>Phú Thọ</li>
                                </div>
                            </div>
                            <div class="search-content-item">
                                <i class="far fa-calendar-alt"></i>
                                <input id="myID" type="date" name="datein" placeholder="Ngày đến"/>
                            </div>
                            <div class="search-content-item">
                                <i class="far fa-calendar-alt"></i>
                                <input id="myID" type="date" name="dateout"  placeholder="Ngày đi"/>
                            </div>
                            <div class="search-content-item up-down-people">
                                <i class="fas fa-user-check"></i>
                                <input class="number-people" name="peoples" type="value" placeholder="Số người"/>
                                <div class="number-box">
                                    <li>
                                        <div class="number-left">
                                            <p>Người lớn</p>
                                        </div>
                                        <div class="number-right nguoilon">
                                            <i class="fas fa-minus nguoilonMinus"></i>
                                            <span>0</span>
                                            <i class="fas fa-plus nguoilonPlus"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="number-left">
                                            <p>Trẻ em</p>
                                        </div>
                                        <div class="number-right treem">
                                            <i class="fas fa-minus treemMinus"></i>
                                            <span>0</span>
                                            <i class="fas fa-plus treemPlus"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="number-left">
                                            <p>Trẻ sơ sinh</p>
                                        </div>
                                        <div class="number-right sosinh">
                                            <i class="fas fa-minus sosinhMinus"></i>
                                            <span>0</span>
                                            <i class="fas fa-plus sosinhPlus"></i>
                                        </div>
                                    </li>
                                    <i class="fas fa-times number-close"></i>
                                </div>
                            </div>
                            <div class="search-content-item">
                                <button>Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
	<a href="#" id="toTopBtn" class="scroll-top dark pulse"><i class="fa fa-angle-double-up"></i></a>
            
        </header>
        
        
 
