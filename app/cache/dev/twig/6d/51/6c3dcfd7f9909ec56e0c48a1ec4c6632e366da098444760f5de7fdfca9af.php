<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_6d516c3dcfd7f9909ec56e0c48a1ec4c6632e366da098444760f5de7fdfca9af extends Twig_Template
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
        // line 1
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
        </a>
    </div>
    <style>
        ";
            // line 22
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 286,  20 => 1,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  517 => 404,  202 => 94,  389 => 160,  386 => 159,  378 => 157,  367 => 339,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  331 => 140,  321 => 135,  296 => 121,  290 => 119,  288 => 118,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  222 => 83,  184 => 63,  403 => 136,  391 => 133,  382 => 131,  377 => 129,  371 => 156,  359 => 123,  356 => 122,  353 => 328,  350 => 327,  347 => 119,  333 => 115,  324 => 112,  313 => 110,  308 => 287,  281 => 114,  274 => 110,  237 => 91,  234 => 90,  232 => 88,  210 => 77,  161 => 58,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  293 => 120,  280 => 194,  276 => 111,  249 => 92,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 135,  394 => 134,  380 => 158,  373 => 156,  361 => 152,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  270 => 102,  267 => 101,  262 => 93,  256 => 96,  226 => 84,  197 => 69,  194 => 68,  172 => 57,  153 => 77,  150 => 55,  181 => 65,  178 => 59,  148 => 69,  248 => 97,  228 => 97,  223 => 95,  218 => 93,  213 => 78,  191 => 67,  127 => 35,  192 => 86,  186 => 72,  110 => 46,  100 => 33,  174 => 74,  113 => 48,  34 => 5,  152 => 46,  134 => 39,  97 => 52,  129 => 64,  81 => 23,  77 => 20,  23 => 6,  146 => 61,  137 => 65,  126 => 63,  58 => 18,  53 => 15,  200 => 72,  190 => 43,  185 => 75,  180 => 70,  175 => 58,  170 => 84,  165 => 83,  160 => 8,  155 => 47,  118 => 49,  114 => 36,  84 => 27,  76 => 28,  65 => 11,  340 => 145,  334 => 141,  328 => 139,  326 => 138,  317 => 114,  310 => 110,  307 => 128,  302 => 125,  291 => 99,  287 => 98,  279 => 96,  275 => 105,  271 => 190,  261 => 88,  251 => 182,  239 => 102,  233 => 87,  225 => 74,  216 => 79,  212 => 70,  207 => 76,  198 => 63,  195 => 44,  188 => 90,  167 => 71,  104 => 31,  90 => 37,  70 => 24,  124 => 62,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 329,  341 => 117,  337 => 122,  322 => 101,  314 => 113,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 89,  258 => 187,  252 => 80,  247 => 81,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 60,  140 => 66,  132 => 65,  128 => 42,  107 => 52,  61 => 23,  273 => 96,  269 => 107,  254 => 109,  243 => 80,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 84,  159 => 57,  143 => 58,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 35,  87 => 32,  21 => 3,  26 => 6,  93 => 38,  88 => 24,  78 => 18,  46 => 12,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 70,  142 => 46,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 26,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 69,  145 => 74,  139 => 45,  131 => 61,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 39,  66 => 39,  55 => 15,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 9,  32 => 7,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 71,  149 => 73,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 47,  116 => 57,  112 => 38,  109 => 52,  106 => 51,  103 => 34,  99 => 23,  95 => 39,  92 => 28,  86 => 45,  82 => 19,  80 => 29,  73 => 33,  64 => 24,  60 => 14,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 8,  33 => 9,  30 => 5,);
    }
}
