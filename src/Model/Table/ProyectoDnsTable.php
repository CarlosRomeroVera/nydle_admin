<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProyectoDns Model
 *
 * @property \App\Model\Table\ProyectosTable|\Cake\ORM\Association\BelongsTo $Proyectos
 *
 * @method \App\Model\Entity\ProyectoDn get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProyectoDn newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProyectoDn[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProyectoDn|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProyectoDn|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProyectoDn patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProyectoDn[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProyectoDn findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProyectoDnsTable extends Table
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

        $this->setTable('proyecto_dns');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Proyectos', [
            'foreignKey' => 'proyecto_id',
            'joinType' => 'INNER'
        ]);
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('ip_servidor')
            ->maxLength('ip_servidor', 200)
            ->requirePresence('ip_servidor', 'create')
            ->notEmpty('ip_servidor');

        $validator
            ->scalar('nameserver')
            ->maxLength('nameserver', 200)
            ->requirePresence('nameserver', 'create')
            ->notEmpty('nameserver');

        $validator
            ->boolean('activo')
            ->allowEmpty('activo');

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
        $rules->add($rules->existsIn(['proyecto_id'], 'Proyectos'));

        return $rules;
    }
}
