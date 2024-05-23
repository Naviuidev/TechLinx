<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLinx Contact</title>
    <?php include('header.php'); ?>

</head>

<body>
    <?php include('navbar.php'); ?>
    <section class="py-5 bgBanner">
        <div class="container py-5">
            <div class="row py-4 align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="my-2">
                        <h5 class="text-dark">TechLinx <span class="text-secondary fs-6 px-4"><a href="index.php"> >
                                    Home</a></span></h5>
                        <h2 class="text-dark seccondaryHeading fw-bold">Contact Us</h2>
                    </div>
                </div>
                <!--end of the first col-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2 class="text-dark  seccondaryHeading py-3">
                        Want to step further?<br>
                        We’d love to hear from you.
                    </h2>
                    <h4 class="fs-4 text-dark fw-bold mt-4">Hyderabad</h4>
                    <p class="text-dark">Plot No 6th floor, White Field Rd, Kondapur, Telangana 500084</p>
                    <div class="d-flex">
                        <div class="d-flex">
                            <div>
                                <span class="material-symbols-outlined">
                                    call
                                </span>
                            </div>
                            <div>
                                <a href="tel:+9178158 87996" class="text-dark">+91 xxxxxxxxx</a>
                            </div>
                        </div>
                        <div class="d-flex mx-3">
                            <div class="mx-2">
                                <span class="material-symbols-outlined">
                                    send
                                </span>
                            </div>
                            <div>
                                <a href="mailto:info@texhlinx.com&ZeroWidthSpace;"
                                    class="text-dark">info@texhlinx.com&ZeroWidthSpace;</a>
                            </div>
                        </div>
                    </div>
                    <a href="index.php" class="my-3 px-4 py-1 rounded-pill btn btnGRa">Visit Home
                        Page</a>
                </div>
                <!--end of the second col-->
            </div>
            <!--end of the hero dev-->
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  mt-4 shadow">
                    <div class="  ">
                        <form id="myForm" action="send_form.php" method="post">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-3 border">
                                    <label for="firstName" class="text-dark px-2">First Name</label>
                                    <input type="text" id="firstName" name="firstName"
                                        class="form-control border-0 rounded-0" placeholder="First Name">
                                    <div id="firstNameError" class="text-danger"></div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-3 border">
                                    <label for="lastName" class="text-dark px-2">Last Name</label>
                                    <input type="text" id="lastName" name="lastName"
                                        class="form-control border-0 rounded-0" required="" placeholder="Last Name">
                                    <div id="lastNameError" class="text-danger"></div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-3 border">
                                    <label for="email" class="text-dark px-2">Email</label>
                                    <input type="email" id="email" name="email" class="form-control border-0 rounded-0"
                                        required="" placeholder="Email">
                                    <div id="emailError" class="text-danger"></div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-3 border">
                                    <label for="number" class="text-dark px-2">Mobile No</label>
                                    <input type="text" id="mobileNo" name="mobileNo"
                                        class="form-control border-0 rounded-0" placeholder="Ex +91 ******">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-3 border">
                                    <label for="message" class="text-dark px-2">Message</label>
                                    <textarea id="message" name="message" rows="2"
                                        class="form-control border-0 rounded-0" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  py-3">
                                    <button type="button" id="submitBtn"
                                        class="btn btnGRa rounded-pill px-4   rounded-0 border-0">Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <!--end of the form col-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="my-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.0602905943374!2d78.36922317369107!3d17.456828200803933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93cf9837fcc3%3A0x7b4d3fb76ff8ad18!2sPhenom%20People%20Pvt.Ltd!5e0!3m2!1sen!2sin!4v1715842375170!5m2!1sen!2sin" class="mt-4" width="100%" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="my-2 text-center pt-5 justify-content-center d-flex align-items-center">
                        <span class="text-dark  fs-2">
                            This Page is Under Development<br>
                            <span class="material-symbols-outlined mt-3 fs-1">
                                code
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <?php include('footer.php'); ?>
    <script>
        document.getElementById('submitBtn').addEventListener('click', function () {
            var firstName = document.getElementById('firstName').value.trim();
            var lastName = document.getElementById('lastName').value.trim();
            var email = document.getElementById('email').value.trim();

            // Check if any of the required fields are empty
            if (firstName === '' || lastName === '' || email === '') {
                alert('Please enter all the fields.');
                return;
            }

            // If all fields are filled, submit the form
            document.getElementById('myForm').submit();
        });
    </script>
</body>

</html>