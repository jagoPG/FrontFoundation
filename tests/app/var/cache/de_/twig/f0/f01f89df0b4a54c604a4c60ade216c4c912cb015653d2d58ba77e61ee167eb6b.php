<?php

/* node_modules/core-js/modules/es6.object.create.js */
class __TwigTemplate_91cbabb320b55a05305e9805c53249a37a830445af12a46f5bc7a29cd85e4622 extends Twig_Template
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
        $__internal_012eb078448787524e89c7e65083716d3fcf15af6e9d1c94b06416a241aa5286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012eb078448787524e89c7e65083716d3fcf15af6e9d1c94b06416a241aa5286->enter($__internal_012eb078448787524e89c7e65083716d3fcf15af6e9d1c94b06416a241aa5286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.create.js"));

        // line 1
        echo "var \$export = require('./_export');
// 19.1.2.2 / 15.2.3.5 Object.create(O [, Properties])
\$export(\$export.S, 'Object', { create: require('./_object-create') });
";
        
        $__internal_012eb078448787524e89c7e65083716d3fcf15af6e9d1c94b06416a241aa5286->leave($__internal_012eb078448787524e89c7e65083716d3fcf15af6e9d1c94b06416a241aa5286_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
// 19.1.2.2 / 15.2.3.5 Object.create(O [, Properties])
\$export(\$export.S, 'Object', { create: require('./_object-create') });
", "node_modules/core-js/modules/es6.object.create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.create.js");
    }
}
