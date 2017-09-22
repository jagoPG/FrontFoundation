<?php

/* node_modules/core-js/es7/object.js */
class __TwigTemplate_a20e96ef8c2673bb64be258703a74e45994e304c97545719af653ec90f3a0e7c extends Twig_Template
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
        $__internal_62c561d865be72f86e76cc823300fcbb5067c9b84f3b3ecb960d972d8c9a9a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c561d865be72f86e76cc823300fcbb5067c9b84f3b3ecb960d972d8c9a9a00->enter($__internal_62c561d865be72f86e76cc823300fcbb5067c9b84f3b3ecb960d972d8c9a9a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/object.js"));

        // line 1
        echo "require('../modules/es7.object.get-own-property-descriptors');
require('../modules/es7.object.values');
require('../modules/es7.object.entries');
require('../modules/es7.object.define-getter');
require('../modules/es7.object.define-setter');
require('../modules/es7.object.lookup-getter');
require('../modules/es7.object.lookup-setter');
module.exports = require('../modules/_core').Object;
";
        
        $__internal_62c561d865be72f86e76cc823300fcbb5067c9b84f3b3ecb960d972d8c9a9a00->leave($__internal_62c561d865be72f86e76cc823300fcbb5067c9b84f3b3ecb960d972d8c9a9a00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.object.get-own-property-descriptors');
require('../modules/es7.object.values');
require('../modules/es7.object.entries');
require('../modules/es7.object.define-getter');
require('../modules/es7.object.define-setter');
require('../modules/es7.object.lookup-getter');
require('../modules/es7.object.lookup-setter');
module.exports = require('../modules/_core').Object;
", "node_modules/core-js/es7/object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/object.js");
    }
}
