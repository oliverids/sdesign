<?php
global $palestrante;
global $palestra_titulo;
global $palestra_tag;
global $palestra_descricao;
$palestra_cor;

if($palestra_tag == 'Oficina') {
  $palestra_cor = '--roxo';
} else if ($palestra_tag == 'Mesa Redonda') {
  $palestra_cor = '--rosa';
} else {
  $palestra_cor = '--amarelo';
}
?>

<div class="programacao-conteudo">
  <h3><?php echo $palestrante ?></h3>
  <div class="titulo-tag">
    <h4><?php echo $palestra_titulo ?></h4>
    <span class="tag <?php echo $palestra_cor ?>"><?php echo $palestra_tag ?></span>
  </div>
  <p><?php echo $palestra_descricao ?></p>
</div>