<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.btn {
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 5px 15px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  margin-left: auto;
  margin-right: auto;
  width: 400px;
}

.Good {background-color: #4CAF50;} /* Green */
.Good:hover {background-color: #46a049;}

.container {
  position: relative;
	margin-left: 25%;
  display: block;
  width: 100%;
  text-align: center;
  max-width: 150px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
.container img {
  width: auto;
  height: auto;
}

.container .btn1 {
  position: absolute;
  top: 25%;
  left: 40%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 20px;
  padding: 0px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn1:hover {
  background-color: black;
}

.container .btn2 {
  position: absolute;
  top: 25%;
  left: 125%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 20px;
  padding: 0px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn2:hover {
  background-color: black;
}
.container .btn3 {
  position: absolute;
  top: 25%;
  left: 215%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 20px;
  padding: 0px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn3:hover {
  background-color: black;
}
.container .btn4 {
  position: absolute;
  top: 60%;
  left: 40%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 20px;
  padding: 0px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn4:hover {
  background-color: black;
}
.container .btn5 {
  position: absolute;
  top: 60%;
  left: 125%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 20px;
  padding: 0px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn5:hover {
  background-color: black;
}
.container .btn6 {
  position: absolute;
  top: 60%;
  left: 215%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 20px;
  padding: 0px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn6:hover {
  background-color: black;
}
h2.a {
  text-align: center;
  font-size: 10px;
  font-family: Arial, Helvetica, sans-serif
}
p.a {
  text-align: center;
  font-size: 10px;
  font-family: Arial, Helvetica, sans-serif
}


</style>
</head>
<form action="/QCInspection/HMI/formaction1.php" method="get">
<body>

<h2 class="a">Inspection Check Station 1</h2>
<p class="a">Current part : (retrive from Barcode Scanner) </p>

<div class="container">
  <img src="ONE.jpg"  alt="Snow" style="width:250%" class="center">
  <button class="btn1" name="BUTTON" type="submit" value=2>Sec1</button>
  <button class="btn2" name="BUTTON" type="submit" value=3>Sec2</button>
  <button class="btn3" name="BUTTON" type="submit" value=4>Sec3</button>
  <button class="btn4" name="BUTTON" type="submit" value=5>Sec4</button>
  <button class="btn5" name="BUTTON" type="submit" value=6>Sec5</button>
  <button class="btn6" name="BUTTON" type="submit" value=7>Sec6</button>
  <button class="btn Good" name="BUTTON" type="submit" value=1>Good Part</button>
</div>


</div>


<div style="background-color:#f1f1f1;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> 2019 QC Inspection. Hicom Teck See. All Rights Reserved. Create by Azrul Salki </div>

</body>
</html>
