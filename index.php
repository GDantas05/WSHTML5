<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso de HTML5 - UpInside Treinamentos</title>
    <meta name="description" content="Está página web está sendo construída no curso de HTML5 da UpInside Treinamentos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header class="main_header container">
      <div class="content">
      <img class="main_logo" src="img/_logo.png" alt="[Curso de HTML5]" title="Curso de HTML5" />
      <h1 class="fontzero">Curso de HTML5 - UpInside Treinamentos</h1>
        <ul class="main_menu">
          <li><a href="#home" title="Curso de HTML5">Home</a></li>
          <li><a href="#curso" title="Curso de HTML5">O Curso</a></li>
          <li>
            <a class="special" target="_blank" href="http://www.upinside.com.br/oferta-html5-do-jeito-certo" title="Curso Work Series - HTML5 do Jeito Certo">Work Series</a>
          </li>
          <li><a href="#videoaulas" title="Confira Vídeo Aulas do Curso de HTML5">Vídeo Aulas</a></li>
          <li><a href="#contato" title="Contato sobre o curso de HTML5">Fale Conosco</a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </header>
    <main class="container">
      <div class="border-bottom border_bottom_destaque">
        <article class="destaque container">
            <div class="content">
              <header>
                <h1>Bem-vindo(a) ao curso gratuito de HTML5</h1>
                <p class="tagline">Você está pronto para aprender HTML5, CSS e jQuery de forma descomplicada, gratuita e do jeito certo?</p>
                <div>
                  <div class="fb-like" data-href="https://www.facebook.com/upinside" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                  <div class="fb-share-button" data-href="https://www.upinside.com.br/" data-layout="button_count"></div>
                </div>
              </header>
              <div class="destaque_video">
                <div class="ratio">
                  <iframe class="midia" src="https://www.youtube.com/embed/TYXE-legZMU?list=PLi_gvjv-JgXq-SVk-gyVEa0r1WANGtZKn" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="clear"></div>
            </div>
        </article>
      </div>
      <section class="container curso">
         <div class="content">
          <header class="big_title">
            <h1>Curso de HTML5</h1>
            <p class="tagline">Confira o que você vai aprender no curso de HTML5</p>
          </header>
          <article class="curso_item">
            <img src="img/01.jpg" alt="[Curso de HTML5 - HTML e CSS]" title="Curso de HTML5 - HTML e CSS"/>
            <h1>HTML e HTML5!</h1>
            <p>Aprenda a utilizar o HTML5 do jeito certo! Segmentando seu site e distribuindo o conteúdo de forma otimizada e de ponta a ponta!</p>
            <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y \à\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
          </article>
          <article class="curso_item">
            <img src="img/02.jpg" alt="[Curso de CSS3 - CSS e CSS3]" title="Curso de CSS3 - CSS e CSS3"/>
            <h1>CSS e CSS3!</h1>
            <p>Trabalhe com produtividade e qualidade o seu CSS. Aplicando classes coesas e focando no que realmente importa: O conteúdo do site </p>
            <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y \à\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
          </article>
          <article class="curso_item">
            <img src="img/03.jpg" alt="[Curso de jQuery]" title="Curso de jQuery"/>
            <h1>jQuery!</h1>
            <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery. Entender a biblioteca e seu uso padrão. Produtividade é essencial!</p>
            <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y \à\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
          </article>
          <article class="curso_item">
            <img src="img/04.jpg" alt="[Curso de HTML5 - Work Series]" title="Curso de HTML5 - Work Series"/>
            <h1>Work Series</h1>
            <p>Terminou o curso de HTML5? Então é hora de se tornar um ninja com a linguagem e aprender técnicas avançadas de otimização!</p>
            <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y \à\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
          </article>
          <div class="clear"></div>
         </div>
          <footer class="container curso_footer">
            <div class="content">
              <img src="img/05.png" alt="[Confira o curso completo de HTML5 do Jeito Certo]" title="Confira o curso completo de HTML5 do Jeito Certo" />
              <h1>Curso HTML5 do Jeito Certo!</h1>
              <p>Aprenda a utilziar todo o poder do HTML5 semântico somando avançadas técnicas de SEO para criar sites altamente lucrativos e que geram resultados rápidos e eficientes</p>
              <a class="btn" href="http://www.upinside.com.br/oferta-html5-do-jeito-certo" alt="Conheça a curso HTML5 do jeito certo" target="_blank">Conhecer agora</a>
              <div class="clear"></div>
            </div>
          </footer>
      </section>
      <section class="container video_aulas">
        <div class="content">
          <header class="big_title">
            <h1>Vídeo Aulas</h1>
            <p class="tagline">Confira algumas vídeo aulas do curso de HTML5!</p>
          </header>
          <div class="video_aulas_videos">
            <article class="videos">
              <img src="img/01.jpg" alt="[Curso de HTML5 - HTML e CSS]" title="Curso de HTML5 - HTML e CSS"/>
              <h1>HTML e HTML5!</h1>
              <p>Aprenda a utilizar o HTML5 do jeito certo.</p>
            </article>
            <article class="videos">
              <img src="img/02.jpg" alt="[Curso de CSS3 - CSS e CSS3]" title="Curso de CSS3 - CSS e CSS3"/>
              <h1>CSS e CSS3!</h1>
              <p>Trabalhe com produtividade e qualidade o seu CSS.</p>
            </article>
            <article class="videos">
              <img src="img/03.jpg" alt="[Curso de jQuery]" title="Curso de jQuery"/>
              <h1>jQuery!</h1>
              <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery.</p>
            </article>
            <article class="videos">
              <img src="img/01.jpg" alt="[Curso de HTML5 - HTML e CSS]" title="Curso de HTML5 - HTML e CSS"/>
              <h1>HTML e HTML5!</h1>
              <p>Aprenda a utilizar o HTML5 do jeito certo.</p>
            </article>
            <article class="videos">
              <img src="img/02.jpg" alt="[Curso de CSS3 - CSS e CSS3]" title="Curso de CSS3 - CSS e CSS3"/>
              <h1>CSS e CSS3!</h1>
              <p>Trabalhe com produtividade e qualidade o seu CSS.</p>
            </article>
            <article class="videos">
              <img src="img/03.jpg" alt="[Curso de jQuery]" title="Curso de jQuery"/>
              <h1>jQuery!</h1>
              <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery.</p>
            </article>
          </div>
          <aside class="video_aulas_sidebar">
            <div class="border-bottom">
              <div class="content">
                <header>
                  <h1 class="title">Comentários</h1>
                </header>
                <article class="video_aulas_comment">
                  <img src="img/foto.jpg" alt="[Comentário de Gabriel Dantas]" title="Comentário de Gabriel Dantas">
                  <h1><span class="fontzero">Comentário de</span> Gabriel Dantas</h1>
                  <p>O curso foi pensado para levar o aluno do zero ao ninja não somente em HTML</p>
                </article>
                <article class="video_aulas_comment">
                  <img src="img/foto.jpg" alt="[Comentário de Marcos Silva]" title="Comentário de Marcos Silva">
                  <h1><span class="fontzero">Comentário de</span> Marcos Silva</h1>
                  <p>O curso foi pensado para levar o aluno do zero ao ninja não somente em HTML</p>
                </article>
                <div class="clear"></div>
              </div>
            </div>
          </aside>
        </div>
      </section>
      <article class="container contato">
        <div class="content">
          <header>
            <h1>Entre em contato:</h1>
            <p class="tagline">este formulário está aqui apenas para estudos do curso HTML5</p>
          </header>
          <form  class="form_contact" action="" method="post">
            <label class="medium">
              <span class="fontzero">Nome</span>
              <input type="text" name="nome" title="Informe o seu nome" placeholder="nome" required>
            </label>
            <label class="medium">
              <span class="fontzero">E-mail</span>
              <input type="email" name="email" title="Informe o seu e-mail" placeholder="e-mail" required>
            </label>
            <label class="full">
              <span class="fontzero">Mensagem</span>
              <textarea name="mensagem" rows="3" title="Digite a sua mensagem" placeholder="mensagem" required></textarea>
            </label>
            <img class="form_load" src="img/ajax-loader.gif" alt="[Aguarde, enviando contato]" title="Aguarde, enviando contato">
            <button class="btn">Enviar contato</button>
            <button class="btn" type="reset">Limpar</button>
          </form>
          <div class="clear"></div>
        </div>
      </article>
    </main>
    <footer class="container main_footer">
      <div class="border-bottom">
        <div class="ftcontent">
          <h1 class="title_footer">Curso de HTML5</h1>
          <nav>
            <h1 class="subtitle_footer">UpInside Treinamentos</h1>
            <ul>
              <li><a href="//www.upinside.com.br" target="_blank" title="UpInside Treinamentos">UpInside</a></li>
              <li>|</li>
              <li><a href="//www.facebook.com/upinside" target="_blank" title="UpInside Treinamentos no Facebook">Facebook</a></li>
              <li>|</li>
              <li><a href="//www.youtube.com/c/RobsonVLeite" target="_blank" title="UpInside Treinamentos no Youtube">YouTube</a></li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
      </div>
    </footer>
    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
  </body>
</html>
