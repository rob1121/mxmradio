<?php if (isset($notice) && is_array($notice)) : ?>
<div class="ui <?php echo $notice['type']; ?> message">
    <i class="close icon"></i>
    <div class="header">
        <?php echo $notice['title']; ?>
    </div>
    <?php echo $notice['message']; ?>
</div>
<?php endif; ?>