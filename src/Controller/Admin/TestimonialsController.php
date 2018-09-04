<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* Testimonials Controller
*
* @property \App\Model\Table\TestimonialsTable $Testimonials
*/
class TestimonialsController extends AppController
{
  public function index()
  {
    $testimonials = $this->paginate($this->Testimonials);

    $this->set(compact('testimonials'));
    $this->set('_serialize', ['testimonials']);
  }

  public function add()
  {
		function slug($string) {
			if (is_string($string)) {
					$string = strtolower(trim(utf8_decode($string)));

					$before = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr';
					$after  = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';           
					$string = strtr($string, utf8_decode($before), $after);

					$replace = array(
							'/[^a-zA-Z0-9 -]/'	=> '-',
						'/[ -]+/'			=> '-',
							'/^-|-$/'		=> ''
					);
					$string = preg_replace(array_keys($replace), array_values($replace), $string);
			}
			return $string;
    }
    
    $testimonials = $this->Testimonials->find('all');
    $testimonials = $testimonials->all();
    $testimonials = $testimonials->toArray();

    $testimonial = $this->Testimonials->newEntity();


    if ($this->request->is('post')) {
      $testimonial = $this->Testimonials->patchEntity($testimonial, $this->request->getData(),[
        'associated' => [
          'Files'
        ]
      ]); 
      $slug = slug($testimonial->name);
      $count = 1;
      foreach ($testimonials as $item){
        if (slug($item->name) == $slug){
          $count++;
        }
      }

      if ($count > 1){
        $testimonial->slug = $slug.$count;
      } else{
        $testimonial->slug = $slug;
      }

      if ($this->Testimonials->save($testimonial)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('testimonial'));
    $this->set('_serialize', ['testimonial']);
  }

  public function view($id = null)
  {
    $testimonial = $this->Testimonials->get($id, [
      'contain' => ['Files']
    ]);

    $this->set('testimonial', $testimonial);
    $this->set('_serialize', ['testimonial']);
  }

  public function edit($id = null)
  {
    $testimonial = $this->Testimonials->get($id, [
      'contain' => ['Files']
    ]);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $testimonial = $this->Testimonials->patchEntity($testimonial, $this->request->getData());
      
      foreach($testimonial->files as $key_file=>$file){
        if($file->filename==''){
          unset($testimonial->files[$key_file]);
        }
      }

      if ($this->Testimonials->save($testimonial)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('testimonial'));
    $this->set('_serialize', ['testimonial']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $testimonial = $this->Testimonials->get($id);
    if ($this->Testimonials->delete($testimonial)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /* AJAX methods */

  
}
