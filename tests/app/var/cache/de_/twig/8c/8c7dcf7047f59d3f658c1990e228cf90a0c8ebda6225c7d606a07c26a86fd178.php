<?php

/* node_modules/core-js/modules/core.object.is-object.js */
class __TwigTemplate_b0a1469f47cb66bec85ce5fda84ecde44a0733a2ff936d16816f80c50d792529 extends Twig_Template
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
        $__internal_7a8f67fd1c45a4d1ef7a4e63b056376b2736c7a9a124f326700413045ec55ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8f67fd1c45a4d1ef7a4e63b056376b2736c7a9a124f326700413045ec55ce1->enter($__internal_7a8f67fd1c45a4d1ef7a4e63b056376b2736c7a9a124f326700413045ec55ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.object.is-object.js"));

        // line 1
        echo "var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { isObject: require('./_is-object') });
";
        
        $__internal_7a8f67fd1c45a4d1ef7a4e63b056376b2736c7a9a124f326700413045ec55ce1->leave($__internal_7a8f67fd1c45a4d1ef7a4e63b056376b2736c7a9a124f326700413045ec55ce1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.object.is-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { isObject: require('./_is-object') });
", "node_modules/core-js/modules/core.object.is-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.object.is-object.js");
    }
}
