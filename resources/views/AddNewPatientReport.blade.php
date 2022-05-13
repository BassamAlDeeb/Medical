@section('title','Add MedicalReport')
@section('content')
@extends('layouts.app')
	<div class="container"> 
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
		@endif
		@if(session()->has('success'))
			<div class="alert alert-success">
				{{ session()->get('success') }}
			</div>
		@endif
		<br />
		<div class="panel panel-default">
			<!--//////////////////////////////////////////Patient Form/////////////////////////////////////////////-->	
			<form method="post" action="{{ url('AddNewPatientReport/pat_store') }}"  enctype="multipart/form-data">
				@csrf 
				<div class="page-content">
					<div class="card">
						<div class="card-body p-4">
							<h3 class="card-title">Add New Patient Details</h3><hr/>
								<div class="form-body mt-4">
									<div class="row">
										<div class="col-lg-7">
											<div class="border border-3 p-4 rounded">
												<div class="row g-3">
													<div class="mb-3">
														<label for="pat_passport_no" class="form-label">Passport No.</label>
														<input type="text" class="form-control" placeholder="passport no"  name="pat_passport_no" value="{{old('pat_passport_no')}}" required >
													</div>
													<div class="col-md-6">
														<label for="pat_name" class="form-label">Patient Name</label>
														<input type="text" class="form-control" placeholder="patient name" name="pat_name" value="{{old('pat_name')}}" required >
													</div>
													<div class="col-md-6">
														<label for="pat_date_of_birth" class="form-label">Date of Birth</label>
														<input type="Datetime-local" class="form-control"  name="pat_date_of_birth" value="{{old('pat_date_of_birth')}}" required >
													</div>
													<div class="mb-3">
														<label for="pat_gender" class="form-label">Gender</label>
														<input type="text" class="form-control" placeholder="gender" name="pat_gender" value="{{old('pat_gender')}}" required >
													</div>
												</div>
											</div> 
										</div>			
										<!--------------------------->
										<div class="col-lg-5">
											<div class="border border-3 p-4 rounded">
												<div class="col-md-14">
													<label for="pat_nationality" class="form-label">Nationality</label>
													<input type="text" class="form-control" placeholder="nationality" name="pat_nationality" value="{{old('pat_nationality')}}" required >
												</div>
												<div class="col-md-14">
													<label for="pat_job" class="form-label">Job</label>
													<input type="text" class="form-control" placeholder="job" name="pat_job" value="{{old('pat_job')}}"  >
												</div>
												<div class="col-md-14">
													<label for="pat_payer" class="form-label">Payer</label>
													<input type="text" class="form-control" placeholder="payer" name="pat_payer" value="{{old('pat_payer')}}" required >
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
							<button type="submit" class="btn btn-primary" >Save </button>
						</div>
					</div>
				</div>
			</form>

			<!--////////////////////////////////////////Report Form///////////////////////////////////////////////-->
				<div class="panel panel-default">
					<form method="post" action="{{ url('AddNewPatientReport/rep_store') }}"  enctype="multipart/form-data">
						@csrf 
						<div class="page-content">
							<div class="card">
								<div class="card-body p-4">
									<h3 class="card-title">Add The Report Result</h3><hr/>
									<div class="form-body mt-4">
										<div class="row">
											<div class="col-lg-5">
												<div class="border border-3 p-4 rounded">
													<div class="row g-3">
														<div class="mb-3">
															<label for="rep_passport_no" class="form-label">Passport No.</label>
															<input type="text" class="form-control" placeholder="passport no" name="rep_passport_no" value="{{old('rep_passport_no')}}" required >
														</div>
														<div class="mb-3">
															<label for="rep_sample_type" class="form-label"> Sample Type </label>
															<input type="text" class="form-control" placeholder="sample type" name="rep_sample_type" value="{{old('rep_sample_type')}}"  required >
														</div>
														<div class="mb-3">
															<label for="rep_result" class="form-label">Result </label>
															<input type="text" class="form-control" placeholder="result" name="rep_result" value="{{old('rep_result')}}" required >
														</div>
														<div class="mb-3">
															<label for="rep_result" class="form-label">Result Arabic</label>
															<input type="text" class="form-control" placeholder="result Arabic" name="rep_result_ar" value="{{old('rep_result_ar')}}" required >
														</div>
														<div class="mb-3">
															<label for="rep_verified_by" class="form-label">Verified By</label>
															<input type="text" class="form-control" placeholder="verified by" name="rep_verified_by" value="{{old('rep_verified_by')}}" required >
														</div>
													</div>
												</div> 
											</div>
											<!--------------------------->
											<div class="col-lg-7">
												<div class="border border-3 p-4 rounded">
													<div class="mb-3">
														<label for="rep_lab_director" class="form-label">Lab Director</label>
														<input type="text" class="form-control" placeholder="lab director" name="rep_lab_director" value="{{old('rep_lab_director')}}" required >
													</div>
													<div class="mb-3">
														<label for="rep_reviewed_by" class="form-label">Reviewed By</label>
														<input type="text" class="form-control" placeholder="reviewed by" name="rep_reviewed_by" value="{{old('rep_reviewed_by')}}" required >
													</div>
													<div class="mb-3">
														<label for="rep_registration_date" class="form-label">  Registration Date </label>
														<input type="Datetime-local" class="form-control" placeholder="" name="rep_registration_date" value="{{old('rep_registration_date')}}" required >
													</div>
													<div class="mb-3">
														<label for="rep_result_date" class="form-label">Result Date</label>
														<input type="Datetime-local" class="form-control"  name="rep_result_date" value="{{old('rep_result_date')}}" required >
													</div>
													<div class="mb-3">
														<label for="rep_acc_no" class="form-label">ACC NO.</label>
														<input type="text" class="form-control" placeholder="acc no" name="rep_acc_no" value="{{old('rep_acc_no')}}" required >
													</div>
													<div class="mb-3">
														<label for="rep_image" class="form-label">Report Image</label>
														<div style="background-color: deepskyblue;">
															<input id="image-uploadify" name="image" type="file" accept="image" >
														</div>
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
								<button type="submit" class="btn btn-primary" >Save </button>
							</div>
						</div>
					</form>
				</div>
			<!--///////////////////////////////////////////////////////////////////////////////////////-->	
		</div>
	</div>














	
@endsection





