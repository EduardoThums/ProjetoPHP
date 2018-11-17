<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $idveiculo
 * @property string $placa
 * @property string $fabricante
 * @property \Cake\I18n\FrozenDate $ano
 * @property string $modelo
 * @property string $cor
 * @property string $radio
 * @property string $arcondicionado
 * @property string $vidroeletrico
 */
class Veiculo extends Entity
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
        'placa' => true,
        'fabricante' => true,
        'ano' => true,
        'modelo' => true,
        'cor' => true,
        'radio' => true,
        'arcondicionado' => true,
        'vidroeletrico' => true
    ];
}
