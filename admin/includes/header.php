<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractions Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-info mb-4 p-4">
    <div class="container-fluid">
        <a class="navbar-brand fs-1 text-light" href="#">Website Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
              <?php if(!isset($_SESSION['id'])): ?>
              <a class="nav-link fs-3 text-light mx-3" href="../index.php">Back</a>              
              <?php else: ?>
              <a class="nav-link fs-3 text-light mx-3" href="dashboard.php">Dashboard</a>
              <a class="nav-link fs-3 text-light mx-3" href="logout.php">Logout</a>
              <?php endif; ?>
          </div>
        </div>
    </div>
  </nav>
 
  <?php get_message(); ?>
  
