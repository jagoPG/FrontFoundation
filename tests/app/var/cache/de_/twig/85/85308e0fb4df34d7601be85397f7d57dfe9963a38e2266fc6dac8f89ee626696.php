<?php

/* node_modules/core-js/library/modules/es6.object.prevent-extensions.js */
class __TwigTemplate_f491c3a2469011b0fa03adcd2827f7f239d171d7359d38218ff8c62ed61502c9 extends Twig_Template
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
        $__internal_6278593260285a32c467c599c271bb084ae27c6be6d26bacb00056ac2a1c16fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6278593260285a32c467c599c271bb084ae27c6be6d26bacb00056ac2a1c16fc->enter($__internal_6278593260285a32c467c599c271bb084ae27c6be6d26bacb00056ac2a1c16fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.prevent-extensions.js"));

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
        
        $__internal_6278593260285a32c467c599c271bb084ae27c6be6d26bacb00056ac2a1c16fc->leave($__internal_6278593260285a32c467c599c271bb084ae27c6be6d26bacb00056ac2a1c16fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.prevent-extensions.js";
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
", "node_modules/core-js/library/modules/es6.object.prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.prevent-extensions.js");
    }
}
