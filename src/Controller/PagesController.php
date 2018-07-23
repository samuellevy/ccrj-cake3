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
    $configs['matchedRoute'] = $this->request->params['_matchedRoute'];
    $configs['url'] =  '/'.strtolower($this->request->params['controller']).'/'.$this->request->action;
    $this->set(compact('configs'));

    // die(debug($this->request->params));
  }

  public function beforeRender(Event $event){
    parent::beforeRender($event);
  }

  public function home(){
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
        'Sheets',
        'medias'
      ],
      'limit' => 3,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.feature'=>1, 'Works.status'=>1]
    ]);
    $works = $works->all();

    $randombanner = $this->Works->find('all', [
      'contain'=>[
        'files',
        'medias'
      ],
      'limit'=>10,
      'order' => ('Works.created DESC'),
      'conditions'=>['Works.status'=>1]
    ]);

    $randombanner = $randombanner->all()->toArray();

    die(debug($randombanner));
    
    $this->loadModel('Testimonials');
    $testimonials = $this->Testimonials->find('all', [
      'contain'=>[
        'files'
      ],
      'limit' => 1,
      'order' => ['Testimonials.created' => 'DESC'],
    ]);
    $testimonials = $testimonials->all();

    $this->set(compact(['page', 'banners', 'posts', 'works', 'testimonials', 'randombanner']));
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
      'conditions'=>['position !='=>'bottom']
    ]);
    $team_top = $team_top->all();

    $team_bottom = $this->Team->find('all', [
      'contain'=>[
        'files'
      ],
      'conditions'=>['position !='=>'top']
    ]);
    $team_bottom = $team_bottom->all();
    
    $this->loadModel('Documents');
    $documents = $this->Documents->find('all', [
      'contain'=>[
        'Files'
      ],
    ]);
    $documents = $documents->all();

    $this->set(compact(['page', 'team_top', 'team_bottom', 'documents']));


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
        'Sheets',
        'medias'
      ],
      'limit' => 3,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.feature'=>1, 'Works.status'=>1]
    ]);
    $featured_works = $featured_works;
    
    $worksfull = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets',
        'medias'
      ],
      'limit' => 15,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.status'=>1]
    ]);
    $worksfull = $worksfull->all();

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
        'Files',
        'medias',
        'Sheets.WorkCategories',
      ],
      'limit' => 100,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.feature'=>0, 'Works.status'=>1]
    ]);
    if(isset($category_id)){
      $selected_category = $categories[$category_id];
    }

    $works = $works->all();
    // die(debug($works));
    $this->set(compact(['featured_works','works', 'selected_category', 'worksfull']));
  }
  
  public function galleryread($id=null){
    $this->loadModel('Works');
    $work = $this->Works->get($id, [
      'contain' => [
        'Files',
        'Sheets.WorkCategories',
        'medias'
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
    $lastposts = $this->Posts->find('all', [
      'contain' => [
        'Files',
        'Capas',
        'Authors'
      ],
      'limit' => 3,
      'order'=>[
        'publish_date'=>'DESC'
      ]
    ]);

    $posts = $this->Posts->find('all', [
      'contain'=>[
        'files',
        'Miniaturas'
      ],
      'limit' => 15,
      'order'=>[
        'publish_date'=>'DESC'
      ]
    ]);

    $lastposts = $lastposts->all();
    $posts = $posts->all();

    // die(debug($posts));
    $this->set(compact(['posts', 'lastposts']));
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
        'Miniaturas'
      ],
      'limit' => 15,
      'conditions'=>['Posts.id !='=>$id],
      'order'=>[
        'publish_date'=>'DESC'
      ]
    ]);
    $posts = $posts->all();
    $this->set(compact(['post', 'posts']));
    $this->set('_serialize', ['post', 'posts']);
    // die(debug($post));
  }

  public function opinion($id=null){
    $this->loadModel('Testimonials');
    if($id==null){
      $testimonials = $this->Testimonials->find('all', [
        'contain'=>[
          'files',
        ],
        'limit' => 15
      ]);
      $testimonials = $testimonials->all();
      $testimonials = $testimonials->toArray();
    } else {
      $opinion = $this->Testimonials->get($id, [
        'contain' => [
          'files'
          ]
        ]);
        $opinions = $this->Testimonials->find('all', [
          'contain'=>[
            'files',
          ],
          'conditions'=>[
            'Testimonials.id !='=>$id,
          ],
          'limit' => 15
          ]);
          $opinions = $opinions->all();
          $opinions = $opinions->toArray();
        }
        
    // die(debug($testimonials));
    $this->set(compact(['testimonials', 'opinion', 'opinions']));
  }

  public function contact(){
    $this->loadModel('Contacts');
    $contacts = $this->Contacts->find('all');
    $contacts = $contacts->all();

    $this->set(compact(['posts','works','testimonials','contacts']));

    $this->set(compact(['contacts']));
  }

}