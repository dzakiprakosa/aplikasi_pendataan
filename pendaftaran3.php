<html>
<head>
    <title></title>    
</head>
<body>
  
    <form action="registrasi.php" method="post" name="form1">        
        <table>
            <tr>
                <td width="120">Username</td>
                <td><input type="text" name="userid"></td>
            </tr>
            <tr>
                <td width="120">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            </tr>
            <tr>
                <td>Email</td>
                <td><a href=""><input type="text" name="email"></a>
            </tr>
            <tr>
                <td>No. HP</td>
                <td><a href="hp"><input type="text" nama="hp"></a>
            </tr>
            <tr>
                <td>Password</td>
                <td><a href="password"><type="password" name="password"></a>
            </tr>
            <tr>
                <td></td>
                <td><a href="submit"><input type="submit" name="submit" value="Submit"></a>
            </tr>
        </table>
    </form>
</body>
</html>
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="index.php";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysql_query("INSERT INTO tb_user (userid, nama, alamat, email, hp, password)
        VALUES ('$_POST[userid]', '$_POST[nama]', '$_POST[alamat]', '$_POST[email]', '$_POST[hp]', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.php";
              </script>';
              exit();
    }
?>