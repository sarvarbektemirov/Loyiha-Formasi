<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyiha fayllarini yuklash</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="container">
    <h1 class="text-center">
        Loyiha fayllarini yuklash
    </h1>

    <form action="check.php" method="POST" enctype="multipart/form-data">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 my-3 fw-bold">
                <label for="a" class="form-label">Loyiha Nomi:</label>
                <input type="text" name="a" id="a" class="form-control">
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3 fw-bold">
                <label for="b" class="form-label">Loyiha Fayli:</label>
                <input type="file" name="b" id="b" class="form-control">
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3 fw-bold">
                <label for="c" class="form-label">Byudjet:</label>
                <input type="text" name="c" id="c" class="form-control">
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3 fw-bold">
                <label for="d" class="form-label">Tugallanish Sanasi:</label>
                <input type="date" name="d" id="d" class="form-control">
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3 fw-bold">
                <label for="e" class="form-label">Tavsif:</label>
                <textarea name="e" id="e" class="form-control" rows="1"></textarea>
            </div>

            <div class="col-12 my-4 text-center">
                <button type="submit" class="btn btn-primary px-5">Yuborish</button>
            </div>

        </div>
    </form>
</body>

</html>