<html >
<head>
    <title></title>

    <script src="/Scripts/searchhi.js"></script>
    <link href="/Scripts/Site.min.css" rel="stylesheet" type="text/css" />
    <link href="/Scripts/ReportPage.css" rel="stylesheet" type="text/css" />
    <link href="/css/ResultStyle.css" rel="stylesheet" type="text/css" />
</head>
<body onload="return window_onload()">

     
    
    <table width="950px">
        <tr>
            <td>
            <center>
                <input id="btnPDF" type="button" value="PDF" onclick="return btnPDF_onclick()"  class="button" />
                </center>
            </td>
            <td>
            <center>
                <input id="btnXPX" type="button" value="TIFF" onclick="return btnTIFF_onclick()" class="button" />
                </center>
            </td>
            <td>
            <center>
                <input id="btnRichText" type="button" value="Rich Text" onclick="return btnWord_onclick()" class="button" />
                </center>
            </td>
            <td>
            <center>
                <input id="btnExcel" type="button" value="Excel" onclick="return btnExcel_onclick()" class="button" />
                </center>
            </td>
            <td>
            <center>
                <input id="btnWebArchieve" type="button" value="Web Archive" onclick="return btnMHTML_onclick()" class="button"/>
                </center>
            </td>
            <td>
            <center>
                <input id="btnCSV" type="button" value="CSV" onclick="return btnCSV_onclick()" class="button" />
                </center>
            </td>
   
            
        </tr>
        <tr>
            <td colspan="6" >
                <iframe src=""   width="1000" height="600px"></iframe>
            </td>
        </tr>
    </table>


  
</body>
</html>