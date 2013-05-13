<?php
/**
 * @author    Janek Ostendorf (ozzy) <ozzy2345de@gmail.com>
 * @copyright Copyright (c) 2013 Janek Ostendorf
 * @license   http://opensource.org/licenses/gpl-3.0.html GNU General Public License, version 3
 */

define('PUN_ROOT', dirname(__FILE__).'/');
require './include/common.php';

error_reporting(E_ALL);

if(isset($_GET['action']) && $_GET['action'] == 'assign') {

	// Check key
	if(isset($_GET['key']) && $_GET['key'] == $fluxbBridgeKey) {

		// Check if user exists
		if(isset($_GET['boardUser'])) {

			$result = $db->query('SELECT * FROM `'.$db->prefix.'users` WHERE `username` = \''.$db->escape($_GET['boardUser']).'\'', true);

			if($result->num_rows == 1) {

				// Check password hash
				if(isset($_GET['password'])) {

					if($result->fetch_array(MYSQLI_ASSOC)['token'] == $_GET['password']) {

						if(isset($_GET['mcUser'])) {

							// Is this MC user already in use?
							$result = $db->query('SELECT * FROM `'.$db->prefix.'users` WHERE `minecraft` = \''.$db->escape($_GET['mcUser']).'\'', true);

							if($result->num_rows == 0) {

								// Everything's fine, write to the DB
								$db->query('UPDATE `'.$db->prefix.'users` SET `group_id` = 5, `token` = NULL, `minecraft` = \''.$db->escape($_GET['mcUser']).'\' WHERE `username` = \''.$db->escape($_GET['boardUser']).'\'', true);

								echo json_encode([
									'status' => 'ok',
									'message' => $_GET['boardUser'].' '.$_GET['mcUser']
								]);

							}
							else {
								echo json_encode([
									'status' => 'fail',
									'message' => 'mcUser in use'
								]);
							}

						}
						else {
							echo json_encode([
								'status' => 'fail',
								'message' => 'mcUser missing'
							]);
						}

					}
					else {
						echo json_encode([
							'status' => 'fail',
							'message' => 'password wrong'
						]);
					}
				}

			}
			else {
				echo json_encode([
					'status' => 'fail',
					'message' => 'boardUser not existing'
				]);
			}
		}
		else {
			echo json_encode([
				'status' => 'fail',
				'message' => 'boardUser missing'
			]);
		}

	}
	else {

		echo json_encode([
			'status' => 'fail',
			'message' => 'key missing or wrong'
		]);

	}

}
elseif(isset($_GET['action']) && $_GET['action'] == 'keyLink' && !isset($_GET['id'])) {

	// Check key
	if(isset($_GET['key']) && $_GET['key'] == $fluxbBridgeKey) {

		// Check if user exists
		if(isset($_GET['boardUser'])) {

			$result = $db->query('SELECT * FROM `'.$db->prefix.'users` WHERE `username` = \''.$db->escape($_GET['boardUser']).'\'', true);

			if($result->num_rows == 1) {

				// Generate link
				echo json_encode([
					'status' => 'ok',
					'message' => rtrim($pun_config['o_base_url'], '/').'/fluxbbridge.php?id='.$result->fetch_array()['id']
				]);

			}
			else {

				echo json_encode([
					'status' => 'fail',
					'message' => 'boardUser not existing'
				]);

			}

		}
		else {
			echo json_encode([
				'status' => 'fail',
				'message' => 'boardUser missing'
			]);
		}


	}
	else {

		echo json_encode([
			'status' => 'fail',
			'message' => 'key missing or wrong'
		]);

	}

}
elseif(isset($_GET['action']) && $_GET['action'] == 'profileLink') {


	// Check if user exists
	if(isset($_GET['mcUser'])) {

		$result = $db->query('SELECT * FROM `'.$db->prefix.'users` WHERE `minecraft` = \''.$db->escape($_GET['mcUser']).'\'', true);

		if($result->num_rows == 1) {

			echo json_encode([
				'status' => 'ok',
				'message' => rtrim($pun_config['o_base_url'], '/').'/profile.php?id='.$result->fetch_array()['id'],
				'boardUser' => $result->fetch_array()['username']
			]);

		}
		else {
			echo json_encode([
				'status' => 'fail',
				'message' => 'mcUser missing'
			]);
		}

	}
	else {
		echo json_encode([
			'status' => 'fail',
			'message' => 'mcUser missing'
		]);
	}

}
elseif(isset($_GET['id'])) {

	$result = $db->query('SELECT * FROM `'.$db->prefix.'users` WHERE `id` = \''.$db->escape($_GET['id']).'\'', true);

	if($result->num_rows == 1) {

		$auth = false;

		// Is this the right user?
		if($pun_user['id'] == $_GET['id']) {

			$auth = true;

			$userName = $result->fetch_array()['username'];

			// Generate key
			$pool = 'abcdef1234567890';

			$key = '';

			for($i = 1; $i <= 6; $i++) {
				$rand = substr(str_shuffle($pool), 0, 1);
				$key .= $rand;
			}

			// Write key to DB
			$db->query('UPDATE `'.$db->prefix.'users` SET `token` = \''.$db->escape($key).'\' WHERE `id` = '.$db->escape($_GET['id']));

		}

		?>

		<html>
			<head>
				<meta http-equiv="content-type" content="text/html; charset=UTF-8">
				<title>Dein Schlüssel</title>
				<style type="text/css">
					html, body {
						margin: 0;
						padding: 0;
						background: #fafafa;
						font-family: Arial, Helvetica, sans-serif;
					}

					div#text {

						font-weight: bold;
						font-family: Arial, Helvetica, sans-serif;
						font-size: 48px;
						text-align: center;
						margin-top: 15%;

					}
					div#subtext {
						margin-top: 25px;
						font-size: 14px;
						text-align: center;
					}

					hr {
						height: 0;
						border: none;
						border-bottom: 1px solid rgb(200, 200, 200);
					}

					.tt {
						display: inline;
						padding: 0 2px;
						background: rgb(250, 250, 250);
						border: 1px solid rgb(230, 230, 230);
					}
				</style>

			</head>
			<body>
				<?php if($auth) { ?>
					<div id="text">
						Dein Schlüssel: <?=$key?>
					</div>
					<hr />
					<div id="subtext">
						Um ihn zu benutzen, gib <span class="tt">/forum <?=$userName?> <?=$key?></span> auf dem Server ein.
					</div>
				<?php } else { ?>
					<div id="text">
						Du bist nicht angemeldet.
					</div>
					<hr />
					<div id="subtext">
						Bitte logge dich zunächst im Forum ein, um deinen Schlüssel zu sehen. <a href="<?=$pun_config['o_base_url']?>">Zum Forum</a>
					</div>
				<?php } ?>
			</body>
		</html>
	<?php

	}

}
else {
	echo 'Nothing here, move along';
}
