<?php session_start();
include("db_connect.php");

?>
<!DOCTYPE html>
<html>
<head><title>Election Day</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="voting.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
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
<p> It's summer time and there are many changes surrounding you. One such change is the fresher's joining Quantiphi soon.
There are various department and below mention are few candidates to lead the fresher's team during their training period.
Fresher's Please vote for the one.
<br><br><b>Choose your mascot for this department</b>&nbsp;(hover over each mascot to know it's meaning)
</div>


<div class="over-img">
<form name="usrform" style="padding-left:0%; border-style: dotted; border-color: lightgrey">
  <div class="container-1">
  <div class="box-1">
  <div class="tooltip">
		<span class="tooltiptext">Hello I Am Oyster. Please Choose me as a Candidate.</span>
			<input type="image" src="oyster.png" alt="Oyster" style="width:70%" class="i1" name="i1" value="World is my Oyster"><br>World is my <b>Oyster</b>
	</div>
  </div>
  <div class="box-2">
    <div class="tooltip">
		<span class="tooltiptext">Hello I Am Cat. Please Choose me as a Candidate.</span>
			<input type="image" src="cat.png" alt="Cat" style="width:70%" class="i1" name="i1" value="Cat's Meow" ><br> &nbsp; &nbsp;A <b>Cat's</b> Meow
	</div>
  </div>
  <div class="box-3">
    <div class="tooltip">
		<span class="tooltiptext">Hello I Am Whale. Please Choose me as a Candidate.</span>
			<input type="image" src="whale.png" alt="Whale" style="width:70%" class="i1" name="i1" value="Whale of a time"><br> &nbsp; &nbsp;A <b>Whale</b> of a time
	</div>
  </div>
  <div class="box-4">
    <div class="tooltip">
		<span class="tooltiptext">Hello I Am Elephant. Please Choose me as a Candidate.</span>
			<input type="image" src="elephant.png" alt="Elephant" style="width:70%" class="i1" name="i1" value="Elephant in the room"><b> Elephant</b> in the room
	</div>
	</div>
  <div class="box-5">
    <div class="tooltip">
		<span class="tooltiptext">Hello I Am Fish. Please Choose me as a Candidate.</span>
			<input type="image" src="fish.png" alt="Fish" style="width:70%" class="i1" name="i1" value=" Dead Fish">
			&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Dead <b> Fish</b>
	</div>
  </div>
  <div class="box-6">
    <div class="tooltip">
		<span class="tooltiptext">Hello I Am Goose. Please Choose me as a Candidate.</span>
			<input type="image" src="goose.png" alt="Goose" style="width:70%" class="i1" name="i1" value="Wild Goose Chase"><br>Wild <b> Goose </b> Chase
	</div>
  </div>
</div>
</form>
</div>
</div>
<script>
$(document).ready(function()
{
$(".i1").click(function()
{
var value = $(this).val();

$.ajax(
{
url:'fetch.php',
type:'POST',
data: 'request='+value,
success:function(data)
{

  if (data==1)
    location.href = "index.php";
  else {
    alert('something went wrong');
  }
},
});
    });
});
</script>
</body>
</html>
