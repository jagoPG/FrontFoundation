<?php

/* node_modules/core-js/library/modules/_object-keys.js */
class __TwigTemplate_c7b667124bab86dbc1b47fdb436791f0873a2d25010adcc1571da135dc5d6db2 extends Twig_Template
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
        $__internal_d98ed17f2fea9c283fb1cb983203d9f56695f9ce2b58bd36c7ce05948f31e4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98ed17f2fea9c283fb1cb983203d9f56695f9ce2b58bd36c7ce05948f31e4e5->enter($__internal_d98ed17f2fea9c283fb1cb983203d9f56695f9ce2b58bd36c7ce05948f31e4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-keys.js"));

        // line 1
        echo "// 19.1.2.14 / 15.2.3.14 Object.keys(O)
var \$keys = require('./_object-keys-internal');
var enumBugKeys = require('./_enum-bug-keys');

module.exports = Object.keys || function keys(O) {
  return \$keys(O, enumBugKeys);
};
";
        
        $__internal_d98ed17f2fea9c283fb1cb983203d9f56695f9ce2b58bd36c7ce05948f31e4e5->leave($__internal_d98ed17f2fea9c283fb1cb983203d9f56695f9ce2b58bd36c7ce05948f31e4e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.14 / 15.2.3.14 Object.keys(O)
var \$keys = require('./_object-keys-internal');
var enumBugKeys = require('./_enum-bug-keys');

module.exports = Object.keys || function keys(O) {
  return \$keys(O, enumBugKeys);
};
", "node_modules/core-js/library/modules/_object-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-keys.js");
    }
}
