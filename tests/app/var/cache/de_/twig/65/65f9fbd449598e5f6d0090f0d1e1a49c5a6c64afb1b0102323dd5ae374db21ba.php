<?php

/* node_modules/core-js/modules/es7.math.umulh.js */
class __TwigTemplate_ea2dec9a8e7f12f4b7a98a5fdee41c42c076f619e71ebd3a3e6c1f1756eb3842 extends Twig_Template
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
        $__internal_25a071e8b5e1b1775cf25a824d77064e8fd169094d3adc316cf69d65f718b3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a071e8b5e1b1775cf25a824d77064e8fd169094d3adc316cf69d65f718b3d8->enter($__internal_25a071e8b5e1b1775cf25a824d77064e8fd169094d3adc316cf69d65f718b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.umulh.js"));

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
        
        $__internal_25a071e8b5e1b1775cf25a824d77064e8fd169094d3adc316cf69d65f718b3d8->leave($__internal_25a071e8b5e1b1775cf25a824d77064e8fd169094d3adc316cf69d65f718b3d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.umulh.js";
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
", "node_modules/core-js/modules/es7.math.umulh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.umulh.js");
    }
}
