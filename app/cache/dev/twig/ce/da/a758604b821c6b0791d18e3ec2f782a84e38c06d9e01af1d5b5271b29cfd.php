<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cedaa758604b821c6b0791d18e3ec2f782a84e38c06d9e01af1d5b5271b29cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 108,  228 => 97,  223 => 95,  218 => 93,  213 => 91,  191 => 78,  127 => 50,  192 => 86,  186 => 76,  110 => 46,  100 => 25,  174 => 81,  113 => 45,  34 => 7,  152 => 52,  134 => 52,  97 => 34,  129 => 43,  81 => 28,  77 => 29,  23 => 6,  146 => 61,  137 => 43,  126 => 53,  58 => 15,  53 => 17,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 72,  165 => 72,  160 => 8,  155 => 72,  118 => 40,  114 => 47,  84 => 28,  76 => 25,  65 => 16,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 102,  233 => 99,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 73,  104 => 34,  90 => 29,  70 => 18,  124 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 45,  128 => 34,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 109,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 89,  204 => 66,  179 => 74,  159 => 73,  143 => 58,  135 => 46,  119 => 42,  102 => 34,  71 => 18,  67 => 23,  63 => 22,  59 => 18,  38 => 10,  94 => 33,  89 => 33,  85 => 24,  75 => 18,  68 => 19,  56 => 17,  87 => 28,  21 => 3,  26 => 12,  93 => 32,  88 => 24,  78 => 27,  46 => 12,  27 => 5,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 67,  151 => 63,  142 => 46,  138 => 55,  136 => 57,  121 => 51,  117 => 39,  105 => 40,  91 => 32,  62 => 16,  49 => 15,  24 => 7,  25 => 5,  19 => 2,  79 => 21,  72 => 21,  69 => 23,  47 => 11,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 69,  145 => 46,  139 => 45,  131 => 55,  123 => 42,  120 => 38,  115 => 43,  111 => 30,  108 => 36,  101 => 32,  98 => 34,  96 => 36,  83 => 22,  74 => 19,  66 => 17,  55 => 17,  52 => 12,  50 => 13,  43 => 12,  41 => 12,  35 => 8,  32 => 6,  29 => 6,  209 => 82,  203 => 87,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 75,  176 => 75,  173 => 65,  168 => 77,  164 => 75,  162 => 70,  154 => 50,  149 => 64,  147 => 58,  144 => 64,  141 => 59,  133 => 55,  130 => 51,  125 => 39,  122 => 47,  116 => 36,  112 => 38,  109 => 40,  106 => 29,  103 => 42,  99 => 34,  95 => 31,  92 => 34,  86 => 31,  82 => 27,  80 => 27,  73 => 21,  64 => 19,  60 => 14,  57 => 13,  54 => 14,  51 => 15,  48 => 12,  45 => 12,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
