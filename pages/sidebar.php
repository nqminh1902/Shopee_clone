<?php
$sql_danhmuc = "SELECT * FROM danhmucsp ORDER BY iddanhmuc DESC";
$query_danhmuc = mysqli_query($links, $sql_danhmuc);
?>
<div class="grid__column-2">
    <nav class="category">
        <h3 class="categoty__heading">
            <i class="categoty__heading-icon fas fa-list"></i>Danh mục
        </h3>
        <ul class="category-list">
            <!--class: categoty-item--active -->
            <?php
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
            <li class="categoty-item">
                <a class="categoty-item-link"
                    href="index.php?quanly=danhmucsp&iddanhmuc=<?php echo $row_danhmuc['iddanhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
            </li>
            <?php
            }
            ?>
        </ul>
    </nav>
</div>