<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil Formulir</title>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>
<script src="validation.js"></script>
<link rel="stylesheet" href="style.css" />
<body>    
<div class="kotak">
    <form action="index.php" id="formbox" enctype="multipart/form-data" name="formulir" method="post" onsubmit = "return validation()">
      <div class = "header"><h1>Formulir Pemilihan Peminatan</h1></div>
      <!-- Bagian Nama -->
      <div>
        <label for="lblnama"> Nama Lengkap : </label><br>
        <input type="text" name="nama" id="nama"/>
      </div>

      <!-- Bagian NIM -->
      <div>
        <label for="lblnim">NIM : </label><br>
        <input type="text" name="nim" id="nim"/>
      </div>

      <!-- Bagian Radiobutton -->
      <label for="lbl">Jenis Kelamin</label> <br>
      Pria<input type="radio" id= "r1" name="gender" value="Pria"> <span>Wanita<input type="radio" name="gender" id= "r1" value="Wanita"></span>
      
      <!-- Bagian Alamat  -->
      <div>
          <label for="lblta">Alamat : </label><br>
          <textarea name="alamat" id="alamat" cols="42" rows="10"></textarea>
      </div>

      <!-- Bagian Upload Foto  -->
          Upload Foto (.jpg/.png/.jpeg) : <br><input type="file" name="foto" id="foto" multiple accept =".jpg, .png, .jpeg"><br>

      <!-- Bagian Upload File  -->
          Upload Berkas (.pdf) : <br><input type="file" name="pdf" id="pdf" accept =".pdf"><br>


      <!-- Bagian Checkbox Peminatan  -->
      <label for="lbl">Peminatan</label><br>
      <input type="checkbox" id="ds" name="peminatan[]" onclick="setChecks(this)" value="Data Science" >Data Science
      <input type="checkbox" id="wd" name="peminatan[]" onclick="setChecks(this)" value="Web Developer" >Web Developer <br>
      <input type="checkbox" id="md" name="peminatan[]" onclick="setChecks(this)" value="Mobile Developer" >Mobile Developer
      <input type="checkbox" id="net" name="peminatan[]" onclick="setChecks(this)" value="Networking" >Networking<br>

      <!-- Bagian Button -->
        <input type="submit" id ="submit" value="Submit"   >
        <input type="reset" id="reset">
    </form>
  </div>

</body>
</html>