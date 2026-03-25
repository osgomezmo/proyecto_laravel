<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Libros</title>
</head>

<body class="bg-light">

<div class="container mt-5">

    

    <!-- FORMULARIO -->
    <div class="card shadow">
        <div class="card-body">

            <h5 class="mb-3">➕ Editar libro</h5>

            <form action="{{route('books.update', $book->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$book->name}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" name="price" class="form-control" value="{{$book->price}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Número de páginas</label>
                    <input type="number" name="pages" class="form-control" value="{{$book->pages}}">
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Guardar libro
                </button>
            </form>

        </div>
    </div>

</div>

</body>
</html>