<div class="main-panel">
    <div class="content-wrapper">
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
            <div class="col-md-2 col-xl-8 grid-margin stretch-card">
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
                                        <?php for ($x = 8; $x <= 80; $x++) { ?>
                                            <option><?= $x ?></option>
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
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12" style="text-align: center;">
                                <img src="img/dt.png" width="60px">
                            </div>
                            <div class="col-12">
                                <div class=" align-items-center align-self-start" style="text-align: center;">
                                    <h3 class="mb-0">092-6164466</h3>
                                    <br>
                                </div>
                                <div class="align-items-center align-self-start" style="text-align: center;">
                                    <p class="text-success  mb-0 font-weight-medium">ผลรวม 50 ราคา 2500 บาท </p>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal" style="text-align: center;">สวยดีราคาถูก</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12" style="text-align: center;">
                                <img src="img/a.png" width="60px">
                            </div>
                            <div class="col-12">
                                <div class=" align-items-center align-self-start" style="text-align: center;">
                                    <h3 class="mb-0">092-6164466</h3>
                                    <br>
                                </div>
                                <div class="align-items-center align-self-start" style="text-align: center;">
                                    <p class="text-success  mb-0 font-weight-medium">ผลรวม 50 ราคา 2500 บาท </p>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal" style="text-align: center;">พลังก้าวหน้าและเสน่ห์</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12" style="text-align: center;">
                                <img src="img/t.png" width="60px">
                            </div>
                            <div class="col-12">
                                <div class=" align-items-center align-self-start" style="text-align: center;">
                                    <h3 class="mb-0">092-6164466</h3>
                                    <br>
                                </div>
                                <div class="align-items-center align-self-start" style="text-align: center;">
                                    <p class="text-success  mb-0 font-weight-medium">ผลรวม 50 ราคา 2500 บาท </p>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal" style="text-align: center;">พลังก้าวหน้าและเสน่ห์</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12" style="text-align: center;">
                                <img src="img/t.png" width="60px">
                            </div>
                            <div class="col-12">
                                <div class=" align-items-center align-self-start" style="text-align: center;">
                                    <h3 class="mb-0">092-6164466</h3>
                                    <br>
                                </div>
                                <div class="align-items-center align-self-start" style="text-align: center;">
                                    <p class="text-success  mb-0 font-weight-medium">ผลรวม 50 ราคา 2500 บาท </p>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal" style="text-align: center;">พลังก้าวหน้าและเสน่ห์</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>