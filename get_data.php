<?php
if (file_exists('addresses.json')) {
    $data = json_decode(file_get_contents('addresses.json'), true);
    echo json_encode($data);
} else {
    echo json_encode([]);
}
?>
