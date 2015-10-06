<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c7459ab4c9455ec5b189176c78c688e277d2c4f3350fcdcc9176c209546a9d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('login', $context, $blocks);
        // line 7
        echo "
";
    }

    // line 4
    public function block_login($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  24 => 4,  21 => 3,  68 => 25,  55 => 19,  45 => 15,  34 => 5,  31 => 4,  28 => 8,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  130 => 49,  118 => 43,  114 => 41,  93 => 35,  88 => 34,  84 => 33,  76 => 28,  69 => 24,  65 => 23,  59 => 20,  49 => 16,  47 => 11,  39 => 12,  35 => 7,  340 => 123,  337 => 122,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  314 => 113,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  283 => 97,  279 => 96,  275 => 95,  271 => 94,  264 => 89,  261 => 88,  251 => 82,  247 => 81,  243 => 80,  239 => 79,  233 => 76,  229 => 75,  225 => 74,  221 => 73,  216 => 71,  212 => 70,  207 => 67,  204 => 66,  198 => 63,  195 => 44,  188 => 58,  182 => 54,  171 => 48,  167 => 47,  163 => 46,  159 => 44,  157 => 43,  144 => 37,  140 => 36,  136 => 35,  132 => 34,  128 => 48,  124 => 32,  120 => 44,  112 => 29,  108 => 28,  104 => 27,  96 => 36,  90 => 22,  86 => 21,  82 => 20,  78 => 29,  74 => 27,  70 => 17,  66 => 24,  62 => 15,  57 => 14,  54 => 13,  40 => 7,  37 => 6,  154 => 42,  151 => 41,  142 => 46,  137 => 43,  131 => 42,  125 => 39,  121 => 38,  116 => 30,  111 => 40,  105 => 39,  99 => 26,  91 => 27,  85 => 24,  79 => 21,  71 => 18,  64 => 16,  61 => 22,  56 => 14,  53 => 13,  48 => 10,  44 => 10,  41 => 9,  38 => 9,  29 => 3,);
    }
}
