<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?= $PROFILE_PAGE_TITLE ?></title>
	<?= $CSS_INCLUDES ?>
</head>
<body>
	<div id="grassSkin"></div>
	<?= $HEADER ?>
	<div><h3><?= $_SESSION['CLIENT_USERNAME'] ?>'s Buckets</h3></div>
	<div id="error"><?= $MESSAGE ?></div>
	njunjtbv<div id='services_result' align="left">
		<?= $SERVICE_LIST ?>
	</div>
	<?= $FOOTER ?>
	<?= $JS_INCLUDES ?>
</body>
</html>