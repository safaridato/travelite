<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Traveler CMS</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--basic styles-->

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/patche.css" rel="stylesheet" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!--page specific plugin styles-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.custom.min.css" />
    <!--page specific plugin styles-->


    <!--fonts-->

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/ace-fonts.css" />

    <!--ace styles-->

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/ace.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/ace-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/ace-ie.min.css" />
    <![endif]-->

<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/froala_editor.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/froala_style.css">-->
<!---->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/code_view.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/colors.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/draggable.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/emoticons.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/image_manager.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/image.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/line_breaker.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/table.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/char_counter.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/video.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/fullscreen.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/file.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/assets/css/froala/plugins/quick_insert.css">-->


    <!--inline styles related to this page-->
    <script src="<?php echo base_url();?>/assets/js/jquery-2.1.4.min.js"></script>



    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='<?php echo base_url();?>/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
    </script>
    <![endif]-->
</head>

<body>
<div class="navbar">
<div class="navbar-inner">
<div class="container-fluid">
<a href="#" class="brand">
    <small>
        <i class="icon-leaf"></i>
        Take off to Georgia
    </small>
</a><!--/.brand-->

<ul class="nav ace-nav pull-right">
<!--<li class="grey">-->
<!--    <a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
<!--        <i class="icon-tasks"></i>-->
<!--        <span class="badge badge-grey">4</span>-->
<!--    </a>-->
<!---->
<!--    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">-->
<!--        <li class="nav-header">-->
<!--            <i class="icon-ok"></i>-->
<!--            4 Tasks to complete-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="clearfix">-->
<!--                    <span class="pull-left">Software Update</span>-->
<!--                    <span class="pull-right">65%</span>-->
<!--                </div>-->
<!---->
<!--                <div class="progress progress-mini ">-->
<!--                    <div style="width:65%" class="bar"></div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="clearfix">-->
<!--                    <span class="pull-left">Hardware Upgrade</span>-->
<!--                    <span class="pull-right">35%</span>-->
<!--                </div>-->
<!---->
<!--                <div class="progress progress-mini progress-danger">-->
<!--                    <div style="width:35%" class="bar"></div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="clearfix">-->
<!--                    <span class="pull-left">Unit Testing</span>-->
<!--                    <span class="pull-right">15%</span>-->
<!--                </div>-->
<!---->
<!--                <div class="progress progress-mini progress-warning">-->
<!--                    <div style="width:15%" class="bar"></div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="clearfix">-->
<!--                    <span class="pull-left">Bug Fixes</span>-->
<!--                    <span class="pull-right">90%</span>-->
<!--                </div>-->
<!---->
<!--                <div class="progress progress-mini progress-success progress-striped active">-->
<!--                    <div style="width:90%" class="bar"></div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                See tasks with details-->
<!--                <i class="icon-arrow-right"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
<!---->
<!--<li class="purple">-->
<!--    <a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
<!--        <i class="icon-bell-alt icon-animated-bell"></i>-->
<!--        <span class="badge badge-important">8</span>-->
<!--    </a>-->
<!---->
<!--    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">-->
<!--        <li class="nav-header">-->
<!--            <i class="icon-warning-sign"></i>-->
<!--            8 Notifications-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="clearfix">-->
<!--											<span class="pull-left">-->
<!--												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>-->
<!--												New Comments-->
<!--											</span>-->
<!--                    <span class="pull-right badge badge-info">+12</span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <i class="btn btn-mini btn-primary icon-user"></i>-->
<!--                Bob just signed up as an editor ...-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="clearfix">-->
<!--											<span class="pull-left">-->
<!--												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>-->
<!--												New Orders-->
<!--											</span>-->
<!--                    <span class="pull-right badge badge-success">+8</span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="clearfix">-->
<!--											<span class="pull-left">-->
<!--												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>-->
<!--												Followers-->
<!--											</span>-->
<!--                    <span class="pull-right badge badge-info">+11</span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                See all notifications-->
<!--                <i class="icon-arrow-right"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->

    <?php $this->load->view('alerts/top');?>


<li class="light-blue">
    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
        <img class="nav-user-photo" src="<?php echo base_url();?>/assets/avatars/user.jpg" alt="<?php echo get_user_firstname();?>" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo get_user_firstname();?>
								</span>

        <i class="icon-caret-down"></i>
    </a>

    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
<!--        <li>-->
<!--            <a href="#">-->
<!--                <i class="icon-cog"></i>-->
<!--                Settings-->
<!--            </a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <i class="icon-user"></i>-->
<!--                Profile-->
<!--            </a>-->
<!--        </li>-->

        <li class="divider"></li>

        <li>
            <a href="<?php echo site_url();?>profile/logoutuser">
                <i class="icon-off"></i>
                Logout
            </a>
        </li>
    </ul>
