<?php
require "global.php";
$page = "home";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require "head.php"; ?>
  <body class="<?= $page; ?>">
    <main>
      <h1>Page Title</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </main>
    <script src="assets/js/bundle.min.js?v=<?php echo filemtime("assets/js/bundle.min.js"); ?>" charset="utf-8"></script>
  </body>
</html>
