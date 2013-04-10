<div>
	<div class="floatRight marginLeft30px">
		<a href="#" class="do_logout_btn">Do Logout?</a>
	</div>
	<div class="floatRight marginLeft30px">
		Logged User: <a href="#"><b><?php print User::$LOGGED_USER->display_name; ?></b></a>
	</div>
	<div class="floatRight">
		<a href="<?php print SETTINGS::URL_TO_ADMIN_PAGE; ?>">Back To Menu</a>
	</div>
	<div class="clearBoth"></div>
	<hr />
</div>
<script>
	$(".do_logout_btn").click(function(e)
	{
		$.post(settings.URL_TO_PHP_TOOLS, 
			{
				DO_LOGOUT:"Yes i will do it now"
			}, function(data)
			{
				window.location.href = "<?php print SETTINGS::URL_TO_ADMIN_PAGE; ?>";
			});
		return false;
	});
</script>