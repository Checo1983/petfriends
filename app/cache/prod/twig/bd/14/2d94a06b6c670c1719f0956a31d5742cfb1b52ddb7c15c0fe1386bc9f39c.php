<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_bd142d94a06b6c670c1719f0956a31d5742cfb1b52ddb7c15c0fe1386bc9f39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'sidebar' => array($this, 'block_sidebar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_meta($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
\t<meta http-equiv=\"Refresh\" content=\"5;url=http:../\">
";
    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "\t    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
\t    ";
        // line 16
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session")))) {
            // line 17
            echo "\t        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 18
            echo "\t        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : null)))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 19
            echo "    \t";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 108,  228 => 97,  223 => 95,  218 => 93,  213 => 91,  191 => 78,  127 => 50,  192 => 86,  186 => 76,  110 => 46,  100 => 25,  174 => 81,  113 => 45,  34 => 5,  152 => 52,  134 => 52,  97 => 34,  83 => 31,  129 => 43,  81 => 28,  77 => 29,  23 => 4,  146 => 61,  137 => 43,  126 => 53,  58 => 16,  53 => 17,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 72,  165 => 72,  160 => 8,  155 => 72,  118 => 40,  114 => 47,  84 => 28,  76 => 25,  65 => 16,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 102,  233 => 99,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 73,  157 => 69,  120 => 38,  104 => 34,  96 => 36,  90 => 29,  74 => 21,  70 => 20,  37 => 6,  124 => 41,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 45,  128 => 34,  111 => 30,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 109,  246 => 90,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 89,  204 => 66,  179 => 74,  159 => 73,  143 => 58,  135 => 46,  131 => 55,  119 => 42,  108 => 36,  102 => 34,  71 => 18,  67 => 23,  63 => 22,  59 => 18,  47 => 11,  38 => 6,  94 => 33,  89 => 33,  85 => 24,  79 => 21,  75 => 18,  68 => 19,  56 => 17,  50 => 13,  29 => 7,  87 => 28,  72 => 21,  55 => 17,  21 => 3,  26 => 7,  98 => 34,  93 => 32,  88 => 34,  78 => 27,  46 => 14,  27 => 4,  40 => 8,  44 => 11,  35 => 7,  31 => 7,  43 => 9,  41 => 12,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 67,  151 => 63,  142 => 46,  138 => 55,  136 => 57,  123 => 42,  121 => 51,  117 => 39,  115 => 43,  105 => 40,  101 => 32,  91 => 32,  69 => 23,  66 => 23,  62 => 15,  49 => 15,  24 => 4,  32 => 6,  25 => 8,  22 => 3,  19 => 2,  209 => 82,  203 => 87,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 75,  176 => 75,  173 => 65,  168 => 77,  164 => 75,  162 => 70,  154 => 50,  149 => 64,  147 => 58,  144 => 64,  141 => 59,  133 => 55,  130 => 51,  125 => 39,  122 => 47,  116 => 36,  112 => 38,  109 => 40,  106 => 29,  103 => 42,  99 => 34,  95 => 31,  92 => 34,  86 => 31,  82 => 27,  80 => 27,  73 => 21,  64 => 19,  60 => 14,  57 => 13,  54 => 16,  51 => 24,  48 => 12,  45 => 12,  42 => 12,  39 => 9,  36 => 10,  33 => 8,  30 => 7,);
    }
}
