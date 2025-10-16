<?php
$data = json_encode([
    "nome" => $_POST["nome"] ?? "desconhecido",
    "mac" => $_POST["mac"] ?? "desconhecido",
    "ip" => $_POST["ip"] ?? "desconhecido",
    "horario" => $_POST["horario"] ?? date("c")
]);

file_put_contents("sessoes.log", $data . PHP_EOL, FILE_APPEND);

// Redireciona para o login trial no MikroTik
header("Location: http://192.168.88.1/login?username=trial");
exit;
?>
