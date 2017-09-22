<?php

/* node_modules/es5-ext/string/#/capitalize.js */
class __TwigTemplate_56a74eff4000952f9a34814eb8f69fa5ce103bdb1b279edeb5804a211b283ebc extends Twig_Template
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
        $__internal_801b48ac2a565580d2efc8e962d44eb3faeef491603030505171ee60ffe15753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801b48ac2a565580d2efc8e962d44eb3faeef491603030505171ee60ffe15753->enter($__internal_801b48ac2a565580d2efc8e962d44eb3faeef491603030505171ee60ffe15753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/capitalize.js"));

        // line 1
        echo "\"use strict\";

var value = require(\"../../object/valid-value\");

module.exports = function () {
\tvar str = String(value(this));
\treturn str.charAt(0).toUpperCase() + str.slice(1);
};
";
        
        $__internal_801b48ac2a565580d2efc8e962d44eb3faeef491603030505171ee60ffe15753->leave($__internal_801b48ac2a565580d2efc8e962d44eb3faeef491603030505171ee60ffe15753_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/capitalize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value = require(\"../../object/valid-value\");

module.exports = function () {
\tvar str = String(value(this));
\treturn str.charAt(0).toUpperCase() + str.slice(1);
};
", "node_modules/es5-ext/string/#/capitalize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/capitalize.js");
    }
}
