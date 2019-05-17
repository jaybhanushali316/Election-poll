<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Election Day</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<?php
include("db_connect.php");

?>
</head>
<body>
<div class="bg">
  <div class="container">
    <div class="topnav">
      <a href="index.html"><img src="logo.png" alt="" width="100" height="50"></a>
	</div>
  </div>
</div>
<div class="header-text">
<h1>Department: Facilities</h1>
<p>It's summer time and there are many changes surrounding you. One such change is the fresher's joining Quantiphi soon.
There are various department and below mention are few candidates to lead the fresher's team during their training period.
Fresher's Please vote for the one.</p>
<p><b>You Voted for:</div></p>
 <div class="btn">
<input type="button" id="btnSubmit" value="Move On To The Next Department" style="background-color: lightgrey ; color: white " onclick="myFunction1()" disabled></div>
 <div class="over-img">
<div class="container-1" style="padding-left:0%; border-style: dotted; border-color: lightgrey">
	<div class="box-1">
	<img class="Myfilter" src="oyster.png" alt="Oyster" id="Oyster" style="width:60%" ><br>World is my <b>Oyster</b>
	</div>
	<div class="box-2">
	<img class="Myfilter" src="cat.png" alt="Cat" id="Cat" style="width:60%"><br> &nbsp; &nbsp;<b>Cat's</b> Meow
	</div>
	<div class="box-3">
    <img class="Myfilter"  src="whale.png" id="Whale" alt="Whale"style="width:60%" ><br> &nbsp; &nbsp;<b>Whale</b> of a time
	</div>
	<div class="box-4">
    <img class="Myfilter"  src="elephant.png" id="Elephant" alt="Elephant"style="width:60%"><br><b> Elephant</b> in the room
	</div>
	<div class="box-5">
    <img class="Myfilter"  src="fish.png" id= "Fish" alt="Fish"style="width:60%" >&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Dead <b> Fish</b>
	</div>
	<div class="box-6">
    <img class="Myfilter"  src="goose.png" id="Goose" alt="Goose"style="width:60%" ><br>Wild <b> Goose </b> Chase
	</div>
</div>

<div class="container-2">
<div class="container-2-box">
<br><b> Overall Rating for facilities (1-lowest, 5-highest)</b>

<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
	<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Best - 4 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"title="Average - 3 stars"></label>
	<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Pretty Good	- 2 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Good - 1 star"></label>
 </fieldset>
 <div>
<br><br><br><b>Share your reason for selecting<font color="red"> <?php echo $_SESSION['choice']; ?> </font> </b><br>
  <input type="checkbox" id="chkAgree" class="chkbox" onclick="goFurther()">Leadership Quality<br>
 <input type="checkbox" id="chkAgree" class="chkbox" onclick="goFurther()">Punctual<br>
  <input type="checkbox" id="chkAgree" class="chkbox"  onclick="goFurther()">Management<br>
   <input type="checkbox" id="chkAgree" class="chkbox" onclick="goFurther()">Team Spirit<br>
   </div></div>
   <div class="container-2-box">
<br><b>Any more reasons?</b><br>
<input type="text" id="r1" rows="10" cols="30" name="r1" form="usrform">
<br><input type="text" id="r2" rows="10" cols="30" name="r2" form="usrform">
<br><input type="text" id="r3" rows="10" cols="30" name="r3" form="usrform">
<br><input type="text" id="r4" rows="10" cols="30" name="r4" form="usrform">
<br><input type="text" id="r5" rows="10" cols="30" name="r5" form="usrform">
</div>
<div class="container-2-box">
<br><b>Suggestions </b><br>
<textarea rows="8" cols="50" id="comment" name="comment" >
Enter Suggestions Here...</textarea>
</div>
<script type="text/javascript">
function goFurther(){
if (document.getElementById("chkAgree").checked == true)
document.getElementById("btnSubmit").disabled = false;
else
document.getElementById("btnSubmit").disabled = true;
}
var button = document.getElementById("btnSubmit");
var chkbox = document.getElementsByClassName("chkbox");
function onChangeListener() {
    button.style.backgroundColor = "lightgrey";
    for (var i = 0; i < chkbox.length; i++) {
        if (chkbox[i].checked) {
            button.style.backgroundColor = "green";
			button.style.fontColor = "white";
        }
    }
}
for (var i = 0; i < chkbox.length; i++) {
    var checkbox = chkbox[i];
    checkbox.addEventListener("change", onChangeListener);
}
</script>
<script type="text/javascript">
   $().ready(() => {
    var param = "<?php echo $_SESSION['choice']; ?>";
	if(param == "Wild Goose Chase"){
      $('#Goose').removeClass('Myfilter');
    }else if(param == "World is my Oyster"){
      $('#Oyster').removeClass('Myfilter');
    }else if(param == "Cat's Meow"){
      $('#Cat').removeClass('Myfilter');
    }else if(param == "Whale of a time"){
      $('#Whale').removeClass('Myfilter');
    }else if(param == "Elephant in the room"){
      $('#Elephant').removeClass('Myfilter');
    }else if(param == "Dead Fish"){
      $('#Fish').removeClass('Myfilter');
    }
  });
  function myFunction1() {
  location.replace("voting.php")
}
</script>



  </body>
</html>
