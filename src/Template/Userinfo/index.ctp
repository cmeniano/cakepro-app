<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo[]|\Cake\Collection\CollectionInterface $userinfo
 */
?>

<div class="container-fluid">

        <div class="col-3">
            <div class="container">
                <ul class="side-nav">
                    <button type="button" class="btn btn-success"><li><?= $this->Html->link(__('Create New User'), ['action' => 'add']) ?></li></button>
                </ul>
            </div>
        </div>

        
        <div class="col-8">
            <div class="container">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userinfo as $userinfo): ?>
                    <tr>
                        <td><?= $this->Number->format($userinfo->id) ?></td>
                        <td><?= h($userinfo->email) ?></td>
                        <td><?= h($userinfo->username) ?></td>
                        <td><?= h($userinfo->password) ?></td>
                        <td class="actions">
                        <button type="button" class="btn btn-secondary"><?= $this->Html->link(__('View'), ['action' => 'view', $userinfo->id]) ?></button>  
                        <button type="button" class="btn btn-secondary"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $userinfo->id]) ?></button>
                        <button type="button" class="btn btn-secondary"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userinfo->id)]) ?></button>
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
        </div>
</div>








<div class="userinfo index large-9 medium-8 columns content">
    <h3><?= __('Userinfo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            
        </thead>
        <tbody>
           
        </tbody>
    </table>
  
</div>
