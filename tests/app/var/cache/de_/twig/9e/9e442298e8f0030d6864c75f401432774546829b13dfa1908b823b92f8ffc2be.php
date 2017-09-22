<?php

/* node_modules/es5-ext/array/#/find-index/is-implemented.js */
class __TwigTemplate_28268516882b8b868a69bf9a668834891aa6aa5248abf141c1aea1c860f08e29 extends Twig_Template
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
        $__internal_051fed9fdd245c66ae736932f141dc8ac2f2e7b7e2ae628ece4369ccde1554e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051fed9fdd245c66ae736932f141dc8ac2f2e7b7e2ae628ece4369ccde1554e7->enter($__internal_051fed9fdd245c66ae736932f141dc8ac2f2e7b7e2ae628ece4369ccde1554e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/find-index/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var fn = function (value) {
\treturn value > 3;
};

module.exports = function () {
\tvar arr = [1, 2, 3, 4, 5, 6];
\tif (typeof arr.findIndex !== \"function\") return false;
\treturn arr.findIndex(fn) === 3;
};
";
        
        $__internal_051fed9fdd245c66ae736932f141dc8ac2f2e7b7e2ae628ece4369ccde1554e7->leave($__internal_051fed9fdd245c66ae736932f141dc8ac2f2e7b7e2ae628ece4369ccde1554e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/find-index/is-implemented.js";
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
\tif (typeof arr.findIndex !== \"function\") return false;
\treturn arr.findIndex(fn) === 3;
};
", "node_modules/es5-ext/array/#/find-index/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/find-index/is-implemented.js");
    }
}
