<?php

/* node_modules/core-js/library/modules/es6.math.cbrt.js */
class __TwigTemplate_fe44fc87d8897f2c1c9c61f39e748b72dd428a052aad2f5a6a70dedab48b4e7f extends Twig_Template
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
        $__internal_9374ad9d8a60275e2902a0e82bfadef239a404bf85b95115be6423cba7e3e483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9374ad9d8a60275e2902a0e82bfadef239a404bf85b95115be6423cba7e3e483->enter($__internal_9374ad9d8a60275e2902a0e82bfadef239a404bf85b95115be6423cba7e3e483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.cbrt.js"));

        // line 1
        echo "// 20.2.2.9 Math.cbrt(x)
var \$export = require('./_export');
var sign = require('./_math-sign');

\$export(\$export.S, 'Math', {
  cbrt: function cbrt(x) {
    return sign(x = +x) * Math.pow(Math.abs(x), 1 / 3);
  }
});
";
        
        $__internal_9374ad9d8a60275e2902a0e82bfadef239a404bf85b95115be6423cba7e3e483->leave($__internal_9374ad9d8a60275e2902a0e82bfadef239a404bf85b95115be6423cba7e3e483_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.cbrt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.9 Math.cbrt(x)
var \$export = require('./_export');
var sign = require('./_math-sign');

\$export(\$export.S, 'Math', {
  cbrt: function cbrt(x) {
    return sign(x = +x) * Math.pow(Math.abs(x), 1 / 3);
  }
});
", "node_modules/core-js/library/modules/es6.math.cbrt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.cbrt.js");
    }
}
