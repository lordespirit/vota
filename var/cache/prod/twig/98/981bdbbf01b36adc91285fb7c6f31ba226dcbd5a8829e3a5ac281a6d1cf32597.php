<?php

/* administracioEdicio.html.twig */
class __TwigTemplate_7390445e7f5a5e8cdacc7dd45db8234527c2e0321f83fff12ecf8a8118e9805f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantilla.bootstrap.html.twig", "administracioEdicio.html.twig", 1);
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

    // line 3
    public function block_bodyAtt($context, array $blocks = array())
    {
        echo " id=\"page-top class=\"index\" ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
\t<!-- Menu -->
    <div id=\"nav-login\">\t\t\t
\t\t";
        // line 8
        echo twig_include($this->env, $context, "login.html.twig");
        echo "
\t</div>
    <!-- menu -->
\t

<div class=\"container fonsForm\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"form-style-6\">
\t\t\t\t<h1>Editar Enquesta #";
        // line 17
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "</h1>
\t\t\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t\t
\t\t\t<form id=\"delete\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar", array("id" => ($context["id"] ?? null))), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t<button id=\"delete_button\" class=\"butonAdminEdicioEliminar\" type=\"submit\" >Eliminar</button>
\t\t\t</form>
\t\t\t<form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("renderEnquesta", array("id" => ($context["id"] ?? null))), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t<button class=\"butonAdminEdicioInfo\" type=\"submit\" >Gràfic</button>
\t\t\t</form>
\t\t\t</div>

\t\t</div>
\t</div>
</div>

";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/ajax/edicioAdmin.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/ajax/checkFormEdit.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracioEdicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  92 => 36,  89 => 35,  75 => 24,  69 => 21,  64 => 19,  60 => 18,  56 => 17,  44 => 8,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracioEdicio.html.twig", "/home/a15eduvalcal/web/a15eduvalcal.ml/public_html/app/Resources/views/administracioEdicio.html.twig");
    }
}
