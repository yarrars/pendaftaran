<?php
include "config.php";

$p = mysqli_query($con, "SELECT id FROM data_s ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_array($p);
$s = $row['id'];

if(isset($_POST['simpan']))
{
    $q = mysqli_query($con, "INSERT INTO data_tinggal (s_id,alamat,kelurahan,kecamatan,koka,propinsi,notlp,email,tgl,ket) VALUE ($s, '($_POST[alamat])', '($_POST[kelurahan])', '($_POST[kecamatan])', '($_POST[koka])', '($_POST[propinsi])', '($_POST[notlp])', '($_POST[email])', '($_POST[tgl])', '($_POST[ket])')");
    if($q)
    {
        echo "<script>document.location.href='psiswa3.php'</script>";
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
    <h3>Keterangan Tempat tinggal</h3>
        <table align = "center">
            <tr>
                <th>Alamat rumah :</th>
                <th><input type="text" name="alamat" placeholder = "Alamat" class="form-control"></th>
            <tr><th></th><th><input type="number" name="rt" placeholder = "RT" class="form-control"></th></tr>
            <tr><th></th><th><input type="number" name="rw" placeholder = "RW" class="form-control"></tr></th>
            </tr>
            <tr>
                <th>Kelurahan :</th>
                <th><input type="text" name = "kelurahan" placeholder = "Kelurahan" class="form-control"></th>
            </tr>
            <tr>
                <th>Kecamatan :</th>
                <th><input type="text" name = "kecamatan" placeholder = "Kecamatan" class="form-control"></th>
            </tr>
            <tr>
                <th>Kota/Kabupaten :</th>
                <th><input type="text" name="koka" placeholder = "Kota/Kabupaten" class="form-control"></th>
            </tr>
            <tr>
                <th>Propinsi :</th>
                <th><input type="text" name="propinsi" placeholder = "Propinsi" class="form-control"></th>
                </tr>
            <tr>
                <th></th>
                <th><input type="text" name="kodepos" placeholder = "Kode Pos" class="form-control"></th>
            </tr>
            <tr>
                <th>No.Telpon Rumah :</th>
                <th><input type="text" name="notlp" class="form-control"></th>
            </tr>
            <tr>
                <th>Email :</th>
                <th><input type="text" name="email" class="form-control"></th>
            </tr>
            <tr>
                <th>Tinggal dengan :</th>
                <th><input type="radio" name="tgl" value = "orangtua">Orang Tua
                <input type="radio" name="tgl" value = "asrama">Asrama
                <input type="radio" name="tgl" value = "saudara">Saudara<input type="text" name="ket"></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit" name="simpan" value = "Next" class="btn btn-success"></th>
            </tr>
        </table>
    </form>
</body>
</html>