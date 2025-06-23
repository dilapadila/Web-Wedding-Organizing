<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> @yield('judul') | UAS FADIL </title>
<link rel="stylesheet" href="/bulma/css/bulma.min.css">
</head>
<body>
<div class="container">
<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarSIFIKOM">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarSIFIKOM" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">Beranda</a>
                    <a class="navbar-item" href="/profil">Profil</a>
                    <a class="navbar-item" href="/Vendor">Vendor</a>
                    <a class="navbar-item" href="/Paket">Paket</a>
                </div>
            </div>
        </nav>

@yield('konten')
</div>
</body>
</html>