<?php include \IEcho\Common::template('header'); ?>
<style>
    .japanese {
        font-family: 'Noto Sans SC', sans-serif;
        font-size: .3rem;
        font-weight: 300;
    }
    .japanese i {
        padding: 0 .15rem;
    }
</style>
<div class="ui-btn-wrap ui-btn-wrap-middle">
    <button class="ui-btn-lg-nowhole ui-btn-primary" onclick="window.location.reload();">
        换一组
    </button>
</div>
<div class="ui-whitespace">
    <p class="ui-txt-justify japanese">
        <?php
        foreach ($words as $group) {
            echo implode('', $group), '<i>&nbsp;</i>';
        }
        ?>
    </p>
</div>
<?php include \IEcho\Common::template('footer'); ?>
