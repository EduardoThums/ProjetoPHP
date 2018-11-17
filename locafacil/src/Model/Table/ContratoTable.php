<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contrato Model
 *
 * @method \App\Model\Entity\Contrato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contrato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contrato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contrato|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato findOrCreate($search, callable $callback = null, $options = [])
 */
class ContratoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('contrato');
        $this->setDisplayField('idcontrato');
        $this->setPrimaryKey('idcontrato');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idcontrato')
            ->allowEmpty('idcontrato', 'create');

        $validator
            ->integer('idcliente')
            ->requirePresence('idcliente', 'create')
            ->notEmpty('idcliente');

        $validator
            ->integer('idplano')
            ->requirePresence('idplano', 'create')
            ->notEmpty('idplano');

        $validator
            ->integer('idveiculo')
            ->requirePresence('idveiculo', 'create')
            ->notEmpty('idveiculo');

        $validator
            ->date('data_validade')
            ->requirePresence('data_validade', 'create')
            ->notEmpty('data_validade');

        return $validator;
    }
}
