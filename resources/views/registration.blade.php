<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" onkeypress="return runScript(event)"ead>
  <head>
    <title>Տնտեսական ապրանքների օնլայն խանութ | Tntesakan.am</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141595573-1"></script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/53952361" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <meta name="description"
        content="Պատվիրեք օնլայն տնտեսական ապրանքներ շահավետ պայմաններով ➤շուկայականից ցածր գներ ➤արագ առաքում ➤որակյալ ապրանքներ ➤լայն տեսականի " />
    <meta name="google-site-verification" content="nurOMWUiURh_lvMI61Hjxk_VqbOeyvfqc16ksL28Moo" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="62717dbcebd6a699" />


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="icon" type="{{ asset('image/png')}}" href="images/maingallery/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="{{ asset('image/png')}}" href="images/maingallery/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    </head>

<body>
    <div id="fb-root"></div>
    <header>
        <!--MY HEADER-->
        <div class="header">
            <div class="container">
                <div class="row justify-content-between align-items-center  pb-2 ">
                    <div class="menuBtn d-block d-lg-none">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>

                    <nav class="navbar col-lg-12 col">
                        <ul class="menu d-flex align-items-center justify-content-between col ">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown">
                                    Ապրանքներ <b class="fa fa-bars"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="categories.html">Level 1</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="categories.html" class="dropdown-toggle" data-toggle="dropdown">Level
                                            1</a>
                                        <!-- Level 2 -->
                                        <ul class="dropdown-menu">
                                            <li><a href="product.html">Level 2</a></li>
                                            <li class="dropdown-submenu">
                                                <a href="product.html" class="dropdown-toggle"
                                                    data-toggle="dropdown">Level 2</a>

                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menuList"><a href="contact.html">Կապ</a></li>
                            <li class="menuList"><a href="contact.html">Ակցիաներ</a></li>
                            <li class="search-box">
                                <form action="">
                                    <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                    <input type="text" class="searchInput" placeholder="Փնտրել ..." onkeypress="return">
                                </form>
                                <div class="resultSearch"></div>
                            </li>
                        </ul>
                        <div class="logo col-lg-3 col-md-5 px-md-4 ">
                            <a href="index.html"><img src="/images/maingallery/new-logo.png"
                                    alt="տնտեսական ապրանքներ , օնլայն խանութ, տնտեսական ապրանքներ օնլայն    "></a>
                        </div>
                        <ul class="row col justify-content-between mb-0 align-items-center">
                            <li class="menu-icon">
                                <a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <span class="shopp-cart">0</span>
                            </li>
                            <li class="menu-icon">
                                <a href=""><i class="fa fa-heart"></i></a>
                            </li>
                            <li class="login d-flex align-items-center justify-content-end py-2 ">
                                <a href="login.html" class="d-flex align-items-center">Մուտք</a>
                                <span class="mx-1">/</span>
                                <a href="signin.html"> Գրանցվել</a>
                            </li>
                            <li class=" menu-icon d-flex align-items-center justify-content-end py-2 d-block d-sm-none">
                                <a href="login.html"> <i class="fa fa-sign-in"></i></a>
                            </li>

                            <li class="dropdown language ">
                                <a class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img src="/images/content/arm.png" alt="ARM">

                                </a>

                                <div class="dropdown-menu  border-0 ">
                                    <a class="dropdown-item p-0" href="#">
                                        <img src="/images/content/arm.png" alt="ARM">
                                    </a>
                                    <a class="dropdown-item p-0 mt-2" href="#">
                                        <img src="/images/content/rus.png" alt="RUS">

                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>


        <div class="subNavbar">
            <div class="logo">
                <a href="index.html"><img src="/images/maingallery/new-logo.png" alt="Tntesakan logo"></a>
            </div>
            <div class="search-box">
                <form action="">
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <input type="text" class="searchInput  " placeholder="Փնտրել ..." onkeypress="return">
                </form>
                <div class="resultSearch"></div>
            </div>

            <div class="accordion" id="productAccardion">
                <div id="headingOne">
                    <h5 class="mb-0">
                        <button class="subNavbarBtn" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Ապրանքներ <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#productAccardion">
                    <div>
                        <div class="accordion" id="productSubAccardion">
                            <div id="headingOne">
                                <h5 class="mb-0">
                                    <button class="subNavbarBtn subAccardionBtn" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo27" aria-expanded="true" aria-controls="collapseTwo">
                                        Էլեկտրական աքսեսուարներ <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                                    </button>
                                </h5>

                            </div>

                            <div id="collapseTwo27" class="collapse" aria-labelledby="headingOne"
                                data-parent="#productSubAccardion">
                                <div>
                                    <a href="product.html" class="subNavbarBtn subSubAccardionBtn">Լամպեր</a>
                                    <a href="product.html" class="subNavbarBtn subSubAccardionBtn">Մարտկոցներ</a>
                                    <a href="product.html" class="subNavbarBtn subSubAccardionBtn">Երկարացման լարեր</a>
                                </div>
                            </div>

                            <div id="headingOne">
                                <h5 class="mb-0">
                                    <button class="subNavbarBtn subAccardionBtn" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo28" aria-expanded="true" aria-controls="collapseTwo">
                                        Լվացող Միջոցներ <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                                    </button>
                                </h5>

                            </div>

                            <div id="collapseTwo28" class="collapse" aria-labelledby="headingOne"
                                data-parent="#productSubAccardion">
                                <div>
                                    <a href="product.html" class="subNavbarBtn subSubAccardionBtn">Սպասք
                                        լվանալու միջոց</a>
                                    <a href="product.html" class="subNavbarBtn subSubAccardionBtn">Լվացքի
                                        փոշի և գել</a>
                                    <a href="product.html" class="subNavbarBtn subSubAccardionBtn">Ապակիները մաքրելու
                                        հեղուկ </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <a href="contact.html" class="subNavbarBtn">Կապ</a>
            <a href="discount.html" class="subNavbarBtn">Ակցիաներ</a>
        </div>
    </header>

   <!-- =======================================================
                        CONTENT
