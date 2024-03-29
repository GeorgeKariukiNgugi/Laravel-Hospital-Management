@extends('superTemplates\basicTemplate')
@section('body')
<div style="background-color:#d3e4f8;">
    <div class="container-fluid">
        <h1 style="font-family:times new roman;text-align:center;">Registration Form.</h1>
        <hr>
        <form method="post" id="contactForm">
            {{ csrf_field() }}
            <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden"
                name="to" value="email@awebsite.com">
            <div class="form-row">
                <div class="col-md-6">
                    <div id="successfail"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-8 offset-md-2" id="message">
                    <h2 class="h4" style="font-family:times new roman;text-align:center;">Fill In the form Below To Register as A patient.</h2>
                    <div class="form-group">
                        <fieldset>
                            <legend style="font-family:'Petit Formal Script', cursive;">Personal Details&nbsp;<span style="font-size:18px;color:rgb(237,59,59);">(*required)</span></legend><label for="from-name">Names&nbsp;</label><span class="required-input">*</span>
                            <div class="form-row">
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group invalid"><label for="from-phone">First name</label><span class="required-input">*</span>
                                        <div class="input-group has-danger">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input class="form-control has-error" type="text" name="fName" required="" placeholder="First Name."id="fName"></div>
                                        <span
                                            id="FNameError" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group"><label for="from-phone">Last Name .</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input class="form-control" type="text" name="Lname" required="" placeholder="Last Name." autocomplete="on" id="Lname"></div>
                                        <span
                                            id="LNameError" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group"><label for="from-phone">Sur Name</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input class="form-control" type="text" name="Sname" required="" placeholder="Sur Name." autocomplete="on" id="SName"></div>
                                        <span
                                            id="SNameError" style="color:red;"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><label for="from-phone">Date Of Birth</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div><input class="form-control" type="date" name="date" required="" id="date"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><label for="from-phone">Birth Certificate Number.</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-certificate"></i></span></div><input class="form-control" type="number" name="birthCertNumber" required="" placeholder="Certificate number ." minlength="3"
                                                autocomplete="on" inputmode="numeric" id="birthCertNumber"></div><span id="BirthCertificateNoError" style="color:red;"></span></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><label for="from-phone">NHIF number</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-id-card"></i></span></div><input class="form-control" type="number" name="nhifNumber" required="" placeholder="NHIF Number" maxlength="3" autocomplete="on"
                                                inputmode="numeric" id="nhifNumber"></div><span id="NHIFNoError"></span></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><label for="from-phone">KRA Number .</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-id-card-o"></i></span></div><input class="form-control" type="number" name="kraNumber" required="" placeholder="KRA Number" autocomplete="on" inputmode="numeric"
                                                id="kraNumber"></div><span id="KRANoError"></span></div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group"><label for="from-phone">Email</label><span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o" style="background-color:#ffffff;"></i></span></div><input class="form-control" type="text" name="email" required="" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                        inputmode="email" id="phone"></div><span id="EmailError"></span></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group"><label for="from-calltime">Residence *</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-location-arrow"></i></span><input class="form-control" type="text" name="residence" required="" placeholder="Residence ." id="residence"></div>
                                </div><span id="ResidenceError" style="color:red;"></span></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" name="phone" required="" placeholder="Primary Phone" inputmode="tel" id="phone"></div><span id="phoneError"></span></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" name="callTime" id="callTime"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col"><button class="btn btn-warning btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                            <div class="col"><button class="btn btn-success btn-block" type="submit"><strong>NEXT&nbsp;</strong><i class="fa fa-forward" style="background-color:rgba(0,0,0,0);color:rgb(255,255,255);"></i></button></div>
                        </div>
                    </div>
                    <hr class="d-flex d-md-none">
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                            type="hidden" name="to" value="email@awebsite.com">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6" id="message">
                                <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                </h2>
                                <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" name="name" required="" placeholder="Full Name" id="from-name"></div>
                                </div>
                                <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" name="email" required="" placeholder="Email Address" id="from-email"></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" name="phone" required="" placeholder="Primary Phone" id="from-phone"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" name="call time" id="from-calltime"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" rows="5" name="comments" placeholder="Enter Comments" id="from-comments"></textarea></div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                        <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                    </div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>
                            <div class="col-12 col-md-6">
                                <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="static-map"><a href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                target="_blank" rel="noopener"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                        <div><span><strong>Name</strong></span></div>
                                        <div><span>email@awebsite.com</span></div>
                                        <div><span>www.awebsite.com</span></div>
                                        <hr class="d-sm-none d-md-block d-lg-none">
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                        <div><span><strong>Office Name</strong></span></div>
                                        <div><span>55 Icannot Dr</span></div>
                                        <div><span>Daytone Beach, FL 85150</span></div>
                                        <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                        <hr class="d-sm-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection