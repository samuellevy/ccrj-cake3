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
    $this->set(compact('configs'));
  }
  
  public function view($slug=null){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>$slug
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
    if($page->type==2):
      $this->viewBuilder()->setLayout('newsletter');
    elseif($page->type==3):
      $this->viewBuilder()->setLayout('blank');
    endif;
    if($page->type==0){
      return $this->redirect(['controller'=>'pages', 'action'=>$page->slug]);
    }
    $this->set('page', $page);
  }

  public function public(){

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
    //die(debug($page));

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
        'files'
      ],
      'limit' => 4,
      'order' => ['publish_date' => 'DESC'],
    ]);
    
    $posts = $posts->all();
    $posts = $posts->toArray();

    /** ccrj */

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
    // die(debug($works));

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

  public function gallery(){
    $this->viewBuilder()->setLayout('pages');
    $this->loadModel('Works');
    $works = $this->Works->find('all', [
      'contain'=>[
        'files'
      ],
      'limit' => 1,
      'conditions'=>['status'=>1]
    ]);
    $works = $works->all();
    $this->set(compact(['works']));
  }
  
  public function galleryread(){
    
  }

  public function news(){
    
  }

  public function newsread(){
    
  }

  public function opinion(){
    
  }

  public function contact(){
    
  }

}