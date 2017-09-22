<?php

/* node_modules/core-js/modules/es6.math.cosh.js */
class __TwigTemplate_34d6fadc236d36c3a6f2d113e48ecfa705684d6611b5809ae06c668c1223afe5 extends Twig_Template
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
        $__internal_389958cf65cdcf324300637ed57eb89bd584947d72f558c36225586971e2a5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389958cf65cdcf324300637ed57eb89bd584947d72f558c36225586971e2a5de->enter($__internal_389958cf65cdcf324300637ed57eb89bd584947d72f558c36225586971e2a5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.cosh.js"));

        // line 1
        echo "// 20.2.2.12 Math.cosh(x)
var \$export = require('./_export');
var exp = Math.exp;

\$export(\$export.S, 'Math', {
  cosh: function cosh(x) {
    return (exp(x = +x) + exp(-x)) / 2;
  }
});
";
        
        $__internal_389958cf65cdcf324300637ed57eb89bd584947d72f558c36225586971e2a5de->leave($__internal_389958cf65cdcf324300637ed57eb89bd584947d72f558c36225586971e2a5de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.cosh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.12 Math.cosh(x)
var \$export = require('./_export');
var exp = Math.exp;

\$export(\$export.S, 'Math', {
  cosh: function cosh(x) {
    return (exp(x = +x) + exp(-x)) / 2;
  }
});
", "node_modules/core-js/modules/es6.math.cosh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.cosh.js");
    }
}
