<?php

/* JMPCPetFriendsProtectorsBundle:Animals:localization.html.twig */
class __TwigTemplate_ef2896205c72feab844ff34b2141e1e8bba564344e5672d0ebcd1968e2f031ed extends Twig_Template
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
        // line 3
        echo "
<script>
    \$(document).ready(function(){
        initialize('";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "direccion"), "html", null, true);
        echo "');
    });
</script>

<div class=\"box\">
    <div id=\"map_canvas\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Animals:localization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  19 => 3,  164 => 73,  156 => 67,  154 => 66,  143 => 58,  138 => 55,  134 => 53,  130 => 51,  128 => 50,  122 => 47,  116 => 44,  109 => 40,  103 => 37,  97 => 34,  93 => 33,  87 => 30,  82 => 27,  78 => 25,  72 => 22,  66 => 21,  58 => 16,  52 => 15,  47 => 12,  44 => 11,  39 => 9,  30 => 7,);
    }
}
