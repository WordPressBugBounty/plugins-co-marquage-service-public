<?php
foreach($data as $paragraphe) {
    echo '<p class="bloc-paragraphe">' . esc_html($paragraphe['text']) . '</p>';
}