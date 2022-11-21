<?php
echo "<prev>GET:";
var_dump($_GET);
echo "</prev>";

echo "<prev>POST:";
var_dump($_POST);
echo "</prev>";

echo "<prev>FILES:";
var_dump($_POST);
echo "</prev>";

if(isset($_POST['btn_submit'])){
  echo "Siap untuk save-to-DB";
  //coding simpan ke DB

  //jika sukses maka exit
  exit;
}else{
	echo "Belum siap-save-to-DB";
}

if(isset($_FILES['profil'])){
	echo "<hr>Siap untuk memindahkan file upload";

	//move-uploaded_file($tmp_name)
	if(move_uploaded_file($_FILES['profil']['tmp_name
	'], "uploads/hasil_upload.png")){
	echo "File berhasil dipindahkan/diupload.";
    }else{
    echo "Gagal memindahkan file upload.";
    }
}else{
	echo "<hr>File belum diupload.";
}

?>

<hi>Super Global Variabel</hi>

<ol>
    <li>GET</li>
    <li>POST</li>
    <li>FILES</li>
 </ol>

 Formulir:
 <form method="post" enctype="
 multipart/form-data">
 	Username:
 	<input name=nim><br>
 	Password:
 	<input name=password name=
 	password><br>
 	Profil:
 	<input type=file name=
 	profil><br>
 	<button name=btn_submit>
 	Submit</button>
 
 </form>
