<?php include('../../config.php') ?>
<?php
ob_start();

if (isset($_GET['id'])) {
    $room_id = $_GET['id'];
    $sql = "SELECT * FROM room r inner join room_class rc
                on r.room_class_id = rc.room_class_id 
                where room_id = $room_id";
    $query = mysqli_query($conn, $sql);

    $result = array();

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    } else {
        $room_id = '';
    }
}
?>

<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin| Edit room</title>
    <?php include('../common/head-link.php'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); 
        ?>
        <div class="app-main">
            <?php $page = 'room-management';
            include('../common/menu.php'); ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Chỉnh sửa phòng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="cus_fname" class="">Tên phòng</label>
                                                            <input name="room_name" id="exampleEmail11" placeholder="name placeholder" type="text" class="form-control" value="<?php if ($room_id) echo $result['room_name']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="cus_lname" class="">Mô tả phòng</label>
                                                            <input name="room_description" id="examplePassword11" placeholder="description placeholder" type="text" class="form-control" value="<?php if ($room_id) echo $result['room_description']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="cus_lname" class="">Giá phòng</label>
                                                            <input name="room_price" id="examplePassword11" placeholder="place placeholder" type="text" class="form-control" value="<?php if ($room_id) echo $result['room_price']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="cus_lname" class="">Hình ảnh phòng</label>
                                                            <input name="room_image" id="examplePassword11" placeholder="room image placeholder" type="text" class="form-control" value="<?php if ($room_id) echo $result['room_class_image']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="cus_lname" class="">Trạng thái</label>
                                                            <input name="room_status" id="examplePassword11" placeholder="status placeholder" type="text" class="form-control" value="<?php if ($room_id) echo $result['status']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="room_class_name" class="">Loại phòng</label><br>
                                                        <!-- <div class="position-relative form-group"><input name="room_class_id" id="examplePassword11" placeholder="description placeholder" type="text"> -->
                                                        <?php
                                                        $sql = "SELECT * FROM room_class";
                                                        $query = mysqli_query($conn, $sql);
                                                        $i = 0;
                                                        if ($query) {
                                                            echo "<select class=\"col-md-6\" name = \"room_class\">";
                                                            foreach ($query as $item) {
                                                                $i++;
                                                                $rc_name = $item['room_class_name'];
                                                                $rc_id = $item['room_class_id'];
                                                                echo "<option value =\"$rc_id\">" . $rc_name . "</option>";
                                                            }
                                                            echo '</select>';
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                        </div>

                                        <button class="mt-2 btn btn-primary" type="submit">Update</button>
                                        </form>

                                        <?php
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            $room_name = $_POST['room_name'];
                                            $room_image = $_POST['room_image'];
                                            $room_description = $_POST['room_description'];
                                            $room_price = $_POST['room_price'];
                                            $room_image = $_POST['room_image'];
                                            $room_class_id = $_POST['room_class'];
                                            $room_status = $_POST['room_status'];
                                            $sql3 = "update room set room_name='$room_name', 
                                                        room_class_image='$room_image', room_description = '$room_description', 
                                                        status = '$room_status', room_price = $room_price, 
                                                        room_class_id = $room_class_id
                                                        where room_id = " . $room_id . ";";
                                            mysqli_query($conn, $sql3);
                                            header('Location: room-management.php');
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