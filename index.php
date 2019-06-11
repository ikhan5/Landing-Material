<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link rel="stylesheet" href="CSS/styles.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <div class="proceed"><a id="to-content" href="#bio"><i class="fas fa-angle-double-down"></i></a></div>
      </div>
      <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden;  height:768px; position: absolute; left: 0px; top: 0px; display: block;">
      </div>
    </div>
  </header>
  <section id="bio" class="container">
    <h2 class="center section_header">Who am I?</h2>
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
              My speciality would be working with JavaScript and PHP/MySQL as it allows me to develop
              personalized and interactive websites. I believe that every website should
              have something unique to make it stand out among the rest.
            </p>
            <p>
              On a personal note, I enjoy Wrestling, Sports, Video Games, and making my own Browser Games.
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
    <h2 class="center section_header">My Skills</h2>
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
          <li>Laravel</li>
          <li>C and C#</li>
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
          <li>Adobe Photoshop</li>
        </ul>
      </div>
    </div>
  </section>
  <section id="work" class="container-fluid">
    <h2 class="center section_header">Projects</h2>
    <div class="work__projects row">
      <div class="work__example col m6 s12 center">
        <h2 class="work__title">Job Applciation Manager</h2>
        <div class="call-to-action">
          <div class="work__image">
            <img src="images/Gifs/app-manager.gif" alt="A Gif of a job application manager made by Imzan Khan" title="Click to see more about this project!" />
          </div>
          <div class="center links">
            <a href="http://joballation.gq/" target="_blank" class="btn deep-orange accent-4">View Project</a>
            <a href="https://github.com/BibekStha/Joballation-FF" target="_blank" class="btn orange darken-4">View Code</a>
          </div>
        </div>
      </div>
      <div class="work__desc col m6 s12">
        <div class="work_example_description">
          <p>
            Branded as 'Joballation' the Job Application Manager allows for users to
            enter any relevant information regarding a certain job application into the system.
            Joballation is meant to provide users who are looking for a new job and want a place to
            manage all the postings in an organized manner.
          </p>
          <p>
            My contributions to the project involved developing the user interfaces in the <b>Laravel</b> framework,
            which includes: <b>Bootstrap</b> and <b>SASS</b>, which were used to develop the prototypes made by the
            UI/UX designer in <b>Adobe XD</b>. I used <b>Laravel's Eloquent ORM</b> to pull the desired filters into the
            applications index, as well as the applications that belonged to that user.
          </p>
          <p>In addition, I developed the job application comparison features using <b>Laravel's Routing</b> to send the desired
            job postings for comparison. To compare the postings, I primarily used <b>jQuery</b> for the compare functionality.
          </p>
        </div>
        <div class="work__example_languages">
          <h3 class="languages">Used in the project:</h3>
          <ul>
            <li>Laravel</li>
            <li>SASS</li>
            <li>Eloqeunt ORM</li>
            <li>JavaScript & jQuery</li>
            <li>AJAX</li>
            <li>Bootstrap</li>
            <li>PHP & MySQL</li>
            <li>HTML5 & CSS3</li>
          </ul>
        </div>
      </div>
    </div>
    <p class="divider"></p>
    <div class="work__projects row">
      <div class="work__example col m6 s12 center">
        <h2 class="work__title">Sorting Game</h2>
        <div class="call-to-action">
          <div class="work__image">
            <img src="images/Gifs/sorting.gif" alt="A Gif of a sorting game made by Imzan Khan" title="Click to see more about this project!" />
          </div>
          <div class="center links">
            <a href="http://sorting.imzankhan.ca/" target="_blank" class="btn deep-orange accent-4">View Project</a>
            <a href="https://github.com/ikhan5/SortingGame" target="_blank" class="btn orange darken-4">View Code</a>
          </div>
        </div>
      </div>
      <div class="work__desc col m6 s12">
        <div class="work__overview">
          <p class="work_example_description">
            The Sorting Game uses <b>AJAX</b> and the
            <a href="https://anapioficeandfire.com/" target="_blank">Game of Thrones API</a>
            to pull all the characters from the show. The characters are put
            in random order and must be sorted in alphabetical order. The characters are able to be moved by dragging the names, which is enabled by <b>jQuery UI's</b> sortable functionality.
          </p>
          <p><b>PHP and MySQL</b> are used to develop the Player Management System, which includes
            registration, account activation, and logging in/out. Player's scored and recorded and listed individually, as well as globally amongst the other player's high scores.</p>
          <p> <b>Note: Don't worry there are NO SPOILERS </b></p>
        </div>
        <div class="work__example_languages">
          <h3 class="languages">Used in the project:</h3>
          <ul>
            <li>HTML5 & CSS3</li>
            <li>JavaScript & jQuery</li>
            <li>AJAX</li>
            <li>jQuery UI</li>
            <li>Bootstrap</li>
            <li>PHP & MySQL</li>
          </ul>
        </div>
      </div>
    </div>
    <p class="divider"></p>
    <div class="work__projects row">
      <div class="work__example col m6 s12 center">
        <h2 class="work__title">Black Jack</h2>
        <div class="call-to-action">
          <div class="work__image">
            <img src="images/Gifs/blackjack.gif" alt="A Gif of a sorting game made by Imzan Khan" title="Click to see more about this project!" />
          </div>
          <div class="center links">
            <a href="http://blackjack.imzankhan.ca/" target="_blank" class="btn deep-orange accent-4">View Project</a>
            <a href="https://github.com/ikhan5/BlackJack" target="_blank" class="btn orange darken-4">View Code</a>
          </div>
        </div>
      </div>
      <div class="work__desc col m6 s12">
        <div class="work_example_description">
          <p>
            The Blackjack game is a project I used to help supplement my learning during the first semester, it is coded using only vanilla <b>JavaScript.</b>
            This includes the dealer AI, basic game play, and the adaptive scoring (arguably the hardest part).
          </p>
          <p>The game revolves around <b>Object Oriented JavaScript</b>, this includes the Cards, the Deck, and the Players (you and the dealer).
            The cards are objects that contain values such as: card image, card value, alternate values (where required), and name (i.e. Ace of Spades). The use of Card Objects allows for flexible and organized coding. </p>

          <p>
            The issue with the hand totals was due to the fact that in BlackJack cards can have
            more than one value depending on the total score in the player's hand; thus, multiple hand totals were calculated in the Player object and compared to see which was larger,
            but was less than or equal to 21.
          </p>
        </div>
        <div class="work__example_languages">
          <h3 class="languages">Used in the project:</h3>
          <ul>
            <li>HTML5 & CSS3</li>
            <li>JavaScript</li>
          </ul>
        </div>
      </div>
    </div>
    <p class="divider"></p>
    <div class="work__projects row">
      <div class="work__example col m6 s12 center">
        <h2 class="work__title">Create A Playlist</h2>
        <div class="call-to-action">
          <div class="work__image">
            <img src="images/Gifs/playlists.gif" alt="A Gif of a Playlist application made by Imzan Khan" />
          </div>
          <div class="center links">
            <a href="http://playlists.imzankhan.ca/playlists/index.php?eid=1" target="_blank" class="btn deep-orange accent-4">View Project</a>
            <a href="https://github.com/ikhan5/Playlists.git" target="_blank" class="btn orange darken-4">View Code</a>
          </div>
        </div>
      </div>
      <div class="work__desc col m6 s12">
        <div class="work_example_description">
          <p>
            As apart of a team we developed a Party Planning website
            known as <a href="http://get-together.gq/">'Get Together'</a> (full site, click View Project for Playlist feature). The Playlist feature allows users to
            add hand selected songs to a playlist and play them in the YouTube
            embed container.
          </p>
          <p>
            This feature includes a lot of <b>PHP</b> and <b>JavaScript/jQuery</b>, as there is constant
            interaction between actions on the interface that result in changes in the Database.
            Changes such as clicking a Playlist pulls all the songs that have been added to the
            Playlist. <b>Object Oriented PHP</b>, along with secure database practices, such as, binding, preparing, and executing
            <b>MySQL</b> queries using Database Methods.
          </p>
          <p>
            The main problem to overcome was collaborating for the first time with other developers to create a much larger
            website than I am accustomed to. This was solved using standard Git and GitHub practices, and communicating with
            my teammates as often as possible.
          </p>
        </div>
        <div class="work__example_languages">
          <h3 class="languages">Used in the project:</h3>
          <ul>
            <li>HTML5 & CSS3</li>
            <li>JavaScript & jQuery</li>
            <li>AJAX</li>
            <li>Bootstrap</li>
            <li>PHP & MySQL</li>
          </ul>
        </div>
      </div>
    </div>
    <p class="divider"></p>
  </section>
  <section id="contact" class="container">
    <h2 class="center section_header">Contact</h2>
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
        <ul class="footer-nav">
          <li><a class="grey-text text-lighten-5" href="#bio">About</a></li>
          <li><a class="grey-text text-lighten-5" href="#skills">Skills</a></li>
          <li><a class="grey-text text-lighten-5" href="#work">Work</a></li>
          <li>
            <a class="grey-text text-lighten-5" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <p class="footer-copyright orange white-text clearfix">
        &copy; Copyright Imzan Khan, 2019.
      </p>
    </div>
  </footer>
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
</body>

</html>