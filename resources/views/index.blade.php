<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
            body{
                
                font-family: 'DejaVu Sans';
                font-size: 13px;
                font-weight: bold;
                
                }
</style>

</head>
<body style="text-align: center">
    @foreach ($data_result as $row)
        <div width="90% ">
            <div style="padding-top: 12px;padding-bottom: 4%;">
            <img src="{{public_path('/images/f.png')}}" width="15%" hight="15%">
        </div>
        <div >
                    <table style="width: 100%;border: 1px solid black;border-left:none;border-right:none">
                        <tr>
                            <td style="padding-bottom: 5%;" >Patient Name: </td> 
                            <td  style="width:28%;padding-bottom:2%;">{{$row->pat_name}}</td>
                            <td class="test" style="width:10%;"> </td>  
                            <td  style="padding-bottom: 5%;" >Registration Date: </td>
                            <td style="padding-bottom: 5%;">{{  date('d-m-Y  H:i', strtotime($row->rep_registration_date)) }}</td>
                        </tr>
                        <tr>
                            <td class="test" >ACC . No </td>  
                            <td class="test" >{{$row->  rep_acc_no}}</td>
                            <td class="test" > </td>  
                            <td class="test" > ResultDate</td>
                            <td class="test" > {{  date('d-m-Y  H:i', strtotime($row->rep_result_date))}} </td>
                        </tr>
                        <tr>
                            <td class="test" >Nationality</td>   
                            <td class="test" >{{$row->pat_nationality}}</td>
                            <td class="test" > </td>  
                            <td class="test" > Passport No</td>
                            <td class="test" > {{$row->pat_passport_no}}</td>
                        </tr>
                        <tr>
                            <td class="test" > Date od Birth </td>   
                            <td class="test">{{  date('d-m-Y  H:i', strtotime($row->pat_date_of_birth))}}</td>
                            <td class="test" >   </td>  
                            <td class="test"> Job</td>
                            <td class="test" >{{$row->pat_job}}</td>
                        </tr>
                        <tr>
                            <td class="test"> Gender</td>   
                            <td class="test">{{$row->pat_gender}}</td>
                            <td class="test" > </td>  
                            <td class="test"> Payer</td>
                            <td class="test">{{$row->  pat_payer}}</td>
                        </tr>
                    </table>
        </div>
        <div>
        <table style="text-align: center" width=100%>
        <tr> <td></td>  </tr>
                        <tr>
                            <td><h3> <u> Report</u> </h3></td>  
                        
                        </tr>
                        <tr>
                            <td> <h4>  <u> COVID RNA (Quantitative) </u>  </h4></td>  
                            <dd></dd>
                        </tr>
                        <tr> <td></td>  </tr>
                        <tr> <td></td>  </tr>
        </table>

        </div>
        <div>
        <table style="width: 100%;border: 1px solid black;border-left:none;border-right:none">
                        <tr>
                        <td style="width: 33%;"><h3><b>Test</b></h3></td>
                        <td style="width: 33%;"><h3><b>Result</b></h3></td>
                        <td><h3><b>Referance Range</b></h3></td>
                        </tr>
            </table>
        </div>

        <div>
                    <table>
                    <tr> <td></td>  </tr>
                    <tr>  <td></td>  </tr>
                    <tr> <td></td>   </tr>
                    <tr> <td></td>  </tr>
                    <tr>  <td></td>  </tr>
                    <tr> <td></td>   </tr>
                    <tr> <td></td>  </tr>
                    <tr>  <td></td>  </tr>
                    <tr> <td></td>   </tr>
                    </table>
        <table style="width: 100%;">
                        <tr >
                            <td style="width: 33%;">Sample Type</td>
                            <td  style="width: 33%;">{{$row->rep_sample_type}}</td>
                            <td ></td>
                        </tr>
                        <tr>
                            <td>Result</td>
                            <td>Neg{{$row->rep_result}}ativ</td>
                            <td>{{$row->rep_result}}</td>
                        </tr>
                    </table>
        </div>
        <table>
                    <tr> <td></td>  </tr>
                    <tr>  <td></td>  </tr>
                    <tr> <td></td>   </tr>
                    <tr> <td></td>  </tr>
                    <tr>  <td></td>  </tr>
                    <tr> <td></td>   </tr>
                    
                    </table>
        <div>
        <table width="100%">
                        <tr>
                            <td> <h4>* COVID-19 RNA PCR test done by automated real time </h4></td>  
                        
                        </tr>
                        <tr>
                            <td> <h4> * Detection limit: 10 copies / reaction    </h4></td>  
                            
                        </tr>
        </table>
        </div>

        <div style="text-align: right;font-family: 'Arial'" dir="rtl">
        
        <b><h4> تحليل كورونا المستجد :  {{$row->rep_result_ar}}  </h4></b>
        </div>

        <table style="width: 100%;text-align:left">
                        <tr >
                            <td style="width: 50%;font-size: 15px;text-align:left;font-weight: normal;" >Verified by</td>
                            <td><b></b></td>
                            <td style="font-weight: normal;font-size: 15px;">Reviewed By</td>
                        </tr>
                        <tr >
                            <td style="width: 50%;font-size: 15px;text-align:left;font-weight: normal;">{{$row ->rep_verified_by}}</td>
                            <td></td>
                            <td style="font-weight: normal;font-size: 15px;">  {{$row->rep_reviewed_by}}</td>
                        </tr>
                        <tr >
                            <td></td>
                            <td style="font-weight: normal;font-size: 15px;"> Lab Director </td>
                            <td></td>
                        </tr>
                        <tr >
                            <td></td>
                            <td style="font-size: 15px;font-weight: normal;">{{$row->  rep_lab_director}}</td>
                            <td></td>
                        </tr>
                    </table>
        <div style="padding-bottom:25%"> 

        </div>
            
                    <table style="border-top: 1px solid black;border-left:none;border-right:none;padding:10px" width="100%">
                    
                    @foreach ($socialmedia as $rowsoc)
                     <tr> <td> Email : <a>{{$rowsoc->email}}</a></td>  </tr>
                     @break;
                    @endforeach
                    
                    </table>



                    
                                <div style="padding-top:14%" >
                                <p style="font-size: 12px;font-weight: normal;text-align: center;"> Page 1 OF 1 </p>
                                </div>
                
                                

                    </div >                    
    @endforeach
</body>
</html>