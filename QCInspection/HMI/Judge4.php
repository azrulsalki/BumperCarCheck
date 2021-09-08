<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.btn {
  /*border: none;  Remove borders */
  color: white; /* Add a text color */
  padding: 15px 15px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  margin-left: auto;
  margin-right: auto;
  width: 260px;
  font-size: 12px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: larges;
  font-weight: bold;
}

.Good {background-color: #11507B;} /* DARK BLUE */
.Good:hover {background-color: #CFBE2D;}

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
<form action="/QCInspection/HMI/formaction5.php" method="get">
<body>

<h2 class="a" name = "SEC" type="submit" value=4 >Inspection Check Station 1 Section 4</h2>
<p class="a">Justification </p>

<div class="Justification-container" >
  <button class="btn Good" name="COND" type="submit" value=2>Contamination</button>

  <button class="btn Good" name="COND" type="submit" value=3>Flow Mark</button>

  <button class="btn Good" name="COND" type="submit" value=4>Gas Mark</button>
 
  <button class="btn Good" name="COND" type="submit" value=5>Oily</button>

  <button class="btn Good" name="COND" type="submit" value=6>Air Bubble</button>

  <button class="btn Good" name="COND" type="submit" value=7>Material Chip</button>
 
  <button class="btn Good" name="COND" type="submit" value=8>Short Shot</button>

  <button class="btn Good" name="COND" type="submit" value=9>Silver Streak</button>

  <button class="btn Good" name="COND" type="submit" value=10>Sink</button>

  <button class="btn Good" name="COND" type="submit" value=11>White Mark</button>
  
  <button class="btn Good" name="COND" type="submit" value=12>Dented</button>

  <button class="btn Good" name="COND" type="submit" value=13>Others</button>
  
  <button class="btn Good" name="COND" type="submit" value=14>Drag Mark</button>
 
  <button class="btn Good" name="COND" type="submit" value=15>Over Trim</button>

  <button class="btn Good" name="COND" type="submit" value=16>Crack</button>


</div>


<div style="background-color:#f1f1f1;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> 2019 QC Inspection. Hicom Teck See. All Rights Reserved. Create by Azrul Salki </div>

</body>
</html>
