<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link href="/Content/font-awesome.css" rel="stylesheet" />
    <link href="/Content/font-awesome.min.css" rel="stylesheet" />
    <link href="/Content/iconfont.css" rel="stylesheet" />
    <link href="/Scripts/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="/Content/font-awesome.css" rel="stylesheet" />
    <link href="/Content/font-awesome.min.css" rel="stylesheet" />
    <link href="/Content/iconfont.css" rel="stylesheet" />
    <link href="/Scripts/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="/Scripts/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="/Content/bootstrap.rtl.min.css" rel="stylesheet" />
    <script src="/Scripts/jquery-3.1.1.min.js"></script>
    <link href="/Content/ResultStyle.css" rel="stylesheet" />







	<link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="/assets/css/pace.min.css" rel="stylesheet" />
	<script src="/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="/assets/css/app.css" rel="stylesheet">
	<link href="/assets/css/icons.css" rel="stylesheet">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width.0">
    <link href="/Content/font-awesome.css" rel="stylesheet" />
    <link href="/Content/font-awesome.min.css" rel="stylesheet" />
    <link href="/Content/iconfont.css" rel="stylesheet" />
    <link href="/Scripts/bootstrap-datetimepicker.min.css" rel="stylesheet" />


</head>
<body>
    
    <div class="">
        
<!doctype html>
<html style="background-color: #e7f1ec; border-top: 9px solid #000; background-repeat: no-repeat; background-position: center; border-bottom: 0px solid; vertical-align: middle;">
<head>



    <link href="/Scripts/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="/Content/bootstrap.rtl.min.css" rel="stylesheet" />
    <script src="/Scripts/jquery-3.1.1.min.js"></script>
    <title>Result</title>
    <link href="/Content/ResultStyle.css" rel="stylesheet" />

