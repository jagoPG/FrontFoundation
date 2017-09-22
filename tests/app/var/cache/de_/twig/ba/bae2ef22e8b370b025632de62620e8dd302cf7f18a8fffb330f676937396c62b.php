<?php

/* node_modules/core-js/modules/_object-keys.js */
class __TwigTemplate_966dcc0287d007e265a9ca84762f82d4b41fc3588ea1cc39a0da0d2429e56f15 extends Twig_Template
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
        $__internal_b8b2a78219b9201301c55087458d18a81f2ea855a87d3a67e3d3cb0568e0294a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b2a78219b9201301c55087458d18a81f2ea855a87d3a67e3d3cb0568e0294a->enter($__internal_b8b2a78219b9201301c55087458d18a81f2ea855a87d3a67e3d3cb0568e0294a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-keys.js"));

        // line 1
        echo "// 19.1.2.14 / 15.2.3.14 Object.keys(O)
var \$keys = require('./_object-keys-internal');
var enumBugKeys = require('./_enum-bug-keys');

module.exports = Object.keys || function keys(O) {
  return \$keys(O, enumBugKeys);
};
";
        
        $__internal_b8b2a78219b9201301c55087458d18a81f2ea855a87d3a67e3d3cb0568e0294a->leave($__internal_b8b2a78219b9201301c55087458d18a81f2ea855a87d3a67e3d3cb0568e0294a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-keys.js";
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
", "node_modules/core-js/modules/_object-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-keys.js");
    }
}
