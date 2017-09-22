<?php

/* node_modules/es5-ext/object/find.js */
class __TwigTemplate_e7e157f4a3f3114275f8dcb1b26e488897b402751464d21f4c8259ebee118aa9 extends Twig_Template
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
        $__internal_fa4e0eefc5e605de2de0f9f0ce6e87b70e186355c390f207a142fbf544c4b47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4e0eefc5e605de2de0f9f0ce6e87b70e186355c390f207a142fbf544c4b47d->enter($__internal_fa4e0eefc5e605de2de0f9f0ce6e87b70e186355c390f207a142fbf544c4b47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/find.js"));

        // line 1
        echo "\"use strict\";

var findKey = require(\"./find-key\")
  , isValue = require(\"./is-value\");

// eslint-disable-next-line no-unused-vars
module.exports = function (obj, cb /*, thisArg, compareFn*/) {
\tvar key = findKey.apply(this, arguments);
\treturn isValue(key) ? obj[key] : key;
};
";
        
        $__internal_fa4e0eefc5e605de2de0f9f0ce6e87b70e186355c390f207a142fbf544c4b47d->leave($__internal_fa4e0eefc5e605de2de0f9f0ce6e87b70e186355c390f207a142fbf544c4b47d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/find.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var findKey = require(\"./find-key\")
  , isValue = require(\"./is-value\");

// eslint-disable-next-line no-unused-vars
module.exports = function (obj, cb /*, thisArg, compareFn*/) {
\tvar key = findKey.apply(this, arguments);
\treturn isValue(key) ? obj[key] : key;
};
", "node_modules/es5-ext/object/find.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/find.js");
    }
}
