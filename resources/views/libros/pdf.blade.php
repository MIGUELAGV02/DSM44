<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white text-center">
                        <h3><i class="bi bi-book-half"></i> Detalle del Libro</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $mostrar[0]->id_libro }}</td>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <td>{{ $mostrar[0]->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Autor</th>
                                    <td>{{ $mostrar[0]->autor }}</td>
                                </tr>
                                <tr>
                                    <th>Editorial</th>
                                    <td>{{ $mostrar[0]->editorial }}</td>
                                </tr>
                                <tr>
                                    <th>Categoría</th>
                                    <td>{{ $mostrar[0]->categoria }}</td>
                                </tr>
                                <tr>
                                    <th>Estatus</th>
                                    <td>
                                        <span class="badge {{ $mostrar[0]->estatus == 'Activo' ? 'bg-success' : 'bg-danger' }}">
                                            {{ $mostrar[0]->estatus }}
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
