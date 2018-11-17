<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratoFixture
 *
 */
class ContratoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'contrato';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idcontrato' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idcliente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idplano' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idveiculo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_validade' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'contrato_clientefisico_fk' => ['type' => 'index', 'columns' => ['idcliente'], 'length' => []],
            'contrato_plano_fk' => ['type' => 'index', 'columns' => ['idplano'], 'length' => []],
            'contrato_veiculo_fk' => ['type' => 'index', 'columns' => ['idveiculo'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idcontrato'], 'length' => []],
            'contrato_clientefisico_fk' => ['type' => 'foreign', 'columns' => ['idcliente'], 'references' => ['cliente', 'idcliente'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'contrato_plano_fk' => ['type' => 'foreign', 'columns' => ['idplano'], 'references' => ['plano', 'idplano'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'contrato_veiculo_fk' => ['type' => 'foreign', 'columns' => ['idveiculo'], 'references' => ['veiculo', 'idveiculo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'idcontrato' => 1,
                'idcliente' => 1,
                'idplano' => 1,
                'idveiculo' => 1,
                'data_validade' => '2018-11-17'
            ],
        ];
        parent::init();
    }
}
