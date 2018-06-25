<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* Banners Controller
*
* @property \App\Model\Table\BannersTable $Banners
*/
class BannersController extends AppController
{
  public function index()
  {
    $banners = $this->paginate($this->Banners, [
      'order'=>[
        'id'=>'DESC'
      ]
    ]);

    //die(debug($banners));

    $this->set(compact('banners'));
    $this->set('_serialize', ['banners']);
  }

  public function add()
  {
    $banner = $this->Banners->newEntity();

    if ($this->request->is('post')) {
      $data = $this->request->getData();
      $banner = $this->Banners->patchEntity($banner, $data,[
        'associated' => [
          'Files'
        ]
      ]);

      if ($this->Banners->save($banner)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('banner'));
    $this->set('_serialize', ['banner']);
  }

  public function view($id = null)
  {
    $banner = $this->Banners->get($id, [
      'contain' => [
        'Files'
      ]
    ]);

    $this->set('banner', $banner);
    $this->set('_serialize', ['banner']);
  }

  public function edit($id = null)
  {
    $banner = $this->Banners->get($id, [
      // 'fields'=>'id',
      'contain' => [
        'Banner'
      ]
    ]);
    
    if ($this->request->is(['patch', 'post', 'put'])) {
      $banner = $this->Banners->patchEntity($banner, $this->request->getData());

      foreach($banner->files as $key_file=>$file){
        if($file->filename==''){
          unset($banner->files[$key_file]);
        }
      }

      if ($this->Banners->save($banner)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    // die(debug($banner));
    $this->set(compact('banner'));
    $this->set('_serialize', ['banner']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $banner = $this->Banners->get($id);
    if ($this->Banners->delete($banner)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /* AJAX methods */

  public function delete_file($file_id = null, $banner_id=null){
    $this->autoRender = false;
    $entity = $this->Banners->Files->get($file_id);

    if($this->Banners->Files->delete($entity)){
      echo('1');
    }
  }
}
