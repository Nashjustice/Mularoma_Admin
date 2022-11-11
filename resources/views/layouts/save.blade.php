<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="ELSHADAI GOLDEN TRADERS INVESTMENT is the Best Investment Platform"/>

    <!-- Title -->
    <title>{{env('APP_NAME')}} Dashboard</title>

 
    <!-- Favicon -->
    <link rel="icon" href="img/brand/favicon.png" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="{{ asset('assetss/css/icons.css')}}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ asset('assetss/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--  Owl-carousel css-->
    <link href="{{ asset('assetss/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assetss/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assetss/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ asset('assetss/css/sidemenu.css')}}">

    <!-- Maps css -->
    <link href="{{ asset('assetss/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!-- style css -->
    <link href="{{ asset('assetss/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assetss/css/style-dark.css')}}" rel="stylesheet">
    <link href="{{ asset('assetss/css/boxed.css')}}" rel="stylesheet">
    <link href="{{ asset('assetss/css/dark-boxed.css')}}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset('assetss/css/skin-modes.css')}}" rel="stylesheet" />

  </head>

  <body class="main-body">



    <!-- Loader -->
    <div id="global-loader">
      <img src="{{ asset('assetss/img/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

  <!-- Page -->
    <div class="page">

      <!-- main-sidebar -->
      <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
      <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
          <h3 class="desktop-logo logo-light active" href="">ELSHADAI G.T</h3>
          
          
          
        </div>
        <div class="main-sidemenu">
          <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
              <div class="">
                <img alt="user-img" class="avatar avatar-xl brround" src="{{ asset('assetss/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
              </div>
              <div class="user-info">
                <h4 class="fw-semibold mt-3 mb-0">{{Auth::user()->username}}</h4>
                <span class="mb-0 text-muted">Member</span>
              </div>
            </div>
          </div>
          <ul class="side-menu">
            <li class="side-item side-item-category">Main</li>
            <li class="slide">
              <a class="side-menu__item" href="/{{Auth::user()->username}}/dashboard"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Dashboard</span><span class="badge bg-success text-light" id="bg-side-text">1</span></a>
            </li>

            <li class="side-item side-item-category">Pay for client</li>
            <li class="slide">
              <a class="side-menu__item" href="icons.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg><span class="side-menu__label">Initiate</span><span class="badge bg-danger text-light" id="bg-side-text"></span></a>
            </li>
            <li class="side-item side-item-category">Cashier</li>
            <li class="slide">
              <a class="side-menu__item" href="icons.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg><span class="side-menu__label">Deposit</span><span class="badge bg-danger text-light" id="bg-side-text">New</span></a>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">Withdraw</span><i class="angle fe fe-chevron-down"></i></a>
           
            </li>
          
            <li class="side-item side-item-category">Invest</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Start investment</span><i class="angle fe fe-chevron-down"></i></a>
             
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="alerts.html">Alerts</a></li>
                <li><a class="slide-item" href="avatar.html">Avatar</a></li>
                <li><a class="slide-item" href="breadcrumbs.html">Breadcrumbs</a></li>
                <li><a class="slide-item" href="buttons.html">Buttons</a></li>
                <li><a class="slide-item" href="badge.html">Badge</a></li>
                <li><a class="slide-item" href="dropdown.html">Dropdown</a></li>
                <li><a class="slide-item" href="thumbnails.html">Thumbnails</a></li>
                <li><a class="slide-item" href="list-group.html">List Group</a></li>
                <li><a class="slide-item" href="navigation.html">Navigation</a></li>
                <li><a class="slide-item" href="images.html">Images</a></li>
                <li><a class="slide-item" href="pagination.html">Pagination</a></li>
                <li><a class="slide-item" href="popover.html">Popover</a></li>
                <li><a class="slide-item" href="progress.html">Progress</a></li>
                <li><a class="slide-item" href="spinners.html">Spinners</a></li>
                <li><a class="slide-item" href="media-object.html">Media Object</a></li>
                <li><a class="slide-item" href="typography.html">Typography</a></li>
                <li><a class="slide-item" href="tooltip.html">Tooltip</a></li>
                <li><a class="slide-item" href="toast.html">Toast</a></li>
                <li><a class="slide-item" href="tags.html">Tags</a></li>
                <li><a class="slide-item" href="tabs.html">Tabs</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg><span class="side-menu__label">Advanced UI</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="accordion.html">Accordion</a></li>
                <li><a class="slide-item" href="carousel.html">Carousel</a></li>
                <li><a class="slide-item" href="collapse.html">Collapse</a></li>
                <li><a class="slide-item" href="modals.html">Modals</a></li>
                <li><a class="slide-item" href="timeline.html">Timeline</a></li>
                <li><a class="slide-item" href="sweet-alert.html">Sweet Alert</a></li>
                <li><a class="slide-item" href="rating.html">Ratings</a></li>
                <li><a class="slide-item" href="counters.html">Counters</a></li>
                <li><a class="slide-item" href="search.html">Search</a></li>
                <li><a class="slide-item" href="userlist.html">Userlist</a></li>
                <li><a class="slide-item" href="blog.html">Blog</a></li>
              </ul>
            </li>
            <li class="side-item side-item-category">COMPONENTS</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg><span class="side-menu__label">Mail</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="mail.html">Mail</a></li>
                <li><a class="slide-item" href="mail-compose.html">Mail Compose</a></li>
                <li><a class="slide-item" href="mail-read.html">Read-mail</a></li>
                <li><a class="slide-item" href="mail-settings.html">mail-settings</a></li>
                <li><a class="slide-item" href="chat.html">Chat</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg><span class="side-menu__label">Forms</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="form-elements.html">Form Elements</a></li>
                <li><a class="slide-item" href="form-advanced.html">Advanced Forms</a></li>
                <li><a class="slide-item" href="form-layouts.html">Form Layouts</a></li>
                <li><a class="slide-item" href="form-validation.html">Form Validation</a></li>
                <li><a class="slide-item" href="form-wizards.html">Form Wizards</a></li>
                <li><a class="slide-item" href="form-editor.html">WYSIWYG Editor</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg><span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="table-basic.html">Basic Tables</a></li>
                <li><a class="slide-item" href="table-data.html">Data Tables</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" href="widgets.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v4H5zm10 10h4v4h-4zM5 15h4v4H5zM16.66 4.52l-2.83 2.82 2.83 2.83 2.83-2.83z" opacity=".3"/><path d="M16.66 1.69L11 7.34 16.66 13l5.66-5.66-5.66-5.65zm-2.83 5.65l2.83-2.83 2.83 2.83-2.83 2.83-2.83-2.83zM3 3v8h8V3H3zm6 6H5V5h4v4zM3 21h8v-8H3v8zm2-6h4v4H5v-4zm8-2v8h8v-8h-8zm6 6h-4v-4h4v4z"/></svg><span class="side-menu__label">Widgets</span><span class="badge bg-warning text-dark" id="bg-side-text">Hot</span></a>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" opacity=".3"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="map-leaflet.html">Mapel Maps</a></li>
                <li><a class="slide-item" href="map-vector.html">Vector Maps</a></li>
              </ul>
            </li>
            <li class="side-item side-item-category">Pages</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g><rect fill="none"/></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></g></svg><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="profile.html">Profile</a></li>
                <li><a class="slide-item" href="editprofile.html">Edit-Profile</a></li>
                <li><a class="slide-item" href="invoice.html">Invoice</a></li>
                <li><a class="slide-item" href="pricing.html">Pricing</a></li>
                <li><a class="slide-item" href="gallery.html">Gallery</a></li>
                <li><a class="slide-item" href="todotask.html">Todotask</a></li>
                <li><a class="slide-item" href="faq.html">Faqs</a></li>
                <li><a class="slide-item" href="empty.html">Empty Page</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg><span class="side-menu__label">Utilities</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="background.html">Background</a></li>
                <li><a class="slide-item" href="border.html">Border</a></li>
                <li><a class="slide-item" href="display.html">Display</a></li>
                <li><a class="slide-item" href="flex.html">Flex</a></li>
                <li><a class="slide-item" href="height.html">Height</a></li>
                <li><a class="slide-item" href="margin.html">Margin</a></li>
                <li><a class="slide-item" href="padding.html">Padding</a></li>
                <li><a class="slide-item" href="position.html">Position</a></li>
                <li><a class="slide-item" href="width.html">Width</a></li>
                <li><a class="slide-item" href="extras.html">Extras</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg><span class="side-menu__label">Custom Pages</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="signin.html">Sign In</a></li>
                <li><a class="slide-item" href="signup.html">Sign Up</a></li>
                <li><a class="slide-item" href="forgot.html">Forgot Password</a></li>
                <li><a class="slide-item" href="reset.html">Reset Password</a></li>
                <li><a class="slide-item" href="lockscreen.html">Lockscreen</a></li>
                <li><a class="slide-item" href="underconstruction.html">UnderConstruction</a></li>
                <li><a class="slide-item" href="404.html">404 Error</a></li>
                <li><a class="slide-item" href="500.html">500 Error</a></li>
              </ul>
            </li>
            <li class="slide ">
              <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg><span class="side-menu__label">Submenus</span><i class="angle fe fe-chevron-down"></i></a>
              <ul class="slide-menu">
                <li><a class="slide-item" href="#">Level1</a></li>
                <li class="sub-slide">
                  <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Level2</span><i class="sub-angle fe fe-chevron-down"></i></a>
                  <ul class="sub-slide-menu">
                    <li><a class="sub-slide-item" href="#">Level01</a></li>
                    <li><a class="sub-slide-item" href="#">Level02</a></li>
                    <li class="sub-slide-sub">
                      <a class="sub-side-menu__item sub-slide-item" data-bs-toggle="sub-slide-sub" href="#"><span class="sub-side-menu__label">Level03</span><i class="sub-angle fe fe-chevron-down"></i></a>
                      <ul class="sub-slide-menu-sub">
                        <li><a class="sub-slide-item" href="#">Level11</a></li>
                        <li><a class="sub-slide-item" href="#">Level2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </aside>
      <!-- main-sidebar -->
         <!-- main-content -->
      <div class="main-content app-content">

      <!-- main-header -->
      <div class="main-header sticky side-header nav nav-item">
        <div class="container-fluid">
          <div class="main-header-left ">
            <div class="responsive-logo">
              <a href="index.html"><img src="{{ asset('assetss/img/brand/logo.png')}}" class="logo-1"
                  alt="logo"></a>
              <a href="index.html"><img src="{{ asset('assetss/img/brand/logo-white.png')}}" class="dark-logo-1"
                  alt="logo"></a>
              <a href="index.html"><img src="{{ asset('assetss/img/brand/favicon.png')}}" class="logo-2"
                  alt="logo"></a>
              <a href="index.html"><img src="{{asset('assetss/img/brand/favicon-white.png')}}" class="dark-logo-2"
                  alt="logo"></a>
            </div>
            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
              <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
              <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
            </div>
            <div class="main-header-center ms-3 d-sm-none d-md-none d-lg-block">
              <input class="form-control" placeholder="Search for anything..." type="search"> <button
                class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
            </div>
          </div>
          <div class="main-header-right">
            <ul class="nav nav-item  navbar-nav-right ms-auto">
              <li class="nav">
                  <div class="dropdown nav-itemd-none d-md-flex">
                    <a href="#" class="d-flex  nav-item country-flag1"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="avatar country-Flag me-0 align-self-center bg-transparent"><img
                          src="{{asset('assetss/img/flags/us_flag.jpg')}}" alt="img"></span>
                      <div class="my-auto">
                        <strong class="me-2 ms-2 my-auto">English</strong>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow"
                      x-placement="bottom-end">
                      <a href="#" class="dropdown-item d-flex ">
                        <span class="avatar  me-3 align-self-center bg-transparent"><img
                            src="{{asset('assetss/img/flags/french_flag.jpg')}}" alt="img"></span>
                        <div class="d-flex">
                          <span class="mt-2">French</span>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex">
                        <span class="avatar  me-3 align-self-center bg-transparent"><img
                            src="{{asset('assetss/img/flags/germany_flag.jpg')}}" alt="img"></span>
                        <div class="d-flex">
                          <span class="mt-2">Germany</span>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex">
                        <span class="avatar me-3 align-self-center bg-transparent"><img
                            src="{{asset('assetss/img/flags/italy_flag.jpg')}}" alt="img"></span>
                        <div class="d-flex">
                          <span class="mt-2">Italy</span>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex">
                        <span class="avatar me-3 align-self-center bg-transparent"><img
                            src="{{asset('assetss/img/flags/russia_flag.jpg')}}" alt="img"></span>
                        <div class="d-flex">
                          <span class="mt-2">Russia</span>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex">
                        <span class="avatar  me-3 align-self-center bg-transparent"><img
                            src="{{asset('assetss/img/flags/spain_flag.jpg')}}" alt="img"></span>
                        <div class="d-flex">
                          <span class="mt-2">spain</span>
                        </div>
                      </a>
                    </div>
                  </div>
              </li>

              <li class="nav-link" id="bs-example-navbar-collapse-1">
                <form class="navbar-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="reset" class="btn btn-default">
                        <i class="fas fa-times"></i>
                      </button>
                      <button type="submit" class="btn btn-default nav-link resp-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-search">
                          <circle cx="11" cy="11" r="8"></circle>
                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                      </button>
                    </span>
                  </div>
                </form>
              </li>

              <li class="dropdown nav-item main-header-message ">
                <a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                    class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-mail">
                    <path
                      d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                    </path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg><span class=" pulse-danger"></span></a>
                <div class="dropdown-menu">
                  <div class="menu-header-content bg-primary text-start">
                    <div class="d-flex">
                      <h6 class="dropdown-title mb-1 tx-15 text-white fw-semibold">Messages</h6>
                      <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">Mark
                        All Read</span>
                    </div>
                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have
                      1 unread message(s)</p>
                  </div>
                  <div class="main-message-list chat-scroll">
                    <a href="#" class="p-3 d-flex border-bottom">
                      <div class="  drop-img  cover-image  "
                        data-bs-image-src="{{ asset('assetss/img/faces/6.jpg')}}">
                        <span class="avatar-status bg-teal"></span>
                      </div>
                      <div class="wd-90p">
                        <div class="d-flex">
                          <h5 class="mb-1 name">Platform Admin </h5>
                        </div>
                        <p class="mb-0 desc">Welcome to Elshadai G.T INVESTMENTS</p>
                        <p class="time mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
                      </div>
                    </a>
                  
                  </div>
                 
                </div>
              </li>

              <li class="dropdown nav-item main-header-notification">
                <a class="new nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                  </svg><span class=" pulse"></span></a>
                <div class="dropdown-menu">
                  <div class="menu-header-content bg-primary text-start">
                    <div class="d-flex">
                      <h6 class="dropdown-title mb-1 tx-15 text-white fw-semibold">Notifications
                      </h6>
                      <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">Mark
                        All Read</span>
                    </div>
                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have
                      1 unread Notification(s)</p>
                  </div>
                  <div class="main-notification-list Notification-scroll">
                    <a class="d-flex p-3 border-bottom" href="#">
                      <div class="notifyimg bg-pink">
                        <i class="la la-file-alt text-white"></i>
                      </div>
                      <div class="ms-3">
                        <h5 class="notification-label mb-1">Account Created</h5>
                        <div class="notification-subtext">{{Auth::user()->created_at}}</div>
                      </div>
                      <div class="ms-auto">
                        <i class="las la-angle-right text-end text-muted"></i>
                      </div>
                    </a>
                    
                    
                  </div>
                  <div class="dropdown-footer">
                    <a href="">VIEW ALL</a>
                  </div>
                </div>
              </li>

              <li class="nav-item full-screen fullscreen-button">
                <a class="new nav-link full-screen-link" href="#"><svg
                    xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-maximize">
                    <path
                      d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                    </path>
                  </svg></a>
              </li>

              <li class="dropdown main-profile-menu nav nav-item nav-link">
                <a class="profile-user d-flex" href=""><img alt=""
                    src="{{ asset('assetss/img/faces/6.jpg')}}"></a>
                <div class="dropdown-menu">
                  <div class="main-header-profile bg-primary p-3">
                    <div class="d-flex wd-100p">
                      <div class="main-img-user"><img alt="" src="{{ asset('assetss/img/faces/6.jpg')}}"
                          class=""></div>
                      <div class="ms-3 my-auto">
                        <h6>{{Auth::user()->username}}</h6><span>Member</span>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
                  <a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
                  <a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
                  <a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
                  <a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account
                    Settings</a>
                  <a class="dropdown-item" href="/logout"><i class="bx bx-log-out"></i> Sign
                    Out</a>
                </div>
              </li>
              
              <li class="dropdown main-header-message right-toggle">
                <a class="nav-link pe-0" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
                  <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      @yield('content')

    </div>

      <!-- Sidebar-right-->
      <div class="sidebar sidebar-right sidebar-animate">
        <div class="panel panel-primary card mb-0 box-shadow">
          <div class="tab-menu-heading border-0 p-3">
            <div class="card-title mb-0">Notifications</div>
            <div class="card-options ms-auto">
              <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
            </div>
          </div>
          <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <div class="tabs-menu ">
              <!-- Tabs -->
              <ul class="nav panel-tabs">
                <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="ion ion-md-chatboxes tx-18 me-2"></i> Chat</a></li>
                <li><a href="#side2" data-bs-toggle="tab"><i class="ion ion-md-notifications tx-18  me-2"></i> Notifications</a></li>
                <li><a href="#side3" data-bs-toggle="tab"><i class="ion ion-md-contacts tx-18 me-2"></i> Friends</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane active " id="side1">
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-primary brround avatar-md">CH</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>New Websites is Created</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">30 mins ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-danger brround avatar-md">N</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare For the Next Project</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">2 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-info brround avatar-md">S</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Decide the live Discussion</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">3 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-warning brround avatar-md">K</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Meeting at 3:00 pm</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">4 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-success brround avatar-md">R</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">1 day ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-pink brround avatar-md">MS</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">1 day ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-purple brround avatar-md">L</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">45 minutes ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center p-3">
                  <div class="">
                    <span class="avatar bg-blue brround avatar-md">U</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">2 days ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="tab-pane  " id="side2">
                <div class="list-group list-group-flush ">
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Madeleine</strong> Hey! there I' am available....
                      <div class="small text-muted">
                        3 hours ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/1.jpg"></span>
                    </div>
                    <div class="ms-3">
                      <strong>Anthony</strong> New product Launching...
                      <div class="small text-muted">
                        5 hour ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> New Schedule Realease......
                      <div class="small text-muted">
                        45 minutes ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Madeleine</strong> Hey! there I' am available....
                      <div class="small text-muted">
                        3 hours ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/11.jpg"></span>
                    </div>
                    <div class="ms-3">
                      <strong>Anthony</strong> New product Launching...
                      <div class="small text-muted">
                        5 hour ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> New Schedule Realease......
                      <div class="small text-muted">
                        45 minutes ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> Hey! there I' am available....
                      <div class="small text-muted">
                        12 minutes ago
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane  " id="side3">
                <div class="list-group list-group-flush ">
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/11.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/13.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/4.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/7.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/2.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/11.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/9.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/4.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/Sidebar-right-->

      <!-- Message Modal -->
      <div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-right chatbox" role="document">
          <div class="modal-content chat border-0">
            <div class="card overflow-hidden mb-0 border-0">
              <!-- action-header -->
              <div class="action-header clearfix">
                <div class="float-start hidden-xs d-flex ms-2">
                  <div class="img_cont me-3">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
                  </div>
                  <div class="align-items-center mt-2">
                    <h4 class="text-white mb-0 fw-semibold">Daneil Scott</h4>
                    <span class="dot-label bg-success"></span><span class="me-3 text-white">online</span>
                  </div>
                </div>
                <ul class="ah-actions actions align-items-center">
                  <li class="call-icon">
                    <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#audiomodal">
                      <i class="si si-phone"></i>
                    </a>
                  </li>
                  <li class="video-icon">
                    <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#videomodal">
                      <i class="si si-camrecorder"></i>
                    </a>
                  </li>
                  <li class="dropdown">
                    <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="si si-options-vertical"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><i class="fa fa-user-circle"></i> View profile</li>
                      <li><i class="fa fa-users"></i>Add friends</li>
                      <li><i class="fa fa-plus"></i> Add to group</li>
                      <li><i class="fa fa-ban"></i> Block</li>
                    </ul>
                  </li>
                  <li>
                    <a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="si si-close text-white"></i></span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- action-header end -->

              <!-- msg_card_body -->
              <div class="card-body msg_card_body">
                <div class="chat-box-single-line">
                  <abbr class="timestamp">February 1st, 2019</abbr>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Hi, how are you Jenna Side?
                    <span class="msg_time">8:40 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end ">
                  <div class="msg_cotainer_send">
                    Hi Connor Paige i am good tnx how about you?
                    <span class="msg_time_send">8:55 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start ">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    I am good too, thank you for your chat template
                    <span class="msg_time">9:00 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end ">
                  <div class="msg_cotainer_send">
                    You welcome Connor Paige
                    <span class="msg_time_send">9:05 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start ">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken  born and I will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start ">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken  born and I will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start ">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken  born and I will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Okay Bye, text you later..
                    <span class="msg_time">9:12 AM, Today</span>
                  </div>
                </div>
              </div>
              <!-- msg_card_body end -->
              <!-- card-footer -->
              <div class="card-footer">
                <div class="msb-reply d-flex">
                  <div class="input-group">
                    <input type="text" class="form-control " placeholder="Typing....">
                    <div class="input-group-text ">
                      <button type="button" class="btn btn-primary ">
                        <i class="far fa-paper-plane" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div><!-- card-footer end -->
            </div>
          </div>
        </div>
      </div>

      <!--Video Modal -->
      <div id="videomodal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark border-0 text-white">
            <div class="modal-body mx-auto text-center p-7">
              <h5>Valex Video call</h5>
              <img src="../../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
              <h4 class="mb-1 fw-semibold">Daneil Scott</h4>
              <h6>Calling...</h6>
              <div class="mt-5">
                <div class="row">
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle mb-0 me-3" href="#">
                      <i class="fas fa-video-slash"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="#" data-bs-dismiss="modal" aria-label="Close">
                      <i class="fas fa-phone bg-danger text-white"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle mb-0 me-3" href="#">
                      <i class="fas fa-microphone-slash"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div><!-- modal-body -->
          </div>
        </div><!-- modal-dialog -->
      </div><!-- modal -->

      <!-- Audio Modal -->
      <div id="audiomodal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content border-0">
            <div class="modal-body mx-auto text-center p-7">
              <h5>Valex Voice call</h5>
              <img src="../../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
              <h4 class="mb-1  fw-semibold">Daneil Scott</h4>
              <h6>Calling...</h6>
              <div class="mt-5">
                <div class="row">
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle mb-0 me-3" href="#">
                      <i class="fas fa-volume-up bg-light text-dark"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="#" data-bs-dismiss="modal" aria-label="Close">
                      <i class="fas fa-phone text-white bg-success"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a class="icon icon-shape  rounded-circle mb-0 me-3" href="#">
                      <i class="fas fa-microphone-slash bg-light text-dark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div><!-- modal-body -->
          </div>
        </div><!-- modal-dialog -->
      </div><!-- modal -->

      <!-- Footer opened -->
      <div class="main-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>Copyright © 2021 <a href="#">ELSHADAI GOLDEN TRADERS INVESTMENT</a>. Designed by <a href="https://elshadaigtinvestment.org/">ELSHADAI GOLDEN TRADERS INVESTMENT</a> All rights reserved.</span>
        </div>
      </div>
      <!-- Footer closed -->

    </div>


    <!-- End Page -->


    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('assetss/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('assetss/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('assetss/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('assetss/plugins/ionicons/ionicons.js')}}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assetss/plugins/moment/moment.js')}}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('assetss/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assetss/plugins/raphael/raphael.min.js')}}"></script>

    <!-- Internal Piety js -->
    <script src="{{ asset('assetss/plugins/peity/jquery.peity.min.js')}}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assetss/plugins/rating/jquery.rating-stars.js')}}"></script>
    <script src="{{ asset('assetss/plugins/rating/jquery.barrating.js')}}"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('assetss/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assetss/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

    <!-- Sidemenu js-->
    <script src="{{ asset('assetss/plugins/sidebar/sidebar.js')}}"></script>
    <script src="{{ asset('assetss/plugins/sidebar/sidebar-custom.js')}}"></script>


    <!-- Left-menu js-->
    <script src="{{ asset('assetss/plugins/side-menu/sidemenu.js')}}"></script>

    <!-- Eva-icons js -->
    <script src="{{ asset('assetss/js/eva-icons.min.js')}}"></script>

    <!--Internal Apexchart js-->
    <!-- <script src="{{ asset('assetss/js/apexcharts.js')}}"></script> -->

    <!-- Horizontalmenu js-->
    <script src="{{ asset('assetss/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assetss/js/sticky.js')}}"></script>

    <!-- Internal Map -->
    <script src="{{ asset('assetss/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('assetss/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <!-- Internal Chart js -->
    <script src="{{ asset('assetss/plugins/chart.js/Chart.bundle.min.js')}}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('assetss/js/index.js')}}"></script>
    <script src="{{ asset('assetss/js/jquery.vmap.sampledata.js')}}"></script>

    <!-- custom js -->
    <script src="{{ asset('assetss/js/custom.js')}}"></script>
    <script src="{{ asset('assetss/js/jquery.vmap.sampledata.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>