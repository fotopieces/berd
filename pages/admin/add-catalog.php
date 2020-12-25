<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" id="showSc">
                    <div class="card-body">
                        <h4 class="card-title">หมวดเบอร์โทร</h4>
                        <form id="form" method="post" action="pages/admin/save-catalog.php">
                            <input type="hidden" id="id" name="id">

                            <p class="card-description"> ชื่อหมวด
                            </p>
                            <input style="color: white;" class="typeahead" type="text" id="name" name="name" value="">
                            <br>
                            <select id="status" name="status" style="background-color: #2a3038;width:100%;color: white; height: 35px;">
                                <option value="0">กรุณาเลือก</option>
                                <option value="Y">ใช้งาน</option>
                                <option value="N">ไม่ใช้งาน</option>

                            </select>
                            <br>
                            <br>
                            <button type="button" onclick="doSave()" id="save" class="btn btn-primary mr-2">บันทึก</button>
                            <button onclick="javascript:window.location.reload()" class="btn btn-dark">ยกเลิก</button>
                        </form>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM catalogsims  ORDER BY id DESC  ";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>

                                                <td style="text-align:left"> <?= $row["name"] ?> </td>
                                                <td style="text-align:left"> <?= $row["status"] == "Y" ? "ใช้งาน" : "ไม่ใช้งาน" ?> </td>

                                                <td style="text-align:center">
                                                    <!-- 						id,cat,networkid,numbershow,priceinsim,baseprice,price,openday,closeday -->
                                                    <a title="แก้ไข" href="javascript:doEdit(
                                                        '<?= $row["id"] ?>',
                                                        '<?= $row["name"] ?>',
                                                        '<?= $row["status"] ?>')">
                                                        <img src="img/edit-icon.png" width="30px" height="30px" /></a>&nbsp;

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
        function doEdit(id, name, status) {

            document.getElementById("save").innerHTML = "แก้ไข";

            document.getElementById("id").value = id;
            document.getElementById("status").value = status;
            document.getElementById("name").value = name;
            $('html, body').animate({
                scrollTop: 0
            }, 'fast');

        }



        function doSave() {
            if (document.getElementById("name").value == "") {
                alert("กรุณากรอกชื่อ");
            } else if (document.getElementById("status").value == "0") {
                alert("กรุณาเลือกสถานะการใช้งาน");
            } else {
                if (confirm("ต้องการบันทึกข้อมูลหรือไม่")) {
                    document.getElementById("form").submit();
                }
            }

        }
    </script>