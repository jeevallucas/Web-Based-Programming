<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="card w-25">
            <div class="card-header bg-primary"><strong
                    class="text-light d-flex justify-content-center align-items-center">CREATE ACCOUNT</strong></div>
            <div class="card-body">
                <form action="/simpan" method="POST">
                    @csrf

                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama" placeholder="Masukkan nama lengkap" class="form-control"
                            required>
                    </div>

                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="email" name="email" placeholder="Masukkan email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <strong>Password</strong>
                        <input type="password" name="password" placeholder="Masukkan password" class="form-control"
                            required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
