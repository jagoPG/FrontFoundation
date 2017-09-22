<?php

/* node_modules/core-js/library/modules/es6.object.keys.js */
class __TwigTemplate_c5fc1bcbe397719c9961d979f9bd20f8b759bb1aceba9db1808f1fc77a9b8243 extends Twig_Template
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
        $__internal_6a83bc3a009c59a7b39c79b66f7d84657b03132201f7e97b4fc32768bb874d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a83bc3a009c59a7b39c79b66f7d84657b03132201f7e97b4fc32768bb874d5e->enter($__internal_6a83bc3a009c59a7b39c79b66f7d84657b03132201f7e97b4fc32768bb874d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.keys.js"));

        // line 1
        echo "// 19.1.2.14 Object.keys(O)
var toObject = require('./_to-object');
var \$keys = require('./_object-keys');

require('./_object-sap')('keys', function () {
  return function keys(it) {
    return \$keys(toObject(it));
  };
});
";
        
        $__internal_6a83bc3a009c59a7b39c79b66f7d84657b03132201f7e97b4fc32768bb874d5e->leave($__internal_6a83bc3a009c59a7b39c79b66f7d84657b03132201f7e97b4fc32768bb874d5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.14 Object.keys(O)
var toObject = require('./_to-object');
var \$keys = require('./_object-keys');

require('./_object-sap')('keys', function () {
  return function keys(it) {
    return \$keys(toObject(it));
  };
});
", "node_modules/core-js/library/modules/es6.object.keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.keys.js");
    }
}
