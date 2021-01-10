<div class="main-panel" style="padding-top: 0px;">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-2 col-xl-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="padding-top: 5px;padding-bottom: 5px;padding-right: 5px;padding-left: 5px;">
                        <h4 class="card-title">โปรแกรมทำนายเบอร์โทร</h4>

                        <form class="forms-sample">
                            <div class="form-group">
                                <input style="color: white;" type="text" id="num" class="form-control" id="exampleInputName1" placeholder="กรุณากรอกเบอร์โทร">
                            </div>
                            <button type="button" onclick="sendNum()" class="btn btn-primary mr-2">ทำนาย</button>
                        </form>
                        <br>


                    </div>
                </div>
            </div>
            <div class="col-md-2 col-xl-6 grid-margin stretch-card d-lg-flex">
                <div class="card ">
                    <div class="card-body" style="padding-top: 5px;padding-bottom: 5px;padding-right: 5px;padding-left: 5px;">
                        <h4 class="card-title">ค้นหาเบอร์</h4>

                        <form class="forms-sample" id="formSearch">
                            <input type="hidden" name="search" value="search">
                            <div class="form-group">

                                <div class="form-inline">

                                    <input id="n0" name="n0" type="text" style="width: 28px; color: white; text-align: center; background-color: #2A3038;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" disabled value="0" maxlength="1" class="form-control">&nbsp;
                                    <input id="n1" name="n1" value="<?= $_GET['n1'] ?>" onkeyup="dofucus(2,this)" type="text" style="background-color: #2A3038; width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control">&nbsp;
                                    <input id="n2" name="n2" value="<?= $_GET['n2'] ?>" onkeyup="dofucus(3,this)" type="text" style=" background-color: #2A3038; width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control"> -
                                    <input id="n3" name="n3" value="<?= $_GET['n3'] ?>" onkeyup="dofucus(4,this)" type="text" style="background-color: #2A3038; width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control">&nbsp;
                                    <input id="n4" name="n4" value="<?= $_GET['n4'] ?>" type="text" onkeyup="dofucus(5,this)" style="background-color: #2A3038; width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control">&nbsp;
                                    <input id="n5" name="n5" value="<?= $_GET['n5'] ?>" type="text" onkeyup="dofucus(6,this)" style="background-color: #2A3038; width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control">&nbsp;
                                    <input id="n6" name="n6" value="<?= $_GET['n6'] ?>" type="text" onkeyup="dofucus(7,this)" style="background-color: #2A3038; width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control">&nbsp;
                                    <input id="n7" name="n7" value="<?= $_GET['n7'] ?>" type="text" onkeyup="dofucus(8,this)" style="background-color: #2A3038; width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control">&nbsp;
                                    <input id="n8" name="n8" value="<?= $_GET['n8'] ?>" type="text" onkeyup="dofucus(9,this)" style="background-color: #2A3038; width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control">&nbsp;
                                    <input id="n9" name="n9" value="<?= $_GET['n9'] ?>" type="text" onkeyup="dofucus(9,this)" style="width: 28px; color: white; text-align: center;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;" maxlength="1" class="form-control">
                                </div>

                                <!-- <div class="form-inline">
                                    เลือกเฉพาะบางเลข : &nbsp;
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck0" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck1" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck2" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 2 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck3" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 3 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck4" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck5" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck6" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 6 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck7" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 7 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck8" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 8 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input id="ck9" type="checkbox" class="form-check-input">&nbsp;&nbsp;&nbsp; 9 &nbsp;&nbsp;&nbsp; <i class="input-helper"></i></label>
                                    </div>
                                </div> -->
                                <br>
                                <div class="form-inline">
                                    ผลรวม : &nbsp;

                                    <select class="form-control" name="sum" style="color: white;">
                                        <option value="0">เลือกผลรวม</option>
                                        <?php for ($x = 8; $x <= 80; $x++) { ?>
                                            <option <?php if ($_GET['sum'] == $x) { ?> selected <?php } ?> value="<?= $x ?>"><?= $x ?></option>
                                        <?php } ?>
                                    </select>&nbsp;&nbsp;

                                    ค้นหาบางเลข : &nbsp;
                                    <input name="anyNum" value="<?= $_GET['anyNum'] ?>" style="color: white;" type="text" style="width: 100px;" maxlength="10" class="form-control" />

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

        if ($_GET['cat'] != "") {
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
        } else if ($_GET['search'] != "") { ?>


            <div class="row">
                <div class="col-12" style="text-align: center;font-size: 20px;">
                    ผลการค้นหา
                </div>
            </div>


        <?php } ?>
        <div class="row">

            <?php
            $sql = "SELECT * FROM numbersims where status = 'Y' ORDER BY RAND() LIMIT 52 ";
            if ($_GET['cat'] != "") {
                $sql = "SELECT * FROM numbersims where status = 'Y' and catalogid like '%" . $_GET['cat'] . "%' ";
            } else if ($_GET['net'] != "") {
                $sql = "SELECT * FROM numbersims where status = 'Y' and networkid like '%" . $_GET['net'] . "%' ";
            } else if ($_GET['price'] != "") {
                $p = explode("-", $_GET['price']);
                $sql = "SELECT * FROM numbersims where status = 'Y' and price BETWEEN " . $p[0] . " AND " . $p[1];
            } else if ($_GET['search'] != "") {

                if ($_GET['sum'] != "" && $_GET['sum'] != "0") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and sum = '" . $_GET['sum'] . "' ";
                }
                if (trim($_GET['anyNum']) != "") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and number like '%" . trim($_GET['anyNum']) . "%' ";
                }
                if (trim($_GET['n1']) != "" || trim($_GET['n2']) != "") {
                    $sql = checkSql($sql);
                    if (trim($_GET['n1']) != "" && trim($_GET['n2']) != "") {
                        $sql = $sql . " and stwith like '%0" . trim($_GET['n1']) . trim($_GET['n2']) . "%' ";
                    } else {
                        $sql = $sql . " and stwith like '%" . trim($_GET['n1']) . trim($_GET['n2']) . "%' ";
                    }
                }
                if (trim($_GET['n3']) != "") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and n1 = '" . $_GET['n3'] . "' ";
                }
                if (trim($_GET['n4']) != "") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and n2 = '" . $_GET['n4'] . "' ";
                }
                if (trim($_GET['n5']) != "") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and n3 = '" . $_GET['n5'] . "' ";
                }
                if (trim($_GET['n6']) != "") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and n4 = '" . $_GET['n6'] . "' ";
                }
                if (trim($_GET['n7']) != "") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and n5 = '" . $_GET['n7'] . "' ";
                }
                if (trim($_GET['n8']) != "") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and n6 = '" . $_GET['n8'] . "' ";
                }
                if (trim($_GET['n9']) != "") {
                    $sql = checkSql($sql);
                    $sql = $sql . " and n7 = '" . $_GET['n9'] . "' ";
                }
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
                                    <div class="col-12" style="cursor: pointer" onclick="doAns(<?= $row['number'] ?>)">
                                        <div class=" align-items-center align-self-start" style="text-align: center;">
                                            <h3 class="mb-0"><?= colornumber($row["numbershow"]) ?> </h3>

                                        </div>
                                        <div class="align-items-center align-self-start" style="text-align: center;">
                                            <p class="text-success  mb-0 font-weight-medium">ผลรวม <?= $row["sum"] ?><?php if ($row["price"] != 0) { ?> ราคา <?= $row["price"] ?> บาท <?php } ?></p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal" style="text-align: center;">
                                    <br>
                                    <a target="_blank" href="https://line.me/ti/p/~jangprogram2554">
                                        <img src="img/ll.png" height="35px">
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
            <?php   }
            } ?>

        </div>
    </div>
    <script>
        function doAns(number) {
            window.location = "?page=ans&number=0" + number;
        }

        function findNum() {
            var num = document.getElementById("find").value;
            window.location = "?search=search&n1=&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&sum=0&anyNum=" + num;

        }

        function sendNum() {
            var num = document.getElementById("num").value;
            var n = num.length;
            if (n != 10) {
                alert("กรุณากรอกหมายเลขให้ครบ");
            } else {
                window.location = "?page=ans&number=" + num;
            }

        }

        function dofucus(n, val) {

            //$("#"+txt).trigger("focus");
            //document.getElementById(txt).focus(); 
            document.getElementById(val.id).value = val.value;
            //alert(val.value);
            if (val.value == "" && n != 9) {
                $("#n" + n - 1).trigger("focus");
            } else {
                $("#n" + n).trigger("focus");
            }

        }
    </script>