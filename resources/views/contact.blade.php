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
                                    @lang('main.products') <b class="fa fa-bars"></b></a>
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
                            <li class="menuList"><a href="@lang('pagination.lang')/contact">Կապ</a></li>
                            <li class="menuList"><a href="@lang('pagination.lang')/index">Ակցիաներ</a></li>
                            <li class="search-box">
                                <form action="">
                                    <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                    <input type="text" class="searchInput" placeholder="Փնտրել ..." onkeypress="return">
                                </form>
                                <div class="resultSearch"></div>
                            </li>
                        </ul>
                        <div class="logo col-lg-3 col-md-5 px-md-4 ">
                            <a href="@lang('pagination.lang')/index"><img src="{{ asset('images/maingallery/new-logo.png')}}"
                                    alt="տնտեսական ապրանքներ , օնլայն խանութ, տնտեսական ապրանքներ օնլայն    "></a>
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
                                <a href="@lang('pagination.lang')/login" class="d-flex align-items-center">Մուտք</a>
                                <span class="mx-1">/</span>
                                <a href="@lang('pagination.lang')/signin"> Գրանցվել</a>
                            </li>
                            <li class=" menu-icon d-flex align-items-center justify-content-end py-2 d-block d-sm-none">
                                <a href="@lang('pagination.lang')/login"> <i class="fa fa-sign-in"></i></a>
                            </li>

                            <li class="dropdown language ">
                                <a class=" dropdown-toggle" href="/am" type="button" id="dropdownMenuButton" data-toggle="dropdown"
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
                <a href="@lang('pagination.lang')/index"><img src="{{ asset('images/maingallery/new-logo.png')}}" alt="Tntesakan logo"></a>
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
            <a href="@lang('pagination.lang')/contact" class="subNavbarBtn">Կապ</a>
            <a href="@lang('pagination.lang')/index" class="subNavbarBtn">Ակցիաներ</a>
        </div>
    </header>

  <main class="py-5 contact">
    <div class="container">

      <h1 class="pb-4 sectonTitle">@lang('main.contactpagename')</h1>
      <div class="row justify-content-around ">
        <div class="contactBox col-4">
          <div class="contactIcon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>
          <div class="contactText text-center mt-2">
            @lang('main.address')<br>
            <span class="bold">"@lang('main.namecompny')"</span>
          </div>
        </div>

        <div class="contactBox col-4">
          <div class="contactIcon">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </div>
          <div class="contactText text-center mt-2">
            <span class="bold"> + (374) 93 84 90 90<br>
              + (374) 91 84 90 90<br>+ (374) 95 84 90 90</span>
          </div>
        </div>

        <div class="contactBox col-4">
          <div class="contactIcon">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </div>
          <div class="contactText text-center mt-2">
            <span class="bold">@lang('main.worktime')</span><br>
            @lang('main.time') </div>
        </div>
      </div>
    </div>

    <div class="container pt-5">
      <h3 class="contactTitle">@lang('main.contactTitle')</h3>
      <form method="post" action="/contact">
          @csrf
        <label for="name">@lang('main.inputname')<span class="requiredStar">*</span></label>
        <input type="text" name="name" id="name">

        <label for="email">@lang('main.inputemail')<span class="requiredStar">*</span></label>
        <input type="email" name="email" id="email">

        <label for="comment">@lang('main.inputcomment')<span class="requiredStar">*</span></label>
        <textarea name="text" id="comment" rows="7"></textarea>

        <input class="button" type="submit" name="send_em" value="@lang('main.sentbutten')" />

      </form>
    </div>

  </main>

  <div class="map_blok">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3048.9917778681356!2d44.50174571488624!3d40.16473677885145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z1oQuINS11oDWh9Wh1bYsINSx1oDVt9Wh1a_VuNaC1bbVtdWh1oEgMjQ!5e0!3m2!1sru!2s!4v1557924331054!5m2!1sru!2s"
      width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>

  <footer class="footer pt-4">

      <div class="footerTop">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 mb-md-0 mb-3">
                      <div class="deliver">
                          <div class="deliverLogo">
                              <img src="{{ asset('images/maingallery/delivery.png')}}" alt="delivery">
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
                              <img src="{{ asset('images/maingallery/pay.png')}}" alt="pay">
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
                              <img src="{{ asset('images/maingallery/payment.png')}}" alt="payment">
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
                              <img src="{{ asset('images/maingallery/viber.svg')}}" style="width: 30px"> +37491849090
                          </a>
                      </div>
                      <div class="form-group">
                          <a href="viber://chat?number=37491849090">
                              <img src="{{ asset('images/maingallery/whatsapp.svg')}}" style="width: 30px"> +37491849090
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


</html>