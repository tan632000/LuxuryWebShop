<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/trangchu.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/90d684ab4f.js"></script>
</head>
<body>
    <div id="app">
        <div class="header-bar">
            <div class="container-0">
                <div class="header-1">
                    <div class="header-logo">
                        <ul>
                            <li id="icon-bar"><i class="fa fa-bars"  ></i></li>
                            <li><a href=""><img src="{{ asset('assets/images/logoonpic.png') }}" alt="logo"></a></li>
                            <li id="icon-carts"> <i class="fa fa-shopping-cart" ></i></li>
                        </ul>
                        
                    </div>
                    <div class="header-input">
                        <input type="text" placeholder="search">
                        <i class="fa fa-search" ></i>
                    </div>
                    <div class="header-icon">
                        <i class="fa fa-shopping-cart" ></i>
                    </div>
                </div>
                <div class="header-2">
                    <div class="header-21">
                        <ul>
                            <li><a href="">HOME</a></li>
                            <li><a href="">VERTU</a>
                                <ul class="dropdown">
                                    <ul>
                                        <li><a href="">Vertu1</a></li>
                                        <li><a href="">Vertu2</a></li>
                                        <li><a href="">Vertu3</a></li>
                                        <li><a href="">Vertu1</a></li>
                                        <li><a href="">Vertu2</a></li>
                                        <li><a href="">Vertu3</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="">Vertu1</a></li>
                                        <li><a href="">Vertu2</a></li>
                                        <li><a href="">Vertu3</a></li>
                                        <li><a href="">Vertu1</a></li>
                                        <li><a href="">Vertu2</a></li>
                                        <li><a href="">Vertu3</a></li>
                                    </ul>
                                </ul>
                            </li>
                            <li><a href="">WATCH</a>
                                <ul class="dropdown">
                                    <ul>
                                        <li><a href="">Vertu1</a></li>
                                        <li><a href="">Vertu2</a></li>
                                        <li><a href="">Vertu3</a></li>
                                        <li><a href="">Vertu1</a></li>
                                        <li><a href="">Vertu2</a></li>
                                        <li><a href="">Vertu3</a></li>
                                    </ul>
                                </ul>
                            </li>
                            <li><a href="">PHỤ KIỆN</a>
                                <ul class="dropdown">
                                   <ul>
                                    <li><a href="">Vertu1</a></li>
                                    <li><a href="">Vertu2</a></li>
                                    <li><a href="">Vertu3</a></li>
                                   </ul>
                                </ul>
                            </li>
                            <li><a href="">KHÁM PHÁ</a>
                                <ul class="dropdown">
                                    <ul>
                                        <li><a href="">Vertu1</a></li>
                                        <li><a href="">Vertu2</a></li>
                                        <li><a href="">Vertu3</a></li>
                                    </ul>
                                </ul>
                            </li>
                            <li><a href="">DỊCH VỤ</a>
                                <ul class="dropdown">
                                    <ul>
                                        <li><a href="">Vertu1</a></li>
                                        <li><a href="">Vertu2</a></li>
                                        <li><a href="">Vertu3</a></li>
                                    </ul>
                                </ul>
                            </li>
                            <li><a href="">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                    <div class="header-22">
                        <input type="text" placeholder="search">
                        <i class="fa fa-search" ></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider">
        <figure>
            <a href=""><img src="{{ asset('assets/images/slide1.jpg') }}" ></a>
            <a href=""><img src="{{ asset('assets/images/slide2.jpg') }}" ></a>
            <a href=""><img src="{{ asset('assets/images/slide1.jpg') }}" ></a>
            <a href=""><img src="{{ asset('assets/images/slide3.jpg') }}" ></a>
            <a href=""><img src="{{ asset('assets/images/slide1.jpg') }}" ></a>
        </figure>
    </div>
    <div class="wrap">
        <div class="container">
            <div class="box-1">
                <div class="img-m">
                    <a href=""><img src="{{ asset('assets/images/box11.jpg') }}" alt=""></a>
                </div>
                <div class="img-m">
                    <a href=""><img src="{{ asset('assets/images/box12.png') }}" alt=""></a>
                </div>
            </div>
            <br>
