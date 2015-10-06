<?php

/* JMPCPetFriendsProtectorsBundle:Animals:carousel.html.twig */
class __TwigTemplate_48012c5008a9e3519214c15cfe33d356d2bbc61e75b1bd37f8d75a22230f5f3a extends Twig_Template
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
        echo "      
 ";
        // line 3
        echo " ";
        // line 4
        echo "
<ul class=\"carousel1\">
  ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["animals"]) ? $context["animals"] : $this->getContext($context, "animals"))) >= 3)) {
            // line 7
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["animals"]) ? $context["animals"] : $this->getContext($context, "animals")));
            foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
                // line 8
                echo "        <li class=\"grid_4\">
        <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/carousel_", 1 => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "fotografia")))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "nombre"), "html", null, true);
                echo " imagen no encontrada\" class=\"img_inner fleft\">
            <div class=\"extra_wrapper pad1\">
                    <p class=\"col2\"><a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_view", array("id" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "idanimal"), "slug" => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "nombre"), "html", null, true);
                echo "</a></p>
                        ";
                // line 12
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "tipo")), "html", null, true);
                echo "<br>
                        ";
                // line 13
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "raza")), "html", null, true);
                echo "<br>
                        ";
                // line 14
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "sexo")), "html", null, true);
                echo "
            </div>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        <li class=\"grid_4\">
                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carousel1_img2.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img_inner fleft\">
                <div class=\"extra_wrapper pad1\">
                        <p class=\"col2\"><a href=\"#\">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
                </div>
        </li>
        <li class=\"grid_4\">
                <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carousel1_img3.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img_inner fleft\">
                <div class=\"extra_wrapper pad1\">
                        <p class=\"col2\"><a href=\"#\">Tyeraesent quis hojo rcieget iam iverralji.</a></p>Eroaesent quis orci ediam viverralopr con jikjulo poiu retyulo hyk equat. Usce sagittis ki quam ihui hyhy opirp. 
                </div>
        </li>
        <li class=\"grid_4\">
                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carousel1_img4.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img_inner fleft\">
                <div class=\"extra_wrapper pad1\">
                        <p class=\"col2\"><a href=\"#\">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
                </div>
        </li>
        <li class=\"grid_4\">
                <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carousel1_img5.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img_inner fleft\">
                <div class=\"extra_wrapper pad1\">
                        <p class=\"col2\"><a href=\"#\">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
                </div>
        </li>
        <li class=\"grid_4\">
                <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carousel1_img6.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img_inner fleft\">
                <div class=\"extra_wrapper pad1\">
                        <p class=\"col2\"><a href=\"#\">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
                </div>
        </li>
    ";
        }
        // line 50
        echo "</ul> <!-- End carousel1 -->

";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Animals:carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  118 => 43,  114 => 41,  84 => 26,  76 => 28,  65 => 23,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  104 => 27,  90 => 22,  70 => 17,  124 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 34,  128 => 48,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 20,  68 => 14,  56 => 9,  87 => 29,  21 => 2,  26 => 6,  93 => 32,  88 => 34,  78 => 29,  46 => 7,  27 => 4,  44 => 10,  31 => 5,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 66,  151 => 41,  142 => 59,  138 => 54,  136 => 35,  121 => 41,  117 => 44,  105 => 39,  91 => 30,  62 => 15,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 18,  47 => 11,  40 => 7,  37 => 6,  22 => 3,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 50,  115 => 43,  111 => 44,  108 => 28,  101 => 32,  98 => 31,  96 => 36,  83 => 25,  74 => 18,  66 => 16,  55 => 13,  52 => 13,  50 => 10,  43 => 8,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 42,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 30,  112 => 29,  109 => 34,  106 => 36,  103 => 32,  99 => 26,  95 => 31,  92 => 21,  86 => 21,  82 => 20,  80 => 25,  73 => 21,  64 => 17,  60 => 6,  57 => 14,  54 => 13,  51 => 12,  48 => 10,  45 => 11,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
