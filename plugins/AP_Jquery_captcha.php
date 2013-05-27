<?php
/**
 * Copyright (C)2010 adaur
 * Another Private Messaging System v3.0.2
 * Based on work from Vincent Garnier, Connorhd and David 'Chacmool' Djurback
 * License: http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 */

// Make sure no one attempts to run this script "directly"
if (!defined('PUN'))
    exit;

// Tell admin_loader.php that this is indeed a plugin and that it is loaded
define('PUN_PLUGIN_LOADED', 1);
define('PLUGIN_NAME', 'Jquery Captcha');
define('PLUGIN_VERSION', '1.1.0');
define('PLUGIN_URL', 'admin_loader.php?plugin=AP_Jquery_captcha.php');

// Load language file
$lang_file = PUN_ROOT.'lang/'.$pun_user['language'].'/jquery_captcha_plugin.php';
if (!file_exists($lang_file))
	$lang_file = PUN_ROOT.'lang/English/jquery_captcha_plugin.php';
require $lang_file;
	
//Default jquery captcha configuration
$jquery_captcha_configuration = array(
'o_jquery_captcha_registration_page'		=>	true,
'o_jquery_captcha_authentification_page' 	=>	true,
'o_jquery_captcha_forum_pages' 				=>	true,
);

if (isset($_POST['form_sent'])) {
	$form = array_map('intval', $_POST['form']);
	$update_cache = false;
	foreach ($form as $key => $value) {
		if (array_key_exists('o_jquery_captcha_'.$key,$jquery_captcha_configuration)) {
			if ($value != '0') {
				$value = '1';
			}
			$db->query('DELETE FROM '.$db->prefix.'config WHERE conf_name = "o_jquery_captcha_'.$key.'";') or error('Unable to delete jquery captcha configuration.', __FILE__, __LINE__, $db->error());
			$db->query('INSERT INTO '.$db->prefix.'config (conf_name,conf_value) VALUES ("o_jquery_captcha_'.$key.'","'.$value.'");') or error('Unable to insert jquery captcha configuration.', __FILE__, __LINE__, $db->error());
			$update_cache = true;
		}
	}
	// Regenerate the config cache	
	if ($update_cache) {

		if (!defined('FORUM_CACHE_FUNCTIONS_LOADED'))
			require PUN_ROOT.'include/cache.php';

		generate_config_cache();
		clear_feed_cache();

		redirect(PLUGIN_URL, $lang_plugin_jquery_captcha['Options updated redirect']);
	}
}

foreach ($jquery_captcha_configuration as $key => $value) {
	if (isset($pun_config[$key]) AND $pun_config[$key] == '0') {
		$jquery_captcha_configuration[$key] = false;
	}
}

// Display the admin navigation menu
generate_admin_menu($plugin);

?>

	<div id="exampleplugin" class="plugin blockform">
		<h2><span><?php echo PLUGIN_NAME; ?> v<?php echo PLUGIN_VERSION; ?></span></h2>
		<div class="box">
			<div class="inbox">
				<p><?php echo $lang_plugin_jquery_captcha['Description'];?></p>
			</div>
		</div>
	</div>
	<div class="blockform">
		<h2><span><?php echo $lang_plugin_jquery_captcha['Configuration'];?></span></h2>
		<div class="box">
			<form method="post" action="<?php echo PLUGIN_URL; ?>">
				<p class="submittop"><input type="submit" name="save" value="<?php echo $lang_admin_common['Save changes'] ?>" /></p>
				<div class="inform">
					<input type="hidden" name="form_sent" value="1" />
					<fieldset>						
						<div class="infldset">
							<table class="aligntop" cellspacing="0">
								<tr>
									<th scope="row"><?php echo $lang_plugin_jquery_captcha['Registration page'];?></th>
									<td>
										<input type="radio" name="form[registration_page]" id="form_registration_page_1" value="1" <?php if ($jquery_captcha_configuration['o_jquery_captcha_registration_page']) echo 'checked="checked"'; ?> />&#160;<label class="conl" for="form_registration_page_1"><strong><?php echo $lang_admin_common['Yes'] ?></strong></label>&#160;&#160;&#160;<input type="radio" name="form[registration_page]" id="form_registration_page_0" value="0" <?php if (!$jquery_captcha_configuration['o_jquery_captcha_registration_page']) echo 'checked="checked"'; ?> />&#160;<label class="conl" for="form_registration_page_0"><strong><?php echo $lang_admin_common['No'] ?></strong></label>
										<span><?php echo $lang_plugin_jquery_captcha['Registration page description'];?></span>
									</td>
								</tr>
								<tr>
									<th scope="row"><?php echo $lang_plugin_jquery_captcha['Authentification page'];?></th>
									<td>
										<input type="radio" name="form[authentification_page]" id="form_authentification_page_1" value="1" <?php if ($jquery_captcha_configuration['o_jquery_captcha_authentification_page']) echo 'checked="checked"'; ?> />&#160;<label class="conl" for="form_authentification_page_1"><strong><?php echo $lang_admin_common['Yes'] ?></strong></label>&#160;&#160;&#160;<input type="radio" name="form[authentification_page]" id="form_authentification_page_0" value="0" <?php if (!$jquery_captcha_configuration['o_jquery_captcha_authentification_page']) echo 'checked="checked"'; ?> />&#160;<label class="conl" for="form_authentification_page_0"><strong><?php echo $lang_admin_common['No'] ?></strong></label>
										<span><?php echo $lang_plugin_jquery_captcha['Authentification page description'];?></span>
									</td>
								</tr>
								<tr>
									<th scope="row"><?php echo $lang_plugin_jquery_captcha['Forum pages'];?></th>
									<td>
										<input type="radio" name="form[forum_pages]" id="form_forum_pages_1" value="1" <?php if ($jquery_captcha_configuration['o_jquery_captcha_forum_pages']) echo 'checked="checked"'; ?> />&#160;<label class="conl" for="form_forum_pages_1"><strong><?php echo $lang_admin_common['Yes'] ?></strong></label>&#160;&#160;&#160;<input type="radio" name="form[forum_pages]" id="form_forum_pages_0" value="0" <?php if (!$jquery_captcha_configuration['o_jquery_captcha_forum_pages']) echo 'checked="checked"'; ?> />&#160;<label class="conl" for="form_forum_pages_0"><strong><?php echo $lang_admin_common['No'] ?></strong></label>
										<span><?php echo $lang_plugin_jquery_captcha['Forum pages description'];?></span>
									</td>
								</tr>
							</table>
						</div>
					</fieldset>
				</div>
				<p class="submitend"><input type="submit" name="save" value="<?php echo $lang_admin_common['Save changes'] ?>" /></p>
			</form>
		</div>
	</div>