<div class="bloc-fiche">
    <ul>
        <?php foreach($data as $fiche) { ?>
            <li>
                <a href="<?php echo esc_url($url . $fiche['attributes']['id']); ?>">
                    <?php echo esc_html($fiche['text']); ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>