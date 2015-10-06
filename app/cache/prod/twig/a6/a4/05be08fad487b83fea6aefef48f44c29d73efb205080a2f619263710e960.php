<?php

/* JMPCPetFriendsProtectorsBundle:Animals:lateral.html.twig */
class __TwigTemplate_a6a405be08fad487b83fea6aefef48f44c29d73efb205080a2f619263710e960 extends Twig_Template
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

<div class=\"grid_5 prefix_0\">
    <h2 class=\"ic1\">Entradas recientes</h2>
    <ul class=\"list\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestPosts"]) ? $context["latestPosts"] : $this->getContext($context, "latestPosts")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "            <li>
                <span class=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "", 1 => "cnt"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\"><time datetime=\"\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creado"), "d"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creado"), "F"), "html", null, true);
            echo "</span></time></span>
                <div class=\"extra_wrapper\">
                    <div class=\"col1\">
                        <span class=\"highlight\">";
            // line 13
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "autor")), "html", null, true);
            echo "</span> ha escrito
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_list", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"), "slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug"))), "html", null, true);
            // line 15
            echo "\">
                          ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titulo"), "html", null, true);
            echo "
                        </a>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('JMPC_PetFriends_Protectors_extension')->createdAgo($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creado")), "html", null, true);
            echo "
                    </div>
                </div>
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenido", array(0 => 100), "method"), "html", null, true);
            echo "...</p>
            </li>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <p>No hay entradas recientes</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Animals:lateral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  76 => 20,  70 => 17,  66 => 16,  63 => 15,  61 => 14,  57 => 13,  26 => 8,  19 => 3,  81 => 31,  78 => 30,  75 => 29,  67 => 23,  64 => 22,  59 => 19,  53 => 17,  47 => 10,  44 => 9,  38 => 11,  36 => 10,  32 => 8,  29 => 7,);
    }
}
