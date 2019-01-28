


<!-- Navbar -->
<ul>
  <li><a class="active" href="Is_index.php">Optimal Stock</a></li>
  <li><a href="News.php">News</a></li>
  <li><a href="Support.php">Support</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="Portfolio.php">Portfolio</a></li>
  <li><a href="InloggningHtml.php"><?php
    // dispaly usr name or LogOut
    // --------------------------
    if (isset($_SESSION['userName'])) {
      if ($LoginCheck === true) {
      echo $_SESSION['userName'];
      echo '<li><a href="Logout.php" style="float: right;" class="LogOut" >Log out </a></li>';
      }
    }
    else {
        echo "Login";
      }
      ?></a></li>

</ul>
