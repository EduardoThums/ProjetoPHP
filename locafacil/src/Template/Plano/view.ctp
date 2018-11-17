<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plano $plano
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plano'), ['action' => 'edit', $plano->idplano]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plano'), ['action' => 'delete', $plano->idplano], ['confirm' => __('Are you sure you want to delete # {0}?', $plano->idplano)]) ?> </li>
        <li><?= $this->Html->link(__('List Plano'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plano'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="plano view large-9 medium-8 columns content">
    <h3><?= h($plano->idplano) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Guincho') ?></th>
            <td><?= h($plano->guincho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carroreserva') ?></th>
            <td><?= h($plano->carroreserva) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sinistro') ?></th>
            <td><?= h($plano->sinistro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locacao') ?></th>
            <td><?= h($plano->locacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idplano') ?></th>
            <td><?= $this->Number->format($plano->idplano) ?></td>
        </tr>
    </table>
</div>
