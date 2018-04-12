<?php

/* destacats.html.twig */
class __TwigTemplate_e5e50336da9467a78da5427931a2b3149ce76e966e29619e4a6235e101fa1f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<article class=\"destacats-block\">
\t\t\t<h2 class=\"text-center text-uppercase text-secondary mb-0\">Destacats</h2>
\t\t\t<hr class=\"star-dark mb-5\">

\t\t</article>

";
        // line 7
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/freelancer/vendor/ajax/destacats.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "destacats.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 7,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "destacats.html.twig", "/home/a15eduvalcal/web/a15eduvalcal.ml/public_html/app/Resources/views/destacats.html.twig");
    }
}
