<?php
// Classes
require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/Genre.php';
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/TvSerie.php';

// Instances
include_once __DIR__ . '/database/db.php';

// Set date released
include_once __DIR__ . '/helpers/setYears.php';

?>
<!-- Html head -->
<?php include_once __DIR__ . '/layout/head.php' ?>

<!-- Header section -->
<?php include_once __DIR__ . '/layout/partials/header.php' ?>

<!-- Main section -->
<main class="bg-secondary text-light py-4">
    <div class="container">

        <!-- Print the data from database -->
        <?php include_once __DIR__ . '/layout/partials/mainResults.php' ?>

    </div>
</main>

<!-- Footer section -->
<?php include_once __DIR__ . '/layout/footer.php' ?>