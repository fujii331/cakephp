<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $posts
 */
?>
<div class="posts view content">
    <?= h($post->created->i18nFormat('YYYY/MM/dd HH:mm:ss')) ?>
    <h2><?= h($post->title) ?></h2>
    <?= $this->Text->autoParagraph(h($post->body)); ?>
    <hr>
    <?= $this->Html->link('一覧へ戻る', ['action' => 'index'], ['class' => 'button']) ?>
</div>