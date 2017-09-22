<?php

/* node_modules/es5-ext/test/number/is-integer/implement.js */
class __TwigTemplate_407d94fb00eb83e37c895271aa6dc4a107918067d43c5ba2976136d7e258c061 extends Twig_Template
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
        $__internal_7abd331077b58095f01b14a9e35882bcb264090fb63e60a6d40d7483372fdc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abd331077b58095f01b14a9e35882bcb264090fb63e60a6d40d7483372fdc03->enter($__internal_7abd331077b58095f01b14a9e35882bcb264090fb63e60a6d40d7483372fdc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-integer/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../number/is-integer/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_7abd331077b58095f01b14a9e35882bcb264090fb63e60a6d40d7483372fdc03->leave($__internal_7abd331077b58095f01b14a9e35882bcb264090fb63e60a6d40d7483372fdc03_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-integer/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../number/is-integer/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/number/is-integer/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-integer/implement.js");
    }
}
