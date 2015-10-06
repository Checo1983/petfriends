<?php

/* JMPCPetFriendsProtectorsBundle:Page:lateral.html.twig */
class __TwigTemplate_95c021dfd4a5561c8dd6e67249f080f2d33afdb6eebdf78c93481e1ee6ba5f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"grid_5 prefix_0\">
    <h2 class=\"ic3\">Comentarios recientes</h2>
    <ul class=\"list\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : $this->getContext($context, "latestComments")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 9
            echo "        <li>
            <span class=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "", 1 => "cnt"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\"><time datetime=\"\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "creado"), "d"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "creado"), "F"), "html", null, true);
            echo "</span></time></span>
            <div class=\"extra_wrapper\">
                <div class=\"col1\">
                    <span class=\"highlight\">";
            // line 13
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "usuario")), "html", null, true);
            echo "</span> ha comentado en
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_list", array("id" => $this->getAttribute($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "contenido"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "contenido"), "slug"))), "html", null, true);
            echo "#comentario-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "id"), "html", null, true);
            echo "\">
                      ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "contenido"), "titulo"), "html", null, true);
            echo "
                    </a>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('JMPC_PetFriends_Protectors_extension')->createdAgo($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "creado")), "html", null, true);
            echo "
                </div>
                <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "comentarios", array(0 => 50), "method"), "html", null, true);
            echo "</p>
            </div>
            
        </li>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <p>No hay comentarios recientes</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
    <section class=\"sidebar\">
        <h3>Etiquetas mas usadas</h3>
        <p class=\"tags\">
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 30
            echo "                <span class=\"weight-";
            echo twig_escape_filter($this->env, (isset($context["weight"]) ? $context["weight"] : $this->getContext($context, "weight")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo "</span>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "                <p>No hay etiquetas</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </p>
    </section>
</div>

";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Page:lateral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  174 => 81,  113 => 45,  34 => 10,  152 => 52,  134 => 53,  97 => 34,  129 => 43,  81 => 25,  77 => 29,  23 => 6,  146 => 65,  137 => 43,  126 => 43,  58 => 16,  53 => 13,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 72,  118 => 40,  114 => 41,  84 => 28,  76 => 27,  65 => 25,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  104 => 34,  90 => 29,  70 => 16,  124 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 45,  128 => 34,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 73,  143 => 58,  135 => 46,  119 => 42,  102 => 34,  71 => 18,  67 => 23,  63 => 20,  59 => 19,  38 => 9,  94 => 33,  89 => 20,  85 => 24,  75 => 18,  68 => 14,  56 => 13,  87 => 28,  21 => 2,  26 => 8,  93 => 23,  88 => 34,  78 => 27,  46 => 10,  27 => 7,  44 => 11,  31 => 9,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 67,  151 => 49,  142 => 46,  138 => 55,  136 => 46,  121 => 32,  117 => 39,  105 => 33,  91 => 27,  62 => 21,  49 => 16,  24 => 6,  25 => 8,  19 => 4,  79 => 21,  72 => 22,  69 => 23,  47 => 14,  40 => 10,  37 => 6,  22 => 5,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 42,  123 => 42,  120 => 38,  115 => 43,  111 => 30,  108 => 37,  101 => 32,  98 => 34,  96 => 36,  83 => 31,  74 => 13,  66 => 15,  55 => 17,  52 => 15,  50 => 13,  43 => 9,  41 => 10,  35 => 9,  32 => 8,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 77,  164 => 75,  162 => 57,  154 => 50,  149 => 51,  147 => 58,  144 => 64,  141 => 48,  133 => 55,  130 => 51,  125 => 39,  122 => 47,  116 => 36,  112 => 38,  109 => 40,  106 => 29,  103 => 35,  99 => 32,  95 => 31,  92 => 34,  86 => 31,  82 => 27,  80 => 28,  73 => 21,  64 => 19,  60 => 14,  57 => 17,  54 => 17,  51 => 24,  48 => 12,  45 => 12,  42 => 12,  39 => 9,  36 => 10,  33 => 15,  30 => 7,);
    }
}
