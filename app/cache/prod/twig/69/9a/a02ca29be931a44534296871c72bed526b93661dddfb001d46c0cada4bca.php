<?php

/* JMPCPetFriendsProtectorsBundle:Lost:form.html.twig */
class __TwigTemplate_699aa02ca29be931a44534296871c72bed526b93661dddfb001d46c0cada4bca extends Twig_Template
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
        // line 4
        echo "
<div id=\"form_lost\">
\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Lost:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  24 => 6,  19 => 4,  174 => 81,  168 => 77,  164 => 75,  159 => 73,  155 => 72,  146 => 65,  144 => 64,  132 => 55,  125 => 51,  121 => 49,  117 => 47,  113 => 45,  111 => 44,  105 => 41,  99 => 38,  92 => 34,  86 => 31,  80 => 28,  76 => 27,  70 => 24,  62 => 21,  55 => 17,  49 => 16,  44 => 13,  41 => 12,  36 => 10,  30 => 8,);
    }
}
