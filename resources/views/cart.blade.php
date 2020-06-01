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

<!-- =======================================================
                        HEADER
========================================================= -->
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
                      <li class="menuList"><a href="index.html#spec-sug">Ակցիաներ</a></li>
                      <li class="search-box">
                          <form action="">
                              <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                              <input type="text" class="searchInput" placeholder="Փնտրել ..." onkeypress="return">
                          </form>
                          <div class="resultSearch"></div>
                      </li>
                  </ul>
                  <div class="logo col-lg-3 col-md-5 px-md-4 ">
                      <a href="index.html"><img src="images/maingallery/new-logo.png"
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
                              <img src="images/content/arm.png" alt="ARM">

                          </a>

                          <div class="dropdown-menu  border-0 ">
                              <a class="dropdown-item p-0 pb-2 " href="#">
                                  <img src="images/content/rus.png" alt="RUS">

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
          <a href="index.html"><img src="images/maingallery/new-logo.png" alt="Tntesakan logo"></a>
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
      <a href="index.html#spec-sug" class="subNavbarBtn">Ակցիաներ</a>
  </div>
</header>
<!-- =======================================================
                        CONTENT
========================================================= -->
  <div class="content">
    <div class="container">
      <p class="my__buy_prods my-4">
        <span>
          <a href="my-purchases.html">Իմ Գնումները</a>
        </span>
      </p>

      <div class="mainCart clear">
        <div class="col-lg-10  m-auto">
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="col-md-5 col-xs-2 ">Ապրանք</th>
                <th class="col-md-2 col-xs-3  ">Քանակ</th>
                <th class="col-md-2 col-xs-2 ">Գին</th>
                <th class="col-md-2 col-xs-2 ">Ջնջել</th>
              </tr>
            </thead>
            <tbody>
              <tr class="_CountProd_">
                <td class="col-xs-3 row align-items-center m-0">
                  <div class="col-md-3 col-xs-5 ">
                    <img src="https://www.tntesakan.am/assetsimages/product/f3v1nwt9.jpeg" width="100%">
                  </div>
                  <div class="col-md-9 col-xs-8 ">75w</div>
                </td>
                <td>
                  <div class="col-md-9 col-xs-12 ">
                    <input type="text" class="form-control data_count" id="prod1" value="1" disabled="disabled">
                  </div>
                  <div class="col-md-2  nopadd d-inline jusify-content-center flex-row flex-md-column">
                    <div class=" nopadd  _count_" id="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                    <div class=" nopadd  _count_" id="minus"><i class="fa fa-minus" aria-hidden="true"></i></div>
                  </div>
                </td>
                <td>
                  <span class="data_span" data-span="5512">
                    <input type="hidden" class="countPrice" value="90">
                    <input type="hidden" class="limitPrice" value="74">
                    <input type="hidden" class="limitcount" value="10">
                    <span class="_resultPrice_">90</span>
                  </span>
                </td>
                <td><span class="del_formcart" data-id="3271"><i class="fa fa-trash fa-2x"
                      aria-hidden="true"></i></span>
                </td>
              </tr>
              <tr class="_CountProd_">
                <td class="col-xs-3 row align-items-center m-0">
                  <div class="col-md-3 col-xs-5 ">
                    <img src="https://www.tntesakan.am/assetsimages/product/f3v1nwt9.jpeg" width="100%">
                  </div>
                  <div class="col-md-9 col-xs-8 ">75w</div>
                </td>
                <td>
                  <div class="col-md-9 col-xs-12 ">
                    <input type="text" class="form-control data_count" id="prod2" value="1" disabled="disabled">
                  </div>
                  <div class="col-md-2  nopadd d-inline jusify-content-center flex-row flex-md-column">
                    <div class=" nopadd  _count_" id="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                    <div class=" nopadd  _count_" id="minus"><i class="fa fa-minus" aria-hidden="true"></i></div>
                  </div>
                </td>
                <td>
                  <span class="data_span" data-span="5512">
                    <input type="hidden" class="countPrice" value="90">
                    <input type="hidden" class="limitPrice" value="74">
                    <input type="hidden" class="limitcount" value="10">
                    <span class="_resultPrice_">90</span>
                  </span>
                </td>
                <td><span class="del_formcart" data-id="3271"><i class="fa fa-trash fa-2x"
                      aria-hidden="true"></i></span>
                </td>
              </tr>

            </tbody>
          </table>
          <div class="totalPrice ">
            <div class="left">Ընդանուր գումարը</div>
            <div class="orderPrice"></div>
            <div class="right _oldPrice_">0</div>
          </div>
          <div class="paymantBox ">
            <span class="paymant right " data-toggle="modal" data-target="#myModal">Վճարել</span>
          </div>
        </div>
      </div>


      <h3 class="together ">Միասին փնտրում են</h3>
      <div class="row">
        <div class=" col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img src="images/categories/kspumz44.png" alt="" class="cart-img-top">
            <div class="card-body">
              <div class="card-text text-capitalize">օճառ</div>
            </div>
          </div>
        </div>
        <div class=" col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img src="images/categories/kspumz44.png" alt="" class="cart-img-top">
            <div class="card-body">
              <div class="card-text text-capitalize">օճառ</div>
            </div>
          </div>
        </div>
        <div class=" col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img src="images/categories/kspumz44.png" alt="" class="cart-img-top">
            <div class="card-body">
              <div class="card-text text-capitalize">օճառ</div>
            </div>
          </div>
        </div>
        <div class=" col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img src="images/categories/kspumz44.png" alt="" class="cart-img-top">
            <div class="card-body">
              <div class="card-text text-capitalize">օճառ</div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

