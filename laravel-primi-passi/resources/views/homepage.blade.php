<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
    <style>
        body {
            width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            padding-bottom: 100px;
        }

        .container {
            display: flex;
        }

        .box-img {
            width: 300px;
           
        }

        img {
            width: 100%;
        }

        h2 {
            margin: auto 0;
        }
    </style>
</head>
<body>
    
        <h1>Hello World!</h1>

            @foreach ($images as $image)
            <div class="container">
                <div class="box-img"><img src={{ $image }}></div>
                <h2>HELLO WORLD!</h2>
            </div>
            @endforeach

          

    
</body>
</html>