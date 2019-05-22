<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link rel="stylesheet" href="CSS/styles.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="Script/scripts.js"></script>
  <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
  <script src="Banner.js"></script>
  <script>
    var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;

    function init() {
      canvas = document.getElementById("canvas");
      anim_container = document.getElementById("animation_container");
      dom_overlay_container = document.getElementById("dom_overlay_container");
      var comp = AdobeAn.getComposition("34C1448709015146A8CA13BA64836D72");
      var lib = comp.getLibrary();
      var loader = new createjs.LoadQueue(false);
      loader.addEventListener("fileload", function(evt) {
        handleFileLoad(evt, comp)
      });
      loader.addEventListener("complete", function(evt) {
        handleComplete(evt, comp)
      });
      var lib = comp.getLibrary();
      loader.loadManifest(lib.properties.manifest);
    }

    function handleFileLoad(evt, comp) {
      var images = comp.getImages();
      if (evt && (evt.item.type == "image")) {
        images[evt.item.id] = evt.result;
      }
    }

    function handleComplete(evt, comp) {
      //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
      var lib = comp.getLibrary();
      var ss = comp.getSpriteSheet();
      var queue = evt.target;
      var ssMetadata = lib.ssMetadata;
      for (i = 0; i < ssMetadata.length; i++) {
        ss[ssMetadata[i].name] = new createjs.SpriteSheet({
          "images": [queue.getResult(ssMetadata[i].name)],
          "frames": ssMetadata[i].frames
        })
      }
      exportRoot = new lib.Banner();
      stage = new lib.Stage(canvas);
      //Registers the "tick" event listener.
      fnStartAnimation = function() {
        stage.addChild(exportRoot);
        createjs.Ticker.setFPS(lib.properties.fps);
        createjs.Ticker.addEventListener("tick", stage);
      }
      //Code to support hidpi screens and responsive scaling.
      AdobeAn.makeResponsive(true, 'both', true, 1, [canvas, anim_container, dom_overlay_container]);
      AdobeAn.compositionLoaded(lib.properties.id);
      fnStartAnimation();
    }
  </script>
</head>