<!--  -->
            <div class="box-2">
                <div class="title1">
                    <h1><a href="">ROLEX</a></h1>
                </div>
                <div class="box-21">
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/rolex1.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date Mens watch 118235 CHODRO</a></h3>
                        <div class="lable-0">RL 01</div>
                        <div class="price">750 Triệu</div>
                    </div>
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/rolex2.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date 118235 CHODRP</a></h3>
                        <div class="lable-0">RL 03</div>
                        <div class="price">750 Triệu</div>
                    </div>
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/rolex1.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date Mens watch 118235 CHODRO</a></h3>
                        <div class="lable-0">RL 01</div>
                        <div class="price">750 Triệu</div>
                    </div>
            
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/rolex5.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Đồng hồ Rolex Datejust 126231 Mặt Đen Nạm Kim Cương Dây Đeo Oyster</a></h3>
                        <div class="lable-0">RL 56</div>
                        <div class="price">303 Triệu</div>
                    </div>
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/rolex6.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Đồng hồ Rolex Datejust Automatic Date 126231 Mặt Số Đen Nạm Kim Cương</a></h3>
                        <div class="lable-0">RL 57</div>
                        <div class="price">303 Triệu</div>
                    </div>
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/rolex5.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Đồng hồ Rolex Datejust 126231 Mặt Đen Nạm Kim Cương Dây Đeo Oyster</a></h3>
                        <div class="lable-0">RL 56</div>
                        <div class="price">303 Triệu</div>
                    </div>
                </div>
            </div>
            <br>
