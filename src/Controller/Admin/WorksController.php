<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class WorksController extends AppController
{
	public function beforeFilter(Event $event){
		parent::beforeFilter($event);
	}
	
	public function index(){
		$this->paginate = [
            'contain' => ['Sheets']
        ];
		$works = $this->paginate($this->Works);

		$this->set(compact(['works']));
		// die(debug($works->all()));
	}
}
