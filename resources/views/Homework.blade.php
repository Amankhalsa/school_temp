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
<!-- home work view page start -->

<div class="col-lg-12">            <!--begin::Card-->            <div class="card card-custom">                <div class="card-header flex-wrap border-0 pt-6 pb-0">                    <div class="card-title">                        <h3 class="card-label">                            Homework - Class Wise 
                        </h3>                    </div>                    <div class="card-toolbar">  
                        <!--begin::Button-->                        <a style="background-color: #D7F9EF;color: #0BB783;border:1px solid #D7F9EF;" title="Pending Homework" type="button" class="btn btn-primary font-weight-bolder" onclick="show_modal();">Pending Homework</a>&nbsp;&nbsp;
                        <a href="https://diyaschool.classonapp.com/homework/classwork/addClasswork" class="btn btn-primary font-weight-bolder">                            <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                        <rect x="0" y="0" width="24" height="24"></rect>                                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>                                    </g>                                </svg><!--end::Svg Icon--></span>Add Homework - Class Wise                        </a>                        <!--end::Button-->                    </div>                </div>                <div class="card-body">                    <form class="form-parsley" method="get" action="https://diyaschool.classonapp.com/homework/classwork/index"> 
                        <div class="row"> 
                            <div class="col-md-4"> 
                                <label for="search_date">Search Date </label> 
                                <div class="input-group date">                                    <input type="text" class="form-control" name="search_date" value="01-09-2021" id="kt_datepicker_3">                                    <div class="input-group-append">                                        <span class="input-group-text">                                            <i class="la la-calendar"></i>                                        </span>                                    </div>                                </div>  
                            </div>  
                            <div class="card-footer" style="border-top:none;">                                <div class="col">                                    <button id="checkBtn" type="submit" class="btn btn-primary font-weight-bold mr-2" name="submitButton">Submit</button> 
                                </div>                            </div> 
                        </div>  
                    </form> 
                    <!--begin: Datatable-->                    <table class="table table-bordered table-hover table-checkable dataTable no-footer" id="kt_datatable2">                        <thead>                            <tr>                                <th>#</th>                                <th>Class-Sec</th>  
                                <th>Date</th>                                <th>Source</th>                                <th>Action</th>                            </tr>                        </thead> 
                        <tbody>                            <tr><th colspan="5" style="text-align: center;">No Record Found</th></tr>                        </tbody> 
                    </table>                    <ul class="pagination"> 
                    </ul>                    <!--end: Datatable-->                </div>            </div>        </div>
                    <!-- home work view page end  -->

                    <!-- homework add start  -->
                    <div class="col-lg-12">            <!--begin::Card-->            <div class="card card-custom ">                <div class="card-header">                    <h3 class="card-title">                        Add Homework - Class Wise                    </h3> 
                </div>                <!--begin::Form-->                <form class="form" id="kt_form_1" method="post" action="https://diyaschool.classonapp.com/homework/classwork/getSubjects" enctype="multipart/form-data">                    <div class="card-body"> 
                        <div class="form-group row">                            <label for="get_date" class="col-form-label text-right col-lg-2 col-sm-12">Start Date *</label>                            <div class="col-lg-4 col-md-4 col-sm-12">                                <div class="input-group date">                                    <input type="text" class="form-control" name="get_date" value="01-09-2021" id="kt_datepicker_3">                                    <div class="input-group-append">                                        <span class="input-group-text">                                            <i class="la la-calendar"></i>                                        </span>                                    </div>                                </div>                                <span class="form-text text-muted">Please Select Date</span>                            </div>                            
                            
                            <label for="get_class" class="col-form-label text-right col-lg-2 col-sm-12">Class *</label>                            <div class="col-lg-4 col-md-4 col-sm-12">                                <select class="form-control" id="get_class" name="get_class" required="" onchange="get_class_sections(this.value);">                                    <option value="" selected="">Select value</option>                                                                                 <option value="1">                                             U.K.G</option> 
                                                                                 <option value="2">                                             1st</option> 
                                                                                 <option value="3">                                             2nd</option> 
                                                                                 <option value="4">                                             3rd</option> 
                                                                                 <option value="5">                                             4th</option> 
                                                                                 <option value="6">                                             5th</option> 
                                                                                 <option value="7">                                             6th</option> 
                                                                                 <option value="8">                                             7th</option> 
                                                                                 <option value="9">                                             8th</option> 
                                                                                 <option value="10">                                             9th</option> 
                                                                                 <option value="11">                                             10th</option> 
                                                                                 <option value="12">                                             +1</option> 
                                                                        </select> 
                            </div> 
                        </div>                        
                        <div class="form-group row class_sections_div" id="" style="display: none;">                        <label class="col-2 col-form-label  text-right">Section(s)</label>                        <div class="col-10 col-form-label">                            <div class="checkbox-inline" id="class_sections">                            </div> 
                        </div>   
                        </div>  
                        
                        <div class="form-group row class_sections_div" style="display: none;">                            <label class="col-2 col-form-label  text-right"></label>                        <button id="checkBtn" type="submit" class="btn btn-primary font-weight-bold mr-2" name="submitButton">Get Subjects</button>                        </div>                    </div> 
                </form>                <!--end::Form-->                <hr>                <form class="form" id="kt_form_1" method="post" action="https://diyaschool.classonapp.com/homework/classwork/add" enctype="multipart/form-data">                    <div class="card-body">                                                                                </div>                </form>                
            </div>            <!--end::Card-->        </div>
            <!-- end homework add -->

            <!-- section wise homework view page  -->

            <div class="col-lg-12">            <!--begin::Card-->            <div class="card card-custom">                <div class="card-header flex-wrap border-0 pt-6 pb-0">                    <div class="card-title">                        <h3 class="card-label">                            Homework - Section Wise 
                        </h3>                    </div>                    <div class="card-toolbar">  
                        <!--begin::Button-->                         <a style="background-color: #D7F9EF;color: #0BB783;border:1px solid #D7F9EF;" title="Pending Homework" type="button" class="btn btn-primary font-weight-bolder" onclick="show_modal();">Pending Homework</a>&nbsp;&nbsp;
                        <a href="https://diyaschool.classonapp.com/homework/sectionwork/addSectionwork" class="btn btn-primary font-weight-bolder">                            <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                        <rect x="0" y="0" width="24" height="24"></rect>                                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>                                    </g>                                </svg><!--end::Svg Icon--></span>Add Homework - Section Wise                        </a>                        <!--end::Button-->                    </div>                </div>                <div class="card-body">                    <form class="form-parsley" method="get" action="https://diyaschool.classonapp.com/homework/sectionwork/index"> 
                        <div class="row"> 
                            <div class="col-md-4"> 
                                <label for="get_search_type">Search Date </label> 
                                <div class="input-group date">                                    <input type="text" class="form-control" name="search_date" value="01-09-2021" id="kt_datepicker_3">                                    <div class="input-group-append">                                        <span class="input-group-text">                                            <i class="la la-calendar"></i>                                        </span>                                    </div>                                </div>  
                            </div>  
                            <div class="card-footer" style="border-top:none;">                                <div class="col">                                    <button id="checkBtn" type="submit" class="btn btn-primary font-weight-bold mr-2" name="submitButton">Submit</button> 
                                </div>                            </div> 
                        </div>  
                    </form> 
                    <!--begin: Datatable-->                    <table class="table table-bordered table-hover table-checkable dataTable no-footer" id="kt_datatable2">                        <thead>                            <tr>                                <th>#</th>                                    <th>Class-Sec</th>  
                                    <th>Date</th>                                    <th>Source</th>                                    <th>Action</th>                            </tr>                        </thead> 
                        <tbody>                            <tr><th colspan="5" style="text-align: center;">No Record Found</th></tr>                        </tbody> 
                    </table>                    <ul class="pagination">                         
                    </ul>                    <!--end: Datatable-->                </div>            </div>        </div>
                    <!-- end section wise homework  -->

                    <!-- add homework secxtion wise  -->

                    <div class="col-lg-12">            <!--begin::Card-->            <div class="card card-custom ">                <div class="card-header">                    <h3 class="card-title">                        Add Homework - Section Wise                    </h3> 
                </div>                <!--begin::Form-->                <form class="form" id="kt_form_1" method="post" action="https://diyaschool.classonapp.com/homework/sectionwork/getSubjects" enctype="multipart/form-data">                    <div class="card-body"> 
                        <div class="form-group row">                             
                            <div class="col-lg-4 col-md-4 col-sm-12">                                <div class="input-group date">                                    <input type="text" class="form-control" name="get_date" value="01-09-2021" id="kt_datepicker_3">                                    <div class="input-group-append">                                        <span class="input-group-text">                                            <i class="la la-calendar"></i>                                        </span>                                    </div>                                </div>                                <span class="form-text text-muted">Please Select Date</span>                            </div>                             
                            <div class="col-lg-4 col-md-4 col-sm-12">                                <select class="form-control" id="get_class" name="get_class" required="" onchange="get_class_sections(this.value);">                                    <option value="" selected="">Select Class</option>                                                                                 <option value="1">                                             U.K.G</option> 
                                                                                 <option value="2">                                             1st</option> 
                                                                                 <option value="3">                                             2nd</option> 
                                                                                 <option value="4">                                             3rd</option> 
                                                                                 <option value="5">                                             4th</option> 
                                                                                 <option value="6">                                             5th</option> 
                                                                                 <option value="7">                                             6th</option> 
                                                                                 <option value="8">                                             7th</option> 
                                                                                 <option value="9">                                             8th</option> 
                                                                                 <option value="10">                                             9th</option> 
                                                                                 <option value="11">                                             10th</option> 
                                                                                 <option value="12">                                             +1</option> 
                                                                        </select> 
                                <span class="form-text text-muted">Please Select Class</span>                            </div> 
                            <div class="col-lg-4 col-md-4 col-sm-12"> 
                                        <select class="  form-control mb-0" id="class_sections" name="get_section" required="" style="width: 100%; height:36px;">                                            <option value="" selected="">Select Section</option> 
                                        </select>                                <span class="form-text text-muted">Please Select Section</span>                                    </div>                                    </div>                            
                        <button id="checkBtn" type="submit" class="btn btn-primary font-weight-bold mr-2" name="submitButton">Get Subjects</button>                        </div>  
                   
                </form>                <!--end::Form-->                <hr>                <form class="form" id="kt_form_1" method="post" action="https://diyaschool.classonapp.com/homework/sectionwork/add" enctype="multipart/form-data">                    <div class="card-body">                                                                    </div>                </form>                
            </div>            <!--end::Card-->        </div>
            <!-- end add section wise  -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>