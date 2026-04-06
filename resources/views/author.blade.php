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

    <!-- TABLA -->
    <div class="card shadow mb-4">
        <div class="card-body">

            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Nacionalidad</th>
                        <th>Nacimiento</th>
                        <th>Libros</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <td>{{$author->id}}</td>
                            <td>{{$author->name}}</td>
                            <td>{{$author->nationality}}</td>
                            <td>{{$author->birthday}}</td>
                            <td>{{ $author->book ? $author->book->name : 'Sin libro' }}</td>
                            
                            <td class="d-flex gap-2">

                                <!-- ELIMINAR -->
                                <form action="{{route('authors.destroy', $author->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>

                                <!-- EDITAR -->
                                
                                <a href="{{route('authors.edit',$author->id)}}" class="btn btn-warning btn-sm">Editar</a>
                               

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <!-- FORMULARIO -->
    <div class="card shadow">
        <div class="card-body">

            <h5 class="mb-3">➕ Añadir Autor</h5>

            <form action="{{route('authors.store')}}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nationality</label>
                    <input type="text" name="nationality" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Libro</label>
                    <select name="id_book" class="form-select" required>
                        <option value="">Seleccione un libro</option>
                        
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">
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