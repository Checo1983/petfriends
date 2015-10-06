<?php

/* JMPCPetFriendsProtectorsBundle:Email:confirmation.html.twig */
class __TwigTemplate_e6a9c2c539b4f9bda43f4139d8cad0a20c70d23f1469c477d3b49449d1f4e4ff extends Twig_Template
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
<!DOCTYPE HTML>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Gracias por contactar</title>
    </head>
    <body>
        <table>
            <tbody>
            <tr>
                <td>
                    <p>Hola ";
        // line 15
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nombre")), "html", null, true);
        echo "</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Gracias por contactar con PetFriends, en breve te enviaremos una respuesta a tu consulta :)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Gracias y un saludo.</p>
                </td>
            </tr>
            </tbody>
        </table>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Email:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  51 => 24,  47 => 23,  43 => 22,  39 => 21,  19 => 3,);
    }
}
