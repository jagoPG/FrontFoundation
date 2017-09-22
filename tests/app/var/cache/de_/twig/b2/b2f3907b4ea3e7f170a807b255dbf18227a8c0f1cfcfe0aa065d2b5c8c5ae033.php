<?php

/* node_modules/core-js/library/modules/es6.math.clz32.js */
class __TwigTemplate_dbc18a8615e06083075716e83232ef886114cdf4025e452569cc2a360f65eb48 extends Twig_Template
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
        $__internal_425414ed70e269b3776e260ea544a2bede48b5010e377024370ba205f0fba604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425414ed70e269b3776e260ea544a2bede48b5010e377024370ba205f0fba604->enter($__internal_425414ed70e269b3776e260ea544a2bede48b5010e377024370ba205f0fba604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.clz32.js"));

        // line 1
        echo "// 20.2.2.11 Math.clz32(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  clz32: function clz32(x) {
    return (x >>>= 0) ? 31 - Math.floor(Math.log(x + 0.5) * Math.LOG2E) : 32;
  }
});
";
        
        $__internal_425414ed70e269b3776e260ea544a2bede48b5010e377024370ba205f0fba604->leave($__internal_425414ed70e269b3776e260ea544a2bede48b5010e377024370ba205f0fba604_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.clz32.js";
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
", "node_modules/core-js/library/modules/es6.math.clz32.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.clz32.js");
    }
}
