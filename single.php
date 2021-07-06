<?php include('path.php'); ?>
<?php include(ROOT_PATH.'/app/controllers/posts.php');

  $table = 'posts';
  if(isset($_GET['id']))
  {
    $post = selectOne($table, ['id' => $_GET['id']]);
  }
  $topics = selectAll('topics');
  $posts = selectAll($table, ['published' => 1]);
 
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
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/social-media-circle-long-shadow/1024/long-4-512.png" type="image/x-icon"/>
  <title><?php echo $post['title'];?> | FancyBlog</title>
</head>
<body>
  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src =
      'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  <!-- Header -->
<?php include(ROOT_PATH.'/app/includes/header.php'); ?>
<!-- Header -->
  <!-- Page wrapper -->
  <div class="page-wrapper">
    <!-- content -->
    <div class="content clearfix">
      <div class="page-content single">
        <h2 style="text-align: center;"><?php echo $post['title'];?></h2>
        <br>
        <?php echo html_entity_decode($post['body']);?>
      </div>
      <div class="sidebar single">
        <!-- fb page -->
        <div class="fb-page" data-href="https://www.facebook.com/Piece-of-Advice-1055745464557488/"
          data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/Piece-of-Advice-1055745464557488/" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/Piece-of-Advice-1055745464557488/">Piece of Advice</a></blockquote>
        </div>
        <!-- // fb page -->
        <!-- Popular Posts -->
        <div class="section popular">
          <h2>Popular</h2>
          <?php foreach($posts as $txt):?>
          <div class="post clearfix">
            <img src="<?php echo BASE_URL.'/assets/images/'.$txt['image']?>">
            <a href="single.php?id=<?php echo $txt['id'];?>" class="title">
            <h4 class="color"><?php echo $txt['title'];?></h4>
          </a>
          </div>
          <?php endforeach;?>
        </div>
        <!-- // Popular Posts -->
        <!-- topics -->
        <div class="section topics">
          <h2>Topics</h2>
          <ul>
            <?php foreach($topics as $topic):?>
              <li><a href="<?php echo BASE_URL.'/index.php?t_id='.$topic['id']. '&name=' .$topic['name'];?>">
              <?php echo $topic['name'];?>
            </a></li>
            <?php endforeach;?>
          </ul>
        </div>
        <!-- // topics -->
      </div>
    </div>
    <!-- // content -->
  </div>
  <!-- // page wrapper -->
  <!-- Footer -->
  <?php include(ROOT_PATH.'/app/includes/footer.php')?>
  <!-- Footer -->
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>