<!DOCTYPE html>
<html>

<head>
    <title>Sistem Penerimaan Laporan Bulanan Notaris</title>
    <style type="text/css">
        body {
            background-color: #ccc;
        }

        .rangkasurat {
            width: 930px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }

        table {
            border-bottom: 5px solid #000;
            padding: 2px;
        }

        .tengah {
            text-align: center;
            line-height: 5px;
        }

        .table1 {
            color: #232323;
            border-collapse: collapse;
            width: 100%;
        }

        .table1,
        .table1 td {
            border: 2px solid #050505;
            padding: 8px 14px;
        }

        .header-logo {
            text-align: center;
        }

        .header-logo img {
            width: 80px;
        }
    </style>
</head>

<body>

    <div class="rangkasurat">
        <div class="header-logo">
            <img src="{{ asset('template/img/Logopengayoman.png') }}" alt="Logo" />
        </div>

        <div class="tengah">
            <h3>KANTOR WILAYAH KALIMANTAN SELATAN</h3>
            <h2>KEMENTRIAN HUKUM DAN HAM</h2>
            <p>Alamat: Jl. Brigjen H. Hasan Basri No.30, Banjarmasin</p>
            <p>Website: https://kalsel.kemenkumham.go.id</p>
        </div>

        <br>

        <table class="table1">
            <tr>
                                    <th>NO</th>
                                    <th>VALIDASI</th>
                                    <th>KEDUDUKAN</th>
                                    <th>NAMA NOTARIS</th>
                                    <th>NOMOR URUT</th>
                                    <th>NOMOR BULANAN</th>
                                    <th>SIFAT AKTA</th>
                                    <th>NAMA PENGHADAP</th>
                                    <th>TANGGAL PELAPORAN</th>

            </tr>
            @foreach ($dtlapnotaris as $item)
            <tr>
                                    <td>{{ $item->wilayah->kecamatan }}</td>
                                    <td>{{ $item->notaris->nama}}</td>
                                    <td>{{ $item->no_urut }}</td>
                                    <td>{{ $item->no_bulanan }}</td>
                                    <td>{{ $item->akta->sifat_akta }}</td>
                                    <td>{{ $item->namapenghadap }}</td>
                                    <td>{{ $item->tanggal }}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
