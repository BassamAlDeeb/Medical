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
  
		
    


        <div  class="en" id ="english" align = "left" dir="ltr">	
            <div class="container">
                <div class="col-md-12" style="text-align: center; border-bottom:1px solid rgba(0,0,0,0.16);">
                    <img src="/images/logo.png" style="width: 20%;">
                </div>
            </div>

            <fieldset style="margin-top:10px;margin-left:23px;margin-right:23px;">
                            
                        @foreach ($patdata as $row)
            <form method="post" action="{{ url('/editpat') }}"  enctype="multipart/form-data">
				@csrf 
				<div class="page-content">
                <input type="hidden"  name="id" value=" {{ $row->id }} ">
					<div class="card">
						<div class="card-body p-4">
							<h3 class="card-title">Update Patient Details</h3><hr/>
								<div class="form-body mt-4">
									<div class="row">
										<div class="col-lg-7">
											<div class="border border-3 p-4 rounded">
												<div class="row g-3">
													<div class="mb-3">
														<label for="pat_passport_no" class="form-label">Passport No.</label>
														<input type="text" class="form-control" placeholder="passport no"  name="pat_passport_no" value="{{$row->pat_passport_no}}" disabled="disabled"  >
													</div>
													<div class="col-md-6">
														<label for="pat_name" class="form-label">Patient Name</label>
														<input type="text" class="form-control" placeholder="patient name" name="pat_name" value="{{ $row->pat_name}}"   >
													</div>
													<div class="col-md-6">
														<label for="pat_date_of_birth" class="form-label">Date of Birth</label>
														<input type="Datetime-local" class="form-control"  name="pat_date_of_birth" value="{{ $row->pat_date_of_birth}}"   >
													</div>
													<div class="mb-3">
														<label for="pat_gender" class="form-label">Gender</label>
														<input type="text" class="form-control" placeholder="gender" name="pat_gender" value="{{ $row->pat_gender}}"   >
													</div>
												</div>
											</div> 
										</div>			
										<!--------------------------->
										<div class="col-lg-5">
											<div class="border border-3 p-4 rounded">
												<div class="col-md-14">
													<label for="pat_nationality" class="form-label">Nationality</label>
													<input type="text" class="form-control" placeholder="nationality" name="pat_nationality" value="{{ $row->pat_nationality}}"   >
												</div>
												<div class="col-md-14">
													<label for="pat_job" class="form-label">Job</label>
													<input type="text" class="form-control" placeholder="job" name="pat_job" value="{{ $row->pat_job}}"  >
												</div>
												<div class="col-md-14">
													<label for="pat_payer" class="form-label">Payer</label>
													<input type="text" class="form-control" placeholder="payer" name="pat_payer" value="{{ $row->pat_payer}}"   >
												</div>
											</div>
										</div>               
									</div><!--end row-->
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="d-grid">
							<button type="submit" class="btn btn-primary" >تعديل بيانات المريض </button>
						</div>
					</div>
				</div>
			</form>

                        @endforeach

                            
            </fieldset>
            <!--**************************************************************************************-->
        
            <!--**************************************************************************************-->
            <fieldset style="margin-top:10px">
                        <legend align="center" class="CenterContent">Results</legend>
                    
                        <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:20px; " ng-show="!ShowNoDataFound">
                        <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Registeration Date</th>
                                                    <th>Result Date </th>
                                                    <th> OPTIONS  </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($repdata as $row)
                                                <tr>
                                                    <td>{{$row -> id}}</td>
                                                
                                                    <td> {{  date('d-m-Y', strtotime($row->rep_registration_date))}} </td>
                                                    
                                                    <td> {{  date('d-m-Y', strtotime($row->rep_registration_date))}} </td>
                                                    
                                                  
                                                    
                                                    <td>
                                                        <a href="/delrep/{{ $row-> id }}" style="margin-right:18%">حذف </a>
                                                        <a href="/editrep/{{$row->id}}" style="margin-right:18%">تعديل </a>
                                                        <a href="/ShowDetalis/{{$row->id}}" style="margin-right:18%">طباعة </a>
                                                    </td>
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

          
        </div>

<!------------------------------------------------------------------------------------------------------------------------------->
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






