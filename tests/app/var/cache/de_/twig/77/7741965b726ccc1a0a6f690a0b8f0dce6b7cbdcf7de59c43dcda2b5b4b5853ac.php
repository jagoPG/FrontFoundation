<?php

/* node_modules/core-js/library/modules/core.object.is-object.js */
class __TwigTemplate_8e68aee0f74e486021bae9e5d9def618eb4b7e205e77f970b0838b87ca25b6b0 extends Twig_Template
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
        $__internal_842d48762a9046c2d21b46aa7d8c995a6910c78a88eb641022d7d40346842044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842d48762a9046c2d21b46aa7d8c995a6910c78a88eb641022d7d40346842044->enter($__internal_842d48762a9046c2d21b46aa7d8c995a6910c78a88eb641022d7d40346842044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.object.is-object.js"));

        // line 1
        echo "var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { isObject: require('./_is-object') });
";
        
        $__internal_842d48762a9046c2d21b46aa7d8c995a6910c78a88eb641022d7d40346842044->leave($__internal_842d48762a9046c2d21b46aa7d8c995a6910c78a88eb641022d7d40346842044_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.object.is-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { isObject: require('./_is-object') });
", "node_modules/core-js/library/modules/core.object.is-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.object.is-object.js");
    }
}
