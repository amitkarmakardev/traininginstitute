<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        body{
            font-family: Lato, serif;
        }
    </style>
</head>
<body>
<br>
Dear {{ $trainee->name }},
<br>
<br>
We are pleased to inform you that your registration for the training {{ $trainee->training->title }} is successful.
Your training details are as following:
<br>
<h4>Training Code</h4>
<br>
{{ $trainee->training->code }}
<br>
<h4>Training Name</h4>
<br>
{{ $trainee->training->code }}
<br>
<br>
Thank you.
<br>
<br>
From
<br><br>
BKTPP Simulator Team

</body>
</html>