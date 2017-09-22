<?php

/* node_modules/core-js/library/modules/es7.math.umulh.js */
class __TwigTemplate_95562839a0838b857db2ad42a138c96d407186bda999af95ca35836d3b80491d extends Twig_Template
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
        $__internal_763f7736cc688bb71578b7882be3f88ee51227ba672281d525e7e2b2d616d796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763f7736cc688bb71578b7882be3f88ee51227ba672281d525e7e2b2d616d796->enter($__internal_763f7736cc688bb71578b7882be3f88ee51227ba672281d525e7e2b2d616d796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.umulh.js"));

        // line 1
        echo "// https://gist.github.com/BrendanEich/4294d5c212a6d2254703
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  umulh: function umulh(u, v) {
    var UINT16 = 0xffff;
    var \$u = +u;
    var \$v = +v;
    var u0 = \$u & UINT16;
    var v0 = \$v & UINT16;
    var u1 = \$u >>> 16;
    var v1 = \$v >>> 16;
    var t = (u1 * v0 >>> 0) + (u0 * v0 >>> 16);
    return u1 * v1 + (t >>> 16) + ((u0 * v1 >>> 0) + (t & UINT16) >>> 16);
  }
});
";
        
        $__internal_763f7736cc688bb71578b7882be3f88ee51227ba672281d525e7e2b2d616d796->leave($__internal_763f7736cc688bb71578b7882be3f88ee51227ba672281d525e7e2b2d616d796_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.umulh.js";
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
  umulh: function umulh(u, v) {
    var UINT16 = 0xffff;
    var \$u = +u;
    var \$v = +v;
    var u0 = \$u & UINT16;
    var v0 = \$v & UINT16;
    var u1 = \$u >>> 16;
    var v1 = \$v >>> 16;
    var t = (u1 * v0 >>> 0) + (u0 * v0 >>> 16);
    return u1 * v1 + (t >>> 16) + ((u0 * v1 >>> 0) + (t & UINT16) >>> 16);
  }
});
", "node_modules/core-js/library/modules/es7.math.umulh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.umulh.js");
    }
}
