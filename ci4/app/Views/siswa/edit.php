<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>
    <form action="/siswa/update/<?= $siswa['id'] ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $siswa['nama'] ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $siswa['email'] ?>" required><br><br>

        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" value="<?= $siswa['no_hp'] ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
