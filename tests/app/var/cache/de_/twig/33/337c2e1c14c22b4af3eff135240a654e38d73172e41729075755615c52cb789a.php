<?php

/* node_modules/core-js/modules/es6.math.clz32.js */
class __TwigTemplate_d3a934a8b81263b657de7c8ba5dd1e552dfa57203243c368781a271c30a82aad extends Twig_Template
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
        $__internal_02fac37b41b54a94b9b5037fb7a951b3c753a9b54e31fb45e83083f21749622f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fac37b41b54a94b9b5037fb7a951b3c753a9b54e31fb45e83083f21749622f->enter($__internal_02fac37b41b54a94b9b5037fb7a951b3c753a9b54e31fb45e83083f21749622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.clz32.js"));

        // line 1
        echo "// 20.2.2.11 Math.clz32(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  clz32: function clz32(x) {
    return (x >>>= 0) ? 31 - Math.floor(Math.log(x + 0.5) * Math.LOG2E) : 32;
  }
});
";
        
        $__internal_02fac37b41b54a94b9b5037fb7a951b3c753a9b54e31fb45e83083f21749622f->leave($__internal_02fac37b41b54a94b9b5037fb7a951b3c753a9b54e31fb45e83083f21749622f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.clz32.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.11 Math.clz32(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  clz32: function clz32(x) {
    return (x >>>= 0) ? 31 - Math.floor(Math.log(x + 0.5) * Math.LOG2E) : 32;
  }
});
", "node_modules/core-js/modules/es6.math.clz32.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.clz32.js");
    }
}
