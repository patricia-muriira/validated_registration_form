<?php
include('validation_reg.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- JSquery Ui datepicker links -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <title>Registration Form</title>
    <style>
        body {
            background-color: #0F416F;
        }

        .btn-color {
            background-color: #0F416F;
        }
    </style>
</head>

<body class="">
    <div class="container">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <form class="row g-3 border rounded p-4 my-1 bg-body-secondary text-body needs-validation" method="POST"
                    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" novalidate
                    enctype="multipart/form-data">
                    <h3 class="text-center border-bottom pb-2 border-dark text-body-secondary">REGISTRATION FORM</h3>

                    <!-- fname field -->
                    <div class="col-md-6">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name=" fname" autocomplete="off" required>
                        <div class="invalid-feedback">
                            Please fill the above field.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <!-- php form validation error -->
                        <div class="text-danger">
                            <?php echo $errors['fname']; ?>
                        </div>
                    </div>
                    <!-- lname -->
                    <div class="col-md-6">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" autocomplete="off" required>
                        <div class="invalid-feedback">
                            Please fill the above field.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <!-- php form validation error -->
                        <div class="text-danger">
                            <?php echo $errors['lname']; ?>
                        </div>
                    </div>


                    <!-- date of birth -->
                    <div class="col-12">
                        <label for="date_of_birth" class="form-label">Date of birth</label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" readonly
                            autocomplete="off" required>
                        <div class="invalid-feedback">
                            Please fill the above field.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <!-- php form validation error -->
                        <div class="text-danger">
                            <?php echo $errors['date_of_birth']; ?>
                        </div>
                    </div>


                    <!-- phone number -->
                    <div class="col-12">
                        <label for="tel" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="tel" id="tel" autocomplete="off" required>
                        <div class="invalid-feedback">
                            Please fill the above field.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <!-- php form validation error -->
                        <div class="text-danger">
                            <?php echo $errors['tel']; ?>
                        </div>
                    </div>

                    <!-- email -->
                    <div class="col-12">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" name="email" id="email" autocomplete="off" required>
                        <div class="invalid-feedback">
                            Please fill the above field.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <!-- php form validation error -->
                        <div class="text-danger">
                            <?php echo $errors['email']; ?>
                        </div>
                    </div>

                    <!-- passport size -->
                    <div class="col-12">
                        <label for="photo" class="form-label">Profile photo</label>
                        <input type="file" class="form-control" name="photo" id="photo" required>
                        <div class="invalid-feedback">
                            Please fill the above field.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <!-- php form validation error -->
                        <div class="text-danger">
                            <?php echo $errors['photo']; ?>
                        </div>
                    </div>





                    <!-- message -->
                    <div class="col-12">
                        <label for="message" class="form-label">How did you learn about us? (not more than 250
                            words)</label>
                        <textarea class="form-control" name="message" id="message" cols="40" rows="5" autocomplete="off"
                            required></textarea>
                        <div class="invalid-feedback">
                            Please fill the above field.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <!-- php form validation error -->
                        <div class="text-danger">
                            <?php echo $errors['message']; ?>
                        </div>
                    </div>


                    <!-- register button -->
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary border-0 btn-color">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap Js links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!--datepicker -->
    <script>
        $(function () {
            $("#date_of_birth").datepicker({
                maxDate: 0
            });
        });


        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>