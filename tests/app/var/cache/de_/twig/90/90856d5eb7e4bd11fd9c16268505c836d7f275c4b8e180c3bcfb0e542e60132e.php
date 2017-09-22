<?php

/* node_modules/es5-ext/test/math/fround/implement.js */
class __TwigTemplate_304f7f920562d330ee5b45e3e147e13421b6849e81b6c0b62a9a09bc387cb697 extends Twig_Template
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
        $__internal_94c2c3d1aabb06b5bf1acb39df4869c82386e0edf67160ad0df22a7444e1e4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c2c3d1aabb06b5bf1acb39df4869c82386e0edf67160ad0df22a7444e1e4ab->enter($__internal_94c2c3d1aabb06b5bf1acb39df4869c82386e0edf67160ad0df22a7444e1e4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/fround/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/fround/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_94c2c3d1aabb06b5bf1acb39df4869c82386e0edf67160ad0df22a7444e1e4ab->leave($__internal_94c2c3d1aabb06b5bf1acb39df4869c82386e0edf67160ad0df22a7444e1e4ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/fround/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/fround/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/fround/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/fround/implement.js");
    }
}
