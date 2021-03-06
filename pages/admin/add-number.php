<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-2 col-xl-12 grid-margin stretch-card">

                <div class="card">
                    <div class="card-body">
                        <form id="addNumber" method="post" action="pages/admin/save-number.php">
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
                            <div class="row" style="display: none;">
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
                                            <input style="color: white;" class="typeahead" type="text" id="priceinsim" name="priceinsim">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ราคาขาย</label>
                                        <div class="col-sm-9">
                                            <input style="color: white;" class="typeahead" type="text" id="price" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="display: none;">
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
                                        <label class="col-sm-3 col-form-label">ลำดับ</label>
                                        <div class="col-sm-9">
                                            <input style="color: white;" class="typeahead" type="text" id="seq" name="seq">
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
                            <br>
                            <button type="submit" id="srcbt" class="btn btn-primary mr-2">ค้นหา</button>
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
                                                    <a title="แก้ไข" href="javascript:doEdit(
                                                        '<?= $row["id"] ?>',
                                                        '<?= $row["catalogid"] ?>',
                                                        '<?= $row["networkid"] ?>',
                                                        '<?= $row["numbershow"] ?>',
                                                        '<?= $row["priceinsim"] ?>',
                                                        '<?= $row["baseprice"] ?>',
                                                        '<?= $row["price"] ?>',
                                                        '<?= todate($row["openday"]) ?>',
                                                        '<?= todate($row["closeday"]) ?>',
                                                        '<?= $row["remark"] ?>',
                                                        '<?= $row["seq"] ?>')">
                                                        <img src="img/edit-icon.png" width="30px" height="30px" /></a>&nbsp;
                                                    <a title="ขาย" href="javascript:doSold('<?= $row["id"] ?>')"><img src="img/s.png" width="30px" height="30px" /></a>&nbsp;
                                                    <a title="กลับมาขายใหม่" href="javascript:doReSell('<?= $row["id"] ?>')"><img src="img/re.png" width="30px" height="30px" /></a>&nbsp;
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

        function doEdit(id, cat, networkid, numbershow, priceinsim, baseprice, price, openday, closeday, remark, seq) {


            var testArray = cat.split(',');
            $('#cat').val(testArray);

            document.getElementById("btAddNumber").innerHTML = "แก้ไข";

            document.getElementById("id").value = id;
            document.getElementById("networks").value = "" + networkid + "";



            document.getElementById("number").value = numbershow;
            document.getElementById("priceinsim").value = priceinsim;
            document.getElementById("baseprice").value = baseprice;
            document.getElementById("price").value = price;
            document.getElementById("openday").value = openday;
            document.getElementById("closeday").value = closeday;
            document.getElementById("remark").value = remark;
            document.getElementById("seq").value = seq;
            $('html, body').animate({
                scrollTop: 0
            }, 'fast');
        }

        function dodelete(id) {
            if (confirm("ต้องการลบข้อมูลหรือไม่")) {
                window.location = "pages/admin/delete-number.php?id=" + id;
            }
        }

        function doSold(id) {
            if (confirm("ต้องการขายหมายเลขนี้หรือไม่")) {
                window.location = "pages/admin/sold-number.php?id=" + id;
            }
        }

        function doReSell(id) {
            if (confirm("ต้องการนำกลับมาขายใหม่หรือไม่")) {
                window.location = "pages/admin/resell-number.php?id=" + id;
            }
        }

        function doSave() {
            var data = "";

            document.getElementById("cats").value = getSelectValues(document.getElementById("cat"));

            if (document.getElementById("number").value == "") {
                alert("กรุณากรอกเบอร์โทร");
            } else if (document.getElementById("cat").value == "") {
                alert("กรุณาเลือกหมวดซิม");
            } else if (document.getElementById("networks").value == "0") {
                alert("กรุณาเลือกเครือข่าย");
            } else if (document.getElementById("priceinsim").value == "") {
                alert("กรุณากรอกวันหมดอายุ");
            } else if (document.getElementById("price").value == "") {
                alert("กรุณากรอกราคา");
            } else if (document.getElementById("seq").value == "") {
                alert("กรุณาลำดับ");
            } else {
                if (confirm("ต้องการบันทึกข้อมูลหรือไม่")) {
                    document.getElementById("addNumber").submit();
                }
            }

        }
    </script>