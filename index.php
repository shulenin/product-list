<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Products</title>
    </head>
    <body>

    <div class="container">

        <h1 class="text-center p-5">Актуальные товары</h1>

        <h3 class="m-2">Количество:</h3>

        <div class="btn-group p-2" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary m-2" id="minus-count"> - </button>
            <h3 class="m-2" id="count-of-rows"></h3>
            <button type="button" class="btn btn-secondary m-2" id="plus-count"> + </button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PRODUCT_ID</th>
                    <th scope="col">PRODUCT_NAME</th>
                    <th scope="col">PRODUCT_PRICE</th>
                    <th scope="col">PRODUCT_ARTICLE</th>
                    <th scope="col">PRODUCT_QUANTITY</th>
                <th scope="col">DATE_CREATE</th>
            </tr>
            </thead>
            <tbody id="body">

            </tbody>
        </table>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    </body>
</html>