<!--Header start-->
<header id="header_wrapper">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p><i class="fa fa-phone"></i> For Support? Call Us: <span>+1 758-673-2214</span></p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="top_menu">
                        <ul>
                            <li><a href=""><i class="fa fa-globe"></i> Languages</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>en/<?php echo uri_string();?>">English</a></li>
                                    <li><a href="<?php echo base_url();?>ru/<?php echo uri_string();?>">Русский</a></li>
                                    <li><a href="<?php echo base_url();?>de/<?php echo uri_string();?>">German</a></li>
                                </ul>
                            </li>
<!--                            <li><a href="">My Account</a></li>-->
<!--                            <li class="Travelite_login_alert"><a href="#">Login</a></li>-->
<!--                            <li class="Travelite_signup_alert"><a href="#">Signup</a></li>-->
<!--                            <li><a href="">USD</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li><a href="">INR</a></li>-->
<!--                                    <li><a href="">USD</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popup form Start -->
    <div class="full_width login_wrapper">
        <div class="row">
            <div class="container">
                <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
                    <!-- login form start -->
                    <div class="popup_alert_main Travelite_login_form">
                        <div class="login_heading">
                            login
                            <span class="close_btn"><i class="fa fa-times"></i></span>
                        </div>
                        <div class="popup_inner">
                            <form>
                                <input type="email" name="emaillogin" placeholder="Email Id"   class="input_login">
                                <input type="password" name="passlogin" placeholder="Password" class="input_login">
                                <input type="checkbox" id="login_check" name="checkbox" class="checkbox_login">
                                <label for="login_check" class="remember_me">Remember me</label>
                                <a href="#" class="forgot_link">Forget password?</a>
                            </form>
                            <div class="have_an_acnt">
                                <p>Dont have an account?  <a href="#">Sign up</a></p>
                            </div>
                            <div class="or_line">
                                <span>(OR)</span>
                            </div>
                            <div class="social_links_login">
                                <ul>
                                    <li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
                                    <li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- login form  End -->
                    <!-- signup form start -->
                    <div class="popup_alert_main Travelite_signup_form">
                        <div class="login_heading">
                            signup
                            <span class="close_btn"><i class="fa fa-times"></i></span>
                        </div>
                        <div class="popup_inner">
                            <form class="signup_form">
                                <input type="text" name="emaillogin" placeholder="First Name" class="input_login">
                                <input type="text" name="emaillogin" placeholder="Last Name"  class="input_login">
                                <input type="email" name="emaillogin" placeholder="Email Id"   class="input_login">
                                <input type="password" name="passlogin" placeholder="Password" class="input_login">
                                <input type="password" name="conf passlogin" placeholder="Confirm Password" class="input_login">
                                <input type="checkbox" id="signup_check" name="checkbox" class="checkbox_login">
                                <label for="signup_check" class="remember_me">I agree the Terms of Service, Privacy Policy, Guest
                                    Refund Policy, and Host Guarantee Terms.</label>
                                <input type="submit" value="SIGN UP" class="sub_signup">
                            </form>
                            <div class="or_line">
                                <span>(OR)</span>
                            </div>
                            <div class="social_links_login">
                                <ul>
                                    <li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
                                    <li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
                                </ul>
                            </div>
                            <div class="already_member"> already member? <a href="#">login here</a></div>
                        </div>
                    </div>
                    <!-- signup form  End -->
                </div>
            </div>
        </div>
    </div>
    <!-- popup form  End -->
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <div class="travel_logo"> <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/svg/Logo.svg" alt="logo" /></a> </div>
                </div>
                <div class="col-md-10 col-sm-10"> <a href="javascript:;" class="menu-toggle"></a>
                    <div class="main_menu">
                        <ul>
                            <li class="active"><a href=""><?php echo lang('tpl_home'); ?></a></li>
                            <li><a href="Tour_Home.html">tours</a>
                                <ul class="sub-menu">
                                    <li><a href="Tour_destination.html">Destination</a>
                                        <ul class="sub-menu">
                                            <li><a href="tour_australia.html">Australia</a></li>
                                            <li><a href="tour_egypt.html">Egypt</a></li>
                                            <li><a href="tour_singapore.html">Singapore</a></li>
                                            <li><a href="tour_malaysia.html">Malaysia</a></li>
                                            <li><a href="tour_india.html">India</a></li>
                                            <li><a href="tour_nepal.html">Nepal</a></li>
                                            <li><a href="tour_russia.html">Russia</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Tour-Packages-Details.html">Tour Detail</a></li>
                                    <li><a href="Tour-Packages-Booking.html">Booking</a></li>
                                    <li><a href="Tour-Packages-Booking.html">Checkout</a></li>
                                    <li><a href="Tour-Packages-Grid-View.html">tour-packages-grid-view</a></li>
                                    <li><a href="Tour-Packages-List-View.html">tour-packages-list-view</a></li>
                                </ul>
                            </li>
                            <li><a href="">special offers</a></li>
                            <li><a href="Contact.html">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header end-->