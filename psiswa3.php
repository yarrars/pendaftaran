<?php
include "config.php";

$p = mysqli_query($con, "SELECT id FROM data_s ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_array($p);
$s = $row['id'];

if(isset($_POST['simpan']))
{
    $q = mysqli_query($con, "INSERT INTO data_wali (id_s,nama_a,ada_a,ttl_a,pekerjaan_a,warga_a,nohp_a,nama_i,ada_i,ttl_i,pekerjaan_i,warga_i,nohp_i) VALUE ($s, '($_POST[nama_a])', '($_POST[ada_a])', '($_POST[ttl_a])', '($_POST[pekerjaan_a])', '($_POST[warga_a])', '($_POST[nohp_a])', '($_POST[nama_i])', '($_POST[ada_i])', '($_POST[ttl_i])', '($_POST[pekerjaan_i])', '($_POST[warga_i])', '($_POST[nohp_i])')");
    if($q)
    {
        echo "<script>document.location.href='akhir.php'</script>";
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
    <h3>DATA ORNAG TUA/WALI</h3>
        <table align = "center">
            <tr>
                <th></th>
                <th><h3>Data Ayah</h3></th>
            </tr>
            <tr>
                <th>Nama Ayah :</th>
                <th><input type="text" name="nama_a" class="form-control"><input type="radio" name="ada_a" value = "ada">Masih ada <input type="radio" name="ada_a" value = "almarhum">Almarhum</th>
            </tr>
            <tr>
                <th>Tempat, tanggal lahir</th>
                <th><input type="text" name="ttl_a" placeholder = "Contoh: Bogor, 9 Januari 1976" class="form-control"></th>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <th><input type="text" name="pekerjaan_a" placeholder = "Contoh: Pegawai Negeri" class="form-control"></th>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <th><input type="text" name="pendidikan_a" placeholder = "Contoh: SMK" class="form-control"></th>
            </tr>
            <tr>
                <th>Kewarganegaraan/Agama</th>
                <th><input type="text" name="warga_a" placeholder = "Contoh: Indonesia/Islam" class="form-control"></th>
            </tr>
            <tr>
                <th>No.HP/WA</th>
                <th><input type="text" name="nohp_a" placeholder = "Contoh: 0812-/7989" class="form-control"></th>
            </tr>
            <tr>
                <th></th>
                <th><h3>Data Ibu</h3></th>
            </tr>
            <tr>
                <th>Nama Ibu :</th>
                <th><input type="text" name="nama_i" class="form-control"><input type="radio" name="ada_i" value = "ada">Masih ada <input type="radio" name="ada_i" value = "almarhumah">Almarhumah</th>
            </tr>
            <tr>
                <th>Tempat, tanggal lahir</th>
                <th><input type="text" name="ttl_i" placeholder = "Contoh: Bogor, 9 Januari 1976" class="form-control"></th>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <th><input type="text" name="pekerjaan_i" placeholder = "Contoh: Pegawai Negeri" class="form-control"></th>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <th><input type="text" name="pendidikan_i" placeholder = "Contoh: SMK" class="form-control"></th>
            </tr>
            <tr>
                <th>Kewarganegaraan/Agama</th>
                <th><input type="text" name="warga_i" placeholder = "Contoh: Indonesia/Islam" class="form-control"></th>
            </tr>
            <tr>
                <th>No.HP/WA</th>
                <th><input type="text" name="nohp_i" placeholder = "Contoh: 0812-3456-7890/0812-3456-7890" class="form-control"></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit" name="simpan" value = "Selesai Pendaftaran" class="btn btn-success"></th>
            </tr>
        </table>
    </form>
</body>
</html>