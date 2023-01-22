<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agents Model
 *
 * @method \App\Model\Entity\Agent newEmptyEntity()
 * @method \App\Model\Entity\Agent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Agent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Agent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgentsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('agents');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmptyString('title');

        $validator
            ->scalar('area')
            ->maxLength('area', 255)
            ->allowEmptyString('area');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 255)
            ->allowEmptyString('mobile');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        return $validator;
    }


    public function validationUpdate($validator) {
        $validator
        ->notEmpty('name', 'ادخل اسم الموزع',['mode'=>'update']) 
        ->notEmpty('title', 'ادخل تخصص الموزع',['mode'=>'update']) 
        ->notEmpty('area', 'ادخل المحافظة',['mode'=>'update']) 
        ->notEmpty('address', 'ادخل العنوان',['mode'=>'update']) 
        ->notEmpty('mobile', 'ادخل رقم الهاتف',['mode'=>'update']) 
        ->notEmpty('photo', 'ادخل الصورة',['mode'=>'update']) ; 
    
        return $validator;
    }
    ////////custom validations 
    public function validationCreate($validator) {
        $validator
        ->notEmpty('name', 'ادخل اسم الموزع') 
        ->notEmpty('title', 'ادخل تخصص الموزع') 
        ->notEmpty('area', 'ادخل المحافظة') 
        ->notEmpty('address', 'ادخل العنوان') 
        ->notEmpty('mobile', 'ادخل رقم الهاتف') 
        ->notEmpty('photo', 'ادخل الصورة') ; 
    
        return $validator;
    }

}
