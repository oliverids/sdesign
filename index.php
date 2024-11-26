<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SDESIGN 2024 - Perspectivas</title>
  <link rel="stylesheet" href="css/index.min.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <header class="header">
    <div class="container">
      <button class="header__menu">
        <div></div>
      </button>
    </div>

    <nav class="header-nav">
      <ul>
        <li><a href="#sobre">Sobre</a></li>

        <li><a href="#convidados">Convidados</a></li>

        <li><a href="#">Programação</a></li>

        <li><a href="#">Inscrição</a></li>
      </ul>
    </nav>
  </header>

  <main class="main">
    <!-- <img class="banner-bg bg__img-1" src="assets/img/main__banner-1.png" alt="" srcset="">
    <img class="banner-bg bg__img-2" src="assets/img/main__banner-2.png" alt="" srcset=""> -->

    <div class="container main-container">
      <div class="evento-info">
        <img src="assets/img/main__logo.png" alt="Logo do Sdesign 2024.">
        <span>04 a 07 DE DEZEMBRO DE 2024 <br /> VITORIA - ES</span>
      </div>

      <h1 class="main-titulo">Amplie suas possibilidades <span class="main-titulo__subtitulo">no Design e descubra novas
          <span class="main-titulo__destaque">Perspectivas</span></span></h1>

      <p class="main-paragrafo">Garanta seu ingresso na edição histórica da Semana de Design UFES </p>

      <div class="main-ctas">
        <a href="#" class="botao --secundario">Ver Programação</a>
        <a href="#" class="botao --primario">Inscreva-se Agora</a>
      </div>
    </div>
  </main>

  <section id="sobre">
    <div class="container">
      <div class="sobre-info">
        <h2>O que é a Sdesign?</h2>
        <p>O Sdesign é um evento realizado por estudantes do curso de Design UFES e tem como objetivo promover uma
          semana acadêmica de integração entre designers em formação, profissionais e admiradores da área.</p>
        <p>Por meio de <strong>palestras, oficinas, rodas de conversa e entre outras atividades</strong>, será o
          ambiente ideal para compartilhar conhecimentos e criar novas conexões.</p>

        <a href="#" class="botao --primario">Quero estar na Sdesign</a>
      </div>

      <div class="swiper sobre-slider">
        <ul class="swiper-wrapper">
          <li class="swiper-slide"><img src="assets/img/sobre__img-1.png" alt=""></li>
          <li class="swiper-slide"><img src="assets/img/sobre__img-2.png" alt=""></li>
          <li class="swiper-slide"><img src="assets/img/sobre__img-3.png" alt=""></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="multiplas-perspectivas">
    <div class="container">
      <div class="multiplas-container">
        <h2>Uma área,<br />múltiplas perspectivas</h2>

        <p>
          O Design é uma área muito ampla e versátil!
          Então, é fundamental expandirmos nossos horizontes para além da formação formal. Tanto no sentido de ampliarmos
          nossos conhecimentos e tomar consciência sobre as nossas possibilidades de atuação, quanto no reconhecimento do
          potencial transformador da profissão.
        </p>

        <p><strong>O Sdesign 2024 é sobre isso!</strong> Queremos ampliar o olhar sobre a área profissional do Design, dando destaque a trajetórias não tão convencionais em nosso meio. É sobre o encontro de narrativas, circundando e conectando o tradicional às novas <strong>perspectivas</strong>.  </p>
      </div>
    </div>
  </section>

  <section class="beneficios secao-bg__preto">
    <div class="container">
      <h2>O Sdesign é essencial para você que busca:</h2>
      <ul class="beneficios-lista">
        <li class="beneficios-item">
          <div>
            <img src="assets/img/beneficios-icon__1.svg" alt="">
            <h3>Aprendizado</h3>
          </div>
          <p>Com palestras, oficinas, rodas de conversa - entre outras atividades - o evento conta com quatro dias para você mergulhar no mundo do Design e adquirir conhecimentos práticos e teóricos da área.</p>
        </li>

        <li class="beneficios-item">
          <div>
            <img src="assets/img/beneficios-icon__2.svg" alt="">
            <h3>Perspectivas</h3>
          </div>
          <p>Aqui você encontra profissionais especializados nas mais diversas áreas do Design, expandindo sua compreensão sobre a profissão e seu campo de atuação!</p>
        </li>

        <li class="beneficios-item">
          <div>
            <img src="assets/img/beneficios-icon__3.svg" alt="">
            <h3>Comunidade</h3>
          </div>
          <p>O Sdesign é a oportunidade perfeita para conhecer os demais estudantes e profissionais capixabas da área, reforçando a comunidade de designers e criando uma rede de apoio profissional.</p>
        </li>

        <li class="beneficios-item">
          <div>
            <img src="assets/img/beneficios-icon__4.svg" alt="">
            <h3>Conexão</h3>
          </div>
          <p>Nossos convidados são figuras importantes no meio mercadológico e acadêmico, de alcance nacional. Esse é o momento ideal para saber mais sobre sua área de interesse, mapear possíveis trajetórias e, quem sabe, trocar contatos!</p>
        </li>
      </ul>

      <a href="#" class="botao --primario">Garantir participação</a>
    </div>
  </section>

  <section id="convidados" class="secao-bg__preto">
    <div class="container">
      <h2>Veja quem vai estar conosco esse ano</h2>
      <p>Conheça nossos palestrantes e convidados especiais</p>
    </div>

    <div class="swiper convidados-slider">
      <ul class="swiper-wrapper convidados-lista">
        <?php
        $foto_src = 'felipe_nader';
        $nome = 'Felipe Nader';
        $profissao = 'Ave Design';
        $website = 'https://avedesign.com.br/';
        $behance = 'https://www.behance.net/avedesignbr';
        $linkedin = 'https://www.linkedin.com/company/avedesign';
        $instagram = 'https://www.instagram.com/avedesign.br/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'amanda_lobos';
        $nome = 'Amanda Lobos';
        $profissao = 'Designer e Ilustradora';
        $website = 'https://www.maisdeumlobo.com/';
        $behance = 'https://www.behance.net/maisdeumlobo';
        $linkedin = 'https://www.linkedin.com/in/amandalobos/';
        $instagram = 'https://www.instagram.com/maisdeumlobo/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'ananda_miranda';
        $nome = 'Ananda Miranda';
        $profissao = 'Cinografia';
        $website = '';
        $behance = '';
        $linkedin = '';
        $instagram = 'https://www.instagram.com/edacjr.ufes';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'douglas_negrisolli';
        $nome = 'Douglas Negrisolli';
        $profissao = 'Designer Gráfico';
        $website = '';
        $behance = '';
        $linkedin = 'https://www.linkedin.com/in/douglasnegrisolli/';
        $instagram = 'https://www.instagram.com/dnegrisolli/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'dna';
        $nome = 'DNA';
        $profissao = 'Grupo de Animação';
        $website = '';
        $behance = '';
        $linkedin = '';
        $instagram = 'https://www.instagram.com/dnanimation/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'andre_rios';
        $nome = 'André Rios';
        $profissao = 'Artista de Efeitos Visuais';
        $website = 'https://www.imdb.com/name/nm4757374/';
        $behance = '';
        $linkedin = '';
        $instagram = 'https://www.instagram.com/andreriosvfx/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'felipe_kaizer';
        $nome = 'Felipe Kaizer';
        $profissao = 'Professor Doutor do Departamento de História e Estética do Projeto (FAU-USP)';
        $website = 'http://felipekaizer.com';
        $behance = '';
        $linkedin = 'https://www.linkedin.com/in/felipe-kaizer-b9b00689/';
        $instagram = 'https://www.instagram.com/kaizer.felipe/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'paula_gobetti';
        $nome = 'Paula Gobetti';
        $profissao = 'Designer, Professora e Pesquisadora';
        $website = '';
        $behance = 'https://www.behance.net/kabukistudio';
        $linkedin = '';
        $instagram = 'https://www.instagram.com/paulagobetti/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'maria_clara_ferreira';
        $nome = 'Maria Clara Ferreira';
        $profissao = 'Designer, produtora e multiartista';
        $website = 'https://www.maisdeumlobo.com/';
        $behance = 'https://www.behance.net/maisdeumlobo';
        $linkedin = 'https://www.linkedin.com/in/amandalobos/';
        $instagram = 'https://www.instagram.com/maisdeumlobo/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'katia_miller';
        $nome = 'Katia Miller';
        $profissao = 'Professora da Ufes e Coorenadora da Materio.Lab';
        $website = 'https://www.maisdeumlobo.com/';
        $behance = 'https://www.behance.net/maisdeumlobo';
        $linkedin = 'https://www.linkedin.com/in/amandalobos/';
        $instagram = 'https://www.instagram.com/maisdeumlobo/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'comboio';
        $nome = 'Comboio';
        $profissao = 'Estúdio de Animação e Ilustração';
        $website = 'https://www.maisdeumlobo.com/';
        $behance = 'https://www.behance.net/comboioart';
        $linkedin = 'https://www.linkedin.com/company/comboio-art/';
        $instagram = 'https://www.instagram.com/comboio.art/';
        include('components/convidado-item.php')
        ?>

        <!--  -->
        <?php
        $foto_src = 'edac';
        $nome = 'Edac';
        $profissao = 'Empresa Junior';
        $website = '';
        $behance = '';
        $linkedin = '';
        $instagram = 'https://www.instagram.com/edacjr.ufes';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'leonardo_zamprogno';
        $nome = 'Leonardo Zamprogno';
        $profissao = 'Designer Gráfico, Game Designer e Escritor';
        $website = 'http://mobogames.com.br';
        $behance = 'https://www.behance.net/leozamprogeb15';
        $linkedin = 'https://www.linkedin.com/in/leonardo-zamprogno/';
        $instagram = 'https://www.instagram.com/leozamprogno/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'marcos_spinasse';
        $nome = 'Marcos Spinassé';
        $profissao = 'Professor do Departamento de Gemologia';
        $website = '';
        $behance = '';
        $linkedin = '';
        $instagram = 'https://www.instagram.com/labdesignjoia/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'cris_ibarra';
        $nome = 'Cris Ibarra';
        $profissao = 'Designer, podcaster e Professora da UFPE';
        $website = 'https://sentipensantepodcast.wordpress.com';
        $website = '';
        $behance = '';
        $linkedin = 'https://www.linkedin.com/in/mcibarra/';
        $instagram = 'https://www.instagram.com/cris_ibarrah/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'carol_cuquetto';
        $nome = 'Carol Cuquetto';
        $profissao = 'Designer e ilustradora';
        $website = 'https://carolcuquetto.com.br/';
        $behance = 'https://www.behance.net/carolcuquetto';
        $linkedin = 'https://www.linkedin.com/in/carolcuquetto/';
        $instagram = 'https://www.instagram.com/carolcuquetto';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'comboio';
        $nome = 'Comboio';
        $profissao = 'Estúdio de Animação e Ilustração';
        $website = 'https://www.maisdeumlobo.com/';
        $behance = 'https://www.behance.net/comboioart';
        $linkedin = 'https://www.linkedin.com/company/comboio-art/';
        $instagram = 'https://www.instagram.com/comboio.art/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'julio_cesar';
        $nome = 'Julio Cesar';
        $profissao = 'UX Researcher Specialist - Grupo OLX';
        $behance = '';
        $linkedin = 'https://www.linkedin.com/in/julio-césar-reis-alves-6177b715b/';
        $instagram = 'https://www.instagram.com/reisjulios_/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'ana_clara_balarini';
        $nome = 'Ana Clara Balarini';
        $profissao = 'Brand Designer e Product Stories';
        $website = '';
        $behance = 'https://www.behance.net/anacbalarini';
        $linkedin = 'https://www.linkedin.com/in/ana-clara-balarini-10755116b/';
        $instagram = 'https://www.instagram.com/clarabalarina/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'anclebio_jr';
        $nome = 'Anclebio Jr';
        $profissao = 'Produtor Cultural';
        $website = '';
        $behance = '';
        $linkedin = '';
        $instagram = '';
        include('components/convidado-item.php')
        ?>

        <!-- falta a foto dele -->
        <?php
        $foto_src = 'anclebio_jr';
        $nome = 'Roberlan';
        $profissao = 'Ilustrador e Designer Gráfico';
        $website = 'https://roberlan.com';
        $behance = 'https://www.behance.net/roberlan';
        $linkedin = 'https://www.linkedin.com/in/roberlan/';
        $instagram = 'https://www.instagram.com/thisisblase/';
        include('components/convidado-item.php')
        ?>

        <?php
        $foto_src = 'rafael_pessin';
        $nome = 'Rafael Pessin';
        $profissao = 'Produtor Audiovisual';
        $website = '';
        $behance = '';
        $linkedin = '';
        $instagram = 'https://www.instagram.com/rafaelpessin';
        include('components/convidado-item.php')
        ?>

      </ul>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>