<!--  -->
            <div class="box-2">
                <div class="title1">
                    <h1><a href="">VERTU SIGNATURE S</a></h1>
                </div>
                <div class="box-21">
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/vertu1.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Vertu Signature S Yellow Gold Full Pave Baguette Diamonds Bag Key</a></h3>
                        <div class="lable-0">VT 84</div>
                        <div class="price">1 Tỷ 720 Triệu</div>
                    </div>
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/vertu2.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Vertu Signature S Clous de Paris Red Gold</a></h3>
                        <div class="lable-0">VT 87</div>
                        <div class="price">820 Triệu</div>
                    </div>
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/vertu3.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Vertu Signature S Rose Gold</a></h3>
                        <div class="lable-0">VT 82</div>
                        <div class="price">750 Triệu</div>
                    </div>
 
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/vertu4.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Vertu Signature S Red Gold Black DLC</a></h3>
                        <div class="lable-0">VT 93</div>
                        <div class="price">450 Triệu</div>
                    </div>
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/vertu5.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Vertu Signature S Navy Alligator</a></h3>
                        <div class="lable-0">VT 119</div>
                        <div class="price">370 Triệu</div>
                    </div>
                    <div class="box-product">
                        <div class="box-img">
                            <a href=""><img src="{{ asset('assets/images/vertu6.jpg') }}" alt=""></a>
                        </div>
                        <h3><a href="">Vertu Signature S Ultimate Black</a></h3>
                        <div class="lable-0">VT 92</div>
                        <div class="price">380 Triệu</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4">
            @yield('content')
        </div>
        <div class="footer">
            <div class="footer_info" style="background-image: url({{ asset('assets/images/background_footer_info.jpg') }})">
                <div class="container">
                   <div class="row">
                    <div class="col-5">
                        <div class="ft-dm"> LIÊN HỆ</div>
                        <br>
                        <div class="ft-address">
                            <span style="font-size: 18px;"><strong>LUXURY HANOI</strong></span>
                            <span style="font-size: 14px;">
                                <br>
                                <span style="color: #696969;"> Đ/C : </span>
                                 
                                <span style="color: #FF8C00;">
                                    61 Phố Ô Chợ Dừa,Phường Ô Chợ Dừa,Quận. Đống Đa,TP.Hà Nội
                                    Office B.03.25 - Millennium Apartment 132 Bến Vân Đồn, P6, Q4, TP. Hồ Chí Minh
                                </span>
                                <br>
                                <span style="color: #696969;">Email</span>
                                <span style="color: #FF8C00;">info@luxuryhanoi.vn</span>
                                <br>
                                <span style="color: #696969;">Hotline tư vấn bán hàng</span>
                                <span style="color: #FF8C00;">034200476</span>
                                <br>
                                <span style="color: #696969;">Follow us on facebook : </span>
                                <span style="color: #FF8C00;"><a href="https://www.facebook.com/luxuryhanoi.vn/">https://www.facebook.com/luxuryhanoi.vn/</a></span>
                                <br>
                                <span style="color: #696969;">Follow us on instagram : </span>
                                <span style="color: #FF8C00;"><a href="https://www.facebook.com/luxuryhanoi.vn/">@luxuryhanoivn</a></span>
                                <br>
                                <span style="color: #696969;">MST</span>
                                <span style="color: #FF8C00;">0106748966</span>
                            </span>
                        </div>
                    </div>
                    <div class="col-3 ">
                       <div class="ft-dm"> VỀ CHÚNG TÔI</div>
                       <div class="tintuc" style="font-size: 13px;">
                          <br>
                           <span> <i class="fas fa-angle-right" style="font-size: 15px; padding-right: 5px;"></i></span>
                           <span><strong>  Tin tức</strong></span>
                       </div>
                    </div>
                    <div class="col-4">
                        <div></div>
                        <div class="logo">
                            <div class="row">
                                <div class=" col-3 logo_fb">
                                    <div class="fb">
                                        <img src="{{ asset('assets/images/logoFB.png') }}" alt="logo facebook" style="height: 60px; width: 60px;" class="imgFB">
                                    </div>
                                </div>
                                <div class="col-9 info_fb">
                                    <div style="padding: 10px 0px 5px 0px;">LUXURY HANOI</div>
                                    <div class="borderLikePage">
                                        <div class="LikePage">
                                            <span><i class="fab fa-facebook-square" style="padding: 1px 4px 6px;"></i></span>
                                            <span>Thich trang</span>
                                            
                                        </div>
                                        <div>26K lượt thích</div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                   </div>
             </div>
             <div class="footer service">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div> DỊCH VỤ THANH TOÁN</div>
                            <div class="payments">
                               <div class="payment">
                                   <img src="{{ asset('assets/images/money.PNG') }}" alt="money" height="40px" width="40px">
                               </div>
                               <div class="payment">
                                <img src="{{ asset('assets/images/atm.png') }}" alt="money" height="40px" width="40px">
                               </div>
                               <div class="payment">
                                <img src="{{ asset('assets/images/visa.png') }}" alt="money" height="40px" width="40px">
                               </div>
                               <div class="payment">
                                <img src="{{ asset('assets/images/mastercard.png') }}" alt="money" height="40px" width="40px">
                               </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div> DỊCH VỤ GIAO HÀNG</div>
                            <div class="delivers">
                             <div class="deliver">
                                <img src="{{ asset('assets/images/vietnampost.png') }}" alt="money" height="40px" width="60px">
                             </div>
                             <div class="deliver" >
                                <img src="{{ asset('assets/images/tiettelpost.png') }}" alt="money" height="40px" width="60px">
                             </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div> KẾT NỐI LUXURYHANOI</div>
                            <div class="information">
                                <div>
                                    <img src="{{ asset('assets/images/facebook.jpg') }}" alt="money" height="40px" width="40px">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/images/instagram.jpg') }}" alt="money" height="40px" width="40px">
                                </div>
                                <div> 
                                    <img src="{{ asset('assets/images/googlePlus.jpg') }}" alt="money" height="40px" width="40px">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/images/youtube.png') }}" alt="money" height="40px" width="40px">
                                </div>
                            </div>
                        </div>
                        <div class="col-3"> 
                            <div> ĐĂNG KÝ</div>
                            <div>
                                <img src="{{ asset('assets/images/boNgoaiThuong.png') }}" alt="money" height="40px" width="120px">
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>