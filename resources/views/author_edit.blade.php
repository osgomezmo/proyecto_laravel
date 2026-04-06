<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Autores</title>
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">👤 Lista de Autores</h1>

    <!-- FORMULARIO -->
    <div class="card shadow">
        <div class="card-body">

            <h5 class="mb-3">Editar Autor</h5>

            <form action="{{route('authors.update', $author->id)}}" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$author->name}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nationality</label>
                    <input type="text" name="nationality" class="form-control" value="{{$author->nationality}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control" value="{{$author->birthday}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Libro</label>
                    <select name="id_book" class="form-select" required>
                        <option value="">Seleccione un libro</option>
                        
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">
                                 {{ $author->id_book == $book->id ? 'selected' : '' }}>
                                {{ $book->name }}
                            </option>
                        @endforeach
                    </select>
                </div>                

                <button type="submit" class="btn btn-primary w-100">
                    Guardar Autor
                </button>
            </form>

        </div>
    </div>

</div>

</body>
</html>