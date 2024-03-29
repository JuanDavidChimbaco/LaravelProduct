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
        <div>
            <h1 class="text-center">Vue 3</h1>
        </div>
        <div class="container d-flex justify-content-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">
                            <router-link to="/">Example</router-link>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <router-link to="/pokemon">Pokemon</router-link>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <router-link to="/component">Component</router-link>
                        </a>
                    </li>
                </ul>
        </div>
        [[selected]]

        <router-view></router-view>
    </div>

{{--
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

        {{-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            Link
          </a>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            Button
          </button>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Carrito</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div>
                Aqui van los productos
              </div>

            </div>
          </div> --}}

    </div>
</body>

</html>
