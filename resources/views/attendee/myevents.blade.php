<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Eventina</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="../assets/vendor/@fontawesome/css/all.min.css">
    <style>
        .Wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .logoContainer {
            display: flex;
            align-items: center;
            padding: 9px 9px 9px 24px;
            background: #fff;
            border: 1.26923px solid #eaf1f5;
            box-sizing: border-box;
            box-shadow: 0 4px 12px rgb(86 141 187 / 12%);
            border-radius: 100px;
            width: 995px;
            height: 68px;
            border: 1px solid white;
        }

        #searchIcon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 8px
        }

        .sugginput {
            font-size: 15px;
            line-height: 22px;
            font-family: "Inter";
            color: #9098b5;
            font-weight: 400;
        }

        input::placeholder {
            color: #9098b5;

        }

        input,
        select {
            outline: none;
        }

        .pipe1 {
            background: #eaf1f5;
            border-radius: 2.53846px;
            width: 1px;
            height: 28px;
        }

        .search {
            padding: 11px 28px;
            font-weight: 600;
            font-size: 19px;
            line-height: 26px;
            background: #457eff;
            box-shadow: 0 5.07692px 12.6923px rgb(69 126 255 / 10%);
            border-radius: 100px;
            cursor: pointer;
            color: white;
            margin-left: 110px;
            border: none;
        }

        #input1 {
            width: 324px;
            height: 38px;
            border: none;
        }

        #input2 {
            width: 208px;
            height: 38px;
            border: none;
        }

        #input3 {
            /* width: 223px; */
            height: 40px;
            border: none;
        }

        #drpdwn {
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iNyIgdmlld0JveD0iMCAwIDEyIDciIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xMSAxTDYgNkwxIDAuOTk5OTk5IiBzdHJva2U9IiM0NDU1NzgiIHN0cm9rZS13aWR0aD0iMS43NSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=) no-repeat;
            background-position: center;
            display: inline-block;
            width: 24px;
            height: 24px;
        }

        .widget-container {
            display: grid;
            grid-template-columns: 30% 20% 50%;
            width: 65%;
            height: 174px;
            margin: auto;
            border: 1px dotted grey;
            margin-top: 25px;
            border-radius: 10px;
        }

        .wid-head-container {
            margin-top: 20px;
            margin-left: 25px;
            line-height: 45px;
        }

        .wid-head-container>div:first-child {
            font-weight: bold;
            font-size: 17px;
        }

        .widget-logo>div>img {
            width: 50px;
            height: 50px;
            margin-top: 20px;
        }

        .detail-container {
            margin-top: 20px;
            margin-left: -20px;

        }

        .detail-container>div:first-child {
            font-weight: bold;
        }

        .detail-container>div:nth-child(2) {
            color: #8299bd;
            padding-top: 5px;
            font-size: 13px;
        }

        .detail-container>a {
            display: inline-block;
            margin-top: 22px;
            color: white;
            background: #FF7555;
            border: none;
            border-radius: 25px;
            padding: 11px 20px;
            cursor: pointer;
            font-size: 17px;
            line-height: 22px;
            font-weight: 600;
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
                        <li class=" sidebar-layout">
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
                        <li class="active sidebar-layout">
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
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <img src="../assets/images/user/1.jpg" class="img-fluid avatar-rounded"
                                            alt="user">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item  d-flex svg-icon " id="logoutBtn">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <a href="../backend/auth-sign-in.html">{{ __('localization.logout') }}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('localization.events') }}</h4>
                    </div>
                </div>
                <div class="Wrapper">
                    <div>
                        <div class="logoContainer">
                            <i id="searchIcon" class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="{{ __('localization.enter_title') }}"
                                class="sugginput" id="input1">
                            <div class="pipe1"></div>
                            <input type="text" placeholder="{{ __('localization.enter_location') }}"
                                class="sugginput" id="input2">
                            <div class="pipe1"></div>
                            <select id="input3" class="sugginput">
                                <option value="" hidden>{{ __('localization.choose') }}</option>
                                <!-- Available Options -->
                                <option value="Business & Seminars">Business & Seminars</option>
                                <option value="Food & Drink">Food & Drink</option>
                                <option value="Music & Concerts">Music & Concerts</option>
                                <option value="Sports & Fitness">Sports & Fitness</option>
                                <option value="Science & Tech">Science & Tech</option>
                                <option value="Travel & Trekking">Travel & Trekking</option>
                                <option value="Charity & Non-profit">Charity & Non-profit</option>
                                <option value="Education & Classes">Education & Classes</option>
                                <option value="Yoga & Health">Yoga & Health</option>
                            </select>
                            <input type="submit" class="search" value="{{ __('localization.search') }}"
                                id="submitBtn">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="album py-5 bg-body-tertiary">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="myevents">
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination">

                                </ul>
                            </nav>
                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                                id="eventModal" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ __('localization.event_details') }}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <section class="py-5">
                                                <div class="container">
                                                    <div class="row gx-5">
                                                        <aside class="col-lg-6">
                                                            <div
                                                                class="border rounded-4 mb-3 d-flex justify-content-center">
                                                                <a data-fslightbox="mygalley" class="rounded-4"
                                                                    target="_blank" data-type="image"
                                                                    href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                                                                    <img style="max-width: 100%; max-height: 100vh; margin: auto;"
                                                                        class="rounded-4 fit"
                                                                        src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp" />
                                                                </a>
                                                            </div>
                                                        </aside>
                                                        <main class="col-lg-6">
                                                            <div class="ps-lg-3">
                                                                <h4 class="title text-dark" id="title">
                                                                    {{ __('localization.title') }}
                                                                </h4>
                                                                <div class="d-flex flex-row my-3">
                                                                    <div class="text-warning mb-1 me-2">
                                                                        <i class="fa-solid fa-location-dot"></i>
                                                                    </div>
                                                                    <span class="ml-1" id="location">
                                                                        {{ __('localization.location') }}</span>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <span id="category"
                                                                        class="h5">{{ __('localization.category') }}</span>
                                                                </div>

                                                                <p id="description">
                                                                    {{ __('localization.description') }}
                                                                </p>

                                                                <div class="row">
                                                                    <dt class="col-3">{{ __('localization.start') }}:
                                                                    </dt>
                                                                    <dd class="col-9" id="start"></dd>

                                                                    <dt class="col-3">{{ __('localization.end') }}:
                                                                    </dt>
                                                                    <dd class="col-9" id="end"></dd>

                                                                    <dt class="col-3">
                                                                        {{ __('localization.registered') }}:</dt>
                                                                    <dd class="col-9" id="reg"></dd>

                                                                    <dt class="col-3">
                                                                        {{ __('localization.quantity') }}:</dt>
                                                                    <dd class="col-9" id="quantity"></dd>
                                                                    <dt class="col-3">
                                                                        {{ __('localization.amount') }}:</dt>
                                                                    <dd class="col-9" id="amount"></dd>
                                                                </div>

                                                                <hr />
                                                            </div>
                                                        </main>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">{{ __('localization.close') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#eventcard', function() {
                // Get the event ID from the clicked card
                var AttendeeId = $(this).data('id');

                // AJAX request to fetch full information of the event
                $.ajax({
                    url: 'api/getSpecificMyEvent', // Replace with the actual URL to fetch event information
                    type: 'get',
                    data: {
                        attendeeId: AttendeeId
                    }, // Pass the event ID to the server
                    headers: {
                        'Authorization': 'Bearer ' + token,
                    },
                    success: function(response) {
                        console.log(response);
                        $('#title').text(response.event.Title);
                        $('#location').text(response.event.Location);
                        $('#category').text(response.event.Category);
                        $('#description').text(response.event.Description);
                        $('#start').text(response.event.StartDateTime);
                        $('#end').text(response.event.EndDateTime);
                        $('#reg').text(response.RegistrationDate);
                        $('#quantity').text(response.Quantity);
                        $('#amount').text(response.event.RegistrationFee * response.Quantity);

                        // Show the modal
                        $('#eventModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Failed to fetch event information. Please try again later.');
                    }
                });
            });
            var token = localStorage.getItem('token');
            // Function to fetch events from API based on page number and filters
            function fetchEvents(pageNumber, title, location, category) {
                $.ajax({
                    url: 'api/myEvents', // Adjust URL
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        page: pageNumber,
                        Title: title,
                        Location: location,
                        Category: category
                    },
                    headers: {
                        'Authorization': 'Bearer ' + token,
                    },
                    success: function(data) {
                        console.log(data);
                        $('#myevents').empty(); // Clear existing cards
                        data.data.forEach(function(event) {
                            $('#myevents').append(`
        <div class="col">
            <div class="card shadow-sm" id="eventcard" data-id="${event.AttendeeID}" data-toggle="modal" data-target=".bd-example-modal-xl"> <!-- Add data-id attribute with event ID and data-toggle and data-target -->
                <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">${event.event.Title}</h4>
                    <p class="card-text">${event.event.Category}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text"><i class="fas fa-location-dot"></i>  ${event.event.Location}</p>
                        <small class="text-body-secondary">₹${event.event.RegistrationFee}</small>
                    </div>
                </div>
            </div>
        </div>
    `);
                        });
                        updatePagination(data.last_page, pageNumber);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            }

            // Function to update pagination links
            function updatePagination(totalPages, currentPage) {
                $('.pagination').empty(); // Clear existing pagination links
                var paginationHtml = '';

                // Previous button
                if (currentPage > 1) {
                    paginationHtml += '<li class="page-item"><a class="page-link" href="#" data-page="' + (
                        currentPage - 1) + '">Previous</a></li>';
                } else {
                    paginationHtml += '<li class="page-item disabled"><span class="page-link">Previous</span></li>';
                }

                // Numbered pages
                for (var i = 1; i <= totalPages; i++) {
                    if (i === currentPage) {
                        paginationHtml +=
                            '<li class="page-item active" aria-current="page"><a class="page-link" href="#" data-page="' +
                            i + '">' + i + '<span class="sr-only">(current)</span></a></li>';
                    } else {
                        paginationHtml += '<li class="page-item"><a class="page-link" href="#" data-page="' + i +
                            '">' + i + '</a></li>';
                    }
                }

                // Next button
                if (currentPage < totalPages) {
                    paginationHtml += '<li class="page-item"><a class="page-link" href="#" data-page="' + (
                        currentPage + 1) + '">Next</a></li>';
                } else {
                    paginationHtml += '<li class="page-item disabled"><span class="page-link">Next</span></li>';
                }

                $('.pagination').html(paginationHtml);
            }

            // Initial fetch on page load (assuming you start with page 1 and no filters)
            fetchEvents(1);

            // Pagination click event
            $(document).on('click', '.pagination a.page-link', function(e) {
                e.preventDefault();
                var page = $(this).data('page'); // Get the page number from the data attribute
                fetchEvents(page);
            });

            // Search button click event
            $('#submitBtn').click(function(e) {
                e.preventDefault();
                var title = $('#input1').val();
                var location = $('#input2').val();
                var category = $('#input3').val();
                fetchEvents(1, title, location,
                category); // Fetch events with filters, starting from page 1
            });
            $('#logoutBtn').click(function(event) {
                event.preventDefault(); // Prevent the default link behavior

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
