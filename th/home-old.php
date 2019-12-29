<!DOCTYPE html>
<html lang="en">
	<head>
      <title> Blue Ink Co.Ltd bangkok </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
	  <?php include('head.php'); ?>
	  
	</head>
	<body>
      
	  <?php include('header.php'); ?>


         <div class="container-fluid my-4">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
              <h1 class=" ">ผลิตภัณฑ์ของเรา</h1>
            </div>
            <div class="col-md-6 text-md-right text-center">
              <img src="<?= base_url; ?>img/rohs.png" class="w-25">
              <img src="<?= base_url; ?>img/reach.png" class="w-25">
            </div>
          </div>
        </div>
      </div>

      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url; ?>img/slide-1.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url; ?>img/slide-2.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url; ?>img/slide-3.jpg" alt="">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>

      <div class="bg-grey">
         <div class="container text-center py-5 ">
            <p class="font-19">Blue Ink ก่อตั้งขึ้นในประเทศไทยตั้งแต่ปี 2551 และมีความเชี่ยวชาญด้านเครื่องทำความร้อนที่ยืดหยุ่น เราเป็นส่วนหนึ่งของ Ultimheat Alliance การควบคุมการผลิตและเครื่องทำความร้อน ผลิตภัณฑ์ต้นแบบของเราคือเทอร์โมสตัทตริดผลิตขึ้นในฝรั่งเศสตั้งแต่ปี 2493-2598 สินค้าที่ได้รับการจดสิทธิบัตรได้รับการออกแบบออกแบบพัฒนาและผลิตในโรงงานอัลติเมทอัลไลแอนซ์ <b> เพื่อให้คุณได้ติดต่อกับผู้ผลิตจริง </b> และฝ่ายวิศวกรรมของเรายินดีตอบสนองความต้องการเฉพาะของคุณโดยตรงและรวดเร็ว.


            </p>
         </div>
      </div>

      <div class="container-fluid py-5">
         <div class="container">
             <h2 class="mb-4 text-center">เหตุการณ์ที่เกิดขึ้น</h2>

             <div class="row">
               <div class="col-md-12 mb-3">
                  <img src="<?= base_url; ?>img/event-1st.jpg" class="w-75">
                  <p class="pt-1"> Mostra Convegno 2020 17-20 มีนาคม - มิลาน - อิตาลี</p>
               </div>
               <div class="col-md-12 mb-3">
                  <img src="<?= base_url; ?>img/event-2nd.jpg" class="w-50">
                  <p class="pt-1"> Aquatherm 2020 11-14 กุมภาพันธ์ - มอสโกรัสเซีย </p>
               </div>
             </div>
         </div>
      </div>
		
		<?php include('footer.php'); ?>
    </body>
</html>