<?php
/**
* Lesli Web
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
* @category Controller
* @package  LesliWeb/Core
* @author   Luis Gdonis <emc2@ldonis.com>
* @license  GPLv3 http://www.gnu.org/licenses/gpl-3.0.en.html
* @version  GIT: 1.0.0 alpha
* @link     https://www.lesli.tech
*/


/**
* General information details
* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
* @author Luis Gdonis <emc2@ldonis.com>
*/
Config::set('info', [
	'description' => 'Software Developer',
	'name' => 'ldonis',
	'version' => '3.0',
	'env' => 'dev'
]);


/**
* Router definition
* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
* @author Luis Gdonis <emc2@ldonis.com>
*/

$this->get('/', 'HomeController:get')->setName('home');
$this->get('/home[/]', 'HomeController:goHome')->setName('home');
$this->get('/about[/]', 'AboutController:get')->setName('about');
$this->get('/portfolio[/]', 'PortfolioController:get')->setName('portfolio');
$this->get('/projects[/]', 'ProjectsController:get')->setName('projects');
$this->get('/contact[/]', 'ContactController:get')->setName('contact');
$this->get('/resume/{token}', 'ResumeController:get')->setName('resume');
