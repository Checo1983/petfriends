<?php

/* JMPCPetFriendsProtectorsBundle:Comments:create.html.twig */
class __TwigTemplate_c8268f3d7e2feab8e4ec4fa33b150b96f2f1e42f13a874d7344135df4ae28483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
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
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Nuevo comentario para el articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "contenido"), "titulo"), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle:Comments:form.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : null))));
        echo " 
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Comments:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  97 => 34,  83 => 32,  129 => 44,  81 => 27,  77 => 30,  23 => 6,  146 => 48,  137 => 45,  126 => 43,  58 => 16,  53 => 13,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  118 => 43,  114 => 41,  84 => 26,  76 => 20,  65 => 23,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  157 => 43,  120 => 38,  104 => 27,  96 => 36,  90 => 30,  74 => 18,  70 => 17,  37 => 6,  124 => 32,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 42,  128 => 50,  111 => 35,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 58,  135 => 53,  131 => 52,  119 => 42,  108 => 28,  102 => 32,  71 => 18,  67 => 18,  63 => 15,  59 => 14,  47 => 12,  38 => 9,  94 => 28,  89 => 20,  85 => 28,  79 => 21,  75 => 29,  68 => 14,  56 => 14,  50 => 13,  29 => 7,  87 => 30,  72 => 22,  55 => 18,  21 => 2,  26 => 8,  98 => 31,  93 => 33,  88 => 34,  78 => 25,  46 => 7,  27 => 7,  40 => 10,  44 => 11,  35 => 9,  31 => 8,  43 => 11,  41 => 10,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 67,  151 => 41,  142 => 59,  138 => 55,  136 => 35,  123 => 47,  121 => 41,  117 => 40,  115 => 43,  105 => 35,  101 => 32,  91 => 27,  69 => 24,  66 => 21,  62 => 15,  49 => 15,  24 => 6,  32 => 8,  25 => 3,  22 => 3,  19 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 73,  162 => 59,  154 => 66,  149 => 49,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 51,  125 => 44,  122 => 47,  116 => 44,  112 => 37,  109 => 40,  106 => 33,  103 => 37,  99 => 25,  95 => 32,  92 => 23,  86 => 21,  82 => 27,  80 => 31,  73 => 21,  64 => 19,  60 => 13,  57 => 13,  54 => 13,  51 => 12,  48 => 12,  45 => 11,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 7,);
    }
}
