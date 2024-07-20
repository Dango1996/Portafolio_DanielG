<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<style>
    .card::before{
        content: "";
        width: 104%;
        height: 102%;
        border-radius: 8px;
        background-image: linear-gradient(
            var(--rotate)
            , #5ddcff, #3c67e3 43%, #4e00c2);
            position: absolute;
            z-index: -1;
            top: -1%;
            left: -2%;
            animation: spin 2.5s linear infinite;
    }
</style>
<body style="background-color: #adadad;">

    <?php include 'topbar.php'?>
    
    <div class="content">
        <div class="text-center mt-4"><h3>Habilidades</h3></div>
        <p class="text-center pb-5">tengo experiencia en el uso y manejo de:</p>

        <div class="d-flex justify-content-between" style="flex-wrap: wrap;">
            <div></div>
            <div class="card p-2 pt-4" > 
                <img src="resources/html.png" height="200px" width="220px" alt="">
                <p class="text-center font-weight-bold pt-2">HTML</p> 
            </div>
            <div class="card p-2 pt-4">
                <img src="resources/css.png" height="200px" width="220px" alt="">
                <p class="text-center font-weight-bold pt-2">CSS</p> 
            </div>
            <div class="card p-2 pt-4">
                <img src="resources/bootstrap.png" height="200px" width="220px" alt="">
                <p class="text-center font-weight-bold pt-2">BOOTSTRAP</p> 
            </div>
            <div class="card p-2 pt-4">
                <img src="resources/php.png" height="200px" width="220px" alt="">
                <p class="text-center font-weight-bold pt-2">PHP</p> 
            </div>
            <div class="card p-2 pt-4">
                <img src="resources/sql.png" height="200px" width="220px" alt="">
                <p class="text-center font-weight-bold pt-2">SQL</p> 
            </div>
            <div></div>

        </div>
    </div>
    
    
    
</body>
</html>