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
</head>

<body class=" ">

    <div class="wrapper">
        <section class="login-content">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-md-5">
                        <div class="card p-3">
                            <div class="card-body">
                                <div class="auth-logo">
                                    <img src="../assets/images/logo.png "
                                        class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                                    <img src="../assets/images/logo-dark.png"
                                        class="img-fluid rounded-normal light-logo" alt="logo">
                                </div>
                                <h3 class="mb-3 font-weight-bold text-center">{{__('localization.getting_started')}}</h3>
                                <form id="registrationForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-secondary">{{__('localization.username')}}</label>
                                                <input class="form-control" name="username" type="text"
                                                    placeholder="{{__('localization.placeholders.username')}}" required>
                                            </div>
                                            <span id="usernameError" class="error text-danger"></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-secondary">{{__('localization.email')}}</label>
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="{{__('localization.placeholders.email')}}" required>
                                            </div>
                                            <span id="emailError" class="error text-danger"></span>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <label class="text-secondary">{{__('localization.password')}}</label>
                                                <input class="form-control" name="password" type="password"
                                                    placeholder="{{__('localization.placeholders.password')}}" required>
                                            </div>
                                            <span id="passwordError" class="error text-danger"></span>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <label class="text-secondary for="exampleInputphone">{{__('localization.mobile_number')}}</label>
                                                <input type="tel" class="form-control" id="exampleInputphone" name="mobilenumber" placeholder="{{__('localization.placeholders.mobile_number')}}r">
                                             </div>
                                            <span id="numberError" class="error text-danger"></span>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="form-check form-check-inline">
                                                <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                                    <input type="checkbox" required class="custom-control-input m-0"
                                                        id="inlineCheckbox1">
                                                    <label class="custom-control-label pl-2" for="inlineCheckbox1">{{__('localization.terms_of_service')}} <a href="terms-of-service.html">{{__('localization.terms_and_service')}}
                                                        </a> {{__('localization.and')}} <a href="privacy-policy.html">{{__('localization.privacy_policy')}}</a></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-2">{{__('localization.create_account')}}</button>
                                    <div class="col-lg-12 mt-3">
                                        <p class="mb-0 text-center">{{__('localization.sign_in_question')}}<a href="login">{{__('localization.sign_in')}}</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            // Event listener for the form submission
            $("#registrationForm").submit(function(event) {
                // Prevent the default form submission
                event.preventDefault();

                // Get form data using name attributes
                var username = $("input[name='username']").val();
                var email = $("input[name='email']").val();
                var password = $("input[name='password']").val();
                var mobilenumber = $("input[name='mobilenumber']").val();

                $('#usernameError').text("");
                $('#emailError').text("");
                $('#passwordError').text("");
                $('#numberError').text("");

                // Create an object with the form data
                var formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    type: "POST",
                    url: "api/register",
                    data: formData,
                    dataType: "json",
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    success: function(response) {
                        window.location.href = "login";
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr);
                        // Handle error
                        if (xhr.responseJSON.errors.email) {
                            $('#emailError').text(xhr.responseJSON.errors.email[0]);
                        } else {
                            // Check if the error is related to the password field
                            if (xhr.responseJSON.errors.password) {
                                $('#passwordError').text(xhr.responseJSON.errors.password[0]);
                            }

                            // Handle other errors or display a generic message
                            if (xhr.responseJSON.errors.username) {
                                $('#usernameError').text(xhr.responseJSON.errors.username[0]);
                            }
                            if (xhr.responseJSON.errors.mobilenumber) {
                                $('#numberError').text(xhr.responseJSON.errors.mobilenumber[0]);
                            }
                        }
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
