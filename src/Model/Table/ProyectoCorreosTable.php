<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProyectoCorreos Model
 *
 * @property \App\Model\Table\ProyectosTable|\Cake\ORM\Association\BelongsTo $Proyectos
 *
 * @method \App\Model\Entity\ProyectoCorreo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProyectoCorreo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProyectoCorreo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProyectoCorreo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProyectoCorreo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProyectoCorreo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProyectoCorreo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProyectoCorreo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProyectoCorreosTable extends Table
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

        $this->setTable('proyecto_correos');
        $this->setDisplayField('id');
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
            ->scalar('usuario')
            ->maxLength('usuario', 200)
            ->requirePresence('usuario', 'create')
            ->notEmpty('usuario');

        $validator
            ->scalar('contrasenia')
            ->maxLength('contrasenia', 200)
            ->requirePresence('contrasenia', 'create')
            ->notEmpty('contrasenia');

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
