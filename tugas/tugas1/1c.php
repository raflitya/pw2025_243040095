<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1C</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: px;
            margin: 20px;
        }

        .row {
            display: flex;
            gap: px;
        }

        .box {
            width: 150px;
            height: 150px;
            background-color: #AA60C8;
            color: #D69ADE;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid black;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="box">1</div>
        </div>
        <div class="row">
            <div class="box">2</div>
            <div class="box">2</div>
        </div>
        <div class="row">
            <div class="box">3</div>
            <div class="box">3</div>
            <div class="box">3</div>
        </div>
    </div>

</body>
</html>
