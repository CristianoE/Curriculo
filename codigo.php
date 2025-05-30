<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $endereco = $_POST["endereco"];
  $formacoes = $_POST["formacao"];
  $experiencias = $_POST["experiencia"];
  $habilidades = $_POST["habilidades"];
  $nascimento = $_POST["nascimento"];

function calcularIdade($dataNasc) {
  $dataAtual = new DateTime();
  $nascimento = new DateTime($dataNasc);
  $idade = $dataAtual->diff($nascimento);
  return $idade->y;
}

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Currículo de <?php echo htmlspecialchars($nome); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @media print {
      .no-print {
        display: none !important;
      }
    }
  </style>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-3xl mx-auto bg-white shadow p-6 rounded">
    <h1 class="text-3xl font-bold text-blue-600 mb-4"><?php echo htmlspecialchars($nome); ?></h1>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
    <p><strong>Endereço:</strong> <?php echo htmlspecialchars($endereco); ?></p>
    <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($nascimento); ?></p>
    <p><strong>Idade:</strong> <?php echo calcularIdade($nascimento); ?> anos</p>

    <hr class="my-4">

    <h2 class="text-xl font-semibold text-gray-700">Formação Acadêmica</h2>
    <ul class="list-disc list-inside mb-4">
      <?php foreach ($formacoes as $f) {
        echo "<li>" . htmlspecialchars($f) . "</li>";
      } ?>
    </ul>

    <h2 class="text-xl font-semibold text-gray-700">Experiência Profissional</h2>
    <ul class="list-disc list-inside mb-4">
      <?php foreach ($experiencias as $e) {
        echo "<li>" . htmlspecialchars($e) . "</li>";
      } ?>
    </ul>

    <h2 class="text-xl font-semibold text-gray-700">Habilidades</h2>
    <ul class="list-disc list-inside mb-4">
      <?php foreach ($habilidades as $h) {
        echo "<li>" . htmlspecialchars($h) . "</li>";
      } ?>
    </ul>

  <div class="text-center mt-6 no-print">
    <button onclick="window.print()" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
      Baixar Currículo (PDF)
    </button>
  </div>

</div>
</body>
</html>
