<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="msapplication-TileImage" content="logo.png">
        <link rel="icon" href="/images/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/6f319a86dd.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="assets/css/pace.min.css" rel="stylesheet" />
        <script src="assets/js/pace.min.js"></script>
        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;1000&display=swap" rel="stylesheet">
        <!-- Theme Style CSS -->
        <!-- bostrap-->
        <link rel="stylesheet" href="/css/style.css">
        <script type="text/javascript" src="js/jquery.printPage.js"></script>
        <style>
            body{
                font-family: 'Arial', Helvetica, sans-serif;
                font-size: 18px;
                font-weight: bold;
                }
                .test {
                    padding: 10px;
                }
            </style>
            
    </head>
    <body>
        <!--script type="text/javascript">
            $(document).ready(function(){
            $('.btnprn').printPage();
            });
        </script-->
        <!--a href="{{ url('/prnpriview') }}" class="btnprn btn">Print </a-->

    @foreach ($data_result as $row)
        <div class="container" style="width:50%;height:40px">
            <div style="padding-top: 2%;">
                @foreach ($logo as $rowlogo)
                <a href="/">
                  <img  class="float-right" src="/showlogo/{{$rowlogo->id}}"  width="200" height="200"  >
                  </a>
                  @endforeach
                <br><br><br><br><br><br>
            </div> 
            <br><br><br><br>
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
                    <td class="test" > {{  date('d-m-Y  H:i', strtotime($row->rep_result_date))}}</td>
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
            <div  style="padding: 0px; text-align: center;">
                <p><h5> <b><u> Report</u> </b> </h5> </p>
                <p><h5> <b> <u> COVID RNA (Quantitative) </u> </b> </h5> </p>
            </div>  
            <table style="width: 100%;border: 1px solid black;border-left:none;border-right:none">
                <td style="width: 33%;"><b>Test</b></td>
                <td style="width: 33%;"><b>Result</b></td>
                <td><b>Referance Range</b></td>
            </table>
            <br><br>
            <table style="width: 100%;">
                <tr >
                    <td style="width: 33%;">Sample Type</td>
                    <td  style="width: 33%;">{{$row->rep_sample_type}}</td>
                    <td ></td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td>{{$row->rep_result}}</td>
                    <td>{{$row->rep_result}}</td>
                </tr>
            </table>
            <p style="text-align: left"><b><h5>
                * COVID-19 RNA PCR test done by automated real time
            </h5></b></p> 
            <p style="text-align: left;"><b><h5>
                * Detection limit: 10 copies / reaction
            </h5></b></p>
            <p style="text-align: right;">تحليل كورونا المستجد : {{$row->rep_result_ar}}</p>
            <table style="width: 100%;text-align:left">
                <tr >
                    <td style="width: 33%;font-size: 15px;text-align:left;font-weight: normal;" ><b>Verified by</b></td>
                    <td><b></b></td>
                    <td style="font-weight: normal;font-size: 15px;"><b>Reviewed By</b></td>
                </tr>
                <tr >
                    <td style="width: 33%;font-size: 15px;text-align:left;font-weight: normal;">{{$row ->rep_verified_by}}</td>
                    <td></td>
                    <td style="font-size: 15px;;font-weight: normal;">{{$row->rep_reviewed_by}}</td>
                </tr>
                <tr >
                    <td></td>
                    <td style="font-weight: normal;font-size: 15px;"> <b>Lab Director </b></td>
                    <td></td>
                </tr>
                <tr >
                    <td></td>
                    <td style="font-size: 15px;font-weight: normal;">{{$row->  rep_lab_director}}</td>
                    <td></td>
                </tr>
            </table>
            <table style="width: 100%;padding:0%;">
                <tr>
                    <td style="width: 33%;"></td>
                    <td style="width: 33%;">
                    {!! $qrcod !!}
                    <!-- <img src=""  width="150" height="150"   > -->
                   </td>
                   @if($row->rep_image !==null)
                    <td><img src="/showRep/{{ $row-> id }}"  width="300" height="175"   ></td>
                    @endif
                </tr>
            </table>
            <br>
            <br>
            <br>
            <hr style="width:100%;text-align:center;background-color: black; height:1px;">
                @foreach ($social as $rowsoc)
                    <p style="text-align: left;" > Email : <a> {{$rowsoc->email}}</a> </p>
                    @break;
                @endforeach
            <br>
            
            
            

            <div class="container my-5">
                    <footer >
                        <div class="text-center p-3" >
                        <p style="font-size: 15px;font-weight: normal;text-align: center;"> Page 1 Of 1 </p>
                        </div>
                    </footer>
                </div>
        </div>
    @endforeach
    </body>
</html>


    

