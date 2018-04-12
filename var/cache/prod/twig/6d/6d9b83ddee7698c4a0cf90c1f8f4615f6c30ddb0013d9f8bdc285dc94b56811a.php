<?php

/* login.html.twig */
class __TwigTemplate_9f40ef608fca83a6871f74d64f4ef1555c826c927bee6e66417b7d71bf525f6e extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar navbar-default navbar-inverse\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
\t\t<img class=\"logo\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/img/logotipo.png"), "html", null, true);
        echo "\" alt=\"VOTA\">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">\t

      <form class=\"navbar-form navbar-left cercador\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Cercador\">
        </div>
        <input type=\"submit\" class=\"btn btn-default\" value=\"Cerca!\"/>
      </form>
\t<form class=\"navbar-form navbar-left\" role=\"search\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
\t\t<input type=\"submit\" class=\"btn btn-default\" value=\"Inici\"/>
    </form>
";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo " 
\t
\t";
            // line 22
            if ((((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "homepage") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "administracioCreacio")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "editarEnquesta")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "renderEnquesta"))) {
                // line 23
                echo "\t\t
\t\t<form class=\"navbar-form navbar-left\" role=\"search\" action=\"";
                // line 24
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administracio");
                echo "\">
\t\t\t<input type=\"submit\" class=\"btn btn-default administracio\" value=\"Gestio / Administració\"/>
\t\t</form>
\t\t\t
\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 28
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "administracio")) {
                echo "\t
\t\t
\t\t<form class=\"navbar-form navbar-left\" action=\"";
                // line 30
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administracioCreacio");
                echo "\">
\t\t\t<input type=\"submit\" class=\"btn btn-labeled btn-warning\" value=\"Crear enquesta\"/>
\t\t</form>
\t\t
\t";
            }
            // line 35
            echo "\t
";
        }
        // line 37
        echo "
      <ul class=\"nav navbar-nav navbar-right\">
\t\t  
\t\t  
";
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 42
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 43
                echo "\t\t<li><p class=\"navbar-text appflash\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p></li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 45
($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 46
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 47
                echo "\t\t<li><p class=\"navbar-text appflash\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p></li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 50
            echo "\t";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 51
                echo "\t\t<li><p class=\"navbar-text appflash\">Tens ja un compte?</p></li>
\t";
            }
        }
        // line 54
        echo "\t\t
";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
\t\t
\t<li><p class=\"navbar-text\">Has iniciat sessió &nbsp;<span class='nom'> ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo " </span> &nbsp; <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Tancar sessió</a></p></li>
\t
";
        } else {
            // line 60
            echo "\t
\t\t<li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
\t\t\t<ul id=\"login-dp\" class=\"dropdown-menu\">
\t\t\t\t<li>
\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t\t\t <form class=\"form\" role=\"form\" method=\"post\" action=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" accept-charset=\"UTF-8\" id=\"login-nav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputEmail2\">Nom d'usuari</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"text\" name=\"_username\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Username\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"password\" name=\"_password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <button type=\"submit\" class=\"btn btn-primary btn-block\">Entrar</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t <label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"checkbox\"> Romandre connectat
\t\t\t\t\t\t\t\t\t\t\t </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom text-center\">
\t\t\t\t\t\t\t\tEts nou ? <a href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\"><b>Uneix-te a vota!</b></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t </div>
\t\t\t\t</li>
\t\t\t</ul>
        </li>

\t\t\t
";
        }
        // line 97
        echo "
\t\t</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 97,  176 => 88,  153 => 68,  143 => 60,  135 => 57,  130 => 55,  127 => 54,  122 => 51,  119 => 50,  109 => 47,  104 => 46,  102 => 45,  93 => 43,  88 => 42,  86 => 41,  80 => 37,  76 => 35,  68 => 30,  63 => 28,  56 => 24,  53 => 23,  51 => 22,  46 => 20,  40 => 17,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "/home/a15eduvalcal/web/a15eduvalcal.ml/public_html/app/Resources/views/login.html.twig");
    }
}
