<?php

/* node_modules/es5-ext/object/set-prototype-of/is-implemented.js */
class __TwigTemplate_39970d19cef123151f5f6cbeae9787db45ccc4f5223620bce0c959c7d346137d extends Twig_Template
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
        $__internal_7dfa553fe0f7dca8bee6b81bdf5596e61b9b28e7cf41b91a9ac3407a9dfa6c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfa553fe0f7dca8bee6b81bdf5596e61b9b28e7cf41b91a9ac3407a9dfa6c75->enter($__internal_7dfa553fe0f7dca8bee6b81bdf5596e61b9b28e7cf41b91a9ac3407a9dfa6c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/set-prototype-of/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var create = Object.create, getPrototypeOf = Object.getPrototypeOf, plainObject = {};

module.exports = function (/* CustomCreate*/) {
\tvar setPrototypeOf = Object.setPrototypeOf, customCreate = arguments[0] || create;
\tif (typeof setPrototypeOf !== \"function\") return false;
\treturn getPrototypeOf(setPrototypeOf(customCreate(null), plainObject)) === plainObject;
};
";
        
        $__internal_7dfa553fe0f7dca8bee6b81bdf5596e61b9b28e7cf41b91a9ac3407a9dfa6c75->leave($__internal_7dfa553fe0f7dca8bee6b81bdf5596e61b9b28e7cf41b91a9ac3407a9dfa6c75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/set-prototype-of/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var create = Object.create, getPrototypeOf = Object.getPrototypeOf, plainObject = {};

module.exports = function (/* CustomCreate*/) {
\tvar setPrototypeOf = Object.setPrototypeOf, customCreate = arguments[0] || create;
\tif (typeof setPrototypeOf !== \"function\") return false;
\treturn getPrototypeOf(setPrototypeOf(customCreate(null), plainObject)) === plainObject;
};
", "node_modules/es5-ext/object/set-prototype-of/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/set-prototype-of/is-implemented.js");
    }
}