</head>
<body>
    <script>
		function ShowArabic(str) {
			var docDirection = document.documentElement.dir;  
			var isRTL = (docDirection === 'rtl');
			var x = document.getElementById("arabic");
            var y = document.getElementById("english");
            var a = document.getElementById("ara");
            var b = document.getElementById("eng");
			document.documentElement.dir = isRTL ? 'ltr' : 'rtl';
	        if ((x.style.display === "block") && (y.style.display === "none")){
                    x.style.display = "none";
                    y.style.display = "block";
             }else {
                    x.style.display = "block";
                    y.style.display = "none";
                }
            if ((a.style.display === "block") && (b.style.display === "none")){
                    a.style.display = "none";
                    b.style.display = "block";
             }else {
                    a.style.display = "block";
                    b.style.display = "none";
                }
		}
	</script>
    <style> 
		div.ar{
			display:none;
		}
		div.en{
			display:block;
		}
        div.b_en{
			display:block;
        }
        div.b_ar{
			display:none
        }
	</style>	
            <div class="b_ar"  id= "ara" dir="rtl">
                <button type="submit" class="btn btn-default  roundedBtn SiteBtn">Home</button>
                <button type="submit"  class = "btn  btn-default roundedBtn SiteBtn"  onclick="ShowArabic()"   role="button">English</button>
            </div>
            <div class="b_en"  id= "eng" dir="rtl" >
                <button type="submit" class="btn btn-default  roundedBtn SiteBtn">Home</button>
                <button type="submit"  class = "btn  btn-default roundedBtn SiteBtn"  onclick="ShowArabic()"   role="button">عربي</button>
            </div>


        <div  class="en" id ="english" align = "left" dir="ltr">	
            <div class="container">
                <div class="col-md-12" style="text-align: center; border-bottom:1px solid rgba(0,0,0,0.16);">
                    <img src="/images/logo.png" style="width: 20%;">
                </div>
            </div>

            <fieldset style="margin-top:10px;margin-left:23px;margin-right:23px;">
                            
                        @foreach ($data_result as $row)
                                <div class="row" style="margin-top:10px;">
                                    <div class="CenterContent PatientInfoHeader">TestResultsForPatientName : {{$row ->pat_name}} </div>
                                </div>


                            <div class="row">
                                <div class="CenterContent PatientInfoHeader">PatientNo. {{$row ->rep_acc_no}}</div>
                            </div>
                            @break
                        @endforeach

                            
            </fieldset>
            <!--**************************************************************************************-->
            <fieldset class="" style="margin-top:10px;padding:20px; ">
                <form method="post" action="{{ url('R') }}"  enctype="multipart/form-data">
                    @csrf 

                    <legend align="center" class="CenterContent">SearchCriteria</legend>
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="VisitDateFrom">Visit Date From</label>
                            <div >
                                <input type="Date" class="form-control"  name="Visit_Date_From" value="{{old('Visit_Date_From')}}">
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="VisitDateTo">Visit Date To</label>
                            <div >
                                <input type="Date" class="form-control"  name="Visit_Date_To" value="{{old('Visit_Date_To')}}">  
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="patientNo">Patient No.</label>
                            @foreach ($data_result as $row)
                                <input type="text" class="form-control" placeholder="{{$row ->rep_acc_no}}" disabled="disabled" >
                                <input type="text" class="form-control" name="Passport_No" value="{{$row ->pat_passport_no}}"  hidden>
                                @break
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="AccNoFrom">Acc. No. From</label>
                            <input type="text" class="form-control"  name="Acc_No_From" value="{{old('Acc_No_From')}}">
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="AccNoTo">Acc. No. To</label>
                            <input type="text" class="form-control"  name="Acc_No_To" value="{{old('Acc_No_To')}}">
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="FileNo">Accession Number</label>
                            <input type="text" class="form-control"  name="Accession_Number" value="{{old('Accession_Number')}}">
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <div class="CenterContent">
                        <button type="submit" class="btn btn-lg btn-default" >Search</button>
                    </div>
                </form>
            </fieldset>
            <!--**************************************************************************************-->
            <fieldset style="margin-top:10px">
                        <legend align="center" class="CenterContent">Results</legend>
                    
                        <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:20px; " ng-show="!ShowNoDataFound">
                        <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>VisitDate</th>
                                                    <th>Accession Number</th>
                                                    <th>Patient Name</th>
                                                    <th>InsuranceID</th>                                    
                                                    <th>Test Department</th>
                                                    <th>Clinic Ref No.</th>
                                                    <th>Report</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($data_result as $row)
                                                <tr>
                                                    <td>{{$row -> id}}</td>
                                                
                                                    <td> {{  date('d-m-Y', strtotime($row->rep_registration_date))}} </td>
                                                    <td>{{$row ->rep_acc_no}}</td>
                                                    <td>{{$row ->pat_name}}</td>
                                                    <td></td>
                                                    <td>COVID RNA (Quantitative)</td>
                                                    <td>{{  date('d-m-Y', strtotime($row->rep_registration_date))}}</td>
                                                    <td><a href="/repdetails/{{$row->id}}">Report</a></td>
                                                </tr>
                                                @endforeach
                        
                                        
                                            </tbody>
                                            
                                        </table>
                                    </div> 
                    
                    
                    
                    </div>
                        <!-- <div class="alert alert-warning center-block" style="text-align:center" ng-show="ShowNoDataFound">
                            <h3>NoDataFound</h3>
                        </div> -->
            </fieldset>

            <fieldset style="background-color:#000;text-align:center;color:white;font-size: 12px;padding:1%">
                <p>
                © Laboratory Data Manager 2022All Rights Reserved
                </p><p>
                Developed and Designed by National Technology
                </p>
            </fieldset> 
        </div>

