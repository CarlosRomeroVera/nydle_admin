<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proyectos Model
 *
 * @property \App\Model\Table\ClientesTable|\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\ProyectoCorreosTable|\Cake\ORM\Association\HasMany $ProyectoCorreos
 * @property \App\Model\Table\ProyectoCpanelTable|\Cake\ORM\Association\HasMany $ProyectoCpanel
 * @property \App\Model\Table\ProyectoCuentasExtraTable|\Cake\ORM\Association\HasMany $ProyectoCuentasExtra
 * @property \App\Model\Table\ProyectoDnsTable|\Cake\ORM\Association\HasMany $ProyectoDns
 * @property \App\Model\Table\ProyectoUsersAsignadosTable|\Cake\ORM\Association\HasMany $ProyectoUsersAsignados
 *
 * @method \App\Model\Entity\Proyecto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proyecto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proyecto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proyecto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proyecto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProyectosTable extends Table
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

        $this->setTable('proyectos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ProyectoCorreos', [
            'foreignKey' => 'proyecto_id'
        ]);
        $this->hasMany('ProyectoCpanel', [
            'foreignKey' => 'proyecto_id'
        ]);
        $this->hasMany('ProyectoCuentasExtra', [
            'foreignKey' => 'proyecto_id'
        ]);
        $this->hasMany('ProyectoDns', [
            'foreignKey' => 'proyecto_id'
        ]);
        $this->hasMany('ProyectoUsersAsignados', [
            'foreignKey' => 'proyecto_id'
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
            ->scalar('observaciones')
            ->maxLength('observaciones', 4294967295)
            ->allowEmpty('observaciones');

        $validator
            ->dateTime('fecha_inicio')
            ->requirePresence('fecha_inicio', 'create')
            ->notEmpty('fecha_inicio');

        $validator
            ->dateTime('fecha_vencimiento')
            ->requirePresence('fecha_vencimiento', 'create')
            ->notEmpty('fecha_vencimiento');

        $validator
            ->boolean('activo')
            ->allowEmpty('activo');

        $validator
            ->boolean('renovado')
            ->allowEmpty('renovado');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));

        return $rules;
    }
}
