<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $idcliente
 * @property string $email
 * @property int $cpf
 * @property string $nome
 * @property string $cnh
 * @property string $telefone
 * @property int $idendereco
 */
class Cliente extends Entity
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
        'email' => true,
        'cpf' => true,
        'nome' => true,
        'cnh' => true,
        'telefone' => true,
        'idendereco' => true
    ];
}
