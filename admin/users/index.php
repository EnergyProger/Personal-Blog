<?php 
    include('../../path.php');
    include(ROOT_PATH.'/app/controllers/users.php');
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
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">
  <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/social-media-circle-long-shadow/1024/long-4-512.png" type="image/x-icon"/>
  <title>Admin - Manage Users</title>
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
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add User</a>
        <a href="index.php" class="btn btn-sm">Manage Users</a>
      </div>
      <div class="content">
        <h2 style="text-align: center;">Manage Users</h2>
        <?php include(ROOT_PATH.'/app/includes/messages.php'); ?>
        <table>
          <thead>
            <th>N</th>
            <th>Username</th>
            <th>Email</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
          <?php foreach ($admin_users as $key => $user) :?>
            <tr class="rec">
              <td><?php echo $key + 1;?></td>
              <td>
                <?php echo $user['username'];?>
              </td>
              <td>
                <?php echo $user['email'];?>
              </td>
              <td>
                <a href="edit.php?id=<?php echo $user['id'];?>" class="edit">
                  Edit
                </a>
              </td>
              <td>
                <a href="index.php?delete_id=<?php echo $user['id'];?>" class="delete">
                  Delete
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- // Admin Content -->
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- CKEditor 5 -->
  <!--<script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>-->
  <!-- Custome Scripts -->
  <script src="../../assets/js/scripts.js"></script>
  <script src="../../assets/js/set.js"></script>
</body>
</html>