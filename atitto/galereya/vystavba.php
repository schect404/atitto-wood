<!DOCTYPE html>
<html>

<?php include('../header.php'); ?>

<div class="row">
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
<div class="col-md-10 col-xs-10 col-lg-10 col-sm-10" >
<p><img  src="http://dominant-wood.com.ua/ru/images/topabout.png.pagespeed.ce.0DtPjMe219.png" width='100%' alt="topabout"></p>
</div>
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
</div>
<div class="row">
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
<div class="col-md-10 col-xs-10 col-lg-10 col-sm-10" >
<h1 style="text-align: center;"> ATITTO - продукція найвищої якості</h1>
</div>
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
</div>
<div class="row">
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
<div class="col-md-10 col-xs-10 col-lg-10 col-sm-10" >
<p><img  src="/hlav.jpg" width='100%' alt="topabout"></p>
</div>
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
</div>
<div class="row">
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
<div class="col-md-10 col-xs-10 col-lg-10 col-sm-10" >
<style>
#gallery {
  position: relative;
  padding-top: 50%;
  -moz-user-select: none; user-select: none;
}

#gallery img {
  position: absolute;
  top: 25%;
  left: 12.5%;
  max-width: 24.5%;
  max-height: 49.5%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  cursor: zoom-in;
  transition: .2s;
}
#gallery img:nth-child(4n-2) {left: 37.5%;}
#gallery img:nth-child(4n-1) {left: 62.5%;}
#gallery img:nth-child(4n) {left: 87.5%;}
#gallery img:nth-child(n+5) {top: 75%;}

#gallery img:focus {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  max-width: 100%;
  max-height: 100%;
  outline: none;
  pointer-events: none;
}

#gallery img:focus ~ div {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #fff;
  cursor: zoom-out;
}
</style>
<div class="slider">
					<a class="prev" onclick="Next1(-1);">❮</a> 
					<a class="next" onclick="Next1(1);">❯</a>
					<img id="current_image" alt="..." src="">
			</div>
</div>

<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
</div>
<div class="row">
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
<div class="col-md-10 col-xs-10 col-lg-10 col-sm-10" >
<p><img  src="http://dominant-wood.com.ua/ru/images/bottomabout.png.pagespeed.ce.GY9qhiwrkB.png" width='100%' alt="topabout"></p>
</div>
<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1" >
</div>
</div>


<?php include('../footer.php'); ?>

</body>



</html>