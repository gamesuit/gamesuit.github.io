<html>
<head>
	<title>Game Suit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1 align="center">GAME SUIT</h1>
<form action="" method="POST">
	<fieldset>
    <legend>Ayo Main</legend>
	<p>
      <label>pilihan : </label>
      <select name="pilih">
      	<option value="pilih" selected>Pilih</option>
      	<option value="gunting">Gunting</option>
          <option value="batu">Batu</option>
          <option value="kertas">Kertas</option>
          <option value="aku">Aku</option>
      </select>
      </br>
      </br>

      <button name="star" type="submit">mulai</button>
    </p>
  </fieldset>  
</form>
<fieldset>
	<legend>Hasil</legend>
<?php
$kamu = $_POST["pilih"];
$kom = rand(1, 3);

if ($kom == 1) {
   $kom = "gunting";
   }
elseif ($kom == 2) {
   $kom = "batu";
   }
else
   $kom = "kertas";

if (isset($_POST["star"])) {
   if ($kamu == $kom) {
       echo "kamu memilih : $kamu";
       echo "</br>";
       echo "komputer memilih : $kom";
       echo "</br>";
       echo "seri dong";
       echo "</br>";
       echo "coba lagi";
       }
   elseif ($kamu == "gunting" && $kom =="batu") {
       echo "kamu memilih : $kamu\n";
       echo "</br>";
       echo "komputer memilih : $kom\n";
       echo "</br>";
       echo "kamu kalah\n";
       }
   elseif ($kamu == "gunting" && $kom =="kertas") {
       echo "kamu memilih : $kamu\n";
       echo "</br>";
       echo "komputer memilih : $kom\n";
       echo "</br>";
       echo "kamu menang\n";
       }
   elseif ($kamu == "batu" && $kom =="gunting") {
       echo "kamu memilih : $kamu\n";
       echo "</br>";
       echo "komputer memilih : $kom\n";
       echo "</br>";
       echo "kamu menang\n";
       }
   elseif ($kamu == "batu" && $kom =="kertas") {
       echo "kamu memilih : $kamu\n";
       echo "</br>";
       echo "komputer memilih : $kom\n";
       echo "</br>";
       echo "kamu kalah\n";
       }
   elseif ($kamu == "kertas" && $kom =="gunting") {
       echo "kamu memilih : $kamu\n";
       echo "</br>";
       echo "komputer memilih : $kom\n";
       echo "</br>";
       echo "kamu kalah\n";
       }
   elseif ($kamu == "kertas" && $kom =="batu") {
       echo "kamu memilih : $kamu\n";
       echo "</br>";
       echo "komputer memilih : $kom\n";
       echo "</br>";
       echo "kamu menang\n";
       }
   elseif ($kamu == "aku") {
   	echo "makasih udah milih aku :)";
       echo "</br>";
       echo "love u idaman, miss u 😁😘😘";
       }
   elseif ($kamu == "pilih") {
      echo "pilih dulu sayang :)\n";
      echo "</br>";
      }
}
?>
</fieldset>
</body>
</html>
	