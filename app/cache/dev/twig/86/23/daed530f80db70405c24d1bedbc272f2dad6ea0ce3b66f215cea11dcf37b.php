<?php

/* ::base.html.twig */
class __TwigTemplate_8623daed530f80db70405c24d1bedbc272f2dad6ea0ce3b66f215cea11dcf37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'login' => array($this, 'block_login'),
            'menu_block' => array($this, 'block_menu_block'),
            'top_block' => array($this, 'block_top_block'),
            'section' => array($this, 'block_section'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <title>PetsFriends ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "   
    ";
        // line 11
        $this->displayBlock('javascript', $context, $blocks);
        // line 12
        echo "    </head>
    <body class=\"page1\">
        <div class=\"wrapper\">
<!--============================== header & gallery =================================-->
       
        <header>
            <div class=\"container_12\">
                <div class=\"grid_12 prefix_1 suffix_1\">
                ";
        // line 20
        $this->displayBlock('login', $context, $blocks);
        // line 21
        echo "                    <h1>
                        <div class=\"box_logo\">
                            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_homepage");
        echo "\">    
                                <img class=\"logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Pet Friends\">
                            </a>
                        </div>
                    </h1>
                    ";
        // line 28
        $this->displayBlock('menu_block', $context, $blocks);
        // line 29
        echo "                    <div class=\"clear\"></div>
                </div><!-- End grid_12 prefix_1 suffix_1 -->
            </div><!-- End container_12 -->
        </header>
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 34
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                echo "                <div class=\"flash-notice\">
                    ";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        $this->displayBlock('top_block', $context, $blocks);
        // line 41
        echo "        <div class=\"page1_block\">
            <div class=\"container_12 prefix_2\">
            ";
        // line 43
        $this->displayBlock('section', $context, $blocks);
        // line 44
        echo "            ";
        $this->displayBlock('sidebar', $context, $blocks);
        echo " 
            </div><!-- End container_12 prefix_2 --> 
        </div><!-- End page1_block --> 
<!--========================== content ================================-->
    ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "        </div><!-- End wrapper -->
        <div id=\"bottom_block\">
            <canvas id='canvas'></canvas> 
        </div><!-- End bottom_block -->
<!--============================== footer =================================-->

        <footer>    
          <div class=\"container_12\">
            <div class=\"grid_12\">
                <div class=\"socials\">
                    <a href=\"#\"></a>
                    <a href=\"#\"></a>
                    <a href=\"#\"></a>
                    <a href=\"#\"></a>
                </div>
                <span class=\"text_footer\">PetsFriends &copy; 2014</span>
            </div>  
          </div>
        </footer>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 20
    public function block_login($context, array $blocks = array())
    {
    }

    // line 28
    public function block_menu_block($context, array $blocks = array())
    {
    }

    // line 40
    public function block_top_block($context, array $blocks = array())
    {
    }

    // line 43
    public function block_section($context, array $blocks = array())
    {
    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  118 => 43,  114 => 41,  84 => 33,  76 => 28,  65 => 23,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 47,  104 => 27,  90 => 22,  70 => 17,  124 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 34,  128 => 48,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 20,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 29,  21 => 2,  26 => 6,  93 => 35,  88 => 34,  78 => 29,  46 => 7,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 66,  151 => 41,  142 => 59,  138 => 54,  136 => 35,  121 => 41,  117 => 44,  105 => 39,  91 => 30,  62 => 15,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 24,  47 => 11,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 44,  115 => 43,  111 => 40,  108 => 28,  101 => 32,  98 => 31,  96 => 36,  83 => 25,  74 => 18,  66 => 16,  55 => 15,  52 => 13,  50 => 10,  43 => 8,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 42,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 30,  112 => 29,  109 => 34,  106 => 36,  103 => 32,  99 => 26,  95 => 31,  92 => 21,  86 => 21,  82 => 20,  80 => 25,  73 => 21,  64 => 17,  60 => 6,  57 => 14,  54 => 13,  51 => 14,  48 => 10,  45 => 17,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
