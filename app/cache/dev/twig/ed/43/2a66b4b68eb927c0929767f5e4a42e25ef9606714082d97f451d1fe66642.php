<?php

/* JMPCPetFriendsProtectorsBundle::base.html.twig */
class __TwigTemplate_ed432a66b4b68eb927c0929767f5e4a42e25ef9606714082d97f451d1fe66642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'login' => array($this, 'block_login'),
            'menu_block' => array($this, 'block_menu_block'),
            'top_block' => array($this, 'block_top_block'),
            'section' => array($this, 'block_section'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'carousel' => array($this, 'block_carousel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.minicolors.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/smartphone.css"), "html", null, true);
        echo "\">
";
    }

    // line 25
    public function block_javascript($context, array $blocks = array())
    {
        // line 26
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery_validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.minicolors.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.1.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.carouFredSel-6.1.0-packed.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.4.custom/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.4.custom/development-bundle/ui/i18n/jquery.ui.datepicker-es.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/canvas.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?sensor=false\"></script>
";
    }

    // line 41
    public function block_login($context, array $blocks = array())
    {
        // line 42
        echo "    <div id=\"login_container\">
        ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "        
        <div id=\"login\">
            ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "
            <a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Ver perfil</a>
            <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        </div>
        <div class=\"content_icon\">
            <span class=\"login_icon\"></span>
        </div>
        ";
        } else {
            // line 54
            echo "        <div id=\"loginContainer\">
            <a href=\"#\" id=\"loginButton\"><span>Acceso</span><em></em></a>
            <div class=\"clear\"></div>
                <div id=\"loginBox\">                          
                ";
            // line 58
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"), array());
            echo " 
                </div>
        </div>
        ";
        }
        // line 62
        echo "    </div>
    ";
        // line 63
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"), array());
        echo " 
";
    }

    // line 66
    public function block_menu_block($context, array $blocks = array())
    {
        // line 67
        echo "    <div class=\"menu_block\">                 
        <nav  class=\"navigation\" >
            <ul class=\"sf-menu\">
                <li class=\"current\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_homepage");
        echo "\">La Protectora</a></li>
                <li class=\"with_ul\"><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
        echo "\">Nuestros amigos</a>
                    <ul>
                        <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_dogs");
        echo "\">Perros</a></li>
                        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_cats");
        echo "\">Gatos</a></li>
                        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_birds");
        echo "\">Aves</a></li>
                        <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_others");
        echo "\">Otras especies</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_adopteds");
        echo "\">Adoptados</a></li>
                <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost");
        echo "\">Mascotas perdidas</a></li>
                <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_about");
        echo "\">Como adoptar</a></li>
                <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_contact");
        echo "\">Contacto</a></li>
            </ul>
        </nav>
        <div class=\"clear\"></div>
    </div><!-- End menu_block -->
";
    }

    // line 88
    public function block_top_block($context, array $blocks = array())
    {
        // line 89
        echo "    <div class=\"top_block\">
        <div class=\"slider-relative\">
            <div class=\"slider-block\">
                <div class=\"slider\">
                    <div class=\"css-carousel\">
                        <img class=\"css-img\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide3.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" />
                    </div>
                </div><!-- End slider --> 
            </div><!-- End slider_block --> 
        </div><!-- End slider_relative --> 
    </div><!-- End top_block -->
";
    }

    // line 107
    public function block_section($context, array $blocks = array())
    {
    }

    // line 109
    public function block_sidebar($context, array $blocks = array())
    {
        // line 110
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("JMPCPetFriendsProtectorsBundle:Page:lateral"), array());
    }

    // line 113
    public function block_content($context, array $blocks = array())
    {
        // line 114
        echo "<div class=\"content page1\"><div class=\"ic\"></div>
    <div class=\"container_12\">
        <div class=\"grid_13 prefix_0\">
            <a href=\"#\" class=\"next\"></a><a href=\"#\" class=\"prev\"></a>
                <h2>Animales de la protectora</h2>
        </div> <!-- End grid_13 prefix_0 --> 
        <div class=\"clear\"></div>
        ";
        // line 121
        $this->displayBlock('carousel', $context, $blocks);
        // line 124
        echo "    </div><!-- End container_12 --> 
</div><!-- End content_page1-->
";
    }

    // line 121
    public function block_carousel($context, array $blocks = array())
    {
        // line 122
        echo "        ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("JMPCPetFriendsProtectorsBundle:Page:carousel"), array());
        // line 123
        echo "        ";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 62,  188 => 58,  167 => 47,  104 => 27,  90 => 22,  70 => 17,  124 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 34,  128 => 33,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 44,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 15,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 19,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 66,  151 => 41,  142 => 59,  138 => 54,  136 => 35,  121 => 41,  117 => 44,  105 => 40,  91 => 30,  62 => 15,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 43,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 31,  115 => 43,  111 => 37,  108 => 28,  101 => 32,  98 => 31,  96 => 25,  83 => 25,  74 => 18,  66 => 16,  55 => 15,  52 => 13,  50 => 10,  43 => 8,  41 => 10,  35 => 5,  32 => 4,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 42,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 30,  112 => 29,  109 => 34,  106 => 36,  103 => 32,  99 => 26,  95 => 31,  92 => 21,  86 => 21,  82 => 20,  80 => 25,  73 => 21,  64 => 17,  60 => 6,  57 => 14,  54 => 13,  51 => 14,  48 => 10,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
