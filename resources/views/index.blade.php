<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.js"></script>

    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <ul class="nav justify-content-center">
            <li class="nav-item" @click="selected = 'Example'">
                <a class="nav-link" href="#">Example</a>
            </li>
            <li class="nav-item" @click="selected = 'Component'">
                <a class="nav-link" href="#">Component</a>
            </li>
            <li class="nav-item" @click="selected = 'Pokemon'">
                <a class="nav-link" href="#"> Pokemon</a>
            </li>
            <li>
                <a href="/productos" class="nav-link">Productos</a>
            </li>
            <component :is="selected" />
        </ul>
    </div>
</body>

</html>
