<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-2 col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form class="form-sample">
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
                                            <input type="text" style="color: white;" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">

                                        <label class="col-sm-3 col-form-label">เลือกหมวดซิม</label>
                                        <div class="col-sm-9">
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
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เลือกเครือข่าย</label>
                                        <div class="col-sm-9">
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
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เงินในซิม</label>
                                        <div class="col-sm-9">
                                            <input style="color: white;" class="typeahead" type="text" id="moneyInSim">
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
                                            <input style="color: white;" class="typeahead" type="text" id="baseprice">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ราคาขาย</label>
                                        <div class="col-sm-9">
                                            <input style="color: white;" class="typeahead" type="text" id="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">หมายเหตุ</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" style="color: white;" id="remark" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">บันทึก</button>
                            <button class="btn btn-dark">ยกเลิก</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bordered table</h4>
                        <p class="card-description"> Add class <code>.table-bordered</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> First name </th>
                                        <th> Progress </th>
                                        <th> Amount </th>
                                        <th> Deadline </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> Herman Beck </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <td> May 15, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td> Messsy Adam </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $245.30 </td>
                                        <td> July 1, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td> John Richards </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $138.00 </td>
                                        <td> Apr 12, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td> 4 </td>
                                        <td> Peter Meggik </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <td> May 15, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td> 5 </td>
                                        <td> Edward </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 160.25 </td>
                                        <td> May 03, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td> 6 </td>
                                        <td> John Doe </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 123.21 </td>
                                        <td> April 05, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td> 7 </td>
                                        <td> Henry Tom </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 150.00 </td>
                                        <td> June 16, 2015 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>