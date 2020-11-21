<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-2 col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">เพิ่มเบอร์</h4>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label>เลือกหมวดซิม</label>
                                <select id="selectSimType" class="js-example-basic-multiple" multiple="multiple" style="width:100%">
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
                            <div class="form-group">
                                <label>เลือกเครือข่าย</label>
                                <select class="js-example-basic-single" style="width:100%">
                                    <option value="0">กรุณาเลือก</option>
                                    <?php
                                    $result = $conn->query("SELECT * FROM networksims order by name asc");
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <option value="<?= $row["id"]; ?>"><?= $row["name"]; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>

                            </div>



                            <div class="form-group">

                                <div class="col" style="padding-left: 0px;">
                                    <label>เงินในซิม</label>
                                    <div id="the-basics">
                                        <input style="color: white;" class="typeahead" type="text" id="moneyInSim">
                                    </div>
                                </div>
                                <br>
                                <div class="col" style="padding-left: 0px;">
                                    <label>เงินในซิม</label>
                                    <div id="the-basics">
                                        <input style="color: white;" class="typeahead" type="text">
                                    </div>
                                </div>
                                <br>
                                <div class="col" style="padding-left: 0px;">
                                    <button id="btAddNumber" type="button" class="btn btn-primary mr-2">ค้นหาเบอร์</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>