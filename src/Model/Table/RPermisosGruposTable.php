<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RPermisosGrupos Model
 *
 * @method \App\Model\Entity\RPermisosGrupo get($primaryKey, $options = [])
 * @method \App\Model\Entity\RPermisosGrupo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RPermisosGrupo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RPermisosGrupo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RPermisosGrupo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RPermisosGrupo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RPermisosGrupo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RPermisosGrupo findOrCreate($search, callable $callback = null, $options = [])
 */
class RPermisosGruposTable extends Table
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

        $this->setTable('r_permisos_grupos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('id_cat_grupo')
            ->maxLength('id_cat_grupo', 36)
            ->requirePresence('id_cat_grupo', 'create')
            ->notEmpty('id_cat_grupo');

        $validator
            ->scalar('id_cat_permiso')
            ->maxLength('id_cat_permiso', 36)
            ->requirePresence('id_cat_permiso', 'create')
            ->notEmpty('id_cat_permiso');

        $validator
            ->boolean('activo')
            ->requirePresence('activo', 'create')
            ->notEmpty('activo');

        return $validator;
    }
}
