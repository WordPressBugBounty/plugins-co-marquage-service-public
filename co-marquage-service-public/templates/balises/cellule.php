<?php
foreach($data as $cellule) {
    $rowspan = (isset($cellule['attributes']['fusionverticale']))? 'rowspan="'.$cellule['attributes']['fusionverticale'].'"' : '';
    $colspan = (isset($cellule['attributes']['fusionhorizontale']))? 'colspan="'.$cellule['attributes']['fusionhorizontale'].'"' : '';

    echo '<td '.esc_html($rowspan).' '.esc_html($colspan).'>';
    $this->parse($cellule);
    echo '</td>';
}