<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\Error;
use App\Hellpers\GeneralActions;
use App\Hellpers\Fields;
 
/**
 * Agents Controller
 *
 * @property \App\Model\Table\AgentsTable $Agents
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $this->paginate = ['page' => $_GET['page'],'limit' =>10,'maxLimit' => 100  , "order"=>["Agents.id"=>'DESC']];

        $agents = $this->paginate($this->Agents);

        $this->set(compact('agents'));
    }

    /**
     * View method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');

        $agent = $this->Agents->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('agent'));
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
            "table_name"=>"Agents",
            "msg"=>"الموزعين",
            "fields"=> [  "name"=>$req["name"],  "title"=>$req["title"],  "area"=>$req["area"],  "address"=>$req["address"],  "mobile"=>$req["mobile"],  "photo"=>$req["photo"], ] ,
            "validate_name"=> "create",
            "file"=>["name"=>"photo" , "path"=>"library/agents"]
        ];
     
        if ($this->request->is('post')) {
            $query = GeneralActions::create($param);
             if ($query["success"] == true) {
                $this->Flash->success(__('تم الحفظ بنجاح'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__(Error::errorMsg($query["msg"])));
        }
        $this->set(compact('agent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $agent = $this->Agents->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $req = $this->request->getData();
            $fields= Fields::getUpdateFields($req);
            $fields["id"] = $id ? $id : 0 ; 
             $_FILES["photo"] ? $fields["photo"]= $_FILES["photo"] : "";
            if(empty($_FILES["photo"]["name"])) unset($fields["photo"]);
            $param=[
                "table_name"=>"Agents",
                "msg"=>"الموزعين",
                "fields"=> $fields , 
                "validate_name"=> "update",
                "file"=>["name"=>"photo" , "path"=>"library/agents"]
            ];
    
        //  echo json_encode( ($fields));exit;
            $query = GeneralActions::update($param);
            if ($query["success"]== true) {
                $this->Flash->success(__('تم التحديث بنجاح'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__(Error::errorMsg($query["msg"])));
        }
        $this->set(compact('agent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agent = $this->Agents->get($id);
        if ($this->Agents->delete($agent)) {
            $this->Flash->success(__('تم الحذف بنجاح'));
        } else {
            $this->Flash->error(__('لم يتم الحذف'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
