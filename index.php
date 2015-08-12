<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/graph_style.css" rel="stylesheet">
      <script type="text/javascript" src="js/function.js"></script>
      <meta name="viewport" content="width=450">
      <title>Dashboard</title>
   </head>
   <body>
      <div class="back-overlay">
         <div class="middle-uploader">
            <input type="file">
            <input type="button" value="save">
         </div>
      </div>

      <nav id="navbar">
         <div class="logo">
            <span> DASHBOARD </span>
         </div>
         <div class="menu-admin right">
            <div>
               <a href="?ref=admin">Admin</a> | <a href="?ref=setting"> Setting </a> | <a href="?ref=logout"> Logout </a>
            </div>
         </div>
      </nav>

      <div id="button-sidebar">
         <div class="arrow-right" style="display:block" id="show-sidebar"></div>
         <div class="arrow-left" style="display:none" id="hide-sidebar"></div>
      </div>

      <?php include "sidebar-menu.php"; ?>

      <div id="main">
         <div class="container-header-page">
            <div class="title-page">HOME</div>
            <div class="welcoming">Welcome Admin</div>
         </div>

         <div class="container960">
            <?php include "content.php"; ?>
         </div>
      </div>

      <script src="js/graph.js"></script>
      <script>requestGraph("1439342791");</script>
      <script src="js/sidebar.js"></script>
   </body>
</html>
