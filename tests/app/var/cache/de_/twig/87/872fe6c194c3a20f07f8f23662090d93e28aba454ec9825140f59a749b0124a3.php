<?php

/* node_modules/es5-ext/object/ensure-promise.js */
class __TwigTemplate_df09318b309647428fec746030ada26faf3f3d6bd58c487e6aa8af021d2a4c03 extends Twig_Template
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
        $__internal_7cfec37769ea24692ad1867294be4c7de6c597a3f4da1fe28ee0c17d94a5374e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfec37769ea24692ad1867294be4c7de6c597a3f4da1fe28ee0c17d94a5374e->enter($__internal_7cfec37769ea24692ad1867294be4c7de6c597a3f4da1fe28ee0c17d94a5374e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/ensure-promise.js"));

        // line 1
        echo "\"use strict\";

var safeToString = require(\"../safe-to-string\")
  , isPromise    = require(\"./is-promise\");

module.exports = function (value) {
\tif (!isPromise(value)) throw new TypeError(safeToString(value) + \" is not a thenable\");
\treturn value;
};
";
        
        $__internal_7cfec37769ea24692ad1867294be4c7de6c597a3f4da1fe28ee0c17d94a5374e->leave($__internal_7cfec37769ea24692ad1867294be4c7de6c597a3f4da1fe28ee0c17d94a5374e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/ensure-promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var safeToString = require(\"../safe-to-string\")
  , isPromise    = require(\"./is-promise\");

module.exports = function (value) {
\tif (!isPromise(value)) throw new TypeError(safeToString(value) + \" is not a thenable\");
\treturn value;
};
", "node_modules/es5-ext/object/ensure-promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/ensure-promise.js");
    }
}
