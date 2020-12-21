<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Ecommerce | Admin</title>

    <!-- vendor css -->
    <link href="{{ asset('public/backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- bootstrap-tagsinput css -->
    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>

    <!-- DataTable css -->
    <link href="{{ asset('public/backend/lib/higlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/starlight.css') }}">
   
    <!-- Summernote CSS -->
    <link href="{{ asset('public/backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  </head>
  
  <body>

    @guest
        
    @else

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{ url('admin/home') }}"><i class="icon ion-android-star-outline"></i> Ecommerce</a></div>
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">
        <a href="{{ url('admin/home') }}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div>
        </a>
        
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Ürün Yönetimi</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.addproduct')}}" class="nav-link">Ürün Ekle</a></li>
          <li class="nav-item"><a href="{{route('admin.products')}}" class="nav-link">Ürünler</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Kategori Yönetimi</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('categories')}}" class="nav-link">Kategoriler</a></li>
          <li class="nav-item"><a href="{{route('sub.categories')}}" class="nav-link">Alt Kategoriler</a></li>
          <li class="nav-item"><a href="{{route('brands')}}" class="nav-link">Markalar</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Kupon Yönetimi</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.coupons')}}" class="nav-link">Kuponlar</a></li>
        </ul>

        
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Diğer Ayarlar</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.newslaters')}}" class="nav-link">Abonelikler</a></li>
        </ul>
      </div>

      <br>
    </div>
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div>
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Berat<span class="hidden-md-down"> Aras</span></span>
              <img src="{{ asset('public/backend/img/img3.jpg') }}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Profil</a></li>
              <li><a href="{{ route('admin.password.change') }}"><i class="icon ion-ios-gear-outline"></i> Ayarlar</a></li>
              <li><a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Çıkış</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <span class="square-8 bg-danger"></span>
          </a>
        </div>
      </div>
    </div>
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Mesajlar (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Bildirimler (8)</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('public/backend/img/img3.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div>

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img8.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
    <!-- ########## END: RIGHT PANEL ########## --->

    @endguest

    @yield('admin_content');

    <script src="{{ asset('public/backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('public/backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>

    <!-- DataTable Js -->
    <script src="{{ asset('public/backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('public/backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('public/backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('public/backend/lib/select2/js/select2.min.js') }}"></script>

    
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Ara',
            sSearch: '',
            lengthMenu: '_MENU_ Görüntüleme',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

    <script src="{{ asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/backend/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('public/backend/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('public/backend/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('public/backend/lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('public/backend/lib/medium-editor/medium-editor.js') }}"></script>
    <script src="{{ asset('public/backend/lib/summernote/summernote-bs4.min.js') }}"></script>
    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>

    <script src="{{ asset('public/backend/js/starlight.js') }}"></script>
    <script src="{{ asset('public/backend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('public/backend/js/dashboard.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
    
    <!-- Info Js -->
    <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
            }
        @endif
    </script>  

    <script>  
      $(document).on("click", "#delete", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
              title: "Silmek İstediğinizden Emin misiniz?",
              text: "Silmeden önce tekrar düşünün.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if(willDelete){
              window.location.href = link;
            }
          })
      });
    </script>



  </body>
</html>
