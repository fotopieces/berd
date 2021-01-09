<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-2 col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="importNumber" method="post" action="pages/admin/save-import.php">

                            <input type="hidden" id="id" name="id">
                            <input type="hidden" id="cats" name="cats">
                            <p class="card-description">
                            <h4 class="card-title">เพิ่มเบอร์</h4>
                            <font color="red">ใส่ * หน้าหลังหากต้องการสีแดง</font>&nbsp&nbsp&nbsp

                            <font color="green">ใส่ @ หน้าหลังหากต้องการสีเขียว</font>&nbsp&nbsp&nbsp

                            <font color="orange">ใส่ # หน้าหลังหากต้องการสีเหลือง</font>
                            </p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="exampleTextarea1">เบอร์โทร,ราคา,วันหมดอายุ m/yy,ลำดับ</label>
                                            <br>
                                            <label for="exampleTextarea1">ตัวอย่าง : 0926164466,2000,4/21,001</label>
                                            <textarea class="form-control" style="color: white;line-height: 16pt" id="data" rows="10" name="data"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">

                                        <label class="col-sm-3 col-form-label">เลือกหมวดซิม</label>
                                        <div class="col-sm-9">
                                            <select id="cat" name="cat" multiple="multiple" style="background-color: #2a3038;height: 200px; width:100%;color: white; ">
                                                <?php
                                                $result = $conn->query("SELECT * FROM catalogsims");
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                                        <option value="<?= $row["random"]; ?>"><?= $row["name"]; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เลือกเครือข่าย</label>
                                        <div class="col-sm-9">
                                            <select id="networks" name="network" style="background-color: #2a3038;width:100%;color: white; ">
                                                <option value="0">กรุณาเลือก</option>
                                                <?php
                                                $result = $conn->query("SELECT * FROM networksims order by name asc");
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                                        <option value="<?= $row["name"]; ?>"><?= $row["name"]; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" onclick="doSave()" id="btAddNumber" class="btn btn-primary mr-2">บันทึก</button>
                            <button onclick="javascript:window.location.reload()" class="btn btn-dark">ยกเลิก</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" id="showSc">
                    <div class="card-body">
                        <h4 class="card-title">รายการเบอร์</h4>
                        <p class="card-description"> ค้นหา <code>กรอกหมายเลขเพื่อค้นหา</code>
                        </p>
                        <form id="sc" method="post">
                            <input style="color: white;" class="typeahead" type="number" id="scNum" name="scNum" value="<?= $_POST["scNum"] ?>">
                        </form>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <?php
                                    $sql = "";
                                    if (trim($_POST["scNum"]) == "") {
                                        $sql = "SELECT * FROM numbersims  ORDER BY id DESC LIMIT 10 ";
                                    } else {
                                        $sql = "SELECT * FROM numbersims where number like '%" . $_POST["scNum"] . "%' LIMIT 10";
                                    }

                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>

                                                <td style="text-align:center"> <?= $row["number"] ?> </td>
                                                <td style="text-align:center"> ลำดับ</br>(<font color="red"> <?= $row["seq"] ?> </font>) </td>
                                                <td style="text-align:center"> ราคาขาย</br>( <font color="red"><?= $row["price"] ?> ฿</font>)</td>
                                                <td style="text-align:center"> วันหมดอายุ</br>(<font color="red"> <?= $row["priceinsim"] ?> </font>) </td>
                                                <td style="text-align:center"> วันเพิ่มข้อมูล</br>(<font color="red"> <?= todate($row["closeday"]) ?> </font>) </td>
                                                <td style="text-align:center"> วันขาย</br>(<font color="red"> <?= todate($row["soldday"]) ?> </font>) </td>
                                                <td align="center" style="width: 15%">
                                                    <!-- 						id,cat,networkid,numbershow,priceinsim,baseprice,price,openday,closeday -->

                                                    <a title="ลบ" href="javascript:dodelete('<?= $row["id"] ?>')"><img src="img/d.png" width="30px" height="30px" /></a>&nbsp;

                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function getSelectValues(select) {
            var result = [];
            var options = select && select.options;
            var opt;

            for (var i = 0, iLen = options.length; i < iLen; i++) {
                opt = options[i];

                if (opt.selected) {
                    result.push(opt.value || opt.text);
                }
            }
            return result;
        }

        function dodelete(id) {
            if (confirm("ต้องการลบข้อมูลหรือไม่")) {
                window.location = "pages/admin/delete-import.php?id=" + id;
            }
        }

        function doSave() {
            var data = "";

            document.getElementById("cats").value = getSelectValues(document.getElementById("cat"));

            if (document.getElementById("data").value == "") {
                alert("กรุณากรอกข้อมูลเบอร์");
            } else if (document.getElementById("cat").value == "") {
                alert("กรุณาเลือกหมวดซิม");
            } else if (document.getElementById("networks").value == "0") {
                alert("กรุณาเลือกเครือข่าย");
            } else {
                if (confirm("ต้องการบันทึกข้อมูลหรือไม่")) {
                    document.getElementById("importNumber").submit();
                }
            }

        }
    </script>