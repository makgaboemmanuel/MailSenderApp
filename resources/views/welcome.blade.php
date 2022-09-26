<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8">
            <h1>Contact Us</h1>
            <p class="lead">Have a question or want further information?</p>

            <p>Fill in the short form and we will get back to you as soon as possible.</p> <br>

            <!-- BEGIN DOWNLOAD PANEL -->
            <div class="panel panel-default well">
                <div class="panel-body">
                    <!-- /sendEmail -->
                    <form action="/sendEmail" class="form-horizontal track-event-form bv-form" data-goaltype="”General”"
                        data-formname="”ContactUs”" method="post" id="contact-us-all" novalidate="novalidate">
                        @csrf
                        <input name="elqSiteId" type="hidden" value="928">
                        <input name="sFDCLastCampaignID" type="hidden" value="701400000012Lql">
                        <input name="elqFormName" type="hidden" value="EMEAAllContactUsSubmissions">
                        <input name="nexturl" type="hidden" value="">
                        <input name="Partner" type="hidden" value="">
                        <input name="language" type="hidden" value="en">

                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" id="firstname"
                                        placeholder="Enter first name" name="firstname" data-bv-field="C_FirstName">
                                </div>
                                <small data-bv-validator="notEmpty" data-bv-validator-for="C_FirstName"
                                    class="help-block" style="display: none;">Required</small>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" id="lastname"
                                        placeholder="Enter last name" name="lastname" data-bv-field="C_LastName">
                                </div>
                                <small data-bv-validator="notEmpty" data-bv-validator-for="C_LastName"
                                    class="help-block" style="display: none;">Required</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" class="form-control" id="email"
                                        placeholder="Enter email" name="email" data-bv-field="email">
                                </div>
                                <small data-bv-validator="notEmpty" data-bv-validator-for="C_EmailAddress"
                                    class="help-block" style="display: none;">Required</small>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <input type="text" class="form-control" id="company"
                                        placeholder="Enter company" name="company">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-globe"></i>
                                    </div>


                                </div>
                                <small data-bv-validator="callback" data-bv-validator-for="C_Country" class="help-block"
                                    style="display: none;">Choose one</small>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group" style="display: none;">
                                    <div class="input-group-addon">
                                        <i class="fa fa-globe"></i>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" class="form-control" id="phone_number" placeholder="Phone"
                                        name="phone_number">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-comment fa-2"></i>
                                    </div>
                                    <textarea class="form-control" name="message" id="message" rows="5" style="width:99.9%"
                                        placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button id="contacts-submit" type="submit" class="btn btn-default btn-info">CONTACT
                                    US</button>
                            </div>
                        </div>
                        <input type="hidden" value="">
                    </form>
                </div><!-- end panel-body -->
            </div><!-- end panel -->
            <!-- END DOWNLOAD PANEL -->
        </div><!-- end col-md-8 -->
        <div class="col-md-2"> </div>
    </div>
</div>
