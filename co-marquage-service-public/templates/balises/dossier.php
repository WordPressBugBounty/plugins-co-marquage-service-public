<div class="co-sous-theme">
    <ul class="dossiers">
        <?php foreach($data as $dossier) { ?>
            <li>
                <a href="<?php echo esc_url($url . $dossier['attributes']['id']); ?>">
                    <?php echo esc_html($dossier['children']['titre'][0]['text']); ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>