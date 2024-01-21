<!DOCTYPE html>
<html>

<head>
    <title>Ur Dream Garden's</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css">

    <style>
    body {
        background-image: url('https://cdn.pixabay.com/photo/2016/11/18/16/51/leaves-1835780_1280.jpg');
        /* Ganti 'path/to/your/image.jpg' dengan path ke gambar latar belakang Anda */
        background-size: cover;
        /* Agar gambar mencakup seluruh latar belakang */
        background-position: center;
        /* Posisi gambar di tengah */
        background-repeat: no-repeat;
        /* Tidak mengulang gambar */
        color: #fff;
        /* Warna teks agar kontras dengan gambar latar belakang */
    }

    .container {
        background-color: rgba(100, 100, 100, 0.0);
        /* Warna latar belakang container dengan transparansi */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-12 row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="col-md-12 text-center">
                <h1> <img class="logo" src="foto/logo.png" alt="Your Logo"> 
                <h1>Welcome to Ur Dream Garden's</h1>
                    By: <a
                        href="https://www.instagram.com/rrateam_.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank">RRA TEAM</a>
                </div>
                <main>
                    <?php include "layout/footer.html" ?>
            </div>
            <div class="col-md-12 mt-5">
                <form enctype="multipart/form-data" method="post" action="upload.php">
                    <div class="mb-3">
                        <label class="form-label">Upload</label>
                        <input type="file" name="foto" class="form-control" accept="image/*" required>
                    </div>

                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>