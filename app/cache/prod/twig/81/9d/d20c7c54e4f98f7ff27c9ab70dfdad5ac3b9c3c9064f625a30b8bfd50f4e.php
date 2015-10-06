<?php

/* JMPCPetFriendsProtectorsBundle:Lost:localization.html.twig */
class __TwigTemplate_819dd20c7c54e4f98f7ff27c9ab70dfdad5ac3b9c3c9064f625a30b8bfd50f4e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "direccion"), "html", null, true);
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
        return "JMPCPetFriendsProtectorsBundle:Lost:localization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  19 => 3,  174 => 81,  168 => 77,  164 => 75,  159 => 73,  155 => 72,  146 => 65,  144 => 64,  132 => 55,  125 => 51,  121 => 49,  117 => 47,  113 => 45,  111 => 44,  105 => 41,  99 => 38,  92 => 34,  86 => 31,  80 => 28,  76 => 27,  70 => 24,  62 => 21,  55 => 17,  49 => 16,  44 => 13,  41 => 12,  36 => 10,  30 => 8,);
    }
}
