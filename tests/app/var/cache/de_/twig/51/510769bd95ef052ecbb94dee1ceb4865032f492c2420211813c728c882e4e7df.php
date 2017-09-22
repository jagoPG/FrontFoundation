<?php

/* node_modules/core-js/modules/es7.math.imulh.js */
class __TwigTemplate_380b1b15372d16fcf5b65ffef95dceeb486c2a76b65f9d4d8f25719107549456 extends Twig_Template
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
        $__internal_c121b06d1d6e2b8e2fd9f86d35ac2f7a6814ea78a5792e6d82732163dcdca04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c121b06d1d6e2b8e2fd9f86d35ac2f7a6814ea78a5792e6d82732163dcdca04a->enter($__internal_c121b06d1d6e2b8e2fd9f86d35ac2f7a6814ea78a5792e6d82732163dcdca04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.imulh.js"));

        // line 1
        echo "// https://gist.github.com/BrendanEich/4294d5c212a6d2254703
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  imulh: function imulh(u, v) {
    var UINT16 = 0xffff;
    var \$u = +u;
    var \$v = +v;
    var u0 = \$u & UINT16;
    var v0 = \$v & UINT16;
    var u1 = \$u >> 16;
    var v1 = \$v >> 16;
    var t = (u1 * v0 >>> 0) + (u0 * v0 >>> 16);
    return u1 * v1 + (t >> 16) + ((u0 * v1 >>> 0) + (t & UINT16) >> 16);
  }
});
";
        
        $__internal_c121b06d1d6e2b8e2fd9f86d35ac2f7a6814ea78a5792e6d82732163dcdca04a->leave($__internal_c121b06d1d6e2b8e2fd9f86d35ac2f7a6814ea78a5792e6d82732163dcdca04a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.imulh.js";
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
  imulh: function imulh(u, v) {
    var UINT16 = 0xffff;
    var \$u = +u;
    var \$v = +v;
    var u0 = \$u & UINT16;
    var v0 = \$v & UINT16;
    var u1 = \$u >> 16;
    var v1 = \$v >> 16;
    var t = (u1 * v0 >>> 0) + (u0 * v0 >>> 16);
    return u1 * v1 + (t >> 16) + ((u0 * v1 >>> 0) + (t & UINT16) >> 16);
  }
});
", "node_modules/core-js/modules/es7.math.imulh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.imulh.js");
    }
}