========================================================= -->
    <main class="py-5 signin">
        <div class="container">
            <h1 class="sectonTitle pb-2">Գրանցում</h1>
            <p class="text-center">Եթե Դուք արդեն գրանցված եք <a href="personalacound.html"> Մուտք գործեք Ձեր անձնական
                    էջը </a></p>
            <form method="post" action="" id="signin-form">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Ձեր անձնական տվյալները</h2>

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="name">Անուն<span class="requiredStar">*</span></label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname">Ազգանուն<span class="requiredStar">*</span></label>
                                <input type="text" name="lastname" id="lastname">
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Էլ. Փոստ<span class="requiredStar">*</span></label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="col-sm-6">
                                <label for="phone">Հեռախոս<span class="requiredStar">*</span></label>
                                <input type="tel" name="phone" id="phone" >
                            </div>
                            <div class="col-sm-6">
                                <label for="password">Գաղնաբառ<span class="requiredStar">*</span></label>
                                <input type="password" name="password" id="password">
                            </div>
                            <div class="col-sm-6">
                                <label for="confirmPassword">Հաստատել գաղնաբառը<span
                                        class="requiredStar">*</span></label>
                                <input type="password" name="repassword" id="confirmPassword">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h2>Ձեր հասցեն</h2>
                        <div class="row justify-content-end">
                            <div class="col-sm-6">
                                <label for="country">Շրջան / մարզ<span class="requiredStar">*</span></label>
                                <select  name="regionid">
                                    <option value="6">Երևան</option>
                                    <option value="8">Արագածոտն</option>
                                    <option value="10">Արարատ</option>
                                    <option value="11">Արմավիր</option>
                                    <option value="13">Գեղարքունիք</option>
                                    <option value="15">Լոռի</option>
                                    <option value="17">Կոտայք</option>
                                    <option value="19">Շիրակ</option>
                                    <option value="21">Սյունիք</option>
                                    <option value="23">Վայոց ձոր</option>
                                    <option value="25">Տավուշ</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="city">Քաղաք<span class="requiredStar">*</span></label>
                                <input type="text" name="city" id="city">
                            </div>
                            <div class="col-sm-6">
                                <label for="address">Հասցե<span class="requiredStar">*</span></label>
                                <input type="text" name="address" id="address">
                            </div>
                            <div class="col-sm-6 ">
                                <label for="passport" id="passport">Անձնագրի սերիա<span class="requiredStar">*</span></label>
                                <input type="text" name="passport" id="passport">
                            </div>

                            <div class="col-sm-6 company ">
                                <label for="company">Կազմակերպություն<span class="requiredStar">*</span></label>
                                <input type="text" name="company" id="company">
                            </div>
                            <div class="col-sm-6  sign-comp">
                                <label class="d-flex  align-items-center">
                                    <input type="radio" name="company" value="personal" class="mr-2 w-auto" checked>
                                    <span> Անհատ<span class="requiredStar">*</span></span>
                                </label>
                                <label class="d-flex  align-items-center">
                                    <input type="radio" name="company" value="company" class="mr-2 w-auto" id="comp">
                                    <span>Կազմակերպություն<span class="requiredStar">*</span></span>
                                </label>

                            </div>

                        </div>

                        <div class="d-flex justify-content-around align-items-center">
                            <label for="confirm" style="margin-top: 0.5rem"> Ես ծանոթացել
                                    եմ և համաձայն եմ <a href="single.html">փաստաթղթի պայմաններին</a> </label> <input type="checkbox"
                                    style="width: auto" id="confirm">
                        </div>
                        <button class="button" type="button">Գրանցվել</button>
                    </div>

                </div>
            </form>
        </div>

    </main>

