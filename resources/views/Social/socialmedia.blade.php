@extends('layouts.auth')
@section('title','تغيير الايميل    ')
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
		<br />
<br />
<br />
		
	<div class="panel panel-default">
		<form method="post" action="{{ url('/storesocial') }}"  enctype="multipart/form-data">
			@csrf 
  			<!--start page wrapper -->

	    	<div class="page-content" >
			<div class="card"
			 style="background-repeat: no-repeat;
			  background-position: center;
			  background-color: #F1F9F9;
			  ;">
				  <div class="card-body p-4" style="text-align: center;">
					  <h5 class="card-title">إضافة  الايميل  </h5>
					  <hr/>
                       <div class="form-body mt-4" style="text-align: center;">
					    <div class="row" style="text-align: center;">
						   <div class="col-lg-4">
                           <div class="border border-3 p-4 rounded">
						
                              <pre>                      </pre>
							  <div class="mb-3">
							
								<label for="inputProductTitle" class="form-label"><b>   الايميل </b> </label>
								<input type="text" class="form-control" name="email" placeholder="  ">
							  </div>
                              <pre>                      </pre>
							 
		
							
                            </div>
						   </div>

					
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>		

			  <div class="col-12">
			  	<div class="d-grid" style="height: 10%;">
                	<button type="submit" class="btn btn-primary" ><h3> إضافة ايميل </h3> </button>
				</div>
			</div>
		</form>
	</div>
</div>




<div class="container-fluid" id="myDIV" style="font-family: Arial, Helvetica, sans-serif ; position: relative;padding:2%;">
                    <div class="jumbotron" style="padding: 12px;text-align: center;">
                        <h1 style="opacity: initial;"> <b>   تعديل الايميل      </b> </h1> 
                        <center>
                            <hr style="width:65%;text-align:center;background-color: aqua; height:2px;">
                        </center>
                        <div class="container mt-5">
                            <div class="row">
                                


   
                                
            <table class="table">
     
                <tbody>
                @foreach($social as $row)   
				
				<tr>
				
					<td>{{$row->email}}</td>
					<td>
                       <a href="/delsoc/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> حذف
                            </a>
                    </td>
                     <td>
                      <a href="/edit/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> تعديل
                       </a>
                                                
                    </td>
				</tr>

				
                                
                                    @endforeach                    
                </tbody>
            </table>

            
  
</div>

							
                </div>
            </div>
            




@endsection