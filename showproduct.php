<div class="app__container">
    <div class="grid">
        <div class="grid__row app_content">
            <?php

            include('./pages/sidebar.php');

            if (isset($_GET['quanly'])) {
                $tam = $_GET['quanly'];
            } else {
                $tam = "";
            }
            if ($tam == 'danhmucsp') {
                include('./pages/danhmucsp.php');
            } elseif ($tam == 'timkiemsp') {
                include('./pages/timkiem.php');
            } else {
                include('./pages/mainproduct.php');
            }


            ?>

        </div>
    </div>
</div>