<?php include \IEcho\Common::template('header'); ?>
<style>
    .japanese ,.tip{
        font-family: 'Noto Sans SC', sans-serif;
        font-size: .3rem;
        font-weight: 400;
    }
    .japanese i {
        padding: 0 .15rem;
    }
    .tip b {
        padding-left: .1rem;
        color: darkorange;
    }
</style>
<div class="ui-btn-wrap ui-btn-wrap-middle">
    <button class="ui-btn-lg-nowhole ui-btn-primary" onclick="window.location.reload();">
        换一组
    </button>
</div>
<div class="ui-whitespace">
    <p id="words" class="ui-txt-justify japanese">
        <?php
        foreach ($words as $group) {
            foreach ($group as $word => $read) {
                echo sprintf('<span data-read="%s">%s</span>', $read, $word);
            }
            echo '<i>&nbsp;</i>';
        }
        ?>
    </p>
</div>
<div class="ui-tooltips ui-tooltips-guide ui-tooltips-action">
    <div id="tip" class="ui-tooltips-cnt ui-border-b tip" style="display: none;">

    </div>
</div>
<script>
    var tip = $('#tip');
    var tipNums = 0;
    jQuery(function () {
        $('#words span').click(function () {
            tipNums++;
            var o = $(this);
            tip.html('' + o.text() + '<b>[' + o.attr('data-read') + ']</b>').show();
            setTimeout(function () {
                tipNums--;
                if (tipNums > 0)
                    return;
                tip.hide();
            }, 3000);
        });
    });
</script>
<?php include \IEcho\Common::template('footer'); ?>
