<?php

/* JMPCPetFriendsProtectorsBundle:Page:contact.html.twig */
class __TwigTemplate_fffca00511e14203aba2a7a76ea87e8419c78338e2dc3d107c46bd0a6fd1723c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Contacto";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " - Administración";
        }
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"content grid_12 prefix_1\">
        <h2 class=\"ic4\">Contacto</h2>
       
        <div id=\"form\">
            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_contact");
        echo "\" method=\"post\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <p>
                  <button id=\"form_Enviar\" type=\"submit\">Enviar</button>
                </p>
            </form>
        </div>
    </div>
    
";
    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  52 => 15,  48 => 14,  42 => 10,  39 => 9,  30 => 7,);
    }
}
