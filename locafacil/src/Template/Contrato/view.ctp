<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações' ) ?></li>
        <li><?= $this->Html->link(__('Editar Contrato'), ['action' => 'edit', $contrato->idcontrato]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Contrato'), ['action' => 'delete', $contrato->idcontrato], ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $contrato->idcontrato)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Contrato'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Contrato'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contrato view large-9 medium-8 columns content">
    <h3><?= h($contrato->idcontrato) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Idcontrato') ?></th>
            <td><?= $this->Number->format($contrato->idcontrato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idcliente') ?></th>
            <td><?= $this->Number->format($contrato->idcliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idveiculo') ?></th>
            <td><?= $this->Number->format($contrato->idveiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Validade') ?></th>
            <td><?= h($contrato->data_validade) ?></td>
        </tr>
    </table>
</div>
