<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>

  <form action="proses_tambah.php" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="text" disabled name="id" ></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="sex"></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td>:</td>
            <td><input type="text" name="telp"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Tanggal_entry</td>
            <td>:</td>
            <td><input type="datetime-local" name="tgl_entry"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td><input type="text" name="role"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan">
  </form>
</body>
</html>