<!-- =======================================================
                        FOOTER
========================================================= -->

    <footer class="footer pt-4">

            <div class="footerTop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-3">
                            <div class="deliver">
                                <div class="deliverLogo">
                                    <img src="..//images/maingallery/delivery.png" alt="delivery">
                                </div>
                                <h4 class="py-2">Առաքում</h4>
                                <p>
                                    Առաքում Երևանում 24 ժամվա ընթացքում:
                                    Առաքում մարզեր մեքենայով՝ 1-ից 2 օրվա ընթացքում,
                                    նախապես պայմանավորվելով կայքի ադմինիստրատորի հետ:
                                    Մարզեր առաքման գումարը կախված է հեռավորությունից և
                                    կգանձվի տեղում առաքիչի կողմից: </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-3">
                            <div class="deliver">
                                <div class="deliverLogo">
                                    <img src="..//images/maingallery/pay.png" alt="pay">
                                </div>
                                <h4 class="py-2">Վճարում</h4>
                                <p>Գործում են վճարման հետևյալ եղանակները`կանխիկ և անկանխիկ առցանց վճարում՝ IDRAM, MASTER
                                    CARD և VISA քարտերով:
                                    Կանխիկ վճարումները դոլարով կամ այլ արտարժույթով չեն ընդունվում:</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-3">
                            <div class="deliver">
                                <div class="deliverLogo">
                                    <img src="..//images/maingallery/payment.png" alt="payment">
                                </div>
                                <h4 class="py-2">Պատվերի ընդունում</h4>
                                <p>Դուք կարող եք պատվերն ուղարկել առցանց (նախօրոք գրանցվելով կայքում),
                                    ինչպես նաև հեռախոսազանգով՝ կապ հաստատելով մեր օպերատորի հետ:
                                    Մենք աշխատում ենք 24 ժամ:</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-4">

                <div class="row justify-content-around footer-bot">
                    <div class=" col-sm-4 mt-sm-0 mt-md-2">
                        <ul>
                      <li class="footerItem"><a href="@lang('pagination.lang')/about">Մեր մասին</a></li>
                      <li class="footerItem"><a href="@lang('pagination.lang')/delivery">Առաքման պայմաններ</a></li>
                      <li class="footerItem"><a href="@lang('pagination.lang')/privacy">Առաքում և վճարում</a></li>
                      <li class="footerItem"><a href="@lang('pagination.lang')/terms">Օգտագործման պայմաններ</a></li>
                  </ul>
                    </div>

                    <div class=" col-sm-4 mt-sm-0 mt-md-2">
                        <ul>
                      <li class="footerItem"><a href="@lang('pagination.lang')/contact">Հետադարձ կապ</a></li>
                      <!-- <li class="footerItem"><a href="#"></a></li> -->
                      <!-- <li class="footerItem"><a href="#"></a></li> -->
                      <li class="footerItem"><a href="like.html">Հավանածներ</a></li>
                      <li class="footerItem">
                          <a href="https://www.facebook.com/Tntesakanam-294408701072655/" target="_blank"
                              class="d-inline-flex align-items-center">
                              <i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook
                          </a>
                      </li>
                  </ul>
                    </div>

                    <div class=" col-sm-4 mt-sm-0 mt-md-2">
                        <ul>

                            <li class="footerItem">
                                <a href="#" class="d-inline-flex align-items-center">
                                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    ք. Երևան, Արշակունյաց 24 </a>
                            </li>
                            <li class="footerItem">
                                <a href="tel: +37491849090" class="d-inline-flex align-items-center">
                                    <i class="fa fa-phone" aria-hidden="true"></i> (+374) 91 84 90 90
                                </a>
                            </li>
                            <li class="footerItem">
                                <a href="mailto: info@tntesakan.am" class="d-inline-flex align-items-center">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> info@tntesakan.am
                                </a>
                            </li>
                            <li class="footerItem">
                                <a href="#" class="d-inline-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    Երկ. - կիրակի ժ 9:00 - 22:00 </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <p> "Սուրմալու, 2-րդ տաղավար" &#169; <span class="date"></span></p>
                </div>
            </div>
        </footer>


        <div class="black-window"></div>
<script src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>

</body>


<!-- Mirrored from www.tntesakan.am/am/signin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Apr 2020 13:34:25 GMT -->

</html>