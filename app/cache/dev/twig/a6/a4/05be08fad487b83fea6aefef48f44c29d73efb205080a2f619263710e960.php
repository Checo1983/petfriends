<?php

/* JMPCPetFriendsProtectorsBundle:Animals:lateral.html.twig */
class __TwigTemplate_a6a405be08fad487b83fea6aefef48f44c29d73efb205080a2f619263710e960 extends Twig_Template
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
        // line 3
        echo "

<div class=\"grid_5 prefix_0\">
    <h2 class=\"ic1\">Entradas recientes</h2>
    <ul class=\"list\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestPosts"]) ? $context["latestPosts"] : $this->getContext($context, "latestPosts")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "            <li>
                <span class=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "", 1 => "cnt"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\"><time datetime=\"\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creado"), "d"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creado"), "F"), "html", null, true);
            echo "</span></time></span>
                <div class=\"extra_wrapper\">
                    <div class=\"col1\">
                        <span class=\"highlight\">";
            // line 13
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "autor")), "html", null, true);
            echo "</span> ha escrito
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_list", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"), "slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug"))), "html", null, true);
            // line 15
            echo "\">
                          ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titulo"), "html", null, true);
            echo "
                        </a>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('JMPC_PetFriends_Protectors_extension')->createdAgo($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creado")), "html", null, true);
            echo "
                    </div>
                </div>
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenido", array(0 => 100), "method"), "html", null, true);
            echo "...</p>
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
            echo "            <p>No hay entradas recientes</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Animals:lateral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  81 => 27,  77 => 26,  23 => 6,  146 => 48,  137 => 45,  126 => 43,  58 => 16,  53 => 13,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  118 => 43,  114 => 41,  84 => 26,  76 => 20,  65 => 23,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  104 => 27,  90 => 30,  70 => 17,  124 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 42,  128 => 48,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 18,  67 => 18,  63 => 15,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 28,  75 => 29,  68 => 14,  56 => 14,  87 => 29,  21 => 2,  26 => 8,  93 => 32,  88 => 34,  78 => 29,  46 => 7,  27 => 7,  44 => 9,  31 => 5,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 66,  151 => 41,  142 => 59,  138 => 54,  136 => 35,  121 => 41,  117 => 40,  105 => 35,  91 => 27,  62 => 15,  49 => 12,  24 => 4,  25 => 3,  19 => 3,  79 => 21,  72 => 28,  69 => 27,  47 => 10,  40 => 10,  37 => 6,  22 => 3,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 35,  108 => 28,  101 => 32,  98 => 31,  96 => 36,  83 => 25,  74 => 18,  66 => 16,  55 => 13,  52 => 13,  50 => 13,  43 => 11,  41 => 10,  35 => 9,  32 => 8,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 42,  149 => 49,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 37,  112 => 37,  109 => 34,  106 => 33,  103 => 32,  99 => 25,  95 => 32,  92 => 23,  86 => 21,  82 => 20,  80 => 25,  73 => 21,  64 => 19,  60 => 6,  57 => 13,  54 => 13,  51 => 12,  48 => 12,  45 => 11,  42 => 7,  39 => 8,  36 => 10,  33 => 4,  30 => 7,);
    }
}
