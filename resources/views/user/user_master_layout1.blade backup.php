<!doctype html>
<html>

<head>
  <title>@if(empty($title)) Kaboolhai @else {{ $title }} @endif</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="utf-8">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
  <!-- favicon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ $user_assets }}/css/jquery.emojipicker.css">
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojipicker.js"></script>
  <script type="text/javascript" src="{{ $user_assets }}/js/bootstrap-notify.min.js"></script>

  <!-- Emoji Data -->
  <link rel="stylesheet" type="text/css" href="{{ $user_assets }}/css/jquery.emojipicker.tw.css">
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojis.js"></script>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ $user_assets }}/css/muzamil.css" />

  <link rel="shortcut icon" href="{{ $user_assets }}/kabool-hai-favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  @stack('css')
  <style type="text/css">

body *::-webkit-scrollbar
{
	width: 0.85rem;
  height: 0.85rem;
  background-color: #f5f5f5;
}

 body *::-webkit-scrollbar-thumb
{
	border-radius: 20px;
	background-color: #999;
}

#menu-div {
  display: flex;
  justify-content: flex-end;
  margin-left: -63px;
}

.msgMenu .msgNoti a {
  padding: 0;
}

.msgMenu .msgNoti a {
  font-size: .9em;
  color: #333 !important;
}

.msgMenu .msgNoti a:hover {
  background-color: transparent;
}

.icon-dropdown li {
  padding: 5px 10px !important;
  border-bottom: 1px solid #ddd;
}

.dropdown-item.dropdown-item {
  margin-top: 0 !important;
}

.dropdown-item, .dropdown-item.dropdown-item * {
  line-height: normal !important;
}

.dropdown-item {
  letter-spacing: normal;
  font-size: 16px;
}
.dropdown-item:first-of-type {
  border-top: none;
}
.dropdown-item:last-of-type {
  border-bottom: none;
  margin-bottom: 30px;
}
.dropdown-item > div span:first-child,
.dropdown-item button {
  font-size: .813em;
}
.dropdown-item img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.notification-dropdown-item {
  display: flex;
  align-items: center;
}
.notification-dropdown-item img {
  margin-right: .5em;
}

.notification-dropdown-item > div:first-child {
      display: grid;
    grid-auto-flow: column;
    align-items: center;
}

.notification-dropdown-item > div:first-child img {
  width: 50px;
  height: 50px;
}

.notification-dropdown-item > div:first-child div {
      display: flex;
    flex-direction: column;
}

.notification-dropdown-item > div:first-child div img {
  width: 17px;
  height: 17px;
}

.notification-dropdown-item > div:last-child {
  display: grid;
  grid-gap: .5rem;
}

.notification-dropdown-item > div span:last-child {
  font-size: .75em;
  color: #888;
  font-weight: 600;
}
.notification-dropdown-item > div i {
  font-size: 15px;
  color: #ed6c05;
  margin-left: 0;
}

.notification-dropdown-item > div img {
  width: 15px;
  height: 15px;
  margin: 0 3px 0 0;
}

.notification-dropdown-item a,
.notification-dropdown-item a:hover {
  color: white !important ;
}

.friends-dropdown-item {
  display: grid;
  grid-template-columns: 50px 1fr auto auto;
  grid-column-gap: .625em;
  align-items: center;
}

.friends-dropdown-item .info {
  display: flex;
  flex-direction: column;
}

.friends-dropdown-item a {
  font-weight: bold;
  color: #3273dc !important;
  font-size: .85em;
  padding:0 !important;
}

.friends-dropdown-item .info span {
  grid-column: 1/-1;
  font-size: .813em;
}

.friends-dropdown-item.friends-dropdown-item a:hover {
  background-color: unset;
  color: #3273dc !important;
  text-decoration: underline !important;
}

.friends-dropdown-item > .buttons {
  justify-self: end;
}

.friends-dropdown-item > button,
.notification-dropdown-item button {
  color: white;
  font-weight: bold;
  border:none;
  border-radius: 3px;
  padding: .3em .8em;
  width: 7rem;
}

.friends-dropdown-item > button:last-child,
.notification-dropdown-item button:last-child {
  background-color: #ed6c05;
}

.friends-dropdown-item > button:first-of-type,
.notification-dropdown-item button:first-of-type {
  background-color: #5a378c;
}

.friends-dropdown-item > button:first-of-type a,
.friends-dropdown-item > button:last-child a {
  color: white !important;
}

.friends-dropdown-item > button:first-of-type a:hover,
.friends-dropdown-item > button:last-child a:hover {
  color: white !important;
}

#friends-dropdown, #messages-dropdown, #notifications-dropdown, #username-dropdown-toggle {
  visibility: visible !important;
}

footer .fa-youtube-square {
  margin-right:-2px;
}

#message_count, .noti_counts, #friend_counts {
  color: white !important;
  background-color: #FF4646;
  border-radius: 99px;
  right: 5px;
  font-size: 11px;
  top: 5px;
  position: absolute;
  padding: 0px 8px 0px 6px;
  line-height:20px;
}

footer .fa-search {
  color: #666;
}

.noti_counts {
  top: -11px;
  right: -10px;
}

    .sticky-nav {
      position: fixed;
      top: -4px;
    }

    .hdlist .fa-question {
      margin-left:11px;
    }

    /* .nav.navbar-nav {
      margin-right:43px;
    } */

    .search-dropdown-toggle {
      display:none;
      font-size: 22px;
      top: 20px;
      color:#f1e7ff;
      cursor: pointer;
      position: relative;
    }

    .close {
      margin-top: -3px;
      height: 35px;
      margin-right: -13px;
      width: 35px;
      opacity: 0.7;
      padding: 11px;
    }

    .close path {
      stroke-width:"10";
    }

    .close:hover {
      opacity:1;
    }

    .ham {
			cursor: pointer;
			-webkit-tap-highlight-color: transparent;
			transition: transform 400ms;
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
      user-select: none;
      width: 57px;
      height: 57px;
      margin-top: -2px;
      position: fixed;
      z-index: 6;
      position: fixed;
      right: 0;
		 }
		 .hamRotate.active {
			transform: rotate(45deg);
		 }
		 .hamRotate180.active {
			transform: rotate(180deg);
		 }
		 .line {
			fill:none;
			transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
			stroke:#fff;
			stroke-width:5.5;
			stroke-linecap:round;
		 }
		
		 .ham8 .top {
			stroke-dasharray: 40 160;
		 }
		 .ham8 .middle {
			stroke-dasharray: 40 142;
			transform-origin: 50%;
			transition: transform 400ms;
		 }
		 .ham8 .bottom {
			stroke-dasharray: 40 85;
			transform-origin: 50%;
			transition: transform 400ms, stroke-dashoffset 400ms;
		 }
		 .ham8.active .top {
			stroke-dashoffset: -64px;
		 }
		 .ham8.active .middle {
			transform: rotate(90deg);
		 }
		 .ham8.active .bottom {
			stroke-dashoffset: -64px;
     }
     
     .col-md-3.hidden-sm.hidden-xs .well a {
       color:#333;
     }

    .lmis {
      width:40px;
    }

    #accordion, #username-dropdown-toggle a {
      font-weight:600;
    }

    footer .searchcontainer .form-control {
		border-radius:3px;
	}

	  footer .searchcontainer button {
		border-radius:0 3px 3px 0;
	}

   #username-dropdown-toggle li a {
      font-weight:normal;
    }

    .humburger {
      margin-top: 8px;
    }


    .navbar-form .form-control {
      font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
      height:30px;
      border-radius:5px;
      letter-spacing: 0;
      font-weight:normal;
    }

    .navbar-form {
      position:relative;
      margin-top: 14px;
      margin-bottom: 2px;
      display: block !important;
      transition: 500ms !important;
    }

    .navbar-form button {
      top: 1px;
      right: -4px;
      position: absolute;
      padding: 3px 11px !important;
      background-color:#ececec;
      border-radius:3px;
    }

    .navbar-form button:hover {
      border:1px solid #ececec;
    }

    .navbar-form button .glyphicon {
      top: 3px;
      right: -2px;
      color:#333;
    }

    .fa-user-friends, .fa-envelope, .fa-bell {
      font-size:20px;
    }

    a, a:hover, a:active, a:visited, a:focus {
     text-decoration:none;
    }

    .bg-orange.no-padding.wow {
      margin:auto 30px;
    }

    .icon-dropdown {
      left:-449px;

    }

    #friends-dropdown .icon-dropdown li:nth-last-child(2), #notifications-dropdown .icon-dropdow.msgMenu lin li:nth-last-child(2) {
      margin-bottom:25px;
    }

      #friends-dropdown .icon-dropdown li:last-child, #notifications-dropdown .icon-dropdown li:last-child {
        position:fixed;
        width: 493px;
        border: 1px solid #aaa;
        background-color: #eee;
        padding: 3px 20px !important;
        top: 425px;
        line-height: normal;
    }

    #friends-dropdown .icon-dropdown li:last-child a {
      margin-top: 0;
      line-height: normal;
    }

    #friends-dropdown .icon-dropdown li:last-child a:hover {
      background:none;
    }

    .icon-dropdown li:last-child a {
      padding: 0 !important;
    }

    .dropdown-menu.lenght.icon-dropdown.msgMenu hr{
      margin-bottom:0;
    }

    .dropdown-menu.lenght.icon-dropdown.msgMenu li span.username {
      padding:0px !important;
      margin:0;
    }

    .dropdown-menu.lenght.icon-dropdown.msgMenu li:last-child a {
      padding:0px !important;
    }

    #navsidebare ul {
      margin-bottom:80px;
    }

    #navsidebare {
      height:100% !important;
      position:fixed !important;
      margin-top: 52px;
    }

    #sidebar-2 {
      background-color:#000;
      color:#fff;
      height:100%;
      margin-top:52px;
      width:260px;
      position:fixed;
      /* right:-260px; */
      right:-2000px;
      transition:500ms;
      z-index:6;
      overflow:scroll;
    }

     #sidebar-2 ul {
       margin-top:10px;
       margin-bottom:50px;
     }
    #sidebar-2 ul li.divider {
      background-color:#222;
      height:1px;
    }
    
     #sidebar-2 ul li a {
       text-decoration:none;
       color:#fff;
       display: block;
       padding: 5px 25px;
     }

     .navbar-right-2 .dropdown-menu {
       top: 97%;
     }

     @media (max-width: 640px) {
      .text-bar input {
        padding-top: 5px;
        padding-bottom: 5px;
      }

      #bb {
        bottom: 2px;
      }
     }

    @media (min-width:500px) {
      .search-dropdown-toggle:hover {
        color:#ed6c05;
      }
    }

    @media (max-width:500px) {
		#navsidebare {
      width:100%;
      margin-top: 0;
    }

    .mp-bio-label {
      width:100px;
    }

    .mp-head {
      font-size:12px;
    }

    #bb img {
      right: 19vw;
    }

    /* .text-bar input {
      width: 323px !important;
    } */
    
    .logo-light img, .logo-dark img {
      width: 34vw;
    }

   #sidebar-2 {
     width:100% !important;
     margin-top: unset;
   }

   #sidebar-2 ul {
     margin-top: 40px;
   }

   .view-profile {
      float: none !important;
      display: block !important;
      margin-left: 48px !important;
    }

    /* .arrow_button {
      right: -210px;
      top: -33px;
    } */

  }

  @media (min-width:501px) {
    .view-profile {
      margin-top: 8px !important;
    }
  }
    
    .label {
      display: none;
    }
    .logo-mobile {
			display:none;
		}

    #navsidebare a {
      text-decoration:none;
    }
    
    #menu-div .navbar-collapse.collapse {
      float:none;
    }
    .icon-dropdown {
    width:500px;
    height:400px;
    overflow-y:scroll;
  }
    /* .icon-dropdown {
      position:absolute !important;
    } */
    .fa.fa-smile-o {
      font-size: 20px;
    }
    #menu-div .navbar-collapse {
      border:none;
    }
    
    @media (max-width:768px) {
      #stay-tuned-container p {
        margin:10px;
      }

      .bg-orange.no-padding.wow p{
        padding-left:10px;
        padding-right:10px; 
      }

      .copyright p{
			float:none !important;
			margin-top:15px;
			margin-left:8px;
    }

  .navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
  }

  .panel-body .friends-dropdown-item button {
    width: unset;
  }
}



