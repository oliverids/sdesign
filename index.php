<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.min.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>SDESIGN 2024 — Semana do Design</title>
  <?php require_once('./components/header-meta.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="container">
      <a href="#" id="header-logo"><?php include('assets/img/header-logo.svg') ?></a>

      <button class="header__menu">
        <div></div>
      </button>

      <?php
      $version = "desktop";
      include('components/header-nav.php') ?>
    </div>

    <?php
    $version = "mobile";
    include('components/header-nav.php') ?>
  </header>

  <main class="main">
    <img class="banner-bg bg__img-1" src="assets/img/banner-bg-1.svg" alt="" srcset="">

    <div class="container main-container">
      <div class="evento-info">
        <img src="assets/img/main__logo.png" alt="Logo do SDesign 2024.">
        <span>04 a 07 DE DEZEMBRO DE 2024 <br /> VITORIA - ES</span>
      </div>

      <h1 class="main-titulo">Amplie suas possibilidades <span class="main-titulo__subtitulo">no Design e descubra novas
          <span class="main-titulo__destaque">Perspectivas</span></span></h1>

      <p class="main-paragrafo">Garanta seu ingresso na edição histórica da Semana de Design UFES </p>

      <div class="main-ctas">
        <a href="#programacao" class="botao --secundario">Ver Programação</a>
        <a href="https://www.even3.com.br/sdesign-perspectivas/" class="botao --primario">Inscreva-se Agora</a>
      </div>
    </div>

    <img class="banner-bg bg__img-2" src="assets/img/banner-bg-2.svg" alt="" srcset="">
  </main>

  <section id="sobre" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
      <div class="sobre-info">
        <h2>O que é a SDesign?</h2>
        <p>O SDesign é um evento realizado por estudantes do curso de Design UFES e tem como objetivo promover uma
          semana acadêmica de integração entre designers em formação, profissionais e admiradores da área.</p>
        <p>Por meio de <strong>palestras, oficinas, rodas de conversa e entre outras atividades</strong>, será o
          ambiente ideal para compartilhar conhecimentos e criar novas conexões.</p>

        <a href="https://www.even3.com.br/sdesign-perspectivas/" class="botao --primario">Quero estar na SDesign</a>
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

  <section class="multiplas-perspectivas" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">
      <img class="left" src="assets/img/perspectivas-bg.svg" alt="">
      <div class="multiplas-container">
        <h2>Uma área,<br />múltiplas perspectivas</h2>

        <p>
          O Design é uma área muito ampla e versátil!
          Então, é fundamental expandirmos nossos horizontes para além da formação formal. Tanto no sentido de
          ampliarmos
          nossos conhecimentos e tomar consciência sobre as nossas possibilidades de atuação, quanto no reconhecimento
          do
          potencial transformador da profissão.
        </p>

        <p><strong>O SDesign 2024 é sobre isso!</strong> Queremos ampliar o olhar sobre a área profissional do Design,
          dando destaque a trajetórias não tão convencionais em nosso meio. É sobre o encontro de narrativas,
          circundando e conectando o tradicional às novas <strong>perspectivas</strong>.  </p>
      </div>

      <img class="right" src="assets/img/perspectivas-bg.svg" alt="">
    </div>
  </section>

  <section class="beneficios secao-bg__preto">
    <div class="container">

      <div>
        <h2>O SDesign é essencial para você que busca:</h2>
        <a href="https://www.even3.com.br/sdesign-perspectivas/" class="botao --primario desktop">Garantir
          participação</a>
      </div>

      <ul class="beneficios-lista">
        <li class="beneficios-item">
          <div>
            <img src="assets/img/beneficios-icon__1.svg" alt="">
            <h3>Aprendizado</h3>
          </div>
          <p>Com palestras, oficinas, rodas de conversa - entre outras atividades - o evento conta com quatro dias para
            você mergulhar no mundo do Design e adquirir conhecimentos práticos e teóricos da área.</p>
        </li>

        <li class="beneficios-item">
          <div>
            <img src="assets/img/beneficios-icon__2.svg" alt="">
            <h3>Perspectivas</h3>
          </div>
          <p>Aqui você encontra profissionais especializados nas mais diversas áreas do Design, expandindo sua
            compreensão sobre a profissão e seu campo de atuação!</p>
        </li>

        <li class="beneficios-item">
          <div>
            <img src="assets/img/beneficios-icon__3.svg" alt="">
            <h3>Comunidade</h3>
          </div>
          <p>O SDesign é a oportunidade perfeita para conhecer os demais estudantes e profissionais capixabas da área,
            reforçando a comunidade de designers e criando uma rede de apoio profissional.</p>
        </li>

        <li class="beneficios-item">
          <div>
            <img src="assets/img/beneficios-icon__4.svg" alt="">
            <h3>Conexão</h3>
          </div>
          <p>Nossos convidados são figuras importantes no meio mercadológico e acadêmico, de alcance nacional. Esse é o
            momento ideal para saber mais sobre sua área de interesse, mapear possíveis trajetórias e, quem sabe, trocar
            contatos!</p>
        </li>
      </ul>

      <a href="https://www.even3.com.br/sdesign-perspectivas/" class="botao --primario mobile">Garantir participação</a>
    </div>
  </section>

  <section id="convidados" class="secao-bg__preto">
    <div class="container">
      <h2>Veja quem vai estar conosco esse ano</h2>
      <p>Conheça nossos palestrantes e convidados especiais</p>
    </div>

    <?php require_once('components/convidado-lista.php') ?>
  </section>

  <section id="programacao" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
      <div class="secao-intro">
        <div class="secao-titulo">
          <h2>Programação completa</h2>
          <p>Explore todas as palestras, oficinas e mesas redondas do nosso cronograma.</p>
        </div>
        <a href="https://www.even3.com.br/sdesign-perspectivas/" class="botao --primario">Garantir inscrição</a>
      </div>

      <div class="programacao">
        <nav class="programacao-nav">
          <ul>
            <li><button data-nav="dia-0" class="--ativo">QUA - 04/12</button></li>
            <li><button data-nav="dia-1">QUI - 05/12</button></li>
            <li><button data-nav="dia-2">SEX - 06/12</button></li>
            <li><button data-nav="dia-3">SAB - 07/12</button></li>
          </ul>
        </nav>

        <div class="programacao-content">
          <ul data-content="dia-0" class="--ativo">
            <?php include('components/programacao/lista-dia-0.php') ?>
          </ul>

          <ul data-content="dia-1">
            <?php include('components/programacao/lista-dia-1.php') ?>
          </ul>

          <ul data-content="dia-2">
            <?php include('components/programacao/lista-dia-2.php') ?>
          </ul>

          <ul data-content="dia-3">
            <?php include('components/programacao/lista-dia-3.php') ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="depoimentos">
    <div class="container">
      <h2>Depoimentos de quem já vivenciou o SDesign</h2>
      <p>Veja como o SDesign impactou a trajetória de designers anteriores</p>
    </div>

    <div class="swiper depoimentos-slider">
      <ul class="swiper-wrapper">
        <li class="swiper-slide depoimento-slide">
          <img src="assets/img/depoimento-katia.png" alt="">
          <p class="nome">Katia Miller</p>
          <span class="cargo">Docente Design UFES</span>
          <p>A SDesign é um evento <strong>promovido pelos estudantes de Design da Ufes</strong> que tem um papel de
            fundamental importância para o crescimento da área no contexto local. [...] Esta edição, já <strong>mais
              amadurecida e ousada</strong>, consegue trazer novas <strong>perspectivas</strong> para uma área tão
            plural e que tem como base o pensamento sistemático do projeto.[...]</p>
        </li>

        <li class="swiper-slide depoimento-slide">
          <img src="assets/img/depoimento-edson.png" alt="">
          <p class="nome">Edson Rufino</p>
          <span class="cargo">Docente Design UFES</span>
          <p>[...] o protagonismo é, sem dúvida, da equipe de estudantes. Eles têm feito um trabalho extraordinário,
            cuidando de cada detalhe com dedicação. Com tanto empenho, é certo que a SDesign deste ano já é um sucesso!
            O tema "Perspectivas" traz um olhar rico e multifacetado, destacando inúmeras possibilidades de atuação no
            design, indo além das mais exploradas pelo mercado.
          </p>
        </li>

        <li class="swiper-slide depoimento-slide">
          <img src="assets/img/depoimento-comboio.png" alt="">
          <p class="nome">Comboio</p>
          <span class="cargo">Estúdio de animação e Design</span>
          <p>A SDesign tem se consolidado como o <strong>ponto de encontro do design capixaba</strong>. Na última
            edição, compartilhamos uma palestra e oficina de animação, e foi tão inspirador que agora nos tornamos
            apoiadores. Vida longa ao evento!</p>
        </li>

        <li class="swiper-slide depoimento-slide">
          <img src="assets/img/depoimento-isadora.png" alt="">
          <p class="nome">Isadora Ventura</p>
          <span class="cargo">Estudante Design UFES</span>
          <p>Estou muito animada para o evento! Acompanhei de perto o esforço e empenho da equipe[...]. Com debates
            relevantes que transcendem o meio do design, <strong>abordando questões importantes</strong> para uma esfera
            geral, com uma programação completa e diversificada, <strong>sinto que essa edição superará as
              anteriores</strong> [...].</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="apoio secao-bg__preto">
    <div class="container">
      <h2>Veja quem apoia o SDesign Perspectivas</h2>
      <p>Conheça as empresas e instituições que tornam o SDesign 2024 possível</p>

      <ul>
        <li><img src="assets/img/apoio-alphagraphics.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-hub.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-comboio.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-secult.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-locomotipo.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-sebrae.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-candela.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-tem_design.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-balaio.png" alt="Logo Alphagraphics"></li>
        <li><img src="assets/img/apoio-colora.png" alt="Logo Alphagraphics"></li>
      </ul>
    </div>
  </section>

  <section class="inscricao">
    <div class="container">
      <div class="inscricao-container">
        <h2>Venha fazer suas conexões na SDesign</h2>
        <p>Não perca a oportunidade de se conectar com profissionais e expandir seu conhecimento em design.</p>
        <a href="https://www.even3.com.br/sdesign-perspectivas/" class="botao --primario">Garantir Inscrição</a>
      </div>
    </div>
  </section>

  <section class="faq">
    <div class="container">
      <h2>FAQ (Perguntas Frequentes)</h2>
      <p>Sessão dedicada a responder às dúvidas mais comuns sobre o evento</p>

      <div class="faq-lista">
        <details>
          <summary><span>O evento é gratuito?</span> <span>+</span></summary>
          <p>Sim, o SDesign 2024 é totalmente gratuito! Nosso objetivo é tornar o evento acessível a todos que têm
            interesse em design, inovação e cultura.</p>
        </details>

        <details>
          <summary>Como faço para me inscrever no evento? <span>+</span></summary>
          <p>As inscrições podem ser feitas diretamente pelo site oficial do evento. Basta preencher o formulário e
            garantir sua vaga nas atividades que deseja participar.</p>
        </details>

        <details>
          <summary>Onde o evento será realizado? <span>+</span></summary>
          <p>O evento acontecerá no HUB ES+, localizado no Centro Histórico de Vitória, ES. Algumas atividades também
            serão realizadas em espaços ao redor da Praça Costa Pereira.</p>
        </details>

        <details>
          <summary>Posso participar de qualquer atividade do evento? <span>+</span></summary>
          <p>Sim! No entanto, algumas oficinas e palestras terão vagas limitadas, por isso é importante se inscrever com
            antecedência para garantir sua participação.</p>
        </details>

        <details>
          <summary>O evento oferece certificado de participação? <span>+</span></summary>
          <p>Sim, todos os participantes inscritos que comparecerem às atividades receberão um certificado digital ao
            final do evento.</p>
        </details>
      </div>
    </div>
  </section>

  <footer></footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
  </script>
  <script src="scripts/main.min.js"></script>
</body>

</html>