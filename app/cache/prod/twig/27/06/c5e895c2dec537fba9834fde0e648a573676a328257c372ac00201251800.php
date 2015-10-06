<?php

/* JMPCPetFriendsProtectorsBundle:Lost:index.html.twig */
class __TwigTemplate_2706c5e895c2dec537fba9834fde0e648a573676a328257c372ac00201251800 extends Twig_Template
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

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Mascotas desaparecidas";
    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"section\" class=\"grid_8 prefix_1\">
    ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "        <span class=\"new_post\"><a href=";
            echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost_new");
            echo ">Nuevo amigo desaparecido</a></span>
    ";
        }
        // line 14
        echo " 
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["losts"]) ? $context["losts"] : $this->getContext($context, "losts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lost"]) {
            // line 16
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "fechaperdida"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "fechaperdida"), "l, F j, Y"), "full", "none", "es")), "html", null, true);
            echo "</time></div>
            <header class=\"ici02\">
                <h2 class=\"ic1\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost_view", array("id" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "idanimalperdido"), "slug" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "nombre"), "html", null, true);
            echo "</a></h2>
            </header>
            <div class=\"box_img\">
                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/lista_", 1 => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "fotografia")))), "html", null, true);
            echo "\" />
            </div>
            <div class=\"snippet\">
                <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "mensaje", array(0 => 300), "method"), "html", null, true);
            echo "</p>
                <div class=\"clear\"></div>
                <div class=\"button_continue\">
                    <a class=\"btn02\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost_view", array("id" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "idanimalperdido"), "slug" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "slug"))), "html", null, true);
            echo "\">Ficha completa</a>
                </div>
            </div>
            <footer class=\"meta\">
                <p>Especie: <span class=\"highlight\">";
            // line 32
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "tipo")), "html", null, true);
            echo "</span></p>
                <p>Raza: <span class=\"highlight\">";
            // line 33
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "raza")), "html", null, true);
            echo "</span></p>
                <p>Sexo: <span class=\"highlight\">";
            // line 34
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "sexo")), "html", null, true);
            echo "</span></p>
            </footer>
            <div class=\"links_post\">
            ";
            // line 37
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo " 
                <a id=\"delete\" onclick=\"return confirm('¿Borrar entrada?')\" href= ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost_delete", array("id" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "idanimalperdido"), "slug" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "slug"))), "html", null, true);
                echo ">Borrar Entrada</a>
                <a href=";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost_edit", array("id" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "idanimalperdido"), "slug" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "slug"))), "html", null, true);
                echo ">Editar Entrada</a>
            ";
            } elseif ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 40
                echo " 
                <a href=";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost_edit", array("id" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "idanimalperdido"), "slug" => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "slug"))), "html", null, true);
                echo ">Editar Entrada</a>
            ";
            }
            // line 43
            echo "            </div>
        </article> 
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        <div class=\"not_found\"></div>
        <div class=\"button_back\">
            <a class=\"btn02\" href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
            echo "\">Volver</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    <div class=\"paginacion\">
        ";
        // line 52
        echo $this->env->getExtension('knp_pagination')->render((isset($context["losts"]) ? $context["losts"] : $this->getContext($context, "losts")));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Lost:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  149 => 51,  140 => 48,  136 => 46,  129 => 43,  124 => 41,  121 => 40,  116 => 39,  112 => 38,  108 => 37,  102 => 34,  98 => 33,  94 => 32,  87 => 28,  81 => 25,  75 => 22,  67 => 19,  60 => 17,  57 => 16,  52 => 15,  49 => 14,  43 => 13,  41 => 12,  38 => 11,  35 => 10,  29 => 8,);
    }
}
