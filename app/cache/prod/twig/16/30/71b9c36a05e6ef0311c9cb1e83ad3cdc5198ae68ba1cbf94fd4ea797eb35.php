<?php

/* JMPCPetFriendsProtectorsBundle:Page:indexAjax.html.twig */
class __TwigTemplate_163071b9c36a05e6ef0311c9cb1e83ad3cdc5198ae68ba1cbf94fd4ea797eb35 extends Twig_Template
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
        // line 4
        echo "

    ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
        <span class=\"new_post\"><a href=";
            // line 7
            echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_new");
            echo ">Nueva Entrada</a></span>
    ";
        }
        // line 8
        echo " 
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "creado"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "creado"), "l, F j, Y"), "full", "none", "es")), "html", null, true);
            echo "</time></div>
            <header class=\"ici02\">
                <h2 class=\"ic1\"><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_list", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "titulo"), "html", null, true);
            echo "</a></h2>
            </header>
            <div class=\"box_img\">
                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/lista_", 1 => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "imagen")))), "html", null, true);
            echo "\" />
            </div>
            <div class=\"snippet\">
                <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "contenido", array(0 => 300), "method"), "html", null, true);
            echo "</p>
                <div class=\"clear\"></div>
                <div class=\"button_continue\">
                    <a class=\"btn02\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_list", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "slug"))), "html", null, true);
            echo "\">Continua...</a>
                </div>
            </div>
            
            <footer class=\"meta\">
                <p>Comentarios: <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_list", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "slug"))), "html", null, true);
            echo "#comentarios\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "comentarios")), "html", null, true);
            echo "</a></p>
                <p>Enviado por <span class=\"highlight\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "autor"), "html", null, true);
            echo "</span> a las ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "creado"), "h:iA"), "html", null, true);
            echo "</p>
                <p>Etiquetas: <span class=\"highlight\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "tags"), "html", null, true);
            echo "</span></p>
            </footer>
            ";
            // line 31
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo " 
            <div class=\"links_post\">
                <a onclick=\"return confirm('¿Borrar entrada?')\" href= ";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "slug"))), "html", null, true);
                echo ">Borrar Entrada</a>
                <a href=";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), 0, array(), "array"), "slug"))), "html", null, true);
                echo ">Editar Entrada</a>
            </div>
            
            ";
            }
            // line 38
            echo "        </article>  
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo " ";
            echo " 
        <div class=\"not_found\"></div>
        <div class=\"button_back\">
            <a class=\"btn02\" href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
            echo "\">Volver</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    <div class=\"paginacion\">
        ";
        // line 46
        echo $this->env->getExtension('knp_pagination')->render((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
    </div>
      

   ";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Page:indexAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  132 => 45,  123 => 42,  117 => 39,  111 => 38,  104 => 34,  100 => 33,  95 => 31,  90 => 29,  84 => 28,  78 => 27,  70 => 22,  64 => 19,  58 => 16,  50 => 13,  43 => 11,  40 => 10,  35 => 9,  32 => 8,  27 => 7,  23 => 6,  19 => 4,);
    }
}
