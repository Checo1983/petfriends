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
    ";
        // line 38
        echo "    <script> Nowtalk = []; Nowtalk.config = {fullscreen: false, session_id: 0, base_url: \"https://www.nowtalk.com\", widget_url: \"https://www.nowtalk.com/chat\", chat_id: \"53c99e0b08243\", debug: false }; document.write(unescape(\"%3Cscript src='https://www.nowtalk.com/build/embed_nowtalk.min.js?' type='text/javascript'%3E%3C/script%3E\")); </script>
    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?sensor=false\"></script>
";
    }

    // line 42
    public function block_login($context, array $blocks = array())
    {
        // line 43
        echo "    <div id=\"login_container\">
        ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "        
        <div id=\"login\">
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "
            <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Ver perfil</a>
            <a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
            // line 50
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 51
                echo "            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_admin");
                echo "\">Administración</a>
            ";
            }
            // line 53
            echo "        </div>
        <div class=\"content_icon\">
            <span class=\"login_icon\"></span>
        </div>
        ";
        } else {
            // line 58
            echo "        <div id=\"loginContainer\">
            <a href=\"#\" id=\"loginButton\"><span>Acceso</span><em></em></a>
            <div class=\"clear\"></div>
                <div id=\"loginBox\">                          
                ";
            // line 62
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"), array());
            echo " 
                </div>
        </div>
        ";
        }
        // line 66
        echo "    </div>
    ";
        // line 67
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"), array());
        echo " 
";
    }

    // line 70
    public function block_menu_block($context, array $blocks = array())
    {
        // line 71
        echo "    <div class=\"menu_block\">                 
        <nav  class=\"navigation\" >
            <ul class=\"sf-menu\">
                <li class=\"current\"><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_homepage");
        echo "\">La Protectora</a></li>
                <li class=\"with_ul\"><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
        echo "\">Nuestros amigos</a>
                    <ul>
                        <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_dogs");
        echo "\">Perros</a></li>
                        <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_cats");
        echo "\">Gatos</a></li>
                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_birds");
        echo "\">Aves</a></li>
                        <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_others");
        echo "\">Otras especies</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_adopteds");
        echo "\">Adoptados</a></li>
                <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost");
        echo "\">Mascotas perdidas</a></li>
                <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_about");
        echo "\">Como adoptar</a></li>
                <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_contact");
        echo "\">Contacto</a></li>
            </ul>
        </nav>
        <div class=\"clear\"></div>
    </div><!-- End menu_block -->
";
    }

    // line 92
    public function block_top_block($context, array $blocks = array())
    {
        // line 93
        echo "    <div class=\"top_block\">
        <div class=\"slider-relative\">
            <div class=\"slider-block\">
                <div class=\"slider\">
                    <div class=\"css-carousel\">
                        <img class=\"css-img\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide3.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo "\" />
                        <img class=\"css-img\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" />
                    </div>
                </div><!-- End slider --> 
            </div><!-- End slider_block --> 
        </div><!-- End slider_relative --> 
    </div><!-- End top_block -->
";
    }

    // line 111
    public function block_section($context, array $blocks = array())
    {
    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        // line 114
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("JMPCPetFriendsProtectorsBundle:Page:lateral"), array());
    }

    // line 117
    public function block_content($context, array $blocks = array())
    {
        // line 118
        echo "<div class=\"content page1\"><div class=\"ic\"></div>
    <div class=\"container_12\">
        <div class=\"grid_13 prefix_0\">
            <a href=\"#\" class=\"next\"></a><a href=\"#\" class=\"prev\"></a>
                <h2>Animales de la protectora</h2>
        </div> <!-- End grid_13 prefix_0 --> 
        <div class=\"clear\"></div>
        ";
        // line 125
        $this->displayBlock('carousel', $context, $blocks);
        // line 128
        echo "    </div><!-- End container_12 --> 
</div><!-- End content_page1-->
";
    }

    // line 125
    public function block_carousel($context, array $blocks = array())
    {
        // line 126
        echo "        ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("JMPCPetFriendsProtectorsBundle:Page:carousel"), array());
        // line 127
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
        return array (  349 => 127,  346 => 126,  343 => 125,  337 => 128,  335 => 125,  326 => 118,  323 => 117,  319 => 114,  316 => 113,  311 => 111,  300 => 103,  296 => 102,  292 => 101,  288 => 100,  284 => 99,  280 => 98,  273 => 93,  270 => 92,  260 => 86,  256 => 85,  252 => 84,  248 => 83,  242 => 80,  238 => 79,  234 => 78,  230 => 77,  225 => 75,  221 => 74,  216 => 71,  213 => 70,  207 => 67,  204 => 66,  197 => 62,  191 => 58,  184 => 53,  178 => 51,  176 => 50,  170 => 49,  166 => 48,  162 => 47,  158 => 45,  156 => 44,  153 => 43,  150 => 42,  144 => 38,  140 => 36,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  99 => 26,  96 => 25,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  57 => 14,  54 => 13,  48 => 10,  44 => 9,  40 => 7,  37 => 6,);
    }
}
