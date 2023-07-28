@extends('backend.admin.layout.app')
@section('title','Admin Dashbaord')
<!-- @push('style')
<link type="stylesheet" href="manjeet.css">
<style>
    abc {
        color: red
    }
</style>
@endpush -->
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="page-body">
            <!--profile cover start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="cover-profile">
                        <div class="profile-bg-img">
                            <img class="profile-bg-img img-fluid" src="{{ asset('backend/assets/images/user-profile/bg-img1.jpg') }}" alt="bg-img">
                            <div class="card-block user-info">
                                <div class="col-md-12">
                                    <div class="media-left">
                                        <a href="#" class="profile-image">
                                            <img class="user-img img-circle" src="{{ asset('backend/assets/images/user-profile/user-img.jpg') }}" alt="user-img">
                                        </a>
                                    </div>
                                    <div class="media-body row">
                                        <div class="col-lg-12">
                                            <div class="user-title">
                                                <h2>Josephin Villa</h2>
                                                <span class="text-white">Web designer</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="pull-right cover-btn">
                                                <button type="button" class="btn btn-primary m-r-10"><i class="icofont icofont-plus"></i> Follow</button>
                                                <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--profile cover end-->
            <div class="row">
                <div class="col-lg-12">
                    <!-- tab header start -->
                    <div class="tab-header">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal" role="tab" aria-expanded="true">Personal Info</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#binfo" role="tab" aria-expanded="false">User's Services</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contacts" role="tab" aria-expanded="false">User's Contacts</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#review" role="tab" aria-expanded="false">Reviews</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- tab header end -->
                    <!-- tab content start -->
                    <div class="tab-content">
                        <!-- tab panel personal start -->
                        <div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
                            <!-- personal card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">About Me</h5>
                                    <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                        <i class="icofont icofont-edit"></i>
                                    </button>
                                </div>
                                <div class="card-block">
                                    <div class="view-info" style="">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Full Name</th>
                                                                        <td>Josephine Villa</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Gender</th>
                                                                        <td>Female</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Birth Date</th>
                                                                        <td>October 25th, 1990</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Marital Status</th>
                                                                        <td>Single</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Location</th>
                                                                        <td>New York, USA</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Email</th>
                                                                        <td><a href="#!">Demo@phenix.com</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Mobile Number</th>
                                                                        <td>(0123) - 4567891</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Twitter</th>
                                                                        <td>@phoenixcoded</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Skype</th>
                                                                        <td>phoenixcoded.demo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Website</th>
                                                                        <td><a href="#!">www.demo.com</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of general info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of view-info -->
                                    <div class="edit-info" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Full Name">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-radio">
                                                                                <div class="group-add-on">
                                                                                    <div class="radio radiofill radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio" checked=""><i class="helper"></i> Male
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio"><i class="helper"></i> Female
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <select id="hello-single" class="form-control">
                                                                                <option value="">---- Marital Status ----</option>
                                                                                <option value="married">Married</option>
                                                                                <option value="unmarried">Unmarried</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Address">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Mobile Number">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Twitter Id">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                                                                    <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr> -->
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
                                                                                <input type="email" class="form-control" placeholder="Skype Id">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
                                                                                <input type="text" class="form-control" placeholder="website">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                    <div class="text-center">
                                                        <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                        <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                    </div>
                                                </div>
                                                <!-- end of edit info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of edit-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">Description About Me</h5>
                                            <button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                <i class="icofont icofont-edit"></i>
                                            </button>
                                        </div>
                                        <div class="card-block user-desc">
                                            <div class="view-desc">
                                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>
                                            </div>
                                            <div class="edit-desc" style="display: none;">
                                                <div class="col-md-12">
                                                    <textarea id="description" style="visibility: hidden; display: none;">                                                            &lt;p&gt;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.&lt;/p&gt;
                                                        </textarea>
                                                    <div id="cke_description" class="cke_1 cke cke_reset cke_chrome cke_editor_description cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_description_arialbl"><span id="cke_description_arialbl" class="cke_voice_label">Rich Text Editor, description</span>
                                                        <div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;"><span id="cke_8" class="cke_voice_label">Editor toolbars</span><span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_8" onmousedown="return false;"><span id="cke_11" class="cke_toolbar" aria-labelledby="cke_11_label" role="toolbar"><span id="cke_11_label" class="cke_voice_label">Clipboard/Undo</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_12" class="cke_button cke_button__undo cke_button_disabled " href="javascript:void('Undo')" title="Undo (Ctrl+Z)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_12_label" aria-describedby="cke_12_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span class="cke_button_icon cke_button__undo_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -2256px;background-size:auto;">&nbsp;</span><span id="cke_12_label" class="cke_button_label cke_button__undo_label" aria-hidden="false">Undo</span><span id="cke_12_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+Z</span></a><a id="cke_13" class="cke_button cke_button__redo cke_button_disabled " href="javascript:void('Redo')" title="Redo (Ctrl+Y)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_13_label" aria-describedby="cke_13_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(5,event);" onfocus="return CKEDITOR.tools.callFunction(6,event);" onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span class="cke_button_icon cke_button__redo_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -2208px;background-size:auto;">&nbsp;</span><span id="cke_13_label" class="cke_button_label cke_button__redo_label" aria-hidden="false">Redo</span><span id="cke_13_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+Y</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_14" class="cke_toolbar" aria-labelledby="cke_14_label" role="toolbar"><span id="cke_14_label" class="cke_voice_label">Styles</span><span class="cke_toolbar_start"></span><span id="cke_9" class="cke_combo cke_combo__styles cke_combo_off" role="presentation"><span id="cke_9_label" class="cke_combo_label">Styles</span><a class="cke_combo_button" title="Formatting Styles" tabindex="-1" href="javascript:void('Formatting Styles')" hidefocus="true" role="button" aria-labelledby="cke_9_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(9,event,this);" onfocus="return CKEDITOR.tools.callFunction(10,event);" onclick="CKEDITOR.tools.callFunction(8,this);return false;"><span id="cke_9_text" class="cke_combo_text cke_combo_inlinelabel">Styles</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_10" class="cke_combo cke_combo__format cke_combo_off" role="presentation"><span id="cke_10_label" class="cke_combo_label">Format</span><a class="cke_combo_button" title="Paragraph Format" tabindex="-1" href="javascript:void('Paragraph Format')" hidefocus="true" role="button" aria-labelledby="cke_10_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(12,event,this);" onfocus="return CKEDITOR.tools.callFunction(13,event);" onclick="CKEDITOR.tools.callFunction(11,this);return false;"><span id="cke_10_text" class="cke_combo_text cke_combo_inlinelabel">Format</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_15" class="cke_toolbar" aria-labelledby="cke_15_label" role="toolbar"><span id="cke_15_label" class="cke_voice_label">Basic Styles</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_16" class="cke_button cke_button__bold cke_button_off" href="javascript:void('Bold')" title="Bold (Ctrl+B)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_16_label" aria-describedby="cke_16_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -24px;background-size:auto;">&nbsp;</span><span id="cke_16_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Bold</span><span id="cke_16_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+B</span></a><a id="cke_17" class="cke_button cke_button__italic cke_button_off" href="javascript:void('Italic')" title="Italic (Ctrl+I)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" aria-describedby="cke_17_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(17,event);" onfocus="return CKEDITOR.tools.callFunction(18,event);" onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_17_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Italic</span><span id="cke_17_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+I</span></a><a id="cke_18" class="cke_button cke_button__strike cke_button_off" href="javascript:void('Strikethrough')" title="Strikethrough" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" aria-describedby="cke_18_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(20,event);" onfocus="return CKEDITOR.tools.callFunction(21,event);" onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span class="cke_button_icon cke_button__strike_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -72px;background-size:auto;">&nbsp;</span><span id="cke_18_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">Strikethrough</span><span id="cke_18_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_19" class="cke_button cke_button__removeformat cke_button_off" href="javascript:void('Remove Format')" title="Remove Format" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_19_label" aria-describedby="cke_19_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(23,event);" onfocus="return CKEDITOR.tools.callFunction(24,event);" onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span class="cke_button_icon cke_button__removeformat_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1800px;background-size:auto;">&nbsp;</span><span id="cke_19_label" class="cke_button_label cke_button__removeformat_label" aria-hidden="false">Remove Format</span><span id="cke_19_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_20" class="cke_toolbar" aria-labelledby="cke_20_label" role="toolbar"><span id="cke_20_label" class="cke_voice_label">Paragraph</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_21" class="cke_button cke_button__numberedlist cke_button_off" href="javascript:void('Insert/Remove Numbered List')" title="Insert/Remove Numbered List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_21_label" aria-describedby="cke_21_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(26,event);" onfocus="return CKEDITOR.tools.callFunction(27,event);" onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1440px;background-size:auto;">&nbsp;</span><span id="cke_21_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Insert/Remove Numbered List</span><span id="cke_21_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_22" class="cke_button cke_button__bulletedlist cke_button_off" href="javascript:void('Insert/Remove Bulleted List')" title="Insert/Remove Bulleted List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_22_label" aria-describedby="cke_22_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(29,event);" onfocus="return CKEDITOR.tools.callFunction(30,event);" onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span id="cke_22_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Insert/Remove Bulleted List</span><span id="cke_22_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_23" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('Decrease Indent')" title="Decrease Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_23_label" aria-describedby="cke_23_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(32,event);" onfocus="return CKEDITOR.tools.callFunction(33,event);" onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span class="cke_button_icon cke_button__outdent_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span id="cke_23_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">Decrease Indent</span><span id="cke_23_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_24" class="cke_button cke_button__indent cke_button_off" href="javascript:void('Increase Indent')" title="Increase Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_24_label" aria-describedby="cke_24_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(35,event);" onfocus="return CKEDITOR.tools.callFunction(36,event);" onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span class="cke_button_icon cke_button__indent_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span id="cke_24_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">Increase Indent</span><span id="cke_24_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_25" class="cke_button cke_button__blockquote cke_button_off" href="javascript:void('Block Quote')" title="Block Quote" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" aria-describedby="cke_25_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(38,event);" onfocus="return CKEDITOR.tools.callFunction(39,event);" onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span class="cke_button_icon cke_button__blockquote_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -216px;background-size:auto;">&nbsp;</span><span id="cke_25_label" class="cke_button_label cke_button__blockquote_label" aria-hidden="false">Block Quote</span><span id="cke_25_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_26" class="cke_toolbar" aria-labelledby="cke_26_label" role="toolbar"><span id="cke_26_label" class="cke_voice_label">Links</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_27" class="cke_button cke_button__link cke_button_off" href="javascript:void('Link')" title="Link (Ctrl+L)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_27_label" aria-describedby="cke_27_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(41,event);" onfocus="return CKEDITOR.tools.callFunction(42,event);" onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span class="cke_button_icon cke_button__link_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1320px;background-size:auto;">&nbsp;</span><span id="cke_27_label" class="cke_button_label cke_button__link_label" aria-hidden="false">Link</span><span id="cke_27_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+L</span></a><a id="cke_28" class="cke_button cke_button__unlink cke_button_disabled " href="javascript:void('Unlink')" title="Unlink" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_28_label" aria-describedby="cke_28_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(44,event);" onfocus="return CKEDITOR.tools.callFunction(45,event);" onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span class="cke_button_icon cke_button__unlink_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span id="cke_28_label" class="cke_button_label cke_button__unlink_label" aria-hidden="false">Unlink</span><span id="cke_28_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_29" class="cke_toolbar" aria-labelledby="cke_29_label" role="toolbar"><span id="cke_29_label" class="cke_voice_label">Insert</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_30" class="cke_button cke_button__image cke_button_off" href="javascript:void('Image')" title="Image" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_30_label" aria-describedby="cke_30_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(47,event);" onfocus="return CKEDITOR.tools.callFunction(48,event);" onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span class="cke_button_icon cke_button__image_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1032px;background-size:auto;">&nbsp;</span><span id="cke_30_label" class="cke_button_label cke_button__image_label" aria-hidden="false">Image</span><span id="cke_30_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_31" class="cke_button cke_button__embedsemantic cke_button_off" href="javascript:void('Insert Media Embed')" title="Insert Media Embed" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_31_label" aria-describedby="cke_31_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(50,event);" onfocus="return CKEDITOR.tools.callFunction(51,event);" onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span class="cke_button_icon cke_button__embedsemantic_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -576px;background-size:auto;">&nbsp;</span><span id="cke_31_label" class="cke_button_label cke_button__embedsemantic_label" aria-hidden="false">Insert Media Embed</span><span id="cke_31_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_32" class="cke_button cke_button__table cke_button_off" href="javascript:void('Table')" title="Table" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_32_label" aria-describedby="cke_32_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(53,event);" onfocus="return CKEDITOR.tools.callFunction(54,event);" onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span class="cke_button_icon cke_button__table_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -2088px;background-size:auto;">&nbsp;</span><span id="cke_32_label" class="cke_button_label cke_button__table_label" aria-hidden="false">Table</span><span id="cke_32_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_33" class="cke_toolbar" aria-labelledby="cke_33_label" role="toolbar"><span id="cke_33_label" class="cke_voice_label">Tools</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_34" class="cke_button cke_button__maximize cke_button_off" href="javascript:void('Maximize')" title="Maximize" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_34_label" aria-describedby="cke_34_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(56,event);" onfocus="return CKEDITOR.tools.callFunction(57,event);" onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span class="cke_button_icon cke_button__maximize_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1488px;background-size:auto;">&nbsp;</span><span id="cke_34_label" class="cke_button_label cke_button__maximize_label" aria-hidden="false">Maximize</span><span id="cke_34_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_35" class="cke_toolbar cke_toolbar_last" aria-labelledby="cke_35_label" role="toolbar"><span id="cke_35_label" class="cke_voice_label">Editing</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_36" class="cke_button cke_button__scayt cke_button_off" href="javascript:void('Spell Checker')" title="Spell Checker" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_36_label" aria-describedby="cke_36_description" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(59,event);" onfocus="return CKEDITOR.tools.callFunction(60,event);" onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span class="cke_button_icon cke_button__scayt_icon" style="background-image:url('http://html.phoenixcoded.net/flatable/bower_components/ckeditor/plugins/icons.png?t=H0CF');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span id="cke_36_label" class="cke_button_label cke_button__scayt_label" aria-hidden="false">Spell Check As You Type</span><span id="cke_36_description" class="cke_button_label" aria-hidden="false"></span><span class="cke_button_arrow"></span></a></span><span class="cke_toolbar_end"></span></span></span></span>
                                                            <div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 400px;"><span id="cke_40" class="cke_voice_label">Press ALT 0 for help</span><iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" title="Rich Text Editor, description" aria-describedby="cke_40" tabindex="0" allowtransparency="true" style="width: 100%; height: 100%;"></iframe></div><span id="cke_1_bottom" class="cke_bottom cke_reset_all" role="presentation" style="user-select: none;"><span id="cke_1_resizer" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" title="Resize" onmousedown="CKEDITOR.tools.callFunction(1, event)">◢</span><span id="cke_1_path_label" class="cke_voice_label">Elements path</span><span id="cke_1_path" class="cke_path" role="group" aria-labelledby="cke_1_path_label"><span class="cke_path_empty">&nbsp;</span></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
                                                    <a href="#!" id="edit-cancel-btn" class="btn btn-default waves-effect m-t-20">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- personal card end-->
                        </div>
                        <!-- tab pane personal end -->
                        <!-- tab pane info start -->
                        <div class="tab-pane" id="binfo" role="tabpanel" aria-expanded="false">
                            <!-- info card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">User Services</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card b-l-success business-info services m-b-20">
                                                <div class="card-header">
                                                    <div class="service-header">
                                                        <a href="#">
                                                            <h5 class="card-header-text">Shivani Hero</h5>
                                                        </a>
                                                    </div>
                                                    <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                        </div>
                                                        <!-- end of col-sm-8 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of card-block -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card b-l-danger business-info services">
                                                <div class="card-header">
                                                    <div class="service-header">
                                                        <a href="#">
                                                            <h5 class="card-header-text">Dress and Sarees</h5>
                                                        </a>
                                                    </div>
                                                    <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                        </div>
                                                        <!-- end of col-sm-8 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of card-block -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card b-l-info business-info services">
                                                <div class="card-header">
                                                    <div class="service-header">
                                                        <a href="#">
                                                            <h5 class="card-header-text">Shivani Auto Port</h5>
                                                        </a>
                                                    </div>
                                                    <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                        </div>
                                                        <!-- end of col-sm-8 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of card-block -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card b-l-warning business-info services">
                                                <div class="card-header">
                                                    <div class="service-header">
                                                        <a href="#">
                                                            <h5 class="card-header-text">Hair stylist</h5>
                                                        </a>
                                                    </div>
                                                    <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                        </div>
                                                        <!-- end of col-sm-8 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of card-block -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card b-l-danger business-info services">
                                                <div class="card-header">
                                                    <div class="service-header">
                                                        <a href="#">
                                                            <h5 class="card-header-text">BMW India</h5>
                                                        </a>
                                                    </div>
                                                    <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                        </div>
                                                        <!-- end of col-sm-8 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of card-block -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card b-l-success business-info services">
                                                <div class="card-header">
                                                    <div class="service-header">
                                                        <a href="#">
                                                            <h5 class="card-header-text">Shivani Hero</h5>
                                                        </a>
                                                    </div>
                                                    <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                        </div>
                                                        <!-- end of col-sm-8 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of card-block -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">Profit</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="main" style="height: 300px; width: 100%; -webkit-tap-highlight-color: transparent; user-select: none; cursor: default; background-color: rgba(0, 0, 0, 0);" _echarts_instance_="1690062025619">
                                                <div style="position: relative; overflow: hidden; width: 100px; height: 300px;">
                                                    <div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; user-select: none;"></div><canvas width="100" height="300" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="100" height="300" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="100" height="300" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- info card end -->
                        </div>
                        <!-- tab pane info end -->
                        <!-- tab pane contact start -->
                        <div class="tab-pane" id="contacts" role="tabpanel" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-3">
                                    <!-- user contact card left side start -->
                                    <div class="card">
                                        <div class="card-header contact-user">
                                            <img class="img-circle" src="{{ asset('backend/assets/images/user-profile/contact-user.jpg') }}" alt="contact-user">
                                            <h4>Angelica Ramos</h4>
                                        </div>
                                        <div class="card-block">
                                            <ul class="list-group list-contacts">
                                                <li class="list-group-item active"><a href="#">All Contacts</a></li>
                                                <li class="list-group-item"><a href="#">Recent Contacts</a></li>
                                                <li class="list-group-item"><a href="#">Favourite Contacts</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-block groups-contact">
                                            <h4>Groups</h4>
                                            <ul class="list-group">
                                                <li class="list-group-item justify-content-between">
                                                    Project
                                                    <span class="badge badge-default badge-pill">30</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Notes
                                                    <span class="badge badge-default badge-pill">20</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Activity
                                                    <span class="badge badge-default badge-pill">100</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Schedule
                                                    <span class="badge badge-default badge-pill">50</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>
                                        </div>
                                        <div class="card-block">
                                            <div class="connection-list">
                                                <a href="#"><img class="img-fluid img-circle" src="{{ asset('backend/assets/images/user-profile/follower/f-1.jpg') }}" alt="f-1" data-toggle="tooltip" data-placement="top" data-original-title="Airi Satou">
                                                </a>
                                                <a href="#"><img class="img-fluid img-circle" src="{{ asset('backend/assets/images/user-profile/follower/f-2.jpg') }}" alt="f-2" data-toggle="tooltip" data-placement="top" data-original-title="Angelica Ramos">
                                                </a>
                                                <a href="#"><img class="img-fluid img-circle" src="{{ asset('backend/assets/images/user-profile/follower/f-3.jpg') }}" alt="f-3" data-toggle="tooltip" data-placement="top" data-original-title="Ashton Cox">
                                                </a>
                                                <a href="#"><img class="img-fluid img-circle" src="{{ asset('backend/assets/images/user-profile/follower/f-4.jpg') }}" alt="f-4" data-toggle="tooltip" data-placement="top" data-original-title="Cara Stevens">
                                                </a>
                                                <a href="#"><img class="img-fluid img-circle" src="{{ asset('backend/assets/images/user-profile/follower/f-5.jpg') }}" alt="f-5" data-toggle="tooltip" data-placement="top" data-original-title="Garrett Winters">
                                                </a>
                                                <a href="#"><img class="img-fluid img-circle" src="{{ asset('backend/assets/images/user-profile/follower/f-1.jpg') }}" alt="f-6" data-toggle="tooltip" data-placement="top" data-original-title="Cedric Kelly">
                                                </a>
                                                <a href="#"><img class="img-fluid img-circle" src="{{ asset('backend/assets/images/user-profile/follower/f-3.jpg') }}" alt="f-7" data-toggle="tooltip" data-placement="top" data-original-title="Brielle Williamson">
                                                </a>
                                                <a href="#"><img class="img-fluid img-circle" src="{{ asset('backend/assets/images/user-profile/follower/f-5.jpg') }}" alt="f-8" data-toggle="tooltip" data-placement="top" data-original-title="Jena Gaines">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- user contact card left side end -->
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- contact data table card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-header-text">Contacts</h5>
                                                </div>
                                                <div class="card-block contact-details">
                                                    <div class="data_table_main table-responsive dt-responsive">
                                                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                                                                    <div class="dataTables_length" id="simpletable_length"><label>Show <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm">
                                                                                <option value="10">10</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select> entries</label></div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                                    <div id="simpletable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="simpletable"></label></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12">
                                                                    <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info" style="width: 1148px;">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 201px;">Name</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 250px;">Email</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Mobileno.: activate to sort column ascending" style="width: 174px;">Mobileno.</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Favourite: activate to sort column ascending" style="width: 169px;">Favourite</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 140px;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>



















































                                                                            <tr role="row" class="odd">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="even">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="odd">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="even">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="odd">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="even">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="odd">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="even">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="odd">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row" class="even">
                                                                                <td class="sorting_1">Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <th rowspan="1" colspan="1">Name</th>
                                                                                <th rowspan="1" colspan="1">Email</th>
                                                                                <th rowspan="1" colspan="1">Mobileno.</th>
                                                                                <th rowspan="1" colspan="1">Favourite</th>
                                                                                <th rowspan="1" colspan="1">Action</th>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-5">
                                                                    <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">Showing 1 to 10 of 51 entries</div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-7">
                                                                    <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                                                                        <ul class="pagination">
                                                                            <li class="paginate_button page-item previous disabled" id="simpletable_previous"><a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                            <li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                                            <li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                                            <li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                                            <li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                                            <li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                                            <li class="paginate_button page-item next" id="simpletable_next"><a href="#" aria-controls="simpletable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- contact data table card end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab pane contact end -->
                        <div class="tab-pane" id="review" role="tabpanel" aria-expanded="false">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Review</h5>
                                </div>
                                <div class="card-block">
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle comment-img" src="{{ asset('backend/assets/images/avatar-1.png') }}" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Sortino media<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                <div class="stars-example-css review-star">
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                </div>
                                                <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                <div class="m-b-25">
                                                    <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                </div>
                                                <hr>
                                                <!-- Nested media object -->
                                                <div class="media mt-2">
                                                    <a class="media-left" href="#">
                                                        <img class="media-object img-circle comment-img" src="{{ asset('backend/assets/images/avatar-2.png') }}" alt="Generic placeholder image">
                                                    </a>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                        <div class="stars-example-css review-star">
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                        </div>
                                                        <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        <div class="m-b-25">
                                                            <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                        </div>
                                                        <hr>
                                                        <!-- Nested media object -->
                                                        <div class="media mt-2">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object img-circle comment-img" src="{{ asset('backend/assets/images/avatar-3.png') }}" alt="Generic placeholder image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                <div class="stars-example-css review-star">
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                </div>
                                                                <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                <div class="m-b-25">
                                                                    <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Nested media object -->
                                                <div class="media mt-2">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object img-circle comment-img" src="{{ asset('backend/assets/images/avatar-1.png') }}" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Cedric Kelly<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                        <div class="stars-example-css review-star">
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                        </div>
                                                        <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        <div class="m-b-25">
                                                            <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="media mt-2">
                                                    <a class="media-left" href="#">
                                                        <img class="media-object img-circle comment-img" src="{{ asset('backend/assets/images/avatar-4.png') }}" alt="Generic placeholder image">
                                                    </a>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                        <div class="stars-example-css review-star">
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                        </div>
                                                        <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        <div class="m-b-25">
                                                            <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                        </div>
                                                        <hr>
                                                        <!-- Nested media object -->
                                                        <div class="media mt-2">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object img-circle comment-img" src="{{ asset('backend/assets/images/avatar-3.png') }}" alt="Generic placeholder image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                <div class="stars-example-css review-star">
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                </div>
                                                                <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                <div class="m-b-25">
                                                                    <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media mt-2">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object img-circle comment-img" src="{{ asset('backend/assets/images/avatar-2.png') }}" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Mark Doe<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                        <div class="stars-example-css review-star">
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                        </div>
                                                        <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        <div class="m-b-25">
                                                            <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="md-float-material d-flex">
                                        <div class="md-group-add-on p-relative col-lg-12">
                                            <div class="input-group input-group-button input-group-primary">
                                                <span class="input-group-addon"><i class="icofont icofont-comment"></i></span>
                                                <input type="text" class="form-control" placeholder="Write Comment">
                                                <span class="input-group-addon">
                                                    <button class="btn btn-primary"><i class="icofont icofont-plus"></i>Add Comment</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab content end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @push('script')
<script>
    console.log("its working");
</script>
@endpush -->