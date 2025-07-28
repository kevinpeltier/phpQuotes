<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="background-image">

    <div class="w-100 d-flex justify-content-center align-content-center vh-100">
        <div class="w-50 d-flex flex-column mx-auto justify-content-center">
            <h1 class="w-50 mx-auto text-center text-white text-shadow">Read a great quote!</h1>
            <div class=""></div>
            <button type="button" class="btn btn-primary w-25 mx-auto shadow-lg" data-bs-toggle="modal" data-bs-target="#quoteModal">CLICK!!!!!</button>
        </div>
    </div>




    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Marcus Aurelius - Meditations</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You have power over your mind - not outside events. Realize this, and you will find strength.
                </div>
            </div>
        </div>
    </div>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>