<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="../assets/vendor/@fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/toast.css">
    <title>Eventina</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
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
                                <span class="ml-2">{{ __('localization.home')}}</span>
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
                                </i><span class="ml-2">{{ __('localization.events')}}</span>
                            </a>
                        </li>
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
                                </i><span class="ml-2">{{ __('localization.my_events')}}</span>
                            </a>
                        </li>
                        <li class="active sidebar-layout">
                            <a href="profile" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </i><span class="ml-2">{{ __('localization.profile')}}</span>
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
                                        <li class="dropdown-item  d-flex svg-icon "id="logoutBtn">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <a href="../backend/auth-sign-in.html">{{ __('localization.logout')}}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-block p-card">
                            <div class="profile-box">
                                <div class="profile-card rounded">
                                    <img src="../assets/images/user/1.jpg" alt="profile-bg"
                                        class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                                    <h3 id="fullname" class="font-600 text-white text-center mb-0"></h3>
                                    <p id="username" class="text-white text-center mb-5"></p>
                                </div>
                                <div class="pro-content rounded">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="p-icon mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                                width="20" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                            </svg>
                                        </div>
                                        <p id="email" class="mb-0 eml"></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="p-icon mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                                width="20" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                                            </svg>
                                        </div>
                                        <p id="phone" class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-block">
                            <div class="card-header d-flex justify-content-between pb-0">
                                <div class="header-title">
                                    <h4 class="card-title mb-0">{{ __('localization.about_me')}}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="userForm">
                                    @csrf
                                    <div class="form-row">
                                        <!-- First Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault01">{{ __('localization.first_name')}}</label>
                                            <input type="text" name="firstname" class="form-control"
                                                id="validationDefault01" required>
                                        </div>

                                        <!-- Last Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault02">{{ __('localization.last_name')}}</label>
                                            <input type="text" name="lastname" class="form-control"
                                                id="validationDefault02" required>
                                        </div>

                                        <!-- Username -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefaultUsername">{{ __('localization.username')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                </div>
                                                <input type="text" name="username" class="form-control"
                                                    id="validationDefaultUsername"
                                                    aria-describedby="inputGroupPrepend2" required>
                                            </div>
                                        </div>

                                        <!-- City -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault03">{{ __('localization.city')}}</label>
                                            <input type="text" name="city" class="form-control"
                                                id="validationDefault03" required>
                                        </div>

                                        <!-- State -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault04">{{ __('localization.state')}}</label>
                                            <select class="form-control" name="state" id="validationDefault04"
                                                required>
                                                <option selected disabled value="">{{ __('localization.choose')}}</option>
                                                <option>Andhra Pradesh</option>
                                                <option>Arunachal Pradesh</option>
                                                <option>Assam</option>
                                                <option>Bihar</option>
                                                <option>Chhattisgarh</option>
                                                <option>Goa</option>
                                                <option>Gujarat</option>
                                                <option>Haryana</option>
                                                <option>Himachal Pradesh</option>
                                                <option>Jharkhand</option>
                                                <option>Karnataka</option>
                                                <option>Kerala</option>
                                                <option>Madhya Pradesh</option>
                                                <option>Maharashtra</option>
                                                <option>Manipur</option>
                                                <option>Meghalaya</option>
                                                <option>Mizoram</option>
                                                <option>Nagaland</option>
                                                <option>Odisha</option>
                                                <option>Punjab</option>
                                                <option>Rajasthan</option>
                                                <option>Sikkim</option>
                                                <option>Tamil Nadu</option>
                                                <option>Telangana</option>
                                                <option>Tripura</option>
                                                <option>Uttar Pradesh</option>
                                                <option>Uttarakhand</option>
                                                <option>West Bengal</option>
                                                <option>Andaman and Nicobar Islands</option>
                                                <option>Chandigarh</option>
                                                <option>Dadra and Nagar Haveli and Daman and Diu</option>
                                                <option>Delhi</option>
                                                <option>Lakshadweep</option>
                                                <option>Puducherry</option>
                                            </select>
                                        </div>

                                        <!-- Zip -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault05">{{ __('localization.zip')}}</label>
                                            <input type="text" class="form-control" name="zip"
                                                id="validationDefault05" required>
                                        </div>

                                        <!-- Mobile -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault06">{{ __('localization.mobile')}}</label>
                                            <input type="text" class="form-control" name="mobilenumber"
                                                id="validationDefault06" required>
                                        </div>
                                    </div>


                                    <!-- Submit Button -->
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">{{ __('localization.save_changes')}}</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div id="toastBox"></div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-block">
                            <div class="card-header d-flex justify-content-between pb-0">
                                <div class="header-title">
                                    <h4 class="card-title mb-0">{{ __('localization.change_password')}}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="changePasswordForm">
                                    @csrf
                                    <div class="form-group">
                                        <label for="pwd">{{ __('localization.current_password')}}</label>
                                        <input type="password" name="current_password" class="form-control"
                                            id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">{{ __('localization.new_password')}}</label>
                                        <input type="password" name="new_password" class="form-control"
                                            id="pwd">
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ __('localization.submit')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="toastBox"></div>
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
                }, 5000)
            }
            // Function to fetch user data via AJAX
            function fetchUserData() {
                const token = localStorage.getItem('token');
                $.ajax({
                    url: '/api/getProfile', // Change the URL to your API endpoint
                    type: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token, // Use the token retrieved from localStorage
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        // Populate form fields with received data
                        $('#validationDefault01').val(response.Firstname);
                        $('#validationDefault02').val(response.Lastname);
                        $('#validationDefaultUsername').val(response.Username);
                        $('#validationDefault03').val(response.City);
                        $('#validationDefault04').val(response.State);
                        $('#validationDefault05').val(response.Zip);
                        $('#validationDefault06').val(response.MobileNumber);

                        $('#fullname').text(response.Firstname + ' ' + response.Lastname);
                        $('#username').text(response.Username);
                        $('#email').text(response.Email);
                        $('#phone').text(response.MobileNumber);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching user data:', error);
                    }
                });
            }

            // Fetch user data on page load
            fetchUserData();

            // AJAX submission of form data
            $('#userForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = $(this).serialize(); // Serialize form data
                var token = localStorage.getItem('token');
                console.log(formData);
                $.ajax({
                    url: '/api/updateProfile', // Change the URL to your API endpoint for updating user data
                    type: 'POST',
                    data: formData,
                    headers: {
                        'Authorization': 'Bearer ' +
                        token, // Use the token retrieved from localStorage
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log('User data updated successfully:', response);
                        let successMsg =
                                '<i class="fa-solid fa-circle-check"></i> Success:' + response
                                .message;
                            showToast(successMsg);
                            setTimeout(function() {
                                window.location.reload(); // Reloads the page
                            }, 3000);
                        // Optionally, perform any UI updates or redirects here after successful update
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating user data:', error);
                        let errorMsg =
                            '<i class="fa-solid fa-circle-xmark error"></i> Error:'+xhr.responseText;
                        showToast(errorMsg);
                        // Optionally, display an error message to the user
                    }
                });
            });
            $('#changePasswordForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = $(this).serialize(); // Serialize form data
                var token = localStorage.getItem('token');

                // Your API endpoint for changing password
                var url = '/api/changePasswordProfile';

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    headers: {
                        'Authorization': 'Bearer ' +
                        token, // Use the token retrieved from localStorage
                    },
                    success: function(response) {
                        console.log('Password changed successfully:', response);
                        let successMsg =
                                '<i class="fa-solid fa-circle-check"></i> Success:' + response
                                .message;
                            showToast(successMsg);
                            setTimeout(function() {
                                window.location.href = 'home'; // Reloads the page
                            }, 3000);
                        // Optionally, perform any UI updates or show success message
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr);
                        let errorMsg =
                            '<i class="fa-solid fa-circle-xmark error"></i> Error:'+xhr.responseJSON.error;
                        showToast(errorMsg);
                        // Optionally, display an error message to the user
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
