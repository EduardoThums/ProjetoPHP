<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações' ) ?></li>
        <li><?= $this->Html->link(__('Editar Veiculo'), ['action' => 'edit', $veiculo->idveiculo]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Veiculo'), ['action' => 'delete', $veiculo->idveiculo], ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $veiculo->idveiculo)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Veiculo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Veiculo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="veiculo view large-9 medium-8 columns content">
    <h3><?= h($veiculo->idveiculo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Placa') ?></th>
            <td><?= h($veiculo->placa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fabricante') ?></th>
            <td><?= h($veiculo->fabricante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($veiculo->modelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cor') ?></th>
            <td><?= h($veiculo->cor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Radio') ?></th>
            <td><?= h($veiculo->radio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arcondicionado') ?></th>
            <td><?= h($veiculo->arcondicionado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vidroeletrico') ?></th>
            <td><?= h($veiculo->vidroeletrico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idveiculo') ?></th>
            <td><?= $this->Number->format($veiculo->idveiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ano') ?></th>
            <td><?= h($veiculo->ano) ?></td>
        </tr>
    </table>
</div>
