<?php
$list_projects =  json_decode(file_get_contents("data.json"));
$filter = "";
if (isset($_GET["item"])){
   $filter = $_GET["item"];
}
?>
<!doctype html>
<html lang="en-US">
   <head>
      <title>TNQ Portfolio - Projects</title>
      <!-- Meta -->
      <meta property="og:title" content="Tran Ngoc Quang Portfolio" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="https://tranngoc769.github.io" />
      <meta property="og:image" content="https://tranngoc769.github.io/images/icon.png" />
      <meta property="og:description" content="Xem chi tiết về Portfolio của tôi tại đây" />
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="Tran Ngoc Quang Portfolio">
      <meta name="keywords" content="Tran Ngoc Quang, Portfolio, Projects, Resume">
      <!-- Fonts -->
      <link
         href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic"
         rel="stylesheet">
      <link rel="stylesheet" href="css/min-styles.css" />
      <link rel="stylesheet" href="css/fontawesome.css" />
      <link rel="stylesheet" href="css/brands.css" />
      <link rel="stylesheet" href="css/solid.css" />
      <link rel="icon" href="images/icon.png" sizes="32x32" />
      <link rel="shortcut icon" href="images/favicons/favicon.ico">
   </head>
   <body>
      <!-- Preloader -->
      <div class="preloader">
         <div class="centrize full-width">
            <div class="vertical-center">
               <div class="spinner">
                  <div class="double-bounce1"></div>
                  <div class="double-bounce2"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- Container -->
      <div class="container">
      <!-- Cursor -->
      <div class="cursor-follower"></div>
      <!-- Header -->
      <header class="header">
         <div class="head-top">
            <!-- menu button -->
            <a href="#" class="menu-btn"><span></span></a>
            <!-- logo -->
            <div class="logo hover-masks-logo">
               <a href="https://tranngoc769.github.io/CV.pdf">
               <span class="mask-lnk">Tran Ngoc <strong>Quang</strong></span>
               <span class="mask-lnk mask-lnk-hover">Download <strong>CV</strong></span>
               </a>
            </div>
            <!-- top menu -->
            <div class="top-menu hover-masks">
               <div class="top-menu-nav">
                  <div class="menu-topmenu-container">
                     <ul class="menu">
                        <li class="menu-item current-menu-item">
                           <a href="index.html">Home</a>
                        </li>
                        <li class="menu-item">
                           <a href="/projects">My Projects</a>
                        </li>
                        <li class="menu-item">
                           <a href="/contact">Contact</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Wrapper -->
      <div class="wrapper">
      <div class="section works" id="section-portfolio">
         <div class="content">
            <!-- portfolio filter -->
            <div class="filter-menu content-box">
               <div class="filters">
                  <div class="btn-group">
                     <label data-text="All" class="glitch-effect"><input type="radio" name="fl_radio"
                        value=".box-item" />All</label>
                  </div>
                  <div class="btn-group">
                     <label data-text="Video"><input type="radio" name="fl_radio" value=".f-csharp" />C#</label>
                  </div>
                  <div class="btn-group">
                     <label data-text="Music"><input type="radio" name="fl_radio" value=".f-cplusplus" />C++</label>
                  </div>
                  <div class="btn-group">
                     <label data-text="Links"><input type="radio" name="fl_radio" value=".f-java" />Java -
                     Android</label>
                  </div>
                  <div class="btn-group">
                     <label data-text="Image"><input type="radio" name="fl_radio" value=".f-python" />Python</label>
                  </div>
                  <div class="btn-group">
                     <label data-text="Gallery"><input type="radio" name="fl_radio" value=".f-nodejs" />NodeJS -
                     JS/CSS/HTML</label>
                  </div>
                  <div class="btn-group">
                     <label data-text="Content"><input type="radio" name="fl_radio" value=".f-php" />PHP</label>
                  </div>
                  <div class="btn-group">
                     <label data-text="Content"><input type="radio" name="fl_radio" value=".f-search" />Search</label>
                  </div>
               </div>
            </div>
            <!-- portfolio items -->
            <div class="box-items portfolio-items">
               <?php for ($i=0; $i < count($list_projects); $i++) { $prj = $list_projects[$i] ?>
               <!-- SIMSIMI 8-->
               <div class="box-item <?php echo($prj->cate);?> <?php if($prj->slug==$filter && filter != "") {?><?php echo(" f-search")?> <?php } ?>">
                  <div class="image">
                     <p class='title-project'><?php echo( $prj->name)?></p>
                     <a href="#popup-<?php echo( $i)?>" class="has-popup-media hover-animated">
                     <img src="images/<?php echo( $prj->image)?>" class="wp-post-image" alt="" />
                     <span class="info circle">
                     <span class="centrize full-width">
                     <span class="vertical-center">
                     <span class="icon fas fa-plus"></span>
                     <span class="desc">
                     <span class="category"><?php echo( $prj->category)?></span>
                     <span class="name"><?php echo( $prj->name)?></span>
                     </span>
                     </span>
                     </span>
                     </span>
                     </a>
                  </div>
                  <div id="popup-<?php echo( $i)?>" class="popup-box mfp-fade mfp-hide">
                     <?php echo( $prj->desc)?>
                  </div>
               </div>
               <?php } ?>
               <div class="clear"></div>
            </div>
         </div>
         <!-- Footer -->
         <footer class="footer">
            <div class="copy">
               <p>E: tnquang.769@gmail.com</p>
               <p>P: +84 378 580 738</p>
            </div>
            <div class="soc-box">
               <div class="follow-label">Hire me</div>
               <div class="soc">
                  <a target="_blank" href="https://github.com/tranngoc769">
                  <span class="icon fab fa-github"></span>
                  </a>
                  <!--  target="_blank" href="https://www.instagram.com/" -->
					<a target="_blank" href="https://www.linkedin.com/in/tranngoc769">
                  <span class="icon fab fa-linkedin"></span>
                  </a>
                  <a target="_blank" href="https://www.facebook.com/messages/t/tranngoc769">
                  <span class="icon fab fa-facebook-messenger"></span>
                  </a>
               </div>
            </div>
            <div class="clear"></div>
         </footer>
         <!-- Lines -->
         <div class="lines">
            <div class="line-col"></div>
            <div class="line-col"></div>
            <div class="line-col"></div>
            <div class="line-col"></div>
            <div class="line-col"></div>
         </div>
      </div>
      <script src="js/min.scripts.js"></script>
   </body>
</html>