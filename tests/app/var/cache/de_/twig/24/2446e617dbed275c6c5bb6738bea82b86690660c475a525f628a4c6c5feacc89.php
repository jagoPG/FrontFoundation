<?php

/* node_modules/es5-ext/array/#/find/is-implemented.js */
class __TwigTemplate_8717f2608260d38650f9cffd2a1be2462d56599fc7e019097d00d4019529bdea extends Twig_Template
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
        $__internal_e13b7b0f9fa5610c347f8a9170381944d7f1bdd7151ef9ce3080117305218306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13b7b0f9fa5610c347f8a9170381944d7f1bdd7151ef9ce3080117305218306->enter($__internal_e13b7b0f9fa5610c347f8a9170381944d7f1bdd7151ef9ce3080117305218306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/find/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var fn = function (value) {
\treturn value > 3;
};

module.exports = function () {
\tvar arr = [1, 2, 3, 4, 5, 6];
\tif (typeof arr.find !== \"function\") return false;
\treturn arr.find(fn) === 4;
};
";
        
        $__internal_e13b7b0f9fa5610c347f8a9170381944d7f1bdd7151ef9ce3080117305218306->leave($__internal_e13b7b0f9fa5610c347f8a9170381944d7f1bdd7151ef9ce3080117305218306_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/find/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var fn = function (value) {
\treturn value > 3;
};

module.exports = function () {
\tvar arr = [1, 2, 3, 4, 5, 6];
\tif (typeof arr.find !== \"function\") return false;
\treturn arr.find(fn) === 4;
};
", "node_modules/es5-ext/array/#/find/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/find/is-implemented.js");
    }
}