<!-- =======================================================
                      MODAL PERSONAL DATA
========================================================= -->
  <div class="modal fade " id="myModal" role="dialog ">
    <div class="modal-dialog modal-md ">
      <div class="modal-content empty ">
        <div class="modal-header successHeader">
          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle-o fa-2x"
              aria-hidden="true"></i></button>
          <h4 class="modal-title"><i class="fa fa-check fa-2x" aria-hidden="true"></i></h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12 my_reg_modal clear center">
            <div class="listTitle">
              <h4>Ձեր անձնական տվյալները</h4>
              <p class="errorPayman">Տեղի է ունեցել սխալ լրացրեք բոլոր դաշտերը</p>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="name">Անուն<span class="red">*</span></label>
                <input type="text" name="name" class="form-control count_input" id="name" value='' required />
              </div>
              <div class="form-group">
                <label for="email">E-mail<span class="red">*</span></label>
                <input type="text" name="email" class="form-control count_input" value='' id="email" required />
              </div>
              <div class="form-group">
                <label for="phone">Հեռախոս<span class="red"> *</span></label>
                <input type="text" name="phone" class="form-control count_input" id="phone" value='' required />
              </div>
              <div class="form-group ">
                <label for="city">Քաղաք<span class="red"> *</span></label>
                <input type="text" name="city" class="form-control count_input" id="city" value='' required />
              </div>
              <div class="form-group ">
                <label for="address">Հասցե<span class="red"> *</span></label>
                <input type="text" name="address" class="form-control count_input" id="address" value='' required />
              </div>
              <div class="form-group ">

                <select style="display:none;" name="delivery_price" class="form-control count_input">
                  <option value="18">Շենգավիթ Առաքման գին 1000 Դրամ</option>
                  <option value="17">Նուբարաշեն Առաքման գին 1000 Դրամ</option>
                  <option value="16">Նորք-Մարաշ Առաքման գին 1000 Դրամ</option>
                  <option value="15">Նոր Նորք Առաքման գին 1000 Դրամ</option>
                  <option value="14">Մալաթիա-Սեբաստիա Առաքման գին 1000 Դրամ</option>
                  <option value="13">Էրեբունի Առաքման գին 1000 Դրամ</option>
                  <option value="12">Դավթաշեն Առաքման գին 1000 Դրամ</option>
                  <option value="11">Արաբկիր Առաքման գին 1000 Դրամ</option>
                  <option value="10">Ավան Առաքման գին 1000 Դրամ</option>
                  <option value="9">Աջափնյակ Առաքման գին 1000 Դրամ</option>
                  <option value="8">Քանաքեռ-Զեյթուն Առաքման գին 1000 Դրամ</option>
                  <option value="6">Կենտրոն Առաքման գին 1000 Դրամ</option>
                </select>
                Առաքման գումար
                <span style="display: flex;">
                  <h2 style="margin-right: 11px;" id="sd">0</h2>
                  <h2>Դրամ</h2>
                </span>
              </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="paymant" data-dismiss="modal">Փակել</button>
          <button type="button" class="paymant verification_payment">Վճարել Օնլայն</button>
          <button type="button" class="paymant payment_cash">Վճարել Կանխիկ</button>

          <!--<form id="idram" method="POST" action="https://money.idram.am/payment.aspx" >-->
          <!--<input type="hidden" class="count_input" id="EDP_LANGUAGE" name="EDP_LANGUAGE" value="am">-->
          <!--<div class="form-group">-->
          <!--<input type="hidden" class="count_input" id="EDP_REC_ACCOUNT" name="EDP_REC_ACCOUNT" value="100000907">-->
          <!--</div>-->
          <!--<input type="hidden" class="count_input" id="EDP_DESCRIPTION" name="EDP_DESCRIPTION" value="www.tntesakan.am">-->
          <!--<input type="hidden" class="_oidramPrice_" id="EDP_AMOUNT" name="EDP_AMOUNT" value="20">-->
          <!--<input type="hidden" class="count_input order_idd" id="EDP_BILL_NO" name="EDP_BILL_NO" value="order_id">-->
          <!--<input type="hidden" class="count_input" id="EDP_PRECHECK" name="EDP_PRECHECK" value="YES">-->

          <!--<button class="verification_idram" type="button"><img  src="https://www.tntesakan.am/assetsimages/idram.png"></button>-->

          <!--</form> -->
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header errorHeader">
          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle-o fa-2x"
              aria-hidden="true"></i></button>
          <h4 class="modal-title"><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i></h4>
        </div>
        <div class="modal-body">
          <h4>Հարգելի օգտատեր պեք է գերազանցել 5000 դրամը որպեսզի կարողանաք գնում կատարել հարգանքներով tntesakan.am</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="paymant" data-dismiss="modal">Փակել</button>
        </div>
      </div>
    </div>
  </div>

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
                              <img src="images/maingallery/delivery.png" alt="delivery">
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
                              <img src="images/maingallery/pay.png" alt="pay">
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
                              <img src="images/maingallery/payment.png" alt="payment">
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
                      <li class="footerItem"><a href="/about">Մեր մասին</a></li>
                      <li class="footerItem"><a href="{{ asset('/delivery')}}">Առաքման պայմաններ</a></li>
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

<!-- =======================================================
                        MODAL
========================================================= -->

  <div class="modal call-modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block;">
          <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">Ընտրեք հեռախոսահամարը</h5>
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

<!-- Mirrored from www.tntesakan.am/am/cart/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Apr 2020 13:05:59 GMT -->

</html>