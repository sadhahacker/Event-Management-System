


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="../assets/vendor/@fontawesome/css/all.min.css">
      <link rel="stylesheet" href="../assets/css/toast.css">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>Eventina</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />

      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">  </head>
  <body class=" ">
      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-md-5">
                  <div class="card">
                     <div class="card-body">
                        <div class="row align-items-center">
                           <div class="col-lg-12">
                              <div class="auth-logo">
                                 <img src="../assets/images/logo.png " class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                                 <img src="../assets/images/logo-dark.png" alt="user-icon" class="img-fluid rounded-normal light-logo">
                              </div>
                              <div class="text-center">
                                 <h2 class="mb-2">{{ __('localization.hi') }}</h2>
                                 <p>{{ __('localization.enter_new_password') }}</p>
                              </div>
                              <form id="passwordResetForm">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>{{ __('localization.new_password') }}</label>
                                            <input class="form-control" type="password" name="password" id="password" placeholder="********">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>{{ __('localization.confirm_new_password') }}</label>
                                            <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="********">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="changePasswordBtn" class="btn btn-primary btn-block">{{ __('localization.change_password') }}</button>
                            </form>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <div id="toastBox"></div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        $('#changePasswordBtn').click(function() {
            event.preventDefault();
            // Serialize form data
            var formData = $('#passwordResetForm').serialize();

            // Get CSRF token from URL
            var urlParams = new URLSearchParams(window.location.search);
            var token = urlParams.get('token');

            // Add CSRF token to the data
            formData += '&token=' + token;

            console.log(formData);
            // Send AJAX request
            $.ajax({
                url: '/api/passwordReset',
                type: 'POST',
                data: formData,
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                success: function(response) {
                    // Handle success response
                    console.log(response); // Display success message
                    let successMsg =
                            '<i class="fa-solid fa-circle-check"></i> Success:' + response
                            .message;
                        showToast(successMsg);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.log(xhr); // Display error message
                    let errorMsg =
                            '<i class="fa-solid fa-circle-xmark error"></i> Error:'+xhr.responseJSON.message;
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
    <script src="../assets/js/app.js"></script>  </body>
</html>
