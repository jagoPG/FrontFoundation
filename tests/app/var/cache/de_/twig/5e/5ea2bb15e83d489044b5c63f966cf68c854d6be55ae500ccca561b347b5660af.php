<?php

/* node_modules/es5-ext/test/array/#/map/is-implemented.js */
class __TwigTemplate_bf49a4e256f35aaf748e2cf84d36555b9f8d169356ffbffd02975b90815dccd0 extends Twig_Template
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
        $__internal_cfa43b058620ceeec793eb658e43c645c22f674fe284ebd2c2840847bea804d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa43b058620ceeec793eb658e43c645c22f674fe284ebd2c2840847bea804d8->enter($__internal_cfa43b058620ceeec793eb658e43c645c22f674fe284ebd2c2840847bea804d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/map/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_cfa43b058620ceeec793eb658e43c645c22f674fe284ebd2c2840847bea804d8->leave($__internal_cfa43b058620ceeec793eb658e43c645c22f674fe284ebd2c2840847bea804d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/map/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/array/#/map/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/map/is-implemented.js");
    }
}
