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
        return array (  152 => 52,  134 => 53,  97 => 34,  129 => 43,  81 => 25,  77 => 30,  23 => 6,  146 => 48,  137 => 45,  126 => 43,  58 => 10,  53 => 17,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  118 => 43,  114 => 41,  84 => 16,  76 => 20,  65 => 23,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  104 => 27,  90 => 30,  70 => 17,  124 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 42,  128 => 50,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 58,  135 => 53,  119 => 42,  102 => 34,  71 => 18,  67 => 19,  63 => 15,  59 => 19,  38 => 11,  94 => 32,  89 => 20,  85 => 28,  75 => 22,  68 => 14,  56 => 14,  87 => 28,  21 => 2,  26 => 8,  93 => 33,  88 => 34,  78 => 30,  46 => 7,  27 => 7,  44 => 13,  31 => 8,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 67,  151 => 41,  142 => 59,  138 => 55,  136 => 46,  121 => 40,  117 => 40,  105 => 35,  91 => 27,  62 => 15,  49 => 14,  24 => 6,  25 => 3,  19 => 4,  79 => 21,  72 => 22,  69 => 24,  47 => 14,  40 => 10,  37 => 6,  22 => 5,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 35,  108 => 37,  101 => 32,  98 => 33,  96 => 36,  83 => 32,  74 => 13,  66 => 21,  55 => 18,  52 => 15,  50 => 13,  43 => 13,  41 => 12,  35 => 10,  32 => 8,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 73,  162 => 57,  154 => 66,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 51,  125 => 44,  122 => 47,  116 => 39,  112 => 38,  109 => 40,  106 => 33,  103 => 37,  99 => 25,  95 => 32,  92 => 23,  86 => 21,  82 => 27,  80 => 31,  73 => 21,  64 => 22,  60 => 17,  57 => 16,  54 => 13,  51 => 24,  48 => 12,  45 => 11,  42 => 7,  39 => 21,  36 => 10,  33 => 15,  30 => 7,);
    }
}