<body onload="init();">
  <h1 class="hide">Imzan Khan Development</h1>
  <header id="header">
    <nav id="top-nav" class="nav-wrapper">
      <a href="#" class="brand-logo">
        <img height="60" id="logo" src="images\Landing-Images\Full-Name-Logo.svg" alt="Logo for Imzan Khan's Portfolio" />
      </a>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <h2 class="hide">Main Navigation</h2>
      <ul class="right hide-on-med-and-down">
        <li><a href="#bio">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#contact">Contact</a></li>
        <li>
          <a href="https://www.linkedin.com/in/imzan-khan-0a7249131" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </li>
        <li>
          <a href="https://github.com/ikhan5?tab=repositories" target="_blank"><i class="fab fa-github"></i></a>
        </li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#bio">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#contact">Contact</a></li>
        <li>
          <a href="https://www.linkedin.com/in/imzan-khan-0a7249131" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </li>
        <li>
          <a href="https://github.com/ikhan5?tab=repositories" target="_blank"><i class="fab fa-github"></i></a>
        </li>
      </ul>
    </nav>
    <div id="animation_container">
      <canvas id="canvas"></canvas>
      <div id="banner">
        <p id="name">Imzan Khan</p>
        <p id="alias">Full Stack Web Developer</p>
      </div>
      <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden;  height:768px; position: absolute; left: 0px; top: 0px; display: block;">
      </div>
    </div>
  </header>
  <section id="bio" class="container">
    <h2 class="center">Who am I?</h2>
    <div class="row">
      <div class="col s12 m8">
        <div class="bio-text">
          <div>
            <p>
              Hello, my name is Imzan Khan and I am a Full-Stack Web
              Developer. I graduated from Lakehead University with a
              Bachelor's Degree in Electrical Engineering, and I'm currently
              studying towards a Graduate Certificate at Humber in Web
              Development.
            </p>
            <p>
              I strive to make any idea into a reality through personalized
              and interactive websites. I believe that every website should
              have something unique to make it stand out among the rest.
            </p>
            <p>
              I enjoy Wrestling, Sports, Video Games, and making my own
              Browser Games.
            </p>
          </div>
        </div>
      </div>
      <div class="col s12 m4 center">
        <img class="bio-image" src="images/Landing-Images/Bio.svg" alt="Image of Imzan Khan on an easel" />
      </div>
    </div>
  </section>
  <section id="skills" class="container">
    <h2 class="center">My Skills</h2>
    <div class="about__skills row">
      <div class="about__skill col s12 m4 center">
        <h3 class="about__skill_header">Front End Development</h3>
        <i class="skill-img fas fa-palette large material-icons"></i>

        <ul class="about__skill_description">
          <li>HTML5 & CSS3</li>
          <li>JavaScript & jQuery</li>
          <li>jQuery UI</li>
          <li>Bootstrap</li>
          <li>Materialize</li>
        </ul>
      </div>
      <div class="about__skill col s12 m4 center">
        <h3 class="about__skill_header">Back End Development</h3>
        <i class="skill-img fas fa-database large material-icons"></i>
        <ul class="about__skill_description">
          <li>PHP</li>
          <li>MySQL</li>
          <li>Oracle</li>
        </ul>
      </div>
      <div class="about__skill col s12 m4 center">
        <h3 class="about__skill_header">Development Tools</h3>
        <i class="skill-img far fa-window-maximize large material-icons"></i>
        <ul class="about__skill_description">
          <li>Git & GitHub</li>
          <li>cPanel</li>
          <li>Postman</li>
          <li>Adobe XD</li>
          <li>Adobe Animate</li>
          <li>Adobe Illustrator</li>
        </ul>
      </div>
    </div>
  </section>
  <section id="work" class="container">
    <h2 class="center">Projects</h2>
    <div class="work__projects row">
      <div class="work__example col m6 s12">
        <div class="card large sticky-action hoverable">
          <div class="card-image waves-effect waves-block waves-light center">
            <img class="activator" src="images/Gifs/Sorting/sorting.gif" alt="A Gif of a sorting game made by Imzan Khan" title="Click to see more about this project!" />
          </div>
          <div class="card-content activator">
            <h3 class="work__example_name card-title center activator">Sorting Game<i class="material-icons right">more_vert</i></h3>
            <div class="work__example_body ">
              <h3 class="languages">Used in the project:</h3>
              <p>HTML5, CSS3, JavaScript, AJAX, jQuery and jQuery UI, Bootstrap, PHP and MySQL</p>
            </div>
          </div>
          <div class="center card-action">
            <a href="http://sorting.imzankhan.ca/" target="_blank" class="btn deep-orange accent-4">View Project</a>
            <a href="https://github.com/ikhan5/SortingGame" target="_blank" class="btn orange darken-4">View Code</a>
          </div>
          <div class="card-reveal">
            <h3 class="work__example_name card-title center">Sorting Game<i class="material-icons right">close</i></h3>
            <p class="work_example_description card-text">
              The Sorting Game uses the
              <a href="https://anapioficeandfire.com/" target="_blank">Game of Thrones API</a>
              to pull all the characters from the show. The characters are put
              in random order and must be sorted in alphabetical order.
              <p><b>Note: Don't worry there are NO SPOILERS </b></p>
            </p>
          </div>
        </div>
      </div>
      <div class="work__example col m6 s12">
        <div class="card large sticky-action hoverable">
          <div class="card-image waves-effect waves-block  waves-light center">
            <img class="activator" src="images/Gifs/Sorting/blackjack.gif" alt="A Gif of a black jack game made by Imzan Khan" />
          </div>
          <div class="card-content">
            <h3 class="work__example_name card-title center activator">Black Jack<i class="material-icons right">more_vert</i></h3>
            <div class="work__example_body">
              <h3 class="languages">Used in the project:</h3>
              <p>HTML5, CSS3, and JavaScript</p>
            </div>
          </div>
          <div class="card-reveal">
            <h3 class="work__example_name card-title center">Black Jack<i class="material-icons right">close</i></h3>
            <p class="work_example_description card-text">
              Black Jack is where you compete with the dealer to
              try and get as close to 21 without going over.
            </p>
          </div>
          <div class="center card-action">
            <a href="http://blackjack.imzankhan.ca/" target="_blank" class="btn deep-orange accent-4">View Project</a>
            <a href="https://github.com/ikhan5/BlackJack" target="_blank" class="btn orange darken-4">View Code</a>
          </div>
        </div>
      </div>
      <div class="work__example col m6 s12">
        <div class="card large sticky-action hoverable">
          <div class="card-image waves-effect waves-block  waves-light center">
            <img class="activator" src="images/Gifs/Sorting/playlists.gif" alt="A Gif of a playlist making application made by Imzan Khan" />
          </div>
          <div class="card-content">
            <h3 class="work__example_name card-title center activator">Create a Playlist<i class="material-icons right">more_vert</i></h3>
            <div class="work__example_body activator">
              <h3 class="languages">Used in the project:</h3>
              <p class="activator">HTML5, CSS3, JavaScript, AJAX, jQuery, Bootstrap, PHP and MySQL</p>
            </div>
          </div>
          <div class="card-reveal">
            <h3 class="work__example_name card-title center">Create a Playlist<i class="material-icons right">close</i></h3>
            <p class="work_example_description card-text ">
              As apart of a team we developed a Party Planning website
              known as 'Get Together'. The Playlist feature allows users to
              add hand selected songs to a playlist and play them in the YouTube
              embed container.
            </p>
          </div>
          <div class="center card-action">
            <a href="http://playlists.imzankhan.ca/playlists/index.php?eid=1" target="_blank" class="btn deep-orange accent-4">View Project</a>
            <a href="https://github.com/ikhan5/get-together/tree/master/playlists" target="_blank" class="btn orange darken-4">View Code</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="container">
    <h2 class="center">Contact</h2>
    <div id="email_conf"></div>
    <form id="contact__form" method="POST" class="col s12">
      <p class="right red-text">* Required Fields</p>
      <div class="contact__info clearfix">
        <div class="contact__field input-field col s12">
          <label for="contact__name">* Name: </label>
          <input class="validate" type="text" id="contact__name" name="name" required />
        </div>
        <div class="contact__field input-field col s12">
          <label for="contact__email">* Email: </label>
          <input class="validate" type="email" id="contact__email" name="email" required />
        </div>
        <div class="contact__field input-field col s12">
          <textarea class="materialize-textarea validate" name="message" id="contact__message" required></textarea>
          <label for="contact__message">* Message: </label>
        </div>
        <button id="contact__submit" class="btn waves-effect waves-light red right" type="submit" name="action">
          Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </section>
  <footer class="page-footer orange">
    <div class="container">
      <div class="center">
        <a class="white-text" href="#header" id="footer__back-to-top">Back to Top <i class="fas fa-long-arrow-alt-up"></i></a>
      </div>
      <div class="col l4 s12 right">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-5" href="#bio">About</a></li>
          <li><a class="grey-text text-lighten-5" href="#skills">Skills</a></li>
          <li><a class="grey-text text-lighten-5" href="#work">Work</a></li>
          <li>
            <a class="grey-text text-lighten-5" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <p class="footer-copyright white-text clearfix">
        &copy; Copyright Imzan Khan, 2019.
      </p>
    </div>
  </footer>
</body>

</html>