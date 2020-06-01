<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" onkeypress="return runScript(event)">

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
<link rel="icon" type="image/png" href="images/maingallery/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="images/maingallery/favicon-16x16.png" sizes="16x16" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="css/app.css" rel="stylesheet">
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
                                     @lang('main.products')<b class="fa fa-bars"></b></a>
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
                            <li class="menuList"><a href="@lang('pagination.lang')/contact"> @lang('main.contactname')</a></li>
                            <li class="menuList"><a href="@lang('pagination.lang')/index">@lang('main.actions')</a></li>
                            <li class="search-box">
                                <form action="">
                                    <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                    <input type="text" class="searchInput" placeholder="@lang('main.search') ..." onkeypress="return">
                                </form>
                                <div class="resultSearch"></div>
                            </li>
                        </ul>
                        <div class="logo col-lg-3 col-md-5 px-md-4 ">
                            <a href="@lang('pagination.lang')/index"><img src="{{ asset('images/maingallery/new-logo.png')}}"
                                    alt="@lang('main.textimg')"></a>
                        </div>
                        <ul class="row col justify-content-between mb-0 align-items-center">
                            <li class="menu-icon">
                                <a href="@lang('pagination.lang')/cart"><i class="fa fa-shopping-cart"></i></a>
                                <span class="shopp-cart">0</span>
                            </li>
                            <li class="menu-icon">
                                <a href=""><i class="fa fa-heart"></i></a>
                            </li>
                            <li class="login d-flex align-items-center justify-content-end py-2 ">
                                <a href="@lang('pagination.lang')/login" class="d-flex align-items-center">@lang('main.welcome')</a>
                                <span class="mx-1">/</span>
                                <a href="@lang('pagination.lang')/signin"> @lang('main.signin')</a>
                            </li>
                            <li class=" menu-icon d-flex align-items-center justify-content-end py-2 d-block d-sm-none">
                                <a href="@lang('pagination.lang')/login"> <i class="fa fa-sign-in"></i></a>
                            </li>

                            <li class="dropdown language ">
                                <a class=" dropdown-toggle"  href="/am" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('images/content/arm.png')}}" alt="ARM">

                                </a>

                                <div class="dropdown-menu  border-0 ">
                                    <a class="dropdown-item p-0 pb-2 " href="/ru">
                                        <img src="{{ asset('images/content/rus.png')}}" alt="RUS">

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
                <a href="index"><img src="{{ asset('images/maingallery/new-logo.png')}}" alt="Tntesakan logo"></a>
            </div>
            <div class="search-box">
                <form action="">
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <input type="text" class="searchInput  " placeholder="@lang('main.search') ..." onkeypress="return">
                </form>
                <div class="resultSearch"></div>
            </div>

            <div class="accordion" id="productAccardion">
                <div id="headingOne">
                    <h5 class="mb-0">
                        <button class="subNavbarBtn" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            @lang('main.products') <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
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
                                    <a href="product" class="subNavbarBtn subSubAccardionBtn">Լվացքի
                                        փոշի և գել</a>
                                    <a href="product" class="subNavbarBtn subSubAccardionBtn">Ապակիները մաքրելու
                                        հեղուկ </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <a href="contact" class="subNavbarBtn">@lang('main.contactname')</a>
            <a href="index" class="subNavbarBtn">@lang('main.actions')</a>
        </div>
    </header>
    <main>
        <section class="banner">

            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/maingallery/rcszjevf.jpg" alt="Tntesakan ">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/maingallery/nwhlq8mq.jpg" alt="Tntesakan ">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/maingallery/m2f7783n.jpg" alt="Tntesakan ">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section class="category py-4">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="text-write ">
                        <h2 class="sectonTitle  ">@lang('main.catigoris')</h1>
                    </div>
                </div>


                <div class="row">
                    @foreach($categorys as $category)
                    <div class="col-md-6 col-lg-4">
                        <div class="categoryBox">
                            <a href="@lang('pagination.lang')/categories/{{ $category->name }}">
                                <div class="categoryBoxImg">
                                    <img src="{{ asset('/images/categories/')}}/{{ $category->data }}" alt="">
                                </div>
                                <div class="categoryBoxText">
                                    <h4>{{ $category->name }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach 

                </div>
            </div>
        </section>

        <section class="product py-4">
            <div class="container">
                <div id="dauly-sug">
                    <div class="d-flex justify-content-center">
                        <div class="text-write ">
                            <h2 class="sectonTitle">@lang('main.suggestionsfortheday')</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="productBox d-flex flex-column justify-content-between">
                                <a href="product/834/index.html" class="productBtn">
                                    <div class="discountText">Զեղչ</div>
                                    <div class="productImg">
                                        <img src="images/product/guewzk4h.png" alt="">
                                    </div>
                                    <div class="productText">
                                        <h6>Տակդիրներ Летти 5 (15-25կգ), 36 հատ</h6>
                                    </div>
                                    <div class="productPrice d-flex justify-content-center">
                                        <span class="sale">4000 Դր</span>
                                        <span class="price">3000 Դր</span>
                                    </div>
                                </a>
                                <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                    <a href="product/834/index.html" class="productBtn">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <div class="productBtn user_likes  BtnColorFav " data-id="834">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                    <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5794">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="productBox d-flex flex-column justify-content-between">
                                <a href="product/833/index.html" class="productBtn">
                                    <div class="discountText">Զեղչ</div>
                                    <div class="productImg">
                                        <img src="images/product/sg4g6d1t.png" alt="">
                                    </div>
                                    <div class="productText">
                                        <h6>Տակդիրներ Летти 4 (7-18կգ), 40 հատ</h6>
                                    </div>
                                    <div class="productPrice d-flex justify-content-center">
                                        <span class="sale">4000 Դր</span>
                                        <span class="price">3000 Դր</span>
                                    </div>
                                </a>
                                <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                    <a href="product/833/index.html" class="productBtn">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <div class="productBtn user_likes  BtnColorFav " data-id="833">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                    <div class=" productBtn shopBtn add_bag BtnColorWive bag_yellow" data-code="5793">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="productBox d-flex flex-column justify-content-between">
                                <a href="product/832/index.html" class="productBtn">
                                    <div class="discountText">Զեղչ</div>
                                    <div class="productImg">
                                        <img src="images/product/cewbcw67.png" alt="">
                                    </div>
                                    <div class="productText">
                                        <h6>Տակդիրներ Летти 3 (5-10կգ), 44 հատ</h6>
                                    </div>
                                    <div class="productPrice d-flex justify-content-center">
                                        <span class="sale">4000 Դր</span>
                                        <span class="price">3000 Դր</span>
                                    </div>
                                </a>
                                <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                    <a href="product/832/index.html" class="productBtn">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <div class="productBtn user_likes  BtnColorFav " data-id="832">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                    <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5792">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="productBox d-flex flex-column justify-content-between">
                                <a href="product/831/index.html" class="productBtn">
                                    <div class="discountText">Զեղչ</div>
                                    <div class="productImg">
                                        <img src="images/product/rfh47zgf.png" alt="">
                                    </div>
                                    <div class="productText">
                                        <h6>Տակդիրներ Летти 2 (3-6կգ), 48 հատ</h6>
                                    </div>
                                    <div class="productPrice d-flex justify-content-center">
                                        <span class="sale">4000 Դր</span>
                                        <span class="price">3000 Դր</span>
                                    </div>
                                </a>
                                <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                    <a href="product/831/index.html" class="productBtn">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <div class="productBtn user_likes  BtnColorFav " data-id="831">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                    <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5791">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-md-12 nopadd clear">
                    <div class="view_more text-center">
                        <span><a href="product/hotsale/1/index.html"
                                class="button text-center my-4 d-inline-block">@lang('main.suggestionsfortheday')</a></span>
                    </div>
                </div>
            </div>
            <div id="spec-sug">
                <div class="d-flex justify-content-center">
                    <div class="text-write ">
                        <h2 class="sectonTitle">@lang('main.specialoffers')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/830/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/lrm4dt4v.png" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Տակդիրներ Летти 1 (2-5կգ), 52 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">4000 Դր</span>
                                    <span class="price">3000 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/830/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="830">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5790">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/665/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/53o7lc4a.png" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Զուգարանի թուղթ Մասկովսկի</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">100 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/665/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="665">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5627">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/664/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/x3n7xtdp.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Զուգարանի թուղթ Օբուկով </h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">120 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/664/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="664">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5626">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/354/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/g150xeme.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ Fax 5 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">440 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/354/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="354">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5182">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/353/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/wvp7hvx6.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ FAX 5 հատ 70գր</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">440 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/353/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="353">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5183">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/352/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/10h0lbm7.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ Fax 5 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">440 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/352/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="352">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5184">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/349/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/47ki6psk.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ Fax 4 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">320 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/349/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="349">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5186">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/348/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/dsp5d7u4.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ Fax 4 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">320 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/348/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="348">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5187">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 nopadd clear">
                    <div class="view_more text-center">
                        <span><a href="product/hotsale/1/index.html"
                                class="button text-center my-4 d-inline-block">Դիտել ավելին</a></span>
                    </div>
                </div>
            </div>
            <div id="updates">
                <div class="d-flex justify-content-center">
                        <div class="text-write ">
                            <h2 class="sectonTitle">@lang('main.updates')</h2>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/830/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/lrm4dt4v.png" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Տակդիրներ Летти 1 (2-5կգ), 52 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">4000 Դր</span>
                                    <span class="price">3000 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/830/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="830">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5790">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/665/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/53o7lc4a.png" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Զուգարանի թուղթ Մասկովսկի</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">100 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/665/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="665">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5627">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/664/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/x3n7xtdp.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Զուգարանի թուղթ Օբուկով </h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">120 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/664/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="664">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5626">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/354/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/g150xeme.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ Fax 5 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">440 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/354/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="354">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5182">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/353/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/wvp7hvx6.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ FAX 5 հատ 70գր</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">440 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/353/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="353">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5183">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/352/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/10h0lbm7.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ Fax 5 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">440 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/352/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="352">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5184">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/349/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/47ki6psk.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ Fax 4 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">320 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/349/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="349">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5186">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="productBox d-flex flex-column justify-content-between">
                            <a href="product/348/index.html" class="productBtn">
                                <div class="discountText">Զեղչ</div>
                                <div class="productImg">
                                    <img src="images/product/dsp5d7u4.jpg" alt="">
                                </div>
                                <div class="productText">
                                    <h6>Օճառ Fax 4 հատ</h6>
                                </div>
                                <div class="productPrice d-flex justify-content-center">
                                    <span class="sale">0 Դր</span>
                                    <span class="price">320 Դր</span>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center align-items-center productBtnGroup">
                                <a href="product/348/index.html" class="productBtn">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="productBtn user_likes  BtnColorFav " data-id="348">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class=" productBtn shopBtn add_bag BtnColorWive " data-code="5187">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 nopadd clear">
                    <div class="view_more text-center">
                        <span><a href="product/hotsale/1/index.html"
                                class="button text-center my-4 d-inline-block">@lang('main.showall')</a></span>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <footer class="footer pt-4">

        <div class="footerTop">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-3">
                        <div class="deliver">
                            <div class="deliverLogo">
                                <img src="images/maingallery/delivery.png" alt="delivery">
                            </div>
                            <h4 class="py-2">@lang('main.shipment')</h4>
                            <p>@lang('main.shipmenttext')</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <div class="deliver">
                            <div class="deliverLogo">
                                <img src="images/maingallery/pay.png" alt="pay">
                            </div>
                            <h4 class="py-2">@lang('main.payment')</h4>
                            <p>@lang('main.paymenttext')</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <div class="deliver">
                            <div class="deliverLogo">
                                <img src="images/maingallery/payment.png" alt="payment">
                            </div>
                            <h4 class="py-2">@lang('main.acceptinganorder')</h4>
                            <p>@lang('main.acceptinganordertext')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">

            <div class="row justify-content-around footer-bot">
                <div class=" col-sm-4 mt-sm-0 mt-md-2">
                    <ul>
                      <li class="footerItem"><a href="about">@lang('main.abouttexts')</a></li>
                      <li class="footerItem"><a href="delivery">@lang('main.shipmenttexts')</a></li>
                      <li class="footerItem"><a href="privacy">@lang('main.privacytexts')</a></li>
                      <li class="footerItem"><a href="terms">@lang('main.termstexts')</a></li>
                  </ul>
                </div>

                <div class=" col-sm-4 mt-sm-0 mt-md-2">
                     <ul>
                      <li class="footerItem"><a href="contact">@lang('main.backcontact')</a></li>
                      <!-- <li class="footerItem"><a href="#"></a></li> -->
                      <!-- <li class="footerItem"><a href="#"></a></li> -->
                      <li class="footerItem"><a href="like">@lang('main.likes')</a></li>
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
                               @lang('main.address') </a>
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
                               @lang('main.time') </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <p> "@lang('main.namecompny')" &#169; <span class="date"></span></p>
            </div>
        </div>
    </footer>

    <div class="fixed-bar">
        <p title="Ֆեյսբուք">
            <a href="https://www.facebook.com/tntesakan.am/"><span class="fa fa-facebook"></span></a>
        </p>
        <p title="Ինստագրամ">
            <a href=""><span class="fa fa-instagram"></span></a>
        </p>
        <p title="Առաքում">
            <a href="delivery.html"><span class="fa fa-truck"></span></a>
        </p>
    </div>

    <div class="modal call-modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block;">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">@lang('main.selectthephonenumber')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="fa fa-times text-white"></span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="form-group border-div">
                            <a href="tel:+37491849090">  (+374) 91 84 90 90</a>
                        </div>
                        <div class="form-group border-div">
                            <a href="https://api.whatsapp.com/send?phone=37491849090">
                                <img src="images/maingallery/viber.svg" style="width: 30px"> +37491849090
                            </a>
                        </div>
                        <div class="form-group">
                            <a href="viber://chat?number=37491849090">
                                <img src="images/maingallery/whatsapp.svg" style="width: 30px"> +37491849090
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <button type="button" class="btn btn-call"><span class="fa fa-phone"></span></button>

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

<!-- Mirrored from www.tntesakan.am/am/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Apr 2020 13:05:30 GMT -->

</html>