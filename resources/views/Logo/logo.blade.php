@extends('layouts.auth')
@section('title','تغيير  اللوغو')
@section('content')  

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
		
	<div class="panel panel-default">
		<form method="post" action="{{ url('/store') }}"  enctype="multipart/form-data">
			@csrf 
  			<!--start page wrapper -->

	    	<div class="page-content" >
			<div class="card"
			 style=" background-repeat: no-repeat;
			  background-position: center;
			  background-color: #F1F9F9;
			  ;">
				  <div class="card-body p-4">
                  <h5 class="card-title">   <B>  إضافة صورة لوغو</B>  </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-4">
                           <div class="border border-3 p-4 rounded">
						
							
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label"><b> إدخال صورة اللوغو</b></label>
								<input name="image" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
							  </div>
                            </div>
						   </div>

	
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>		

			  <div class="col-12">
			  	<div class="d-grid" style="height: 10%;">
                	<button type="submit" class="btn btn-primary" ><h3>  حفظ الصورة </h3> </button>
				</div>
			</div>
		</form>
	</div>
</div>








<div class="container" id="myDIV" style="font-family: Arial, Helvetica, sans-serif ; position: relative;padding:2%;">
                    <div class="jumbotron" style="padding: 12px;text-align: center;">
                        <h1 style="opacity: initial;"> <b>  صور اللوغو      </b> </h1> 
                        <center>
                            <hr style="width:65%;text-align:center;background-color: aqua; height:2px;">
                        </center>
                        <div class="container mt-5">
                            <div class="row">
                                
        

							@foreach($logo as $row)  
                            <div class="col-md-2">
                            <div class="card p-3"  >
                                <div class="d-flex flex-row mb-3">
                                <a href="/w/showslider/{{ $row-> id }} " target="blank"><img src="/w/showslider/{{ $row-> id }}?size=pdhi" class="card-img-top" width="150" height="150"></a>
                                
                            </div>
                            <div>
								
									         
											
											<a href="/delete/{{ $row-> id }}">حذف</a>	
											
								
							
							</div>
                        </div>
                        </div> 
        @endforeach    
                </div>
            </div>
            </div>
























@endsection