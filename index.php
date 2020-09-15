<?php include "data.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
</head>
<body>
    <div class="container">
        <div class="row">

        <?php foreach($data_siswa as $key=>$value): ?>

           <div class="col-2">
                <div class="card" style="width: 18rem;">
              <img src="asset/image/notnot.png" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title"><?php echo $value[0]; ?></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
             </div>
</div>
             <?php endforeach; ?>
        </div>
    </div>


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/jquery-3.5.1.slim.min.js"></script> -->
    <script src="asset/js/jquery-3.5.1.slim.full.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>