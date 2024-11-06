<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="/siswa/create">Tambah Siswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($siswa as $s) : ?>
        <tr>
            <td><?= $s['nama'] ?></td>
            <td><?= $s['email'] ?></td>
            <td><?= $s['no_hp'] ?></td>
            <td>
                <a href="/siswa/edit/<?= $s['id'] ?>">Edit</a>
                <a href="/siswa/delete/<?= $s['id'] ?>" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
