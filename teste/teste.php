<?php
// Supondo que $link seja o link de compartilhamento do Google Drive recuperado do banco de dados
$link = "https://drive.google.com/file/d/1WCzsBLQFj56RKtCCl79HyRvPqqKizia3/view?usp=drive_link";

// Extrai o ID do arquivo do link do Google Drive
preg_match('/\/file\/d\/([a-zA-Z0-9-_]+)/', $link, $match);
$fileId = $match[1];

// Forma o URL direto para o arquivo no Google Drive
$directUrl = "https://drive.google.com/uc?id=$fileId";

// Obtém o conteúdo da imagem como uma string
$imageData = file_get_contents($directUrl);

// Codifica a imagem em base64
$base64Image = 'data:image/jpeg;base64,' . base64_encode($imageData);
?>

<!-- Exibe a imagem na página -->
<img src="<?php echo $link ?>" alt="Imagem do Google Drive">

