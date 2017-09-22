<?php

/* node_modules/core-js/library/modules/es7.math.isubh.js */
class __TwigTemplate_0126696b6c6e75dfb70392b8cd8a86cc2ca53ac28ad55b81a137a91b54e3bd7f extends Twig_Template
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
        $__internal_5481d9c81e7563748f9998744f94e00e884514fd9a41463c09a65538308bbbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5481d9c81e7563748f9998744f94e00e884514fd9a41463c09a65538308bbbcd->enter($__internal_5481d9c81e7563748f9998744f94e00e884514fd9a41463c09a65538308bbbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.isubh.js"));

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
        
        $__internal_5481d9c81e7563748f9998744f94e00e884514fd9a41463c09a65538308bbbcd->leave($__internal_5481d9c81e7563748f9998744f94e00e884514fd9a41463c09a65538308bbbcd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.isubh.js";
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
", "node_modules/core-js/library/modules/es7.math.isubh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.isubh.js");
    }
}
