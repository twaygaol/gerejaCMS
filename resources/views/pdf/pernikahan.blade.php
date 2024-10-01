<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pernikahan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f5f5f5;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .title {
            font-size: 18px;
            font-weight: bold;
        }
        .section {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="title">Data Pernikahan</div>
        <div>{{ $record->created_at->format('d F Y') }}</div>
    </div>

    <div class="section">
        <table>
            <tr>
                <th>ID Jemaat</th>
                <td>{{ $record->id_jemaat }}</td>
            </tr>
            <tr>
                <th>Pas Foto Pria</th>
                <td><img src="{{ public_path('storage/' . $record->pas_pria) }}" alt="Pas Foto Pria" width="100"></td>
            </tr>
            <tr>
                <th>Tanggal Lahir Pria</th>
                <td>{{ $record->ttl_pria->format('d F Y') }}</td>
            </tr>
            <tr>
                <th>Pas Foto Wanita</th>
                <td><img src="{{ public_path('storage/' . $record->pas_wanita) }}" alt="Pas Foto Wanita" width="100"></td>
            </tr>
            <tr>
                <th>Nama Saksi 1</th>
                <td>{{ $record->nama_saksi1 }}</td>
            </tr>
            <tr>
                <th>Nama Saksi 2</th>
                <td>{{ $record->nama_saksi2 }}</td>
            </tr>
        </table>
    </div>

</body>
</html>
