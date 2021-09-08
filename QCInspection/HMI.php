<html>
<head>
<style>
.button {
  table-layout: fixed;
  border-collapse: collapse;
width: 180px;
  background-color: #0000A0;
  color: white;
  padding: 40px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 10px 6px;
  cursor: pointer;
}
.randomNum {
  table-layout: fixed;
  border-collapse: collapse;
width: 180px;
  background-color: #FFFFFF;
  color: black;
  padding: 40px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 10px 6px;
  cursor: pointer;
}
</style>

<script type="text/javascript">
function Random() {
  return (Math.random()*0xFFFFFF<<0).toString(16);
  
} 
</script>

</head>
<body>

<h2>QUALITY CHECK INSPECTION</h2>


<form action="/QCInspection/formaction2.php" method="get">
		
<input type="text" name="Result" value="" id="Temptext" size="5" />
<input type="button" value="SCAN BARCODE" onclick="document.getElementById ('Temptext').value=Random()"/> 		
		

<button class="button" name="COND" type="submit" value=1>PERFECT</button>
<button class="button" name="COND" type="submit" value=2>LAMMING</button>
<button class="button" name="COND" type="submit" value=3>PMARK</button>
<button class="button" name="COND" type="submit" value=4>BURN</button>
<button class="button" name="COND" type="submit" value=5>SCRATCH</button>
<button class="button" name="COND" type="submit" value=6>DENT</button>
</form>



</body>
</html>










            