<?php
/**
 * @author    Janek Ostendorf (ozzy) <ozzy2345de@gmail.com>
 * @copyright Copyright (c) 2013 Janek Ostendorf
 * @license   http://opensource.org/licenses/gpl-3.0.html GNU General Public License, version 3
 */

define('PUN_ROOT', dirname(__FILE__).'/');
require './include/common.php';

// Check key
if(isset($_GET['key']) && $_GET['key'] == $fluxbBridgeKey) {

	// Check if user exists
	if(isset($_GET['boardUser'])) {

		$result = $db->query('SELECT * FROM `'.$db->prefix.'users` WHERE `username` = \''.$db->escape($_GET['boardUser']).'\'', true);

		if($result->num_rows == 1) {

			// Check password hash
			if(isset($_GET['password'])) {

				if($result->fetch_array(MYSQLI_ASSOC)['password'] == $_GET['password']) {

					if(isset($_GET['mcUser'])) {

						// Everything's fine, write to the DB
						$db->query('UPDATE `'.$db->prefix.'users` SET `minecraft` = \''.$db->escape($_GET['mcUser']).'\' WHERE `username` = \''.$db->escape($_GET['boardUser']).'\'');

						echo json_encode([
							'status' => 'ok',
							'message' => $_GET['boardUser'].' '.$_GET['mcUser']
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
