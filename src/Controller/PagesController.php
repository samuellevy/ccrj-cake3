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

  /* paginas ccrj */
  public function send(){
    $this->viewBuilder()->setLayout('Site');
    $this->viewBuilder()->setLayout('pages');
  }
  /* */

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

  public function galeria(){
    
  }

  public function public(){

  }

  public function institucional(){
    /* Carrega page components */
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'institucional'
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


    $this->loadModel('Team');
    $team_top = $this->Team->find('all', [
      'contain'=>[
        'files',
        'departments'
      ],
      'conditions' =>[
        'position' => 'top'
      ],
      ['limit' => 3]
    ]);
    $team_top = $team_top->all();

    $team_bottom = $this->Team->find('all', [
      'contain'=>[
        'files',
        'departments'
      ],
      'conditions' =>[
        'position' => 'bottom'
      ]
    ]);
    $team_bottom = $team_bottom->all();

    $departments = $this->Team->Departments->find('all', [
      'contain' =>[
        'team' => [
          'conditions' =>[
            'position' => 'bottom'
          ]
        ]
      ],
    ]);
    $departments = $departments->all();

    $this->loadModel('Documents');
    $documents = $this->Documents->find('all', [
      'conditions'=>[
        'category_id' => 1
      ],
      'contain' => [
        'files'
      ]
    ]);

    $this->loadModel('Parceiros');
    $parceiros = $this->Parceiros->find('all', [
      'contain'=>[
        'files'
      ]
    ]);
    $parceiros = $parceiros->all();

    //die(debug($documents));
    $this->set('parceiros', $parceiros);
    $this->set('team_top', $team_top);
    $this->set('team_bottom', $team_bottom);
    $this->set('departments', $departments);
    $this->set('documents', $documents);
  }

  public function beneficios(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'beneficios'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();
    $this->set('page', $page);
  }

  public function planjus(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'planjus'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();
    $this->set('page', $page);
  }

  public function portabilidade(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'portabilidade'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();
    $this->set('page', $page);
  }

  public function numeros(){
    $this->loadModel('Documents');
    $years = $this->Documents->DocumentsYears->find("all",['contain'=>'Documents.Files']);
    $years = $years->all();

    $investimentos = $this->Documents->find("all", ['contain'=>['Files'], 'conditions'=>['category_id'=>3]]);
    $investimentos = $investimentos->all();

    $atuariais = $this->Documents->find("all", ['contain'=>['Files'], 'conditions'=>['category_id'=>4]]);
    $atuariais = $atuariais->all();

    $contabeis = $this->Documents->find("all", ['contain'=>['Files'], 'conditions'=>['category_id'=>9]]);
    $contabeis = $contabeis->all();

    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'numeros'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();

    $this->set(compact('years','page','investimentos', 'atuariais', 'contabeis'));
    //die(debug($investimentos));
    // $this->set('years', $years);
  }

  public function instituidoras(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'instituidoras'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents'=>[
          'sort'=>['sort'=>'asc']
        ],
      ]
    ]);
    $page = $page->first();
    $this->set('page', $page);

    $ufs = ['ac'=>'Acre','al'=>'Alagoas','am'=>'Amazonas','ap'=>'Amapá','ba'=>'Bahia','ce'=>'Ceará','df'=>'Distrito Federal','es'=>'Espírito Santo','go'=>'Goiás','ma'=>'Maranhão','mg'=>'Minas Gerais','ms'=>'Mato Grosso do Sul','mt'=>'Mato Grosso','pa'=>'Pará','pb'=>'Paraíba','pe'=>'Pernambuco','pi'=>'Piauí','pr'=>'Paraná','rj'=>'Rio de Janeiro','rn'=>'Rio Grande do Norte','ro'=>'Rondônia','rr'=>'Roraima','rs'=>'Rio Grande do Sul','sc'=>'Santa Catarina','se'=>'Sergipe','sp'=>'São Paulo','to'=>'Tocantins'];
    $this->set('ufs',$ufs);

    $this->loadModel('Institutes');

    $institutes = $this->Institutes->find('all');
    $institutes = $institutes->all();

    $this->loadModel('Institutes');
    $affiliates = $this->Institutes->find('all', [
      'contain'=>[
        'files'
      ]
    ]);
    $affiliates = $affiliates->all();


    $this->set('institutes', $institutes);
    $this->set('affiliates', $affiliates);

    if ($this->request->is('post')) {
      $data = $this->request->getData();
        if($data['password']=='instituidorajusprev'){
          return $this->redirect(['action' => 'acessoinstituidoras']);
        }
        else{
          $this->Flash->error(__('Senha errada. Por favor, tente novamente.'));
        }
    }

  }

  public function blog(){
    $this->loadModel('Posts');

    $posts = $this->paginate($this->Posts, [
      'contain'=>[
        'BlogCategories',
        'BlogPostTags.Tags',
        'Files',
        'Authors'
      ],
      'order'=>[
        'id'=>'DESC'
      ],
      'limit'=>10
    ]);

    $popular_posts = $this->Posts->find('all',[
      'contain'=>[
        'BlogCategories',
        'BlogPostTags.Tags',
        'Files',
        'Authors'
      ],
      'order'=>[
        'Posts.id'=>'DESC'
      ],
      'limit'=>10
    ]);
    // Uma iteração executa a consulta
    // foreach ($popular_posts as $row) {
    // }

    // Chamando all() executa a consulta.
    // e retorna os conjuntos de resultados.
    $results = $popular_posts->all();
    $popular_posts = $popular_posts->toArray();

    $this->set(compact('posts', 'popular_posts'));
    $this->set('_serialize', ['posts', 'popular_posts']);

    //die(debug($posts));
  }

  public function contato($type=null){
    $this->loadModel('Institutes');

    $institutes = $this->Institutes->find('all');
    $institutes = $institutes->all();

    $this->set('institutes', $institutes);

    $this->loadModel('Messages');
    $message = $this->Messages->newEntity();
    if ($this->request->is('post')) {
      $message = $this->Messages->patchEntity($message, $this->request->getData());
      if ($this->Messages->save($message)) {
        $this->Flash->success(__('Mensagem enviada com sucesso.'));

        return $this->redirect(['action' => 'contato']);
      }
      $this->Flash->error(__('A mensagem não foi enviada. Por favor, tente novamente.'));
    }
    $this->set(compact('message'));
    $this->set('type', $type);
    $this->set('_serialize', ['message']);

  }

  public function clube(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'clube_vantagens'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();
    $this->set('page', $page);

    if ($this->request->is('post')) {
      $data = $this->request->getData();

        if($data['password']=='bemestarjusprev'){
          return $this->redirect(['action' => 'clubelogado']);
        }
        else{
          $this->Flash->error(__('Senha errada. Por favor, tente novamente.'));
        }
    }
  }

  public function clubelogado($condition = null){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'clube_vantagens_logado'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();
    $this->set('page', $page);

    $this->loadModel('Clubes');

    if($condition != null){
      $conditions = [
        'OR'=>[
          'Clubes.name LIKE'=>"%$condition%",
          'Clubes.description LIKE'=>"%$condition%",
          'Clubes.website LIKE'=>"%$condition%",
          'Clubes.advantage LIKE'=>"%$condition%",
          'Clubes.conditions LIKE'=>"%$condition%"
        ]
      ];
    }else{
      $conditions=[];
    }
    $clubes = $this->paginate($this->Clubes, [
      'contain'=>[
        'Files',
        'Categories'
      ],
      'order'=>[
        'id'=>'ASC'
      ],
      'conditions'=>$conditions
    ]);
    $this->set('clubes',$clubes);

    $this->loadModel('CategoriasClubes');
    $categorias = $this->CategoriasClubes->find('all');
    $categorias = $categorias->toArray();

    $this->set('categorias',$categorias);

  }

  public function post(){

  }

  public function execute_query(){
    echo "<pre>";
    foreach($atas as $ata):
      $pos = strpos($ata->title, '–');
      $date = substr($ata->title, $pos + 4);
      $id_item = $ata->id;
      $final_date = $this->inverteData($date);
      echo $this->inverteData($date) . "\n";

      $item = $this->Documents->get($id_item);
      $item = $this->Documents->patchEntity($item, ['publish_date'=>$final_date]);

      if ($this->Documents->save($item)) {

      }
    endforeach;
    echo "</pre>";
    exit();
  }

  function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
  }

  public function acessoinstituidoras(){
    $this->loadModel('Documents');

    $atas = $this->Documents->find("all", ['contain'=>['Files'], 'conditions'=>['category_id'=>6]]);
    $atas = $atas->all();

    $contratos = $this->Documents->find("all", ['contain'=>['Files'], 'conditions'=>['category_id'=>7]]);
    $contratos = $contratos->all();

    $financeiro = $this->Documents->find("all", ['contain'=>['Files'], 'conditions'=>['category_id'=>8]]);
    $financeiro = $financeiro->all();

    $this->set(compact('atas', 'contratos', 'financeiro'));

    $month_request = NULL;
    $year_request = NULL;

    if ($this->request->is('post')) {
      $request = $this->request->getData();
      // die(debug($request));
      $month_request = $request['month'];
      $year_request = $request['year'];
      $type_request = $request['type'];
    }

    $this->set(compact('month_request', 'year_request', 'type_request'));
  }
}
