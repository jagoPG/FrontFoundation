<?php

/* node_modules/core-js/modules/es6.math.trunc.js */
class __TwigTemplate_52cc0f6e676749457ef377130232573447bd9fbd2caf0449190c507da352fc22 extends Twig_Template
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
        $__internal_e22fbee91f47f41920de194e2b49ab0193c74bffe532811b70aca86047e3a68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22fbee91f47f41920de194e2b49ab0193c74bffe532811b70aca86047e3a68d->enter($__internal_e22fbee91f47f41920de194e2b49ab0193c74bffe532811b70aca86047e3a68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.trunc.js"));

        // line 1
        echo "// 20.2.2.34 Math.trunc(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  trunc: function trunc(it) {
    return (it > 0 ? Math.floor : Math.ceil)(it);
  }
});
";
        
        $__internal_e22fbee91f47f41920de194e2b49ab0193c74bffe532811b70aca86047e3a68d->leave($__internal_e22fbee91f47f41920de194e2b49ab0193c74bffe532811b70aca86047e3a68d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.trunc.js";
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
", "node_modules/core-js/modules/es6.math.trunc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.trunc.js");
    }
}
