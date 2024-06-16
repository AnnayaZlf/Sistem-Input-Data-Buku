<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
    <title>@yield('title')</title>

    <style>
        .nav-pills .nav-link {
            margin-bottom: 10px;
        }
        .nav-link.active {
            background-color: #17a2b8 !important; /* bg-info */
            color: white !important;
        }
        .dropdown-menu {
            min-width: 150px; /* Lebar minimum dropdown menu */
        }
    </style>
</head>
<body>
<div class="container-fluid">

    {{-- Header --}}
    <div class="row"> {{-- Baris Pertama --}}
        <div class="col-lg-12 py-2 bg-info">
            <div class="dropdown float-right"> <!-- Mengubah float-right menjadi float-left -->
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-person-fill"></i> User
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">{{ Auth::user()->name ?? "" }}</a>
                    <a class="dropdown-item" href="/edituser">Change Password</a>
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row"> {{-- Baris Kedua --}}
        <div class="col-lg-2 vh-100 bg-light">
            <div class="row mt-4">
                <div class="col-12 border-right"> <!-- Ubah col-2 ke col-12 untuk memperlebar kolom -->
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link btn btn-outline-info {{ ($key == 'menu') ? 'active' : '' }}" id="v-pills-home-tab" href="/menu">Menu</a>
                        <a class="nav-link btn btn-outline-info mt-2 {{ ($key == 'buku') ? 'active' : '' }}" id="v-pills-profile-tab" href="/buku">Buku</a> <!-- Tambahkan mt-2 untuk memberi jarak -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 vh-100 mt-4">
            {{-- KONTEN --}}
            @yield('content')
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</body>
</html>
