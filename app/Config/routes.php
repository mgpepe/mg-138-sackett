<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'statics', 'action' => 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/contact_us', array('controller' => 'contact_forms', 'action' => 'add'));
	Router::connect('/showme/*', array('controller' => 'contact_forms', 'action' => 'showme'));
	Router::connect('/oh', array('controller' => 'openhouses', 'action' => 'index'));
	Router::connect('/home', array('controller' => 'statics', 'action' => 'home'));
	Router::connect('/residences', array('controller' => 'statics', 'action' => 'residences'));
	Router::connect('/passiv_standard', array('controller' => 'statics', 'action' => 'passiv_standard'));
	Router::connect('/locale', array('controller' => 'statics', 'action' => 'locale'));
	Router::connect('/floorplans/*', array('controller' => 'statics', 'action' => 'floorplans'));
	Router::connect('/availability', array('controller' => 'statics', 'action' => 'availability'));





	Router::connect('/p/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
