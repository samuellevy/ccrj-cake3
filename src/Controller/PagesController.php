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

    $this->loadModel('Testimonials');
    $testimonials = $this->Testimonials->find('all', [
      'contain'=>[
        'files'
      ]
    ]);
    $testimonials = $testimonials->all();

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
        'files',
        'authors'
      ],
      'limit' => 4,
      'order' => ['publish_date' => 'DESC']
    ]);
    $posts = $posts->all();

    $this->set('testimonials', $testimonials);
    $this->set('affiliates', $affiliates);
    $this->set('posts', $posts);
  }
  
  public function club(){
    
  }

  public function gallery(){
    
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