
<!--content body start-->
<div id="content_wrapper">
    <!--page title start-->
    <div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url('<?php echo base_url();?>assets/images/page_title_bg.jpg');">
        <ul>
            <li><a href="javascript:;">contact us</a></li>
        </ul>
    </div>
    <!--page title end-->
    <div class="clearfix"></div>

    <!-- contact map section start -->
<!--    <div class="full_width tr_contact_map_section">-->
<!---->
<!--        <div class="map_main">-->
<!--            <div id="bigth_googleMap"></div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
    <!-- contact map section End -->

    <!-- contact details section start -->
    <div class="full_width tr_contact_detais_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="conatact_form_ds">
                        <div id="sent-status" style="display: none;">
                            <h2><?php echo lang('tpl_messagesent');?></h2>
                        </div>
                        <form method="post" action="<?php echo base_url();?>contact">
                            <input type="text" name="name" placeholder="Name" class="input_c" required="required">
                            <input type="email" name="email" placeholder="Email" class="input_c" required="required">
                            <input type="text" name="phone" placeholder="Phone" class="input_c" required="required">
                            <textarea class="text_area_c" placeholder="Message" name="msgs" required="required"></textarea>
                            <input type="submit" value="Send" class="btn_green" id="form_submit">

                            <?php echo validation_errors(); ?>
                        </form>
                        

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-8 col-lg-offset-2">
                            <div class="address_contact_details">
                                <div class="address_detais_city">
                                    Tbilisi:
                                </div>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> Georgia</li>
                                    <li><i class="fa fa-envelope"></i> Info@takeofftogeorgia.com</li>
                                    <li><i class="fa fa-phone"></i> +995 593 651 832</li>
                                </ul>
                            </div>

<!--                            <div class="address_contact_details">-->
<!--                                <div class="address_detais_city">-->
<!--                                    Melbourne:-->
<!--                                </div>-->
<!--                                <ul>-->
<!--                                    <li><i class="fa fa-map-marker"></i> 1234, Street Name, City Name.</li>-->
<!--                                    <li><i class="fa fa-envelope"></i> Info@travellers.com</li>-->
<!--                                    <li><i class="fa fa-phone"></i> +1 235 654 4569</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                            <div class="address_contact_details">-->
<!--                                <div class="address_detais_city">-->
<!--                                    Delhi:-->
<!--                                </div>-->
<!--                                <ul>-->
<!--                                    <li><i class="fa fa-map-marker"></i> 1234, Street Name, City Name.</li>-->
<!--                                    <li><i class="fa fa-envelope"></i> Info@travellers.com</li>-->
<!--                                    <li><i class="fa fa-phone"></i> +1 235 654 4569</li>-->
<!--                                </ul>-->
<!--                            </div>-->
                        </div>

                        <div class="col-lg-4 col-md-5 col-sm-4 t_align_c">
                            <!-- facebook squre start -->
                            <div class="social_box facebook_b_wrap">
                                <a href="https://www.facebook.com/Takeofftogeorgia-1731636153771032/" target="_blank"><i class="fa fa-facebook-square"></i></a>
<!--                                <div class="social_likes">30000</div>-->
<!--                                <div class="shares_and_likes">shares & Likes</div>-->
                            </div>
                            <!-- facebook squre End -->


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- contact details section End -->

    <!-- contact section End -->

    <!-- counter section End -->

</div>
<!--content body end-->


<script type="text/javascript">
    $(document).ready(function () {

        var showMsg = '<?php echo $sentstatus;?>';

        if(showMsg == 1){
            $("#sent-status").show();

            setTimeout(function(){
                $("#sent-status").hide();
            }, 3000);
        }




    })
</script>