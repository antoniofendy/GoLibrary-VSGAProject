<?php 
    // include '../lib/config.php';

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = 'db_golibrary';

    $con = mysqli_connect($host, $user, $pass, $db);

    if(isset($_GET['keyword'])){
        $rs = mysqli_query($con, "SELECT * FROM buku WHERE 
            judul LIKE '%$_GET[keyword]%' OR 
            penulis LIKE '%$_GET[keyword]%' OR 
            penerbit LIKE '%$_GET[keyword]%' OR 
            isbn LIKE '%$_GET[keyword]%' OR
            tahun LIKE '%$_GET[keyword]%' OR
            isbn LIKE '%$_GET[keyword]%' OR
            bahasa LIKE '%$_GET[keyword]%'
            ORDER BY `rating` DESC LIMIT 6");
        echo "<div class='list-group ml-2 mr-2'>";
        while ($data = mysqli_fetch_array($rs)) {
?>
            <a href="view_book.php?isbn=<?= $data['isbn']; ?>" class="list-group-item list-group-item-action">
                <div class="row book-list">
                    <div class="col-sm-0 col-md-2 d-flex justify-content-center">
                        <img class="img-katalog" src="./admin/storage/book_cover/<?= $data['cover']; ?>" alt="" srcset="">
                    </div>
                    <div class="col-sm-12 col-md-10" style="width: 100%;">
                        <h4><?= $data['judul']; ?></h4>
                        <p style="color:#9788a7;"><?= $data['penerbit']; ?></p>
                        <h6><?= $data['penulis'] ?></h6>
                        <div class="addition text-right d-flex flex-row justify-content-end">
                            <div class="year mr-3">
                                <p><span style="color:#9788a7;">Tahun:</span> <?= $data['tahun']; ?></p>
                            </div>
                            <div class="language mr-3">
                                <p><span style="color:#9788a7;">Bahasa:</span> <?= $data['bahasa']; ?></p>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star" style="color: #d4af37;"></i>: <?= $data['rating']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
<?php 
        }
        echo "</div>";
    }
?>