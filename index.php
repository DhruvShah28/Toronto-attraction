<?php
include( 'admin/includes/connection.php' );
include( 'admin/includes/config.php' );
include( 'admin/includes/functions.php' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toronto Attractions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
    <!-- <h1 class="mb-4">Toronto Attractions</h1> -->

    <nav class="navbar navbar-expand-sm bg-warning-subtle mb-4 p-4">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 text-success" href="#">Toronto Attractions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active fs-3 text-primary mx-3" aria-current="page" href="#">Home</a>
                    <a class="nav-link fs-3 text-primary mx-3" href="./admin/index.php">Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container row row-cols-1 row-cols-md-4 g-4">
        <?php
        $query = "SELECT * FROM `attractions_description`";
        $attractions = mysqli_query($connect, $query);
    
        foreach($attractions as $attraction){
            echo '<div class="col">
                <div class="card h-100">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->';

                    if ($attraction['category'] === "Attraction"){
                        echo '<div class="card-header text-bg-primary">'.$attraction['category'].'</div>';
                    } elseif ($attraction['category']==="Landmark"){
                        echo '<div class="card-header text-bg-info">'.$attraction['category'].'</div>';
                    } elseif ($attraction['category']==="Museum"){
                        echo '<div class="card-header text-bg-warning">'.$attraction['category'].'</div>';
                    } elseif ($attraction['category']==="Nature/ Park"){
                        echo '<div class="card-header text-bg-success">'.$attraction['category'].'</div>';
                    } else {
                        echo '<div class="card-header text-bg-danger">'.$attraction['category'].'</div>';
                    } 
                    echo '<div class="card-body">
                        <h5 class="card-title">'.$attraction['name'].'</h5>
                        <p class="card-text">'.$attraction['description'].'</p>
                    </div>
                </div>
            </div>';
        }
        ?>
    </main>

<?php
include( 'admin/includes/footer.php' );
?>