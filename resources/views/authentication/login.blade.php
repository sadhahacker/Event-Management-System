<!doctype html>
<?php
$lang = \Lang::getLocale();
$class = $lang === 'ar' ? "ar" : "nonar";
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eventina</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="../assets/vendor/@fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/toast.css">
    <style type="text/css">
    .sp{
        direction: rtl;
        text-align: right;
    }
    .nonar{
        direction: ltr;
        text-align: left;
    }
    </style>
</head>

<body class={{$class}}>

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
                                <h3 class="mb-3 font-weight-bold text-center">{{ __('localization.sign_in') }}</h3>
                                <p class="text-center text-secondary mb-4">{{ __('localization.log_in_to_account') }}
                                </p>
                                <form id="loginForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-secondary">{{ __('localization.email') }}</label>
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="{{ __('localization.placeholders.email') }}">
                                            </div>
                                            <span id="emailError" class="error text-danger"></span>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label
                                                        class="text-secondary">{{ __('localization.password') }}</label>
                                                    <label><a
                                                            href="recover">{{ __('localization.forgot_password') }}</a></label>
                                                </div>
                                                <input class="form-control" type="password" name="password"
                                                    placeholder="{{ __('localization.placeholders.password') }}">
                                            </div>
                                            <span id="passwordError" class="error text-danger"></span>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-block mt-2">{{ __('localization.log_in') }}</button>
                                    <div class="col-lg-12 mt-3">
                                        <p class="mb-0 text-center">{{ __('localization.dont_have_account') }} <a
                                                href="register">{{ __('localization.sign_up') }}</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="toastBox"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
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
            // Event listener for the form submission
            $("#loginForm").submit(function(event) {
                // Prevent the default form submission
                event.preventDefault();

                $('#emailError').text("");
                $('#passwordError').text("");

                // Serialize form data
                var formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    type: "POST",
                    url: "api/login",
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        if (response.status == true) {
                            localStorage.setItem('token', response.accessToken);
                            window.location.href = response.redirect; //
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr);
                        // Provide a generic error message for security reasons
                        $('#emailError').text(xhr.responseJSON.email);
                        $('#passwordError').text(xhr.responseJSON.password);
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
