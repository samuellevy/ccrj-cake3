<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class PagesController extends AppController
{
  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $configs['action'] = $this->request->action;
    $configs['matchedRoute']= $this->request->params['_matchedRoute'];
    $this->set(compact('configs'));
  }

  public function beforeRender(Event $event){
    // die(debug($this->request->params));
    $this->viewBuilder()->layout('mobile_default');
    $this->viewBuilder()->template('/Mobile/pages/home');
  }

  public function home(){
    /* Carrega page components */
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'home'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents'=>[
          'sort'=>['sort'=>'asc']
        ],
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();
    $this->set('page', $page);
    /* Final page components */

    $this->loadModel('Institutes');
    $affiliates = $this->Institutes->find('all', [
      'contain'=>[
        'files'
      ]
    ]);
    $affiliates = $affiliates->all();

    $this->loadModel('Posts');
    $posts = $this->Posts->find('all', [
      'contain'=>[
        'files'=>['conditions'=>['obs'=>'Capa']]
      ],
      'limit' => 4,
      'order' => ['publish_date' => 'DESC'],
    ]);
    
    $posts = $posts->all();
    $posts = $posts->toArray();

    $this->loadModel('Works');
    $works = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets'
      ],
      'limit' => 3,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.feature'=>1, 'Works.status'=>1]
    ]);
    $works = $works->all();

    $this->loadModel('Testimonials');
    $testimonials = $this->Testimonials->find('all', [
      'contain'=>[
        'files'
      ],
      'limit' => 1,
      'order' => ['Testimonials.created' => 'DESC'],
    ]);
    $testimonials = $testimonials->all();

    $this->set(compact(['posts','works', 'testimonials']));
  }
  
  public function club(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'club'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents'=>[
          'sort'=>['sort'=>'asc']
        ],
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();

    $this->loadModel('Team');
    $team_top = $this->Team->find('all', [
      'contain'=>[
        'files'
      ],
      'limit' => 1,
      'conditions'=>['position !='=>'bottom']
    ]);
    $team_top = $team_top->all();

    $team_bottom = $this->Team->find('all', [
      'contain'=>[
        'files'
      ],
      'limit' => 1,
      'conditions'=>['position !='=>'top']
    ]);
    $team_bottom = $team_bottom->all();


    $this->set(compact(['page', 'team_top', 'team_bottom']));


    // die(debug($page));
  }

  public function gallery($q=null){
    $this->viewBuilder()->setLayout('pages');
    $this->loadModel('Works');
    $categories = $this->Works->Sheets->WorkCategories->find('list');
    $categories = $categories->toArray();
    $conditions = null;
    $selected_category = null;

    $featured_works = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets'
      ],
      'limit' => 3,
      'conditions'=>['status'=>1, 'feature'=>1]
    ]);
    $featured_works = $featured_works;

    $query = $this->request->query;
    if(isset($query['c'])){
      $category_id = array_search(strtolower($query['c']), array_map('strtolower', $categories));
      $conditions = ['category_id'=>$category_id];
    }
    if(isset($query['s'])){
      $search = $query['s'];
    }

    $works = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets.WorkCategories',
      ],
      'limit' => 6,
      'conditions'=>['status'=>1, 'feature'=>0, $conditions]
    ]);
    if(isset($category_id)){
      $selected_category = $categories[$category_id];
    }

    $works = $works->all();
    // die(debug($categories));
    $this->set(compact(['featured_works','works', 'selected_category']));
  }
  
  public function galleryread($id=null){
    $this->loadModel('Works');
    $work = $this->Works->get($id, [
      'contain' => [
        'Files',
        'Sheets.WorkCategories',
      ]
    ]);

    $works = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets.WorkCategories',
      ],
      'limit' => 15,
      'conditions'=>['Works.id !='=>$id]
    ]);
    $works = $works->all();
    $this->set(compact(['work', 'works']));
    $this->set('_serialize', ['work', 'works']);
    // die(debug($post));
  }

  public function news(){
    $this->loadModel('Posts');
    $posts = $this->Posts->find('all', [
      'contain'=>[
        'files'=>['conditions'=>['obs'=>'Capa']],
        'Authors'
      ],
      'limit' => 15
    ]);
    $posts = $posts->all();
    // die(debug($posts));
    $this->set(compact(['posts']));
  }

  public function newsread($id=null){
    $this->loadModel('Posts');
    $post = $this->Posts->get($id, [
      'contain' => [
        'Files',
        'Capas'
      ]
    ]);

    $posts = $this->Posts->find('all', [
      'contain'=>[
        'files',
        'Capas'
      ],
      'limit' => 15,
      'conditions'=>['Posts.id !='=>$id]
    ]);
    $posts = $posts->all();
    $this->set(compact(['post', 'posts']));
    $this->set('_serialize', ['post', 'posts']);
    // die(debug($post));
  }

  public function opinion(){
    $this->loadModel('Testimonials');
    $testimonials = $this->Testimonials->find('all', [
      'contain'=>[
        'files',
      ],
      'limit' => 15
    ]);
    $testimonials = $testimonials->all();
    $testimonials = $testimonials->toArray();

    // die(debug($testimonials));
    $this->set(compact(['testimonials']));
  }

  public function contact(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'contact'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents'=>[
          'sort'=>['sort'=>'asc']
        ],
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();
    $this->set(compact(['page']));
    // die(debug($page));
  }

}