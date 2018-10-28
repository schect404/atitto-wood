<!DOCTYPE html>
<html>

<script>function checkemail() {
	var email = document.getElementById('email');
	var ermes = document.getElementById('error');
	var emailval = document.getElementById('email').value;
	var len = emailval.length - 1; // length of email
	var ind = emailval.indexOf(".", emailval.indexOf("@")); //index of . after @ 
	var indat = emailval.indexOf("@"); // index of @
    var regexp = /[a-z0-9]/i; // all allowed symbols for the end of an email
	if (ind === -1) { // check if there is a .
		ermes.innerText = "Email is invalid!";
		email.classList.add("notright");
	}
	else if (ind - indat === 1) { // if user wrote . right after the @
		ermes.innerText = "Email is invalid!";
		email.classList.add("notright");
    }
    else if (!regexp.test(emailval[emailval.length-1])) { // if email end with smth else then regexp
        ermes.innerText = "Email is invalid!";
        email.classList.add("notright");
    }
	else { // allowed email
		ermes.innerText = "";
        email.classList.remove("notright");
        register();
	}
}
function register() { 
    var email = document.getElementById('email');
    var button = document.getElementById('send');
    if ((email.value.length !== 0)) { // if all textinputs are filled
        if (!email.classList.contains("notright")) button.disabled = false; // if out scripts decided that everthing is good
    }
}
</script>

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

<h1 style="text-align: center;">Spoločnosť ATITTO s.r.o.- vysoko kvalitné výrobky</h1>


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
<div class="col-md-10 col-xs-10 col-lg-10 col-sm-10" style="">
<hr class="hrShadow">
<form action="send.php" method=POST style="float:center; width:100%">
<div class="form-group">
<label for="email">Enter your email:</label>
<input type="text" id="email" name="email" placeholder="Enter your email..."  oninput="checkemail()"  class="form-control" required />
</div>
<div class="form-group">
<label for="review">Enter your review:</label>
<textarea id="review" name="review" style="resize:none" class="form-control" placeholder="Enter your review..." required></textarea>
</div>
<h1 id="error" class="headlabel"></h1>
<input type="submit" value="Add review" name="done" id="send" class="btn btn-primary" style="width:100%;font-size:16px" disabled>
</form>
<hr class="hrShadow">
<?php 
$mysqli = new mysqli("c248um.forpsi.com","f95008","itom0704", "f95008");

            $mysqli->query("SET NAMES 'utf-8'");
            $result = $mysqli->query("SELECT * FROM `ReviewTable`");
           
                
                while(($row = $result->fetch_assoc()) != false) {
				echo'<form class="reviewForm" style="background-color:rgba(244,244,244,0.5); padding:2px; border-radius:3px;">';
				echo"<h4 style='margin-left:3px' > ".$row["Email"].", <span style='text-align:right;align:right;'>".$row["Data"]."</span>"."</h4>";
				echo"<hr syle='border-color:black'>";
				echo"<p style='margin-left:3px'> ".$row["Text"];
				
				
                 echo"</form>";
echo "<hr class='hrShadow'>";				 ;
               
            }
            $mysqli->close();
        ?>


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