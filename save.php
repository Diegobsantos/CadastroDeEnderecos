<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['full_name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $referencePoint = $_POST['reference_point'];
    $index = isset($_POST['index']) && $_POST['index'] !== '' ? intval($_POST['index']) : -1;

    // Verifica se o arquivo JSON já existe
    if (!file_exists('addresses.json')) {
        // Cria um arquivo JSON vazio se não existir
        file_put_contents('addresses.json', json_encode([]));
    }

    // Lê o conteúdo atual do arquivo JSON
    $data = json_decode(file_get_contents('addresses.json'), true);

    if ($index >= 0) {
        // Edita o registro existente
        $data[$index] = [
            'full_name' => $fullName,
            'address' => $address,
            'phone' => $phone,
            'reference_point' => $referencePoint
        ];
    } else {
        // Adiciona o novo endereço ao array de dados
        $data[] = [
            'full_name' => $fullName,
            'address' => $address,
            'phone' => $phone,
            'reference_point' => $referencePoint
        ];
    }

    // Salva os dados de volta no arquivo JSON
    file_put_contents('addresses.json', json_encode($data));

    // Redireciona de volta para o formulário com uma mensagem de sucesso
    header('Location: index.html');
    exit();
} else {
    echo "Método de requisição inválido.";
}
?>
