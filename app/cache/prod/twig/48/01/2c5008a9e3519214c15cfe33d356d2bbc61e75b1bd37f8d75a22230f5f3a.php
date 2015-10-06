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
        return array (  102 => 38,  72 => 19,  51 => 12,  75 => 20,  60 => 14,  25 => 8,  103 => 34,  100 => 25,  73 => 23,  52 => 16,  43 => 9,  32 => 7,  27 => 5,  22 => 3,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 409,  278 => 408,  276 => 393,  273 => 392,  268 => 373,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  222 => 297,  220 => 290,  217 => 289,  215 => 280,  210 => 270,  202 => 266,  199 => 265,  197 => 249,  194 => 248,  191 => 246,  189 => 240,  186 => 239,  184 => 233,  181 => 232,  179 => 224,  176 => 223,  174 => 217,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  156 => 195,  149 => 182,  146 => 181,  141 => 175,  139 => 169,  134 => 161,  129 => 148,  126 => 147,  119 => 117,  109 => 105,  106 => 29,  101 => 89,  94 => 30,  89 => 28,  81 => 40,  83 => 22,  58 => 15,  50 => 13,  46 => 10,  42 => 11,  30 => 7,  23 => 6,  19 => 1,  26 => 7,  24 => 4,  21 => 3,  68 => 25,  55 => 13,  45 => 11,  34 => 9,  31 => 7,  28 => 6,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  130 => 49,  118 => 43,  114 => 39,  93 => 32,  88 => 24,  84 => 26,  76 => 31,  69 => 18,  65 => 20,  59 => 14,  49 => 16,  47 => 11,  39 => 12,  35 => 8,  340 => 123,  337 => 22,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  314 => 113,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  283 => 97,  279 => 96,  275 => 95,  271 => 374,  264 => 89,  261 => 88,  251 => 82,  247 => 81,  243 => 327,  239 => 79,  233 => 304,  229 => 75,  225 => 298,  221 => 73,  216 => 71,  212 => 279,  207 => 269,  204 => 267,  198 => 63,  195 => 44,  188 => 58,  182 => 54,  171 => 216,  167 => 47,  163 => 46,  159 => 196,  157 => 43,  144 => 176,  140 => 36,  136 => 168,  132 => 34,  128 => 34,  124 => 132,  120 => 50,  112 => 29,  108 => 36,  104 => 90,  96 => 67,  90 => 22,  86 => 27,  82 => 20,  78 => 29,  74 => 20,  70 => 16,  66 => 15,  62 => 19,  57 => 14,  54 => 14,  40 => 7,  37 => 6,  154 => 189,  151 => 188,  142 => 46,  137 => 43,  131 => 160,  125 => 39,  121 => 32,  116 => 116,  111 => 44,  105 => 35,  99 => 68,  91 => 29,  85 => 24,  79 => 25,  71 => 19,  64 => 3,  61 => 2,  56 => 13,  53 => 13,  48 => 10,  44 => 10,  41 => 11,  38 => 9,  29 => 6,);
    }
}
