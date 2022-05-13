@extends('layouts.auth')
@section('title','Admin Control')
@section('content')

<div class="container" style="font-family: Arial, Helvetica, sans-serif ; position: relative;text-align: center;">
                        <div class="jumbotron" style="padding: 12px;text-align: center;">
                            <h1> <b>اختيار المطلوب التحكم به  </b> </h1>  
                            <!--services-->
                            <!-- Page Content -->
                            <div class="container">
                            <!-- Page Heading -->
                            <div class="row" >
                                <div class="col-lg-3 mb-2">
                                    <div  >
                                        <a href="/AddNewPatientReport" target="_blank" ><img class="img-thumbnail" src="/images/3.png" ></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="/AddNewPatientReport">إضافة تقرير لمريض</a>
                                            </h4>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div  >
                                        <a href="/social" target="_blank"><img class="img-thumbnail" src="/images/3.png"  ></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="/social">تغير الايميل  </a>
                                            </h4>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div  >
                                        <a href="/logo" target="_blank"><img class="img-thumbnail" src="/images/3.png" ></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="/logo">تغيير اللوغو </a>
                                            </h4>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-2">
                                    <div  >
                                        <a href="/report" target="_blank"><img class="img-thumbnail" src="/images/3.png" ></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="/report"> تعديل وطباعة التقرير </a>
                                            </h4>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </div>



                          
                             
                             
                            </div>
                        </div>
                    </div> 
                </div>

@endsection