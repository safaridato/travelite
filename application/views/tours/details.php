<div ng-controller="TourDetailsController" ng-init="GetTourDetails(<?php echo $tourId; ?>)">
    <div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0"
         style="background-image:url(<?php echo base_url(); ?>{{tourDetails.Details.ImageLink}});">
        <ul>
            <li><a href="javascript:;">{{tourDetails.Details.CategoryName}}</a></li>
        </ul>
    </div>
    <!--page title end-->
    <div class="clearfix"></div>

    <div class="full_width destinaion_sorting_section">
        <div class="container">
            <div class="row space_100">

                <!-- left sidebar start -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="Travelite_left_sidebar_second">
                        <div class="sidebar_search_bar">
                            <form>
                                <input type="search" placeholder="Search" id="sidebar_search">
                            </form>

                        </div>


                        <!--                    <aside class="widget about_us_widget">-->
                        <!--                        <h4 class="widget-title">about us</h4>-->
                        <!--                        <div class="widgett text_widget">-->
                        <!--                            <p>There are many variations of passages of Lorem Ipsum available, but the joy have suffered-->
                        <!--                                alteration in some format, by injected humour. There are many variations of passages by-->
                        <!--                                injected humour. There are many variations</p>-->
                        <!--                        </div>-->
                        <!---->
                        <!--                    </aside>-->
                        <!--                    <aside class="widget hotel_widgets_deals">-->
                        <!--                        <h4 class="widget-title">hotel deals today</h4>-->
                        <!--                        <div class="widgett">-->
                        <!--                            <ul>-->
                        <!--                                <li><img src="http://placehold.it/78x67" alt="hotel thumb">-->
                        <!--                                    <div class="hotel_deals_details">-->
                        <!--                                        <h4 class="more_text_widget">There are many variations of passanger-->
                        <!--                                            There are many variations of passanger-->
                        <!--                                            There are many variations of passanger</h4>-->
                        <!--                                    </div>-->
                        <!--                                </li>-->
                        <!--                                <li><img src="http://placehold.it/78x67" alt="hotel thumb">-->
                        <!--                                    <div class="hotel_deals_details">-->
                        <!--                                        <h4 class="more_text_widget">There are many variations of passanger</h4>-->
                        <!--                                    </div>-->
                        <!--                                </li>-->
                        <!--                                <li><img src="http://placehold.it/78x67" alt="hotel thumb">-->
                        <!--                                    <div class="hotel_deals_details">-->
                        <!--                                        <h4 class="more_text_widget">There are many variations of passanger</h4>-->
                        <!--                                    </div>-->
                        <!--                                </li>-->
                        <!--                                <li><img src="http://placehold.it/78x67" alt="hotel thumb">-->
                        <!--                                    <div class="hotel_deals_details">-->
                        <!--                                        <h4 class="more_text_widget">There are many variations of passanger</h4>-->
                        <!--                                    </div>-->
                        <!--                                </li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                        <!---->
                        <!--                    </aside>-->

                        <aside class="widget hotel_booking_widget">
                            <h4 class="widget-title">Need Help For Booking?</h4>
                            <div class="widgett text_widget">
                                <p>There are many variations of passages of Lorem Ipsum available, but the joy have </p>
                                <h3><i class="fa fa-phone"></i>+995 593 651 832</h3>
                                <!--                                <h5>or</h5>-->
                                <!--                                <button type="submit" value="submit query" class="submit_query btn-yellow btns">-->
                                <!--                                    submit query-->
                                <!--                                </button>-->

                            </div>

                        </aside>

                        <?php
                        /*
                    <aside class="widget similar_pacakges">
                        <?php
  ="widget-title">similar packages</h4>
                            <div class="widgett text_widget">
                                <div class="image_holder">
                                    <img src="http://placehold.it/209x105" alt="package thumb">
                                    <h5><a href="#">Discover Australia</a></h5>
                                    <h4>$1200/<span>per person</span></h4>
                                </div>

                                <div class="image_holder">
                                    <img src="http://placehold.it/209x105" alt="package thumb">
                                    <h5><a href="#">Victoria Scenic Tour</a></h5>
                                    <h4>$1500/<span>per person</span></h4>
                                </div>
                                <a href="#" class="submit_query btn-yellow btns">view more</a>

                            </div>

                        </aside>
                    */?>
                        </div>
                    </div>
                    <!-- left sidebar end -->


                    <!-- right main start -->
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="tour_packages_right_section left_space_40">
                            <div class="tour_packages_details_top">

                                <div class="top_head_bar">
                                    <h4>{{tourDetails.Details.TourName}}</h4>
                                </div>
                                <div class="bottom_desc">
                                    <h5 class="starting_text"><?php echo lang('tours_startingfrom'); ?><span>{{tourDetails.Details.Price}} {{tourDetails.Details.Iso}} /</span><?php echo lang('tours_perperson'); ?>
                                    </h5>
                                    <span class="time_date"><i class="fa fa-clock-o"></i>{{tourDetails.Details.DaysCount}}days</span>
                                    <h5 class="includes_text"><?php echo lang("tours_includes"); ?>:</h5>
                                    <!-- desc icons Start-->
                                    <div class="row">
                                        <div class="col-lg-6 top_icons_part">
                                            <ul class="sort_place_icons">
                                                <li ng-repeat="bundle in tourDetails.Bundles"><i
                                                        class="fa fa-{{bundle.ClassName}}"></i> {{bundle.BundleName}}
                                                </li>
                                            </ul>
                                            <!-- desc icons End-->
                                        </div>

                                        <!--                                <div class="col-lg-6">-->
                                        <!---->
                                        <!--                                    <div class="top_links">-->
                                        <!--                                        <ul>-->
                                        <!--                                            <li>-->
                                        <!--                                                <select class="selectpicker" data-live-search="true"-->
                                        <!--                                                        title="view all includes">-->
                                        <!--                                                    <option data-tokens="view all includes">view all includes</option>-->
                                        <!--                                                    <option data-tokens="transports">transports</option>-->
                                        <!--                                                    <option data-tokens="flights">flights</option>-->
                                        <!--                                                    <option data-tokens="sight seeing">sight seeing</option>-->
                                        <!--                                                    <option data-tokens="food">food</option>-->
                                        <!--                                                    <option data-tokens="hotels">hotels</option>-->
                                        <!--                                                </select>-->
                                        <!--                                            </li>-->
                                        <!--                                            <li>-->
                                        <!--                                                <select class="selectpicker" data-live-search="true"-->
                                        <!--                                                        title="view all excludes">-->
                                        <!--                                                    <option data-tokens="view all includes">view all includes</option>-->
                                        <!--                                                    <option data-tokens="transports">transports</option>-->
                                        <!--                                                    <option data-tokens="flights">flights</option>-->
                                        <!--                                                    <option data-tokens="sight seeing">sight seeing</option>-->
                                        <!--                                                    <option data-tokens="food">food</option>-->
                                        <!--                                                    <option data-tokens="hotels">hotels</option>-->
                                        <!--                                                </select>-->
                                        <!--                                            </li>-->
                                        <!--                                        </ul>-->
                                        <!--                                    </div>-->
                                        <!--                                </div>-->

                                    </div>

                                </div>
                            </div>
                            <!-- slider start -->
                            <div class="package_details_slider">
                                <div id="package_details_slider" class="owl-carousel owl-theme">
                                    <div class="item" ng-repeat="slide in tourDetails.Pics"><img ng-src="{{slide.Image}}"
                                                                                                 alt="slide"></div>
                                </div>
                            </div>
                            <!-- slider end -->

                            <!-- Booking area Start-->
                            <div class="booking_area_section">
                                <p>{{tourDetails.Details.PreviewDescription}}</p>

                                <div class=" full_width booking_form_bg">
                                    <div class="main_content_form">
                                        <!-- tab_search form start -->
                                        <form>
                                            <div class="pullleft check_in_field">
                                                <label>available on</label>
                                                <input type="text" id="Check_out_date_tab" placeholder="dd/mm/yyyy">
                                                <i class="fa fa-calendar"></i>
                                            </div>

                                            <div class="pullleft room_select_field" ng-init="personscount = '1'">
                                                <label>adults</label>
                                                <select class="form-control selectpicker"
                                                        ng-model="personscount" data-live-search="true"
                                                        id="search_adults">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                                <i class="fa fa-caret-down"></i>

                                            </div>
    <!--                                        <div class="pullleft room_select_field">-->
    <!--                                            <label>kids</label>-->
    <!--                                            <select class="form-control selectpicker" data-live-search="true"-->
    <!--                                                    id="search_kids">-->
    <!--                                                <option value="1">01</option>-->
    <!--                                                <option value="2">02</option>-->
    <!--                                                <option value="3">03</option>-->
    <!--                                                <option value="4">04</option>-->
    <!--                                            </select>-->
    <!--                                            <i class="fa fa-caret-down"></i>-->
    <!--                                        </div>-->
                                            <div class="pullleft submit_field">
                                                <label>total:<span class="total_doller"> {{(tourDetails.Details.Price * personscount)}} {{tourDetails.Details.Iso}} </span></label>
                                                <input type="submit" value="<?php echo lang('tours_booknow'); ?>" class="search_tabs">

                                            </div>
                                        </form>
                                        <!-- tab_search form End -->
                                    </div>

                                </div>

                            </div>
                            <!-- Booking area End -->
                            <?php /**/ ?>
                            <!-- package tabs start -->
                            <div class="full_width Travelite_middle_tabs" id="Travelite_middle_tabs">
                                <div class="pcg_tabs_panel">
                                    <ul>
                                        <li><a><?php echo lang('tours_moreinformation'); ?></a></li>
                                        <!--                                <li><a href="#tab_search_2" class="">Show Map</a></li>-->
                                        <!--                                <li><a href="#tab_search_3" class="">Review</a></li>-->
                                        <!--                                <li><a href="#tab_search_4" class="">comments</a></li>-->
                                    </ul>
                                </div>
                                <!--  tab content start -->
                                <div id="tab_search_1" class="tab_details_part">


                                    <p ng-bind-html="prepHtml(tourDetails.Details.FullReview)"></p>

                                    <div class="inner_content" ng-repeat="day in tourDetails.Days">
                                        <div class="day_title">Day {{day.TourDayNumber}}</div>
                                        <p>{{day.Description}}</p>
                                    </div>


                                </div>
                                <!--  tab content End -->

                                <!--  tab content start -->
                                <!--                        <div id="tab_search_2" class="tab_details_part">-->
                                <!---->
                                <!--                            <p>There are many variations of passages of Lorem Ipsum available, but the joy have suffered-->
                                <!--                                alteration in some format, by injected humour. There are many variations of passages of-->
                                <!--                                Lorem Ipsum available, but the joy have suffered alteration in some format, by injected-->
                                <!--                                humour. There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                passages of Lorem Ipsum.-->
                                <!--                            </p>-->
                                <!---->
                                <!--                            <div class="inner_content">-->
                                <!--                                <div class="day_title">Day 1</div>-->
                                <!--                                <p>There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                    suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                    passages of Lorem Ipsum available, but the joy have suffered alteration in some-->
                                <!--                                    format, by injected humour.-->
                                <!--                                </p>-->
                                <!--                            </div>-->
                                <!---->
                                <!--                            <div class="inner_content">-->
                                <!--                                <div class="day_title">Day 2</div>-->
                                <!--                                <p>There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                    suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                    passages of Lorem Ipsum available, but the joy have suffered alteration in some-->
                                <!--                                    format, by injected humour.-->
                                <!--                                </p>-->
                                <!--                            </div>-->
                                <!---->
                                <!--                        </div>-->
                                <!--  tab content End -->
                                <!--  tab content start -->
                                <!--                        <div id="tab_search_3" class="tab_details_part">-->
                                <!---->
                                <!--                            <p>There are many variations of passages of Lorem Ipsum available, but the joy have suffered-->
                                <!--                                alteration in some format, by injected humour. There are many variations of passages of-->
                                <!--                                Lorem Ipsum available, but the joy have suffered alteration in some format, by injected-->
                                <!--                                humour. There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                passages of Lorem Ipsum.-->
                                <!--                            </p>-->
                                <!---->
                                <!--                            <div class="inner_content">-->
                                <!--                                <div class="day_title">Day 1</div>-->
                                <!--                                <p>There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                    suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                    passages of Lorem Ipsum available, but the joy have suffered alteration in some-->
                                <!--                                    format, by injected humour.-->
                                <!--                                </p>-->
                                <!--                            </div>-->
                                <!---->
                                <!--                            <div class="inner_content">-->
                                <!--                                <div class="day_title">Day 2</div>-->
                                <!--                                <p>There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                    suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                    passages of Lorem Ipsum available, but the joy have suffered alteration in some-->
                                <!--                                    format, by injected humour.-->
                                <!--                                </p>-->
                                <!--                            </div>-->
                                <!---->
                                <!--                        </div>-->
                                <!--  tab content End -->
                                <!--  tab content start -->
                                <!--                        <div id="tab_search_4" class="tab_details_part">-->
                                <!---->
                                <!--                            <p>There are many variations of passages of Lorem Ipsum available, but the joy have suffered-->
                                <!--                                alteration in some format, by injected humour. There are many variations of passages of-->
                                <!--                                Lorem Ipsum available, but the joy have suffered alteration in some format, by injected-->
                                <!--                                humour. There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                passages of Lorem Ipsum.-->
                                <!--                            </p>-->
                                <!---->
                                <!--                            <div class="inner_content">-->
                                <!--                                <div class="day_title">Day 1</div>-->
                                <!--                                <p>There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                    suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                    passages of Lorem Ipsum available, but the joy have suffered alteration in some-->
                                <!--                                    format, by injected humour.-->
                                <!--                                </p>-->
                                <!--                            </div>-->
                                <!---->
                                <!--                            <div class="inner_content">-->
                                <!--                                <div class="day_title">Day 2</div>-->
                                <!--                                <p>There are many variations of passages of Lorem Ipsum available, but the joy have-->
                                <!--                                    suffered alteration in some format, by injected humour. There are many variations of-->
                                <!--                                    passages of Lorem Ipsum available, but the joy have suffered alteration in some-->
                                <!--                                    format, by injected humour.-->
                                <!--                                </p>-->
                                <!--                            </div>-->
                                <!---->
                                <!--                        </div>-->
                                <!--  tab content End -->

                            </div>
                            <!-- package tabs End -->

                            <?php /**/ ?>
                            <!-- highlight section start -->
                            <div class="full_width package_highlight_section">
                                <h4>highlights</h4>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="cost_include_exclude">
                                            <h5>cost includes</h5>
                                            <ul>
                                                <li ng-repeat="inc in tourDetails.Services| filter:{ServiceStatusId:1}:True">
                                                    {{inc.ServiceName}}
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-5 col-sm-12 col-lg-offset-1 col-md-offset-1">
                                        <div class="cost_include_exclude cost_excludes">
                                            <h5>COST EXCLUDES:</h5>
                                            <ul>
                                                <li ng-repeat="inc in tourDetails.Services| filter:{ServiceStatusId:0}:True">
                                                    {{inc.ServiceName}}
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <!-- highlight section end -->


                    </div><!-- right main start -->
                </div> <!-- col-lg-9-end -->

            </div><!--  row main -->
        </div> <!-- container -->
    </div> <!-- main wrapper -->
</div>