<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Works Model
 *
 * @property \Cake\ORM\Association\HasMany $Sheets
 *
 * @method \App\Model\Entity\Work get($primaryKey, $options = [])
 * @method \App\Model\Entity\Work newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Work[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Work|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Work patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Work[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Work findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class WorksTable extends Table
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

        $this->setTable('works');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sheets', [
            'foreignKey' => 'work_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('sender_name');

        $validator
            ->allowEmpty('sender_email');

        $validator
            ->allowEmpty('description');

        return $validator;
    }
}
