<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pocketmine Plugin School</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/25239cedf1.js" crossorigin="anonymous"></script>

  <link href="../css/custom.css" rel="stylesheet" type="text/css">
  <link href="../../css/ultra.css" rel="stylesheet" type="text/css">
  <link href="../../css/tomorrow-night-eighties.css" rel="stylesheet" type="text/css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148602502-2"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-148602502-2');
  </script>
</head>

<body>

<nav>
  <a class="mobile-nav"><i class="fas fa-bars"></i></a>
  <div class="navtitle">Pocketmine School</div>
  <a href="../../index.html">Home</a>
</nav>

<?php $currentPage = 'Permissions'; ?>
<?php include('sidebar.php'); ?>

<div id="Permissions" class="sidemain">
  <h3>Permissions</h3>
  <hr>
  <p>You just learned how to add commands but you want only certain group of players to use it.</p>
  <p>Well lets teach you how to add Permissions to your commands, it very simple</p>
  <pre>
    <code>
public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
  if($player->hasPermission("test.cmd")){ // we only add this one line just to add Permissions
    if($cmd->getName() == "test") {
      if(!$sender instanceof Player){
        $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
      } else {
        if(!isset($args[0]) or (is_int($args[0]) and $args[0] > 0)) { 
          $args[0] = 4; 
        }
        $sender->getInventory()->addItem(Item::get(364,0,$args[0]));
        $sender->sendMessage("You have just recieved" .count($args[0]). " steak!");
      }
    }
  } //Don't forget to add this for the command to work
  return true;
}
    </code>
  </pre>

  <p>Want to add a message to the player who doesn't have permission to use the command the here you go.</p>
  <pre>
    <code>
public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
  if($sender->hasPermission("test.cmd")){ 
    if($cmd->getName() == "test") {
      if(!$sender instanceof Player){
        $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
      } else {
        if(!isset($args[0]) or (is_int($args[0]) and $args[0] > 0)) { 
          $args[0] = 4; 
        }
        $sender->getInventory()->addItem(Item::get(364,0,$args[0]));
        $sender->sendMessage("You have just recieved" .count($args[0]). " steak!");
      }
    }
  } else {
    $sender->sendMessage("You don't have permission to use this command");
  } 
  return true;
}
    </code>
  </pre>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/custom.js"></script>
<script src="../../js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>