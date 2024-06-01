    <?php 
    $host = 'localhost';
    $dbname = 'test_coding';
    $username = 'root';
    $password = '';
    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = $conn->real_escape_string($_POST['nama']);
        $alamat = $conn->real_escape_string($_POST['alamat']);
        $no_telp = $conn->real_escape_string($_POST['no_telp']);
        $jenis_kelamin = $conn->real_escape_string($_POST['jenis_kelamin']);
        
        $sql = "INSERT INTO users (nama, alamat, no_telp, jenis_kelamin) VALUES ('$nama', '$alamat', '$no_telp', '$jenis_kelamin')";
        if ($conn->query($sql) === TRUE) {
            echo "Data baru berhasil ditambahkan";
        } else {
            echo "Error saat memasukkan data: " . $conn->error;
        }
    }
    $conn->close();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
            <label for="">Nama : </label>
            <input type="text" name="nama" pattern="[A-Za-z ]+"  title="Hanya huruf yang diperbolehkan" required>
            </div> <br>
            <div>
            <label for="">Alamat : </label>
            <input type="text" name="alamat" required>
            </div> <br>
            <div>
            <label for="">Nomor Telepon : </label>
            <input type="text" name="no_telp" pattern="\d+" title="Hanya angka yang diperbolehkan" required>
            </div> <br>
            <div>
            <label for="">Jenis Kelamin : </label>
            <select name="jenis_kelamin" id="" required >
                <option value="">Select Chose</option>
                <option value="laki-laki">Laki Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            </div> <br>
            <button type="submit">Submit</button>
        </form>
    </body>
    </html>

