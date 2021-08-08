<?php 
    // include '../lib/config.php';

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = 'db_golibrary';

    $con = mysqli_connect($host, $user, $pass, $db);

    $limit = 5;

	if (isset($_GET['page'])) {
        $page_no = $_GET['page'];
	}else{
        $page_no = 1;
	}

    $offset = ($page_no-1) * $limit;

    if(isset($_GET['keyword'])){
        $rs = mysqli_query($con, "SELECT * FROM buku WHERE 
            judul LIKE '%$_GET[keyword]%' OR 
            penulis LIKE '%$_GET[keyword]%' OR 
            penerbit LIKE '%$_GET[keyword]%' OR 
            isbn LIKE '%$_GET[keyword]%' OR
            tahun LIKE '%$_GET[keyword]%' OR
            isbn LIKE '%$_GET[keyword]%' OR
            bahasa LIKE '%$_GET[keyword]%'
            ORDER BY `rating` DESC LIMIT $offset, $limit");
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
                        <div class="addition float-right text-right d-flex flex-row justify-content-end">
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

        $sql = "SELECT * FROM buku";

        $records = $rs = mysqli_query($con, "SELECT * FROM buku WHERE 
            judul LIKE '%$_GET[keyword]%' OR 
            penulis LIKE '%$_GET[keyword]%' OR 
            penerbit LIKE '%$_GET[keyword]%' OR 
            isbn LIKE '%$_GET[keyword]%' OR
            tahun LIKE '%$_GET[keyword]%' OR
            isbn LIKE '%$_GET[keyword]%' OR
            bahasa LIKE '%$_GET[keyword]%'")
        ;

        $totalRecords = mysqli_num_rows($records);

        $totalPage = ceil($totalRecords/$limit);

        $pagination="";

        $pagination.="<ul class='pagination justify-content-center mt-5' style='margin:20px 0'>";

        for ($i=1; $i <= $totalPage ; $i++) { 
            if ($i == $page_no) {
                $active = "active";
            } else{
                $active = "";
            }
            $pagination.="<li class='page-item $active'><a class='page-link' id='$i' href=''>$i</a></li>";
        }

        $pagination .= "</ul>";

        echo $pagination;
    }

?>