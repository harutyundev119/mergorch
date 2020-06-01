<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Menu</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form style="display: none;" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input style="display: none;" class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button style="display: none;" class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!-- <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"> {{ ucfirst(Auth()->user()->name) }}</div>
                            <div class="sb-sidenav-menu-heading"> {{ ucfirst(Auth()->user()->position) }}</div>
                            <a class="nav-link" href="/dashboard"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Ապրանքի ստացում</a
                            >
                            <a class="nav-link" href="/output"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Ապրանքի դուսգրում</a
                            >
                            <a class="nav-link" href="/current"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Ապրանքներ որոնք անրաժեշտ են</a
                            >
                           <a class="nav-link" href="/inputtable"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Ստացած ապրանքների ցուցակ</a
                            >
                            <a class="nav-link" href="/outputtable"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Դուրսգրված ապրաքների ցուցակ</a
                            >
                            <a class="nav-link" href="/currenttable"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Անրաժեշտ ապրանքների ցուցակ</a
                            >
                           
                    </div>
                   </div>
                    
                      






                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4" > Ապրանքի ստացում</h1>
                       
                        <div class="row">
                           <div class="col-lg-4">
                           </div>
                          <div class="col-lg-4">
                          <form action="{{url('post-output')}}" method="POST" id="logForm">
                               
                                               {{ csrf_field() }}
                               
                                              <div class="form-label-group">
                                                <input type="text" name="towhomdidhegiveit" id="inputEmail" class="form-control" placeholder="Ում է տվել " >
                                                <label for="inputEmail">Ում է տվել </label>   
                                              </div> 
                               
                                              <div class="form-label-group">
                                                <input type="text" name="whatdidhegive" id="inputPassword" class="form-control" placeholder="Ինչ է տվել ">
                                                <label for="inputPassword">Ինչ է տվել </label> 
                                              </div>
                                              


                                             <div class="form-label-group">
                                                <input type="text" name="howmuch" id="inputPassword" class="form-control" placeholder="Ինչ քանակությամբ">
                                                <label for="inputPassword">Ինչ քանակությամբ</label> 
                                              </div>

                                              <div class="form-label-group">
                                                <input type="date" name="whendidhegiveit" id="inputPassword" class="form-control" placeholder="Երբ է տվել   ">
                                                <label for="inputPassword">Երբ է տվել   </label> 
                                              </div>

                                              <div class="form-label-group">
                                                <input type="date" name="whentogetitback" id="inputPassword" class="form-control" placeholder="Երբ պետք է ետ ստանա   ">
                                                <label for="inputPassword">Երբ պետք է ետ ստանա   </label> 
                                              </div>
                               
                                              <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Ավելացնել</button>
                                            </form>
                                          </div>
                                           <div class="col-lg-4"></div>
                           </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SED.am 2020</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
