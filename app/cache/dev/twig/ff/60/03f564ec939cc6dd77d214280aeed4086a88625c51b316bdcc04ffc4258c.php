<?php

/* JMPCPetFriendsProtectorsBundle:Email:notification.html.twig */
class __TwigTemplate_ff6003f564ec939cc6dd77d214280aeed4086a88625c51b316bdcc04ffc4258c extends Twig_Template
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
<!DOCTYPE HTML>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Nuevo mensaje</title>
    </head>
    <body>
        <table>
            <tbody>
            <tr>
                <td>
                    <p>Nuevo mensaje recibido:</p>
                </td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li><strong>Asunto</strong>:";
        // line 21
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "asunto")), "html", null, true);
        echo "</li>
                        <li><strong>Nombre</strong>:";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nombre"), "html", null, true);
        echo "</li>
                        <li><strong>Email</strong>: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "html", null, true);
        echo "</li>
                        <li><strong>Message</strong>: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mensaje"), "html", null, true);
        echo "</li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Email:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  97 => 34,  129 => 44,  81 => 15,  77 => 30,  23 => 5,  146 => 48,  137 => 45,  126 => 43,  58 => 10,  53 => 13,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  118 => 43,  114 => 41,  84 => 16,  76 => 20,  65 => 23,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  104 => 27,  90 => 30,  70 => 17,  124 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 42,  128 => 50,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 58,  135 => 53,  119 => 42,  102 => 32,  71 => 18,  67 => 18,  63 => 15,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 28,  75 => 29,  68 => 14,  56 => 14,  87 => 30,  21 => 2,  26 => 8,  93 => 33,  88 => 34,  78 => 25,  46 => 7,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 67,  151 => 41,  142 => 59,  138 => 55,  136 => 35,  121 => 41,  117 => 40,  105 => 35,  91 => 27,  62 => 15,  49 => 8,  24 => 6,  25 => 3,  19 => 3,  79 => 21,  72 => 22,  69 => 24,  47 => 23,  40 => 10,  37 => 6,  22 => 5,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 35,  108 => 28,  101 => 32,  98 => 31,  96 => 36,  83 => 32,  74 => 13,  66 => 21,  55 => 18,  52 => 15,  50 => 13,  43 => 22,  41 => 6,  35 => 9,  32 => 8,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 73,  162 => 57,  154 => 66,  149 => 49,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 51,  125 => 44,  122 => 47,  116 => 44,  112 => 37,  109 => 40,  106 => 33,  103 => 37,  99 => 25,  95 => 32,  92 => 23,  86 => 21,  82 => 27,  80 => 31,  73 => 21,  64 => 19,  60 => 6,  57 => 13,  54 => 13,  51 => 24,  48 => 12,  45 => 11,  42 => 7,  39 => 21,  36 => 9,  33 => 15,  30 => 7,);
    }
}
