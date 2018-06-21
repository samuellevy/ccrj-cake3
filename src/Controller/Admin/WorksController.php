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
			//'contain' => ['Sheets']
		];
		$works = $this->paginate($this->Works);
		
    $this->set(compact(['works']));
    $this->set('_serialize', ['works']);
		// die(debug($works->all()));
	}
	
	/** AJAX METHODS */
	public function changeStatus($id){
		$this->autoRender = false;
		$entity = $this->Works->get($id);
		$status = $this->request->data['status'];
		$field = $this->request->data['field'];
		// echo $field;
		
		if($status == 'toggle'){
			if($entity[$field]==1){
				$status=0;
			}else{
				$status=1;
			}
		}
		
		$entity[$field]=$status;
		
		$post_data = ['Works.'.$field=>0];
		
		$table = $this->Works->patchEntity($entity, $post_data);
		$this->Works->save($table);  //update record
	}
}
