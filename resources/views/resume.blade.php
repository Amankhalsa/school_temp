<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>



<div class="col-lg-12">            <!--begin::Card-->            <div class="card card-custom ">                <div class="card-header">                    <h3 class="card-title">                        Add Resume                    </h3> 
                </div>                <!--begin::Form-->                <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form_1" method="post" action="https://diyaschool.classonapp.com/resume/resume/add" enctype="multipart/form-data" novalidate="novalidate">                    <div class="card-body"> 

                        <div class="form-group row fv-plugins-icon-container">                            <label for="res_full_name" class="col-form-label text-right col-lg-3 col-sm-12">Full Name *</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_full_name" placeholder="Enter Full Name" id="res_full_name" value=""> 
                            <div class="fv-plugins-message-container"></div></div>                        </div>                        <div class="form-group row">                            <label for="res_dob" class="col-form-label text-right col-lg-3 col-sm-12">DOB </label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <div class="input-group date">                                    <input type="text" class="form-control form-control-lg form-control-solid" name="res_dob" value="" id="kt_datepicker_3" autocomplete="off">                                    <div class="input-group-append">                                        <span class="input-group-text">                                            <i class="la la-calendar"></i>                                        </span>                                    </div>                                </div>                             </div>                        </div>                        
                        <div class="form-group row fv-plugins-icon-container">                            <label for="res_gender" class="col-form-label text-right col-lg-3 col-sm-12">Gender *</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <select class="form-control form-control-lg form-control-solid" id="res_gender" name="res_gender">                                    <option value="" selected="">Select Value</option>                                                                                                <option value="1">Male</option>                                                                                                <option value="2">Female</option>                                                                                </select>                             <div class="fv-plugins-message-container"></div></div>                        </div>                        <div class="form-group row">                            <label for="res_father_name" class="col-form-label text-right col-lg-3 col-sm-12">Father Name</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_father_name" placeholder="Enter Father Name" id="res_father_name" value=""> 
                            </div>                        </div>                        <div class="form-group row fv-plugins-icon-container">                            <label for="res_mobile" class="col-form-label text-right col-lg-3 col-sm-12">Contact Number *</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_mobile" placeholder="Enter Contact Number" id="res_mobile" value="" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="10"> 
                            <div class="fv-plugins-message-container"></div></div>                        </div>                        <div class="form-group row">                            <label for="res_alt_mobile" class="col-form-label text-right col-lg-3 col-sm-12">Alternative Contact Number </label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_alt_mobile" placeholder="Enter Alternative Contact Number" id="res_full_name" value="" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="10"> 
                            </div>                        </div>                        <div class="form-group row">                            <label for="res_email" class="col-form-label text-right col-lg-3 col-sm-12">Email</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="email" class="form-control form-control-lg form-control-solid" name="res_email" placeholder="Enter Email" id="res_email" value=""> 
                            </div>                        </div>                        <div class="form-group row fv-plugins-icon-container">                            <label for="res_applied_for" class="col-form-label text-right col-lg-3 col-sm-12">Applied For *</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_applied_for" placeholder="Enter Applied For" id="res_applied_for" value=""> 
                            <div class="fv-plugins-message-container"></div></div>                        </div>                        <div class="form-group row">                            <label for="res_experience" class="col-form-label text-right col-lg-3 col-sm-12">Experience </label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_experience" placeholder="Enter Experience" id="res_email" value=""> 
                            </div>                        </div>                        <div class="form-group row">                            <label for="res_pre_school" class="col-form-label text-right col-lg-3 col-sm-12">Previous School</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_pre_school" placeholder="Enter Previous School" id="res_pre_school" value=""> 
                            </div>                        </div>                        <div class="form-group row">                            <label for="res_exp_sal" class="col-form-label text-right col-lg-3 col-sm-12">Expected Salary</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_exp_sal" placeholder="Enter Expected Salary" id="res_exp_sal" value=""> 
                            </div>                        </div>                        <div class="form-group row">                            <label for="res_address" class="col-form-label text-right col-lg-3 col-sm-12">Address</label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="text" class="form-control form-control-lg form-control-solid" name="res_address" placeholder="Enter Address" id="res_pre_school" value=""> 
                            </div>                        </div>                         
                        <div class="form-group row">                            <label for="" class="col-form-label text-right col-lg-3 col-sm-12">Doc 1 Browse </label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="file" accept=".png, .jpg, .jpeg, .pdf" id="file-input" name="res_doc1" class="form-control form-control-lg form-control-solid">                                <small class="form-text text-muted">Image file format: jpg, png, jpeg, pdf </small>                                <div id="thumb-output"></div>                            </div>                        </div>                        <div class="form-group row">                            <label for="" class="col-form-label text-right col-lg-3 col-sm-12">Doc 2 Browse </label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <input type="file" accept=".png, .jpg, .jpeg, .pdf" id="file-input" name="res_doc2" class="form-control form-control-lg form-control-solid">                                <small class="form-text text-muted">Image file format: jpg, png, jpeg, pdf, doc, docx</small>                                <div id="thumb-output"></div>                            </div>                        </div>                        
                        <div class="form-group row">                            <label for="res_remarks" class="col-form-label text-right col-lg-3 col-sm-12">Remarks </label>                            <div class="col-lg-9 col-md-9 col-sm-12">                                <textarea class="form-control form-control-lg form-control-solid" id="res_remarks" name="res_remarks" placeholder="Enter Remarks" rows="3"></textarea> 
                            </div>                        </div> 
                    </div>                    <div class="card-footer">                        <div class="row">                            <div class="col-lg-9 ml-lg-auto">                                <a class="btn btn-default font-weight-bold" name="submitButton" href="https://diyaschool.classonapp.com/resume/resume">Back</a>&nbsp;&nbsp;
                                 <button id="checkBtn" type="submit" class="btn btn-primary font-weight-bold mr-2" name="submitButton">Submit</button>                             </div>                        </div>                    </div> 
                <div></div><input type="hidden"></form>                <!--end::Form-->            </div>            <!--end::Card-->        </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    -->
  </body>
</html>