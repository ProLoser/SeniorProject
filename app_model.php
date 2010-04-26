<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
 
// MCurry's Custom Find Types http://github.com/mcurry/find
App::import('Vendor', 'Find.find_app_model');
 
class AppModel extends FindAppModel {
	var $recursive = -1;
	
	var $actsAs = array('Containable');
	
	/**
	 * Run this during beforeSave() to set the currently logged in user as the owner of the record
	 */
	function owner() {
		if (!isset($this->data[$this->name]['id'])) {
			$this->data[$this->name]['user_id'] = User::get('id');
			return true;
		} else {
			return false;
		}
	}
}
?>