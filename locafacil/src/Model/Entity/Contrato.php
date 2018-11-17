<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity
 *
 * @property int $idcontrato
 * @property int $idcliente
 * @property int $idplano
 * @property int $idveiculo
 * @property \Cake\I18n\FrozenDate $data_validade
 */
class Contrato extends Entity
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
        'idcliente' => true,
        'idplano' => true,
        'idveiculo' => true,
        'data_validade' => true
    ];
}