@media (max-width:767px) {
    .modal input[type=checkbox], input[type=radio] {
      /* display:block; */
      width:6%;
	  }
  }

  @media (max-width:320px) {
		.searchcontainer button {
			margin-top:-44px !important;
		}
  }

/* .msgMenu li{border-bottom: 1px solid #e6e6e6; margin-top: -2px !important} */

.icon-dropdown li:hover{background: #f5f5f5 !important; } 

.navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
  max-height:0 !important;
}
  </style>
  
  <script type="text/javascript">
    $(document).ready(function (e) {
      $('#send_messgae').emojiPicker();
    });
    
  </script>
</head>

<body>

<div class="main-section">
    <div class="border-chat">
      <div class='header'>
        <div class="img-wrapper">
          <img src="{{ $user_assets }}/img/avatar.png" alt="">
          <span></span>
        </div>
        <div class="name-and-status">
          <a href="#">username</a>
          <span>Active now</span>
        </div>
        <img src="{{ $user_assets }}/icons/close.svg" alt="" class='close'>
      </div>
    </div>
    <div class="row border-chat">
      <div class="second-section">
        <div class="chat-section" id="chat-scroll">
          <ul>
            <span class="sender"></span>
            <span class="new_message"></span>
          </ul>
        </div>
      </div>
    </div>
    <div class="border-chat third-section">
      <form id='form' enctype="multipart/form-data">
        <div class="text-bar">
          <div>

            {{csrf_field()}}

            <span style="color: red" id="error"></span>
            <input type="text" id="send_messgae" name="send_messgae" class="emojiable-option" placeholder="Type a message">
            <input type="hidden" id="to_userss" name="to_user">

            <button class="arrow_button">
              <svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M21.5,11.1l-17.9-9C2.7,1.7,1.7,2.5,2.1,3.4l2.5,6.7L16,12L4.6,13.9l-2.5,6.7c-0.3,0.9,0.6,1.7,1.5,1.2l17.9-9   C22.2,12.5,22.2,11.5,21.5,11.1z" id="send"/></g></svg>
            </button>

          </div>
          <label id="bb"> <i class="fas fa-paperclip attach"></i>
            <input type="file" name="file" id="file" size="60">
          </label>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".main-section .header .close").click(function () {
        $('.main-section').toggleClass("open-more");
      });
    });
  
  </script>

  <style type="text/css">
     #navsidebare {
      box-sizing:border-box;
    }

    #navsidebare * {
      box-sizing:border-box;
    }

    #sidebar-2 {
      box-sizing:border-box;
    }

    #sidebar-2 * {
      box-sizing:border-box;
    }

    .go_more {
      background-color: #ffffff;
      height: 350px;
      overflow-y: scroll;
    }
    .top-searches-by div{
			border-bottom:1px solid #ddd;
			padding:10px;
		}
    .top-searches-by div > a {
    color: #fff !important;
    }

    @media (max-width:768px) and (min-width:521px) {
      .navbar-form input[type='text'] {
        width:232px;
      }
    }

    @media (max-width:520px) {
			.tpsrch {
				display:none;
			}
			.top-searches-by {
				display:block;
			}

      .navbar-form input {
        width:232px;
      }
		}
		@media (min-width:521px) {
			.tpsrch {
				display:block;
			}
			.top-searches-by {
				display:none;
			}
    }
    
    @media (min-width:992px) {
      .nav-white.sticky-nav .navbar-nav li a {
        margin-top:5px;
      }
      
      .humburger {
        padding:5px;
      }
    }
    
    label {
      /*padding: 10px;*/
      /*background: red; */
      display: table;
      /*color: #fff;*/
    }
    label .fa {
      color: white;
      font-size: 30px;
      margin-left: -50px;
    }
    input[type="file"] {
      display: none;
    }
    /*.emojy_image{
      font-size: 30px;
    margin-left: -120px;
    color: white;
    padding: 0px !important;
}*/
    .arrow_image {
      padding: 10px;
    }
    /* .arrow_button {
      margin-left: -39px;
    } */
    #navsidebare {
      overflow: scroll;
		  overflow-x:hidden;
      height: 100vh;
      background-color:#000;
    }

    @media (min-width:1266px) {
      .navbar-form {
        display:block !important;
      }

      #friends-dropdown, #messages-dropdown, #notifications-dropdown, #username-dropdown-toggle {
        visibility:visible !important;
      }
    }

    @media (max-width:1265px) {
      .navbar-form {
        width: 0;
        opacity:0;
        overflow: hidden;
        position: absolute;
        border-radius: 3px;
        top: 13px;
        right: 50px;
        margin:0;
        padding:0px;
        border:none;
      }

      .navbar-form.visible {
        width: 19vw;
        opacity: 1;
      }

      .navbar-form.visible > div, .navbar-form.visible > div input {
        width:100%;
      }

      .navbar-form input {
        margin:0;
        border: 3px solid #936BCB !important;
        padding:14px;
      }

      .navbar-form button {
        top: 3px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        right: -17px;
      }

      .search-dropdown-toggle {
        display:inline-block
      }
    }

    @media (max-width: 1265px) and (min-width: 1071px) {
      #friends-dropdown.invisible, #messages-dropdown.invisible, #notifications-dropdown.invisible, #username-dropdown-toggle.invisible {
        visibility: hidden !important;
      }
    }

    @if(empty(Session::get('user_id')))
      @media (max-width:1070px) {
        .navbar .accordion-menu #accordion>li,
        #signin {
          display: none;
        }
        #accordion {
          float: right;
        }
    }

    @else 

    @media (max-width:1070px) {
      .navbar .accordion-menu #accordion>li,
      #signin {
        display: none;
      }
      .navbar .accordion-menu .dropdown {
        /* display:; */
      }
      #accordion {
        float: right;
      }

      .navbar-form {
        position: relative; 
      }

      .search-dropdown-toggle {
        position: absolute;
        right: 0;
      }

      #username-dropdown-toggle {
        margin-right: 45px;
      }

    }

    @endif

    @media (max-width: 991px) {

      #notifications-dropdown .icon-dropdown li:last-child {
        top: 418px;
      }
      
      .navbar-nav .dropdown .dropdown-toggle {
        padding-right:14px !important;
        padding-top:0 !important;
        padding-bottom:0 !important;
      }

      #friends-dropdown .icon-dropdown li:last-child {
        top:420px;
      }

      .nav.navbar-nav {
        margin-top:11px;
      }

      .search-dropdown-toggle {
        top:20px;
      }

      #menu-div {
        background-color: inherit;
      }
      .dropdown-menu {
        left: unset !important;
      }
      .navbar-default .navbar-nav > li > a { 
        line-height:54px;
      }
      .humburger {
        margin-top:12px !important;
        margin-bottom:-5px !important;
      }

      .nav-white.sticky-nav .navbar-nav > .open > a {
        padding-right: 14px;
        padding-bottom: -2px;
        margin-top: -15px;
        padding-top: 14px;
      }

      #username-dropdown-toggle .dropdown-toggle {
        padding-top:0 !important;
        margin-top:0;
      }

      /* .nav.navbar-nav .dropdown {
        margin-top: 9px !important;
      } */

      .nav.navbar-nav .dropdown a.dropdown-toggle {
        line-height: 41px !important;
      }

      #message_count {
        top: 0;
        padding: 0px 7px 0px 6px;
      }

      #friend_counts {
        top: 0px;
      }
  }

    .dropdown-menu li a {
      height: unset !important;
  }

    .shrink-nav .accordion-menu {
    top: 0px;
}
    .navbar-toggle {
      background-color: #5a378c !important;
      border-radius: 5px;
    }

    @media (max-width:375px) {

      .nav.navbar-nav {
        margin-right: 37px;
      }

      .navbar-nav .dropdown .dropdown-toggle {
        margin-right:-5px !important;
      }
    }

    @media (max-width:319px) {
      .search-dropdown-toggle, .navbar-form {
        display:none !important;
      }
    }

  @media (max-width: 813px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    position: fixed !important;
    left:0 !important;
  }
}
@media (max-width:515px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    width:100vw !important;
  }
}
  #username-dropdown-toggle ul.dropdown-menu{
       width:100px !important;
       
     }
  </style>
  <!--  -->
  <!-- navigation panel -->
  <div class="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top  sticky-nav nav-white nav-border-bottom" role="navigation" style="background-color: #5a378c">
      <div class="container-fluid">
        <div class="row">
          <!-- logo -->
          <div class="col-lg-2 col-sm-2 col-xs-2" id="logo-div">
            <a class="logo-light" href="{{ url('/') }}"><img alt="" src="{{ $user_assets }}/images/kaboolhai.png" class="logo" /></a>
            <a class="logo-dark" href="{{ url('/') }}"><img alt="" src="{{ $user_assets }}/images/kaboolhai.png" class="logo" /></a> 
            <a  class="logo-mobile" href="{{ url('/') }}"><img alt="" src="{{ $user_assets }}/db_images/KH-logo2.png" /></a>

              
                
            </div>
          <!-- end logo -->
          <!-- search and cart  -->
          <!-- end search and cart  -->

          <!-- toggle navigation end -->
          <!-- main menu -->
          <div class="col-lg-10 no-padding-right accordion-menu" id='menu-div'>
            <div class="navbar-collapse collapse">
              <ul id="accordion" class="nav navbar-nav {{-- panel-group --}}">
                <!-- <li> <a href="register.html">Register</a> </li> -->

                <li class="{{ Request::is('/') ? 'active1' : '' }}"> <a href="{{url('/')}}">Home</a>

                @if(empty(Session::get('user_id')))
                <li class="{{ Request::is('about-us') ? 'active1' : '' }}"> <a href="{{url('about-us')}}">About Us</a>
                </li>
                <li class="{{ Request::is('contact-us') ? 'active1' : '' }}"> <a href="{{url('contact-us')}}">Contact</a>
                </li>
                <li class="{{ Request::is('faqs') ? 'active1' : '' }}"> <a href="{{url('faqs')}}">FAQ's</a> </li>
                <li class="{{ Request::is('advance-search') ? 'active1' : '' }}"> <a href="{{url('advance-search')}}">Find
                    Match</a> </li>
                <li class="{{ Request::is('blog') ? 'active1' : '' }}"> <a href="http://kaboolhai.com/blog/" target="_blank">Blogs</a>
                </li>
                {{--
                <li style="padding-right:0px;text-transform:capitalize;"> <a href="{{ url('dashboard') }}"> {{
                    Session::get('user_name') }} </a> </li>
                <li style="padding-right:0px;text-transform:capitalize;"> <a href="{{ url('logout') }}"> Logout </a>
                </li>
                @else --}}
                <li class="{{ Request::is('register') ? 'active1' : '' }}"> <a href="{{url('register')}}">Create
                    Account</a> </li>
                <li id="signin" style="padding-right:0px;text-transform:capitalize;"> <a href="#"> Sign In </a> </li>
                @else
                {{-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Dropdown <span class="caret"></span></a> --}}
                  {{-- <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> --}}
                {{-- <li class="{{ Request::is('/') ? 'active1' : '' }}"><a href="{{ url('public-profile',user_data()->id) }}"
                    class="menudesign">My Profile</a></li> --}}

                <!-- <li><a href="{{ url('inbox') }}" class="menudesign">Inbox</a></li> -->
                <!-- <li><a href="{{ url('sent-items') }}" class="menudesign">Sent Items</a></li> -->
                <li><a href="{{ url('blocked-list') }}" class="menudesign">Block List</a></li>
                <li><a href="{{ url('public-profile',user_data()->id) }}" class="menudesign">My Profile</a></li>
                <li><a href="{{ url('assisted-service') }}" class="menudesign">Assisted Service</a></li>


                <li class="dropdown">
                  <a class="dropdown-toggle menudesign" data-toggle="dropdown" href="#">More Options<span class="caret"></span></a>
                  <ul class="dropdown-menu go_more " style="background-color: #ffffff;">
                   
                    <li><a href="{{ url('manage-profile') }}" style="background-color: #ffffff; color: black !important;">Manage
                        Profile</a></li>


                    <li><a href="{{ url('my-photo') }}" style="background-color: #ffffff; color: black !important;">My
                        Photos</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('favourite-list') }}">My
                        Favourite</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('find-exact-match') }}">Find
                        Exact Match</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('profile-writing-tips') }}">Profile
                        Writing Tips</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('friend-list') }}">Friend
                        List</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('public-profile',user_data()->id) }}">My
                        Profile</a></li>
                    <li class="divider"></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('hide-profile-list') }}">Hidden
                        Profiles</a></li>
                    <li class="divider"></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('email-prefrences') }}">Email
                        Prefrences</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('invite-friend') }}">Invite
                        Friends</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('photo-permission-list') }}">Photo
                        Permisions</a></li>
                    <li class="divider"></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('who-looking-for-me') }}">Who
                        Looking For Me</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ 'who-am-i-looking' }}">Who
                        Am I Looking</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('question') }}">My
                        Question</a></li>
                    <li class="divider"></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('notification') }}">Notifications</a></li>
                    <!-- <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('statistics') }}">Statistics</a></li> -->
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('settings') }}">Setting</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('close-account') }}">Close
                        My Account</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('show-search') }}">Save
                        Search</a></li>

                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('my-notes') }}">My
                        Notes</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('tell-friend') }}">Tell
                        Friend</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('sitemap') }}">Sitemap</a></li>

                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('help-center') }}">Help
                        Center</a></li>

                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('assisted-service') }}">Assisted
                        Service</a></li>
                    <li class="divider"></li>
                  </ul>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right-2">
                <li class="dropdown" id='friends-dropdown'>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" onclick="return friend_count()"
                    title="Friend Request">

                    <span class="fas fa-user-friends icon_color"></span><span id="friend_counts">@if(!empty(count_friend()))
                      {{ count_friend() }} @endif</span>
                    <span id="request_counts"></span>
                  </a>
                  <ul class="dropdown-menu lenght icon-dropdown msgMenu">
                 
                    @if(count(get_friend()))
                    @foreach(get_friend() as $row)
                    
                      <li class="friend" id="friends">
                        @if(!empty($row->photo->image))
                        <a style="background-color: # href="{{ url('public-profile',$row->user_id) }}"><img
                            src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" style="width: 45px; height: 45px; border-radius:100px; " alt="">
                          @else
                          <img src="{{ $user_assets }}/dashbord/userpic.jpg" style="width: 45px; height: 45px; border-radius:100px; " alt="">
                          @endif
                          {{ $row->user->user_name }} send friend request</a><a style="background-color: #
                          href="{{ url('delete-request',$row->user_id) }}" class="btn pull-right">Delete</a><a style="background-color: #
                          href="{{ url('confirm-friend',$row->user_id) }}" class="btn pull-right">Confirm</a>
                       <hr style="width: 100%;">
                      </li> 
                 
                    @endforeach
                    @else

                    <p class='friends-dropdown-top-text'>No New Request</p>
                    @endif
                    <p class='friends-dropdown-top-text'> Recent Join User</p>
                    @if(count(recent_join()))
                    @foreach(recent_join() as $row)

                      <li class="friends-dropdown-item dropdown-item">
                        <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
                        <div class="info">
                          <a href="#">username</a>
                          <span>15ft 11in - 180cm Married Urdu</span>
                        </div>
                          <button>Accept</button>
                          <button>Remove</button>
                      </li>


                         
                        @endforeach
                        @endif

                        <li class="text-center">
                        {{-- <hr style="width: 100%;"> --}}
                        <a style="text-align:center;" href="{{ url('recent-join') }}">
                          
                            <span style="font-size: 15px; color: #333;">View All</span>
                         
                         
                        </a>
                      </li>
                  </ul>
                </li>
                <li class="dropdown" id='messages-dropdown'>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Message" onclick="return get_message()">
                    <span class="fa fa-envelope icon_color"></span><span id="message_count">@if(!empty(count_message()))
                      {{ count_message() }} @endif</span></a>
                  <ul class="dropdown-menu lenght icon-dropdown msgMenu">
                  @for($x=0; $x<10; $x++)
                    
                    <li class="msgNoti">
                        <a class="left-first-section" rel="215" href="#">                            
                            <span>
                            <img src="https://kaboolhai.com/kaboolhai/public/user_assets/my_photo/1530014926Resignation.JPG" style="width: 45px; height: 45px; border-radius:100px; " alt="">
                            </span>
                           <span>dfgdfg</span>
                           
                        </a>
                    
                      </li>
                                       @endfor
                    @if(!empty(tochat()))
                    @foreach(tochat() as $row)
                    
                   
                    @if($row->to_user==Session::get('user_id'))
                    <li class='msgNoti'>
                      <a class="left-first-section" rel="{{ $row->from_users->id }}"
                        href="#">
                        @if(!empty($row->photo->image))
                        <span >
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" style="width: 45px; height: 45px; border-radius:100px; " alt=""
                          >
                        
                        </span>
                        @else
                        <span>
                         <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Image +Not+Found" style="width: 45px; height: 45px; border-radius:100px; ">
                        </span>
                        @endif

                          <span>{{ $row->from_users->user_name}}</span>
                         
                        {{-- <span>{{ $row->message }}</span> --}}
                      </a>

                    </li>
                    {{-- @elseif($row->from_users->id==Session::get('user_id'))
                    <li><a class="left-first-section" style="background-color: #ffffff; color: black !important;" href="#"
                        onclick="current_chat()">{{ $row->to_users->user_name}}<span id="id_value" style="display: none;">{{
                          $row->to_users->id }}</span></a></li> --}}
                    @endif
                    @endforeach
                    @endif







                    {{-- @if(!empty(tochat()))
                    @foreach(tochat() as $row)
                    <li class="notify_section">
                      <a href="#" style="background-color: #ffffff !important">
                        <img src="{{ $user_assets }}/dashbord/userpic.jpg" class="img-circle" alt="" width="45" height="45">
                      </a>
                    </li>
                    <li class="divider"></li>
                    @if($row->to_user==Session::get('user_id'))
                    <li><a class="left-first-section" style="background-color: #ffffff; color: black !important;" href="#"
                        onclick="current_chat()">{{ $row->to_users->user_name}}<span id="id_value" style="display: none;">{{
                          $row->to_users->id }}</span></a></li>
                    {{-- @elseif($row->from_users->id==Session::get('user_id'))
                    <li><a class="left-first-section" style="background-color: #ffffff; color: black !important;" href="#"
                        onclick="current_chat()">{{ $row->to_users->user_name}}<span id="id_value" style="display: none;">{{
                          $row->to_users->id }}</span></a></li> --}}
                    {{-- @endif
                    @endforeach
                    @endif
                    --}}
                  </ul>
                </li>






                
               {{--  <li class="dropdown" id='notifications-dropdown' >
                  <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" onclick="return read_notification()"
                    title="Notification">
                   
                    <span class="fa fa-bell icon_color"> <span class="noti_counts">@if(!empty(count_notification())) {{ count_notification() }} @endif</span></span>

                  </a>
                  <ul class="dropdown-menu lenght icon-dropdown">
                    @if(count(get_notification()))
                    @foreach(get_notification() as $row)
                    <div id="get_noti" class="get_notifi">
                      <li class="notify_section">
                        <a href="{{ url('public-profile',$row->sender_id) }}">
                          @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" style="width: 45px; height: 45px; border-radius:100px; " alt="">
                          @else
                          <img src="{{ $user_assets }}/dashbord/userpic.jpg" style="width: 45px; height: 45px; border-radius:100px; " alt="">
                          @endif
                          <span >{{
                            $row->user->user_name.' '.$row->notification_type }}</span>
                        </a>
                      </li>
                      <hr>
                    </div>
                    @endforeach



                    @endif
                    <a href="{{ url('notification') }}">
                      <li style="color:#333; font-size:15px;" class="text-center">

                        Show all
                      </li>
                    </a> --}}




                   <li class="dropdown" id='notifications-dropdown' >
                  <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" onclick="return read_notification()"
                    title="Notification">
                    <span class="fa fa-bell icon_color"><span class="noti_counts" style="font-size:13px; color:#ed6c05;">@if(!empty(count_notification())) {{ count_notification() }} @endif</span></span>
                  </a>
                   <ul class="dropdown-menu lenght icon-dropdown">

                    @if(count(get_notification()))
                    @foreach(get_notification() as $row)

                    <li class="notification-dropdown-item dropdown-item">
                      <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
                      <div>
                        <span><strong>username</strong> viewed your profile</span>
                        <span><i class="fas fa-user-circle"></i>10h</span>
                      </div>
                    </li>

                    {{-- @elseif($row->from_users->id==Session::get('user_id'))
                    <li><a class="left-first-section" style="background-color: #ffffff; color: black !important;" href="#"
                        onclick="current_chat()">{{ $row->to_users->user_name}}<span id="id_value" style="display: none;">{{
                          $row->to_users->id }}</span></a></li> --}}
                   
                    @endforeach
                    @endif
                     {{-- @endif --}}
                    <a href="{{ url('notification') }}">
                      <li style="color:#333; font-size:15px;" class="text-center">

                        Show all
                      </li>
                    </a> 
                  </ul>
                </li>
                <li class="dropdown username-dropdown-toggle" id='username-dropdown-toggle'>
                  <a class="dropdown-toggle menudesign" data-toggle="dropdown" href="#">
                    {{ user_data()->user_name }} <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="    background-color: #ffffff;">
                    <li><img width="20" height="20" src="http://localhost/KBH/public/user_assets/dashboard.svg" alt=""><a style="background-color: #ffffff; color: black !important;" href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li><img width="20" height="20" src="http://localhost/KBH/public/user_assets/logout.svg" alt="log out"><a style="background-color: #ffffff; color:black !important;" href="{{ url('logout') }}">Logout</a></li>
                  </ul>
                  @endif

                </li>

                

               <script>

                //  document.querySelector('#signin-li').onclick = function() {
                //   alert('hi');
                // }


               </script>

                <form class="navbar-form navbar-right" method="get" action="{{ url('user-search') }}">
                  <div class="form-group">
                    <input type="text" name="user_name" class="form-control" placeholder="Search by name">
                  </div>
                  <button type="submit" class="btn btn-default"><i class=" glyphicon glyphicon-search"></i></button>
                </form>

                  <i class='glyphicon glyphicon-search search-dropdown-toggle' onclick='toggleSearch()'></i>

                  <script>
                    var searchVisible = true;

                    function toggleSearch() {
                      $('.navbar-form').toggleClass('visible');
                      $('#friends-dropdown, #messages-dropdown, #notifications-dropdown, #username-dropdown-toggle').toggleClass('invisible');
                      $('.logo-light').toggleClass('logo-hidden');

                      searchVisible = !searchVisible;

                      if(searchVisible)
                        $('.search-dropdown-toggle').attr('class', 'glyphicon glyphicon-search search-dropdown-toggle');
                      else $('.search-dropdown-toggle').attr('class', 'far fa-times-circle search-dropdown-toggle');
                    }
                  </script>

            </div>
            </ul>
          </div>
                 @if(Session::get('success'))

                <script type="text/javascript">
           
          $.notify({


  title: '<strong> {{ Session::get('user_name') }}</strong>',
  message: '{{ Session::get('success') }}',
  
},{
  // settings

  element: 'body',
  position: null,
  type: "info",
  allow_dismiss: true,
  newest_on_top: false,
  showProgressbar: false,
  placement: {
    from: "top",
    align: "right"
  },
  offset: 20,
  spacing: 10,
  z_index: 99999999,
  delay: 5000,
  timer: 1000,
  
  mouse_over: null,
  animate: {
    enter: 'animated fadeInDown',
    exit: 'animated fadeOutUp'
  },
  
  
});

                </script>
                     @php
                     Session::forget('success');
                     
                       @endphp
                @endif





                @if(Session::get('error'))

                <script type="text/javascript">
           
          $.notify({


  title: '<strong>{{ Session::get('user_name') }}</strong>',
  message: '{{ Session::get('error') }}',
  
},{
  // settings

  element: 'body',
  position: null,
  type: "danger",
  allow_dismiss: true,
  newest_on_top: false,
  showProgressbar: false,
  placement: {
    from: "top",
    align: "right"
  },
  offset: 20,
  spacing: 10,
  z_index: 99999999,
  delay: 5000,
  timer: 1000,
  
  mouse_over: null,
  animate: {
    enter: 'animated fadeInDown',
    exit: 'animated fadeOutUp'
  },
  
  
});

                </script>
                     @php
                    
                      Session::forget('error');
                       @endphp
                @endif
     <!-- end main menu -->
        </div>
      </div>


      <div class="navsidebar wow slideInRight" id="navsidebare" style="display:none;">
        <div class="row">

          <ul style="margin-left:25px;list-style-type:none;width:100px;line-height:50px;">

         <li class="wow fadeInDown" data-wow-delay="0.1s">
        @if(Session::get('user_id'))
            <a href="{{ url('dashboard') }}" class="M">
              <span>
                <!-- <img width="40" height="40" src="{{ $user_assets }}/login.svg" alt="" /> -->
                <img width="40" height="40" src="{{ $user_assets }}/dashboard.svg" alt="" />
              </span>
              <span style="padding-left:15px;">Dashboard</span>
            </a>
          </li>

          <li class="wow fadeInDown" data-wow-delay="0.2s">
            <a href="{{ url('logout') }}" class="M">
              <span>
              <img width="40" height="40" src="{{ $user_assets }}/logout.svg" alt="log out" />
              </span>
              <span style="padding-left:15px;">Log out</span>
            </a>
          </li>
          @endif

            @if(empty(Session::get('user_id')))
            <li class="wow fadeInDown login-li" data-wow-delay="0.2s"><a href="#" class="M" id='signin-li'><span><img width="40"
                    height="40" src="{{ $user_assets }}/login.svg" alt="" /></span><span style="padding-left:15px;">Sign
                  in</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="{{ url('register') }}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/create_account.png" alt="" /></span><span style="padding-left:15px;">Create
                  Account</span></a></li>
            @endif
            <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="{{url('about-us')}}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/about_us.png" alt="" /></span> <span style="padding-left:10px;">About
                  Us</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="{{ url('advance-search') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/find_match.png" alt="" /></span><span style="padding-left:15px;">Find
                  Match</span></a></li>
            {{-- <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="{{ url('our-police') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/our_policy.png" alt="" /></span><span style="padding-left:15px;">Our
                  Policy</span></a></li> --}}
            <li class="wow fadeInDown" data-wow-delay="0.7s"><a href="{{ url('policy-privacy') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/privacy.png" alt="" /></span> <span style="padding-left:10px;">Privacy</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.8s"><a href="http://kaboolhai.com/blog/" target="_blank" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/blog.svg" alt="" /></span><span style="padding-left:15px;">Blogs</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="{{ url('faqs') }}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/faqs.png" alt="" /></span> <span style="padding-left:10px;">FAQs</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="1s"><a href="our-partnar" class="M"><span><img width="40" height="40" src="{{ $user_assets }}/our_partners.png"
                    alt="" /></span><span style="padding-left:15px;">Our Partners</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="{{ url('contact-us') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/contact_us.png" alt="" /></span><span style="padding-left:15px;">Contact</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.2s"><a href="{{ url('help-center') }}" class="M"><span><img width="39" src="{{ $user_assets }}/images/support.png" alt="" style="margin-left:2px;"></span><span style="padding-left:15px;">Help
                  Center</span></a></li>
            
            @if(Session::get('user_id'))
            <li class="wow fadeInDown" data-wow-delay="1.3s"><a href="#" class="M" id='side-go-more-li'><span><img width="40" height="40" src="{{ $user_assets }}/more.svg" alt="More options" /></span> <span style="padding-left:10px;">More Options</span></a></li>
          

            @endif

          </ul>
        </div>
      </div>
    </nav>


    <div id="sidebar-2">
      @if(Session::get('user_id'))
      <ul>
      <li><a href="{{ url('manage-profile') }}">Manage Profile</a></li> 
      <li><a href="{{ url('my-photo') }}">My Photos</a></li>
      <li><a href="{{ url('favourite-list') }}">My
                        Favourite</a></li>
        <li><a href="{{ url('find-exact-match') }}">Find
            Exact Match</a></li>
        <li><a href="{{ url('profile-writing-tips') }}">Profile
            Writing Tips</a></li>
        <li><a href="{{ url('friend-list') }}">Friend
            List</a></li>
        <li><a href="{{ url('public-profile',user_data()->id) }}">My
            Profile</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('hide-profile-list') }}">Hidden
            Profiles</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('email-prefrences') }}">Email
            Prefrences</a></li>
        <li><a href="{{ url('invite-friend') }}">Invite
            Friends</a></li>
        <li><a href="{{ url('photo-permission-list') }}">Photo
            Permisions</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('who-looking-for-me') }}">Who
            Looking For Me</a></li>
        <li><a href="{{ 'who-am-i-looking' }}">Who
            Am I Looking</a></li>
        <li><a href="{{ url('question') }}">My
            Question</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('notification') }}">Notifications</a></li>
        <!-- <li><a href="{{ url('statistics') }}">Statistics</a></li> -->
        <li><a href="{{ url('settings') }}">Setting</a></li>
        <li><a href="{{ url('close-account') }}">Close
            My Account</a></li>
        <li><a href="{{ url('show-search') }}">Save
            Search</a></li>

        <li><a href="{{ url('my-notes') }}">My
            Notes</a></li>
        <li><a href="{{ url('tell-friend') }}">Tell
            Friend</a></li>
        <li><a href="{{ url('sitemap') }}">Sitemap</a></li>

        <li><a href="{{ url('help-center') }}">Help
            Center</a></li>

        <li><a href="{{ url('assisted-service') }}">Assisted
            Service</a></li>
            <li class="divider"></li>
            <!-- <li><a href="{{ url('inbox') }}" class="menudesign">Inbox</a></li> -->
            <!-- <li><a href="{{ url('sent-items') }}" class="menudesign">Sent Items</a></li> -->
            <li><a href="{{ url('blocked-list') }}" class="menudesign">Block List</a></li>
      </ul>  
      @endif
    </div>

    <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="80" onclick="ham()">
      <path
          class="line top"
          d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
      <path
          class="line middle"
          d="m 30,50 h 40" />
      <path
          class="line bottom"
          d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
    </svg>
    
    <script>
      var sideGoMoreOpen = false;
          
      function ham() {
        document.querySelector('.ham').classList.toggle('active');
      }

      $('.ham').click(function() {
        if(!sideGoMoreOpen)
          $('#navsidebare').toggle('slow');
        else {
          $('#sidebar-2').css('right', '-2000px');
          sideGoMoreOpen = false;
        }
      });

      $('#side-go-more-li').click(function(){
        $('#navsidebare').hide('fast');
        $("#sidebar-2").css('right', '0');
        sideGoMoreOpen = true;
      });
    </script>

  </div>

  @if(Session::get('user_id'))
  <style>
    @media (max-width:991px) {
      
      .notification-dropdown-item:last-of-type {
        margin-bottom: 5px;
      }
      .navbar-form {
        width: 0;
        opacity: 0;
        overflow: hidden;
        top: 2px;
      }

      #username-dropdown-toggle {
        margin-right: 55px !important;
      }

      .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
        -webkit-transform: unset;
      }

      .icon-dropdown li:last-child {
        top:410px;
      }

      .nav-white.sticky-nav .navbar-nav li a {
        padding-right:14px;
      }

      .dropdown-menu {
        min-width: 160px !important;
        padding: 5px !important;
        margin: 2px 0 0 !important;
        font-size: 14px !important;
        text-align: center !important;
        list-style: none !important;
        background-color: #fff !important;
        -webkit-background-clip: padding-box !important;
        background-clip: padding-box !important;
        border: 1px solid #ccc !important;
        border: 1px solid rgba(0,0,0,.15) !important;
        border-radius: 4px !important;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
        box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
  }
  .sticky-nav .navbar-nav > li > .dropdown-menu {
    width:500px !important;
  }
  .icon-dropdown {
    position:absolute !important;
    right:0 !important;
    /* max-width:500px !important; */
  }
      .nav li.dropdown,  .nav li.dropdown a{
       width:auto !important;
      }
      #menu-div .collapse {
        /* display:inline-block !important; */
        float:right;
      }
      .username-dropdown-menu .dropdown-menu {
        position:absolute !important;
      }
      #username-dropdown-toggle .dropdown-menu {
        position: absolute !important;
      }

      .nav-white.sticky-nav .navbar-nav li a:hover, .nav-white.sticky-nav .navbar-nav li a:hover {
       padding-right: 14px;
    }

      .nav-white.sticky-nav .navbar-nav > .open > a {
        padding-right: 14px;
        padding-bottom: -2px;
        margin-top: 2px;
        padding-top: 0;
    }

    #friends-dropdown li:last-child a{
      line-height: 20px !important;
      }

      #notifications-dropdown li:last-child {
        width:488px !important;
      }

      #username-dropdown-toggle ul li {
        padding: 3px;
      }
  }
  
    @media (max-width:768px) {

      .search-dropdown-toggle {
        right: 54px;
      }

      .dropdown-item {
        font-size: 15px;
      }

      #notifications-dropdown li:last-child {
        top: 423px !important;
      }

      #friends-dropdown .icon-dropdown li:last-child {
        top: 421px;
      }

      .mp-form-list li {
		    display:block;
      }
      
     #menu-div .collapse {
        display:inline-block !important;
      }

      #menu-div .collapse {
        margin-bottom: -30px;
        margin-top: 3px;
      }

      .navbar-form {
        margin-right: 14px !important;
        position: absolute;
        top: 13px;
        right: 85px;
      }

      .navbar-form.visible {
        width: 40vw;
      }

      .nav.navbar-nav {
        margin-top: 9px;
        margin-right:45px;
      }

      #friends-dropdown.invisible, #messages-dropdown.invisible, #notifications-dropdown.invisible, #username-dropdown-toggle.invisible {
        visibility: hidden !important;
      }

    }

    @media (max-width:500px) {
      .sticky-nav .navbar-nav > li > .dropdown-menu {
        width:100vw !important;
      }

      #friends-dropdown .icon-dropdown li:last-child, #notifications-dropdown .icon-dropdown li:last-child {
        width:96vw !important;
      }

      .friends-dropdown-item {
        grid-template-columns: 50px 1fr 1fr;
      }

      .friends-dropdown-item img {
        grid-row: 1/3;
      }

      .friends-dropdown-item button {
        margin-top: 5px;
        padding: .5em .2em;
        width: unset;
      }

      .friends-dropdown-item button:first-of-type {
        grid-row: 2;
        grid-column: 2;
      }

      .friends-dropdown-item button:last-of-type {
        grid-row: 2;
        grid-column:3;
      }

      .logo-light.logo-hidden,
      .logo-dark.logo-dark.logo-hidden {
        opacity: 0;
      }

      .navbar-form.visible {
        width: 72vw;
      }
    }

    @media (max-width:400px) {
      .navbar-form button {
        padding: 3px 0px !important;
      }

      .fa-user-friends, .fa-envelope, .fa-bell {
        font-size: 18px;
      }

      .navbar-nav .dropdown .dropdown-toggle {
        padding-right: 12px !important;
        padding-left: 12px !important;
      }

      .navbar-right-2 {
        margin-right: 50px;
      }

      /* .friends-dropdown-item {
        align-items: center;
      }

      .friends-dropdown-item > div {
        grid-template-columns: 1fr 1fr;
      }

      .friends-dropdown-item > div a {
        grid-column: 1/-1;
      }

      .friends-dropdown-item > div button {
        padding: .3em;
        grid-row: 3;
      }

      .friends-dropdown-item > div button:first-of-type {
        grid-column: 1;
      }

      .friends-dropdown-item > div button:last-child {
        grid-column: 2;
      } */
    }
  </style>
  @endif
  <script>
          
         mq = window.matchMedia( "(max-width: 1230px)" );
         
        mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required
        // search option will stay in the same line in tablet mode 
        function mediaQueryResponse(mq) {
          if(mq.matches) {
              $( "#logo-div" ).removeClass('col-lg-2' );
              $( "#logo-div" ).addClass('col-sm-2' );
              $( "#menu-div" ).removeClass('col-lg-10');
              $( "#menu-div" ).addClass('col-sm-10' );
              // alert('hi');
          }
        }
        mediaQueryResponse(mq);
        // hide login div when clicked anywhere else
        $(document).mouseup(function(e) 
        {
            var login_div = $("#logindivv");
            var navSideBar = $('#navsidebare');
            // if the target of the click isn't the login_div nor a descendant of the login_div
            if (!login_div.is(e.target) && login_div.has(e.target).length === 0) 
            {
                login_div.hide();
                $('.dim').hide();
            }
        });
         
      </script>
  <div class="logindiv wow fadeIn" id="logindivv">
		<form method="post" action="{{ url('dologin') }}" id="forgot-password">
			<i class="fas fa-times-circle" id='login-div-x'></i>
			<h2>Login</h2>
			<div class='input-container'>
				<input type="email" name="email" id="email">
				<label for="email">Email or username</label>
				<i class="fas fa-user-alt"></i>
			</div>

			<div class='input-container'>
				<input type="password" name="password" id="password">
				<label for="password">Password</label>
				<i class="fas fa-lock"></i>
			</div>
			<div class="remember">
				<input type="checkbox" id="checkbox-remember"><label for="checkbox-remember">Remember Me</label>
			</div>
			<br> {{ csrf_field() }}
			<button type="submit">Sign In</button>
			<div class="forgot-and-signup">
				<a href="{{ url('forgot') }}">Forgot Password?</a>
				<span>Don't have an account? <a href="{{url('register')}}">Sign up</a></span>
			</div>
		</form>
	</div>
