<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CatGrupos Model
 *
 * @method \App\Model\Entity\CatGrupo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CatGrupo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CatGrupo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CatGrupo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatGrupo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatGrupo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CatGrupo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CatGrupo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CatGruposTable extends Table
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

        $this->setTable('cat_grupos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('nombre')
            ->maxLength('nombre', 200)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->boolean('activo')
            ->allowEmpty('activo');

        return $validator;
    }
}
