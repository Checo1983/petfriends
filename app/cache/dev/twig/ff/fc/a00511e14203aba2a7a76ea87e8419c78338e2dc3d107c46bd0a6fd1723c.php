<?php

/* JMPCPetFriendsProtectorsBundle:Page:contact.html.twig */
class __TwigTemplate_fffca00511e14203aba2a7a76ea87e8419c78338e2dc3d107c46bd0a6fd1723c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
            'sidebar' => array($this, 'block_sidebar'),
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
        echo "Contacto";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " - Administración";
        }
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"content grid_12 prefix_1\">
        <h2 class=\"ic4\">Contacto</h2>
       
        <div id=\"form\">
            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_contact");
        echo "\" method=\"post\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <p>
                  <button id=\"form_Enviar\" type=\"submit\">Enviar</button>
                </p>
            </form>
        </div>
    </div>
    
";
    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 81,  113 => 45,  34 => 10,  152 => 52,  134 => 53,  97 => 34,  129 => 43,  81 => 25,  77 => 29,  23 => 7,  146 => 65,  137 => 45,  126 => 43,  58 => 10,  53 => 17,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 72,  118 => 40,  114 => 41,  84 => 29,  76 => 27,  65 => 25,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  104 => 27,  90 => 32,  70 => 24,  124 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 55,  128 => 50,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 73,  143 => 58,  135 => 47,  119 => 42,  102 => 34,  71 => 18,  67 => 19,  63 => 20,  59 => 20,  38 => 9,  94 => 33,  89 => 20,  85 => 28,  75 => 22,  68 => 14,  56 => 14,  87 => 28,  21 => 2,  26 => 8,  93 => 33,  88 => 34,  78 => 30,  46 => 7,  27 => 7,  44 => 13,  31 => 9,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 67,  151 => 41,  142 => 59,  138 => 55,  136 => 46,  121 => 49,  117 => 47,  105 => 41,  91 => 27,  62 => 21,  49 => 16,  24 => 6,  25 => 8,  19 => 1,  79 => 21,  72 => 22,  69 => 23,  47 => 14,  40 => 10,  37 => 6,  22 => 5,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 52,  123 => 43,  120 => 38,  115 => 43,  111 => 44,  108 => 37,  101 => 32,  98 => 34,  96 => 36,  83 => 31,  74 => 13,  66 => 21,  55 => 17,  52 => 15,  50 => 13,  43 => 12,  41 => 10,  35 => 10,  32 => 8,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 77,  164 => 75,  162 => 57,  154 => 66,  149 => 51,  147 => 58,  144 => 64,  141 => 48,  133 => 55,  130 => 51,  125 => 51,  122 => 47,  116 => 39,  112 => 38,  109 => 40,  106 => 36,  103 => 35,  99 => 38,  95 => 32,  92 => 34,  86 => 31,  82 => 27,  80 => 28,  73 => 21,  64 => 22,  60 => 19,  57 => 17,  54 => 17,  51 => 24,  48 => 14,  45 => 12,  42 => 10,  39 => 9,  36 => 10,  33 => 15,  30 => 7,);
    }
}
