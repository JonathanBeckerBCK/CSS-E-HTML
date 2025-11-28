<?php require __DIR__ . "/header.php"; ?>

<main class="produto">

    <div class="container">

        <nav class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Camisera Manga Comprida</li>
            </ol>
        </nav>


        <div class="row">

            <div class="col-lg-7">
                <img src="assets/images//produtos/details/foto-carrinho-camiseta-manga-comprida.jpg" class="w-100" alt="">
            </div>

            <div class="col-lg-5">
                <h1>Camiseta de manga comprida</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo maxime doloremque, pariatur cum velit a alias non assumenda dolores debitis, odio et culpa? Earum odio possimus eaque fugit architecto pariatur!</p>

                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>

                    <h5 class="preco mt-3">R$ 79,90</h5>
                    <span>Em até 12x sem juros</span>

                    <div class="comprar mt-2">
                        <form action="">

                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>

                            <botton type="submit" class="btn btn-success w-100 mt-4">Comprar</botton>

                        </form>
                    </div>

                </div>

            </div>

        </div>

        <div class="row">
            <div class="col">
                <div class="fb-comments"
                    data-href="https://www.seusite.com/sua-pagina"
                    data-width="100%"
                    data-numposts="5">
                </div>

            </div>
        </div>






    </div>

</main>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v18.0"
    nonce="ABC123">
</script>



<?php require __DIR__ . "/footer.php"; ?>