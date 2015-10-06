<?php

/* JMPCPetFriendsProtectorsBundle:Admin:messages.html.twig */
class __TwigTemplate_25cffa7bd3759a3e2cccf368eafcc51a0b8600f9b5c8037d969ce5ed41e96114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'top_block' => array($this, 'block_top_block'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">

";
    }

    // line 13
    public function block_top_block($context, array $blocks = array())
    {
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 17
    public function block_section($context, array $blocks = array())
    {
        // line 18
        echo "<h3>Mensajes recibidos</h3>
\t<ul>
\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"), "html", null, true);
            echo "</li>
\t\t<li>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "asunto"), "html", null, true);
            echo "</li>
\t\t<li>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "nombre"), "html", null, true);
            echo "</li>
\t\t<li>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "email"), "html", null, true);
            echo "</li>
\t\t<li>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "mensaje"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t
\t</ul>
\t<div class=\"paginacion\">
        ";
        // line 29
        echo $this->env->getExtension('knp_pagination')->render((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        echo "
    </div>
    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_admin");
        echo "\">Volver</a>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Admin:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  103 => 29,  98 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  73 => 21,  69 => 20,  65 => 18,  62 => 17,  57 => 15,  52 => 14,  47 => 13,  40 => 10,  35 => 9,  32 => 8,);
    }
}
