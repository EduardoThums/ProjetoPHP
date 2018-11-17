<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Veiculo Model
 *
 * @method \App\Model\Entity\Veiculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Veiculo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Veiculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Veiculo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Veiculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo findOrCreate($search, callable $callback = null, $options = [])
 */
class VeiculoTable extends Table
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

        $this->setTable('veiculo');
        $this->setDisplayField('idveiculo');
        $this->setPrimaryKey('idveiculo');
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
            ->integer('idveiculo')
            ->allowEmpty('idveiculo', 'create');

        $validator
            ->scalar('placa')
            ->maxLength('placa', 15)
            ->requirePresence('placa', 'create')
            ->notEmpty('placa')
            ->add('placa', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('fabricante')
            ->maxLength('fabricante', 50)
            ->requirePresence('fabricante', 'create')
            ->notEmpty('fabricante');

        $validator
            ->date('ano')
            ->requirePresence('ano', 'create')
            ->notEmpty('ano');

        $validator
            ->scalar('modelo')
            ->maxLength('modelo', 50)
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo');

        $validator
            ->scalar('cor')
            ->maxLength('cor', 20)
            ->requirePresence('cor', 'create')
            ->notEmpty('cor');

        $validator
            ->scalar('radio')
            ->maxLength('radio', 1)
            ->requirePresence('radio', 'create')
            ->notEmpty('radio');

        $validator
            ->scalar('arcondicionado')
            ->maxLength('arcondicionado', 1)
            ->requirePresence('arcondicionado', 'create')
            ->notEmpty('arcondicionado');

        $validator
            ->scalar('vidroeletrico')
            ->maxLength('vidroeletrico', 1)
            ->requirePresence('vidroeletrico', 'create')
            ->notEmpty('vidroeletrico');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['placa']));

        return $rules;
    }
}
