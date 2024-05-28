<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas con Bootstrap</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($productos as $producto)
                <!-- Tarjeta 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/img-productos/hamburguesa.jpg') }}" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h5 class="card-title">{{$producto->name}}</h5>
                            <p class="card-text">{{$producto->descripcion}}</p>
                            <p class="card-text"{{$producto->precio}}></p>
                            <p class="card-text">{{$producto->disponibilidad}} <span id="count1">10</span></p>
                            <button type="button" class="btn btn-primary" onclick="addToCart(1)">Añadir a
                                carrito</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para manejar el carrito -->
    <script>
        var cart = [];

        function addToCart(productId) {
            // Aquí puedes agregar la lógica para añadir un producto al carrito
            // Por ejemplo, podrías decrementar la cantidad disponible y agregar el producto al arreglo de carrito
            switch (productId) {
                case 1:
                    document.getElementById('count1').innerText--;
                    break;
                case 2:
                    document.getElementById('count2').innerText--;
                    break;
                case 3:
                    document.getElementById('count3').innerText--;
                    break;
                case 4:
                    document.getElementById('count4').innerText--;
                    break;
            }
            cart.push(productId);
            console.log('Producto añadido al carrito:', productId);
        }
    </script>

</body>

</html>
