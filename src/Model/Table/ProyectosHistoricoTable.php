<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProyectosHistorico Model
 *
 * @property \App\Model\Table\ProyectosTable|\Cake\ORM\Association\BelongsTo $Proyectos
 * @property \App\Model\Table\ClientesTable|\Cake\ORM\Association\BelongsTo $Clientes
 *
 * @method \App\Model\Entity\ProyectosHistorico get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProyectosHistorico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProyectosHistorico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProyectosHistorico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProyectosHistorico|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProyectosHistorico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProyectosHistorico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProyectosHistorico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProyectosHistoricoTable extends Table
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

        $this->setTable('proyectos_historico');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Proyectos', [
            'foreignKey' => 'proyecto_original_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
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
        $rules->add($rules->existsIn(['proyecto_original_id'], 'Proyectos'));
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));

        return $rules;
    }
}
