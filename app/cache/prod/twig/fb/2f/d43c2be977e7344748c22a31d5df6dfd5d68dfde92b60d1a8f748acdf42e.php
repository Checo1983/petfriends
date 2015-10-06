<?php

/* JMPCPetFriendsProtectorsBundle:Lost:edit.html.twig */
class __TwigTemplate_fb2fd43c2be977e7344748c22a31d5df6dfd5d68dfde92b60d1a8f748acdf42e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
            'sidebar' => array($this, 'block_sidebar'),
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
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"grid_8 prefix_1\">
    <h2>Editar Animal</h2><br>
    ";
        // line 10
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 11
            echo "        <div class=\"errors\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</div>
    ";
        } elseif ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "        <div id=\"form\">
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
            // line 19
            echo " 
        <div class=\"not_found\"></div>
    ";
        }
        // line 22
        echo "    <div class=\"button_back\">
       <a class=\"btn02\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost");
        echo "\">Volver</a>
    </div>
</div>
";
    }

    // line 29
    public function block_sidebar($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("JMPCPetFriendsProtectorsBundle:Animals:lateral"), array());
        // line 31
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Lost:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  78 => 30,  75 => 29,  67 => 23,  64 => 22,  59 => 19,  53 => 17,  47 => 14,  44 => 13,  38 => 11,  36 => 10,  32 => 8,  29 => 7,);
    }
}
