<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
            $qrcod=QrCode::size(120)->generate(url('/getReport/sh?search_in_page=').strval(substr($QR_passporNo,strpos($QR_passporNo,':')+2,strlen(strpos($QR_passporNo,'"'))-4))) ;
            </div>
        </div>

    </div>
</body>
</html>