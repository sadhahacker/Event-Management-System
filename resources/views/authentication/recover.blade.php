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

<body class=" ">
    <div class="wrapper">
        <section class="login-content">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-md-5">
                        <div class="card p-5">
                            <div class="card-body">
                                <div class="auth-logo">
                                    <img src="../assets/images/logo.png "
                                        class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                                    <img src="../assets/images/logo-dark.png"
                                        class="img-fluid rounded-normal light-logo" alt="logo">
                                </div>
                                <h3 class="mb-3 text-center">{{ __('localization.reset_password') }}</h3>
                                <p class="text-center small text-secondary mb-3">
                                    {{ __('localization.reset_password_description') }}</p>
                                <form id="resetForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-secondary">{{ __('localization.email') }}</label>
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="{{ __('localization.placeholders.email') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-block">{{ __('localization.reset_password') }}</button>
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
            $('#resetForm').on('submit', function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: '/api/passwordResetlink',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        let successMsg =
                            '<i class="fa-solid fa-circle-check"></i> Success:' + response
                            .message;
                        showToast(successMsg);

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                        let errorMsg =
                            '<i class="fa-solid fa-circle-xmark error"></i> Error: Already email send';
                        showToast(errorMsg);
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
