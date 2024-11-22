<div class="co-breadcrumb">
    <?php
    $fil = $data[0]['children']['niveau'];
    $index = 1;
    foreach($fil as $niveau ) : ?>
        <span>
            <?php if (isset($niveau['attributes']['id'])): ?>
                <a href="<?php echo esc_url($url . $niveau['attributes']['id']); ?>" class="<?php echo esc_html(( $index == sizeof($fil) ) ? 'last': ''); ?> ">
                    <?php echo esc_html($niveau['text']); ?>
                </a>
            <?php else: ?>
                <?php echo esc_html($niveau['text']); ?>
            <?php endif; ?>
            <?php if( $index < sizeof($fil) ) echo '<span class="co-breadcrumb-separator">&nbsp;&gt;</span>'; ?>
        </span>
    <?php
    $index++;
    endforeach; ?>
</div>
