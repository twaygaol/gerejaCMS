<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Baptis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .label {
            font-weight: bold;
            background-color: #f4f4f4;
            width: 30%;
        }
        .value {
            width: 70%;
        }
        .entry {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Data Baptis</h1>

    @foreach ($baptisData as $baptis)
        <table class="entry">
            <tr>
                <td class="label">Nama Baptis</td>
                <td class="value">{{ $baptis->nama_baptis }}</td>
            </tr>
            <tr>
                <td class="label">Jenis Kelamin</td>
                <td class="value">{{ $baptis->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td class="label">Tanggal Lahir</td>
                <td class="value">{{ $baptis->tg_lahir->format('d F Y') }}</td>
            </tr>
            <tr>
                <td class="label">Nama Ayah</td>
                <td class="value">{{ $baptis->nama_ayah }}</td>
            </tr>
            <tr>
                <td class="label">Nama Ibu</td>
                <td class="value">{{ $baptis->nama_ibu }}</td>
            </tr>
            <tr>
                <td class="label">Tanggal Nikah Orang Tua</td>
                <td class="value">{{ $baptis->tgl_nikah_ortu ? $baptis->tgl_nikah_ortu->format('d F Y') : 'N/A' }}</td>
            </tr>
            <tr>
                <td class="label">Nama Saksi 1</td>
                <td class="value">{{ $baptis->nama_saksi1 }}</td>
            </tr>
            <tr>
                <td class="label">Nama Saksi 2</td>
                <td class="value">{{ $baptis->nama_saksi2 }}</td>
            </tr>
        </table>
    @endforeach

</body>
</html>
