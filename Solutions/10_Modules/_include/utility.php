<?php
// utility.php
// Copyright © 2019 NextStep IT Training. All rights reserved.
//

function renderErrorMessages($messages, $eol = false) {

    foreach ($messages as $index => $error) {

        echo '<span class="error-message">' . $error . ($eol || $index == count($messages) - 1 ? '' : ', ') . '&nbsp;</span>';
    }
}
