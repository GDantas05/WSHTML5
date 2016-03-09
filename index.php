<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso de HTML5 - UpInside Treinamentos</title>
    <meta name="description" content="Está página web está sendo construída no curso de HTML5 da UpInside Treinamentos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <header>
      <img src="img/_logo.png" alt="[Curso de HTML5]" title="Curso de HTML5" />
      <h1>Curso de HTML5 - UpInside Treinamentos</h1>
      <ul>
        <li><a href="#home" title="Curso de HTML5">Home</a></li>
        <li><a href="#curso" title="Curso de HTML5">O Curso</a></li>
        <li><a target="_blank" href="http://www.upinside.com.br/oferta-html5-do-jeito-certo" title="Curso Work Series - HTML5 do Jeito Certo">Work Series</a></li>
        <li><a href="#videoaulas" title="Confira Vídeo Aulas do Curso de HTML5">Vídeo Aulas</a></li>
        <li><a href="#contato" title="Contato sobre o curso de HTML5">Fale Conosco</a></li>
      </ul>
    </header>
    <main>
      <article>
        <header>
          <h1>Bem-vindo(a) ao curso gratuito de HTML5</h1>
          <p class="tagline">Você está pronto para aprender HTML5, CSS e jQuery de forma descomplicada, gratuita e do jeito certo?</p>
          <div>
            <div class="fb-like" data-href="https://www.facebook.com/upinside" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            <div class="fb-share-button" data-href="https://www.upinside.com.br/" data-layout="button_count"></div>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TYXE-legZMU?list=PLi_gvjv-JgXq-SVk-gyVEa0r1WANGtZKn" frameborder="0" allowfullscreen></iframe>
          </div>
        </header>
      </article>

    </main>
    <footer>
      <h1>Curso de HTML5</h1>
      <nav>
        <h1>UpInside Treinamentos</h1>
        <ul>
          <li><a href="//www.upinside.com.br" target="_blank" title="UpInside Treinamentos">UpInside</a></li>
          <li>|</li>
          <li><a href="//www.facebook.com/upinside" target="_blank" title="UpInside Treinamentos no Facebook">Facebook</a></li>
          <li>|</li>
          <li><a href="//www.youtube.com/c/RobsonVLeite" target="_blank" title="UpInside Treinamentos no Youtube">YouTube</a></li>
        </ul>
      </nav>
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
