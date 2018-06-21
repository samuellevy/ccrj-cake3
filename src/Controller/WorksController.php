<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class WorksController extends AppController
{
  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $this->viewBuilder()->setLayout('pages');
  }

  public function add()
  {
      $work = $this->Works->newEntity();
      if ($this->request->is('post')) {
          $work = $this->Works->patchEntity($work, $this->request->getData());
          // die(debug($work));
          if ($this->Works->save($work)) {
              $this->Flash->success(__('The work has been saved.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The work could not be saved. Please, try again.'));
      }
      $this->set(compact('work'));
      $this->set('_serialize', ['work']);
  }
}
