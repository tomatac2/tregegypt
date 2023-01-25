<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\Error;
use App\Hellpers\GeneralActions;
use App\Hellpers\Fields;
/**
 * ContactUs Controller
 *
 * @property \App\Model\Table\ContactUsTable $ContactUs
 * @method \App\Model\Entity\ContactU[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactUsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    function contact(){ 
        $this->viewBuilder()->setLayout('website');
     $req = $this->request->getData();
     $param=[
         "table_name"=>"ContactUs",
         "msg"=>"تواصل معنا",
         "fields"=> [  "status"=>"contact",  "full_name"=>$req["full_name"],  "email"=>$req["email"],   "message"=>$req["message"],  "subject"=>$req["subject"] ] ,
         "validate_name"=> "contact",
     ];
  
     if ($this->request->is('post')) {
         $query = GeneralActions::create($param);
          if ($query["success"] == true) {
             $this->Flash->success(__('تم الحفظ بنجاح'));

             return $this->redirect(["controller"=>"About",'action' => 'home' ]);
         }
         $this->Flash->error(__(Error::errorMsg($query["msg"])));
     }

    }
    function getProduct(){ 
        $this->viewBuilder()->setLayout('website');
     $req = $this->request->getData();
     $param=[
         "table_name"=>"ContactUs",
         "msg"=>"اطلب منتج",
         "fields"=> [  "status"=>"order",  "full_name"=>$req["full_name"],  "email"=>$req["email"],   "message"=>$req["message"],  "mobile"=>$req["mobile"] ] ,
         "validate_name"=> "getProduct",
     ];
  
     if ($this->request->is('post')) {
         $query = GeneralActions::create($param);
          if ($query["success"] == true) {
             $this->Flash->success(__('تم الحفظ بنجاح'));

             return $this->redirect(["controller"=>"About",'action' => 'home' ]);
         }
         $this->Flash->error(__(Error::errorMsg($query["msg"])));
     }

    }

    public function indexOrders()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $this->paginate = [
            "order"=>["ContactUs.id"=>'DESC'],
            "conditions"=>["ContactUs.status"=>"order"]
        ] ;
        $contactUs = $this->paginate($this->ContactUs);

        $this->set(compact('contactUs'));
    }
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $this->paginate = [
            "order"=>["ContactUs.id"=>'DESC'],
            "conditions"=>["ContactUs.status"=>"contact"]
        ] ;
        $contactUs = $this->paginate($this->ContactUs);

        $this->set(compact('contactUs'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact U id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactU = $this->ContactUs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contactU'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactU = $this->ContactUs->newEmptyEntity();
        if ($this->request->is('post')) {
            $contactU = $this->ContactUs->patchEntity($contactU, $this->request->getData());
            if ($this->ContactUs->save($contactU)) {
                $this->Flash->success(__('The contact u has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact u could not be saved. Please, try again.'));
        }
        $this->set(compact('contactU'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact U id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactU = $this->ContactUs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactU = $this->ContactUs->patchEntity($contactU, $this->request->getData());
            if ($this->ContactUs->save($contactU)) {
                $this->Flash->success(__('The contact u has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact u could not be saved. Please, try again.'));
        }
        $this->set(compact('contactU'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact U id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactU = $this->ContactUs->get($id);
        if ($this->ContactUs->delete($contactU)) {
            $this->Flash->success(__('The contact u has been deleted.'));
        } else {
            $this->Flash->error(__('The contact u could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
