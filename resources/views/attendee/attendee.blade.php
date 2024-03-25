<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Eventina</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
    {{-- <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="../assets/vendor/@fontawesome/css/all.min.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
</head>

<body class="  ">
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-sidebar  sidebar-default  ">
            <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
                <a href="../backend/index.html" class="header-logo">
                    <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img"
                        alt="logo">
                    <span>Eventina</span>
                </a>
                <div class="side-menu-bt-sidebar-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="side-menu">
                        <li class="active sidebar-layout">
                            <a href="home" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </i>
                                <span class="ml-2">{{ __('localization.home') }}</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="event" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                                        <path
                                            d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14" />
                                    </svg>
                                </i><span class="ml-2">{{ __('localization.events') }}</span>
                            </a>
                        </li>
                        @can('isUser')
                            <li class=" sidebar-layout">
                                <a href="myevent" class="svg-icon">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                            <path
                                                d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                        </svg>
                                    </i><span class="ml-2">{{ __('localization.my_events') }}</span>
                                </a>
                            </li>
                            <li class=" sidebar-layout">
                                <a href="profile" class="svg-icon">
                                    <i class="">
                                        <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i><span class="ml-2">{{ __('localization.profile') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </nav>
                <div class="pt-5 pb-5"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="side-menu-bt-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">

                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../assets/images/Flag/{{Lang::getLocale()}}.png" class="img-fluid rounded-circle"
                                            alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                                        <span class="bg-primary"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0 border-0">
                                            <div class=" p-0 ">
                                                <ul class="dropdown-menu-1 list-group list-group-flush">
                                                    <li class="dropdown-item-1 list-group-item px-2"><a
                                                            class="p-0 language-link" href="#"
                                                            data-lang="en"><img
                                                                src="../assets/images/Flag/en.png" alt="img-flag"
                                                                class="img-fluid mr-2"
                                                                style="width: 15px;height: 15px;min-width: 15px;" />English</a>
                                                    </li>
                                                    <li class="dropdown-item-1 list-group-item px-2"><a
                                                            class="p-0 language-link" href="#"
                                                            data-lang="sp"><img
                                                                src="../assets/images/Flag/sp.png" alt="img-flag"
                                                                class="img-fluid mr-2"
                                                                style="width: 15px;height: 15px;min-width: 15px;" />Spanish</a>
                                                    </li>
                                                    <li class="dropdown-item-1 list-group-item px-2"><a
                                                        class="p-0 language-link" href="#"
                                                        data-lang="ar"><img
                                                            src="../assets/images/Flag/ar.png" alt="img-flag"
                                                            class="img-fluid mr-2"
                                                            style="width: 15px;height: 15px;min-width: 15px;" />Arabic</a>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @can('isUser')
                                    <li class="nav-item nav-icon search-content">
                                        <a href="#" class="search-toggle rounded" id="dropdownSearch"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-icon text-secondary" id="h-suns" height="25"
                                                width="25" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </a>
                                        <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                            aria-labelledby="dropdownSearch">
                                            <form action="#" class="searchbox p-2">
                                                <div class="form-group mb-0 position-relative">
                                                    <input type="text" class="text search-input font-size-12"
                                                        placeholder="type here to search...">
                                                    <a href="#" class="search-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class=""
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="../assets/images/user/1.jpg" class="img-fluid avatar-rounded"
                                                alt="user">
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <li class="dropdown-item  d-flex svg-icon" id="logoutBtn">
                                                <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                </svg>
                                                <a href="">{{ __('localization.logout') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endcan
                                @cannot('isUser')
                                    <li>
                                        <a href="login"><button type="button"
                                                class="btn btn-primary rounded-pill mt-2">{{ __('localization.log_in') }}</button></a>
                                    </li>
                                @endcannot
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="content-page">
        <div class="container-fluid">
            <main>
                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="fw-light">{{ __('localization.social_springboard') }}</h1>
                            <p class="lead text-body-secondary">{{ __('localization.hobby_description') }}
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary my-2">{{ __('localization.get_start') }}</a>
                                <a href="#" class="btn btn-secondary my-2">{{ __('localization.explore') }}</a>
                            </p>
                        </div>
                    </div>
                </section>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">{{ __('localization.top_selling_events') }}</h4>
                        </div>
                        <div class="header-action">
                            <button type="button"
                                class="btn btn-primary mt-2 seeAllEventsBtn">{{ __('localization.see_all_events') }}</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="album py-5 bg-body-tertiary">
                            <div class="container">

                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="topsellingcard">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">{{ __('localization.upcoming_events') }}</h4>
                        </div>
                        <div class="header-action">
                            <button type="button"
                                class="btn btn-primary mt-2 seeAllEventsBtn">{{ __('localization.see_all_events') }}</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="album py-5 bg-body-tertiary">
                            <div class="container">

                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="upcommingcard">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">{{ __('localization.event_categories') }}</h4>
                        </div>
                        <div class="header-action">
                            <button type="button"
                                class="btn btn-primary mt-2 seeAllEventsBtn">{{ __('localization.see_all_events') }}</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="album py-5 bg-body-tertiary">
                            <div class="container">

                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="category">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var seeAllEventsButtons = document.getElementsByClassName("seeAllEventsBtn");

            // Loop through each button and add click event listener
            for (var i = 0; i < seeAllEventsButtons.length; i++) {
                seeAllEventsButtons[i].addEventListener("click", function() {
                    // Redirect to the events page
                    window.location.href =
                        "/event"; // Change "/events" to the actual URL of your events page
                });
            }
            // Fetch events from API
            $.ajax({
                url: 'api/topevents',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    // Assuming the data returned from the server is in JSON format
                    // Iterate over the data and populate the cards
                    data.topsellingevents.forEach(function(event) {
                        // console.log(event);
                        $('#topsellingcard').append(`
                    <div class="col">
          <div class="card shadow-sm">
            <a href="#!">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp"
      alt="Card image cap">
            <div class="card-body">
                    <h4 class="card-title">${event.Title}</h4>
    </a>
              <p class="card-text">${event.Category}</p>
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text"><i class="fas fa-location-dot"></i>  ${event.Location}</p>
                <small class="text-body-secondary">₹${event.RegistrationFee}</small>
              </div>
            </div>
          </div>
        </div>
                    `);
                    });
                    data.upcommingevents.forEach(function(event) {
                        // console.log(event);
                        $('#upcommingcard').append(`
                        <div class="col">
          <div class="card shadow-sm">
            <a href="#!">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp"
      alt="Card image cap">
            <div class="card-body">
                    <h4 class="card-title">${event.Title}</h4>
    </a>
              <p class="card-text">${event.Category}</p>
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text"><i class="fas fa-location-dot"></i>  ${event.Location}</p>
                <small class="text-body-secondary">₹${event.RegistrationFee}</small>
              </div>
            </div>
          </div>
        </div>
                    `);
                    });
                    data.categories.forEach(function(event) {
                        // console.log(event);
                        $('#category').append(`
                        <div class="col-md-6 col-lg-4 col-sm-6">
               <div class="card bg-dark text-white">
                  <img src="../assets/img/category/${event.CategoryImage}" class="card-img" alt="category image">
                  <div class="card-img-overlay">
                     <h4 class="card-title text-white">${event.CategoryName}</h4>
                  </div>
               </div>
            </div>
         </div>
                    `);
                    });
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
            $('#logoutBtn').click(function(event) {
                event.preventDefault(); // Prevent the default link behavior

                // Get the token from localStorage
                var token = localStorage.getItem('token');
                console.log(token);
                // Make AJAX request
                $.ajax({
                    url: 'api/logout',
                    type: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + token,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status == true) {
                            localStorage.removeItem('token');
                            window.location.href = response.redirect;
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(xhr.responseText);
                    }
                });
            });
            $(".language-link").click(function(e) {
                e.preventDefault();
                var lang = $(this).data('lang');
                // Send AJAX request
                $.ajax({
                    url: '/lang/' + lang, // Concatenate lang variable into the URL string
                    method: 'get',
                    success: function(response) {
                        // Handle response if needed
                        console.log('Language changed successfully');
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });

        });
    </script>
    <!-- Wrapper End-->
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <script src="../assets/js/sidebar.js"></script>

    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    <script src="../assets/js/charts/01.js"></script>
    <script src="../assets/js/charts/02.js"></script>

    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>

    <!-- Emoji picker -->
    <script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script>


    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
</body>

</html>
