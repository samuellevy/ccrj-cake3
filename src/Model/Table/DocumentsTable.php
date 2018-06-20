<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class DocumentsTable extends Table
{

  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('documents');
    $this->setDisplayField('title');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');

    $this->belongsTo('DocumentsCategories', [
      'foreignKey' => 'category_id'
    ]);

    $this->hasOne('Files', [
      'className' => 'Files',
      'foreignKey' => 'model_id',
      'conditions' => [
        'entity' => 'Document'
      ]
    ]);

    $this->belongsTo('DocumentsYears', [
      'className' => 'DocumentsYears',
      'foreignKey' => 'year_id',
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
    
    return $validator;
  }
}
