<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-2 col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">โปรแกรมทำนายเบอร์โทร</h4>

                        <form class="forms-sample">
                            <div class="form-group">
                                <input style="color: white;" type="text" id="num" class="form-control" id="exampleInputName1" placeholder="กรุณากรอกเบอร์โทร">
                            </div>
                            <button type="button" onclick="sendNum()" class="btn btn-primary mr-2">ทำนาย</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-md-2 col-xl-12 grid-margin stretch-card ">
                <div class="card">
                    <div class="card-body">
                        <h1 style="text-align:center" class="card-title">หมายเลข : <?= $_GET['number'] ?></h1>

                        <h2 style="text-align:center" class="card-title">
                            <?php
                            $number = $_GET['number'];
                            $nn0 = substr($number, 0, 3);
                            $nn1 = substr($number, 3, 2);
                            $nn2 = substr($number, 4, 2);
                            $nn3 = substr($number, 5, 2);
                            $nn4 = substr($number, 6, 2);
                            $nn5 = substr($number, 7, 2);
                            $nn6 = substr($number, 8, 2);
                            $len = strlen($number);
                            $sum = 0;
                            $count = 0;
                            while ($count < $len) {
                                $sum = $sum + $number[$count];
                                $count++;
                            }

                            echo $nn0 . "-"
                                . $nn1 . " "
                                . $nn2 . " "
                                . $nn3 . " "
                                . $nn4 . " "
                                . $nn5 . " "
                                . $nn6 . " " . "  ( ผลรวม : " . $sum . ")";
                            // echo countGoodNumber($number);
                            ?></h2>
                        <h6 style="text-align:center" class="card-title">
                            <?= printStar($number) ?>
                        </h6>
                        <h3 style="text-align:center" class="card-title"><?= printG($number) ?></h3>
                        <?php
                        $sql = "SELECT * FROM pagesims  where status = 'S' and name = '" . $sum . "'  ORDER BY id asc   ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div>
                                    ผลรวม : <?= $row["name"]; ?>
                                </div>
                                <div>
                                    <?= $row["detail"]; ?>
                                </div>
                                <br>

                        <?php
                            }
                        } ?>
                        <?php
                        $sql = "SELECT * FROM pagesims  where status = 'C' and name = '" . $nn1 . "'  ORDER BY id asc   ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div>
                                    เลข : <?= $row["name"]; ?>
                                </div>
                                <div>
                                    <?= $row["detail"]; ?>
                                </div>
                                <br>

                        <?php
                            }
                        } ?>
                        <?php
                        $sql = "SELECT * FROM pagesims  where status = 'C' and name = '" . $nn2 . "'  ORDER BY id asc   ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div>
                                    เลข : <?= $row["name"]; ?>
                                </div>
                                <div>
                                    <?= $row["detail"]; ?>
                                </div>
                                <br>

                        <?php
                            }
                        } ?>
                        <?php
                        $sql = "SELECT * FROM pagesims  where status = 'C' and name = '" . $nn3 . "'  ORDER BY id asc   ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div>
                                    เลข : <?= $row["name"]; ?>
                                </div>
                                <div>
                                    <?= $row["detail"]; ?>
                                </div>
                                <br>

                        <?php
                            }
                        } ?>
                        <?php
                        $sql = "SELECT * FROM pagesims  where status = 'C' and name = '" . $nn4 . "'  ORDER BY id asc   ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div>
                                    เลข : <?= $row["name"]; ?>
                                </div>
                                <div>
                                    <?= $row["detail"]; ?>
                                </div>
                                <br>

                        <?php
                            }
                        } ?>
                        <?php
                        $sql = "SELECT * FROM pagesims  where status = 'C' and name = '" . $nn5 . "'  ORDER BY id asc   ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div>
                                    เลข : <?= $row["name"]; ?>
                                </div>
                                <div>
                                    <?= $row["detail"]; ?>
                                </div>
                                <br>

                        <?php
                            }
                        } ?>
                        <?php
                        $sql = "SELECT * FROM pagesims  where status = 'C' and name = '" . $nn6 . "'  ORDER BY id asc   ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div>
                                    เลข : <?= $row["name"]; ?>
                                </div>
                                <div>
                                    <?= $row["detail"]; ?>
                                </div>
                                <br>

                        <?php
                            }
                        } ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function sendNum() {
            var num = document.getElementById("num").value;
            var n = num.length;
            if (n != 10) {
                alert("กรุณากรอกหมายเลขให้ครบ");
            } else {
                window.location = "?page=ans&number=" + num;
            }

        }
    </script>