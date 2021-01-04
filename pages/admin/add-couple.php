<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" id="showSc">
                    <div class="card-body">
                        <h4 class="card-title">คำทำนายคู่เลข</h4>
                        <form id="form" method="post" action="pages/admin/save-couple.php">
                            <input type="hidden" id="id" name="id">

                            <p class="card-description"> คู่เลข
                            </p>

                            <input style="color: white;" class="typeahead" type="text" id="name" name="name" value="">
                            <br>
                            <p class="card-description"> รายละเอียด
                            </p>

                            <textarea style="color: white;" class="form-control" id="detail" name="detail" rows="6"></textarea>
                            <br>

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
                                    $sql = "SELECT * FROM pagesims  where status = 'C'  ORDER BY id asc   ";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>

                                                <td style="text-align:left; width: 20%;"> <?= $row["name"] ?> </td>
                                                <td style="text-align:left; width: 70%;"> <?= substr($row["detail"], 0, 250) ?>... </td>


                                                <td style="text-align:center">
                                                    <!-- 						id,cat,networkid,numbershow,priceinsim,baseprice,price,openday,closeday -->
                                                    <a title="แก้ไข" href="javascript:doEdit(
                                                        '<?= $row["id"] ?>',
                                                        '<?= $row["name"] ?>',
                                                        '<?= $row["detail"] ?>')">
                                                        <img src="img/edit-icon.png" width="30px" height="30px" /></a>&nbsp;
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
        function doEdit(id, name, detail) {

            document.getElementById("save").innerHTML = "แก้ไข";

            document.getElementById("id").value = id;
            document.getElementById("detail").value = detail;
            document.getElementById("name").value = name;
            $('html, body').animate({
                scrollTop: 0
            }, 'fast');

        }



        function doSave() {
            if (document.getElementById("name").value == "") {
                alert("กรุณากรอกหัวข้อ");
            } else if (document.getElementById("detail").value.trim == "") {
                alert("กรุณากรอกรายละเอียด");
            } else {
                if (confirm("ต้องการบันทึกข้อมูลหรือไม่")) {
                    document.getElementById("form").submit();
                }
            }

        }

        function dodelete(id) {
            if (confirm("ต้องการลบข้อมูลหรือไม่")) {
                window.location = "pages/admin/delete-couple.php?id=" + id;
            }
        }
    </script>