<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f3efff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-card {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .avatar {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #c9b6ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 42px;
        }

        h1 {
            color: #4b3f72;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #888;
            margin-bottom: 25px;
        }

        .info {
            text-align: left;
        }

        .info-box {
            background: #f8f6ff;
            padding: 13px 16px;
            margin-bottom: 12px;
            border-radius: 10px;
        }

        .label {
            font-size: 13px;
            color: #888;
            margin-bottom: 4px;
        }

        .value {
            font-size: 16px;
            font-weight: bold;
            color: #40365f;
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #aaa;
        }
    </style>
</head>

<body>

    <div class="profile-card">

        <div class="avatar">👩🏻‍💻</div>

        <h1>{{ $nama }}</h1>

        <p class="subtitle">Mahasiswa Ilmu Komputer</p>

        <div class="info">

            <div class="info-box">
                <div class="label">Nama</div>
                <div class="value">{{ $nama }}</div>
            </div>

            <div class="info-box">
                <div class="label">Kelas</div>
                <div class="value">{{ $kelas }}</div>
            </div>

            <div class="info-box">
                <div class="label">NPM</div>
                <div class="value">{{ $npm }}</div>
            </div>

        </div>

        <div class="footer">
            Profile Mahasiswa • Pemrograman Web Lanjut
        </div>

    </div>

</body>
</html>