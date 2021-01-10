<nav class="navbar p-0 fixed-top d-flex flex-row" style="left: 0px; height: 20px;">
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
            <!-- <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search products">
                </form>
            </li> -->
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Admin</h6>
                    <?php
                    if ($_COOKIE["login"] == "netjang") {
                    ?>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" onclick="goPage('index.php?page=admin&sub-page=add-catalog')">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-link-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">เพิ่มหมวด</p>
                                <p class="text-muted ellipsis mb-0"> เพิ่มหมวดหมายเลข </p>
                            </div>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" onclick="goPage('index.php?page=admin&sub-page=add-number')">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-link-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">เพิ่มเบอร์</p>
                                <p class="text-muted ellipsis mb-0"> เพิ่มข้อมูลเบอร์โทร </p>
                            </div>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" onclick="goPage('index.php?page=admin&sub-page=add-import')">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-link-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">เพิ่มเบอร์ หลายๆเบอร์</p>
                                <p class="text-muted ellipsis mb-0"> เพิ่มข้อมูลเบอร์โทร </p>
                            </div>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" onclick="goPage('index.php?page=admin&sub-page=add-page')">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-link-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">เพิ่มคำทำนายผลรวม</p>
                                <p class="text-muted ellipsis mb-0"> เพิ่มข้อมูลคำทำนาย </p>
                            </div>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" onclick="goPage('index.php?page=admin&sub-page=add-couple')">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-link-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">เพิ่มคำทำนายคู่เลข</p>
                                <p class="text-muted ellipsis mb-0"> เพิ่มข้อมูลคำทำนาย </p>
                            </div>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" onclick="goPage('logout.php')">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-logout text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Logout</p>
                            </div>
                        </a>
                    <?php } else { ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" onclick="goPage('login.php')">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Login</p>
                            </div>
                        </a>
                    <?php } ?>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center"></p>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <font style="color: white;">Menu</font>
        </button>
    </div>
</nav>