<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $idendereco
 * @property int $numero
 * @property string $rua
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $pais
 */
class Endereco extends Entity
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
        'numero' => true,
        'rua' => true,
        'bairro' => true,
        'cidade' => true,
        'estado' => true,
        'pais' => true
    ];
}
