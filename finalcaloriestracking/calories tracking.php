<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Calorie Intake Calculator</title>

  <link rel="icon" type="image/png"
    href="https://user-images.githubusercontent.com/34577873/43033510-24d8f684-8cd4-11e8-9b07-d22248354f59.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/mdb.min.css">


  
  <style>


  #B{width: 300px; margin-left:13%; margin-bottom: 25px; border-radius: 25px;}
  #B:hover{background:green}
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0D0221;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #0D0221;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}


@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>

<body style="background-image:url('b1.jpg');
	background-position: center center; 
    background-repeat: no-repeat;">
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Exercises</a>
  <a href="#">Diets</a>
  <a href="#">Coaches</a>
  <a href="#">BMI</a>
  <a href="#">Playlist</a>
  <a href="https://www.myenso.de/">Shop Goods</a>
  <a href="https://www.domaxsport.com/">Shop Clothes</a>
  <a href="#">About us</a>
</div>
<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
  
   <main>
   <img src="logo2.jpg" width="170px" height="170px" style="margin-left:590px; margin-top:-100px">
   <h1 style="color:#26408B" align="center">YOUR CALORIES CALCULATOR </h1>
    <p class="text-center font-weight-bold" style="margin-top: 25px; text-align:center;font-size: 26px; font-syle:oblique">Insert your data below to calculate your recommended calories intake!</p>
    <div class="card text-center border-warning-color-dark"
      style="margin-left:25%; border: 5px solid #26408B; width: 50%; margin-top: 30px; height: 70%; 
	  border-radius:20px;background-color: #A6CFD5;
	  box-shadow:5px 3px 5px black">

      <table class="table" style="border-spacing: 20px;font-size:22px; ">
        <form>
          <tr>
            <td class="T"><b>Gender</b></td>
            <td class="I">
              <input  type="radio" name="gender" value="male" id="male" checked="checked"> Male &nbsp &nbsp<br>
              <input type="radio" name="gender" value="female" id="female"> Female
            </td>
          </tr>
          <tr>
            <td class="T" ><b>Age</b></td>
            <td class="I" id="AT"><input type="number" min="0" id="age" placeholder=""
                style="border-width: 2px; border-color: #26408B; border-radius: 5px;width:75%"><div style="display: none;" id="ATT">Please enter valid number</div></td>
          </tr>
          <tr>
            <td class="T"><b>Weight</b></td>
            <td class="I"><input type="number" min="0" id="weight"
                style="border-width: 2px; border-color: #26408B; border-radius: 5px;width:75%" placeholder="Kg"><div style="display: none;" id="WTT">Please enter valid number</div></td>
          </tr>
          <tr>
            <td class="T"><b>Height</b></td>
            <td class="I"><input type="number" min="0" id="height"
                style="border-width: 2px; border-color: #26408B; border-radius: 5px;width:75%" placeholder="Cm"><div style="display: none;" id="HTT">Please enter valid number</div></td>
          </tr>
        </form>

        <tr>
         <td class="T"> <b>Exercise level/ Activity</b></td>
          <td>
            <select class="custom-select custom-select-sm"
              style="width: 90%; margin: auto; border-width: 2px; border-color: #26408B, 0); border-radius: 5px; margin-top: 12px;"> 
              <option value="0" id="0">Basal Metabolic Rate (BMR)</option>
              <option value="1" id="1">Little/No exercise</option>
              <option value="2" id="2">Low activity (exercise 1-3 times/week)</option>
              <option value="3" id="3">Active (daily exercise or intense exercise 3-4 times/week)</option>
              <option value="4" id="4">High activity (intense exercise 6-7 times/week)</option>
              <option value="5" id="5">Very high activity (very intense exercise daily, or physical job)</option>
            </select>
          </td>
        </tr>
      </table>


      <button id="B" type="button" onclick="calc()" style="width:75%"
        >Calculate</button>
    </div>


    <div id="Final" class="card text-center"
      style="max-width: 25px; margin: auto;  margin-top: 45px;  color:#26408B; display: none; margin-bottom: 30px">
      <table style="margin-top: 15px; margin-left:90px">
        <tr>
          <td class="T" style="font-weight: bold;">Maintain weight <p></p>
          </td>
          <td><div id="a" class="SS">&nbsp </div><div class="CD">Calories/day</div></td>
        </tr>
        <tr>
          <td class="T" style="font-weight: bold;">Weight loss <p
              style="font-size: small; color:#888; font-weight: lighter;">0.5 kg/week</p>
          </td>
          <td><div id="b" class="SS">&nbsp </div><div class="CD">Calories/day</div></td>
        </tr>
        <tr>
          <td class="T" style="font-weight: bold;">Weight gain <p
              style="font-size: small; color:#888; font-weight: lighter;">0.5 kg/week</p>
          </td>
          <td><div id="c" class="SS">&nbsp </div><div class="CD">Calories/day</div></td>
        </tr>
      </table>
    </div>
	<script>
		function calc() {
    let A = document.getElementById("age").value;
    let W = document.getElementById("weight").value;
    let H = document.getElementById("height").value;
    let S
    let R


    if (document.getElementById("age").value.length == 0) {

        document.getElementById("ATT").style = "color: red;"
        document.getElementById("WTT").style = "display: none;"
        document.getElementById("HTT").style = "display: none;"

        return

    }

    if (document.getElementById("weight").value.length == 0) {

        document.getElementById("ATT").style = "display: none;"
        document.getElementById("HTT").style = "display: none;"
        document.getElementById("WTT").style = "color: red;"
        
        return

    }

    if (document.getElementById("height").value.length == 0) {

        document.getElementById("ATT").style = "display: none;"
        document.getElementById("WTT").style = "display: none;"
        document.getElementById("HTT").style = "color: red;"
        
        return

    }

    if (document.getElementById("male").checked) {
        S =  Math.round((9.99*W)+(6.25*H)-(4.92*A)+5)
    } else if (document.getElementById("female").checked) {
        S =  Math.round((9.99*W)+(6.25*H)-(4.92*A)-161)
    }

    
    if (document.getElementById("0").selected) {
        R = S
    }

  
    if (document.getElementById("1").selected) {
        R = S*1.2
    }


    if (document.getElementById("2").selected) {
        R = S*1.35
    }


    if (document.getElementById("3").selected) {
        R = S*1.55
    }
    
  
    if (document.getElementById("4").selected) {
        R = S*1.75
    }


    if (document.getElementById("5").selected) {
        R = S*1.95
    }

    document.getElementById("ATT").style = "display: none;"
    document.getElementById("HTT").style = "display: none;"
    document.getElementById("WTT").style = "display: none;"

    document.getElementById("age").placeholder = " "
    document.getElementById("weight").placeholder = "Kg"
    document.getElementById("height").placeholder = "Cm"

    document.getElementById("a").innerHTML = Math.round(R)

    document.getElementById("b").innerHTML = Math.round(R*0.80)

    document.getElementById("c").innerHTML = Math.round(R*1.20)

    document.getElementById("Final").style = "max-width: 25rem; margin: auto;  margin-top: 45px;  color:#26408B; margin-bottom: 30px"
}

	</script>

  </main>




  <script type="text/javascript" src="js/jquery.min.js"></script>

  <script type="text/javascript" src="js/popper.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript" src="js/calculator.js"></script>

  
</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>



 
</body>

</html>