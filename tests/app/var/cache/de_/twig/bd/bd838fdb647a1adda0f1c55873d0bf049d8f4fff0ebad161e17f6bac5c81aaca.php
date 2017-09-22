<?php

/* node_modules/es5-ext/test/string/#/repeat/implement.js */
class __TwigTemplate_a19cb0de34dce1fc442e2c35531dd686ba6ccf381f5ea47ccdb5a0d85f54c12c extends Twig_Template
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
        $__internal_2838b346f2113d589590260ba09d0a2c6dfde44a351daa7b27643646aaf5e305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2838b346f2113d589590260ba09d0a2c6dfde44a351daa7b27643646aaf5e305->enter($__internal_2838b346f2113d589590260ba09d0a2c6dfde44a351daa7b27643646aaf5e305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/repeat/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../string/#/repeat/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_2838b346f2113d589590260ba09d0a2c6dfde44a351daa7b27643646aaf5e305->leave($__internal_2838b346f2113d589590260ba09d0a2c6dfde44a351daa7b27643646aaf5e305_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/repeat/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../string/#/repeat/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/#/repeat/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/repeat/implement.js");
    }
}
