<!DOCTYPE html>
<html>
<head>
<style>
 * {
    box-sizing: border-box;
}

input:not([type=radio], [type=checkbox], [type=submit], [type=reset]), select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit], input[type=reset] {
  display: block;
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin: 12px 5px;
}

input[type=reset] {
  display: block;
  background-color: red;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin: 12px 5px;
}

fieldset {
    width: 80%;
    margin-left: 50px;
    background-color: rgb(216, 214, 240);
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=reset]:hover {
  background-color: #b43636;
}

div {
    padding: 10px 5px;
}

.row {
  display: flex;
  flex-wrap: wrap;                    
}

.sidemenu {
  flex: 60%;
}

.main {
  flex: 40%;
}

.main1 {
    display: none;
}

.error {
    color: red;
}
</style>
<script>
  function hai() {
    document.getElementById("main_1").style.display = "block";
  }
</script>
</head>
<body>

  <?php
// define variables and set to empty values
$fnameErr = $lnameErr = $pndErr = $passErr = $telpErr = $genderErr = $jurErr = $jalErr = $messErr ="";
$fname = $lname = $pnd = $pass = $telp = $gender = $jur = $jal = $mess ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $fnameErr = "Nama depan harus diisi";
    } else {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $fnameErr = "Hanya huruf dan space yang diperbolehkan";
        }
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Nama depan harus diisi";
    } else {
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $fnameErr = "Hanya huruf dan space yang diperbolehkan";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["pass"])) {
        $passErr = "Password harus diisi";
    } else {
        $pass = test_input($_POST["pass"]);
        if (!preg_match("/^[a-zA-Z0-9-' ]*$/",$pass)) {
            $fnameErr = "Pass terdiri dari perpaduan huruf besar dan kecil serta angka";
        }
    }

    if (empty($_POST["telp"])) {
        $telpErr = "Nomer Telepon Harus Diisi";
    } else {
        $telp = test_input($_POST["telp"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$telp)) {
            $fnameErr = "Hanya huruf dan space yang diperbolehkan";
        }
    }

    if (empty($_POST["pendidikan"])) {
        $pndErr = "Jenjang pendidikan harus diisi";
    } else {
        $pnd = test_input($_POST["pendidikan"]);
    }

    if (empty($_POST["jurusan"])) {
        $jurErr = "Jurusan harus diisi";
    } else {
        $jur = test_input($_POST["jurusan"]);
    }

    if (empty($_POST["jalur"])) {
        $jurErr = "Jalur Pendaftaran harus diisi";
    } else {
        $jal = test_input($_POST["jalur"]);
    }

    if (empty($_POST["message"])) {
        $messErr = "Tuliskan motivasi anda";
    } else {
        $mess = test_input($_POST["message"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h1>Membuat Forms alias lembar pendaftaran</h1>
<p>Contoh setelah ditelaah:</p>

<h2>Forms</h2>
<div class="row">
  <div class="sidemenu">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="on" method="post">
      <fieldset>
      <legend>Contoh Forms:</legend>
      <div>
          <label for="fname">Nama Depan:</label><span class="error">*<?php echo $fnameErr; ?></span>
      </div>
      <input type="text" id="fname" name="fname" 
      placeholder="Nama Depan" value="<?php echo $fname; ?>" autofocus>
      <div>
          <label for="lname">Nama Belakang:</label><span class="error">*<?php echo $fnameErr; ?></span>
      </div>
      <input type="text" id="lname" name="lname" 
      placeholder="Nama Belakang" value="<?php echo $lname; ?>">
      <div>
        <label for="gndr">Jenis Kelamin:</label> 
      </div>
      <select id="gndr" name="gender">
      <option <?php if (isset($gender) && $gender == "pria") echo "checked"; ?> value="pria">Pria</option>
      <option <?php if (isset($gender) && $gender == "perempuan") echo "checked"; ?> value="perempuan">Perempuan</option>
      </select>
      <div>
         <label for="pass">Password:</label><span class="error">*<?php echo $passErr; ?></span>
      </div>
      <input type="password" id="pass" name="pass" 
      placeholder="password" value="<?php echo $pass; ?>" required>
      <div>
          <label>Pendidikan:</label><span class="error">*<?php echo $pndErr; ?></span>
      </div>
      <input type="radio" id="sma" name="pendidikan" <?php if (isset($pnd) && $pnd == "sma") echo "checked"; ?> value="sma">
      <label for="sma">SMA</label><br>
      <input type="radio" id="smk" name="pendidikan" <?php if (isset($pnd) && $pnd == "smk") echo "checked"; ?> value="smk">
      <label for="smk">SMK</label><br>
      <input type="radio" id="lain" name="pendidikan" <?php if (isset($pnd) && $pnd == "lain2") echo "checked"; ?> value="lain2">
      <label for="lain">Lain2</label><br>
      <div>
          <label>Jurusan: </label><span class="error">*<?php echo $jurErr; ?></span>
      </div>
      <input list="jur" name="jurusan" placeholder="Jurusan">
      <datalist id="jur">
      <option <?php if (isset($jur) && $jur == "IPA") echo "checked"; ?> value="IPA">
      <option <?php if (isset($jur) && $jur == "IPS") echo "checked"; ?> value="IPS">
      <option <?php if (isset($jur) && $jur == "BAHASA") echo "checked"; ?> value="BAHASA">
      </datalist>
      <div>
          <label>Jalur Pendaftaran:</label><span class="error">*<?php echo $jalErr; ?></span>
      </div>
      <input type="checkbox" id="jalur1" name="jalur" <?php if (isset($jal) && $jal == "jalur1") echo "checked"; ?> value="jalur1">
      <label for="jalur1">Jalur Raport</label><br>
      <input type="checkbox" id="jalur2" name="jalur" <?php if (isset($jal) && $jal == "jalur2") echo "checked"; ?> value="jalur2">
      <label for="jalur2">Jalur Prestasi</label><br>
      <input type="checkbox" id="jalur3" name="jalur" <?php if (isset($jal) && $jal == "jalur3") echo "checked"; ?> value="jalur3">
      <label for="jalur3">Jalur Nilai Ujian</label><br>
      <input type="checkbox" id="jalur4" name="jalur" <?php if (isset($jal) && $jal == "jalur4") echo "checked"; ?> value="jalur4">
      <label for="jalur4">Jalur Orang Dalam</label><br><br>
      <label for="ijazah">Select Ijazah: </label>
      <input type="file" id="ijazah" name="ijazah">
      <div>
          <label for="telp">No Telepon: </label><span class="error">*<?php echo $telpErr; ?></span>
      </div>
      <input type="tel" id="telp" name="telp"
      placeholder="08xx-xxxx-xxxx" 
      pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" value="<?php echo $telp; ?>">
      <div>
          <label> Masukan motivasi anda: </label><span class="error">*<?php echo $messErr; ?></span>
      </div>
      <textarea name="message" rows="10" cols="30" placeholder="Motivasi Anda" value="<?php echo $mess; ?>"></textarea>
      <div>
          <label for="sek">Universitas Tujuan: </label>
      </div>
      <input type="text" id="sek" name="sekolah" value="UNN" disabled><br>
      <input type="submit" value="Submit" onclick="hai()">
      
      </fieldset>
      </form>
  </div>

  <div class="main">
      <div class="main1" id="main_1">
        <?php 
            echo "<h2>Your Input:</h2>";
            echo "Nama: ".$fname." ".$lname."";
            echo "<br>Jenis Kelamin: ".$gender."";
            echo "<br>Password: ".$pass;
            echo "<br>Pendidian: ".$pnd;
            echo "<br>Jurusan: ".$jur;
            echo "<br>Jalur Pendaftaran: ".$jal;
            echo "<br>Telepon: ".$telp;
            echo "<br>Motivasi: ".$mess;
        ?>
        </div>
  </div>
</div>


</body>
</html>