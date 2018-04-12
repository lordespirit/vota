<?php

/* layout.bootstrap.html.twig */
class __TwigTemplate_223738d9d8cf4f3aa3c0143d34204dc2273308451062f36361b12b7b363e6fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.bootstrap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.bootstrap.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Plugin CSS -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/css/freelancer.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body id=\"page-top\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg bg-secondary fixed-top text-uppercase\" id=\"mainNav\">
      <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item mx-0 mx-lg-1\">
              <a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
            </li>
            <li class=\"nav-item mx-0 mx-lg-1\">
              <a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"#about\">About</a>
            </li>
            <li class=\"nav-item mx-0 mx-lg-1\">
              <a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"#contact\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class=\"masthead bg-primary text-white text-center\">
      <div class=\"container\">
        <img class=\"img-fluid mb-5 d-block mx-auto\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/profile.png"), "html", null, true);
        echo "\" alt=\"\">
        <h1 class=\"text-uppercase mb-0\">Start Bootstrap</h1>
        <hr class=\"star-light\">
        <h2 class=\"font-weight-light mb-0\">Web Developer - Graphic Artist - User Experience Designer</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class=\"portfolio\" id=\"portfolio\">
      <div class=\"container\">
        <h2 class=\"text-center text-uppercase text-secondary mb-0\">Portfolio</h2>
        <hr class=\"star-dark mb-5\">
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-1\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/cabin.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-2\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/cake.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-3\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/circus.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-4\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/game.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-5\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/safe.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-6\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/submarine.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class=\"bg-primary text-white mb-0\" id=\"about\">
      <div class=\"container\">
        <h2 class=\"text-center text-uppercase text-white\">About</h2>
        <hr class=\"star-light mb-5\">
        <div class=\"row\">
          <div class=\"col-lg-4 ml-auto\">
            <p class=\"lead\">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
          </div>
          <div class=\"col-lg-4 mr-auto\">
            <p class=\"lead\">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
          </div>
        </div>
        <div class=\"text-center mt-4\">
          <a class=\"btn btn-xl btn-outline-light\" href=\"#\">
            <i class=\"fa fa-download mr-2\"></i>
            Download Now!
          </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id=\"contact\">
      <div class=\"container\">
        <h2 class=\"text-center text-uppercase text-secondary mb-0\">Contact Me</h2>
        <hr class=\"star-dark mb-5\">
        <div class=\"row\">
          <div class=\"col-lg-8 mx-auto\">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"novalidate\">
              <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls mb-0 pb-2\">
                  <label>Name</label>
                  <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Name\" required=\"required\" data-validation-required-message=\"Please enter your name.\">
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls mb-0 pb-2\">
                  <label>Email Address</label>
                  <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Email Address\" required=\"required\" data-validation-required-message=\"Please enter your email address.\">
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls mb-0 pb-2\">
                  <label>Phone Number</label>
                  <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Phone Number\" required=\"required\" data-validation-required-message=\"Please enter your phone number.\">
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls mb-0 pb-2\">
                  <label>Message</label>
                  <textarea class=\"form-control\" id=\"message\" rows=\"5\" placeholder=\"Message\" required=\"required\" data-validation-required-message=\"Please enter a message.\"></textarea>
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <br>
              <div id=\"success\"></div>
              <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary btn-xl\" id=\"sendMessageButton\">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class=\"footer text-center\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 mb-5 mb-lg-0\">
            <h4 class=\"text-uppercase mb-4\">Location</h4>
            <p class=\"lead mb-0\">2215 John Daniel Drive
              <br>Clark, MO 65243</p>
          </div>
          <div class=\"col-md-4 mb-5 mb-lg-0\">
            <h4 class=\"text-uppercase mb-4\">Around the Web</h4>
            <ul class=\"list-inline mb-0\">
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-facebook\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-google-plus\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-twitter\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-linkedin\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-dribbble\"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class=\"col-md-4\">
            <h4 class=\"text-uppercase mb-4\">About Freelancer</h4>
            <p class=\"lead mb-0\">Freelance is a free to use, open source Bootstrap theme created by
              <a href=\"http://startbootstrap.com\">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class=\"copyright py-4 text-center text-white\">
      <div class=\"container\">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class=\"scroll-to-top d-lg-none position-fixed \">
      <a class=\"js-scroll-trigger d-block text-center text-white rounded\" href=\"#page-top\">
        <i class=\"fa fa-chevron-up\"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-1\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/cabin.png"), "html", null, true);
        echo "\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-2\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/cake.png"), "html", null, true);
        echo "\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-3\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/circus.png"), "html", null, true);
        echo "\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-4\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/game.png"), "html", null, true);
        echo "\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-5\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/safe.png"), "html", null, true);
        echo "\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-6\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/portfolio/submarine.png"), "html", null, true);
        echo "\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Contact Form JavaScript -->
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/js/contact_me.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/js/freelancer.min.js"), "html", null, true);
        echo "\"></script>

  </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout.bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 414,  503 => 411,  499 => 410,  493 => 407,  489 => 406,  483 => 403,  479 => 402,  464 => 390,  439 => 368,  414 => 346,  389 => 324,  364 => 302,  339 => 280,  184 => 128,  171 => 118,  158 => 108,  145 => 98,  132 => 88,  119 => 78,  96 => 58,  60 => 25,  54 => 22,  46 => 17,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('template/freelancer/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"{{asset('template/freelancer/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Plugin CSS -->
    <link href=\"{{asset('template/freelancer/vendor/magnific-popup/magnific-popup.css') }}\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom styles for this template -->
    <link href=\"{{asset('template/freelancer/css/freelancer.min.css') }}\" rel=\"stylesheet\">

  </head>

  <body id=\"page-top\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg bg-secondary fixed-top text-uppercase\" id=\"mainNav\">
      <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item mx-0 mx-lg-1\">
              <a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
            </li>
            <li class=\"nav-item mx-0 mx-lg-1\">
              <a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"#about\">About</a>
            </li>
            <li class=\"nav-item mx-0 mx-lg-1\">
              <a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"#contact\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class=\"masthead bg-primary text-white text-center\">
      <div class=\"container\">
        <img class=\"img-fluid mb-5 d-block mx-auto\" src=\"{{asset('template/freelancer/img/profile.png') }}\" alt=\"\">
        <h1 class=\"text-uppercase mb-0\">Start Bootstrap</h1>
        <hr class=\"star-light\">
        <h2 class=\"font-weight-light mb-0\">Web Developer - Graphic Artist - User Experience Designer</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class=\"portfolio\" id=\"portfolio\">
      <div class=\"container\">
        <h2 class=\"text-center text-uppercase text-secondary mb-0\">Portfolio</h2>
        <hr class=\"star-dark mb-5\">
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-1\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"{{asset('template/freelancer/img/portfolio/cabin.png') }}\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-2\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"{{asset('template/freelancer/img/portfolio/cake.png') }}\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-3\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"{{asset('template/freelancer/img/portfolio/circus.png') }}\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-4\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"{{asset('template/freelancer/img/portfolio/game.png') }}\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-5\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"{{asset('template/freelancer/img/portfolio/safe.png') }}\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-6\">
              <div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
                <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\">
                  <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"{{asset('template/freelancer/img/portfolio/submarine.png') }}\" alt=\"\">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class=\"bg-primary text-white mb-0\" id=\"about\">
      <div class=\"container\">
        <h2 class=\"text-center text-uppercase text-white\">About</h2>
        <hr class=\"star-light mb-5\">
        <div class=\"row\">
          <div class=\"col-lg-4 ml-auto\">
            <p class=\"lead\">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
          </div>
          <div class=\"col-lg-4 mr-auto\">
            <p class=\"lead\">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
          </div>
        </div>
        <div class=\"text-center mt-4\">
          <a class=\"btn btn-xl btn-outline-light\" href=\"#\">
            <i class=\"fa fa-download mr-2\"></i>
            Download Now!
          </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id=\"contact\">
      <div class=\"container\">
        <h2 class=\"text-center text-uppercase text-secondary mb-0\">Contact Me</h2>
        <hr class=\"star-dark mb-5\">
        <div class=\"row\">
          <div class=\"col-lg-8 mx-auto\">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"novalidate\">
              <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls mb-0 pb-2\">
                  <label>Name</label>
                  <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Name\" required=\"required\" data-validation-required-message=\"Please enter your name.\">
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls mb-0 pb-2\">
                  <label>Email Address</label>
                  <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Email Address\" required=\"required\" data-validation-required-message=\"Please enter your email address.\">
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls mb-0 pb-2\">
                  <label>Phone Number</label>
                  <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Phone Number\" required=\"required\" data-validation-required-message=\"Please enter your phone number.\">
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls mb-0 pb-2\">
                  <label>Message</label>
                  <textarea class=\"form-control\" id=\"message\" rows=\"5\" placeholder=\"Message\" required=\"required\" data-validation-required-message=\"Please enter a message.\"></textarea>
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <br>
              <div id=\"success\"></div>
              <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary btn-xl\" id=\"sendMessageButton\">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class=\"footer text-center\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 mb-5 mb-lg-0\">
            <h4 class=\"text-uppercase mb-4\">Location</h4>
            <p class=\"lead mb-0\">2215 John Daniel Drive
              <br>Clark, MO 65243</p>
          </div>
          <div class=\"col-md-4 mb-5 mb-lg-0\">
            <h4 class=\"text-uppercase mb-4\">Around the Web</h4>
            <ul class=\"list-inline mb-0\">
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-facebook\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-google-plus\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-twitter\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-linkedin\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a class=\"btn btn-outline-light btn-social text-center rounded-circle\" href=\"#\">
                  <i class=\"fa fa-fw fa-dribbble\"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class=\"col-md-4\">
            <h4 class=\"text-uppercase mb-4\">About Freelancer</h4>
            <p class=\"lead mb-0\">Freelance is a free to use, open source Bootstrap theme created by
              <a href=\"http://startbootstrap.com\">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class=\"copyright py-4 text-center text-white\">
      <div class=\"container\">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class=\"scroll-to-top d-lg-none position-fixed \">
      <a class=\"js-scroll-trigger d-block text-center text-white rounded\" href=\"#page-top\">
        <i class=\"fa fa-chevron-up\"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-1\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"{{asset('template/freelancer/img/portfolio/cabin.png') }}\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-2\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"{{asset('template/freelancer/img/portfolio/cake.png') }}\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-3\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"{{asset('template/freelancer/img/portfolio/circus.png') }}\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-4\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"{{asset('template/freelancer/img/portfolio/game.png') }}\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-5\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"{{asset('template/freelancer/img/portfolio/safe.png') }}\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-6\">
      <div class=\"portfolio-modal-dialog bg-white\">
        <a class=\"close-button d-none d-md-block portfolio-modal-dismiss\" href=\"#\">
          <i class=\"fa fa-3x fa-times\"></i>
        </a>
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-secondary text-uppercase mb-0\">Project Name</h2>
              <hr class=\"star-dark mb-5\">
              <img class=\"img-fluid mb-5\" src=\"{{asset('template/freelancer/img/portfolio/submarine.png') }}\" alt=\"\">
              <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\" href=\"#\">
                <i class=\"fa fa-close\"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src=\"{{asset('template/freelancer/vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{asset('template/freelancer/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"{{asset('template/freelancer/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
    <script src=\"{{asset('template/freelancer/vendor/magnific-popup/jquery.magnific-popup.min.js') }}\"></script>

    <!-- Contact Form JavaScript -->
    <script src=\"{{asset('template/freelancer/js/jqBootstrapValidation.js') }}\"></script>
    <script src=\"{{asset('template/freelancer/js/contact_me.js') }}\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"{{asset('template/freelancer/js/freelancer.min.js') }}\"></script>

  </body>

</html>
", "layout.bootstrap.html.twig", "/home/ubuntu/symfony/Transversal2/app/Resources/views/layout.bootstrap.html.twig");
    }
}
