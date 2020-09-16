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
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">

        <?php $nomor=0; foreach($data_slider as $key): ?>

          <div class="carousel-item <?php if($nomor==0){echo "active";} ?>">
           <img src=<?php echo $key; ?> class="d-block w-100" alt="logo-<?php echo $nomor; ?>">
          </div>
         
        <?php $nomor++; endforeach; ?>

       </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
          </a>
       
      </div>
    </div>
  </div>
</div>
    <div class="container">
        <div class="row">

        <?php foreach($data_siswa as $key=>$value): ?>

           <div class="col-12 col-lg-3 col-sm-6">
              <div class="card" style="width: 18rem;">
              <img src="asset/image/notnot.png" class="card-img-top" alt="...">
                 <div class="card-body  <?php if($value[3]==true){echo "bg-primary";} ?>">
                 <h5 class="card-title"><?php  echo "$value[0]";?> </h5>
                  <p class="card-text"><?php echo "$value[1] $value[2]"; ?></p>
                 <a href="#" class="btn btn-danger">Lihat Data</a>
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