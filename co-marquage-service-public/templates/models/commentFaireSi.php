<?php
$internBaseURL = $this->url;
?>

<div id="co-page" class="fiche">

    <?php $this->callRoot( $data, 'fildariane' ); ?>

    <?php $this->callRoot( $data, 'dc:title' ); ?>

    <div class="co-content">
        <ul class="list-arrow list-top-dotted">
            <?php foreach ($data['children']['commentfairesi'] as $commentfairesi): ?>
                <li><a href="<?php echo esc_url($internBaseURL.$commentfairesi['attributes']['id']) ?>"><?php echo esc_html($commentfairesi['text']) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div><!-- co-content -->

</div><!-- co-page -->
