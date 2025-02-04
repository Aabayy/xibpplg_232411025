<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output_pecel.php" method="POST">
        <table border="1">
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama"></td>
            
            </tr>
            <tr>
                <td>Alamat Pembeli</td>
                <td><textarea name="alamat" id=""></textarea></td>
            </tr>
            <tr>
                <td>Paket</td>
                <td><select name="paket" id="">
                    <option value="Pilih">-Pilih-</option>
                    <option value="Paket1">Paket 1</option>
                    <option value="Paket2">Paket 2</option>
                    <option value="Paket3">Paket 3</option>
                </select></td>
            </tr>
            <tr>
                <td>Menu Tambahan</td>
                <td><input type="checkbox"name="kentang">Kentang Goreng <br>
                <input type="checkbox"name="nasi">Nasi <br>
                <input type="checkbox"name="telur">Telur Rebus<br>
            </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="PROSES" name="proses"><input type="reset" value="BATAL" name="batal"></td>
            </tr>
        </table>
    </form>
</body>
</html>