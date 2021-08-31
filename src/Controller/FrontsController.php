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
class FrontsController extends AppController
{
   public function home(){

    $this->viewBuilder()->setLayout('/general/layout');

   }

   public function success(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

    public function login(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

    public function memberConfirmation(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function allDownloads(){
    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function softwares(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function contact(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

    public function register(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function registrationSuccessful(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function prayerRequest(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

    public function eventsDirections(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function coreValues(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

     public function whatToExpect(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function praiseReport(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function membership(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function books(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function live(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function videosOnDemand(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

    public function departments(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function ourProphet(){

    $this->viewBuilder()->setLayout('/fronts/fronts_layout');

   }

   public function whatWeBelieve()
    {
      $this->viewBuilder()->setLayout('/fronts/fronts_layout');
    }

    public function departmentSignup()
    {
      $this->viewBuilder()->setLayout('/fronts/fronts_layout');
    }

    public function ourHistory()
    {
      $this->viewBuilder()->setLayout('/fronts/fronts_layout');
    }

    public function getInvolved()
    {
      $this->viewBuilder()->setLayout('/fronts/fronts_layout');
    }

    public function devotionals()
    {
      $this->viewBuilder()->setLayout('/fronts/fronts_layout');
    }
       
}
