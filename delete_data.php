<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $index = $input['index'];

    if (file_exists('addresses.json')) {
        $data = json_decode(file_get_contents('addresses.json'), true);

        if (isset($data[$index])) {
            array_splice($data, $index, 1);
            file_put_contents('addresses.json', json_encode($data));
        }
    }
} else {
    echo "Método de requisição inválido.";
}
?>
