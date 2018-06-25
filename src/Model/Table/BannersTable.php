<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Banners Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $Media
 * @property \Cake\ORM\Association\BelongsTo $CoverMedia
 * @property \Cake\ORM\Association\BelongsTo $Authors
 * @property \Cake\ORM\Association\BelongsTo $UpdateAuthors
 *
 * @method \App\Model\Entity\Banner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Banner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Banner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Banner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Banner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Banner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Banner findOrCreate($search, callable $callback = null, $options = [])
 */
class BannersTable extends Table
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

        $this->setTable('banners');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->hasMany('Files', [
          'className' => 'Files',
          'foreignKey' => 'model_id',
          'conditions' => [
            'entity' => 'Banner'
          ]
        ]);

        $this->hasMany('Banner', [
          'className' => 'Files',
          'foreignKey' => 'model_id',
          'conditions' => [
            'entity' => 'Banner',
            'obs' => 'Banner'
          ]
        ]);

        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');


        return $validator;
    }
}
