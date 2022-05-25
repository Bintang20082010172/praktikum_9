<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Input Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- formulir pendaftaran -->
    <section class="box-formulir">
        <h2><center>Formulir Input Data</center></h2>
        <br>
        <h3>Kontak</h3>
    
        <!-- bagian form -->
        <form action="simpan_kontak.php" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="id" class="input-control" maxlength="4">
                        </td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Nama" class="input-control" maxlength="30">
                        </td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                           <input type="radio" name="jkel" class="input-control" value="pria">pria &emsp;
                           <input type="radio" name="jkel" class="input-control" value="perempuan">perempuan
                        </td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Email" class="input-control" maxlength="40">
                        </td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Alamat" class="input-control" maxlength="50">
                        </td>
                    </tr>

                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Kota" class="input-control" maxlength>
                        </td>
                    </tr>

                    <tr>
                        <td>Pesan</td>
                        <td>:</td>
                        <td>
                          <textarea name="Pesan" class="input-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                             <!-- button untuk submit data ke database -->
                             <input type="submit" name="submit" class="btn-submit" value="Submit">
                        </td>
                    </tr>
                  
                </table>
            </div>
        </form>
    </section>
      
</body>
</html>