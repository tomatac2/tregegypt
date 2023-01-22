<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\Error;
use App\Hellpers\GeneralActions;
use App\Hellpers\Fields;
use App\Hellpers\UploadFile;
/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $this->paginate = ['page' => $_GET['page'],'limit' =>10,'maxLimit' => 100  , "order"=>["Products.id"=>'DESC']];

        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');

        $product = $this->Products->get($id, [
            'contain' => ['ProductPhotos'],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('dashboard');

        if ($this->request->is('post')) {
            $req = $this->request->getData();
            $param=[
                "table_name"=>"Products",
                "msg"=>"المنتجات",
                "fields"=> [  "name"=>$req["name"],  "photo"=>$req["photo"] ] ,
                "validate_name"=> "create",
            ];
            $query = GeneralActions::create($param);
            if ($query["success"] == true) {

                //muliPhotos
                $this->multiPhotos(["photo"=>$req["photo"] , "product_id"=>$query["data"]["id"] ,"name"=>$query["data"]["name"] ]);

                $this->Flash->success(__('تم اضافة المنتج بنجاح'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__(Error::errorMsg($query["msg"])));
        }
        $this->set(compact('product'));
    }

    ///////
    function multiPhotos($params){

            foreach($params["photo"] as $key => $val){
                $q = $this->Products->ProductPhotos->newEmptyEntity(); 
                $finalIMG = UploadFile::uploadMultiPhotos(["photoName"=> 'photo',"path"=> 'library/products'] , $key );
    
                if($finalIMG['success'] == false):
                    $this->Flash->error(__($finalIMG["msg"]));
                    break;
                endif;
                $q = $this->Products->ProductPhotos->patchEntity($q,["photo"=>$finalIMG["name"],"product_id"=>$params["product_id"],"name"=>$params["name"]]);
                $arr[] = $q ; 
                if(!$this->Products->ProductPhotos->save($q)):
                    $this->Flash->error(__(Error::errorMsg($q->getErrors())));
                endif;
                //////
            }
       
        return $res ; 
      
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');

        $product = $this->Products->get($id, [
            'contain' => ['ProductPhotos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $req = $this->request->getData();
            $param=[
                "table_name"=>"Products",
                "msg"=>"المنتجات",
                "fields"=> [  "id"=>$id,"name"=>$req["name"] ] ,
                "validate_name"=> "update",
            ];
            $query = GeneralActions::update($param);
            if ($query["success"] == true) {
               
                //muliPhotos
                !empty($_FILES["photo"]["name"][0]) ?  $this->multiPhotos(["photo"=>$req["photo"] , "product_id"=>$query["data"]["id"] ,"name"=>$query["data"]["name"] ]) : "";

                $this->Flash->success(__('تم تحديث المنتج بنجاح'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__(Error::errorMsg($query["msg"])));
        }
        $this->set(compact('product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
