<?php

/* node_modules/core-js/modules/es6.object.seal.js */
class __TwigTemplate_6da28af8a47a451a95e2f78eb2c39f068294b76874a2e4b5a1ccf62ebde92212 extends Twig_Template
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
        $__internal_5d229cfc2b4e1b3e3fe7b6b5b4811bfd10cc85200382b62e59e86c6f874c913b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d229cfc2b4e1b3e3fe7b6b5b4811bfd10cc85200382b62e59e86c6f874c913b->enter($__internal_5d229cfc2b4e1b3e3fe7b6b5b4811bfd10cc85200382b62e59e86c6f874c913b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.seal.js"));

        // line 1
        echo "// 19.1.2.17 Object.seal(O)
var isObject = require('./_is-object');
var meta = require('./_meta').onFreeze;

require('./_object-sap')('seal', function (\$seal) {
  return function seal(it) {
    return \$seal && isObject(it) ? \$seal(meta(it)) : it;
  };
});
";
        
        $__internal_5d229cfc2b4e1b3e3fe7b6b5b4811bfd10cc85200382b62e59e86c6f874c913b->leave($__internal_5d229cfc2b4e1b3e3fe7b6b5b4811bfd10cc85200382b62e59e86c6f874c913b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.seal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.17 Object.seal(O)
var isObject = require('./_is-object');
var meta = require('./_meta').onFreeze;

require('./_object-sap')('seal', function (\$seal) {
  return function seal(it) {
    return \$seal && isObject(it) ? \$seal(meta(it)) : it;
  };
});
", "node_modules/core-js/modules/es6.object.seal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.seal.js");
    }
}
