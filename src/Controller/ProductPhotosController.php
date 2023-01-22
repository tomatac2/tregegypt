<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductPhotos Controller
 *
 * @property \App\Model\Table\ProductPhotosTable $ProductPhotos
 * @method \App\Model\Entity\ProductPhoto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductPhotosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products'],
        ];
        $productPhotos = $this->paginate($this->ProductPhotos);

        $this->set(compact('productPhotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Photo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productPhoto = $this->ProductPhotos->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('productPhoto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productPhoto = $this->ProductPhotos->newEmptyEntity();
        if ($this->request->is('post')) {
            $productPhoto = $this->ProductPhotos->patchEntity($productPhoto, $this->request->getData());
            if ($this->ProductPhotos->save($productPhoto)) {
                $this->Flash->success(__('The product photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product photo could not be saved. Please, try again.'));
        }
        $products = $this->ProductPhotos->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productPhoto', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Photo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productPhoto = $this->ProductPhotos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productPhoto = $this->ProductPhotos->patchEntity($productPhoto, $this->request->getData());
            if ($this->ProductPhotos->save($productPhoto)) {
                $this->Flash->success(__('The product photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product photo could not be saved. Please, try again.'));
        }
        $products = $this->ProductPhotos->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productPhoto', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Photo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productPhoto = $this->ProductPhotos->get($id);
        if ($this->ProductPhotos->delete($productPhoto)) {
            $this->Flash->success(__('تم الحذف بنجاح'));
        } else {
            $this->Flash->error(__('لم يتم الحذف'));
        }

        return $this->redirect(['controller'=>'Products','action' => 'view' , $productPhoto["product_id"]]);
    }
}
