<?php

/* JMPCPetFriendsProtectorsBundle:Page:list.html.twig */
class __TwigTemplate_ec41be192036d22f2cf71293eef5e2c0c58fa5fd1b7e61b2e07cc434c88996c6 extends Twig_Template
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
        echo "Blog";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " - Administración";
        }
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"grid_8 prefix_1\">
    <article class=\"blog\">
        <header class=\"ici02\">
            <div class=\"date\"><time datetime=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creado"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creado"), "l, F j, Y"), "full", "none", "es")), "html", null, true);
        echo "</time></div>
            <h2 class=\"ic1\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titulo"), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imagen")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titulo"), "html", null, true);
        echo " imagen no encontrada\" class=\"large\" />
        <div>
            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenido"), "html", null, true);
        echo "</p>
        </div>
    </article>
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comentarios</h3>
            ";
        // line 24
        $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle:Comments:index.html.twig")->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 25
        echo "        </section>
        <h3>Nuevo comentario</h3>
         ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
            ";
            // line 28
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("JMPCPetFriendsProtectorsBundle:Comments:new", array("post_id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), array());
            echo " 
         ";
        } else {
            // line 30
            echo "            <p>Para comentar debe estar registrado</p>
         ";
        }
        // line 32
        echo "    </section>
    <div class=\"button_back\">
        <a class=\"btn02\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_homepage");
        echo "\">Volver</a>
    </div>
</div>
";
    }

    // line 40
    public function block_sidebar($context, array $blocks = array())
    {
        // line 41
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("JMPCPetFriendsProtectorsBundle:Animals:lateral"), array());
        // line 42
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Page:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  108 => 41,  105 => 40,  97 => 34,  93 => 32,  89 => 30,  84 => 28,  80 => 27,  76 => 25,  74 => 24,  65 => 18,  58 => 16,  53 => 14,  47 => 13,  42 => 10,  39 => 9,  30 => 7,);
    }
}
