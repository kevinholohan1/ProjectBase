<?php

/* home.twig */
class __TwigTemplate_a4b49bb19f81ae09c71fe51db3030cfb3386b3b93b9b333c84f21e4b5d3891e5 extends Twig_Template
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
<p>

    TEST TWIG
</p>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 7
            if (isset($context["letter"])) { $_letter_ = $context["letter"]; } else { $_letter_ = null; }
            echo twig_escape_filter($this->env, $_letter_, "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "<br />
";
        // line 10
        if (isset($context["person"])) { $_person_ = $context["person"]; } else { $_person_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_person_, "name", array(), "array"), "html", null, true);
        echo "
";
        // line 11
        if (isset($context["friends"])) { $_friends_ = $context["friends"]; } else { $_friends_ = null; }
        echo twig_var_dump($this->env, $context, $_friends_);
        echo "
Names of my friends:
<ul>
    
        ";
        // line 15
        if (isset($context["friends"])) { $_friends_ = $context["friends"]; } else { $_friends_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_friends_);
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 16
            echo "        <li>";
            if (isset($context["person"])) { $_person_ = $context["person"]; } else { $_person_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_person_, "firstname"), "html", null, true);
            echo " ";
            if (isset($context["person"])) { $_person_ = $context["person"]; } else { $_person_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_person_, "lastname"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  60 => 16,  55 => 15,  47 => 11,  42 => 10,  39 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
