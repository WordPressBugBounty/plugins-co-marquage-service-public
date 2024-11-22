<?php
foreach ($data as $liste) {
    echo '<ul class="bloc-liste list-'. esc_html($liste['attributes']['type']) .'">';
    $this->parse($liste);
    echo '</ul>';
}