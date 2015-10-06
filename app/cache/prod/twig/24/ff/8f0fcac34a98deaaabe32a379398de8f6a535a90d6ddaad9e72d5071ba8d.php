<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig */
class __TwigTemplate_24ff8f0fcac34a98deaaabe32a379398de8f6a535a90d6ddaad9e72d5071ba8d extends Twig_Template
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
        // line 19
        echo "
";
        // line 20
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 21
            echo "<div class=\"pagination\">
    <ul>

    ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "        <li>
            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 29
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (((isset($context["startPage"]) ? $context["startPage"] : null) > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if (((isset($context["startPage"]) ? $context["startPage"] : null) == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (((isset($context["startPage"]) ? $context["startPage"] : null) != 2)) {
                    // line 43
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : null) != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["page"]) ? $context["page"] : null)))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            <li class=\"active\">
                <span>";
                    // line 56
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 59
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
    ";
            // line 62
            if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > (isset($context["endPage"]) ? $context["endPage"] : null))) {
                // line 63
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 1))) {
                    // line 64
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 2))) {
                        // line 65
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 69
                        echo "                <li>
                    <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["pageCount"]) ? $context["pageCount"] : null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : null), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 84
                echo "        <li class=\"disabled\">
            <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 88
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 108,  228 => 97,  223 => 95,  218 => 93,  213 => 91,  191 => 78,  127 => 50,  192 => 86,  186 => 76,  110 => 46,  100 => 33,  174 => 81,  113 => 45,  34 => 26,  152 => 74,  134 => 52,  97 => 52,  83 => 22,  129 => 64,  81 => 47,  77 => 29,  23 => 6,  146 => 61,  137 => 43,  126 => 63,  58 => 15,  53 => 17,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 72,  165 => 72,  160 => 8,  155 => 75,  118 => 40,  114 => 59,  84 => 48,  76 => 25,  65 => 20,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 102,  233 => 99,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 88,  167 => 73,  157 => 69,  120 => 38,  104 => 34,  96 => 36,  90 => 29,  74 => 27,  70 => 18,  37 => 6,  124 => 62,  52 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 65,  128 => 34,  111 => 30,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 109,  246 => 90,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 89,  204 => 66,  179 => 84,  159 => 73,  143 => 58,  135 => 46,  131 => 55,  119 => 42,  108 => 56,  102 => 34,  71 => 18,  67 => 23,  63 => 22,  59 => 36,  47 => 11,  38 => 10,  94 => 51,  89 => 28,  85 => 24,  79 => 25,  75 => 43,  68 => 25,  56 => 35,  50 => 13,  29 => 24,  87 => 49,  72 => 21,  55 => 17,  21 => 3,  26 => 12,  98 => 34,  93 => 32,  88 => 24,  78 => 27,  46 => 13,  27 => 5,  40 => 8,  44 => 11,  35 => 8,  31 => 25,  43 => 12,  41 => 11,  28 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 67,  151 => 63,  142 => 46,  138 => 69,  136 => 57,  123 => 42,  121 => 61,  117 => 39,  115 => 43,  105 => 55,  101 => 32,  91 => 50,  69 => 40,  66 => 39,  62 => 19,  49 => 16,  24 => 21,  32 => 7,  25 => 3,  22 => 20,  19 => 19,  209 => 82,  203 => 87,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 75,  173 => 65,  168 => 80,  164 => 75,  162 => 70,  154 => 50,  149 => 73,  147 => 58,  144 => 64,  141 => 70,  133 => 55,  130 => 51,  125 => 39,  122 => 47,  116 => 36,  112 => 38,  109 => 40,  106 => 29,  103 => 34,  99 => 34,  95 => 31,  92 => 34,  86 => 27,  82 => 27,  80 => 27,  73 => 23,  64 => 38,  60 => 14,  57 => 13,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 12,  36 => 7,  33 => 5,  30 => 2,);
    }
}
