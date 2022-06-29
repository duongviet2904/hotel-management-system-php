<?php include('../../config.php') ?>
<?php
ob_start();
// if(!isset($_SESSION["acc_id"]))
//     header("location: ../login.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin| Add room class</title>
    <?php include('../common/head-link.php'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); 
        ?>
        <div class="app-main">
            <?php $page = 'add-room-class';
            include('../common/menu.php'); ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Thêm loại phòng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_fname" class="">Tên loại phòng</label><input name="rc_name" id="exampleEmail11" placeholder="name placeholder" type="text" class="form-control"></div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Mô tả loại phòng</label><input name="rc_description" id="examplePassword11" placeholder="description placeholder" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Hình ảnh </label><input name="rc_image" id="examplePassword11" placeholder="image placeholder" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Trạng thái</label><input name="rc_status" id="examplePassword11" placeholder="status placeholder" type="text" class="form-control"></div>
                                                    </div>
                                                </div>


                                                <button class="mt-2 btn btn-primary" type="submit">Add</button>
                                            </form>

                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $rc_name = $_POST['rc_name'];
                                                $rc_desciption = $_POST['rc_description'];
                                                $rc_image = $_POST['rc_image'];
                                                $rc_status = $_POST['rc_status'];
                                                $sql = "INSERT INTO room_class (
                                                                                        room_class_name,
                                                                                        room_class_description,
                                                                                        room_class_image,
                                                                                        status
                                                                                    ) VALUES ('$rc_name', '$rc_desciption','$rc_image', '$rc_status');";
                                                mysqli_query($conn, $sql);
                                                header('Location: room-class-management.php');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>

<?php ob_end_flush(); ?>