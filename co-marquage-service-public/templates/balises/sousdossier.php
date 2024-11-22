<div class="co-row">
    <?php
    $index = 1;
    foreach ($data as $key => $sousdossier):
    ?>
        <div id="sousDossiers_<?php echo esc_html($index); ?>" class="co-col-1-2 <?php if(($index % 2) != 0) echo 'co-col-border' ?>">
            <div class="sous-dossier" data-co-test="sous_dossier-<?php echo esc_html($index); ?>">
                <h2><?php echo esc_html($sousdossier['children']['titre'][0]['text']); ?></h2>
                <ul id="fichesSousDossier_<?php echo esc_html($index); ?>">
                    <?php foreach($sousdossier['children']['fiche'] as $fiche) { ?>
                    <li>
                        <a href="<?php echo esc_url($url . $fiche['attributes']['id']); ?>">
                            <?php echo esc_html($fiche['text']); ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php
        if(($index % 2) == 0) echo '<div class="co-clearfix"></div>';
        $index++;
    endforeach;
    ?>
</div>