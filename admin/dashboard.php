<?php 
    include('../path.php');
    include(ROOT_PATH.'/app/controllers/posts.php');
    adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Admin Styling -->
  <link rel="stylesheet" href="../assets/css/admin.css">
  <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/social-media-circle-long-shadow/1024/long-4-512.png" type="image/x-icon"/>
  <title>Admin - Dashboard</title>
</head>
<body>
  
  <!-- header -->
  <?php include(ROOT_PATH.'/app/includes/adminHeader.php'); ?>
  <!-- // header -->
  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <?php include(ROOT_PATH.'/app/includes/adminSidebar.php'); ?>
    <!-- // Left Sidebar -->
    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="content">
        <h2 style="text-align: center;">Dashboard</h2>
        <?php include(ROOT_PATH.'/app/includes/messages.php'); ?>
       
      </div>
    </div>
    <!-- // Admin Content -->
  </div>
  <!-- JQuery -->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
  <!--<script>
    ClassicEditor
        .create( document.querySelector( '.text-input' ) )
        .catch( error => {
            console.error( error );
        } );
</script>-->
  <!-- Custome Scripts -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/set.js"></script>
</body>
</html>