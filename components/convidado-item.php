<?php
global $foto_src;
global $nome;
global $profissao;
global $website;
global $behance;
global $linkedin;
global $instagram;
?>

<li class="convidado-item swiper-slide">
  <img src="<?php echo 'assets/img/convidado-' . $foto_src ?>.png " alt="Foto palestrante: <?php echo $nome ?>">
  <div class="redes">
    <?php if ($website !== '') { ?>
      <a href="<?php echo $website ?>">
        <img src="assets/img/convidados-website.png" alt="">
      </a>
    <?php } ?>

    <?php if ($behance !== '') { ?>
      <a href="<?php echo $behance ?>">
        <img src="assets/img/convidados-behance.png" alt="">
      </a>
    <?php } ?>

    <?php if ($linkedin !== '') { ?>
      <a href="<?php echo $linkedin ?>">
        <img src="assets/img/convidados-linkedin.png" alt="">
      </a>
    <?php } ?>

    <?php if ($instagram !== '') { ?>
      <a href="<?php echo $instagram ?>">
        <img src="assets/img/convidados-instagram.png" alt="">
      </a>
    <?php } ?>

  </div>

  <p><?php echo $nome ?></p>
  <span><?php echo $profissao ?></span>
</li>