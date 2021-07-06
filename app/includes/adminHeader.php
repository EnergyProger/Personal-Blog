<header class="clearfix">
    <a class="logo" href="<?php echo BASE_URL.'/index.php';?>">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
      <h1 class="logo-text"><span>Fancy</span>Blog</h1>
    </a>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <!--<li><a href="#">Home</a></li>-->
        <?php if (isset($_SESSION['id'])):?>
          <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username'];?>
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="<?php echo BASE_URL.'/logout.php';?>" class="logout">logout</a></li>
          </ul>
        </li>
        <?php endif;?>  
      </ul>
    </nav>
  </header>