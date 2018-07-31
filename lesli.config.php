<?php
/**
* Lesli
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program. If not, see <http://www.gnu.org/licenses/>.
* 
* PHP Version 7
*
* @author   Luis Gdonis <emc2@ldonis.com>
* @license  GPLv3 http://www.gnu.org/licenses/gpl-3.0.en.html
* @version  GIT: 1.0.0-alpha
* @link     https://www.lesli.tech
*/

Use Lesli\Config;

/**
* General information details
* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
* @author Luis Gdonis <emc2@ldonis.com>
*/
Config::set('website', [
	'description' => 'Entrepreneur, dreamer, software developer.',
	'name' => 'Luis Donis',
	'version' => '3.0',
	'env' => 'dev'
]);


/**
* Website public routes
* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
* @author Luis Gdonis <emc2@ldonis.com>
*/
return function ($router) {

	$router->get('/', 'home');
	$router->get('/home/', 'home');

	$router->get('/slides/', 'slides');
	$router->get('/slides/entrepreneur/', 'slides-entrepreneur');

};
