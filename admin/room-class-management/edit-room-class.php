<?php include('../../config.php') ?>
<?php
ob_start();

if (isset($_GET['id'])) {
    $rc_id = $_GET['id'];
    $sql = "SELECT * FROM room_class where room_class_id = $rc_id";
    $query = mysqli_query($conn, $sql);

    $result = array();
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
} else {
    $rc_id = '';
}
?>

<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin| Edit room class</title>
    <?php include('../common/head-link.php'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); 
        ?>
        <div class="app-main">
            <?php $page = 'room-class-management';
            include('../common/menu.php'); ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Chỉnh sửa loại phòng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_fname" class="">Tên loại phòng</label><input name="rc_name" id="exampleEmail11" placeholder="name placeholder" type="text" class="form-control" value="<?php if ($rc_id) echo $result['room_class_name']; ?>"></div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Mô tả loại phòng</label><input name="rc_description" id="examplePassword11" placeholder="description placeholder" type="text" class="form-control" value="<?php if ($rc_id) echo $result['room_class_description']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Hình ảnh </label><input name="rc_image" id="examplePassword11" placeholder="image placeholder" type="text" class="form-control" value="<?php if ($rc_id) echo $result['room_class_image']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Trạng thái</label><input name="rc_status" id="examplePassword11" placeholder="status placeholder" type="text" class="form-control" value="<?php if ($rc_id) echo $result['status']; ?>"></div>
                                                    </div>
                                                </div>
                                                <!-- <?php
                                                        if (isset($_SESSION['username'])) {
                                                            $user_name = $_SESSION['username'];
                                                            $sql2 = "SELECT * FROM Customer c inner join Account a on c.acc_id = a.acc_id WHERE acc_username = '$user_name'";
                                                            $query2 = mysqli_query($conn, $sql2);

                                                            $result2 = array();
                                                            $active = 0;
                                                            if (mysqli_num_rows($query2) > 0) {
                                                                $row2 = mysqli_fetch_assoc($query2);
                                                                $result2 = $row2;
                                                            }
                                                            if ($row2['role_name'] == 'ADMIN') {
                                                                echo '<div class="form-row">
                                                                    <div class="col-md-12">
                                                                        <div class="position-relative form-group"><label for="role_name" class="">Vai trò</label>
                                                                        <select class="mb-2 form-control" name="role_name" >
                                                                            <option value="ADMIN">Admin</option>
                                                                            <option value="GUESS">Guess</option>
                                                                            <option value="CASHIER">Cashier</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                                $active = 1;
                                                            }
                                                        }
                                                        ?> -->

                                                <button class="mt-2 btn btn-primary" type="submit">Update</button>
                                            </form>

                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $rc_name = $_POST['rc_name'];
                                                $rc_image = $_POST['rc_image'];
                                                $rc_description = $_POST['rc_description'];
                                                $rc_status = $_POST['rc_status'];
                                                $sql3 .= "update room_class set room_class_name='$rc_name', room_class_image='$rc_image', room_class_description = '$rc_description', 
                                                        status = '$rc_status' where room_class_id = " . $rc_id . ";";
                                                mysqli_query($conn, $sql3);
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