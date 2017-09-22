<?php

/* node_modules/core-js/library/modules/es6.object.seal.js */
class __TwigTemplate_907838983e4f7390dac604ce8aa6a1d0f4575a1fd4b3ccf675b4f997fd1c62b2 extends Twig_Template
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
        $__internal_6a844160532373be022422a3ff6a0e3b1c89c8131dc3d17baf4eec276b6164be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a844160532373be022422a3ff6a0e3b1c89c8131dc3d17baf4eec276b6164be->enter($__internal_6a844160532373be022422a3ff6a0e3b1c89c8131dc3d17baf4eec276b6164be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.seal.js"));

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
        
        $__internal_6a844160532373be022422a3ff6a0e3b1c89c8131dc3d17baf4eec276b6164be->leave($__internal_6a844160532373be022422a3ff6a0e3b1c89c8131dc3d17baf4eec276b6164be_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.seal.js";
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
", "node_modules/core-js/library/modules/es6.object.seal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.seal.js");
    }
}
