<?php

/* JMPCPetFriendsProtectorsBundle:Admin:users.html.twig */
class __TwigTemplate_dd05831181b3c514f715e2727c8b408d9c5a53ab93c5773dbda9c24069c868b0 extends Twig_Template
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

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/transdmin.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"style/js/jNice.js\"></script>

";
    }

    // line 14
    public function block_top_block($context, array $blocks = array())
    {
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 18
    public function block_section($context, array $blocks = array())
    {
        // line 19
        echo "\t<h3>Usuarios registrados</h3>
\t<ul>
\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "\t\t";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username") != "admin")) {
                // line 23
                echo "\t\t<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre"), "html", null, true);
                echo "</a><br><span><a href=\"#\">Borrar usuario </a></span><span><a href=\"#\"> Escribir Email</a></span></li>
\t\t";
            }
            // line 25
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t
\t</ul>
\t<div class=\"paginacion\">
        ";
        // line 28
        echo $this->env->getExtension('knp_pagination')->render((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "
    </div>
    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_admin");
        echo "\">Volver</a>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Admin:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  99 => 28,  89 => 25,  81 => 23,  78 => 22,  74 => 21,  70 => 19,  67 => 18,  62 => 16,  57 => 15,  52 => 14,  44 => 10,  40 => 9,  35 => 8,  32 => 7,);
    }
}
