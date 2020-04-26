<?php
include "config.php";

if(isset($_POST['simpan']))
{
    $q = mysqli_query($con, "INSERT INTO data_s (nama_l,nama_p,jk,ttl,agama,cita,hoby,anake,skandung,stiri,sangkat,bb,tb,gd) VALUE ('$_POST[nama_l]', '$_POST[nama_p]', '$_POST[jk]', '$_POST[ttl]', '$_POST[agama]', '$_POST[cita]', '$_POST[hoby]', '$_POST[anake]', '$_POST[skandung]', '$_POST[stiri]', '$_POST[sangkat]', '$_POST[bb]', '$_POST[tb]', '$_POST[gd]')");
    if($q)
    {
        echo "<script>document.location.href='psiswa2.php'</script>";
    }
    else
    {
        echo "<script>alert('data gagal disimpan');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Online Smk Wikrama 1 Garut</title>
</head>
<body>
<form method = "post" align = "center" class="container pt-5">
    <h3>Data Calon Murid</h3>
    <table align = "center">
        <tr>
            <th>Nama Lengkap :</th>
            <th><input type="text" name = "nama_l" class="form-control" required></th>
        </tr>
        <tr>
            <th>Nama Panggilan :</th>
            <th><input type="text" name = "nama_p" class="form-control" required></th>
        </tr>
        <tr>
            <th>Jenis Kelamin :</th>
            <th><select name="jk" required>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
            </select></th>
        </tr>
        <tr>
            <th>Tempat, Tanggal lahir :</th>
            <th><input type="text" name="ttl" class="form-control" required></th>
        </tr>
        <tr>
            <th>Agama :</th>
            <th><input type="text" name="agama" class="form-control" required></th>
        </tr>
        <tr>
            <th>Cita-cita :</th>
            <th><input type="text" name = "cita" class="form-control" required></th>
        </tr>
        <tr>
            <th>Hoby :</th>
            <th><input type="text" name = "hoby" class="form-control" required></th>
        </tr>
        <tr>
            <th>Anak ke :</th>
            <th><input type="number" name = "anake" class="form-control" required></th>
        </tr>
        <tr>
            <th>Jumlah saudara :</th>
            <th>Kandung<input type="number" name="skandung"></th>
            <th>Tiri<input type="number" name="stiri"></th>
            <th>Angkat<input type="number" name="sangkat"></th>
        </tr>
        <tr>
            <th>Berat badan :</th>
            <th><input type="number" name="bb" class="form-control" required></th>
        </tr>
        <tr>
            <th>Tinggi badan :</th>
            <th><input type="number" name="tb" class="form-control" required></th>
        </tr>
        <tr>
            <th>Golongan darah :</th>
            <th><input type="text" name="gd" class="form-control" required></th>
        </tr>
        <tr>
            <th></th>
            <th><input type="submit" name="simpan" value = "Next" class="btn btn-success"></th>
        </tr>
    </table>  
</form>
</body>
</html>