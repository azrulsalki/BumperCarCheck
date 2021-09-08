<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.button {
  background-color: #555555; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.menu {
  float: left;
  width: 20%;
}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
}
.main {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
}

.two {
  background-color: white;
  float: left;
  width: 100%;
  padding: 10px 15px;
  margin-top: 7px;
}


@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
.button3 {background-color: #f44336;} /* Red */
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}

</style>
</head>
<form action="/QCInspection/HMI/formaction2.php" method="get">
<body style="font-family:Verdana;">

<div style="background-color:#f1f1f1;padding:2px;">
  <h1>QC Inspection</h1>
  <h3>Click on any defect that you see</h3>
</div>

<div style="overflow:auto">

  <div class="two">
    <h2>Area 2</h2>
    <p>Top middle part of the bumper</p>
    <h2><img src="2.jpg" style="width:20%"></h2>
    <p>
	<button class="button button3" name="COND" type="submit" value=1 >Good</button>
    	<button class="button"name="COND" type="submit" value=2 >Contamination</button>	
	<button class="button" name="COND" type="submit" value=3 >Flow Mark</button>
	<button class="button"name="COND" type="submit" value=4>Gas Mark</button>
	<button class="button"name="COND" type="submit" value=5>Oily</button>
	<button class="button"name="COND" type="submit" value=6>Air BUbble</button>   
    	<button class="button"name="COND" type="submit" value=7>Material Chip</button>
	<button class="button"name="COND" type="submit" value=8>Short Shot</button>
	<button class="button"name="COND" type="submit" value=9>Silver Streak</button>
	<button class="button"name="COND" type="submit" value=10>Weld Line</button>
	<button class="button"name="COND" type="submit" value=11>Sink</button>  
   	<button class="button"name="COND" type="submit" value=12>White Mark</button>
	<button class="button"name="COND" type="submit" value=13>Dented</button>
	<button class="button"name="COND" type="submit" value=14>Others</button>
	<button class="button"name="COND" type="submit" value=15>Drag Mark</button>
	<button class="button"name="COND" type="submit" value=16>Over Trim</button>  
   	<button class="button"name="COND" type="submit" value=17>Crack</button>
    </p>
  </div>
  
</div>


<div style="background-color:#f1f1f1;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> 2019 QC Inspection. Hicom Teck See. All Rights Reserved. Create by Azrul Salki </div>

</body>
</html>
