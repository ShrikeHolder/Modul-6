<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Belajar Controller & View pada Laravel</h1>
        
        <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/digital.jpg')); ?>" alt="image">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-dark" href="home">Home</a>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\Users\asus\OneDrive\Documents\3. Tel-U Surabaya\- Codes\Semester 4 - Bootstrap - Pemrograman Framework\Week-5\Modul-4\resources\views/welcome.blade.php ENDPATH**/ ?>