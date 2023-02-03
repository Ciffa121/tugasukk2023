<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah data</title>
</head>
<body>
    <div class="container mt-5">
        
        <h1></h1>
        <div class="container mt-4">
            <form action="<?=site_url('welcome/insert')?>" method="post">
                <div class="mt-4">
                    ISI DISINI <input type="text" name="ISI DISINI" class="form-control">
                </div>
                <div class="mt-4">
                   
                </div><br>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</body>
</html>