</li>
</ul><!--/.ace-nav-->
</div><!--/.container-fluid-->
</div><!--/.navbar-inner-->
</div>

<div class="main-container container-fluid">
<a class="menu-toggler" id="menu-toggler" href="#">
    <span class="menu-text"></span>
</a>

    <?php $this->load->view("leftmenu/menubar");?>

<div class="main-content">
    <?php /* ?>
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
            </li>

            <li>
                <a href="#">Other Pages</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
            </li>
            <li class="active">Blank Page</li>
        </ul><!--.breadcrumb-->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
            </form>
        </div><!--#nav-search-->
    </div>
<?php */?>
    <div class="page-content">
        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->
                    <?php $this->load->view($content);?>
                <!--PAGE CONTENT ENDS-->
            </div><!--/.span-->
        </div><!--/.row-fluid-->
    </div><!--/.page-content-->
<?php /* ?>
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="icon-cog bigger-150"></i>
        </div>

        <div class="ace-settings-box" id="ace-settings-box">
            <div>
                <div class="pull-left">
                    <select id="skin-colorpicker" class="hide">
                        <option data-class="default" value="#438EB9">#438EB9</option>
                        <option data-class="skin-1" value="#222A2D">#222A2D</option>
                        <option data-class="skin-2" value="#C6487E">#C6487E</option>
                        <option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
                    </select>
                </div>
                <span>&nbsp; Choose Skin</span>
            </div>

            <div>
                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
                <label class="lbl" for="ace-settings-header"> Fixed Header</label>
            </div>

            <div>
                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
            </div>

            <div>
                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
            </div>

            <div>
                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
            </div>
        </div>
    </div><!--/#ace-settings-container-->

    <?php */ ?>
</div><!--/.main-content-->
</div><!--/.main-container-->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>

<!--basic scripts-->
<?php /*
<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo base_url();?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo base_url();?>/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

*/ ?>

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->


<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/markdown/markdown.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/markdown/bootstrap-markdown.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.hotkeys.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url();?>/assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/ace.min.js"></script>

<!--inline scripts related to this page-->