<!------------------------------------------------------------------------------------------------------------------------------->

        <div  class="ar" id ="arabic" align = "rgiht" dir="rtl">
            <div class="container">
                <div class="col-md-12" style="text-align: center; border-bottom:1px solid rgba(0,0,0,0.16);">
                    <img src="/images/logo.png" style="width: 20%;">
                </div>
            </div>

            <fieldset style="margin-top:10px;margin-left:23px;margin-right:23px;">
                            
                        @foreach ($data_result as $row)
                                <div class="row" style="margin-top:10px;">
                                    <div class="CenterContent PatientInfoHeader">نتائج اختبار من الجل المريض: {{$row ->pat_name}} </div>
                                </div>


                            <div class="row">
                                <div class="CenterContent PatientInfoHeader">رقم المريض. {{$row ->rep_acc_no}}</div>
                            </div>
                            @break
                        @endforeach

                            
            </fieldset>
            <!--**************************************************************************************-->
            <fieldset class="" style="margin-top:10px;padding:20px; ">
                <form method="post" action="{{ url('R') }}"  enctype="multipart/form-data">
                    @csrf 

                    <legend align="center" class="CenterContent">شروط البحث</legend>
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="VisitDateFrom">الزيارات من تاريخ</label>
                            <div >
                                <input type="Date" class="form-control"  name="Visit_Date_From" value="{{old('Visit_Date_From')}}">
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="VisitDateTo">الزيارات إلى تاريخ</label>
                            <div >
                                <input type="Date" class="form-control"  name="Visit_Date_To" value="{{old('Visit_Date_To')}}">  
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="patientNo">رقم المريض</label>
                            @foreach ($data_result as $row)
                                <input type="text" class="form-control" placeholder="{{$row ->rep_acc_no}}" disabled="disabled" >
                                <input type="text" class="form-control" name="Passport_No" value="{{$row ->pat_passport_no}}"  hidden>
                                @break
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="AccNoFrom">من رقم ACC</label>
                            <input type="text" class="form-control"  name="Acc_No_From" value="{{old('Acc_No_From')}}">
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="AccNoTo">إلى رقم ACC</label>
                            <input type="text" class="form-control"  name="Acc_No_To" value="{{old('Acc_No_To')}}">
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="FileNo">رقم الانتساب</label>
                            <input type="text" class="form-control"  name="Accession_Number" value="{{old('Accession_Number')}}">
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <div class="CenterContent">
                        <button type="submit" class="btn btn-lg btn-default" >ابحث</button>
                    </div>
                </form>
            </fieldset>
            <!--**************************************************************************************-->
            <fieldset style="margin-top:10px">
                        <legend align="center" class="CenterContent">النتائج</legend>
                    
                        <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:20px; " ng-show="!ShowNoDataFound">
                        <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>رقم التعريف</th>
                                                    <th>تاريخ الزيارة</th>
                                                    <th>رقم الانتساب</th>
                                                    <th>اسم المريض</th>
                                                    <th>رقم الضمان</th>                                    
                                                    <th>قسم الاختبار</th>
                                                    <th>رقم المراجعة في العيادة</th>
                                                    <th>التقرير</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($data_result as $row)
                                                <tr>
                                                    <td>{{$row -> id}}</td>
                                                
                                                    <td> {{  date('d-m-Y', strtotime($row->rep_registration_date))}} </td>
                                                    <td>{{$row ->rep_acc_no}}</td>
                                                    <td>{{$row ->pat_name}}</td>
                                                    <td></td>
                                                    <td>COVID RNA (Quantitative)</td>
                                                    <td>{{  date('d-m-Y', strtotime($row->rep_registration_date))}}</td>
                                                    <td><a href="/repdetails">Report</a></td>
                                                </tr>
                                                @endforeach
                        
                                        
                                            </tbody>
                                            
                                        </table>
                                    </div> 
                    
                    
                    
                    </div>
                        <!-- <div class="alert alert-warning center-block" style="text-align:center" ng-show="ShowNoDataFound">
                            <h3>NoDataFound</h3>
                        </div> -->
            </fieldset>

            <fieldset style="background-color:#000;text-align:center;color:white;font-size: 12px;padding:1%">
                <p>
                © Laboratory Data Manager 2022All Rights Reserved
                </p><p>
                Developed and Designed by National Technology
                </p>
            </fieldset> 
        </div>


        <!--------------------------------------------------------------------->
    <script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
    
</body>
</html>






