<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/patches.css"/>
<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <?php

        ?>
        <form class="form-horizontal wysiwyg" method="post" name="addTour" enctype="multipart/form-data" id="addTourFrm"
              novalidate="novalidate">

            <div class="control-group">
                <label class="control-label">Tour Name</label>

                <input type="hidden" value="<?php echo $tourDetails['tour']['Id']; ?>" name="tourId">
                <div class="controls">
                    <?php
                    foreach ($tourDetails['descriptions'] as $key => $val) {
                        ?>
                        <span class="input-icon">
                        <input type="text" name="names[<?php echo $val['LangId']; ?>][tourName]"
                               value="<?php echo $val['TourName']; ?>" required="required"/>
                        <i class="icon-globe"><?php echo $val['LangIso']; ?></i>
                    </span>
                        <?php
                    }
                    ?>
                </div>
            </div>


            <div class="control-group">
                <label class="control-label">Tour Preview</label>

                <div class="controls">

                    <?php
                    foreach ($tourDetails['descriptions'] as $key => $val) {
                        ?>
                        <span class="input-icon">
                                            <textarea type="text"
                                                      name="names[<?php echo $val['LangId']; ?>][tourdescription]"
                                                      class="input-style"
                                                      required="required"/><?php echo $val['PreviewDescription']; ?></textarea>
                            <i class="icon-globe"><?php echo $val['LangIso']; ?></i>
                                        </span>
                        <?php
                    }
                    ?>

                </div>
            </div>


            <div class="control-group">
                <label class="control-label">Image Preview</label>
                <div class="controls"><input type="file" id="thumb" name="thumb" accept="image/jpeg">

                    <img src="<?php echo $tourDetails['tour']['ThumbImage']; ?>"/>
                </div>
            </div>


            <?php
            foreach ($tourDetails['descriptions'] as $key => $val) {
                ?>

                <div class="control-group">
                    <label class="control-label">Tour Description <?php echo $val['LangIso']; ?></label>


                    <input type="hidden" id="editor<?php echo $val['LangId']; ?>_hidden"
                           value='<?php echo $val['FullReview']; ?>'" name="names[<?php echo $val['LangId']; ?>
                    ][fulldescription]">
                    <div class="controls">
                        <div class="wysiwyg-editor" id="editor<?php echo $val['LangId']; ?>"></div>
                        <div class="hr hr-double dotted"></div>
                    </div>
                </div>

                <?php
            }
            ?>


            <div class="control-group">
                <label class="control-label">Tour Price</label>

                <div class="controls">
                    <input type="text" value="<?php echo $tourDetails['price']['Price']; ?>" name="tourPrice"
                           id="tourPrice">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Tour Discount</label>

                <div class="controls">
                    <select name="tourDiscountType" id="tourDiscountType">
                        <option
                            value="0" <?php $tourDetails['price']['DiscountType'] == 0 ? print "selected='selected'" : ""; ?>
                        ">Number</option>
                        <option
                            value="1" <?php $tourDetails['price']['DiscountType'] == 1 ? print "selected='selected'" : ""; ?>>
                            Percent
                        </option>
                    </select>
                    <input type="text" value="<?php echo $tourDetails['price']['DiscountValue']; ?>" name="tourDiscount"
                           id="tourDiscount">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Tour Final Price</label>

                <div class="controls">
                    <span id="finalPrice">0.00</span>$
                </div>
            </div>
            <!---->
            <!--            <div class="control-group">-->
            <!--                <label class="control-label">Code</label>-->
            <!--                <div class="controls">-->
            <!--                    <input type="text" name="modelCode" value="" placeholder="Code"/>-->
            <!--                </div>-->
            <!--            </div>-->


            <!--            <div class="control-group">-->
            <!--                <label class="control-label">Options</label>-->
            <!---->
            <!--                <div class="controls">-->
            <!--                    <label>-->
            <!--                        <input name="productShipping" type="checkbox" value="1"/>-->
            <!--                        <span class="lbl">Free Shipping</span>-->
            <!--                    </label>-->
            <!---->
            <!--                    <label>-->
            <!--                        <input name="productPreorder" type="checkbox" value="1"/>-->
            <!--                        <span class="lbl">Preorder</span>-->
            <!--                    </label>-->
            <!--                </div>-->
            <!--            </div>-->

            <hr/>


            <div class="control-group">
                <label class="control-label">Categories</label>

                <div class="controls">
                    <!--                        catgories-list-->
                    <div class=" span3">
                        <select name="category" id="category">
                            <option value="">Select Category</option>
                            <?php
                            foreach ($categories as $key => $val) {
                                ?>
                                <option value="<?php echo $val['Id']; ?>"
                                    <?php $tourDetails['tour']['CategoryId'] == $val['Id'] ? print "selected='selected'" : ""; ?>
                                ><?php echo $val['CategoryName']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>


                    <div class="span3">
                        <h4>Subcategories</h4>
                        <div id="sub-categories-list">
                            Please Choose Category First
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button class="btn btn-info" type="submit">
                    <i class="icon-ok bigger-110"></i>
                    Submit
                </button>

                &nbsp; &nbsp; &nbsp;
                <button class="btn" type="reset">
                    <i class="icon-undo bigger-110"></i>
                    Reset
                </button>
            </div>
        </form>
    </div>
</div>


<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {


        //Init editors with values

        $("#editor1").html($("#editor1_hidden").val());
        $("#editor2").html($("#editor2_hidden").val());
        $("#editor3").html($("#editor3_hidden").val());


        $.validator.methods.equal = function (value, element, param) {
            return value == param;
        };
        // validate signup form on keyup and submit
        $("#addTourFrm").validate({
                rules: {
                    "names[1][tourName]": "required",
                    "names[1][tourdescription]": "required",
//                modelCode: "required",
                    category: "required",
                    productPrice: {
                        required: true,
                        number: true
                    }
                },
                messages: {
                    "names[1][tourName]": "Please enter your Tour Name",
                    "names[1][tourdescription]": "Please enter your Tour Description",
                    productPrice: {
                        required: "Please enter Product Price",
                        number: "Please Enter Correct Number"
                    },
                    category: "Please Choose Category",
                }

                ,
                submitHandler: function (form) {
                    // do other things for a valid form
                    // form.submit();
//                    console.log(form.serialize());


                    var editor1Html = $("#editor1").html();
                    var editor1Html2 = $("#editor2").html();
                    var editor1Html3 = $("#editor3").html();

                    $("#editor1_hidden").val(editor1Html);
                    $("#editor2_hidden").val(editor1Html2);
                    $("#editor3_hidden").val(editor1Html3);


                    //alert($("#editor1_hidden").val();
                    form.submit();
                }

            }
        );


        function loadSubCategories(categoryId) {

            $.ajax({
                url: "<?php echo base_url();?>/services/tourssvc/GetSubcategories",
                data: {categoryId: categoryId, tourId: '<?php echo  $tourDetails['tour']['Id'];?>'},
                dataType: "json",
                type: "post"
            }).success(function (subCategories) {

                $("#sub-categories-list").html("");

                var appendSubCategoriesList = "";
                $.each(subCategories, function (i, cat) {
                    appendSubCategoriesList += "<label>";
                    if (cat.CategoryId != null) {
                        appendSubCategoriesList += "<input name='subcategory[" + cat.Id + "]' type='checkbox' checked='checked'/>"
                    } else {
                        appendSubCategoriesList += "<input name='subcategory[" + cat.Id + "]' type='checkbox'/>"
                    }


                    appendSubCategoriesList += "<span class='lbl'> " + cat.CategoryName + "</span>" +
                        "</label>";
                });

                $("#sub-categories-list").html(appendSubCategoriesList);


            });


        }


        $("#category").change(function () {
            var categoryId = $(this).val();
            loadSubCategories(categoryId);
        });


        function calcFinalPrice() {

            var totalPrice = 0;
            var price = $("#tourPrice").val();
            var discountType = $("#tourDiscountType").val();
            var discount = $("#tourDiscount").val();


            if (discountType == 0) {
                totalPrice = price - discount;
            } else {
                totalPrice = price - ((price / 100) * discount);
            }


            $("#finalPrice").html(totalPrice.toFixed(2));
            $("#finalPrice").attr("data-final", totalPrice.toFixed(2));

        }


        calcFinalPrice();

        $("#tourPrice").keyup(function () {

            calcFinalPrice();


        });
        $("#tourDiscount").keyup(function () {

            calcFinalPrice();


        });
        $("#tourDiscountType").change(function () {

            calcFinalPrice();


        });


//preload and preselect sub categories
        var selectedCategory = $("#category option:selected").val();
        if (selectedCategory != null) {
            loadSubCategories(selectedCategory);
        }


    });
</script>