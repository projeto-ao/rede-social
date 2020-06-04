<html>
    <head>
        <meta charset="utf-8">
        <title>
            @yield('title')
        </title>

        <script src="https://kit.fontawesome.com/5d32780e0c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


        <style type="text/css" rel="stylesheet">
            .fa-align-center {
                font-size: 2.5rem;
                color: #fff;
                text-shadow: 1.5px 1.5px #000;
            }

            .menu-label {
                font-size: 2.75rem;
                font-weight: bold;
                color: #fff;
                padding: 0.25em;
                text-shadow: 1.5px 1.5px #000;
            }

            .sticky-top {
                top: 1em;
                right: 1em;
                position: absolute;
                cursor: pointer;
            }
        </style>

        @yield('css')
    </head>

    <body background="public/imagens/pagina-inicial/arvores.jpg">
        <div class="container">
            <div class="sticky-top" id="menu">
                <button class="btn btn-secundary dropdown-toggle" id="menu_dropdown" data-toggle="dropdown">
                    <span class="menu-label">Menu</span><i class="fas fa-align-center white"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item">Item de exemplo 1</button>
                    <button class="dropdown-item">Item de exemplo 2</button>
                    <button class="dropdown-item">Item de exemplo 3</button>
                </div>
            </div>

            @yield('content')
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    @yield('js')
</html>