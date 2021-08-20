<?php

$background = "background.jpg";
$logo = "aiesec.png";
$color = "#037ef3";
$orange = "#f68d77"


?>


<?php

$entity = "Other";
if (isset($_GET['entity'])) {
    $entity = $_GET['entity'];
}

$base = "https://aiesec.lk/gsea/apply/";
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $base = "https://localhost/aiesec.lk/EO-GCSA-signups/";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags-->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MFQGDFB');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AIESEC SOFTLOGIC EO GSEA Ambassador!">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Title Page-->
    <title>EO GSEA Ambassador Program</title>
    <BASE href="<?= $base ?>">
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png" />
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" type="text/css">
    <link href="css/customeo.css" rel="stylesheet" media="all" type="text/css">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFQGDFB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="overlay" style="background-color:rgba(255,255,255,0.95); position:fixed; top:0; bottom:0;
width:100%; height:100%; z-index:999; text-align: center; vertical-align: middle; display:none;">
        <div class="center">
            <div class="loadingio-spinner-dual-ring-lwapedn49g" style="width:200px;">
                <div class="ldio-18ldoi6nwr4">
                    <div></div>
                    <div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div style="color:<?= $color ?>; font-size:20px; font-weight:bold;">Please wait while we process your information.</div>
        </div>
        <style type="text/css">
            .center {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            @keyframes ldio-18ldoi6nwr4 {
                0% {
                    transform: rotate(0)
                }

                100% {
                    transform: rotate(360deg)
                }
            }

            .ldio-18ldoi6nwr4 div {
                box-sizing: border-box !important
            }

            .ldio-18ldoi6nwr4>div {
                position: absolute;
                width: 144px;
                height: 144px;
                top: 28px;
                left: 28px;
                border-radius: 50%;
                border: 16px solid #000;
                border-color: <?= $color ?> transparent <?= $color ?> transparent;
                animation: ldio-18ldoi6nwr4 1s linear infinite;
            }

            .ldio-18ldoi6nwr4>div:nth-child(2) {
                border-color: transparent
            }

            .ldio-18ldoi6nwr4>div:nth-child(2) div {
                position: absolute;
                width: 100%;
                height: 100%;
                transform: rotate(45deg);
            }

            .ldio-18ldoi6nwr4>div:nth-child(2) div:before,
            .ldio-18ldoi6nwr4>div:nth-child(2) div:after {
                content: "";
                display: block;
                position: absolute;
                width: 16px;
                height: 16px;
                top: -16px;
                left: 48px;
                background: <?= $color ?>;
                border-radius: 50%;
                box-shadow: 0 128px 0 0 <?= $color ?>;
            }

            .ldio-18ldoi6nwr4>div:nth-child(2) div:after {
                left: -16px;
                top: 48px;
                box-shadow: 128px 0 0 0 <?= $color ?>;
            }

            .loadingio-spinner-dual-ring-lwapedn49g {
                width: 200px;
                height: 200px;
                display: inline-block;
                overflow: hidden;
                background: none;
            }

            .ldio-18ldoi6nwr4 {
                width: 100%;
                height: 100%;
                position: relative;
                transform: translateZ(0) scale(1);
                backface-visibility: hidden;
                transform-origin: 0 0;
                /* see note above */
            }

            .ldio-18ldoi6nwr4 div {
                box-sizing: content-box;
            }

            .als {
                display: flex;
                justify-content: center;
            }

            .fw {
                font-weight: 300;
            }

            /* generated by https://loading.io/ */
        </style>
    </div>
    <div class="logodiv">
        <img src="assets/<?= $logo ?>" alt="aiesec logo" class="alogo" />
        <img src='assets/x.png' alt="x" class='x' />
        <img src='assets/eogsea.png' alt="eogsea" class='eogsea' />
        <img src='assets/x.png' alt="x" class='x' />
        <img src='assets/ps.png' alt="softlogic2" class='softlogic' />
    </div>
    <div class="logodiv2">
        <img src='assets/eogsea.png' alt="softlogic" class='eogsea2' />
    </div>
    <br><br>
    <div class="page-wrapper font-poppins center" style="padding-top:40px">

        <div class="wrapper wrapper--w680 ">
            <div class="card card-4 relative cardstyle ">
                <div class="card-body  " style="border-bottom-style: solid; border-color:<?= $orange ?>; border-width:20px; border-radius:5px; padding-top:40px;">
                    <div class=center>
                        <h1 class="title">EO GSEA Ambassador Program</h1>
                    </div>
                    <form id='signup_form' enctype="multipart/form-data">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First Name<span class="required_field"> *</span></label>
                                    <input class="input--style-4" type="text" name="first_name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last Name<span class="required_field"> *</span></label>
                                    <input class="input--style-4" type="text" name="last_name" required>
                                </div>
                            </div>
                        </div>

                        <!-- <div>
                            <div class="input-group">
                                <label class="label">Date of Birth<span class="required_field"> *</span></label>
                                <input class="input--style-4 datepicker" type="date" name="dob" required>
                            </div>
                        </div> -->


                        <div>
                            <div class="input-group">
                                <label class="label">Email Address<span class="required_field"> *</span></label>
                                <input class="input--style-4" type="email" name="email" required>
                            </div>
                        </div>


                        <div>
                            <div class="input-group">
                                <label class="label">Phone Number<span class="required_field"> *</span></label>
                                <input class="input--style-4" type="tel" placeholder="07xxxxxxxx" name="phone" pattern="[0][0-9]{9}" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">What is the most effective way to contact you?<span class="required_field"> *</span></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="preferred_contact" value="" required>
                                    <option disabled="disabled" selected="selected" hidden>Choose option</option>
                                    <option value="21794">Email</option>
                                    <option value="21792">WhatsApp</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


                        <!-- <div class="input-group">
                            <label class="label">University or Institute<span class="required_field"> *</span></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="university" id="university" value="" required>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> -->
                        <div>
                            <div class="input-group">
                                <label class="label">University or Institute<span class="required_field"> *</span></label>
                                <input class="input--style-4" type="text" name="university" id="university" required>
                            </div>
                        </div>
                        <div>
                            <div class="input-group">
                                <label class="label">Degree program<span class="required_field"> *</span></label>
                                <input class="input--style-4" type="text" name="degree" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Year of study<span class="required_field"> *</span></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="acyear" value="" required>
                                    <option disabled="disabled" selected="selected" hidden>Select year</option>
                                    <option value="1">1st year</option>
                                    <option value="2">2nd year</option>
                                    <option value="3">3rd year</option>
                                    <option value="4">4th year</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>



                        <div class="input-group">
                            <div class="row row-space">
                                <div class="input-group ">
                                    <input type="checkbox" name="privacy_agreed" id="agree" class="checkmark input-icon" required>
                                    <label class="label" style="padding-left: 40px; padding-top: 5px; font-size:14px;">
                                        I have read and agree to AIESEC Sri Lanka's
                                        <a href="https://aiesec.lk/privacy-policy" target="_blank" style="color:<?= $color ?>">Privacy Policy</a>
                                        and I may be contacted by AIESEC representatives for further processing.</label>
                                </div>
                            </div>
                        </div>


                        <div class="p-t-15 als">
                            <button class="btn btn--radius-2 btn--gt fw" style="background: <?= $color ?>;" name="submit" type="submit" id="sub">
                                <span class='btn-text'>SEND APPLICATION</span>
                            </button>
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <input type="hidden" name="action" value="validate_captcha">
                        </div>

                    </form>
                </div>
                <img class='ring1 ' src='assets/Rings.png'></img>
                <img class='ring2 ' src='assets/Rings.png'></img>
            </div>
            <!-- <div class='ring1wrapper '> -->

            <!-- </div> -->

        </div>
        <br><br><br><br>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <!-- recaptcha -->
    <!-- sitekey -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdRCBAcAAAAAMfc5zMpEKswoILHaJJhfntmnfX8"></script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<script>
    // let dropdown = $('#university');
    // dropdown.empty();
    // dropdown.append('<option disabled="disabled" selected="selected" hidden>Choose option</option>');
    // dropdown.prop('selectedIndex', 0);
    // const url = 'universities.json';

    // Populate dropdown 
    // $.getJSON(url, function(data) {
    //     $.each(data, function(key, entry) {
    //         dropdown.append($('<option></option>').attr('value', entry.university).text(entry.university));
    //     })
    // });


    //disable button
    $('#agree').change(function() {
        if (!this.checked) {
            $('#sub ').prop("disabled", true).css('opacity', 0.5);
        } else if (this.checked) {
            $('#sub ').prop("disabled", false).css('opacity', 1);
        }
    }).change()



    $('form').on('submit', function(e) {
        let success = false;
        $("#overlay").fadeIn(300);
        e.preventDefault();
        grecaptcha.ready(function() {
            //sitekey
            grecaptcha.execute('6LdRCBAcAAAAAMfc5zMpEKswoILHaJJhfntmnfX8', {
                action: 'submit'
            }).then(function(token) {

                $("#g-recaptcha-response").val(token);
                console.log($('#signup_form').serialize())
                $.ajax({
                    url: 'signup.php',
                    type: 'POST',
                    data: new FormData(signup_form),
                    success: function(data) {

                        $("#overlay").fadeOut(300);
                        let response = {};
                        try {
                            response = JSON.parse(data)
                        } catch (e) {
                            Swal.fire({
                                title: "Error",
                                text: "Oops! An error occurred. Pleas try again later.",
                                type: "error",
                                confirmButtonText: "OK"
                            });
                            grecaptcha.reset();
                            return;
                        }

                        if (response.hasOwnProperty('errors')) {
                            Swal.fire({
                                title: "An error occurred.",
                                text: response.errors[0].message,
                                type: "error",
                                confirmButtonText: "OK"
                            });
                            grecaptcha.reset();
                            return;
                        }
                        if (response.hasOwnProperty('data')) {
                            Swal.fire({
                                title: "Success!",
                                text: "Submission recorded successfully",
                                type: "success",
                                confirmButtonText: "OK"
                            }).then((result) => {
                                window.location.href = "https://aiesec.lk/";
                            })
                            return;
                        } else {
                            Swal.fire({
                                title: "Error",
                                text: data,
                                type: "error",
                                confirmButtonText: "OK"
                            });
                            grecaptcha.reset();
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        $("#overlay").fadeOut(300);

                        Swal.fire({
                            title: "Error",
                            text: "Oops! An error occurred: " + errorThrown.toString(),
                            type: "error",
                            confirmButtonText: "OK"
                        });
                        grecaptcha.reset();
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });



    });
</script>


</html>
<!-- end document-->