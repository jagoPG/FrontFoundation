<?php

/* node_modules/core-js/modules/es7.math.iaddh.js */
class __TwigTemplate_b5a19b9277cf45c637e44beb99ccc0a5de64da00c298338d76d86b9e5427c516 extends Twig_Template
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
        $__internal_26f69a326fd9ed2dc0580a24c1ed4528286fa3056d42ab607d28cfcef4a5f181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f69a326fd9ed2dc0580a24c1ed4528286fa3056d42ab607d28cfcef4a5f181->enter($__internal_26f69a326fd9ed2dc0580a24c1ed4528286fa3056d42ab607d28cfcef4a5f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.iaddh.js"));

        // line 1
        echo "// https://gist.github.com/BrendanEich/4294d5c212a6d2254703
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  iaddh: function iaddh(x0, x1, y0, y1) {
    var \$x0 = x0 >>> 0;
    var \$x1 = x1 >>> 0;
    var \$y0 = y0 >>> 0;
    return \$x1 + (y1 >>> 0) + ((\$x0 & \$y0 | (\$x0 | \$y0) & ~(\$x0 + \$y0 >>> 0)) >>> 31) | 0;
  }
});
";
        
        $__internal_26f69a326fd9ed2dc0580a24c1ed4528286fa3056d42ab607d28cfcef4a5f181->leave($__internal_26f69a326fd9ed2dc0580a24c1ed4528286fa3056d42ab607d28cfcef4a5f181_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.iaddh.js";
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
  iaddh: function iaddh(x0, x1, y0, y1) {
    var \$x0 = x0 >>> 0;
    var \$x1 = x1 >>> 0;
    var \$y0 = y0 >>> 0;
    return \$x1 + (y1 >>> 0) + ((\$x0 & \$y0 | (\$x0 | \$y0) & ~(\$x0 + \$y0 >>> 0)) >>> 31) | 0;
  }
});
", "node_modules/core-js/modules/es7.math.iaddh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.iaddh.js");
    }
}
