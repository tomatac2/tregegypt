<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\GeneralActions;
use App\Hellpers\Fields;
use App\Hellpers\Error;
/**
 * Teams Controller
 *
 * @property \App\Model\Table\TeamsTable $Teams
 * @method \App\Model\Entity\Team[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $teams = $this->paginate($this->Teams);

        $this->set(compact('teams'));
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
            "table_name"=>"Teams",
            "msg"=>"فريق العمل",
            "fields"=> [  "name"=>$req["name"],"title"=>$req["title"],'career'=>$req["career"],"photo"=>$req["photo"] ] ,
            "validate_name"=> "create",
            "file"=>["name"=>"photo" , "path"=>"library/teams"]
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
     * @param string|null $id Team id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');

        $team = $this->Teams->get($id, [
            'contain' => [],
        ]);
       
     
            if ($this->request->is(['patch', 'post', 'put'])) {
                $req = $this->request->getData();
                $fields= Fields::getUpdateFields($req);
                $fields["id"] = $id ? $id : 0 ; 
                $_FILES["photo"] ? $fields["photo"]= $_FILES["photo"] : "";
                if(empty($_FILES["photo"]["name"])) unset($fields["photo"]);
                $param=[
                    "table_name"=>"Teams",
                    "msg"=>"فريق العمل",
                    "fields"=> $fields , 
                    "file"=>["name"=>"photo" , "path"=>"library/teams"]
                ];
                 $query = GeneralActions::update($param);
                if ($query["success"]== true) {
                    $this->Flash->success(__('تم التحديث بنجاح'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__(Error::errorMsg($query["msg"])));
            }
        $this->set(compact('team'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Team id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $team = $this->Teams->get($id);
        if ($this->Teams->delete($team)) {
            $this->Flash->success(__('The team has been deleted.'));
        } else {
            $this->Flash->error(__('The team could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
