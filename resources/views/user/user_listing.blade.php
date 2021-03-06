@extends('user/user_master_layout1') 
@section('data') 
<style type="text/css">
  .greenpartnercolor{
    color: green;
  }

  .pagination {
    margin-top:20px;
  }

  .pagination a, .pagination span {
    margin: 0 10px;
    border-radius: 99px !important;
    font-weight:600;
    color:#5a378c !important;
    background:#eee !important;
  }

   .pagination a:hover, .pagination span:hover {
     background:#FFD4B1 !important;
     border:1px solid #FFD4B1 !important;
   }

.pagination li:not(.active) span {
  color:#ed6c05;
}

  .pagination .active span{
    background-color:#ed6c05 !important;
    border-color: #ed6c05;
    color:#fff !important;
  }

  .pagination .active:hover span {
    background-color:#ed6c05;
    border-color: #ed6c05;
  }

  .hdlist {
    line-height:400%;
  }

  .hdlist li {
     border-radius:5px;
     padding-left:5px;
   }

  .hdlist li:hover {
    background-color:#ed6c05;
  }

  .menulists {
    font-size: 16px;
  }

 .top-searches-by div > a, tr.tpsrch th a, tr.dosrch th a {
      font-size:12px;
 }

  .headin-color{
    background-color: #ccc;
    padding: 5px;
  }

  .panel-body .friends-dropdown-item {
    display: grid;
    grid-gap: 10px;
    grid-template-columns: auto 1fr auto;
    align-items: start;
    list-style-type: none;
  }

  .panel-body .friends-dropdown-item {
    margin-bottom: 15px;
  }

  .panel-body .friends-dropdown-item:last-of-type {
    margin-bottom: 0;
  }

  .panel-body .friends-dropdown-item a {
    font-size: 1em;
  }

  .panel-body .friends-dropdown-item span {
    font-size: .8em;
  }

  .panel-body .friends-dropdown-item span:not(:last-child) {
    margin-bottom: 5px;
  }

  .panel-body .dropdown-item img {
    border-radius: 0;
    width: 90px;
    height: 90px;
    border: 1px solid #bbb;
    padding: 2px;
  }

  .panel-body .friends-dropdown-item button {
    align-self: center;
    display: flex;
    justify-content: center;
    font-weight: bold;
    border: none;
    border-radius: 3px;
    padding: .3em .8em;
    width: 7rem;
    background-color: #5a378c;
  }

  .panel-body .friends-dropdown-item button a {
    color: white !important;
    margin: 0;
  }

  .panel-body .friends-dropdown-item button a:hover {
    color: white;
  }

  @media (max-width:991px) {
    .panel-body > .row {
      margin-bottom:30px;
    }

    a[title='view profile'] + .col-md-8 + .col-md-2 a {
      margin-top:10px;
    }
  }

@media (max-width: 685px) {

  tr.dosrch th a {
    font-size:12px;
  }
}

.panel-body > .row {
  display: none;
}

@media (max-width: 768px) {
  .panel-body .friends-dropdown-item {
    grid-template-columns: auto 1fr;
  }
  .panel-body .friends-dropdown-item img {
    grid-row: 1/3;
  }
  .panel-body .friends-dropdown-item .info {
    display: grid;
    grid-column: 2/-1;
  }

  .panel-body .dropdown-item img {
    height: 60px;
    width: 60px;
  }
}

</style>

<div style="padding-top: 90px;"></div>
  
  <div class="container-fluid"> 
    <div class="row">
       @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
    <div class="col-md-3 hidden-sm hidden-xs">
         <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
     

      <div class="col-md-9">
        <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>{{ $title }}</h3></div>
    <br>

    <div class="panel-body">
      @if(count($user_data))
     @foreach($user_data as $key => $row)

     
      
      <li class="friends-dropdown-item dropdown-item">
        @if(!empty($row->image_name))
                <img class="img-thumbnail  pull-right" src="{{ $user_assets }}/profile_image/{{ $row->image_name }}">
                @else
                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Image +Not+Found" class="img-thumbnail  pull-right">
              @endif
        <div class="info">
          <a href="#">{{ $row->user_name }}</a>
          <span>{{ $row->country_name }}</span>
          <span>{{ $row->job }}</span>
          <span>{{ $row->description }}</span>
        </div>
          
          <!-- <a id="remove">Remove</a> -->
          <button><a href="{{ url('remove-user',[$row->id,$title]) }}" onclick="return confirm('Are you sure you want to remove this user?');">Remove</a> </button>
      </li>

      @endforeach
        @else
        <p class="alert alert-danger text-center">Empty</p>
      @endif
       {{ $user_data->links() }}
      
          </div>
      </div>
  </div>
           
@endsection

@push('css')
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
    <link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- et line icon -->
<link rel="stylesheet" href="{{ $user_assets }}/css/et-line-icons.css" />
<!-- font-awesome icon -->
<link rel="stylesheet" href="{{ $user_assets }}/css/font-awesome.min.css" />
<!-- revolution slider -->
<link rel="stylesheet" href="{{ $user_assets }}/css/extralayers.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/settings.css" />
<!-- magnific popup -->
<link rel="stylesheet" href="{{ $user_assets }}/css/magnific-popup.css" />
<!-- owl carousel -->
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.transitions.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/full-slider.css" />
<!-- text animation -->
<link rel="stylesheet" href="{{ $user_assets }}/css/text-effect.css" />
<!-- hamburger menu  -->
<link rel="stylesheet" href="{{ $user_assets }}/css/menu-hamburger.css" />
<!-- common -->
<link rel="stylesheet" href="{{ $user_assets }}/css/style.css" />

<!-- responsive -->
<link rel="stylesheet" href="{{ $user_assets }}/css/responsive.css" /> 
  
  {{-- <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script> --}}
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/chosen.css" />

@endpush

@push('js')

<script type="text/javascript" src="{{ $user_assets }}/js/modernizr.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/bootstrap.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/skrollr.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/smooth-scroll.js"></script>
<!-- jquery appear -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.appear.js"></script>
<!-- animation -->
<script type="text/javascript" src="{{ $user_assets }}/js/wow.min.js"></script>
<!-- page scroll -->
<script type="text/javascript" src="{{ $user_assets }}/js/page-scroll.js"></script>
<!-- easy piechart-->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.easypiechart.js"></script>
<!-- parallax -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.parallax-1.1.3.js"></script>
<!--portfolio with shorting tab -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.isotope.min.js"></script>
<!-- owl slider  -->
<script type="text/javascript" src="{{ $user_assets }}/js/owl.carousel.min.js"></script>
<!-- magnific popup  -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/popup-gallery.js"></script>
<!-- text effect  -->
<script type="text/javascript" src="{{ $user_assets }}/js/text-effect.js"></script>
<!-- revolution slider  -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.revolution.js"></script>
<!-- counter  -->
<script type="text/javascript" src="{{ $user_assets }}/js/counter.js"></script>
<!-- countTo -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.countTo.js"></script>
<!-- fit videos  -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.fitvids.js"></script>
<!-- imagesloaded  -->
<script type="text/javascript" src="{{ $user_assets }}/js/imagesloaded.pkgd.min.js"></script>
<!-- hamburger menu-->
<script type="text/javascript" src="{{ $user_assets }}/js/classie.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/hamburger-menu.js"></script>
<!-- setting -->
<script type="text/javascript" src="{{ $user_assets }}/js/main.js"></script>
<!-- setting -->
<script type="text/javascript" src="{{ asset('public') }}/js/chosen.jq.js"></script>
<script type="">
  function edit_note()
  {

  }
</script>
@endpush