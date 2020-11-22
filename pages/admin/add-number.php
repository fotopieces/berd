<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-2 col-xl-12 grid-margin stretch-card">

                <div class="card">
                    <div class="card-body">
                        <form id="addNumber" method="post" action="pages/admin/save-number.php">
                            <input type="hidden" id="id" name="id">
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
                                            <input id="number" name="number" type="text" style="color: white;" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">

                                        <label class="col-sm-3 col-form-label">เลือกหมวดซิม</label>
                                        <div class="col-sm-9">
                                            <select id="cat" name="cat" class="js-example-basic-multiple" multiple="multiple" style="width:100%">
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
                                            <select id="networks" name="network" class="js-example-basic-single" style="width:100%">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เงินในซิม</label>
                                        <div class="col-sm-9">
                                            <input style="color: white;" class="typeahead" type="text" id="priceinsim" name="priceinsim">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">วันที่เปิด</label>
                                        <div class="col-sm-9">
                                            <input style="background-color: #2a3038;color: white;" name="openday" type="text" id="openday" readonly="readonly" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">วันหมดอายุ</label>
                                        <div class="col-sm-9">
                                            <input style="background-color: #2a3038;color: white;" name="closeday" type="text" id="closeday" readonly="readonly" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ราคาต้นทุน</label>
                                        <div class="col-sm-9">
                                            <input style="color: white;" class="typeahead" type="text" id="baseprice" name="baseprice">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ราคาขาย</label>
                                        <div class="col-sm-9">
                                            <input style="color: white;" class="typeahead" type="text" id="price" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">หมายเหตุ</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" style="color: white;" id="remark" rows="4" name="remark"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" onclick="doSave()" id="btAddNumber" class="btn btn-primary mr-2">บันทึก</button>
                            <button class="btn btn-dark">ยกเลิก</button>
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
                                                <td style="text-align:center"> เงินในซิม</br>(<font color="red"> <?= $row["priceinsim"] ?> ฿</font>) </td>
                                                <td style="text-align:center"> ต้นทุน</br>(<font color="red"> <?= $row["baseprice"] ?> ฿</font>) </td>
                                                <td style="text-align:center"> ขาย</br>( <font color="red"><?= $row["price"] ?> ฿</font>)</td>
                                                <td style="text-align:center"> เปิดก่อนวันที่</br>(<font color="green"> <?= todate($row["openday"]) ?> </font>) </td>
                                                <td style="text-align:center"> หมดอายุ</br>(<font color="red"> <?= todate($row["closeday"]) ?> </font>) </td>
                                                <td style="text-align:center"> วันขาย</br>(<font color="red"> <?= todate($row["soldday"]) ?> </font>) </td>
                                                <td align="center" style="width: 15%">
                                                    <!-- 						id,cat,networkid,numbershow,priceinsim,baseprice,price,openday,closeday -->
                                                    <a title="แก้ไข"><img src="img/edit-icon.png" width="30px" height="30px" /></a>&nbsp;
                                                    <a title="ขาย"><img src="img/s.png" width="30px" height="30px" /></a>&nbsp;
                                                    <a title="กลับมาขายใหม่"><img src="img/re.png" width="30px" height="30px" /></a>&nbsp;
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
        function dodelete(id) {
            if (confirm("ต้องการลบข้อมูลหรือไม่")) {
                window.location = "pages/admin/delete-number.php?id=" + id;
            }
        }

        function doSave() {
            var data = "";
            if (document.getElementById("number").value == "") {
                alert("กรุณากรอกเบอร์โทร");
            } else if (document.getElementById("cat").value == "") {
                alert("กรุณาเลือกหมวดซิม");
            } else if (document.getElementById("networks").value == "0") {
                alert("กรุณาเลือกเครือข่าย");
            } else if (document.getElementById("priceinsim").value == "") {
                alert("กรุณากรอกยอดเงินในซิม");
            } else if (document.getElementById("openday").value == "") {
                alert("กรุณาเลือกวันที่เปิดซิม");
            } else if (document.getElementById("closeday").value == "") {
                alert("กรุณาเลือกวันที่ซิมหมดอายุ");
            } else if (document.getElementById("baseprice").value == "") {
                alert("กรุณากรอกราคาต้นทุน");
            } else if (document.getElementById("price").value == "") {
                alert("กรุณากรอกราคา");
            } else {
                if (confirm("ต้องการบันทึกข้อมูลหรือไม่")) {
                    document.getElementById("addNumber").submit();
                }
            }

        }
    </script>