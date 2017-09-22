<?php

/* node_modules/core-js/modules/es7.math.isubh.js */
class __TwigTemplate_c7715111f8c1f72ef1f342a6798a5c952ced1b9dc133677d7a0cedcb8b74c805 extends Twig_Template
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
        $__internal_178f297309f60045bd7acd8c2e8f2978d05763ff89923140ed00bdb9e8c67ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178f297309f60045bd7acd8c2e8f2978d05763ff89923140ed00bdb9e8c67ab3->enter($__internal_178f297309f60045bd7acd8c2e8f2978d05763ff89923140ed00bdb9e8c67ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.isubh.js"));

        // line 1
        echo "// https://gist.github.com/BrendanEich/4294d5c212a6d2254703
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  isubh: function isubh(x0, x1, y0, y1) {
    var \$x0 = x0 >>> 0;
    var \$x1 = x1 >>> 0;
    var \$y0 = y0 >>> 0;
    return \$x1 - (y1 >>> 0) - ((~\$x0 & \$y0 | ~(\$x0 ^ \$y0) & \$x0 - \$y0 >>> 0) >>> 31) | 0;
  }
});
";
        
        $__internal_178f297309f60045bd7acd8c2e8f2978d05763ff89923140ed00bdb9e8c67ab3->leave($__internal_178f297309f60045bd7acd8c2e8f2978d05763ff89923140ed00bdb9e8c67ab3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.isubh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://gist.github.com/BrendanEich/4294d5c212a6d2254703
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  isubh: function isubh(x0, x1, y0, y1) {
    var \$x0 = x0 >>> 0;
    var \$x1 = x1 >>> 0;
    var \$y0 = y0 >>> 0;
    return \$x1 - (y1 >>> 0) - ((~\$x0 & \$y0 | ~(\$x0 ^ \$y0) & \$x0 - \$y0 >>> 0) >>> 31) | 0;
  }
});
", "node_modules/core-js/modules/es7.math.isubh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.isubh.js");
    }
}
