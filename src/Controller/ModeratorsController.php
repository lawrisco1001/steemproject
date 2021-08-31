<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class ModeratorsController extends AppController
{
   public function dashboard(){

    $this->viewBuilder()->setLayout('/moderators/layout');

   }

   public function curationRequest(){

    $this->viewBuilder()->setLayout('/moderators/layout');

   }

   public function placementLot(){

    $this->viewBuilder()->setLayout('/moderators/layout');

   }

   public function upgradeRequest(){

    $this->viewBuilder()->setLayout('/moderators/layout');

   }

   public function ranks(){

    $this->viewBuilder()->setLayout('/users/layout');

   }

   public function setting(){

    $this->viewBuilder()->setLayout('/users/layout');

   }
       
}
