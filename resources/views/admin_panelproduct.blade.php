<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <style type="text/css">thead input {
        width: 100%;
    }</style>
        <title>ՏՆտեսկան կառավարման համակարգ</title>
        <link href="{{ asset('admin/css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous"/>
        <link href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js" crossorigin="anonymous"></script>



    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Մենյու</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                   
                    <div class="input-group-append">
                        
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                       <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                             <a class="nav-link" href="admin_panel"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                              <a class="nav-link" href="admin_panelcatigoris"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Categoris/Կատիգորիա</a
                            >


                               <a class="nav-link" href="admin_panelsubcatigoris"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Subcatigoris/Սաբկատիգորիա</a



                            >   <a class="nav-link" href="admin_panelproductgroup"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Group/Խումբ</a
                            >   



                           

                            <a class="nav-link"  href="admin_panelproduct"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Product/Ապրանք</a
                            >


                          

                           
                            </div>
                        </div>
                    <div class="sb-sidenav-footer">
                        
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h2><center>Ավելացնել Ապրանք</center></h2>
                    <div style="margin: auto;width: 50%;border: 3px solid #004990;padding: 10px;">
                   <form action="/addproduct" method="post" id="carform" enctype="multipart/form-data">
                    @csrf
                    Անուն:<input type="text" name="name" placeholder="Name" required>
                    <br>
                    <br>
                    Նկար:<input type="file" name="image" placeholder="Photo" required>
                    <br>
                    <br>
                    Serial Number:<input type="number" name="serialnamber" placeholder="SerialNamber" required>
                    <br>
                    <br>
                    Գին:<input type="number" name="price" placeholder="Price" required>
                    <br>
                    <br>
                    Նախկին գին:<input type="number" name="previous_price" placeholder="previous_price" required>
                    <br>
                    <br>
                    Նկարագրություն:
                    <br>
                          <textarea name="editor1"></textarea>
                        <script>
                                CKEDITOR.replace( 'editor1' );
                        </script>

                    
                    <br>
                    <br>
                    Քանակ:<input type="number" name="quantity" placeholder="Quantity" required>
                    <br>
                    <br>
                    <br>
                    <label for="cars">Ընտրել լեզուն:</label>
                        <select id="cars" name="lang" form="carform">
                          <option value="am">Հայերեն</option>
                          <option value="ru">Ռուսերեն</option>
                        </select>
                    <br>
                    <br>
                    <br>
                    <label for="cars">Բաժին:</label>
                        <select id="cars" name="catigoris" form="carform">
                             @foreach($subcategorys as $subcategory)
                          <option value="{{ $subcategory->categories }}">{{ $subcategory->categories }}</option>
                              @endforeach 
                        </select>
                    <br>
                    <br>
                    <br>
                     <label for="cars">Ենթաբաժին:</label>
                        <select id="cars" name="subcatigoris" form="carform">
                              @foreach($subcategorys as $subcategory)
                          <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                              @endforeach 
                        </select>
                    <br>
                    <br>
                    <br> 
                      <label for="cars">Խումբ:</label>
                        <select id="cars" name="group" form="carform">
                              @foreach($gruops as $gruop)
                          <option value="{{ $gruop->name }}">{{ $gruop->name }}</option>
                              @endforeach 
                        </select>
                    <br>
                    <br>

                    <br>
                       Բրենդ։ <input type="text" name="brend" placeholder="brend" required>
                    <br>
                    <br>
                    <br>

                    <input type="submit" name="" value="Ավելացնել">
                   </form>
               </div>
             <!--    -->
                <table id="example" class="display" style="width:100%">
      <thead>
            <tr>
                <th>Անուն</th>
                <th>Serial Namber</th>
                <th>Գին</th>
                <th>Նախկին գին</th>
                <th>Քանակ</th>
                <th>Լեզու</th>
                <th>Բաժին</th>
                <th>Ենթաբաժին</th>
                <th>Խումբ</th>
                <th>Բրենդ</th>
                <th>Մանրամասն</th>
            </tr>
        </thead>
        <tbody>
             @foreach($products as $product)
            <tr> 
                <td><center>{{ $product->name }}</center></td>
                <td><center>{{ $product->code }}</center></td>
                <td><center>{{ $product->price }}</center></td>
                <td><center>{{ $product->newprice }}</center></td>
                <td><center>{{ $product->quantity }}</center></td>
                <td><center>{{ $product->lang }}</center></td>
                <td><center>{{ $product->catigoric }}</center></td>
                <td><center>{{ $product->subcatigoris }}</center></td>
                <td><center>{{ $product->group }}</center></td>
                <td><center>{{ $product->brend }}</center></td>
                <td><center><button><a href="admin_panelproduct/editproduct/{{ $product->id }}">Մանրամասն</a></button></center></td>
            </tr>
             @endforeach 
        </tbody>
        <tfoot>
            <th>Անուն</th>
                <th>Serial Namber</th>
                <th>Գին</th>
                <th>Նախկին գին</th>
                <th>Քանակ</th>
                <th>Լեզու</th>
                <th>Բաժին</th>
                <th>Ենթաբաժին</th>
                <th>Խումբ</th>
                <th>Բրենդ</th>
                <th>Մանրամասն</th>
        </tfoot>

    </table>




                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Տնտեսական 2020</div>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script type="text/javascript">


            $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example thead tr').clone(true).appendTo( '#example thead' );
    $('#example thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#example').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    } );
} );</script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('admin/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
         <script src="{{ asset('admin1/assets/demo/datatables-demo.js')}}"></script>
    </body>
</html>
