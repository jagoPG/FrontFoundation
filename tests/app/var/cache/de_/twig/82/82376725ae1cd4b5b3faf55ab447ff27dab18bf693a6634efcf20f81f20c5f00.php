<?php

/* node_modules/es5-ext/object/validate-array-like.js */
class __TwigTemplate_dba061905f2b8177a6eed28f60e173a8ee223d66f44eeb0a63110bea766c6434 extends Twig_Template
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
        $__internal_d83783729e304e484d09c7324d39bfad3a23e216ecbbde834854dca6234ed31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83783729e304e484d09c7324d39bfad3a23e216ecbbde834854dca6234ed31e->enter($__internal_d83783729e304e484d09c7324d39bfad3a23e216ecbbde834854dca6234ed31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/validate-array-like.js"));

        // line 1
        echo "\"use strict\";

var isArrayLike = require(\"./is-array-like\");

module.exports = function (obj) {
\tif (isArrayLike(obj)) return obj;
\tthrow new TypeError(obj + \" is not array-like value\");
};
";
        
        $__internal_d83783729e304e484d09c7324d39bfad3a23e216ecbbde834854dca6234ed31e->leave($__internal_d83783729e304e484d09c7324d39bfad3a23e216ecbbde834854dca6234ed31e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/validate-array-like.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isArrayLike = require(\"./is-array-like\");

module.exports = function (obj) {
\tif (isArrayLike(obj)) return obj;
\tthrow new TypeError(obj + \" is not array-like value\");
};
", "node_modules/es5-ext/object/validate-array-like.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/validate-array-like.js");
    }
}
