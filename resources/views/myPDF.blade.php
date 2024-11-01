<!DOCTYPE html>
<html>
<head>
    <title>Laravel PDF Example</title>
    <style>
        body {
            font-family: 'Arial, sans-serif';
        }
        .container {
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $title }}</h1>
            <p>Date: {{ $date }}</p>
        </div>
        <div class="content">
            <p>This is an example of a PDF document generated using Laravel and DomPDF.</p>
        </div>
       
<div>
    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/img1.jpg'))) }}" alt="Logo" style="width:200px;height:240px;">
</div>

<div>
   <img src="{{ asset('images/img1.jpg') }}" alt="Logo" style="width:200px;height:240px;">
</div>


    </div>
    <a href="/printPDF">Print</a>
</body>
</html>