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
                        <li class="sidebar-layout">
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
                        <li class="active sidebar-layout">
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
                        <li class=" sidebar-layout">
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
                                <h4 class="card-title">{{ __('localization.categories')}}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="table" class="table-editable">
                                <span class="float-right mb-3 mr-2">
                                    <button class="btn btn-sm bg-primary" data-toggle="modal"
                                        data-target="#addmodal"><i class="ri-add-fill"><span>{{ __('localization.add_new')}}</span></i>
                                    </button>
                                </span>
                                <table id="category-table"
                                    class="table data-table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>{{ __('localization.name')}}</th>
                                            <th>{{ __('localization.description')}}</th>
                                            <th>{{ __('localization.thumbnail')}}</th>
                                            <th>{{ __('localization.status')}}</th>
                                            <th>{{ __('localization.action')}}</th>
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
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true"
                id="viewmodal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('localization.category_details') }}</h5>
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
                                                        class="rounded-4 fit" id="viewcategory-image"
                                                        src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp" />
                                                </a>
                                            </div>
                                        </aside>
                                        <main class="col-lg-6">
                                            <div class="ps-lg-3">
                                                <h4 class="title text-dark" id="viewtitle">
                                                    {{ __('localization.title') }}
                                                </h4>
                                                <br>
                                                <p id="viewdescription">
                                                    {{ __('localization.description') }}
                                                </p>
                                                <hr />
                                                <div class="row">
                                                    <dt class="col-3">{{ __('localization.status') }}:</dt>
                                                    <dd class="col-9" id="viewstatus"></dd>
                                                    <br>
                                                    <br>
                                                    <dt class="col-3">{{ __('localization.create_at') }}:</dt>
                                                    <dd class="col-9" id="viewcreateat"></dd>
                                                </div>

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
                            <h5 class="modal-title">{{ __('localization.edit_category')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-block">
                                <div class="card-body">
                                    <form id="categoryForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <!-- Name -->
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault01">{{ __('localization.category_name')}}</label>
                                                <input type="text" name="categoryname" class="form-control"
                                                    id="validationDefault01" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault02">{{ __('localization.description')}}</label>
                                                <input type="text" name="categorydescription" class="form-control"
                                                    id="validationDefault02" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault04">{{ __('localization.status')}}</label>
                                                <select class="form-control" name="categorystatus"
                                                    id="validationDefault04" required>
                                                    <option selected disabled value="">{{ __('localization.choose')}}</option>
                                                    <option>{{ __('localization.active')}}</option>
                                                    <option>{{ __('localization.inactive')}}</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p>{{ __('localization.image')}}</p>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                        name="categoryimage" id="currentImage">
                                                    <label class="custom-file-label" for="customFile">{{ __('localization.choose_file')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">{{ __('localization.save_changes')}}</button>
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
                            <h5 class="modal-title">{{ __('localization.delete')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{ __('localization.areYouSureYouWantToDelete')}}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('localization.close')}}</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete">{{ __('localization.delete')}}</button>
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
                            <h5 class="modal-title">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-block">
                                <div class="card-body">
                                    <form id="addcategoryForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <!-- Name -->
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault01">Category name</label>
                                                <input type="text" name="categoryname" class="form-control"
                                                    id="validationDefault01" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault02">Description</label>
                                                <input type="text" name="categorydescription" class="form-control"
                                                    id="validationDefault02" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault04">Status</label>
                                                <select class="form-control" name="categorystatus"
                                                    id="validationDefault04" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option>active</option>
                                                    <option>inactive</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p>Image</p>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                        name="categoryimage" id="currentImage" required>
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
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
            // Fetch events from API
            $.ajax({
                url: 'api/getcategory',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Clear existing table data
                    $('#category-table').DataTable().clear().draw();

                    // Populate the table with events
                    $.each(response, function(index, category) {
                        $('#category-table').DataTable().row.add([
                            category.CategoryName,
                            category.CategoryDescription,
                            category.CategoryImage,
                            category.CategoryStatus,
                            '<ul class="list-inline m-0"><li class="list-inline-item"><button class="btn btn-primary btn-sm rounded-0 view-category" type="button" data-id="' +
                            category.CategoryID +
                            '" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button></li><li class="list-inline-item"><button class="btn btn-success btn-sm rounded-0 edit-category" type="button" data-id="' +
                            category.CategoryID +
                            '" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></li><li class="list-inline-item"><button class="btn btn-danger btn-sm rounded-0 delete-category" type="button" data-id="' +
                            category.CategoryID +
                            '" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></li></ul>',
                        ]).draw(false);
                    });
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });

            // View modal click event
            $('#category-table').on('click', '.view-category', function() {
                var categoryId = $(this).data('id');
                $('#viewmodal').modal('show');
                $.ajax({
                    url: 'api/getSpecificCategory?categoryId=' + categoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Handle successful response
                        console.log(response);
                        // Here you can populate the category details in your HTML elements
                        $('#viewtitle').text(response.CategoryName);
                        $('#viewdescription').text(response.CategoryDescription);
                        $('#viewstatus').text(response.CategoryStatus);
                        $('#viewcreateat').text(response.created_at);
                        $('#viewcategory-image').attr('src', "../assets/img/category/" +
                            response.CategoryImage);
                        // Populate other category details as needed
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
                // Handle view modal content based on categoryId
                // Example: populateViewModal(categoryId);
            });

            // Edit modal click event
            $('#category-table').on('click', '.edit-category', function() {
                var categoryId = $(this).data('id');
                $('#editmodal').modal('show');

                function populateForm() {
                    // Make an AJAX request to fetch previous values of the category
                    $.ajax({
                        url: 'api/getSpecificCategory?categoryId=' +
                            categoryId, // Replace '{category_id}' with the actual category ID
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            // Populate form fields with previous values
                            $('#validationDefault01').val(response.CategoryName);
                            $('#validationDefault02').val(response.CategoryDescription);
                            $('#validationDefault04').val(response.CategoryStatus);
                            // Handle image population if needed
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching category details:', error);
                        }
                    });
                }

                // Initialize form with previous values
                populateForm();

                // Submit form using AJAX
                $('#categoryForm').submit(function(event) {
                    event.preventDefault(); // Prevent default form submission
                    var formData = $(this).serialize();
                    var Id = categoryId; // Replace '{category_id}' with the actual category ID
                    formData += '&categoryId=' + encodeURIComponent(Id);
                    console.log(formData);
                    $.ajax({
                        url: 'api/updatecategory',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            // Handle success response
                            console.log('Category updated successfully');
                            $('#editmodal').modal('hide');
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
                        }
                    });
                });
            });

            // Delete modal click event
            $('#category-table').on('click', '.delete-category', function() {
                var categoryId = $(this).data('id');
                $('#deletemodal').modal('show');
                $('#confirmDelete').click(function() {
                    // Make an AJAX request to your API endpoint to delete the category
                    $.ajax({
                        url: '/api/deletecategory?categoryId=' +
                            categoryId, // Replace '/api/deleteCategory' with your actual delete API endpoint
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
                        }
                    });
                    $('#deletemodal').modal('hide');
                });
                // Handle delete modal content based on categoryId
                // Example: populateDeleteModal(categoryId);
            });

            $('#addcategoryForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = new FormData(this); // Use FormData to include files
                console.log(formData);
                $.ajax({
                    url: 'api/addcategory',
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
