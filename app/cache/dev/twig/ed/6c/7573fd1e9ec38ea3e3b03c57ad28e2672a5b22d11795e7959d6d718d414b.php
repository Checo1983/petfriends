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
        return array (  146 => 48,  137 => 45,  126 => 41,  58 => 20,  53 => 13,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  118 => 43,  114 => 41,  84 => 26,  76 => 28,  65 => 23,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  104 => 27,  90 => 22,  70 => 17,  124 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 42,  128 => 48,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 18,  67 => 18,  63 => 15,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 24,  75 => 29,  68 => 14,  56 => 14,  87 => 29,  21 => 2,  26 => 6,  93 => 32,  88 => 34,  78 => 29,  46 => 7,  27 => 4,  44 => 11,  31 => 5,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 66,  151 => 41,  142 => 59,  138 => 54,  136 => 35,  121 => 41,  117 => 44,  105 => 39,  91 => 27,  62 => 15,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 21,  72 => 28,  69 => 27,  47 => 15,  40 => 7,  37 => 6,  22 => 3,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 35,  108 => 28,  101 => 32,  98 => 31,  96 => 36,  83 => 25,  74 => 18,  66 => 16,  55 => 13,  52 => 13,  50 => 10,  43 => 8,  41 => 10,  35 => 8,  32 => 8,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 42,  149 => 49,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 37,  112 => 29,  109 => 34,  106 => 33,  103 => 32,  99 => 26,  95 => 31,  92 => 21,  86 => 21,  82 => 20,  80 => 25,  73 => 21,  64 => 16,  60 => 6,  57 => 14,  54 => 13,  51 => 12,  48 => 12,  45 => 11,  42 => 7,  39 => 8,  36 => 10,  33 => 4,  30 => 7,);
    }
}
