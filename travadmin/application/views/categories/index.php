<div class="row-fluid bindContainer" id="categoriesBindContainer">
    <div class="span10">
        <ul class="categoriesTree">
            <!--            Add New Category-->
            <li>
                <div>
                    <input type="text" name="category[]" placeholder="Category Name EN"
                           class="addNewCategoryName input-large" id="addNewCategoryName1">
                    <input type="text" name="category[]" placeholder="Category Name DE"
                           class="addNewCategoryName input-large" id="addNewCategoryName2">
                    <input type="text" name="category[]" placeholder="Category Name RU"
                           class="addNewCategoryName input-large" id="addNewCategoryName3">

                    <hr/>
                    <textarea placeholder="Descriptions EN" class="input-large"
                              id="addNewCategoryDescription1"></textarea>
                    <textarea placeholder="Descriptions DE" class="input-large"
                              id="addNewCategoryDescription2"></textarea>
                    <textarea placeholder="Descriptions RU" class="input-large"
                              id="addNewCategoryDescription3"></textarea>


                    <input type="file" name="file1[]" id="file1" class="addCategoryPic">

                    <button type="button" class="btn btn-mini btn-primary addMainCategory">+ Add Category</button>

                    <div style="display: block;">
                        <span id="loaded_n_total"></span>
                        <span id="progressBar"></span>
                        <span id="status"></span>
                    </div>
                </div>
                <hr/>
            </li>
            <!--            Add New Category-->

            <?php
            foreach ($categoriesList as $key => $val) {
//                echo "<pre>";
//                print_r($categoriesList);
                ?>

                <!--Main Category List-->
                <li class="category_row_<?php echo $val['categories']['Id']; ?>">
                    <div>
                        main category
                    </div>
                    <!--                    Category  Names -->
                    <div class="cat-merge">
                        <!--                        <input type="text" value="-->
                        <?php //echo $val['categories']['CategoryName']; ?><!--"-->
                        <!--                               id="cat_-->
                        <?php //echo $val['categories']['Id']; ?><!--" class="input-large main-category-in">-->
                        <!--                        <input type="text" value="-->
                        <?php //echo $val['categories']['CategoryName']; ?><!--"-->
                        <!--                               id="cat_-->
                        <?php //echo $val['categories']['Id']; ?><!--" class="input-large main-category-in">-->
                        <!--                        <input type="text" value="-->
                        <?php //echo $val['categories']['CategoryName']; ?><!--"-->
                        <!--                               id="cat_-->
                        <?php //echo $val['categories']['Id']; ?><!--" class="input-large main-category-in">-->

                        <?php

                        foreach ($val['categories']['translations'] as $tKey => $tVal) {
                            ?>
                            <input type="text" value="<?php echo $tVal['Value']; ?>"
                                   id="catVal_<?php echo $tVal['CategoryId']."_".$tVal['LangId']; ?>"
                                   placeholder="Category Name <?php echo $tVal['LangIso']; ?>"
                                   class="input-large main-category-in">
                            <?php
                        }

                        ?>


                    </div>

                    <!--                    Category  Image -->
                    <div class="cat-merge">
                        <img class="cat-img"
                             src="http://localhost/travelite<?php echo $val['categories']['ImageLink']; ?>">

                        <input type="file" name="file1[]" id="filemc<?php echo $tVal['CategoryId']; ?>"
                               class="addCategoryPic">
                    </div>

                    <!--                    Category  Descriptions -->
                    <div class="cat-merge">
                        <?php

                        foreach ($val['categories']['translations'] as $tKey => $tVal) {
                            ?>
                            <textarea id="catDesc_<?php echo $tVal['CategoryId']."_".$tVal['LangId']; ?>"
                                      placeholder="Description <?php echo $tVal['LangIso']; ?>"
                                      class="input-large main-category-in"><?php echo $tVal['PackageDescription']; ?></textarea>
                            <?php
                        }
                        ?>

                    </div>


                    <button type="button" class="deleteCategory btn btn-minier btn-danger"
                            data-catname="<?php echo $val['categories']['CategoryName']; ?>"
                            data-category="<?php echo $val['categories']['Id']; ?>">&times;</button>
                    <button type="button" class="editMainCategory btn btn-minier btn-success"
                            data-catname="<?php echo $val['categories']['CategoryName']; ?>"
                            data-category="<?php echo $val['categories']['Id']; ?>"><i
                            class="icon-pencil bigger-125"></i></button>
                </li>
                <!--Main Category List-->

                <!--                Add SubCategory-->
                <li class="main-category-li category_add_row_<?php echo $val['categories']['Id']; ?>">
                    <div>
                        <input type="text" name="subCategory[]" placeholder="SubCategory Name EN"
                               class="addNewSubCategory input-medium "
                               id="addSubCategoryName1_<?php echo $val['categories']['Id']; ?>">

                        <input type="text" name="subCategory[]" placeholder="SubCategory Name DE"
                               class="addNewSubCategory input-medium "
                               id="addSubCategoryName2_<?php echo $val['categories']['Id']; ?>">

                        <input type="text" name="subCategory[]" placeholder="SubCategory Name RU"
                               class="addNewSubCategory input-medium "
                               id="addSubCategoryName3_<?php echo $val['categories']['Id']; ?>">

                        <hr/>


                        <textarea placeholder="Description EN" name="subDesc[]"
                                  id="addSubCategoryDesc1_<?php echo $val['categories']['Id']; ?>"></textarea>
                        <textarea placeholder="Description DE" name="subDesc[]"
                                  id="addSubCategoryDesc2_<?php echo $val['categories']['Id']; ?>"></textarea>
                        <textarea placeholder="Description RU" name="subDesc[]"
                                  id="addSubCategoryDesc3_<?php echo $val['categories']['Id']; ?>"></textarea>


                        <button type="button" class="btn btn-mini btn-info addSubCategory"
                                data-parent="<?php echo $val['categories']['Id']; ?>">+ Add Sub Category
                        </button>
                    </div>
                </li>
                <!--                Add SubCategory-->

                <!--                Sub Categories List-->
                <?php

//                echo "<pre>";
//                print_r($val['subs']);
                if (!empty($val['subs'])) {
                    ?>
                    <ul class="subCategoriesTree" id="subTree_<?php echo $val['categories']['Id']; ?>">

                        <?php
                        foreach ($val['subs'] as $sKey => $sVal) {
                            ?>
                            <!--                            SubCategory List Item-->
                            <li class="category_row_<?php echo $sVal['Id']; ?>">
                                <!--                                <input type="text" id="cat_-->
                                <?php //echo $sVal['Id']; ?><!--"-->
                                <!--                                       value="-->
                                <?php //echo $sVal['CategoryName']; ?><!--" class="input-small">-->


                                <div class="cat-merge">


                                    <?php

                                    foreach ($sVal['translations'] as $tSKey => $tSVal) {
                                        ?>
                                        <input type="text" value="<?php echo $tSVal['Value']; ?>"
                                               id="subCatVal_<?php echo $tSVal['CategoryId']."_".$tSVal['LangId']; ?>"
                                               placeholder="Category Name <?php echo $tSVal['LangIso']; ?>"
                                               class="input-large main-category-in">
                                        <?php
                                    }

                                    ?>
                                </div>


                                <div class="cat-merge">
                                    <?php

                                    foreach ($sVal['translations'] as $tSKey => $tSVal) {
                                        ?>
                                        <textarea id="subCatDesc_<?php echo $tSVal['CategoryId']."_".$tSVal['LangId']; ?>"
                                                  placeholder="Description <?php echo $tSVal['LangIso']; ?>"
                                                  class="input-large main-category-in"><?php echo $tSVal['PackageDescription']; ?></textarea>
                                        <?php
                                    }
                                    ?>

                                </div>


                                <button type="button" class="deleteCategory btn btn-minier btn-danger"
                                        data-catname="<?php echo $sVal['CategoryName']; ?>"
                                        data-category="<?php echo $sVal['Id']; ?>">&times;</button>
                                <button type="button" class="editSubCategory btn btn-minier btn-success"
                                        data-catname="<?php echo $sVal['CategoryName']; ?>"
                                        data-category="<?php echo $sVal['Id']; ?>"><i
                                        class="icon-pencil bigger-125"></i></button>

                            </li>
                            <!--                            SubCategory List Item-->
                            <?php
                        }
                        ?>
                    </ul>

                    <?php
                }

            }
            ?>
        </ul>
    </div>
