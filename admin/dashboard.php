<?php
include( 'includes/connection.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );
secure();
include( 'includes/header.php' );
?>

<main class="container d-flex flex-column align-items-center p-4">
  <a href="projects.php" class="list-group-item list-group-item-action list-group-item-success my-3 p-4 fs-4 dashboard-item">Manage Attractions</a>
  <a href="users.php" class="list-group-item list-group-item-action list-group-item-danger my-3 p-4 fs-4 dashboard-item">Manage Users</a>
  <a href="logout.php" class="list-group-item list-group-item-action list-group-item-warning my-3 p-4 fs-4 dashboard-item">Logout</a>
</main>


<?php
include( 'includes/footer.php' );
?>
