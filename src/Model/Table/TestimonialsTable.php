<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TestimonialsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('testimonials');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');

    $this->hasMany('Files', [
      'className' => 'Files',
      'foreignKey' => 'model_id',
      'conditions' => [
        'entity' => 'Testimonial'
      ]
    ]);
  }

  public function validationDefault(Validator $validator)
  {
    $validator
    ->integer('id')
    ->allowEmpty('id', 'create');

    $validator
    ->requirePresence('name', 'create')
    ->notEmpty('name');

    $validator
    ->requirePresence('role', 'create')
    ->notEmpty('role');

    $validator
    ->requirePresence('testimony', 'create')
    ->notEmpty('testimony');

    return $validator;
  }

  public function buildRules(RulesChecker $rules)
  {
    // $rules->add($rules->existsIn(['author_id'], 'Authors'));
    // $rules->add($rules->existsIn(['update_author_id'], 'UpdateAuthors'));
    // $rules->add($rules->existsIn(['media_id'], 'Media'));

    return $rules;
  }
}