</div>


<script>

    $(document).ready(function () {


        function _(el) {
            return document.getElementById(el);
        }


        function addCategory() {
            //var file = _("file1").files[0];

            //  $("#progressBar").fadeIn();

            //alert(file.name+" | "+file.size+"|"+file.type);
            var formdata = new FormData();
            //formdata.append("file1[]", file);


            var ins = _("file1").files.length;

            for (var x = 0; x < ins; x++) {
                formdata.append("file1[]", _("file1").files[x]);

                //fd.append("fileToUpload[]", document.getElementById('fileToUpload').files[x]);
            }

            formdata.append("categoryNames[1][name]", _("addNewCategoryName1").value);
            formdata.append("categoryNames[2][name]", _("addNewCategoryName2").value);
            formdata.append("categoryNames[3][name]", _("addNewCategoryName3").value);

            formdata.append("categoryNames[1][description]", _("addNewCategoryDescription1").value);
            formdata.append("categoryNames[2][description]", _("addNewCategoryDescription2").value);
            formdata.append("categoryNames[3][description]", _("addNewCategoryDescription3").value);


            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            //ajax.open("POST", "file_upload_parser.php")
            ajax.open("POST", "<?php echo site_url()?>categoriesmanager/ajaxaddcategory");
            ajax.send(formdata);
        }


        $(".editMainCategory").click(function () {
            var categoryId = $(this).attr("data-category");

            if (categoryId) {


                var formdata = new FormData();
                //formdata.append("file1[]", file);


                var ins = _("filemc"+categoryId).files.length;

                for (var x = 0; x < ins; x++) {
                    formdata.append("file1[]", _("filemc"+categoryId).files[x]);

                    //fd.append("fileToUpload[]", document.getElementById('fileToUpload').files[x]);
                }

                formdata.append("categoryId", categoryId);

                formdata.append("categoryNames[1][name]", _("catVal_" + categoryId+"_1").value);
                formdata.append("categoryNames[2][name]", _("catVal_" + categoryId+"_2").value);
                formdata.append("categoryNames[3][name]", _("catVal_" + categoryId+"_3").value);

                formdata.append("categoryNames[1][description]", _("catDesc_" + categoryId+"_1").value);
                formdata.append("categoryNames[2][description]", _("catDesc_" + categoryId+"_2").value);
                formdata.append("categoryNames[3][description]", _("catDesc_" + categoryId+"_3").value);


                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandlerEdit, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                //ajax.open("POST", "file_upload_parser.php")
                ajax.open("POST", "<?php echo site_url()?>categoriesmanager/AjaxSetCategory");
                ajax.send(formdata);





                /*

                 var subCatNameEN = $("#catVal_" + categoryId+"_1").val();
                 var subCatNameDE = $("#catVal_" + categoryId+"_2").val();
                 var subCatNameRU = $("#catVal_" + categoryId+"_3").val();

                 var subCatDescEN = $("#catDesc_" + categoryId+"_1").val();
                 var subCatDescDE = $("#catDesc_" + categoryId+"_2").val();
                 var subCatDescRU = $("#catDesc_" + categoryId+"_3").val();

                 var fd = {
                 "categoryId": categoryId,
                 "categoryNames": {
                 "1": {"name": subCatNameEN, "description": subCatDescEN},
                 "2": {"name": subCatNameDE, "description": subCatDescDE},
                 "3": {"name": subCatNameRU, "description": subCatDescRU}
                 }
                 };



                 //catVal_

                 $.ajax({
                 url: "<?php echo base_url();?>categoriesmanager/AjaxSetCategory",
                 data: fd,
                 type: "post"
                 }).done(function (response) {
                 location.reload();
                 });
                 */


            }

        });


        function progressHandler(event) {
            _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes"; // of"+event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progressBar").value = Math.round(percent);
            _("status").innerHTML = Math.round(percent) + "% uploaded >>> please wait";
        }


        function completeHandler(event) {
            _("progressBar").value = 0;
            _("status").innerHTML = event.target.responseText;
            //$("#searchvin").val('');

            //          var vin  = $("#searchvin").val();

            var jsonResp = JSON.parse(event.target.responseText);

            if (jsonResp.Code == 0) {
                location.reload();
            }

            //$("#vinnumber").val(vin);
            /* loadphotos(<?php echo $productId;?>, function(statuscode){

             // alert(statuscode);
             });*/

        }
        function completeHandlerEdit(event) {
            location.reload();
        }

        function errorHandler(event) {
            _("status").innerHTML = "Upload Problem";
        }

        function abortHandler(event) {
            _("status").innerHTML = "Upload aborted";
        }


        $(".addMainCategory").click(function () {
            addCategory();
        });


//
//        $(".addMainCategory").click(function () {
//
//
//                var catNewName = $(".addNewCategoryName").val();
//                var catNewName = $(".addCategoryPic").val();
//
//
//
//        });


        $("body").on("click", ".editSubCategory", function () {
            var categoryId = $(this).attr("data-category");

            if (categoryId) {
                //var catNewName = $("#cat_" + categoryId).val();


                var subCatNameEN = $("#subCatVal_" + categoryId+"_1").val();
                var subCatNameDE = $("#subCatVal_" + categoryId+"_2").val();
                var subCatNameRU = $("#subCatVal_" + categoryId+"_3").val();

                var subCatDescEN = $("#subCatDesc_" + categoryId+"_1").val();
                var subCatDescDE = $("#subCatDesc_" + categoryId+"_2").val();
                var subCatDescRU = $("#subCatDesc_" + categoryId+"_3").val();

                var fd = {
                    "categoryId": categoryId,
                    "categoryNames": {
                        "1": {"name": subCatNameEN, "description": subCatDescEN},
                        "2": {"name": subCatNameDE, "description": subCatDescDE},
                        "3": {"name": subCatNameRU, "description": subCatDescRU}
                    }
                };



                //catVal_

                $.ajax({
                    url: "<?php echo base_url();?>categoriesmanager/AjaxSetCategory",
                    data: fd,
                    type: "post"
                }).done(function (response) {
                    location.reload();
                });
            }
        });

        $("body").on("click", ".deleteCategory", function () {
            var categoryId = $(this).attr("data-category");
            if (categoryId > 0) {
                $.ajax({
                    url: "<?php echo base_url();?>categoriesmanager/AjaxDeleteCategory",
                    data: {categoryId: categoryId},
                    type: "post"
                }).done(function (response) {
                    if (response.Message == "success") {

                        $(".category_row_" + categoryId).remove();
                        $(".category_add_row_" + categoryId).remove();
                    } else {
                        alert(response.Message);
                    }
                });
            }

        });


        $("body").on("click", ".addSubCategory", function () {
            var parentCategoryId = $(this).attr("data-parent");

            var catNewName = $("#addSubCategoryName_" + parentCategoryId).val();
            if (parentCategoryId > 0) {


                var catNewNameEN = $("#addSubCategoryName1_" + parentCategoryId).val();
                var catNewNameDE = $("#addSubCategoryName2_" + parentCategoryId).val();
                var catNewNameRU = $("#addSubCategoryName3_" + parentCategoryId).val();

                var catNewDescEN = $("#addSubCategoryDesc1_" + parentCategoryId).val();
                var catNewDescDE = $("#addSubCategoryDesc2_" + parentCategoryId).val();
                var catNewDescRU = $("#addSubCategoryDesc3_" + parentCategoryId).val();

                var fd = {
                    "categoryId": parentCategoryId,
                    "categoryNames": {
                        "1": {"name": catNewNameEN, "description": catNewDescEN},
                        "2": {"name": catNewNameDE, "description": catNewDescDE},
                        "3": {"name": catNewNameRU, "description": catNewDescRU}
                    }
                };


                $.ajax({
                    url: "<?php echo base_url();?>categoriesmanager/AjaxAddSubCategory",
                    data: fd,
                    type: "post"
                }).done(function (response) {
                    console.log(response);
                    if (response.resultId.categoryId > 0) {
                        var insertedId = response.resultId.categoryId;

                        if(insertedId > 0){
                            location.reload();
                        }

//                        $("#subTree_" + parentCategoryId).append(
//                            '<li> <input type="text" id="cat_' + insertedId + '" value="' + catNewName + '" class="input-small">' +
//                            '<button type="button" class="deleteCategory btn btn-minier btn-danger" data-category="' + insertedId + '">&times;</button>' +
//                            '<button type="button" class="editSubCategory btn btn-minier btn-success"  data-category="' + insertedId + '">' +
//                            '<i class="icon-pencil bigger-125"></i>' +
//                            '</button>' +
//                            '</li>');

                    }
                });


            }

        });


    });
</script>




