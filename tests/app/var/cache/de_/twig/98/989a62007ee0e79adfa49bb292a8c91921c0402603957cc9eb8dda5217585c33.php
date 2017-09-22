<?php

/* node_modules/es5-ext/test/function/constant.js */
class __TwigTemplate_638f1f2652221c7fd69682a6deaf8278bb6f68ed0a0cec3276b05770f8433f35 extends Twig_Template
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
        $__internal_fd03b421c6efa4ef71a90ba578a567b6b85acf2ab45169a58d7bcb1faf5ae540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd03b421c6efa4ef71a90ba578a567b6b85acf2ab45169a58d7bcb1faf5ae540->enter($__internal_fd03b421c6efa4ef71a90ba578a567b6b85acf2ab45169a58d7bcb1faf5ae540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/constant.js"));

        // line 1
        echo "\"use strict\";

var o = {};

module.exports = function (t, a) {
\ta(t(o)(), o);
};
";
        
        $__internal_fd03b421c6efa4ef71a90ba578a567b6b85acf2ab45169a58d7bcb1faf5ae540->leave($__internal_fd03b421c6efa4ef71a90ba578a567b6b85acf2ab45169a58d7bcb1faf5ae540_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/constant.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var o = {};

module.exports = function (t, a) {
\ta(t(o)(), o);
};
", "node_modules/es5-ext/test/function/constant.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/constant.js");
    }
}
