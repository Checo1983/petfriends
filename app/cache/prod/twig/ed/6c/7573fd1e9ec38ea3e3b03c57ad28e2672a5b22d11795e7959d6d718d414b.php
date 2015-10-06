<?php

/* JMPCPetFriendsProtectorsBundle:Animals:index.html.twig */
class __TwigTemplate_ed6c7573fd1e9ec38ea3e3b03c57ad28e2672a5b22d11795e7959d6d718d414b extends Twig_Template
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
        echo "Nuestros amigos";
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
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
        <span class=\"new_post\"><a href=";
            // line 12
            echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_new");
            echo ">Nuevo amigo</a></span>
    ";
        }
        // line 13
        echo " 
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animals"]) ? $context["animals"] : $this->getContext($context, "animals")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 15
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "fechaalta"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "fechaalta"), "l, F j, Y"), "full", "none", "es")), "html", null, true);
            echo "</time></div>
            <header class=\"ici02\">
                <h2 class=\"ic1\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_view", array("id" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "idanimal"), "slug" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "nombre"), "html", null, true);
            echo "</a></h2>
            </header>
            <div class=\"box_img\">
                <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/lista_", 1 => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "fotografia")))), "html", null, true);
            echo "\" />
            </div>
            <div class=\"snippet\">
                <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "historia", array(0 => 300), "method"), "html", null, true);
            echo "</p>
                <div class=\"clear\"></div>
                <div class=\"button_continue\">
                    <a class=\"btn02\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_view", array("id" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "idanimal"), "slug" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "slug"))), "html", null, true);
            echo "\">Ficha completa</a>
                </div>
            </div>
            <footer class=\"meta\">
                <p>Especie: <span class=\"highlight\">";
            // line 31
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "tipo")), "html", null, true);
            echo "</span></p>
                <p>Raza: <span class=\"highlight\">";
            // line 32
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "raza")), "html", null, true);
            echo "</span></p>
                <p>Sexo: <span class=\"highlight\">";
            // line 33
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "sexo")), "html", null, true);
            echo "</span></p>
            </footer>
            ";
            // line 35
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo " 
            <div class=\"links_post\">
                <a id=\"delete\" onclick=\"return confirm('¿Borrar entrada?')\" href= ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_delete", array("id" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "idanimal"), "slug" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "slug"))), "html", null, true);
                echo ">Borrar Entrada</a>
                <a href=";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_edit", array("id" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "idanimal"), "slug" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "slug"))), "html", null, true);
                echo ">Editar Entrada</a>
            </div>
            ";
            }
            // line 41
            echo "        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo " 
        <div class=\"not_found\"></div>
        <div class=\"button_back\">
            <a class=\"btn02\" href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
            echo "\">Volver</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    <div class=\"paginacion\">
        ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->render((isset($context["animals"]) ? $context["animals"] : $this->getContext($context, "animals")));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Animals:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 49,  146 => 48,  137 => 45,  132 => 42,  126 => 41,  120 => 38,  116 => 37,  111 => 35,  106 => 33,  102 => 32,  98 => 31,  91 => 27,  85 => 24,  79 => 21,  71 => 18,  64 => 16,  61 => 15,  56 => 14,  53 => 13,  48 => 12,  44 => 11,  41 => 10,  38 => 9,  29 => 7,);
    }
}
