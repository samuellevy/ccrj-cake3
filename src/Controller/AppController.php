<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

  public function initialize()
  {
    parent::initialize();

    $this->loadComponent('RequestHandler');
    $this->loadComponent('Flash');
  }

  public function beforeRender(Event $event)
  {
    if (!array_key_exists('_serialize', $this->viewVars) && in_array($this->response->type(), ['application/json', 'application/xml'])) {
      $this->set('_serialize', true);
    }
  }

  public function beforeFilter(Event $event)
  {
    $this->viewBuilder()->theme('Site');

    $this->loadModel('Menu');
    $menu = $this->Menu->find('all', ['contain'=>[
      'ChildMenu'=>[
        'conditions'=>['ChildMenu.status'=>1]
      ]
    ],
    'conditions'=>[
      'parent_id' => 0,
      'Menu.status'=>1
      ]]);
      $menu = $menu->all();
      $this->set('menu', $menu);

      // die(debug($menu));
    }
  }
