<?php

/* node_modules/es5-ext/object/keys/shim.js */
class __TwigTemplate_43ffe20b0077409f7860c4ae575b59e89316be2c74578b61445e9987b7418fc4 extends Twig_Template
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
        $__internal_14efd74030294e80d4f5974effad4ba22b05591ffa82185f8bcd9fb4c957d4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14efd74030294e80d4f5974effad4ba22b05591ffa82185f8bcd9fb4c957d4dd->enter($__internal_14efd74030294e80d4f5974effad4ba22b05591ffa82185f8bcd9fb4c957d4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/keys/shim.js"));

        // line 1
        echo "\"use strict\";

var isValue = require(\"../is-value\");

var keys = Object.keys;

module.exports = function (object) {
\treturn keys(isValue(object) ? Object(object) : object);
};
";
        
        $__internal_14efd74030294e80d4f5974effad4ba22b05591ffa82185f8bcd9fb4c957d4dd->leave($__internal_14efd74030294e80d4f5974effad4ba22b05591ffa82185f8bcd9fb4c957d4dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/keys/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isValue = require(\"../is-value\");

var keys = Object.keys;

module.exports = function (object) {
\treturn keys(isValue(object) ? Object(object) : object);
};
", "node_modules/es5-ext/object/keys/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/keys/shim.js");
    }
}
