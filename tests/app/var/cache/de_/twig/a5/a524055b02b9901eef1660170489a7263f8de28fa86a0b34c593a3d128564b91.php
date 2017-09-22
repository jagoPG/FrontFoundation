<?php

/* node_modules/core-js/library/modules/es6.math.trunc.js */
class __TwigTemplate_ec6df87cba8447aba944205e26a7a49002c7fae5ba9fb78ceb15b97e605ee54d extends Twig_Template
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
        $__internal_1c8352d08d97cf2a9a3346d80042a5ee3ffae94f0eb6c56b333491d46ebfe368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8352d08d97cf2a9a3346d80042a5ee3ffae94f0eb6c56b333491d46ebfe368->enter($__internal_1c8352d08d97cf2a9a3346d80042a5ee3ffae94f0eb6c56b333491d46ebfe368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.trunc.js"));

        // line 1
        echo "// 20.2.2.34 Math.trunc(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  trunc: function trunc(it) {
    return (it > 0 ? Math.floor : Math.ceil)(it);
  }
});
";
        
        $__internal_1c8352d08d97cf2a9a3346d80042a5ee3ffae94f0eb6c56b333491d46ebfe368->leave($__internal_1c8352d08d97cf2a9a3346d80042a5ee3ffae94f0eb6c56b333491d46ebfe368_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.trunc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.34 Math.trunc(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  trunc: function trunc(it) {
    return (it > 0 ? Math.floor : Math.ceil)(it);
  }
});
", "node_modules/core-js/library/modules/es6.math.trunc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.trunc.js");
    }
}
