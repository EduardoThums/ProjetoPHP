<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Plano Model
 *
 * @method \App\Model\Entity\Plano get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plano newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Plano[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plano|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plano|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plano patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plano[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plano findOrCreate($search, callable $callback = null, $options = [])
 */
class PlanoTable extends Table
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

        $this->setTable('plano');
        $this->setDisplayField('idplano');
        $this->setPrimaryKey('idplano');
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
            ->integer('idplano')
            ->allowEmpty('idplano', 'create');

        $validator
            ->scalar('guincho')
            ->maxLength('guincho', 1)
            ->requirePresence('guincho', 'create')
            ->notEmpty('guincho');

        $validator
            ->scalar('carroreserva')
            ->maxLength('carroreserva', 1)
            ->requirePresence('carroreserva', 'create')
            ->notEmpty('carroreserva');

        $validator
            ->scalar('sinistro')
            ->maxLength('sinistro', 1)
            ->requirePresence('sinistro', 'create')
            ->notEmpty('sinistro');

        $validator
            ->scalar('locacao')
            ->maxLength('locacao', 20)
            ->requirePresence('locacao', 'create')
            ->notEmpty('locacao');

        return $validator;
    }
}
