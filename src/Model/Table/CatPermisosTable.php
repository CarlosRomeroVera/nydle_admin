<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CatPermisos Model
 *
 * @method \App\Model\Entity\CatPermiso get($primaryKey, $options = [])
 * @method \App\Model\Entity\CatPermiso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CatPermiso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CatPermiso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatPermiso|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatPermiso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CatPermiso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CatPermiso findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CatPermisosTable extends Table
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

        $this->setTable('cat_permisos');
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
            ->scalar('controlador')
            ->maxLength('controlador', 200)
            ->requirePresence('controlador', 'create')
            ->notEmpty('controlador');

        $validator
            ->scalar('accion')
            ->maxLength('accion', 200)
            ->requirePresence('accion', 'create')
            ->notEmpty('accion');

        $validator
            ->boolean('activo')
            ->requirePresence('activo', 'create')
            ->notEmpty('activo');

        return $validator;
    }
}
