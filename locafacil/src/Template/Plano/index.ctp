<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plano[]|\Cake\Collection\CollectionInterface $plano
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Plano'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plano index large-9 medium-8 columns content">
    <h3><?= __('Plano') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idplano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('guincho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carroreserva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sinistro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locacao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($plano as $plano): ?>
            <tr>
                <td><?= $this->Number->format($plano->idplano) ?></td>
                <td><?= h($plano->guincho) ?></td>
                <td><?= h($plano->carroreserva) ?></td>
                <td><?= h($plano->sinistro) ?></td>
                <td><?= h($plano->locacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $plano->idplano]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $plano->idplano]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $plano->idplano], ['confirm' => __('Are you sure you want to delete # {0}?', $plano->idplano)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
