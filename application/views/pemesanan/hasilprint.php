<!DOCTYPE html>
<html lang="en">


<head>

    <style>
        table,
        th,
        td {
            border: 0.5px solid black;
        }

        body {
            font-family: Calibri;
        }

        tr:nth-child(even) {
            background-color: #ededff;
        }
    </style>
    <title>Laundry Pesanan</title>
</head>

<body>
    <h1>Laundry</h1>
    <h2>Daftar Pesanan</h2>
    <?php
    if ($isCetakPeriode == false) {
        $dtpesanan = $datapesanan;
    } ?>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID Pesanan</th>
            <th scope="col">Nama</th>
            <th scope="col">Nomor Hp</th>
            <th scope="col">Berat</th>
            <th scope="col">Sprei</th>
            <th scope="col">Selimut</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Tanggal</th>

            <?php $i = 1;
            foreach ($dtpesanan as $dp) : ?>
        <tr>
            <td align="center" scope="row"><?= $i++; ?></td>
            <td align="center"><?= $dp['id_pesanan']; ?></td>
            <td align="center"><?= $dp['name']; ?></td>
            <td align="center"><?= $dp['nomor_hp']; ?></td>
            <td align="center"><?= $dp['berat']; ?> Kg</td>
            <td align="center"><?= $dp['sprei']; ?></td>
            <td align="center"><?= $dp['selimut']; ?></td>
            <td align="center">Rp. <?php echo number_format($dp['harga'], 2, ',', '.')  ?></td>
            <td align="center"><?= $dp['status']; ?></td>
            <td align="center"><?= $dp['admin']; ?></td>
            <td align="center"><?= date('d F Y', $dp['date_created']); ?></td>
        </tr>
    <?php endforeach; ?>
    </tr>
    </table>

    <br>
    <br>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <th scope="col">Jumlah Kg</th>
            <th scope="col">Jumlah Harga</th>

            <?php
                                        foreach ($jumlahtotal as $jt) : ?>
        <tr>
            <td align="center" scope="row"><?= $jt['JumlahBerat'] ?> Kg</td>
            <td align="center">Rp. <?php echo number_format($jt['JumlahTotal'], 2, ',', '.')  ?></td>
        </tr>
    <?php endforeach; ?>
    </tr>
    </table>
</body>

</html>