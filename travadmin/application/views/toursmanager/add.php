<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/patches.css"/>
<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->

        <form class="form-horizontal wysiwyg" method="post" name="addTour" id="addTourFrm" novalidate="novalidate">


            <!--                <section id="editor">-->
            <!---->
            <!--                    <div id='edit1' style="margin-top: 30px;">-->
            <!--                        <img class="fr-fir fr-dii" src="../../img/photo1.jpg" alt="Old Clock" width="150"/>-->
            <!--                        <h3>This is the first editor instance</h3>-->
            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis diam in odio iaculis-->
            <!--                            blandit. Nunc eu mauris sit amet purus viverra gravida ut a dui.</p>-->
            <!--                    </div>-->
            <!---->
            <!--                    <button type="button" class="btn btn-primary saveme">Save</button>-->
            <!--                </section>-->


            <div class="control-group">
                <label class="control-label">Tour Name</label>

                <div class="controls">
                    <span class="input-icon">
                        <input type="text" name="names[1][tourName]" required="required"/>
                        <i class="icon-globe">EN</i>
                    </span>
                    <span class="input-icon">
                        <input type="text" name="names[2][tourName]"/>
                        <i class="icon-globe">DE</i>
                    </span>
                    <span class="input-icon">
                        <input type="text" name="names[3][tourName]"/>
                        <i class="icon-globe">RU</i>
                    </span>
                </div>
            </div>


            <div class="control-group">
                <label class="control-label">Tour Preview</label>

                <div class="controls">
                                        <span class="input-icon">
                                            <textarea type="text" name="names[1][tourdescription]"
                                                      class="input-style"
                                                      required="required"/></textarea>
                                            <i class="icon-globe">EN</i>
                                        </span>

                                        <span class="input-icon">
                                            <textarea type="text" name="names[2][tourdescription]"
                                                      class="input-style"/></textarea>
                                            <i class="icon-globe">DE</i>
                                        </span>

                                        <span class="input-icon">
                                            <textarea type="text" name="names[3][tourdescription]"
                                                      class="input-style"/></textarea>
                                            <i class="icon-globe">RU</i>
                                        </span>
                </div>
            </div>


            <div class="control-group">
                <label class="control-label">Tour Description English</label>

                <input type="hidden" id="thumb" name="thumb" value="">
                <input type="hidden" id="editor1_hidden" name="names[1][fulldescription]">
                <div class="controls">
                    <div class="wysiwyg-editor" id="editor1"></div>
                    <div class="hr hr-double dotted"></div>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Tour Description German</label>

                <input type="hidden" id="editor2_hidden" name="names[2][fulldescription]">
                <div class="controls">
                    <div class="wysiwyg-editor" id="editor2"></div>
                    <div class="hr hr-double dotted"></div>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Tour Description Russian</label>

                <input type="hidden" id="editor3_hidden" name="names[3][fulldescription]">
                <div class="controls">
                    <div class="wysiwyg-editor" id="editor3"></div>
                    <div class="hr hr-double dotted"></div>
                </div>
            </div>


            <div class="control-group">
                <label class="control-label">Tour Price</label>

                <div class="controls">
                    <input type="text" value="0.00" name="tourPrice" id="tourPrice">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Tour Discount</label>

                <div class="controls">
                    <select name="tourDiscountType" id="tourDiscountType">
                        <option value="0">Number</option>
                        <option value="1">Percent</option>
                    </select>
                    <input type="text" value="0.00" name="tourDiscount" id="tourDiscount">
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
                                <option value="<?php echo $val['Id']; ?>"><?php echo $val['CategoryName']; ?></option>
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


                    form.submit();
                }

            }
        );


        function loadSubCategories(categoryId) {

            $.ajax({
                url: "<?php echo base_url();?>/services/tourssvc/GetSubcategories",
                data: {categoryId: categoryId, tourId: 0},
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


        $("#tourPrice").keyup(function () {

            calcFinalPrice();


        });
        $("#tourDiscount").keyup(function () {

            calcFinalPrice();


        });
        $("#tourDiscountType").change(function () {

            calcFinalPrice();


        });


    });
</script>