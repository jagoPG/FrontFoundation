<?php

/* node_modules/es5-ext/object/valid-object.js */
class __TwigTemplate_4246a79d3b402c2a590e40f08dcf5d0ea8b2a1316505d7611a41e25866f17043 extends Twig_Template
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
        $__internal_9d3cc776fb937ff9b1f2134d022e3d0692772daf6d9b65f7a4cf046350702ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3cc776fb937ff9b1f2134d022e3d0692772daf6d9b65f7a4cf046350702ef4->enter($__internal_9d3cc776fb937ff9b1f2134d022e3d0692772daf6d9b65f7a4cf046350702ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/valid-object.js"));

        // line 1
        echo "\"use strict\";

var isObject = require(\"./is-object\");

module.exports = function (value) {
\tif (!isObject(value)) throw new TypeError(value + \" is not an Object\");
\treturn value;
};
";
        
        $__internal_9d3cc776fb937ff9b1f2134d022e3d0692772daf6d9b65f7a4cf046350702ef4->leave($__internal_9d3cc776fb937ff9b1f2134d022e3d0692772daf6d9b65f7a4cf046350702ef4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/valid-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isObject = require(\"./is-object\");

module.exports = function (value) {
\tif (!isObject(value)) throw new TypeError(value + \" is not an Object\");
\treturn value;
};
", "node_modules/es5-ext/object/valid-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/valid-object.js");
    }
}
