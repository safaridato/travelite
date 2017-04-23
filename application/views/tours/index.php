<?php
if (is_array($category) && !empty($category)) {
    ?>
    <div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0"
         style="background-image:url(<?php echo $category['ImageLink'];?>);">
        <ul>
            <li><a href="javascript:;"><?php echo $category['CategoryName'];?></a></li>
        </ul>
    </div>
    <?php
}
//print_r($category);

?>


<!--page title end-->
<div class="clearfix"></div>
<div class="full_width destinaion_sorting_section" ng-controller="ToursListController">
    <div class="container" ng-init="formFields.CategoryId = '<?php  (is_array($category) && !empty($category) && $category["Id"]) ? print $category["Id"] : print 0; ?>'; GetToursList()">
        <div class="row space_100">
            <!-- left sidebar start -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="Travelite_left_sidebar">
                    <div class="sidebar_search_bar">
                        <form>
                            <input type="search" placeholder="Search" id="sidebar_search">
                        </form>

                    </div>
                    <!--                    <aside class="widget destination_widget">-->
                    <!--                        <h4 class="widget-title">chosse destination</h4>-->
                    <!--                        <div class="travel_checkbox_round">-->
                    <!--                            <input type="checkbox" id="singapore">-->
                    <!--                            <label for="singapore">Singapore</label>-->
                    <!--                            <input type="checkbox" id="africa">-->
                    <!--                            <label for="africa">africa</label>-->
                    <!--                            <input type="checkbox" id="australia">-->
                    <!--                            <label for="australia">australia</label>-->
                    <!--                            <input type="checkbox" id="america">-->
                    <!--                            <label for="america">america</label>-->
                    <!--                            <input type="checkbox" id="nepal">-->
                    <!--                            <label for="nepal">nepal</label>-->
                    <!--                            <input type="checkbox" id="europe">-->
                    <!--                            <label for="europe">europe</label>-->
                    <!--                            <input type="checkbox" id="japan">-->
                    <!--                            <label for="japan">japan</label>-->
                    <!--                            <input type="checkbox" id="india">-->
                    <!--                            <label for="india">india</label>-->
                    <!--                            <input type="checkbox" id="egypt">-->
                    <!--                            <label for="egypt">egypt</label>-->
                    <!--                            <input type="checkbox" id="malaysia">-->
                    <!--                            <label for="malaysia">malaysia</label>-->
                    <!---->
                    <!--                        </div>-->
                    <!---->
                    <!--                    </aside>-->

                    <!--                    <aside class="widget widget_filter">-->
                    <!--                        <h4 class="widget-title">filter by price</h4>-->
                    <!--                        <div class="price_filter_slider">-->
                    <!--                            <div id="slider"></div>-->
                    <!--                            <p class="range_text">-->
                    <!--                                <label for="amount">Price range:</label>-->
                    <!--                                <input type="text" id="amount" readonly>-->
                    <!--                            </p>-->
                    <!--                        </div>-->
                    <!--                    </aside>-->

                    <aside class="widget category_widget">
                        <h4 class="widget-title">categories</h4>
                        <div class="travel_checkbox_round">

                            <?php
                            foreach($categories as  $key=>$val){
                                ?>
                                <input type="checkbox" id="check_<?php echo $val['cats']['Id'];?>">
                                <label for="check_<?php echo $val['cats']['Id'];?>"><?php echo $val['cats']['CategoryName'];?></label>

                            <?php
                            }

                            ?>

                        </div>

                    </aside>

                    <?php /*
                    <aside class="widget hotel_widgets">
                        <h4 class="widget-title">Australia Hotels</h4>
                        <ul>
                            <li> <img src="http://placehold.it/70x70" alt="hotel thumb">
                                <div>
                                    <h4><a href="#">Diamond Hotel</a></h4>
                                    <p>$199 / Night</p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                            </li>
                            <li> <img src="http://placehold.it/70x70" alt="hotel thumb">
                                <div>
                                    <h4><a href="#">sliver Hotel</a></h4>
                                    <p>$199 / Night</p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                            </li>
                            <li> <img src="http://placehold.it/70x70" alt="hotel thumb">
                                <div>
                                    <h4><a href="#">platinum Hotel</a></h4>
                                    <p>$199 / Night</p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                            </li>

                        </ul>

                    </aside>
*/ ?>
                </div>
            </div>
            <!-- left sidebar end -->
            <!-- right main start -->
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="tour_packages_right_section left_space_40">
                    <?php
                    if (is_array($category) && !empty($category)) {
                        ?>
                        <div class="tour_packages_description">
                            <div class="tour_heading">
                                <h4><?php echo $category['CategoryName']; ?></h4>
                                <!--                            <span class="packs">(178 Packs Found)</span>-->
                            </div>
                            <p class="more_text"
                               data-lang-more="<?php echo lang("tpl_seemore"); ?>"><?php echo $category['PackageDescription']; ?></p>

                        </div>

                        <?php
                    }
                    ?>


                    <div class="full_width sorting_panel">
                        <!--                        <div class="sorting_destination">-->
                        <!--                            <select class="form-control selectpicker" id="search_rooms">-->
                        <!--                                <option value="1">Sort by : Popularity</option>-->
                        <!--                                <option value="2">02</option>-->
                        <!--                                <option value="3">03</option>-->
                        <!--                                <option value="4">04</option>-->
                        <!--                            </select>-->
                        <!--                            <i class="fa fa-chevron-down"></i>-->
                        <!--                        </div>-->
                        <!--                        <div class="sorting_destination">-->
                        <!--                            <select class="form-control selectpicker" id="search_places">-->
                        <!--                                <option value="1">Show: 9 places/page</option>-->
                        <!--                                <option value="2">02</option>-->
                        <!--                                <option value="3">03</option>-->
                        <!--                                <option value="4">04</option>-->
                        <!--                            </select>-->
                        <!--                            <i class="fa fa-chevron-down"></i>-->
                        <!--                        </div>-->
                        <div class="sorting_destination">
                            <select class="form-control selectpicker" id="search_prices">
                                <option value="1">Sort by : Price</option>
                                <option value="2">50</option>
                                <option value="3">75</option>
                                <option value="4">100</option>
                            </select>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <!-- sorting list -->
                        <!--                        <div class="pull-right sort_list_grid">-->
                        <!--                            <a href="Tour-Packages-Grid-View.html"><i class="fa fa-th-large"></i></a>-->
                        <!--                            <a href="Tour-Packages-List-View.html"><i class="fa fa-th-list active_sort"></i></a>-->
                        <!--                        </div>-->
                        <!-- sorting list end-->

                    </div><!--  sorting panel End -->


                    <!-- sorting places section -->
                    <div class="full_width sorting_places_section">
                        <!--sort_list start -->
                        <div class="sorting_places_wrap  list_sorting_view" ng-repeat="tour in toursList">
                            <div class="col-lg-5 col-md-5 col-sm-5 padding_none">
                                <div class="thumb_wrape">
                                    <!--                                    <img src="http://placehold.it/297x225" class="img-responsive" alt="list thumb">-->
                                    <img ng-src="{{tour.details.ThumbImage}}" class="img-responsive"
                                         alt="{{tour.details.TourName}}">
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="top_head_bar">
                                    <h4><a href="#">{{tour.details.TourName}}</a></h4>
                                    <span class="time_date"><i class="fa fa-clock-o"></i>{{tour.details.DaysCount}}days</span>
                                </div>
                                <div class="bottom_desc">
                                    <h5><?php echo lang('tours_startingfrom'); ?><span>{{tour.details.Price}} {{tour.details.Iso}} /</span><?php echo lang('tours_perperson'); ?>
                                    </h5>
                                    <!-- desc icons Start-->
                                    <ul class="sort_place_icons">
                                        <li ng-repeat="bundle in tour.bundles"><i
                                                class="fa fa-{{bundle.ClassName}}"></i> {{bundle.BundleName}}
                                        </li>
                                    </ul>
                                    <!-- desc icons End-->
                                    <div class="view-details">
                                        <a href="<?php echo base_url(); ?>tours/details/{{tour.details.Id}}"
                                           class="list_view_details btns"><?php echo lang('tours_viewdetails'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--sort_list start end-->


                    </div>
                    <!-- sorting places section -->
                    <?php /*
                    <!-- pagination section -->
                    <div class="full_width pagination_bottom">
                        <ul class="pagination">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                    <!-- pagination section -->
                    */
                    ?>
                </div>
            </div><!-- right main start -->
        </div>
    </div>

</div>
<!--content body end-->