</div>
  </div>

	<div class="dim"></div>

  <script>
    // $("#signin").click(function(){
    //         $("#logindivv").toggle();
    //      });
         
    $("#signin").click(function () {
			$("#logindivv").toggle();
			$('.dim').toggle();
		});

		$("#login-div-x").click(function () {
			$('#logindivv').hide();
			$('.dim').hide();
		});

		$('.logindiv .input-container input').focus(function() {
			$(this).addClass('focused');
		});

		$('.logindiv .input-container input').blur(function() {
			if($(this).val().length == 0)
				$(this).removeClass('focused');
		});
      </script>
      @yield('data')
      <footer>
         <section class="bg-orange no-padding wow">
            <div class="container">
               <div class="row padding-two sm-text-center">
                  <div class="col-md-9 no-padding">
                     <h4 class="white-text font-weight-600" style="font-family:sans-serif;">Stay tuned for the launch of Best & Secure Matrimonial App!</h4>
                     <p class="white-text" style="font-family:sans-serif;text-align:justify;">It has been our utmost desire to introduce an outstanding and easy to use matrimonial application for IOS and Android users. We have been working hard in this stance and are planning to come up with a user-friendly and secure Matrimonial App so that our users stay updated while on the go!</p>
                     <p class="white-text" style="font-family:sans-serif;text-align:justify;">The app will be soon available for both Android and Apple iPhone users in the respective play stores. Stay tuned for the launch of our ‘Kabool Hai Matrimonial app’ as the early birds will be given early access and will get free subscription.</p>
                  </div>
                  <div class="col-md-3 padding-one no-padding-bottom">
                     <a class="" href="#"><img src="{{ $user_assets }}/images/google-play.png" width="193" height="58"></a><br><br>
                     <a class="" href="#"><img src="{{ $user_assets }}/images/apple-store.png" width="193" height="58"></a>
                  </div>
               </div>
            </div>
         </section>
         <div class="container-fluid footer-middle">
            <div class="row">
               <div class="col-md-2">
                  <table>
                     <tr>
                        <th class="fhead">Kaboolhai</th>
                     </tr>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{url('about-us')}}">About</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="http://kaboolhai.com/blog/" target="_blank">Blog</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="#">Download app</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('term-condation') }}">Terms and Conditions</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="#">Testimonials</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('policy-privacy') }}">Privacy Policy</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('payment') }}">Payment</a></td>
                     </tr>
                  </table>
               </div>
               <div class="col-md-2">
                  <table>
                     <tr>
                        <th class="fhead">Help & Support</th>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('help-center') }}">24x7 Live help</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('contact-us') }}">Contact Us</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('feedback') }}">Feedback</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('faqs') }}">FAQ'S</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('payment') }}">Upgrade Account</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('assisted-service') }}">Assisted Service</a></td>
                     </tr>
                     {{-- <tr>
                        <td class="flinks"><a href="#">Payment</a></td>
                     </tr> --}}
                  </table>
               </div>
               <div class="col-md-2">
                  <table>
                     <tr>
                        <th class="fhead">Search Profile</th>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#basic_search">Basic Search</a>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#advance_search">Advance Search</a>
                        </td>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#keyword_search">Keyword Search</a>
                        </td>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#job_search">Occupational Search</a>
                        </td>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#edu_search">Educational</a>
                        </td>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#id_search">ID Search</a>
                        </td>
                     </tr>
                  </table>
               </div>
               <div class="col-md-3">
                  <table>
                     <tr>
                        <th class="fhead">Contact Us</th>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="#">contact@kaboolhai.com</a></td>
                     </tr>
                     <!-- <tr>
                        <td class="flinks"><a href=""> (PK): +92 423 570 0007</a></td>
                        </tr>
                        <tr>
                        <td class="flinks"><a href="">Phase 6 DHA Lahore Pakistan
                        </a></td>
                        </tr> -->
                     <tr>
                        <td><br></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="https://www.facebook.com/Saykaboolhai/" target="__blank"><i class="fa fa-facebook-square fa-3x"></i></a><a href="#"><i class="fa fa-youtube-square fa-3x"></i></a> <a href="https://twitter.com/kaboolhaitweet" target="__blank"><i class="fa fa-twitter-square fa-3x"></i></a><i class="fa fa-google-plus-square fa-3x"></i><i class="fa fa-linkedin-square fa-3x" style="color:white;"></i></a></td>
                     </tr>
                  </table>
               </div>
               <div class="col-md-3">
                  <p class="fhead">Subscribe to Our Newsletters</p>
                  <p class="subt">Never miss our special offers</p>
                  <div class="searchcontainer">
                     <form action="{{ url('subscribe') }}" method="post">
                        {{ csrf_field() }}
                        <input type="text" required="" class="form-control" style="height:44px;border-radius-left: 5%;" placeholder="Enter Your Email" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <div class="paymg">
                     <img alt="" src="{{ $user_assets }}/payment-methods.png" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" style="padding-top:50px;">
                  <table>
                     <tr>
                        <p style="color:#ffffff">Top Searches by:</p>
                     </tr>
                      <tr class="tpsrch">
                       <th><a href="{{ url('pakistani') }}">Pakistani Muslim Matrimony</a></th>
                        <th><a href="{{ url('UAE') }}">UAE Muslim Matrimony</a></th>
                        <th><a href="{{ url('United-Kingdom') }}">United Kingdom Muslim Matrimony</a></th>
                        <th><a href="{{ url('USA') }}">USA Muslim Matrimony Muslim Matrimony</a></th>
                        <th><a href="{{ url('canada') }}" style="border:none;">CANADA Muslim Matrimony</a></th>
                    </tr>
                  </table>
               </div>
            </div>

            <div class="top-searches-by">
              <div><a href="{{ url( 'pakistani') }}">Pakistani Muslim Matrimony</a></div>
              <div><a href="{{ url( 'UAE') }}">UAE Muslim Matrimony</a></div>
              <div><a href="{{ url( 'United-Kingdom') }}">United Kingdom Muslim Matrimony</a></div>
              <div><a href="{{ url( 'USA') }}">USA Muslim Matrimony Muslim Matrimony</a></div>
              <div><a href="{{ url( 'canada') }}">CANADA Muslim Matrimony</a></div>
					 </div>
            <!-- scroll to top -->
            <a href="javascript:;" class="scrollToTop"></a>
         </div>
         <!-- scroll to top End... -->
      </footer>
      <div style="width:100%;background-color:#222;">
         <div class="container">
            <div class="row" style="padding-top:15px;padding-bottom: 15px;">
               <div class="col-sm-6">
                  <table>
                     <tr class="dosrch">
                        <th><a href="{{ url('term-condation') }}">Terms</a></th>
                        <th><a href="{{ url('policy-privacy') }}">Privacy Policy</a></th>
                        <th><a href="{{ url('sitemap') }}" style="border:none;">Site Map</a></th>
                     </tr>
                  </table>
               </div>
               <div class="col-sm-6 copyright">
                  <p class="pull-right" style="color:#ffffff;">&copy;2018 Kaboolhai.All rights reserved.Powered By <a style="color:white;" href="http://www.ranglerz.com/" target="__blanck">Ranglerz</a>.</p>
               </div>
            </div>
         </div>
      </div>
      {{-- Basic Search --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="basic_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title">
                     <center>Basic Search </center>
                  </h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}" class="form-inline">
                     {{ csrf_field() }}
                    <div class="row">
        <div class="col-sm-3">
          <label>Looking for</label>
          
        </div>
        <div class="col-sm-3">
       <div class="form-group"> 
       
           {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
           <input type="radio" value="Female" name="loking_for"> Bride
</div>
       </div>
             <div class="col-md-3">
              <div class="form-group">        
             <input type="radio" value="Male" name="loking_for"> Groom
             
          </div>   
         </div>
        </div>
        <br>
                     <div class="form-group">
                        <label>Age</label>
                     </div>
                     <div class="row">
                        <div class="col-xs-5">
                           <select name="age_from" class="form-control" style="width: 200PX">
                              <option value="">Select</option>
                              @for($i =  date('y');  $i <= date('y')+82 ; $i++)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                        <div class="col-xs-1 text-center to">
                           To
                        </div>
                        <div class="col-xs-5">
                           <select name="age_to" class="form-control" style="width: 200px;">
                              <option value="">Select</option>
                              @for($i = date('y')+82; $i >= date('y'); $i--)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="form-group">
                        <label>Height</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-5">
                           <select name="height_from" class="form-control">
                              <option value="">Height..</option>
                              <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                              <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                              <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                              <option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
                              <option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
                              <option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
                              <option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
                              <option value="5ft - 152cm">5ft - 152cm</option>
                              <option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
                              <option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
                              <option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
                              <option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
                              <option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
                              <option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
                              <option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
                              <option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
                              <option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
                              <option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
                              <option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
                              <option value="6ft - 182cm">6ft - 182cm</option>
                              <option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
                              <option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
                              <option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
                              <option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
                              <option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
                              <option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
                              <option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
                              <option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
                              <option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
                              <option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
                              <option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
                              <option value="7ft - 213cm">7ft - 213cm</option>
                              <option value="Above 7ft - 213c">Above 7ft - 213cm</option>
                           </select>
                        </div>
                        <div class="col-xs-1 text-center to">
                           To
                        </div>
                        <div class="col-sm-5">
                           <select name="height_to" class="form-control">
                              <option value="">Height..</option>
                              <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                              <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                              <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                              <option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
                              <option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
                              <option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
                              <option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
                              <option value="5ft - 152cm">5ft - 152cm</option>
                              <option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
                              <option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
                              <option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
                              <option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
                              <option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
                              <option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
                              <option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
                              <option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
                              <option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
                              <option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
                              <option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
                              <option value="6ft - 182cm">6ft - 182cm</option>
                              <option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
                              <option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
                              <option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
                              <option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
                              <option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
                              <option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
                              <option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
                              <option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
                              <option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
                              <option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
                              <option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
                              <option value="7ft - 213cm">7ft - 213cm</option>
                              <option value="Above 7ft - 213c">Above 7ft - 213cm</option>
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
                        <button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- advance search --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="advance_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title">
                     <center>Search by Advance info</center>
                  </h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}" class="form-inline">
                     {{ csrf_field() }}
                     <div class="row">
        <div class="col-sm-3">
          <label>Looking for</label>
          
        </div>
        <div class="col-sm-3">
       <div class="form-group"> 
       
           {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
           <input type="radio" value="Female" name="loking_for"> Bride
         </div>
       </div>
             <div class="col-sm-3">
              <div class="form-group">        
             <input type="radio" value="Male" name="loking_for"> Groom
             
          </div>   
         </div>
        </div>
        <br>
                     <div class="form-group">
                        <label>Age</label>
                     </div>
                     <div class="row">
                        <div class="col-xs-5">
                           <select name="age_from" class="form-control" style="width: 200px;">
                              <option value="">Select</option>
                              @for($i =  date('y');  $i <= date('y')+82 ; $i++)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                        <div class="col-xs-1 text-center to">
                           To
                        </div>
                        <div class="col-xs-5">
                           <select name="age_to" class="form-control" style="width: 200px;">
                              <option value="">Select</option>
                              @for($i = date('y')+82; $i >= date('y'); $i--)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                     </div>
                     <br>
                    <div class="row"> 
        
        <div class="col-sm-3">
          <label>Martial Status</label>
          
        </div>
         <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Unmaried" name="martial_status"> Unmaried
         </div>
       </div>
        <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Widow Widower" name="martial_status"> Widow/Widower
         </div>
       </div>
       <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Divorcee" name="martial_status"> Divorcee
         </div>
       </div>
         <div class="col-sm-3"></div>
           <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Seprated" name="martial_status"> Seprated
         </div>
       </div>
       <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Annulled" name="martial_status"> Annulled
         </div>
       </div>
         
        </div>
        <br>
                     <div class="form-group">
                        <label>Height</label>
                     </div>
                     <div class="row">
                        <div class="col-xs-5">
                           <select name="height_from" class="form-control">
                              <option value="">Height..</option>
                              <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                              <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                              <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                              <option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
                              <option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
                              <option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
                              <option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
                              <option value="5ft - 152cm">5ft - 152cm</option>
                              <option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
                              <option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
                              <option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
                              <option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
                              <option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
                              <option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
                              <option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
                              <option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
                              <option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
                              <option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
                              <option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
                              <option value="6ft - 182cm">6ft - 182cm</option>
                              <option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
                              <option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
                              <option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
                              <option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
                              <option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
                              <option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
                              <option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
                              <option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
                              <option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
                              <option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
                              <option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
                              <option value="7ft - 213cm">7ft - 213cm</option>
                              <option value="Above 7ft - 213c">Above 7ft - 213cm</option>
                           </select>
                        </div>
                        <div class="col-xs-1 text-center to">
                           To
                        </div>
                        <div class="col-xs-5">
                           <select name="height_to" class="form-control">
                              <option value="">Height..</option>
                              <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                              <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                              <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                              <option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
                              <option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
                              <option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
                              <option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
                              <option value="5ft - 152cm">5ft - 152cm</option>
                              <option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
                              <option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
                              <option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
                              <option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
                              <option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
                              <option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
                              <option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
                              <option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
                              <option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
                              <option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
                              <option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
                              <option value="6ft - 182cm">6ft - 182cm</option>
                              <option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
                              <option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
                              <option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
                              <option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
                              <option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
                              <option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
                              <option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
                              <option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
                              <option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
                              <option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
                              <option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
                              <option value="7ft - 213cm">7ft - 213cm</option>
                              <option value="Above 7ft - 213c">Above 7ft - 213cm</option>
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="form-group">
                        <label>caste</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <input type="text"  name="cast" class="form-control" placeholder="Caste" style="width: 400px;">
                        </div>
                     </div>
                   
                     <div class="form-group">
                        <label>Mother Language</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <select name="language" class="form-control" style="width: 400px;">
                              <option value="">..Select..</option>
                              <option value="Urdu">Urdu</option>
                              <option value="Punjabi">Punjabi</option>
                              <option value="Pashto">Pashto</option>
                              <option value="Sindhi">Sindhi</option>
                              <option value="Saraiki">Saraiki</option>
                              <option value="Balochi">Balochi</option>
                              <option value="Hindko">Hindko</option>
                              <option value="English">English</option>
                              <option disabled="">..............................................................</option>
                              <option value="Malayalam">Malayalam</option>
                              <option value="Aka">Aka</option>
                              <option value="Angika">Angika</option>
                              <option value="Arabic">Arabic</option>
                              <option value="Arunachali">Arunachali</option>
                              <option value="Assamese">Assamese</option>
                              <option value="Awadhi">Awadhi</option>
                              <option value="Badaga">Badaga</option>
                              <option value="Bengali">Bengali </option>
                              <option value="Bhojpuri">Bhojpuri</option>
                              <option value="Bihari">Bihari</option>
                              <option value="Brij">Brij</option>
                              <option value="Chatisgarhi">Chatisgarhi</option>
                              <option value="Coorgi">Coorgi</option>
                              <option value="Dogri">Dogri</option>
                              <option value="French">French</option>
                              <option value="Garhwali">Garhwali</option>
                              <option value="Garo">Garo</option>
                              <option value="Gujarati">Gujarati</option>
                              <option value="Haryanvi">Haryanvi</option>
                              <option value="Himachali/Pahari">Himachali/Pahari</option>
                              <option value="Hindi">Hindi</option>
                              <option value="Hindko">Hindko</option>
                              <option value="Kanauji">Kanauji</option>
                              <option value="Kannada">Kannada</option>
                              <option value="Kashmiri">Kashmiri</option>
                              <option value="Khandesi">Khandesi</option>
                              <option value="Khasi">Khasi</option>
                              <option value="Konkani">Konkani</option>
                              <option value="Koshali">Koshali</option>
                              <option value="Kumaoni">Kumaoni</option>
                              <option value="Kutchi">Kutchi</option>
                              <option value="Ladacki">Ladacki</option>
                              <option value="Lepcha">Lepcha</option>
                              <option value="Magahi">Magahi</option>
                              <option value="Maithili">Maithili</option>
                              <option value="Malay">Malay</option>
                              <option value="Malayalam">Malayalam</option>
                              <option value="Manipuri">Manipuri</option>
                              <option value="Marathi">Marathi</option>
                              <option value="Marwari">Marwari</option>
                              <option value="Miji">Miji</option>
                              <option value="Miza">Miza</option>
                              <option value="Monpa">Monpa</option>
                              <option value="Nepali">Nepali</option>
                              <option value="Nicobarese">Nicobarese</option>
                              <option value="Oriya">Oriya</option>
                              <option value="Persian">Persian</option>
                              <option value="Rajasthani">Rajasthani</option>
                              <option value="Russian">Russian</option>
                              <option value="Sanskrit">Sanskrit</option>
                              <option value="Santhali">Santhali</option>
                              <option value="Sinhala">Sinhala</option>
                              <option value="Sourashtra">Sourashtra</option>
                              <option value="Spanish">Spanish</option>
                              <option value="Tamil">Tamil</option>
                              <option value="Telugu">Telugu</option>
                              <option value="Tripuri">Tripuri</option>
                              <option value="Tulu">Tulu</option>
                           </select>
                        </div>
                     </div>
                     
                     <div class="form-group">
                        <label>Religion</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <select name="religiousness" class="form-control" style="width: 400px;">
                              <option value="">..Select..</option>
                              <option value="">Please select..</option>
                              <option value="Very religious">Very religious</option>
                              <option value="Religious">Religious</option>
                              <option value="Not religious">Not religious</option>
                              <option value="Prefer not to say">Prefer not to say</option>
                           </select>
                        </div>
                     </div>
                     
                     <div class="form-group">
                        <label>Financial Status</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <select name="financial_status" class="form-control" style="width: 400px;">
                              <option value="">Please select..</option>
                              <option value="Rich">Rich</option>
                              <option value="Upper Middle Class">Upper Middle Class</option>
                              <option value="Middle Class">Middle Class</option>
                              <option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
                              <option value="Do not want to tell at this time">Do not want to tell at this time</option>
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding:5px; background-color: red;">Close</button>
                        <button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- Keyword search --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="keyword_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title">
                     <center>Search by Keyword</center>
                  </h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}" class="form-inline">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label>User Name</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <input type="text"  name="user_name" class="form-control" placeholder="user name" style="width: 525px;">
                        </div>
                     </div>
                     <br>
                     <div class="row">
        <div class="col-sm-3">
          <label>Looking for</label>
          
        </div>
        <div class="col-sm-3">
       <div class="form-group"> 
       
           {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
           <input type="radio" value="Female" name="loking_for"> Bride
         </div>
       </div>
             <div class="col-sm-3">
              <div class="form-group">        
             <input type="radio" value="Male" name="loking_for"> Groom
             
          </div>   
         </div>
        </div>
        <br>
                     <div class="form-group">
                        <label>Age</label>
                     </div>
                     <div class="row">
                        <div class="col-xs-5">
                           <select name="age_from" class="form-control" style="width: 200px">
                              <option value="">Select</option>
                              @for($i =  date('y');  $i <= date('y')+82 ; $i++)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                        <div class="col-xs-1 text-center to">
                           To
                        </div>
                        <div class="col-xs-5">
                           <select name="age_to" class="form-control" style="width: 200px;">
                              <option value="">Select</option>
                              @for($i = date('y')+82; $i >= date('y'); $i--)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                     </div>
                     <br>
                    <div class="row"> 
        
        <div class="col-sm-3">
          <label>Martial Status</label>
          
        </div>
         <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Unmaried" name="martial_status"> Unmaried
         </div>
       </div>
        <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Widow Widower" name="martial_status"> Widow/Widower
         </div>
       </div>
       <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Divorcee" name="martial_status"> Divorcee
         </div>
       </div>
         <div class="col-sm-3"></div>
           <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Seprated" name="martial_status"> Seprated
         </div>
       </div>
       <div class="col-sm-3">
          <div class="form-group"> 
           <input type="radio" value="Annulled" name="martial_status"> Annulled
         </div>
       </div>
         
        </div>
        <br>
                     <div class="form-group">
                        <label>Height</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-5">
                           <select name="height_from" class="form-control">
                              <option value="">Height..</option>
                              <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                              <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                              <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                              <option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
                              <option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
                              <option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
                              <option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
                              <option value="5ft - 152cm">5ft - 152cm</option>
                              <option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
                              <option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
                              <option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
                              <option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
                              <option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
                              <option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
                              <option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
                              <option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
                              <option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
                              <option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
                              <option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
                              <option value="6ft - 182cm">6ft - 182cm</option>
                              <option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
                              <option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
                              <option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
                              <option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
                              <option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
                              <option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
                              <option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
                              <option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
                              <option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
                              <option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
                              <option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
                              <option value="7ft - 213cm">7ft - 213cm</option>
                              <option value="Above 7ft - 213c">Above 7ft - 213cm</option>
                           </select>
                        </div>
                        <div class="col-xs-1 text-center to">
                           To
                        </div>
                        <div class="col-sm-5">
                           <select name="height_to" class="form-control">
                              <option value="">Height..</option>
                              <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                              <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                              <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                              <option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
                              <option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
                              <option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
                              <option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
                              <option value="5ft - 152cm">5ft - 152cm</option>
                              <option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
                              <option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
                              <option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
                              <option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
                              <option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
                              <option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
                              <option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
                              <option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
                              <option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
                              <option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
                              <option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
                              <option value="6ft - 182cm">6ft - 182cm</option>
                              <option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
                              <option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
                              <option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
                              <option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
                              <option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
                              <option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
                              <option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
                              <option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
                              <option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
                              <option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
                              <option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
                              <option value="7ft - 213cm">7ft - 213cm</option>
                              <option value="Above 7ft - 213c">Above 7ft - 213cm</option>
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red">Close</button>
                        <button type="submit" class="btn btn-success" style="padding: 5px; background-color: green;">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- Job search --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="job_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by Occupation</h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label class="col-form-label">Search Occupation</label>
                        <select name="job"  class="job form-control">
                           <option value="Softwarw Engineer">Softwarw Engineer</option>
                           <option value="Producer/Director">Producer/Director</option>
                           <option value="Media">Media</option>
                           <option value="Marketing Manager">Marketing Manager</option>
                           <option value="HR Manager">HR Manager</option>
                           <option value="Lawyer">Lawyer</option>
                           <option value="I.T Porfissional">I.T Porfissional</option>
                           <option value="Teacher">Teacher</option>
                           <option value="University Lacturer">University Lacturer</option>
                           <option value="Business Administration">Business Administration</option>
                           <option value="Admin Officer"> Admin Officer</option>
                           <option value="Cival Engineer">Cival Engineer </option>
                           <option value="Electrical Engineer">Electrical Engineer</option>
                           {{-- 
                           <option value="MBBS">MBBS</option>
                           --}}
                           <option value="Doctor">Doctor</option>
                           <option value="BBA">BBA</option>
                           <option value="Chartered Accountant">Chartered Accountant</option>
                           <option value="CSS Officer">CSS Officer </option>
                           <option value="No Occupation">No Occupation </option>
                           <option value="Business">Business</option>
                           <option value="Pilot">Pilot</option>
                           <option value="Police Officer">Police Officer</option>
                           <option value="Army Officer">Army Officer</option>
                           <option value="Air Force">Air Force</option>
                           <option value="Designer">Designer</option>
                           <option value="Computer Hardware">Computer Hardware</option>
                           <option value="Auto Mobile">Auto Mobile</option>
                           <option value="Traffic Warden">Traffic Warden</option>
                           <option value="Farmer">Farmer</option>
                           <option value="Shop Keeper">Shop Keeper</option>
                           <option value="Real Estate">Real Estate</option>
                        </select>
                     </div>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- education search modal --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="edu_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by education</h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label class="col-form-label">Search education</label>
                        <select name="qualification" id="" class="qualification form-control">
                           <option selected="selected" value="">--- Select ---</option>
                           <optgroup label='Bachelors - Engineering/Computer'>
                              <option value='BCA'>BCA</option>
                              <option value='B Arch'>B Arch</option>
                              <option value='B Plan'>B Plan</option>
                              <option value='BE'>BE</option>
                              <option value='B Tech'>B Tech</option>
                              <option value='Aeronautical Engineering'>Aeronautical Engineering</option>
                              <option value='BSc Computer Science'>BSc Computer Science</option>
                              <option value='BSc IT'>BSc IT</option>
                              <option value='Bachelor of Engineering'>Bachelor of Engineering</option>
                           </optgroup>
                           <optgroup label='Masters - Engineering/Computer'>
                              <option value='MS (Engg.)'>MS (Engg.)</option>
                              <option value='M Arch'>M Arch</option>
                              <option value='MCA'>MCA</option>
                              <option value='PGDCA'>PGDCA</option>
                              <option value='ME'>ME</option>
                              <option value='M Tech'>M Tech</option>
                              <option value='MSc Computer Science'>MSc Computer Science</option>
                              <option value='MSc IT'>MSc IT</option>
                              <option value='Master of Engineering'>Master of Engineering</option>
                           </optgroup>
                           <optgroup label='Bachelors - Arts/Science/Commerce/Other'>
                              <option value='B Phil'>B Phil</option>
                              <option value='B Com'>B Com</option>
                              <option value='BSc'>BSc</option>
                              <option value='BA'>BA</option>
                              <option value='BFA'>BFA</option>
                              <option value='BLIS'>BLIS</option>
                              <option value='BSW'>BSW</option>
                              <option value='BMM (MASS MEDIA)'>BMM (MASS MEDIA)</option>
                              <option value='Bachelors Degree'>Bachelors Degree</option>
                           </optgroup>
                           <optgroup label='Masters - Arts/Science/Commerce/Other'>
                              <option value='M Phil'>M Phil</option>
                              <option value='M Com'>M Com</option>
                              <option value='M Sc'>M Sc</option>
                              <option value='MA'>MA</option>
                              <option value='MLIS'>MLIS</option>
                              <option value='MSW'>MSW</option>
                              <option value='Masters Degree'>Masters Degree</option>
                           </optgroup>
                           <optgroup label='Teachers Education - BEd/MEd'>
                              <option value='BEd'>BEd</option>
                              <option value='MEd'>MEd</option>
                           </optgroup>
                           <optgroup label='Management - MBA/BBA/Other'>
                              <option value='MHM'>MHM</option>
                              <option value='MBA'>MBA</option>
                              <option value='PGDM'>PGDM</option>
                              <option value='MFM (Financial Management)'>MFM (Financial Management)</option>
                              <option value='Master Degree in Management'>Master Degree in Management</option>
                              <option value='BHM'>BHM</option>
                              <option value='BBA'>BBA</option>
                              <option value='BFM (Financial Management)'>BFM (Financial Management)</option>
                              <option value='Bachelor Degree in Management'>Bachelor Degree in Management</option>
                           </optgroup>
                           <optgroup label='Medicine - MBBS/MD/MS'>
                              <option value='MBBS'>MBBS</option>
                              <option value='MD / MS (Medical)'>MD / MS (Medical)</option>
                              <option value='MCh - Master of Chirurgiae'>MCh - Master of Chirurgiae</option>
                              <option value='DM - Doctorate of Medicine'>DM - Doctorate of Medicine</option>
                           </optgroup>
                           <optgroup label='Medicine - Dental/Homeo/Ayu/Vet'>
                              <option value='BDS'>BDS</option>
                              <option value='MDS'>MDS</option>
                              <option value='BHMS'>BHMS</option>
                              <option value='MHMS'>MHMS</option>
                              <option value='BAMS'>BAMS</option>
                              <option value='MAMS'>MAMS</option>
                              <option value='Bachelor of Veterinary Science'>Bachelor of Veterinary Science</option>
                              <option value='Master of Veterinary Science'>Master of Veterinary Science</option>
                              <option value='Degree in Medicine'>Degree in Medicine</option>
                              <option value='Master in Medicine'>Master in Medicine</option>
                           </optgroup>
                           <optgroup label='Medicine - Pharmacy/Nursing/Lab/Health'>
                              <option value='BPT'>BPT</option>
                              <option value='MPT'>MPT</option>
                              <option value='B.Pharm'>B.Pharm</option>
                              <option value='M.Pharm'>M.Pharm</option>
                              <option value='BSc Nursing'>BSc Nursing</option>
                              <option value='MSc Nursing'>MSc Nursing</option>
                              <option value='Medical Course'>Medical Course</option>
                              <option value='Diploma in Nursing'>Diploma in Nursing</option>
                              <option value='Medical Laboratory Technology'>Medical Laboratory Technology</option>
                           </optgroup>
                           <optgroup label='Legal - BL/ML/LLB/LLM'>
                              <option value='BGL'>BGL</option>
                              <option value='Bachelor of Law'>Bachelor of Law</option>
                              <option value='LLB'>LLB</option>
                              <option value='Master of Law'>Master of Law</option>
                              <option value='LLM'>LLM</option>
                              <option value='Course in Legal'>Course in Legal</option>
                           </optgroup>
                           <optgroup label='Finance - CA/ICWAI/CS'>
                              <option value='CA Inter'>CA Inter</option>
                              <option value='CA Final'>CA Final</option>
                              <option value='ICWA'>ICWA</option>
                              <option value='Company Secretary (CS)'S>Company Secretary (CS)</option>
                              <option value='CFA (Chartered Financial Analyst)'>CFA (Chartered Financial Analyst)</option>
                              <option value='Course in Finance'>Course in Finance</option>
                           </optgroup>
                           <optgroup label='Doctorate'>
                              <option value='Ph D'>Ph D</option>
                           </optgroup>
                           <optgroup label='Civil Service'>
                              <option value='IAS'>IAS</option>
                              <option value='IPS'>IPS</option>
                              <option value='IRS'>IRS</option>
                              <option value='154'>IES</option>
                              <option value='155'>IFS</option>
                              <option value='156'>Civil Service</option>
                           </optgroup>
                           <optgroup label='Diploma'>
                              <option value='Diploma'>Diploma</option>
                              <option value='Polytechnic'>Polytechnic</option>
                           </optgroup>
                           <optgroup label='Higher Secondery/TTC/ITI'>
                              <option value='TTC'>TTC</option>
                              <option value='ITI'>ITI</option>
                              <option value='Higher Secondery'>Higher Secondery</option>
                           </optgroup>
                           <optgroup label='Other Education'>
                              <option value='High School'>High School</option>
                              <option value='Less than high school'>Less than high school</option>
                              <option value='Other Education'>Other Education</option>
                           </optgroup>
                        </select>
                     </div>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
                        <button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- id search modal --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="id_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by user name</h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label class="col-form-label">User name search</label>
                        <input type="text" placeholder="search by name or user name" class="form-control" name="user_name">
                     </div>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
                        <button type="submit" class="btn btn-success" style="padding: 5px; background-color: green;">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
         @if(count(user_data()))
      <script type="text/javascript">
       
  var idleTime = 0;
    var idleInterval = setInterval(timerIncrement, 60000); // 1 minute
    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 30) { // 20 minutes
   $.ajax({
    url:'{{url('/check-login-status')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            
          }
        });
    }
}
</script>
      <script type="text/javascript">
         var to_user;
         $("a.left-first-section").click(function(){
            to_user=$(this).attr('rel');
         
         $('#to_userss').val(to_user);
            $.post('{{ url('/chat') }}' , {_token: '{{ csrf_token() }}' , to_user: to_user} , function(data)
         {
         response = $.parseJSON(data);
         $('.sender').html(response.sender);
         $('#user_name').html(response.user_name);
         
         // alert(response.code_flage);
         });
   
});
      setInterval(function() {
           
      $.ajax({
    url:'{{url('/get-notification')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            $('.get_notifi').html("");
           
              $('#get_noti').html(response);
            
             
          }
        });
  },1000);

    setInterval(function() {
           

           $.ajax({
         url:'{{url('/unsean-notification')}}',
                 type: 'POST',
                 data: {
                   "_token": "{{ csrf_token() }}",
                   "user_id" : {{user_data()->id}}
                 },
               success:function(response) {
               
                if(response!=0)
                {
                  $('.noti_counts').html(response);
                }

                 
                   
               }
     
             });
       },1000);

         setInterval(function() {
         
         
         // to_user = $('#to_userss').text();
         // alert(to_user);
         $.ajax({
         url:'{{ url('check_unseen') }}',
         type: 'POST',
         data: {
         "_token": "{{ csrf_token() }}",
         "to_user" : to_user
         },
         success:function(response) {
         if(response!=0)
         {
         
          response.forEach(function (item) {
            if(item.to_user=={{user_data()->id}})
            {
             
               $('#message_count').show();
               $('#message_count').html('1')
            }
            if(item.attached)
            {
              var filename = item.attached;
var valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;   
if(valid_extensions.test(filename))
{ 
   $('.new_message').append('<li><div class="left-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+item.attached+'"></a></p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}
else
{
   $('.new_message').append('<li><div class="left-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank">'+item.attached+'</a></p></div></li>');
   $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}
}
           //  $('.new_message').append('<li><div class="left-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+item.attached+'"></a></p></div></li>');
           // $('#chat-scroll').animate({
           //  scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
           //  }
            else if(item.message)
            {
              $(".new_message").append('<li><div class="left-chat"><p>'+item.message+'</p></div></li>');
            $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            }
         
            
         
          // $("#new_message").append("<div class='col-md-6 well'><p style='color:black;'>"+item.message+"</p></div><div class='col-md-6'></div>");
          // $('#chat-scroll').animate({
          //   scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
         });
         }
         }
         
         });
         },1000);
         
         
$("#file").change(function () {
       var fileExtension = ['xlsx','xls','csv','jpg','jpeg','png','gif','bmp','doc','docx','pdf','txt'];
       if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
          document.getElementById("file").value = "";
          document.getElementById('error').style.display = "block";
           $("#error").html("Only allowed file type are "+fileExtension.join(', '));
       }
       else
       {
         document.getElementById('error').style.display = "none";
       }
   });
         
         
$('#form').on('submit',function (e) {
e.preventDefault();
var message=document.getElementById("send_messgae").value;
var file=document.getElementById("file").value;
if(message)
{
var word_to_match = message;
var string_of_words = 'a string containing the word ender, this will match';
//use \b to match on word boundaries
var filter = new RegExp('\\b' + word_to_match + '\\b', 'gi');
if(string_of_words.match(filter))
 {
   $('#error').html('Block ' + word_to_match);
   $('#send_messgae').val('');
   return false;
 } 
}
    
         
         $.ajax({
           type: 'post',
           url: "{{ url('send_message') }}",
            // data: new FormData(this),
           // data: $('#form').serialize(),
            data: new FormData(this),
                 contentType: false,       
                 cache: false,            
                 processData:false,
           success: function (response)
            {
               $('#file').val('');
               $('#error').html('');
               if(message && file)
               {
              
           $('.new_message').append('<li><div class="right-chat"><p>'+message+'</p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            $('.new_message').append('<li><div class="right-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+response.attached+'"></a></p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
          }
            else if(file)
            {
              var filename = response.attached;
var valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;   
if(valid_extensions.test(filename))
{ 
   $('.new_message').append('<li><div class="right-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+response.attached+'"></a></p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}
else
{
   $('.new_message').append('<li><div class="right-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank">'+response.attached+'</a></p></div></li>');
   $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}
}
               
            else if(message)
            {
               $('.new_message').append('<li><div class="right-chat"><p>'+message+'</p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
           
            }
            /* else
            {
             
               $('#error').html('Write message');
            } */
           }
         });
         
        
         document.getElementById("send_messgae").value = "";
        
       
         });
         function friend_count()
  {
    $.ajax({
    url:'{{url('/friend-count')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            
           
             $('#friend_counts').hide();
          }
        });
  }
  function read_notification()
  {
    $.ajax({
    url:'{{url('/read-notification')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            
           
             $('.noti_counts').hide();
             
          }
        });
  }
function get_message()
{
  $.ajax({
    url:'{{url('/read-message')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            
           
             $('#message_count').hide();
             
          }
        });
}
      </script>
     @endif
     
      @stack('js')
     
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojiarea.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/emoji-picker.js"></script>
<script>
  document.querySelector('#signin-li').onclick = function() {
    document.querySelector('.ham').classList.remove('active');
      $('#navsidebare').hide('slow');
      $('#logindivv').show('fast');
      $('.dim').show();
  }

</script>
<style> 

 @media (max-width:550px) {

      .navbar-form {
        right: 80px;
      }

      .nav.navbar-nav {
        margin-right:45px;
     }
    }

    @media (max-width:520px) {
      /* #menu-div .nav li.dropdown:not(.username-dropdown-toggle) { */
        #menu-div .nav li.dropdown.username-dropdown-toggle {
        display:none !important;
      }

     .navbar-form button {
      padding: 3px 3px !important;
     }

     .navbar-form input[type='text'] {
        width: 35vw;
        font-size: 12px;
        padding-left: 7px;
     }

     .nav.navbar-nav {
       margin-right: 70px;
     }
    }

    @media (max-width:430px) {

      .navbar-form {
        right: 70px;
      }
    }
</style>
  </body>
</html>