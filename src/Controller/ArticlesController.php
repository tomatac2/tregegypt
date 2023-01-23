<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\GeneralActions;
use App\Hellpers\Fields;
use App\Hellpers\Error;
/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $this->paginate = [
            'contain' => ['Categories'],
            'order'=>["Articles.id"=>"DESC"]
        ];
        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

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
            "table_name"=>"Articles",
            "msg"=>"المقالات",
            "fields"=> ["category_id"=>$req["category_id"] ,"photo"=>$req["photo"],"title"=>$req["title"] ,"short_desc"=>$req["short_desc"] ,"long_desc"=>$req["long_desc"],"tags"=>$req["tags"] ] ,
            "validate_name"=> "create",
            "file"=>["name"=>"photo" , "path"=>"library/articles"]
        ];
     
        if($this->request->is('post')) {
            $query = GeneralActions::create($param);
            if ($query["success"] == true) {
                $this->Flash->success(__('تم الحفظ بنجاح'));
            return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__(Error::errorMsg($query["msg"])));
        }

 
        $categories = $this->Articles->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('article', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');

        $article = $this->Articles->get($id, [
            'contain' => [],
        ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $req = $this->request->getData();
                $fields= Fields::getUpdateFields($req);
                $fields["id"] = $id ? $id : 0 ; 
                $_FILES["photo"] ? $fields["photo"]= $_FILES["photo"] : "";
                if(empty($_FILES["photo"]["name"])) unset($fields["photo"]);
                $param=[
                    "table_name"=>"Articles",
                    "msg"=>"الموزعين",
                    "fields"=> $fields , 
                    "file"=>["name"=>"photo" , "path"=>"library/articles"]
                ];
        
                 $query = GeneralActions::update($param);
                if ($query["success"]== true) {
                    $this->Flash->success(__('تم التحديث بنجاح'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__(Error::errorMsg($query["msg"])));
            }
        $categories = $this->Articles->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('article', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('تم الحذف بنجاح'));
        } else {
            $this->Flash->error(__('لم يتم الحذف'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
