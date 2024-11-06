<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah Siswa</h1>
    <form action="/siswa/store" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
