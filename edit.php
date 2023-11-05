
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
  <?php
    include 'koneksi.php';

    $anggota = mysqli_query($conn,"SELECT * from anggota where nama='$_GET[nama]'");

    while($b = mysqli_fetch_array($anggota)){
        $id = $b["id_anggota"];
        $nama= $b["nama"];
        $username = $b["username"];
        $password = $b["password"];
        $sex = $b["sex"];
        $telp = $b["telp"];
        $alamat = $b["alamat"];
        $email = $b["email"];
        $tgl_entry = $b["tgl_entry"];
        $role = $b["role"];
    }
  ?>
  <form action="proses_edit.php?nama=<?php echo $nama?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="text" name="id_anggota" disabled value="<?php echo $id ?>"</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" value="<?php echo $username ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password" value="<?php echo $password ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="sex"value="<?php echo $sex ?>"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type="text" name="telp"value="<?php echo $telp ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"value="<?php echo $alamat ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email"value="<?php echo $email ?>"></td>
        </tr>
        <tr>
            <td>Tanggal_Entry</td>
            <td>:</td>
            <td><input type="datetime-local" name="tgl_entry"value="<?php echo $tgl_entry ?>"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td><input type="text" name="role"value="<?php echo $role ?>"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan">
  </form>
</body>
</html>
