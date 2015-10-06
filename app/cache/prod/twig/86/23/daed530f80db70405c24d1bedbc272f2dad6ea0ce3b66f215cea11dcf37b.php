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
            <!--<canvas id='canvas'></canvas>--> 
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
        return array (  200 => 48,  195 => 44,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  165 => 9,  160 => 8,  155 => 7,  130 => 49,  118 => 43,  114 => 41,  111 => 40,  105 => 39,  93 => 35,  88 => 34,  84 => 33,  76 => 28,  69 => 24,  65 => 23,  61 => 21,  59 => 20,  49 => 12,  47 => 11,  41 => 9,  39 => 8,  35 => 7,  29 => 3,  349 => 127,  346 => 126,  343 => 125,  337 => 128,  335 => 125,  326 => 118,  323 => 117,  319 => 114,  316 => 113,  311 => 111,  300 => 103,  296 => 102,  292 => 101,  288 => 100,  284 => 99,  280 => 98,  273 => 93,  270 => 92,  260 => 86,  256 => 85,  252 => 84,  248 => 83,  242 => 80,  238 => 79,  234 => 78,  230 => 77,  225 => 75,  221 => 74,  216 => 71,  213 => 70,  207 => 67,  204 => 66,  197 => 62,  191 => 58,  184 => 53,  178 => 51,  176 => 50,  170 => 11,  166 => 48,  162 => 47,  158 => 45,  156 => 44,  153 => 43,  150 => 42,  144 => 38,  140 => 36,  136 => 35,  132 => 34,  128 => 48,  124 => 32,  120 => 44,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  99 => 26,  96 => 36,  90 => 22,  86 => 21,  82 => 20,  78 => 29,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  57 => 14,  54 => 13,  48 => 10,  44 => 10,  40 => 7,  37 => 6,);
    }
}
