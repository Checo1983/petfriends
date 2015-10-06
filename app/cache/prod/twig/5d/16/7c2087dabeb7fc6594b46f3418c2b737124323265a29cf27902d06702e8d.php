<?php

/* JMPCPetFriendsProtectorsBundle:Animals:new.html.twig */
class __TwigTemplate_5d167c2087dabeb7fc6594b46f3418c2b737124323265a29cf27902d06702e8d extends Twig_Template
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
        echo "Administración Nuevo amigo";
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"grid_8 prefix_1\">
    <h2>Nuevo animal</h2><br>
        ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
            <div id=\"form\">
                ";
            // line 15
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
            echo "
            </div>
            <div id=\"preview_img\" title=\"Vista previa\" style=\"display:none\">
                <img id=\"img_preview\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
            echo "\" />
            </div>
        ";
        } else {
            // line 20
            echo " 
            <div class=\"not_found\"></div>
        ";
        }
        // line 23
        echo "        <div class=\"button_back\">
            <a class=\"btn02\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
        echo "\">Volver</a>
        </div>
</div>
";
    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("JMPCPetFriendsProtectorsBundle:Animals:lateral"), array());
        // line 32
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Animals:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  129 => 44,  81 => 27,  77 => 30,  23 => 6,  146 => 48,  137 => 45,  126 => 43,  58 => 16,  53 => 13,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  118 => 43,  114 => 41,  84 => 26,  76 => 20,  65 => 23,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  157 => 43,  120 => 38,  104 => 27,  96 => 36,  90 => 30,  74 => 18,  70 => 17,  37 => 6,  124 => 32,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 42,  128 => 48,  111 => 35,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 28,  102 => 32,  71 => 18,  67 => 18,  63 => 15,  59 => 14,  47 => 10,  38 => 9,  94 => 28,  89 => 20,  85 => 28,  79 => 21,  75 => 29,  68 => 14,  56 => 14,  50 => 13,  29 => 7,  87 => 29,  72 => 28,  55 => 18,  21 => 2,  26 => 8,  98 => 31,  93 => 32,  88 => 34,  78 => 29,  46 => 7,  27 => 7,  40 => 10,  44 => 13,  35 => 9,  31 => 5,  43 => 11,  41 => 10,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 66,  151 => 41,  142 => 59,  138 => 54,  136 => 35,  123 => 47,  121 => 41,  117 => 40,  115 => 43,  105 => 35,  101 => 32,  91 => 27,  69 => 24,  66 => 23,  62 => 15,  49 => 15,  24 => 6,  32 => 8,  25 => 3,  22 => 3,  19 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 42,  149 => 49,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 37,  112 => 37,  109 => 34,  106 => 33,  103 => 32,  99 => 25,  95 => 32,  92 => 23,  86 => 21,  82 => 20,  80 => 31,  73 => 21,  64 => 19,  60 => 13,  57 => 13,  54 => 13,  51 => 12,  48 => 12,  45 => 11,  42 => 7,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
