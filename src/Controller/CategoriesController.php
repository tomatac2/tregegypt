<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\GeneralActions;
use App\Hellpers\Fields;
use App\Hellpers\Error;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $categories = $this->paginate($this->Categories);

        $this->set(compact('categories'));
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $category = $this->Categories->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('category'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('dashboard');

        
        $req = $this->request->getData();
        $param=[
            "table_name"=>"Categories",
            "msg"=>"التصنيفات",
            "fields"=> [  "name"=>$req["name"] ] ,
            "validate_name"=> "create",
        ];
     
        if ($this->request->is('post')) {
            $query = GeneralActions::create($param);
             if ($query["success"] == true) {
                $this->Flash->success(__('تم الحفظ بنجاح'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__(Error::errorMsg($query["msg"])));
        }
      
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $category = $this->Categories->get($id, [
            'contain' => [],
        ]);
  
        if ($this->request->is(['patch', 'post', 'put'])) {
            $req = $this->request->getData();
            $fields= Fields::getUpdateFields($req);
            $fields["id"] = $id ? $id : 0 ; 
   
            $param=[
                "table_name"=>"Categories",
                "msg"=>"التصنيفات",
                "fields"=> $fields , 
            ];
            $query = GeneralActions::update($param);
            if ($query["success"]== true) {
                $this->Flash->success(__('تم التحديث بنجاح'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__(Error::errorMsg($query["msg"])));
        }
        $this->set(compact('category'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
