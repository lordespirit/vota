<?php

/* principal.html.twig */
class __TwigTemplate_be10a4c854275e931702ac354c09615ab623d21a8b7c79a7620ea1e8366ca261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantilla.bootstrap.html.twig", "principal.html.twig", 1);
        $this->blocks = array(
            'bodyAtt' => array($this, 'block_bodyAtt'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "plantilla.bootstrap.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_bodyAtt($context, array $blocks = array())
    {
        echo " id=\"page-top class=\"index\" ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <!-- Menu -->
    <div id=\"nav-login\">\t\t\t
\t\t";
        // line 9
        echo twig_include($this->env, $context, "login.html.twig");
        echo "
\t</div>
    <!-- menu -->

    <!-- Portfolio Grid Section -->
    <section class=\"portfolio\" id=\"portfolio\">
      <div class=\"container-fluid\">
\t\t  
<!-- Si no hi ha autenticació o es administrador, es mostrarà els destacats -->\t\t  
";
        // line 18
        if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 19
            echo "\t
\t";
            // line 20
            echo twig_include($this->env, $context, "destacats.html.twig");
            echo "
\t
<!-- Si està autenticat, aleshores evualuarà si es usuari o administrador per a mostrar el seu contingut -->\t
";
        } else {
            // line 23
            echo "\t  
\t 
\t<!-- Si es usauri normal, carrega el twig d'usuaris -->
\t";
            // line 26
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                echo " 
\t
\t\t";
                // line 28
                echo twig_include($this->env, $context, "usuaris.html.twig");
                echo "
\t\t  
\t";
            }
            // line 31
            echo "\t
";
        }
        // line 33
        echo "
      </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  83 => 31,  77 => 28,  72 => 26,  67 => 23,  60 => 20,  57 => 19,  55 => 18,  43 => 9,  38 => 6,  35 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "principal.html.twig", "/home/a15eduvalcal/web/a15eduvalcal.ml/public_html/app/Resources/views/principal.html.twig");
    }
}
