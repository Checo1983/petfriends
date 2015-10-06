<?php

/* JMPCPetFriendsProtectorsBundle:Adopted:index.html.twig */
class __TwigTemplate_0604cafbc6038311deda8e11884a7c01f58cba204870db1f671262735e1fdc5b extends Twig_Template
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
        echo "Amigos adoptados";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " - Administración";
        }
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"section\" class=\"grid_8 prefix_1\">
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adopteds"]) ? $context["adopteds"] : $this->getContext($context, "adopteds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["adopted"]) {
            // line 12
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "fechaadopcion"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "fechaadopcion"), "l, F j, Y"), "full", "none", "es")), "html", null, true);
            echo "</time></div>
            <header class=\"ici02\">
                <h2 class=\"ic1\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "idanimal"), "slug" => $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "nombre"), "html", null, true);
            echo "</a></h2>
            </header>
            <div class=\"box_img\">
                <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/lista_", 1 => $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "fotografia")))), "html", null, true);
            echo "\" />
            </div>
            <div class=\"snippet\">
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "historia", array(0 => 300), "method"), "html", null, true);
            echo "</p>
                <div class=\"clear\"></div>
                <div class=\"button_continue\">
                    <a class=\"btn02\" 
                    href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "idanimal"), "slug" => $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "slug"))), "html", null, true);
            echo "\">Ficha completa</a>
                </div>
            </div>
            <footer class=\"meta\">
                <p>Adoptado por: <span class=\"highlight\">";
            // line 29
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "usuario"), "username")), "html", null, true);
            echo "</span></p>
                <p>Especie: <span class=\"highlight\">";
            // line 30
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "tipo")), "html", null, true);
            echo "</span></p>
                <p>Raza: <span class=\"highlight\">";
            // line 31
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "raza")), "html", null, true);
            echo "</span></p>
                <p>Sexo: <span class=\"highlight\">";
            // line 32
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["adopted"]) ? $context["adopted"] : $this->getContext($context, "adopted")), "animal"), "sexo")), "html", null, true);
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "        <div class=\"not_found\"></div>
        <div class=\"button_back\">
            <a class=\"btn02\" href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
            echo "\">Volver</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adopted'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        <div class=\"paginacion\">
            ";
        // line 42
        echo $this->env->getExtension('knp_pagination')->render((isset($context["adopteds"]) ? $context["adopteds"] : $this->getContext($context, "adopteds")));
        echo "
        </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Adopted:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  121 => 41,  112 => 38,  108 => 36,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  80 => 25,  73 => 21,  67 => 18,  59 => 15,  52 => 13,  49 => 12,  44 => 11,  41 => 10,  38 => 9,  29 => 7,);
    }
}
