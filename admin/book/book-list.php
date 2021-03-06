<!-- Page Alert -->
<?php
$message_color = "";
$message_text = "";

if (isset($_GET['message'])) {
    if ($_GET['message'] == "created") {
        $message_color = "alert-success";
        $message_text = "Buku baru berhasil ditambahkan.";
    } else if ($_GET['message'] == "deleted") {
        $message_color = "alert-info";
        $message_text = "Buku berhasil dihapus.";
    } else if ($_GET['message'] == "updated") {
        $message_color = "alert-info";
        $message_text = "Buku berhasil diperbaharui.";
    } else if ($_GET['message'] == "create-fail") {
        $message_color = "alert-danger";
        $message_text = "Terjadi masalah ketika menambah buku baru.";
    } else if ($_GET['message'] == "delete-fail") {
        $message_color = "alert-danger";
        $message_text = "Terjadi masalah ketika menghapus buku.";
    } else if ($_GET['message'] == "update-fail") {
        $message_color = "alert-danger";
        $message_text = "Terjadi masalah ketika memperbarui buku.";
    }

    echo
    "<div class='alert $message_color alert-dismissible fade show col-12 col-lg-10' role='alert'>
        <h5 class='mb-0 alert-heading'>
            $message_text
        </h5>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <i class='fa fa-times'></i>
        </button>
    </div>";
}
?>
<!-- End of Page Alert -->

<!-- Content Row -->
<div class="row">
    <div class="col-lg-10 col-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="bookTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ISBN</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $rs = mysqli_query($con, "SELECT * FROM buku ORDER BY `isbn` ASC");

                            while ($data = mysqli_fetch_array($rs)) {
                            ?><tr>
                                    <td><?= $data['isbn'] ?></td>
                                    <td><?= $data['judul'] ?></td>
                                    <td><?= $data['penulis'] ?></td>
                                    <td class="text-center">
                                        <a href="book.php?view=<?= $data['isbn'] ?>" class="btn btn-small"><i class="fas fa-pen"></i></a>
                                        <a onclick="deleteConfirm('book/book-delete.php?delete=<?= $data['isbn'] ?>')" href="#" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>