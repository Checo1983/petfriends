<?php

/* JMPCPetFriendsProtectorsBundle:Comments:form.html.twig */
class __TwigTemplate_3fc350a78af57fd86a309b1b0273f319722ae530d59710746ac1ee773f6da64e extends Twig_Template
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
<form method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_comment_create", array("post_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "contenido"), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
    <p>
    \t<input type=\"submit\" value=\"Enviar\">
    </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Comments:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  22 => 5,  19 => 4,);
    }
}
