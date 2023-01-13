<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
   <div class="container">
    <h1 class="text-center">Masukan Biodata</h1>
    <form action="get_post.php" method="post">
        <div class="row m-3">
            <div class="col mb-3">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstname" >
            </div>
            <div class="col">
                <label for="lastname"></label>
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname" >
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea class="form-control" name="address" placeholder="Jl. Kehormatan Blok A No.19 Rt.002 Rw.08 Duri Kepa, Kebon Jeruk, Jakarta Barat, Indonesia, 11510" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            </div>
            <div class="input-group m-3">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Button</button>  
            </div>
        </div>
       
    </form>
    </div>
</body>
</html>