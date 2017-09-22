<?php

/* node_modules/es5-ext/test/math/sign/implement.js */
class __TwigTemplate_bdebb6deaa0cff0f436353f8c02c787789df64ea1f3e7505030b8cd930576d99 extends Twig_Template
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
        $__internal_18a60c133adb72e9f91df53d8453ded9e68e685f422326602c20999022b3e91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a60c133adb72e9f91df53d8453ded9e68e685f422326602c20999022b3e91a->enter($__internal_18a60c133adb72e9f91df53d8453ded9e68e685f422326602c20999022b3e91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/sign/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/sign/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_18a60c133adb72e9f91df53d8453ded9e68e685f422326602c20999022b3e91a->leave($__internal_18a60c133adb72e9f91df53d8453ded9e68e685f422326602c20999022b3e91a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/sign/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/sign/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/sign/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/sign/implement.js");
    }
}
