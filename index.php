 <?php 
//  echo '<p>Hello World</p>'; 
//  foreach ($_SERVER as $chave => $valor){
//    echo "$chave: $valor<br>";
// }
?>

<!-- <form method="POST">  
  <label for="nome">Nome:</label><br>
  <input type="text" id="nome" name="nome"><br>
  <label for="assunto">Assunto:</label><br>
  <input type="text" id="assunto" name="assunto"><br>
  <label for="mensagem">Mensagem:</label><br>
  <textarea id="mensagem" name="mensagem"></textarea><br><br>
  <input type="submit" name="submit" value="Enviar">
</form> -->

<?php
// if(isset($_POST['submit'])){
// $nome = $_POST['nome'];
// $assunto = $_POST['assunto'];
// $mensagem = $_POST['mensagem'];

// echo "Nome: $nome<br>";
// echo "Assunto: $assunto<br>";
// echo "Mensagem: $mensagem<br>";
//}
?>

<?php
//$arquivo = fopen('teste.txt', 'r');
//while(($linha = fgets($arquivo, 4096)) !== false){
//  echo $linha;
//}
?>

<?php
//$arquivo = fopen('teste.txt', 'r');
//$gravar = fopen('olhaso.txt', 'w' );
// $gravar = fopen('olhaso.txt', 'a+' );

// while(($linha = fgets($arquivo, 4096)) !== false){
//   //quebra o array em palavras
//   $palavras = explode(' ', $linha);
//   //$primeira_palavra = $palavras[0];  
//   $ultima_palavra = $palavras[count($palavras) -1];  
//   //remove a quebra de linha
//   $ultima_palavra = str_replace(".\n", "", $ultima_palavra);
//   //grava as palavras no arquivo
//   fwrite($gravar, $ultima_palavra); 
// }
// //fecha os arquivos
// fclose($arquivo);
// fclose($gravar);
?>

<?php
if(!is_dir('pasta')){
mkdir('pasta');
}
$arquivos = glob('*.*');

foreach($arquivos as $arquivo){
  echo $arquivo . "<br>";
}
?>