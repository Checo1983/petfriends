<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_19519286ff42fcedf2e6dc1533ad262fd83083509422f8a0dc91a8e21ab20981 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  226 => 84,  197 => 71,  194 => 70,  172 => 62,  153 => 69,  150 => 55,  181 => 65,  178 => 64,  148 => 69,  248 => 94,  228 => 97,  223 => 95,  218 => 93,  213 => 78,  191 => 77,  127 => 50,  192 => 86,  186 => 76,  110 => 46,  100 => 33,  174 => 74,  113 => 48,  34 => 26,  152 => 74,  134 => 54,  97 => 52,  129 => 64,  81 => 23,  77 => 29,  23 => 6,  146 => 61,  137 => 65,  126 => 63,  58 => 32,  53 => 12,  200 => 72,  190 => 43,  185 => 75,  180 => 28,  175 => 20,  170 => 77,  165 => 60,  160 => 8,  155 => 75,  118 => 49,  114 => 59,  84 => 24,  76 => 31,  65 => 35,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 105,  271 => 94,  261 => 88,  251 => 82,  239 => 102,  233 => 87,  225 => 74,  216 => 79,  212 => 70,  207 => 75,  198 => 63,  195 => 44,  188 => 76,  167 => 71,  104 => 42,  90 => 27,  70 => 19,  124 => 62,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 97,  278 => 106,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 22,  273 => 96,  269 => 94,  254 => 109,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 89,  204 => 78,  179 => 84,  159 => 73,  143 => 58,  135 => 46,  119 => 40,  102 => 41,  71 => 18,  67 => 24,  63 => 34,  59 => 14,  38 => 6,  94 => 51,  89 => 28,  85 => 24,  75 => 43,  68 => 36,  56 => 35,  87 => 34,  21 => 3,  26 => 12,  93 => 47,  88 => 24,  78 => 27,  46 => 13,  27 => 3,  44 => 26,  31 => 25,  28 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 79,  163 => 78,  158 => 67,  156 => 58,  151 => 70,  142 => 46,  138 => 56,  136 => 57,  121 => 50,  117 => 39,  105 => 34,  91 => 50,  62 => 19,  49 => 14,  24 => 18,  25 => 3,  19 => 1,  79 => 25,  72 => 21,  69 => 40,  47 => 11,  40 => 8,  37 => 6,  22 => 17,  246 => 93,  157 => 69,  145 => 46,  139 => 45,  131 => 61,  123 => 42,  120 => 57,  115 => 43,  111 => 47,  108 => 56,  101 => 32,  98 => 34,  96 => 37,  83 => 33,  74 => 39,  66 => 39,  55 => 16,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 6,  32 => 5,  29 => 24,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 71,  149 => 73,  147 => 54,  144 => 64,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 47,  116 => 39,  112 => 38,  109 => 40,  106 => 29,  103 => 34,  99 => 31,  95 => 31,  92 => 34,  86 => 45,  82 => 27,  80 => 32,  73 => 20,  64 => 23,  60 => 14,  57 => 13,  54 => 34,  51 => 33,  48 => 7,  45 => 10,  42 => 29,  39 => 12,  36 => 7,  33 => 4,  30 => 3,);
    }
}
