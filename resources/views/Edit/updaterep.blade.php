@section('title','Add MedicalReport')
@section('content')
@extends('layouts.app')

<div class="panel panel-default">

@foreach ($repdata as $row)
					<form method="post" action="{{ url('/updaterep') }}"  enctype="multipart/form-data">
						@csrf 
						<div class="page-content">
							<div class="card">
							<input type="hidden"  name="id" value=" {{ $row->id }} ">
								<div class="card-body p-4">
									<h3 class="card-title">Update Report Result</h3><hr/>
									<div class="form-body mt-4">
										<div class="row">
											<div class="col-lg-5">
												<div class="border border-3 p-4 rounded">
													<div class="row g-3">
														<div class="mb-3">
															<label for="rep_passport_no" class="form-label">Passport No.</label>
															<input type="text" class="form-control" placeholder="passport no" name="rep_passport_no" value="{{ $row->rep_passport_no}}"   >
														</div>
														<div class="mb-3">
															<label for="rep_sample_type" class="form-label"> Sample Type </label>
															<input type="text" class="form-control" placeholder="sample type" name="rep_sample_type" value="{{ $row->rep_sample_type}}"    >
														</div>
														<div class="mb-3">
															<label for="rep_result" class="form-label">Result </label>
															<input type="text" class="form-control" placeholder="result" name="rep_result" value="{{ $row->rep_result}}"   >
														</div>
														<div class="mb-3">
															<label for="rep_result" class="form-label">Result Arabic</label>
															<input type="text" class="form-control" placeholder="result Arabic" name="rep_result_ar" value="{{ $row->rep_result_ar}}"   >
														</div>
														<div class="mb-3">
															<label for="rep_verified_by" class="form-label">Verified By</label>
															<input type="text" class="form-control" placeholder="verified by" name="rep_verified_by" value="{{ $row->rep_verified_by}}"   >
														</div>
													</div>
												</div> 
											</div>
											<!--------------------------->
											<div class="col-lg-7">
												<div class="border border-3 p-4 rounded">
													<div class="mb-3">
														<label for="rep_lab_director" class="form-label">Lab Director</label>
														<input type="text" class="form-control" placeholder="lab director" name="rep_lab_director" value="{{ $row->rep_lab_director}}"   >
													</div>
													<div class="mb-3">
														<label for="rep_reviewed_by" class="form-label">Reviewed By</label>
														<input type="text" class="form-control" placeholder="reviewed by" name="rep_reviewed_by" value="{{ $row->rep_reviewed_by}}"   >
													</div>
													<div class="mb-3">
														<label for="rep_registration_date" class="form-label">  Registration Date </label>
														<input type="Datetime" class="form-control" placeholder="" name="rep_registration_date" value="{{ $row->rep_registration_date}}"   >
													</div>
													<div class="mb-3">
														<label for="rep_result_date" class="form-label">Result Date</label>
														<input type="text" class="form-control"  name="rep_result_date" value="{{ $row->rep_result_date}}"   >
													</div>
													<div class="mb-3">
														<label for="rep_acc_no" class="form-label">ACC NO.</label>
														<input type="text" class="form-control" placeholder="acc no" name="rep_acc_no" value="{{ $row->rep_acc_no}}"   >
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
								<button type="submit" class="btn btn-primary" >Update </button>
							</div>
						</div>
					</form>
        @endforeach
				</div>











                	
@endsection