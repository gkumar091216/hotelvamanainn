<?php
    $pagename = 'contactus';
?>
<?php
    // ini_set( 'display_errors', 1 );
    // error_reporting( E_ALL );
    // $from = "test@hostinger-tutorials.com";
    // $from = "hr@techzobris.com";
    // $to = "hr@techzobris.com";
    // $cc = "gkumarswamy16@gmail.com";
    // $subject = "Checking PHP mail........sdgsdf.......";
    // $message = "PHP mail works just fine....sdfg.......";
    // $headers = "From: <" . $from . "> cc: <" . $to . ">";
    // mail($cc,$subject,$message, $headers);
    // echo "The email message was sent....cvxc........";
?>
<?php
include './layout/layout.php'; ?>
<?php include './layout/header.php'; ?>



            <!--end-->
            <section class="image-head-wrapper" style="background-image: url('images/banner4.jpg');">
                <div class="inner-wrapper">
                    <h1>Book A Room / Tour Package</h1>
                </div>
            </section>
            <div class="clearfix"></div>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $formType = $_GET['succ'];
                    if ($_POST['submit'] && $formType == 'hotelvamanainn') {
                        // echo $_POST['Name'].'-'.$_POST['Phoneno'].'-'.$_POST['Email'].'-'.$_POST['Subject'].'-'.$_POST['Message'];
                        $Name    = $_POST['Name'];
                        $Phoneno = $_POST['Phoneno'];
                        $Email   = $_POST['Email'];
                        $Subject = $_POST['Subject'];
                        $Message = $_POST['Message'];
                        // Multiple recipients
                        // $to = 'hr@techzobris.com,demo@gmail.com';
                        $to = 'anahotels.in@gmail.com ';

                        // Subject
                        $subject = 'Contact details from Hotelvamanainn website';

                        // Message
                        $message = '
        <html>
        <head>
          <title>Contact details from Hotelvamanainn website</title>
        </head>
        <body>
        <h1>Contact details from Hotelvamanainn website</h1>
          <table>
            <tr>
              <td>Name</td><td> : </td><td> ' . $Name . '</td>
            </tr>
            <tr>
              <td>Phone No</td><td> : </td><td> ' . $Phoneno . '</td>
            </tr>
            <tr>
              <td>Email</td><td> : </td><td> ' . $Email . '</td>
            </tr>';
                        if ($Subject) {
                            $message = $message . '
            <tr>
              <td>Subject</td><td> : </td><td> ' . $Subject . '</td>
            </tr>';
                        }
                        if ($Message) {
                            $message = $message . '
            <tr>
              <td>Message</td><td> : </td><td> ' . $Message . '</td>
            </tr>';
                        }
                        $message = $message . '
          </table>
        </body>
        </html>
        ';

                        // To send HTML mail, the Content-type header must be set
                        $headers[] = 'MIME-Version: 1.0';
                        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                        $headers[] = 'From: Hotelvamanainn Website <anahotels.in@gmail.com>';
                        // $headers[] = 'Cc: gkumarswamy16@gmail.com';
                        // $headers[] = 'Bcc: birthdaycheck@example.com';

                        // Mail it
                        mail($to, $subject, $message, implode("\r\n", $headers));

                    ?>
                <div class="clearfix position-relative text-center ">
                    <div class="custom-alert alert col-xs-offset-1 col-xs-10 col-md-6 col-md-offset-3 mt-3 alert-success mx-auto" role="alert">
                        <h3>Thank you for contacting us.</h3>
                        <p>We have received your enquiry and will respond to you within 24 hours.  For urgent enquiries please call us on one of the telephone numbers below.</p>
                    </div>
                </div>
            <?php }else {
                        // echo $_POST['Name'].'-'.$_POST['Phoneno'].'-'.$_POST['Email'].'-'.$_POST['Subject'].'-'.$_POST['Message'];
                        $Name    = $_POST['Name'];
                        $Phoneno = $_POST['Phoneno'];
                        $Email   = $_POST['Email'];
                        $Subject = $_POST['Subject'];
                        $Message = $_POST['Message'];
                        // Multiple recipients
                        // $to = 'hr@techzobris.com,demo@gmail.com';
                        $to = 'anaholidays@gmail.com';

                        // Subject
                        $subject = 'Contact details from ANA Holidays website';

                        // Message
                        $message = '
        <html>
        <head>
          <title>Contact details from ANA Holidays website</title>
        </head>
        <body>
        <h1>Contact details from ANA Holidays website</h1>
          <table>
            <tr>
              <td>Name</td><td> : </td><td> ' . $Name . '</td>
            </tr>
            <tr>
              <td>Phone No</td><td> : </td><td> ' . $Phoneno . '</td>
            </tr>
            <tr>
              <td>Email</td><td> : </td><td> ' . $Email . '</td>
            </tr>';
                        if ($Subject) {
                            $message = $message . '
            <tr>
              <td>Subject</td><td> : </td><td> ' . $Subject . '</td>
            </tr>';
                        }
                        if ($Message) {
                            $message = $message . '
            <tr>
              <td>Message</td><td> : </td><td> ' . $Message . '</td>
            </tr>';
                        }
                        $message = $message . '
          </table>
        </body>
        </html>
        ';

                        // To send HTML mail, the Content-type header must be set
                        $headers[] = 'MIME-Version: 1.0';
                        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                        $headers[] = 'From: ANA Holidays Website <anaholidays@gmail.com>';
                        // $headers[] = 'Cc: gkumarswamy16@gmail.com';
                        // $headers[] = 'Bcc: birthdaycheck@example.com';

                        // Mail it
                        mail($to, $subject, $message, implode("\r\n", $headers));

                    ?>
                <div class="clearfix position-relative text-center ">
                    <div class="custom-alert alert col-xs-offset-1 col-xs-10 col-md-6 col-md-offset-3 mt-3 alert-success mx-auto" role="alert">
                        <h3>Thank you for contacting us.</h3>
                        <p>We have received your enquiry and will respond to you within 24 hours.  For urgent enquiries please call us on one of the telephone numbers below.</p>
                    </div>
                </div>
            <?php }
            }?>

            <section class="contact-block">
               <div class="container">
                    <div class="col-md-6 contact-left-block">
                        <div class="row">
                            <div class="col-xs-12">
                                <h3> BOOK A <span> ROOM</span></h3>
                                <h3>
                                    <img width="200px" src="<?php echo $base_url; ?>images/logo.png" />
                                </h3>
                                <p class="text-left">Please Call us or Fill the Contact us Form to know More Details About Room Bookings, Price Details and Any Other Hotel Rooms Information</p>
                                <p class="text-right">
                                    <div class="book-address">
                                        <span>18-3-64/A, Shanthi Nagar, Tirumala Byepass Road, Besides Alipiri Police Station, TIRUPATI - 517501</span>
                                        <div><i class="fa fa-map-marker fa-lg"></i></div>
                                    </div>
                                </p>
                                <p class="text-right"><a href="tel:+919393622333"> +91 -  9393622333<i class="fa fa-phone fa-lg"></i></a></p>
                                <p class="text-right"><a href="mailto:anahotels.in@gmail.com"> anahotels.in@gmail.com  <i class="fa fa-envelope"></i></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 contact-form ">
                        <h3>Send a <span>Message</span></h3>
                        <form action="<?php echo $base_url; ?>contact-us?succ=hotelvamanainn"  method="POST">
                            <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" required />
                            <input type="text" class="form-control" id="Phoneno" name="Phoneno" placeholder="Phone Number"  id="Phoneno" required />
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required />
                            <input type="text" placeholder="Subject" class="form-control" id="Subject" name="Subject" required />
                            <textarea class="form-control" name="Message" id="Message" placeholder="Message Here...." required></textarea>
                            <input type="submit" name="submit" id="submit" class="submit-btn" value="Submit" />
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
            
            <section class="contact-block">
               <div class="container">
                    <div class="col-md-6 contact-left-block">
                        <div class="row">
                            <div class="col-xs-12">
                                <h3>BOOk A <span> TOUR PACKAGE</span></h3>
                                <h3>
                                    <img width="200px" src="<?php echo $base_url; ?>images/ana-travels-logo.Png" />
                                </h3>
                                <p class="text-left">Please Call us or Fill the Contact us Form to know More Details About Book a Taxi / Car, Tour Packages, Price Details and Any Other Travels Information</p>
                                <p class="text-right">
                                    <div class="book-address">
                                    <span>18-3-64/A, Shanthi Nagar, Tirumala Byepass Road, Besides Alipiri Police Station, TIRUPATI - 517501</span> <div><i class="fa fa-map-marker fa-lg"></i></div>
                                    </div>
                                </p>
                                <p class="text-right"><a href="tel:+919441581777"> +91 -  9441581777<i class="fa fa-phone fa-lg"></i></a></p>
                                <p class="text-right"><a href="mailto:anaholidays@gmail.com"> anaholidays@gmail.com <i class="fa fa-envelope"></i></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 contact-form ">
                        <h3>Send a <span>Message</span></h3>
                        <form action="<?php echo $base_url; ?>contact-us?succ=anaholidays"  method="POST">
                            <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" required />
                            <input type="text" class="form-control" id="Phoneno" name="Phoneno" placeholder="Phone Number"  id="Phoneno" required />
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required />
                            <input type="text" placeholder="Subject" class="form-control" id="Subject" name="Subject" required />
                            <textarea class="form-control" name="Message" id="Message" placeholder="Message Here...." required></textarea>
                            <input type="submit" name="submit" id="submit" class="submit-btn" value="Submit" />
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>

            <!---map--->
            <section class="offspace-70 contact-left-block">
                <h3>ROUTE <span>MAP</span></h3>
                <div class="map">
                    <div class="container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.154464699012!2d79.4206981707334!3d13.648366270383017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d4ba400000001%3A0x29c9841470837235!2sHotel%20Vamana%20inn%20(ANA%20Holidays)!5e0!3m2!1sen!2sin!4v1740212792279!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 400px" allowfullscreen></iframe>
                    </div>
                </div>
            </section>

