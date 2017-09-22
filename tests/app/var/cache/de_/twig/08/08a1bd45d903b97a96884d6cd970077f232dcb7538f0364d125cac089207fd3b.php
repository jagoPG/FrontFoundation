<?php

/* node_modules/es5-ext/test/object/assign/implement.js */
class __TwigTemplate_0063e4397287a6f69db1323e4e66f2336ba401bd05b35b0343452582bfe0f888 extends Twig_Template
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
        $__internal_1b95bbe08bc5ac047d51577f417939e374a89c457e68f5bad9ce6bdd890aa354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b95bbe08bc5ac047d51577f417939e374a89c457e68f5bad9ce6bdd890aa354->enter($__internal_1b95bbe08bc5ac047d51577f417939e374a89c457e68f5bad9ce6bdd890aa354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/assign/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../object/assign/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_1b95bbe08bc5ac047d51577f417939e374a89c457e68f5bad9ce6bdd890aa354->leave($__internal_1b95bbe08bc5ac047d51577f417939e374a89c457e68f5bad9ce6bdd890aa354_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/assign/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../object/assign/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/object/assign/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/assign/implement.js");
    }
}
