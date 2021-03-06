<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a4d48ea1bcd46e628065e1f1a858655e398af7c487b835b0766cad480e92b7d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  378 => 157,  367 => 155,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  331 => 140,  321 => 135,  296 => 121,  290 => 119,  288 => 118,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  222 => 83,  184 => 63,  403 => 136,  391 => 133,  382 => 131,  377 => 129,  371 => 156,  359 => 123,  356 => 122,  353 => 149,  350 => 120,  347 => 119,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  281 => 114,  274 => 110,  237 => 91,  234 => 90,  232 => 88,  210 => 77,  161 => 58,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  788 => 518,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 479,  698 => 477,  696 => 476,  692 => 474,  686 => 472,  682 => 470,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  293 => 120,  280 => 194,  276 => 111,  249 => 92,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 135,  394 => 134,  380 => 158,  373 => 156,  361 => 152,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  270 => 102,  267 => 101,  262 => 93,  256 => 96,  226 => 84,  197 => 69,  194 => 68,  172 => 57,  153 => 69,  150 => 55,  181 => 65,  178 => 59,  148 => 69,  248 => 97,  228 => 97,  223 => 95,  218 => 93,  213 => 78,  191 => 67,  127 => 35,  192 => 86,  186 => 72,  110 => 46,  100 => 33,  174 => 74,  113 => 48,  34 => 5,  152 => 46,  134 => 39,  97 => 52,  129 => 64,  81 => 23,  77 => 20,  23 => 6,  146 => 61,  137 => 65,  126 => 63,  58 => 14,  53 => 12,  200 => 72,  190 => 43,  185 => 75,  180 => 70,  175 => 58,  170 => 56,  165 => 60,  160 => 8,  155 => 47,  118 => 49,  114 => 36,  84 => 24,  76 => 17,  65 => 35,  340 => 145,  334 => 141,  328 => 139,  326 => 138,  317 => 114,  310 => 110,  307 => 128,  302 => 125,  291 => 99,  287 => 98,  279 => 96,  275 => 105,  271 => 190,  261 => 88,  251 => 182,  239 => 102,  233 => 87,  225 => 74,  216 => 79,  212 => 70,  207 => 76,  198 => 63,  195 => 44,  188 => 76,  167 => 71,  104 => 31,  90 => 20,  70 => 15,  124 => 62,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 122,  322 => 101,  314 => 113,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 89,  258 => 187,  252 => 80,  247 => 81,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 60,  140 => 66,  132 => 65,  128 => 42,  107 => 52,  61 => 12,  273 => 96,  269 => 107,  254 => 109,  243 => 80,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 84,  159 => 57,  143 => 58,  135 => 46,  119 => 40,  102 => 24,  71 => 18,  67 => 14,  63 => 18,  59 => 16,  38 => 7,  94 => 21,  89 => 28,  85 => 23,  75 => 18,  68 => 36,  56 => 35,  87 => 34,  21 => 3,  26 => 12,  93 => 27,  88 => 24,  78 => 19,  46 => 13,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 74,  196 => 90,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 67,  156 => 58,  151 => 70,  142 => 46,  138 => 47,  136 => 57,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 12,  49 => 14,  24 => 18,  25 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 8,  40 => 8,  37 => 6,  22 => 17,  246 => 96,  157 => 69,  145 => 46,  139 => 45,  131 => 61,  123 => 42,  120 => 31,  115 => 43,  111 => 47,  108 => 33,  101 => 30,  98 => 34,  96 => 37,  83 => 33,  74 => 39,  66 => 39,  55 => 9,  52 => 12,  50 => 29,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 24,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 66,  187 => 84,  182 => 85,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 71,  149 => 73,  147 => 43,  144 => 42,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 47,  116 => 39,  112 => 38,  109 => 27,  106 => 29,  103 => 34,  99 => 23,  95 => 27,  92 => 34,  86 => 45,  82 => 19,  80 => 27,  73 => 16,  64 => 13,  60 => 14,  57 => 13,  54 => 34,  51 => 13,  48 => 7,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
