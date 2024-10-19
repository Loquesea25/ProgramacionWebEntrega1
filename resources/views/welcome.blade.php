<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>NiceAdmin Laravel</title>
</head>

<body>
    @include('partials.sidebar') <!-- Menu lateral -->
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Tabla de datos -->
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Título</th>
                                        <th>Sección</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Contenido dinámico -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
