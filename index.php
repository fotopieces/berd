<!DOCTYPE html>
<html lang="en">
<?php header('Content-Type: text/html; charset=utf-8'); ?>

<head>
  <!-- Required meta tags -->
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>เบอร์ดีราคาถูก.com</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <?php include 'pages/conn.php'; ?>
  <?php include 'fn.php'; ?>
  <?php include 'pages/check-login.php'; ?>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <?php include 'pages/sidebar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <?php include 'pages/navbar.php'; ?>
      <!-- partial -->
      <?php
      if ($_GET['page'] == "admin") {
        include 'pages/admin/admin.php';
      } else if ($_GET['page'] == "") {
        include 'pages/main-page.php';
      } else if ($_GET['cat'] != "") {
        include 'pages/main-page.php';
      } else if ($_GET['page'] == "ans") {
        include 'pages/ans-page.php';
      }
      ?>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright เบอร์ดีราคาถูก.com</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page -->

  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/select2/select2.min.js"></script>
  <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/file-upload.js"></script>
  <script src="assets/js/typeahead.js"></script>
  <script src="assets/js/select2.js"></script>


  <script src="assets/js/dashboard.js"></script>


  <!-- End custom js for this page -->
  <?php include 'pages/end-conn.php'; ?>




  <script>
    function goPage(page) {
      window.location.href = page;
    }
    $(document).ready(function() {

      $("#scNum").on('keyup', function(e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
          alert('Enter!');
        }
      });

      var scNumVal = $('#scNum').val();
      if (scNumVal != undefined && scNumVal != "") {
        $(window).scrollTop(600);
      }

      $('#addNumber').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
          e.preventDefault();
          return false;
        }
      });



    });
  </script>


  <style type="text/css">
    /* Overide css code กำหนดความกว้างของปฏิทินและอื่นๆ */
    .ui-datepicker {
      width: 220px;
      font-family: tahoma;
      font-size: 11px;
      text-align: center;
    }
  </style>
  <?php
  $jquery_ui_v = "1.8.5";
  $theme = array(
    "0" => "base",
    "1" => "black-tie",
    "2" => "blitzer",
    "3" => "cupertino",
    "4" => "dark-hive",
    "5" => "dot-luv",
    "6" => "eggplant",
    "7" => "excite-bike",
    "8" => "flick",
    "9" => "hot-sneaks",
    "10" => "humanity",
    "11" => "le-frog",
    "12" => "mint-choc",
    "13" => "overcast",
    "14" => "pepper-grinder",
    "15" => "redmond",
    "16" => "smoothness",
    "17" => "south-street",
    "18" => "start",
    "19" => "sunny",
    "20" => "swanky-purse",
    "21" => "trontastic",
    "22" => "ui-darkness",
    "23" => "ui-lightness",
    "24" => "vader"
  );
  $jquery_ui_theme = $theme[8];
  ?>
  <link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/<?= $jquery_ui_v ?>/themes/<?= $jquery_ui_theme ?>/jquery-ui.css" />
  <style type="text/css">
    /* ปรับขนาดตัวอักษรของข้อความใน tabs  
สามารถปรับเปลี่ยน รายละเอียดอื่นๆ เพิ่มเติมเกี่ยวกับ tabs 
*/
    .ui-tabs {
      font-family: tahoma;
      font-size: 11px;
    }
  </style>
  <style type="text/css">
    /* Overide css code กำหนดความกว้างของปฏิทินและอื่นๆ */
    .ui-datepicker {
      width: 220px;
      font-family: tahoma;
      font-size: 11px;
      text-align: center;
    }
  </style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>
  <script src="js/jqueryui_datepicker_thai.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#dateInput").datepicker({
        dateFormat: 'dd-mm-yy',
        showOn: 'button',
        numberOfMonths: 2,
        //		buttonImage: 'http://jqueryui.com/demos/datepicker/images/calendar.gif',
        buttonImageOnly: false,
        changeMonth: true,
        changeYear: true
      });

      $("#dateInput2").datepicker({
        dateFormat: 'dd-mm-yy',
        showOn: 'button',
        numberOfMonths: 2,
        //		buttonImage: 'http://jqueryui.com/demos/datepicker/images/calendar.gif',
        buttonImageOnly: false,
        changeMonth: true,
        changeYear: true
      });

      $("#dateInput3").datepicker({
        dateFormat: 'dd-mm-yy',
        showOn: 'button',
        //		buttonImage: 'http://jqueryui.com/demos/datepicker/images/calendar.gif',
        buttonImageOnly: false,
        changeMonth: true,
        changeYear: true
      });

      $("#openday").datepicker({
        dateFormat: 'dd-mm-yy',
        showOn: 'button',
        //		buttonImage: 'http://jqueryui.com/demos/datepicker/images/calendar.gif',
        buttonImageOnly: false,
        changeMonth: true,
        changeYear: true
      });

      $("#closeday").datepicker({
        dateFormat: 'dd-mm-yy',
        showOn: 'button',
        //		buttonImage: 'http://jqueryui.com/demos/datepicker/images/calendar.gif',
        buttonImageOnly: false,
        changeMonth: true,
        changeYear: true
      });



      $("#date_inline").datepicker({
        dateFormat: 'dd-mm-yy',
        buttonImageOnly: false
      });

      $("#date_inline2").datepicker({
        dateFormat: 'dd-mm-yy',
        buttonImageOnly: false
      });

    });
  </script>
</body>

</html>