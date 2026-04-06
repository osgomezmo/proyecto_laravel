<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Biblioteca</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #07f73b, #eeff02);
            color: white;
        }

        .card-custom {
            transition: 0.3s;
            border-radius: 15px;
        }

        .card-custom:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 30px rgba(0,0,0,0.4);
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

<!-- 🔥 NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" width="35">
            <span class="fw-bold fs-5">Mi Biblioteca</span>
        </a>

        <!-- MENÚ -->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('authors.index') }}">👤 Authors</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">📚 Books</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- 🔥 CONTENIDO PRINCIPAL -->
<div class="container text-center mt-5">

    <h1 class="fw-bold mb-3">📚 Bienvenido</h1>
    <p class="text-light mb-5">Sistema de gestión de autores y libros</p>

    <div class="row justify-content-center g-4">

        <!-- AUTHORS -->
        <div class="col-md-4">
            <a href="{{ route('authors.index') }}" class="text-decoration-none">
                <div class="card card-custom bg-dark text-white p-4">
                    <h3>👤 Authors</h3>
                    <p>Gestiona los autores</p>
                </div>
            </a>
        </div>

        <!-- BOOKS -->
        <div class="col-md-4">
            <a href="{{ route('books.index') }}" class="text-decoration-none">
                <div class="card card-custom bg-dark text-white p-4">
                    <h3>📚 Books</h3>
                    <p>Gestiona los libros</p>
                </div>
            </a>
        </div>

    </div>

</div>

<!-- 🔥 FOOTER -->
<footer class="bg-dark text-center text-white py-3 footer">
    <small>© 2026 - Sistema de Biblioteca | Hecho por Oscar 😎</small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>