<?php

/* node_modules/core-js/library/modules/es6.math.log2.js */
class __TwigTemplate_314abeb67d7fb96953e99ba30b40cb8c239ccf55f9afb2f851173529f7143aea extends Twig_Template
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
        $__internal_8588bb8c0b4d0d9e5295bcaa7994d2b60702f72b7bd2d899062be38913b359a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8588bb8c0b4d0d9e5295bcaa7994d2b60702f72b7bd2d899062be38913b359a4->enter($__internal_8588bb8c0b4d0d9e5295bcaa7994d2b60702f72b7bd2d899062be38913b359a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.log2.js"));

        // line 1
        echo "// 20.2.2.22 Math.log2(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  log2: function log2(x) {
    return Math.log(x) / Math.LN2;
  }
});
";
        
        $__internal_8588bb8c0b4d0d9e5295bcaa7994d2b60702f72b7bd2d899062be38913b359a4->leave($__internal_8588bb8c0b4d0d9e5295bcaa7994d2b60702f72b7bd2d899062be38913b359a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.log2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.22 Math.log2(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  log2: function log2(x) {
    return Math.log(x) / Math.LN2;
  }
});
", "node_modules/core-js/library/modules/es6.math.log2.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.log2.js");
    }
}
