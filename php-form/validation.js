function validation() {
  var kondisi = false;

  // Validasi nama, nim dan alamat (text field)
  var name = document.forms["formulir"]["nama"].value;
  var num = document.forms["formulir"]["nim"].value;
  var address = document.forms["formulir"]["alamat"].value;

  if (name == "" || num == "" || address == "") {
    alert("Kolom Nama/NIM/Alamat Harus Diisi!");
    return kondisi;
  }

  //Validasi Jenis Kelamin (radio button)
  var gen = document.getElementsByName("gender");
  var i = 0;
  while (!kondisi && i < gen.length) {
    if (gen[i].checked) kondisi = true;
    i++;
  }
  if (!kondisi) {
    alert("Silahkan memilih salah satu jenis kelamin");
    return kondisi;
  }

  // Validasi Checkbox Peminatan
  let dsCheck = document.getElementById("ds").checked;
  let wdCheck = document.getElementById("wd").checked;
  let mdCheck = document.getElementById("md").checked;
  let netCheck = document.getElementById("net").checked;

  if (!dsCheck && !wdCheck && !mdCheck && !netCheck) {
    alert("Pilih Dulu Peminatan");
    return false;
  }

  //percabangan pembatasan
  var m = document.getElementsByName("peminatan[]");
  var checkCount = 0;
  var maxChecks = 2;

  // Limit Checkbox
  if ((m.checked = true)) {
    checkCount = checkCount + 1;
    checkCount = checkCount - 1;
  }
  if (checkCount > maxChecks) {
    checkCount = checkCount - 1;
    alert("Anda hanya bisa mengambil " + maxChecks + " peminatan saja!");
    return false;
  }
}
