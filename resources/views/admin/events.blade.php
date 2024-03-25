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
    <link rel="stylesheet" href="../assets/css/toast.css">
</head>

<body class="  ">
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-sidebar  sidebar-default  ">
            <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
                <a href="dashboard" class="header-logo">
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
                            <a href="dashboard" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </i>
                                <span class="ml-2">{{ __('localization.dashboard') }}</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="categories" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                                        <path
                                            d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14" />
                                    </svg>
                                </i><span class="ml-2">{{ __('localization.categories') }}</span>
                            </a>
                        </li>
                        <li class="active sidebar-layout">
                            <a href="events" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                        <path
                                            d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                    </svg>
                                </i><span class="ml-2">{{ __('localization.events') }}</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="booking" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                        <path
                                            d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                        <path
                                            d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />
                                    </svg>
                                </i><span class="ml-2">{{ __('localization.booking') }}</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="users" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </i><span class="ml-2">{{ __('localization.users') }}</span>
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
                                        <li class="dropdown-item  d-flex svg-icon" id="logoutBtn">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <a>{{ __('localization.logout') }}</a>
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('localization.events') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="table" class="table-editable">
                                <span class="table-add float-right mb-3 mr-2">
                                    <button class="btn btn-sm bg-primary" data-toggle="modal"
                                        data-target="#addmodal"><i
                                            class="ri-add-fill"><span>{{ __('localization.add_new') }}</span></i>
                                    </button>
                                </span>
                                <table id="event-table"
                                    class="table data-table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>{{ __('localization.title') }}</th>
                                            <th>{{ __('localization.description') }}</th>
                                            <th>{{ __('localization.location') }}</th>
                                            <th>{{ __('localization.start_date') }}</th>
                                            <th>{{ __('localization.max_attendee') }}</th>
                                            <th>{{ __('localization.registration_fee') }}</th>
                                            <th>{{ __('localization.status') }}</th>
                                            <th style="width: 150px">{{ __('localization.action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="toastBox"></div>
                </div>
            </div>
            <!-- view modal -->
            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" id="eventModal"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('localization.event_details') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="py-5">
                                <div class="container">
                                    <div class="row gx-5">
                                        <aside class="col-lg-6">
                                            <div class="border rounded-4 mb-3 d-flex justify-content-center">
                                                <a data-fslightbox="mygalley" class="rounded-4" target="_blank"
                                                    data-type="image"
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
                                                    <dt class="col-3">{{ __('localization.start') }}:</dt>
                                                    <dd class="col-9" id="start">Regular</dd>

                                                    <dt class="col-3">{{ __('localization.end') }}:</dt>
                                                    <dd class="col-9" id="end">Brown</dd>

                                                    <dt class="col-3">{{ __('localization.ticket') }}:</dt>
                                                    <dd class="col-9" id="ticket"></dd>

                                                    <dt class="col-3">{{ __('localization.amount') }}:</dt>
                                                    <dd class="col-9" id="amount">Reebook</dd>
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
            <!-- edit modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true"
                id="editmodal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('localization.edit_event') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-block">
                                <div class="card-body">
                                    <form id="eventForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <!-- Title -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="validationDefault01">{{ __('localization.title') }}</label>
                                                <input type="text" name="title" class="form-control"
                                                    id="validationDefault01" value="Product Launch" required>
                                            </div>
                                            <!-- Description -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="validationDefault02">{{ __('localization.description') }}</label>
                                                <input type="text" name="description" class="form-control"
                                                    id="validationDefault02" value="Unveiling new products" required>
                                            </div>
                                            <!-- Start Date Time -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="startDateTime"></label>{{ __('localization.start_date_time') }}
                                                <input type="datetime-local" name="startDateTime"
                                                    class="form-control" id="startDateTime" value="2024-03-16T12:19"
                                                    required>
                                            </div>
                                            <!-- End Date Time -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="endDateTime">{{ __('localization.end_date_time') }}</label>
                                                <input type="datetime-local" name="endDateTime" class="form-control"
                                                    id="endDateTime" value="2024-10-30T13:00" required>
                                            </div>
                                            <!-- Location -->
                                            <div class="col-md-6 mb-3">
                                                <label for="location">{{ __('localization.location') }}</label>
                                                <input type="text" name="location" class="form-control"
                                                    id="location" value="Exhibition Hall" required>
                                            </div>
                                            <!-- Max Attendees -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="maxAttendees">{{ __('localization.max_attendees') }}</label>
                                                <input type="number" name="maxAttendees" class="form-control"
                                                    id="maxAttendees" value="300" required>
                                            </div>
                                            <!-- Registration Fee -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="registrationFee">{{ __('localization.registration_fee') }}</label>
                                                <input type="text" name="registrationFee" class="form-control"
                                                    id="registrationFee" value="50.00" required>
                                            </div>
                                            <!-- Status -->
                                            <div class="col-md-6 mb-3">
                                                <label for="status">{{ __('localization.status') }}</label>
                                                <select class="form-control" name="status" id="status" required>
                                                    <option selected disabled value="">
                                                        {{ __('localization.choose') }}</option>
                                                    <option value="draft">Draft</option>
                                                    <option value="published">Published</option>
                                                    <option value="canceled">Canceled</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="categorySelect">{{ __('localization.category') }}</label>
                                                <select class="form-control categorySelect" id="categoryname"
                                                    name="categoryname" required>
                                                    <option selected disabled value="">
                                                        {{ __('localization.choose') }}</option>
                                                </select>
                                            </div>
                                            <!-- Image -->
                                            <div class="col-md-6 mb-3">
                                                <label for="eventImage">{{ __('localization.image') }}</label>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="eventImage"
                                                        name="eventImage">
                                                    <label class="custom-file-label"
                                                        for="eventImage">{{ __('localization.choose_file') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary"
                                                type="submit">{{ __('localization.save_changes') }}</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- delete modal -->
            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true"
                id="deletemodal">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('localization.delete') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{ __('localization.areYouSureYouWantToDelete') }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ __('localization.close') }}</button>
                            <button type="button" class="btn btn-primary"
                                id="confirmDelete">{{ __('localization.delete') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true"
                id="addmodal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('localization.add_events') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-block">
                                <div class="card-body">
                                    <form id="addeventForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <!-- Title -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="validationDefault01">{{ __('localization.title') }}</label>
                                                <input type="text" name="title" class="form-control"
                                                    id="validationDefault01" required>
                                            </div>
                                            <!-- Description -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="validationDefault02">{{ __('localization.description') }}</label>
                                                <input type="text" name="description" class="form-control"
                                                    id="validationDefault02" required>
                                            </div>
                                            <!-- Start Date Time -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="startDateTime">{{ __('localization.start_date_time') }}</label>
                                                <input type="datetime-local" name="startDateTime"
                                                    class="form-control" id="startDateTime" required>
                                            </div>
                                            <!-- End Date Time -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="endDateTime">{{ __('localization.end_date_time') }}</label>
                                                <input type="datetime-local" name="endDateTime" class="form-control"
                                                    id="endDateTime" required>
                                            </div>
                                            <!-- Location -->
                                            <div class="col-md-6 mb-3">
                                                <label for="location">{{ __('localization.location') }}</label>
                                                <input type="text" name="location" class="form-control"
                                                    id="location" required>
                                            </div>
                                            <!-- Max Attendees -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="maxAttendees">{{ __('localization.max_attendee') }}</label>
                                                <input type="number" name="maxAttendees" class="form-control"
                                                    id="maxAttendees" required>
                                            </div>
                                            <!-- Registration Fee -->
                                            <div class="col-md-6 mb-3">
                                                <label
                                                    for="registrationFee">{{ __('localization.registration_fee') }}</label>
                                                <input type="text" name="registrationFee" class="form-control"
                                                    id="registrationFee" required>
                                            </div>
                                            <!-- Status -->
                                            <div class="col-md-6 mb-3">
                                                <label for="status">{{ __('localization.status') }}</label>
                                                <select class="form-control" name="status" id="status" required>
                                                    <option selected disabled value="">
                                                        {{ __('localization.choose') }}</option>
                                                    <option value="draft">{{ __('localization.status_draft') }}
                                                    </option>
                                                    <option value="published">
                                                        {{ __('localization.status_published') }}</option>
                                                    <option value="canceled">{{ __('localization.status_canceled') }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="categorySelect">{{ __('localization.category') }}</label>
                                                <select class="form-control categorySelect" id="categoryname"
                                                    name="categoryname" required>
                                                    <option selected disabled value="">
                                                        {{ __('localization.choose') }}</option>
                                                </select>
                                            </div>
                                            <!-- Image -->
                                            <div class="col-md-6 mb-3">
                                                <label for="eventImage">{{ __('localization.image') }}</label>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="eventImage"
                                                        name="eventImage">
                                                    <label class="custom-file-label"
                                                        for="eventImage">{{ __('localization.choose_file') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary"
                                                type="submit">{{ __('localization.save_changes') }}</button>
                                        </div>
                                    </form>
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
            let toastBox = document.getElementById("toastBox");

            function showToast(msg) {
                let toast = document.createElement("div");
                toast.classList.add("toast");
                toast.innerHTML = msg;
                toastBox.appendChild(toast);

                if (msg.includes('error')) {
                    toast.classList.add("error")
                }

                if (msg.includes("invalid")) {
                    toast.classList.add("invalid")
                }

                if (msg.includes("info")) {
                    toast.classList.add("info")
                }

                setTimeout(() => {
                    toast.remove();
                }, 3000)
            }
            // AJAX to fetch category names and populate the select element
            $(document).ready(function() {
                $.ajax({
                    url: 'api/getCategoryName',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Populate select element with category names
                        var categorySelect = $('.categorySelect');
                        $.each(response, function(index, category) {
                            categorySelect.append('<option value="' + category + '">' +
                                category + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching category names:', error);
                    }
                });
            });

            // Fetch events from API
            $.ajax({
                url: 'api/getAllEvents',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Clear existing table data
                    $('#event-table').DataTable().clear().draw();

                    // Populate the table with events
                    $.each(response, function(index, event) {
                        console.log(event);
                        $('#event-table').DataTable().row.add([
                            event.Title,
                            event.Description,
                            event.Location,
                            event.StartDateTime,
                            event.MaxAttendees,
                            event.RegistrationFee,
                            event.Status,
                            '<ul class="list-inline m-0"><li class="list-inline-item"><button class="btn btn-primary btn-sm rounded-0 view-event" type="button" data-id="' +
                            event.EventID +
                            '" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button></li><li class="list-inline-item"><button class="btn btn-success btn-sm rounded-0 edit-event" type="button" data-id="' +
                            event.EventID +
                            '" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></li><li class="list-inline-item"><button class="btn btn-danger btn-sm rounded-0 delete-event" type="button" data-id="' +
                            event.EventID +
                            '" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></li></ul>',
                        ]).draw(false);
                    });
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
            // View modal click event
            $('#event-table').on('click', '.view-event', function() {
                var eventId = $(this).data('id');

                // AJAX request to fetch full information of the event
                $.ajax({
                    url: 'api/singleEvent', // Replace with the actual URL to fetch event information
                    type: 'GET',
                    data: {
                        eventId: eventId
                    }, // Pass the event ID to the server
                    success: function(response) {

                        $('#eventModal').data('eventId', eventId);
                        $('#title').text(response.data.Title);
                        $('#location').text(response.data.Location);
                        $('#category').text(response.data.Category);
                        $('#description').text(response.data.Description);
                        $('#start').text(response.data.StartDateTime);
                        $('#end').text(response.data.EndDateTime);
                        $('#ticket').text(response.data.MaxAttendees - response.data
                            .CurrentAttendees);
                        $('#amount').text(response.data.RegistrationFee);

                        // Show the modal
                        $('#eventModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Failed to fetch event information. Please try again later.');
                    }
                });
                // Handle view modal content based on categoryId
                // Example: populateViewModal(categoryId);
            });

            // Edit modal click event
            $('#event-table').on('click', '.edit-event', function() {
                var eventId = $(this).data('id');
                $('#editmodal').modal('show');

                function populateForm() {
                    // Make an AJAX request to fetch previous values of the event
                    $.ajax({
                        url: 'api/singleEvent', // Replace '{event_id}' with the actual event ID
                        type: 'GET',
                        dataType: 'json',
                        data: {
                            eventId: eventId
                        },
                        success: function(response) {
                            console.log(response);
                            // Populate form fields with previous values
                            $('#validationDefault01').val(response.data.Title);
                            $('#validationDefault02').val(response.data.Description);
                            // Format start date and time
                            var startDate = new Date(response.data.StartDateTime);
                            var formattedStartDate = startDate.toISOString().slice(0,
                            16); // Format: YYYY-MM-DDTHH:MM
                            $('#startDateTime').val(formattedStartDate);
                            // Format end date and time
                            var endDate = new Date(response.data.EndDateTime);
                            var formattedEndDate = endDate.toISOString().slice(0,
                            16); // Format: YYYY-MM-DDTHH:MM
                            $('#endDateTime').val(formattedEndDate);
                            $('#location').val(response.data.Location);
                            $('#categoryname').val(response.data
                            .Category); // Setting category value
                            $('#maxAttendees').val(response.data.MaxAttendees);
                            $('#registrationFee').val(response.data.RegistrationFee);
                            $('#status').val(response.data.Status);
                            // Handle image population if needed
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching event details:', error);
                        }
                    });
                }


                // Initialize form with previous values
                populateForm();

                // Submit form using AJAX
                $('#eventForm').submit(function(event) {
                    event.preventDefault(); // Prevent default form submission

                    // Create a FormData object to handle file upload
                    var formData = new FormData($(this)[0]);

                    // Get event ID

                    // Append eventId to the formData
                    formData.append('eventId', eventId);

                    // Log the serialized form data for debugging
                    console.log(formData);

                    // Send AJAX request
                    $.ajax({
                        url: 'api/updateEvent',
                        type: 'POST',
                        data: formData,
                        // Required for file uploads
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $('#editmodal').modal('hide');
                            // Handle success response
                            console.log('Event updated successfully');
                            let successMsg =
                                '<i class="fa-solid fa-circle-check"></i> Success:' + response
                                .message;
                            showToast(successMsg);
                            setTimeout(function() {
                                window.location.reload(); // Reloads the page
                            }, 3000);

                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.error('Error updating event:', error);
                        }
                    });
                });


            });


            // Delete modal click event
            $('#event-table').on('click', '.delete-event', function() {
                var eventId = $(this).data('id');
                $('#deletemodal').modal('show');
                $('#confirmDelete').click(function() {
                    // Make an AJAX request to your API endpoint to delete the category
                    $.ajax({
                        url: '/api/deleteEvent?eventId=' +
                            eventId, // Replace '/api/deleteCategory' with your actual delete API endpoint
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // Handle success response
                            console.log('Category deleted successfully');
                            let successMsg =
                                '<i class="fa-solid fa-circle-check"></i> Success:' + response
                                .message;
                            showToast(successMsg);
                            setTimeout(function() {
                                window.location.reload(); // Reloads the page
                            }, 3000);

                            // Optionally, you can perform any other actions after successful deletion, such as updating the UI
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.error('Error deleting category:', error);
                            let errorMsg =
                            '<i class="fa-solid fa-circle-xmark error"></i> Error:'+xhr.responseJSON.message;
                        showToast(errorMsg);

                        }
                    });
                    $('#deletemodal').modal('hide');
                });
                // Handle delete modal content based on categoryId
                // Example: populateDeleteModal(categoryId);
            });

            $('#addeventForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = new FormData(this); // Use FormData to include files
                console.log(formData);
                $.ajax({
                    url: 'api/addEvent',
                    type: 'POST',
                    data: formData,
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as FormData will handle it
                    success: function(response) {
                        // Handle success response
                        console.log('Category updated successfully');
                        $('#addmodal').modal('hide');
                        let successMsg =
                                '<i class="fa-solid fa-circle-check"></i> Success:' + response
                                .message;
                            showToast(successMsg);
                            setTimeout(function() {
                                window.location.reload(); // Reloads the page
                            }, 3000);
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error('Error updating category:', error);
                        let errorMsg =
                            '<i class="fa-solid fa-circle-xmark error"></i> Error:'+xhr.responseJSON.message;
                        showToast(errorMsg);
                    }
                });
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