<!-- <div class="clearfix position-relative">
    <div class="container py-5">
        <div class="row align-items-stretch">
            <div class="col-12 col-lg-6 pl-lg-0 pr-lg-4 mb-4 mb-lg-0">
                <div class="card box-shadow-1st h-100">
                    <div class="card-body">
                        <div class="row mx-0 justify-content-center">
                            <div class="col-12 text-center my-5">
                            <a class="text-decoration-none d-inline" href="tel:<?php echo $contact_dispaly; ?>">  <img src="<?php echo $base_url; ?>images/cphone.png"/></a>
                            </div>
                            <div class="col-12 text-center">
                                <h5 class="mb-4  fw-600 textcs-2nd">Talk With Us </h5>
                                <p class="mb-0 textcs-3rd">Interested in TechZobris Services? Just pick up the phone to chat with a our Techzobris team. </p>
                            </div>
                            <div class="col-12 px-0 px-sm-3 text-center">
                            <a class="text-decoration-none d-inline" href="tel:<?php echo $contact_dispaly; ?>">
                                <h3 class="my-5  fw-600 textcs-2nd"><?php echo $contact_dispaly; ?></h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pr-lg-0  pl-lg-4">
                <div class="card box-shadow-1st h-100">
                    <div class="card-body px-0 px-sm-2">
                        <div class="row mx-0 justify-content-center contact-form align-items-center h-100">
                            <div class="col-12 text-center my-3">
                                <h5 class="mb-4  fw-600 textcs-2nd">Send us message</h5>
                            </div>
                            <div class="col-12 text-center">
                            <form class="clearfix" action="<?php echo $base_url; ?>contact-us?succ=succ" method="POST" onsubmit="return validateForm()">
                            <div class="form-row mb-2">
                                <div class="form-group col-md-6">
                                <input type="text" placeholder="Name" class="form-control " id="Name" name="Name"  >
                                </div>
                                <div class="form-group col-md-6">
                                <input type="text" placeholder="Phone Number" class="form-control" id="Phoneno" name="Phoneno" >
                                </div>
                            </div>
                            <div class="form-row  mb-2">
                                <div class="form-group col-md-6">
                                <input type="text" placeholder="Email" class="form-control" id="Email" name="Email" >
                                </div>
                                <div class="form-group col-md-6">
                                <input type="text" placeholder="Subject" class="form-control" id="subject" name="Subject">
                                </div>
                            </div>
                            <div class="form-group  mb-4">
                                <textarea   class="form-control" id="Message" name="Message" placeholder="Enter Your Message" rows="3"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn text-white px-5 py-2 mb-4 bgc-1st border-0" value="submit">Submit</button>
                            <p id="errorMsg" class=" mb-0 text-danger"></p>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix position-relative">
    <div class="container px-0 pb-5">
        <div class="card box-shadow-1st">
            <div class="card-body p-2 m-1">
                <div class="row mx-0">
                    <div class="col-12 col-lg-8 pr-lg-5 mb-4 mb-lg-0">
                        <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.7281131746063!2d78.38390531435502!3d17.52048760356547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8e00cf683503%3A0x254885d7f24f4bf9!2sSri%20Krishna%20Sai%20Meadows!5e0!3m2!1sen!2sin!4v1581620791100!5m2!1sen!2sin" width="1369" class="col-12 px-0" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 pl-lg-5 pt-lg-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-block mb-4">
                                    <h5 class="mb-0 textcs-3rd fw-700">Headquarters</h5>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="d-block mb-4 pb-3">
                                    <img class="float-left " src="<?php echo $base_url; ?>images/location.png" />
                                    <p class="textc-4th  fw-300 mb-0 pl-5 lh-26">Plot No.27, 2nd Floor, Sai Nagar, Madhapur, Hitech City, Hyderabad - 500034</p>
                                </div>
                            </div>

                            <div class="c0l-12 col-sm-6 col-lg-12 ">
                                <div class="d-block mb-3">
                                    <img class="float-left" src="<?php echo $base_url; ?>images/phone.png" />
                                    <a class=" mb-0 d-block textc-4th text-decoration-none fw-300 pl-5" href="tel:<?php echo $contact_dispaly; ?>"><?php echo $contact_dispaly; ?></a>
                                </div>
                                <div class="d-block mb-4">
                                    <img class="float-left " src="<?php echo $base_url; ?>images/email.png" />
                                    <a class=" mb-0 d-block textc-4th text-decoration-none fw-300 pl-5"  href="mailto:<?php echo $mail_dispaly; ?>"><?php echo $mail_dispaly; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php include './layout/footer.php'; ?>