<script type="text/javascript">
    $(function(){

        function showErrorAlert (reason, detail) {
            var msg='';
            if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
            else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+
                '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
        }

        //$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

        //but we want to change a few buttons colors for the third style
        $('#editor1').ace_wysiwyg({
            toolbar:
                [
                    'font',
                    null,
                    'fontSize',
                    null,
                    {name:'bold', className:'btn-info'},
                    {name:'italic', className:'btn-info'},
                    {name:'strikethrough', className:'btn-info'},
                    {name:'underline', className:'btn-info'},
                    null,
                    {name:'insertunorderedlist', className:'btn-success'},
                    {name:'insertorderedlist', className:'btn-success'},
                    {name:'outdent', className:'btn-purple'},
                    {name:'indent', className:'btn-purple'},
                    null,
                    {name:'justifyleft', className:'btn-primary'},
                    {name:'justifycenter', className:'btn-primary'},
                    {name:'justifyright', className:'btn-primary'},
                    {name:'justifyfull', className:'btn-inverse'},
                    null,
                    {name:'createLink', className:'btn-pink'},
                    {name:'unlink', className:'btn-pink'},
                    null,
                    {name:'insertImage', className:'btn-success'},
                    null,
                    'foreColor',
                    null,
                    {name:'undo', className:'btn-grey'},
                    {name:'redo', className:'btn-grey'}
                ],
            'wysiwyg': {
                fileUploadError: showErrorAlert
            }
        }).prev().addClass('wysiwyg-style2');


        $('#editor2').ace_wysiwyg({
            toolbar:
                [
                    'font',
                    null,
                    'fontSize',
                    null,
                    {name:'bold', className:'btn-info'},
                    {name:'italic', className:'btn-info'},
                    {name:'strikethrough', className:'btn-info'},
                    {name:'underline', className:'btn-info'},
                    null,
                    {name:'insertunorderedlist', className:'btn-success'},
                    {name:'insertorderedlist', className:'btn-success'},
                    {name:'outdent', className:'btn-purple'},
                    {name:'indent', className:'btn-purple'},
                    null,
                    {name:'justifyleft', className:'btn-primary'},
                    {name:'justifycenter', className:'btn-primary'},
                    {name:'justifyright', className:'btn-primary'},
                    {name:'justifyfull', className:'btn-inverse'},
                    null,
                    {name:'createLink', className:'btn-pink'},
                    {name:'unlink', className:'btn-pink'},
                    null,
                    {name:'insertImage', className:'btn-success'},
                    null,
                    'foreColor',
                    null,
                    {name:'undo', className:'btn-grey'},
                    {name:'redo', className:'btn-grey'}
                ],
            'wysiwyg': {
                fileUploadError: showErrorAlert
            }
        }).prev().addClass('wysiwyg-style2');


        $('#editor3').ace_wysiwyg({
            toolbar:
                [
                    'font',
                    null,
                    'fontSize',
                    null,
                    {name:'bold', className:'btn-info'},
                    {name:'italic', className:'btn-info'},
                    {name:'strikethrough', className:'btn-info'},
                    {name:'underline', className:'btn-info'},
                    null,
                    {name:'insertunorderedlist', className:'btn-success'},
                    {name:'insertorderedlist', className:'btn-success'},
                    {name:'outdent', className:'btn-purple'},
                    {name:'indent', className:'btn-purple'},
                    null,
                    {name:'justifyleft', className:'btn-primary'},
                    {name:'justifycenter', className:'btn-primary'},
                    {name:'justifyright', className:'btn-primary'},
                    {name:'justifyfull', className:'btn-inverse'},
                    null,
                    {name:'createLink', className:'btn-pink'},
                    {name:'unlink', className:'btn-pink'},
                    null,
                    {name:'insertImage', className:'btn-success'},
                    null,
                    'foreColor',
                    null,
                    {name:'undo', className:'btn-grey'},
                    {name:'redo', className:'btn-grey'}
                ],
            'wysiwyg': {
                fileUploadError: showErrorAlert
            }
        }).prev().addClass('wysiwyg-style2');


//
//        $('#editor2').css({'height':'200px'}).ace_wysiwyg({
//            toolbar_place: function(toolbar) {
//                return $(this).closest('.widget-box').find('.widget-header').prepend(toolbar);
//            },
//            toolbar:
//                [
//                    'bold',
//                    {name:'italic' , title:'Change Title!', icon: 'icon-leaf'},
//                    'strikethrough',
//                    'underline',
//                    null,
//                    'insertunorderedlist',
//                    'insertorderedlist',
//                    null,
//                    'justifyleft',
//                    'justifycenter',
//                    'justifyright'
//                ],
//            speech_button:false
//        });


        $('[data-toggle="buttons-radio"]').on('click', function(e){
            var target = $(e.target);
            var which = parseInt($.trim(target.text()));
            var toolbar = $('#editor1').prev().get(0);
            if(which == 1 || which == 2 || which == 3) {
                toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
                if(which == 1) $(toolbar).addClass('wysiwyg-style1');
                else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
            }
        });





        //Add Image Resize Functionality to Chrome and Safari
        //webkit browsers don't have image resize functionality when content is editable
        //so let's add something using jQuery UI resizable
        //another option would be opening a dialog for user to enter dimensions.
        if ( typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase()) ) {

            var lastResizableImg = null;
            function destroyResizable() {
                if(lastResizableImg == null) return;
                lastResizableImg.resizable( "destroy" );
                lastResizableImg.removeData('resizable');
                lastResizableImg = null;
            }

            var enableImageResize = function() {
                $('.wysiwyg-editor')
                    .on('mousedown', function(e) {
                        var target = $(e.target);
                        if( e.target instanceof HTMLImageElement ) {
                            if( !target.data('resizable') ) {
                                target.resizable({
                                    aspectRatio: e.target.width / e.target.height,
                                });
                                target.data('resizable', true);

                                if( lastResizableImg != null ) {//disable previous resizable image
                                    lastResizableImg.resizable( "destroy" );
                                    lastResizableImg.removeData('resizable');
                                }
                                lastResizableImg = target;
                            }
                        }
                    })
                    .on('click', function(e) {
                        if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
                            destroyResizable();
                        }
                    })
                    .on('keydown', function() {
                        destroyResizable();
                    });
            }

            enableImageResize();

            /**
             //or we can load the jQuery UI dynamically only if needed
             if (typeof jQuery.ui !== 'undefined') enableImageResize();
             else {//load jQuery UI if not loaded
			$.getScript($assets+"/js/jquery-ui-1.10.3.custom.min.js", function(data, textStatus, jqxhr) {
				if('ontouchend' in document) {//also load touch-punch for touch devices
					$.getScript($assets+"/js/jquery.ui.touch-punch.min.js", function(data, textStatus, jqxhr) {
						enableImageResize();
					});
				} else	enableImageResize();
			});
		}
             */
        }


    });
</script>
</body>
</html>
