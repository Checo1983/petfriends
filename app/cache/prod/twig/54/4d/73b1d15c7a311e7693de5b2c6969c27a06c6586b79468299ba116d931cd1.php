<?php

/* JMPCPetFriendsProtectorsBundle:Page:new.html.twig */
class __TwigTemplate_544d73b1d15c7a311e7693de5b2c6969c27a06c6586b79468299ba116d931cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JMPCPetFriendsProtectorsBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Administración Nueva entrada";
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"grid_8 prefix_1\">
    <h2>Nueva Entrada</h2><br>
    ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
        <div id=\"form\">
            ";
            // line 14
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
        </div>
        <div id=\"preview_img\" title=\"Vista previa\" style=\"display:none\">
            <img id=\"img_preview\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
            echo "\" />
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"not_found\"></div>
    ";
        }
        // line 22
        echo "    <div class=\"button_back\">
        <a class=\"btn02\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_homepage");
        echo "\">Volver</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Page:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  63 => 22,  59 => 20,  53 => 17,  47 => 14,  42 => 12,  38 => 10,  35 => 9,  29 => 7,);
    }
}
