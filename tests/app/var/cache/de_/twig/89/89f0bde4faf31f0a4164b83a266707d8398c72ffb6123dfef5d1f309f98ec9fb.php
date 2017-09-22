<?php

/* node_modules/core-js/modules/es6.object.prevent-extensions.js */
class __TwigTemplate_48eeb4434409f0546cf20ca01542934a9a3cdb9e7118839b289e4f28c22199de extends Twig_Template
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
        $__internal_d418184eb4860012e7ab0243789404bf802f82d17fbea181cbacbefd1d201594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d418184eb4860012e7ab0243789404bf802f82d17fbea181cbacbefd1d201594->enter($__internal_d418184eb4860012e7ab0243789404bf802f82d17fbea181cbacbefd1d201594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.prevent-extensions.js"));

        // line 1
        echo "// 19.1.2.15 Object.preventExtensions(O)
var isObject = require('./_is-object');
var meta = require('./_meta').onFreeze;

require('./_object-sap')('preventExtensions', function (\$preventExtensions) {
  return function preventExtensions(it) {
    return \$preventExtensions && isObject(it) ? \$preventExtensions(meta(it)) : it;
  };
});
";
        
        $__internal_d418184eb4860012e7ab0243789404bf802f82d17fbea181cbacbefd1d201594->leave($__internal_d418184eb4860012e7ab0243789404bf802f82d17fbea181cbacbefd1d201594_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.15 Object.preventExtensions(O)
var isObject = require('./_is-object');
var meta = require('./_meta').onFreeze;

require('./_object-sap')('preventExtensions', function (\$preventExtensions) {
  return function preventExtensions(it) {
    return \$preventExtensions && isObject(it) ? \$preventExtensions(meta(it)) : it;
  };
});
", "node_modules/core-js/modules/es6.object.prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.prevent-extensions.js");
    }
}
