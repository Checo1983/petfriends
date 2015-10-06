<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_a920ad3ef3898f8933f78a1a6f892ee2c2b48fb3f5b0254dd78f415dd4067ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'sidebar' => array($this, 'block_sidebar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
\t<meta http-equiv=\"Refresh\" content=\"5;url=http:../\">
";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "    \t<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email")), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  46 => 14,  41 => 13,  33 => 9,  30 => 8,);
    }
}
