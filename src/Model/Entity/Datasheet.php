<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Datasheet Entity
 *
 * @property int $id
 * @property string $advertiser
 * @property string $project_title
 * @property string $agency_network
 * @property string $creative_director
 * @property string $art_director
 * @property string $writer
 * @property string $illustrator
 * @property string $photographer
 * @property string $music_producer
 * @property string $video_producer
 * @property string $production_company
 * @property int $work_id
 * @property int $category_id
 *
 * @property \App\Model\Entity\Work $work
 */
class Datasheet extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
