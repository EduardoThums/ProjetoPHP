<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Cliente'), ['action' => 'edit', $cliente->idcliente]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Cliente'), ['action' => 'delete', $cliente->idcliente], ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $cliente->idcliente)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cliente view large-9 medium-8 columns content">
    <h3><?= h($cliente->idcliente) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cliente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cliente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnh') ?></th>
            <td><?= h($cliente->cnh) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($cliente->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idcliente') ?></th>
            <td><?= $this->Number->format($cliente->idcliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= $this->Number->format($cliente->cpf) ?></td>
        </tr>
    </table>
</div>
