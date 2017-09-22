<?php

/* node_modules/resolve/test/resolver/baz/quux.js */
class __TwigTemplate_6d7035ffba812b39b42ba2437739887d63cc2aca71d5d8454852de0b80622c4b extends Twig_Template
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
        $__internal_12a2d3222aa40be016c6cb41a884b024cf35f5694246a14c3baee39dc75d561b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a2d3222aa40be016c6cb41a884b024cf35f5694246a14c3baee39dc75d561b->enter($__internal_12a2d3222aa40be016c6cb41a884b024cf35f5694246a14c3baee39dc75d561b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/baz/quux.js"));

        // line 1
        echo "module.exports = 1;
";
        
        $__internal_12a2d3222aa40be016c6cb41a884b024cf35f5694246a14c3baee39dc75d561b->leave($__internal_12a2d3222aa40be016c6cb41a884b024cf35f5694246a14c3baee39dc75d561b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/baz/quux.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 1;
", "node_modules/resolve/test/resolver/baz/quux.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/baz/quux.js");
    }
}
