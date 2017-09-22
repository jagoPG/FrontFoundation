<?php

/* node_modules/core-js/library/modules/es6.object.is-extensible.js */
class __TwigTemplate_9e31676855c0f8a05afbc9490eee42b98f170c47ef354c71317debdc3f8f6196 extends Twig_Template
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
        $__internal_e6b7b7bb1b9c6864bb696e6a4fc414241c067af209defad4c56afa8fe0de0ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b7b7bb1b9c6864bb696e6a4fc414241c067af209defad4c56afa8fe0de0ded->enter($__internal_e6b7b7bb1b9c6864bb696e6a4fc414241c067af209defad4c56afa8fe0de0ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.is-extensible.js"));

        // line 1
        echo "// 19.1.2.11 Object.isExtensible(O)
var isObject = require('./_is-object');

require('./_object-sap')('isExtensible', function (\$isExtensible) {
  return function isExtensible(it) {
    return isObject(it) ? \$isExtensible ? \$isExtensible(it) : true : false;
  };
});
";
        
        $__internal_e6b7b7bb1b9c6864bb696e6a4fc414241c067af209defad4c56afa8fe0de0ded->leave($__internal_e6b7b7bb1b9c6864bb696e6a4fc414241c067af209defad4c56afa8fe0de0ded_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.11 Object.isExtensible(O)
var isObject = require('./_is-object');

require('./_object-sap')('isExtensible', function (\$isExtensible) {
  return function isExtensible(it) {
    return isObject(it) ? \$isExtensible ? \$isExtensible(it) : true : false;
  };
});
", "node_modules/core-js/library/modules/es6.object.is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.is-extensible.js");
    }
}
