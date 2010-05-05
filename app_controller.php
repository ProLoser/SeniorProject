<?php
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {

	var $components = array(
		'Auth',
		'Session',
		'DebugKit.Toolbar'
	);

	var $helpers = array(
		'UploadPack.Upload',
		'Session',
		'Form',
		'Text',
		'Time',
	);

	function beforeFilter() {
		$this->__configureAuth();
		// Sets up global Auth User access
		App::import('Model', 'User');
		User::store($this->Auth->user());
	}

	function beforeRender() {
		// Configure Layout
		if ($this->_prefix()) {
			$this->layout = 'admin';
		} elseif ($this->_prefix('recruit')) {
			$this->layout = 'recruit';
		}
	}

	/**
	 * Checks to see if the current user is the owner of the record and sets a boolean variable to the view
	 *
	 * @param $id int id of the current record to check ownership for
	 */
	function _owner($id, $relatedModel = null) {
		if ($relatedModel) {
			$check = $this->{$this->modelClass}->$relatedModel->field('user_id', array('id' => $id));
		} elseif ($this->modelClass == 'User') {
			$check = $id;
		} else {
			$check = $this->{$this->modelClass}->field($this->modelClass.'.user_id', array($this->modelClass.'.id' => $id));
		}
		if ($this->Auth->user('id') == $check) {
			$this->set('owner', true);
			return true;
		} else {
			$this->set('owner', false);
			return false;
		}
	}

	/**
	 * Checks to see what the current prefix in use is. Checks for 'admin' by
	 * default.
	 *
	 * @return boolean
	 * @access protected
	 **/
	function _prefix($prefix = 'admin') {
		if (isset($this->params['prefix']) && $this->params['prefix'] == $prefix) {
			return true;
		}
		return false;
	}

	/**
	 * Configures the AuthComponent according to the application's settings
	 *
	 * @return void
	 * @access private
	 */
	function __configureAuth() {
		$this->Auth->fields = array('username' => 'username', 'password' => 'password');
		$this->Auth->loginAction = array('plugin' => null, 'admin' => false, 'controller' => 'users', 'action' => 'login');
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginRedirect = array('plugin' => null, 'admin' => true, 'controller' => 'users', 'action' => 'index');

		if ($this->_prefix() || $this->_prefix('recruit')) {
			$this->Auth->deny();
		} else {
			$this->Auth->allow();
			$this->Auth->deny(array('add', 'edit', 'delete'));
		}
	}
}
?>