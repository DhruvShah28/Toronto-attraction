<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractions Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <h1 class="container-fluid p-4">Website Admin</h1>

  <?php if(isset($_SESSION['id'])): ?>
    <nav style="padding: 0 1%; text-align: center;">
        <a href="dashboard.php">Dashboard</a> | 
        <a href="logout.php">Logout</a>
    </nav>
  <?php endif; ?>
  
  <hr>
  
  <?php echo get_message(); ?>
  
  <div style="max-width: 1500px; margin: auto; padding: 0 1%;">
  
