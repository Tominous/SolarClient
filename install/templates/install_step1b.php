<?php
	class_exists('XenForo_Application', false) || die('Invalid');

	$__extraData['title'] = 'Verify Configuration';
?>

<p class="text">Your configuration has been verified.</p>

<?php if ($warnings) { ?>
	<div class="warningMessage">
		The following warnings were detected when verifying that your server can run XenForo:
		<div class="baseHtml">
			<ul>
			<?php foreach ($warnings AS $warning) { ?>
				<li><?php echo $warning; ?></li>
			<?php } ?>
			</ul>
		</div>
		These will not prevent you from using XenForo, but they should be resolved if possible to ensure optimal functioning.
		However, you may still continue with the installation.
	</div>
<?php } ?>

<?php if ($existingInstall) { ?>
	<p class="text">XenForo is already installed in your database. Continuing will remove all XenForo-related data from your database!</p>

	<form action="index.php?install/step/2" method="post" class="xenForm">
		<dl class="ctrlUnit">
			<dt></dt>
			<dd>
				<ul>
					<li><label><input type="checkbox" name="remove" value="1" /> Remove all XenForo-related data, including posts and users, from <b><?php echo htmlspecialchars($config['db']['dbname']); ?></b></label></li>
				</ul>
			</dd>
		</dl>

		<dl class="ctrlUnit submitUnit">
			<dt></dt>
			<dd><input type="submit" value="Begin Installation" accesskey="s" class="button primary" /></dd>
		</dl>
	</form>
<?php } else { ?>
	<form action="index.php?install/step/2" method="post" class="xenForm">
		<input type="submit" value="Begin Installation" accesskey="s" class="button primary" />
	</form>
<?php }