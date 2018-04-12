<?php

/* administracio.html.twig */
class __TwigTemplate_7c24092d0d1bb4332b46fc17c1d0e680d8f351d7e657964013d9c76e2de3d728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantilla.bootstrap.html.twig", "administracio.html.twig", 1);
        $this->blocks = array(
            'bodyAtt' => array($this, 'block_bodyAtt'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
\t<!-- Menu -->
    <div id=\"nav-login\">\t\t\t
\t\t";
        // line 9
        echo twig_include($this->env, $context, "login.html.twig");
        echo "
\t</div>
    <!-- menu -->
\t
<!-- A partir d'aqui, apareixen els llistat d'enquestes per administrar -->
<article>\t
\t\t\t<div class=\"llistat_enquestes_admin\">
\t\t\t\t<div class=\"llista_scroll_admin\">
\t\t\t\t</div>
\t\t\t</div>\t\t
</article>
";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/ajax/llistatAdministracio.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "administracio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  60 => 24,  44 => 9,  39 => 6,  36 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracio.html.twig", "/home/a15eduvalcal/web/a15eduvalcal.ml/public_html/app/Resources/views/administracio.html.twig");
    }
}
