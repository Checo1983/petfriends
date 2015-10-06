<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_07aa30da60eb962108df9cb1587b44dfa9f9438455bd1b1b6a3c2c85cedf466f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  226 => 84,  197 => 71,  194 => 70,  172 => 62,  153 => 69,  150 => 55,  181 => 65,  178 => 64,  148 => 69,  248 => 94,  228 => 97,  223 => 95,  218 => 93,  213 => 78,  191 => 77,  127 => 50,  192 => 86,  186 => 76,  110 => 46,  100 => 33,  174 => 74,  113 => 48,  34 => 26,  152 => 74,  134 => 54,  97 => 52,  129 => 64,  81 => 23,  77 => 29,  23 => 6,  146 => 61,  137 => 65,  126 => 63,  58 => 32,  53 => 12,  200 => 72,  190 => 43,  185 => 75,  180 => 28,  175 => 20,  170 => 77,  165 => 60,  160 => 8,  155 => 75,  118 => 49,  114 => 59,  84 => 24,  76 => 25,  65 => 35,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 105,  271 => 94,  261 => 88,  251 => 82,  239 => 102,  233 => 87,  225 => 74,  216 => 79,  212 => 70,  207 => 75,  198 => 63,  195 => 44,  188 => 76,  167 => 71,  104 => 42,  90 => 27,  70 => 19,  124 => 62,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 97,  278 => 106,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 17,  273 => 96,  269 => 94,  254 => 109,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 89,  204 => 78,  179 => 84,  159 => 73,  143 => 58,  135 => 46,  119 => 40,  102 => 41,  71 => 18,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 51,  89 => 28,  85 => 24,  75 => 43,  68 => 36,  56 => 35,  87 => 34,  21 => 3,  26 => 12,  93 => 47,  88 => 32,  78 => 27,  46 => 13,  27 => 3,  44 => 26,  31 => 25,  28 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 79,  163 => 78,  158 => 67,  156 => 58,  151 => 70,  142 => 46,  138 => 56,  136 => 57,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 19,  49 => 14,  24 => 18,  25 => 3,  19 => 1,  79 => 25,  72 => 21,  69 => 40,  47 => 11,  40 => 8,  37 => 6,  22 => 17,  246 => 93,  157 => 69,  145 => 46,  139 => 45,  131 => 61,  123 => 42,  120 => 57,  115 => 43,  111 => 47,  108 => 56,  101 => 32,  98 => 34,  96 => 37,  83 => 33,  74 => 39,  66 => 39,  55 => 13,  52 => 12,  50 => 29,  43 => 12,  41 => 25,  35 => 6,  32 => 5,  29 => 24,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 71,  149 => 73,  147 => 54,  144 => 64,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 47,  116 => 39,  112 => 38,  109 => 40,  106 => 29,  103 => 34,  99 => 31,  95 => 31,  92 => 34,  86 => 45,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 14,  57 => 13,  54 => 34,  51 => 33,  48 => 7,  45 => 9,  42 => 29,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
