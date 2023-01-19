<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Frequent Deliver</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">
</head>
<body>
   
    <header>
        <!--firstsection -->
       <section class="topbar">
           <div class="container">
           <div class="col-md-2 offset-10">
               <a href="#"><img src="{{ asset('front') }}/images/i.png" alt=""></a>
               <a href="#"><img src="{{ asset('front') }}/images/1.png" alt=""></a>
               <!-- <a href="#"><img src="{{ asset('front') }}/images/2.png" alt=""></a> -->
               <!-- <a href="#"><img src="{{ asset('front') }}/images/3.png" alt=""></a> -->
           </div>
           </div>
   </section>





       
   <section class="secondsection_mu">
       <div class="mainmenu">
       <nav class="navbar navbar-expand-lg navbar-light">
           <div class="container">
             <a class="navbar-brand" href="index.php"><img src="{{ asset('front') }}/images/logo.png" alt=""></a>
             <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                   <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}">Home</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link active text-white" aria-current="page" href="{{route('about')}}">About Us</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link active text-white" aria-current="page" href="{{route('howitwork')}}">How It Works</a>
                 </li>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Shipping Price Calculation
                   </a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#">link 1</a></li>
                     <li><a class="dropdown-item" href="#">Link 2</a></li>
                   </ul>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Become A Traveler</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link active text-white" aria-current="page" href="{{route('contactus')}}">Contact Us</a>
                 </li>
               </ul>
               <!-- <form class="d-flex">-->
               <!--  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
               <!--  <button class="btn btn-outline-success" type="submit">Search</button>-->
               <!--</form> -->
             </div>
           </div>
           </div>
         </nav>
   </div>
   </section>
   </header>
    
    
    @yield('content')

  </div>
  <!-- /.content-wrapper -->
  


  <!-- jQuery -->
  <script src="{{asset('/admin/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('/admin/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('/admin/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('/admin/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('/admin/dist/js/adminlte.js')}}"></script>

  <!-- geo Location -->
  <script
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDqnUWO38RJMjRlwsY1imxqB1WI8ZWsU3M"></script>

  <!-- Toastr -->
  <script src="{{asset('/admin/plugins/toastr/toastr.min.js')}}"></script>
  <script>
    @if (session('success'))
      toastr.success("{{session('success')}}");
    @endif
    @if (session('error'))
      toastr.error("{{session('error')}}")
    @endif
    @if ($errors -> any())
      @foreach($errors -> all() as $error)
    toastr.error("{{$error}}")
    @endforeach
    @endif
  </script>

  <!-- Change password -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"
    type="text/javascript"></script>
  <script type="text/javascript">
    $('.validatedForm').validate({
      rules: {
        password: {
          minlength: 8
        },
        password_confirmation: {
          minlength: 8,
          equalTo: "#password"
        }
      }



    });
    $('button').click(function () {
      $('.validatedForm').valid();
    });
  </script>


  <!-- DataTables  & Plugins -->
  <script src="{{asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": true,
        "buttons": ["csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });



    var searchInput = 'search_input';

    $(document).ready(function () {
      // alert('saad');
      var autocomplete;
      autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
        componentRestrictions: {
          country: "PK"
        }
      });

      google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        // alert(near_place.geometry);
        debugger
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
      });
    });


  </script>
  <script>
    Toast.fire({
      icon: 'error',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  </script>

</body>

</html>