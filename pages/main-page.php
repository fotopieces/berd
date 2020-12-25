<div class="main-panel">
    <div class="content-wrapper">
        <?php
        if ($_GET['cat'] == "" && $_GET['net'] == "") { ?>
            <div class="row">
                <div class="col-md-2 col-xl-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                                <div class="item">
                                    <img src="img/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-2 col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">โปรแกรมทำนายเบอร์โทร</h4>

                        <form class="forms-sample">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="กรุณากรอกเบอร์โทร">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">ทำนาย</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-xl-8 grid-margin stretch-card d-none d-lg-flex">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ค้นหาเบอร์</h4>

                        <form class="forms-sample">
                            <div class="form-group">
                                <div class="form-inline">
                                    <input id="" type="text" style="width: 50px; color: white; text-align: center;" value="0" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                    <input type="text" style="width: 50px; color: white; text-align: center;" maxlength="1" class="form-control">&nbsp;&nbsp;&nbsp;
                                </div>
                                <div class="form-inline">
                                    เลือกเฉพาะบางเลข : &nbsp;
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 2 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 3 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 6 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 7 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 8 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 9 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    ผลรวม : &nbsp;

                                    <select class="form-control" style="color: white;">
                                        <option value="0">เลือกผลรวม</option>
                                        <?php for ($x = 8; $x <= 80; $x++) { ?>
                                            <option value="<?= $x ?>"><?= $x ?></option>
                                        <?php } ?>
                                    </select>&nbsp;&nbsp;

                                    ค้นหาบางเลข : &nbsp;
                                    <input style="color: white;" type="text" style="width: 100px;" maxlength="10" class="form-control" />

                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary mr-2">ค้นหาเบอร์</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $sql = "SELECT * FROM `catalogsims` WHERE random = " . $_GET['cat'];
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="row">
                    <div class="col-12" style="text-align: center;font-size: 20px;">
                        หมวดเบอร์ : <?= $row["name"] ?>
                    </div>
                </div>
            <?php
                break;
            }
        } else if ($_GET['net'] != "") { ?>
            <div class="row">
                <div class="col-12" style="text-align: center;font-size: 20px;">
                    หมวดเบอร์ : <?= $_GET['net'] ?>
                </div>
            </div>
        <?php
        } else if ($_GET['price'] != "") { ?>
            <div class="row">
                <div class="col-12" style="text-align: center;font-size: 20px;">
                    หมวดเบอร์ : <?= $_GET['price'] ?>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="row">

            <?php

            if ($_GET['cat'] == "" && $_GET['net'] == "" && $_GET['price'] == "") {
                $sql = "SELECT * FROM numbersims where status = 'Y' ORDER BY RAND() LIMIT 52 ";
            } else if ($_GET['cat'] != "") {
                $sql = "SELECT * FROM numbersims where status = 'Y' and catalogid like '%" . $_GET['cat'] . "%' ";
            } else if ($_GET['net'] != "") {
                $sql = "SELECT * FROM numbersims where status = 'Y' and networkid like '%" . $_GET['net'] . "%' ";
            } else if ($_GET['price'] != "") {
                $p = explode("-", $_GET['price']);
                $sql = "SELECT * FROM numbersims where status = 'Y' and price BETWEEN " . $p[0] . " AND " . $p[1];
            }

            //echo $sql;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12" style="text-align: center;">
                                        <?php
                                        if ($row["networkid"] == "AIS") { ?>
                                            <img src="img/a.png" width="60px">
                                        <?php } else if ($row["networkid"] == "True") { ?>
                                            <img src="img/t.png" width="60px">
                                        <?php } else { ?>
                                            <img src="img/dt.png" width="60px">
                                        <?php } ?>
                                    </div>
                                    <div class="col-12">
                                        <div class=" align-items-center align-self-start" style="text-align: center;">
                                            <h3 class="mb-0"><?= colornumber($row["numbershow"]) ?> </h3>
                                            <br>
                                        </div>
                                        <div class="align-items-center align-self-start" style="text-align: center;">
                                            <p class="text-success  mb-0 font-weight-medium">ผลรวม <?= $row["sum"] ?><?php if ($row["price"] != 0) { ?> ราคา <?= $row["price"] ?> บาท <?php } ?></p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal" style="text-align: center;">สวยดีราคาถูก</h6>
                            </div>
                        </div>
                    </div>
            <?php   }
            } ?>

        </div>
    </div>