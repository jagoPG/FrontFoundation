<?php

/* node_modules/es5-ext/test/function/#/compose.js */
class __TwigTemplate_b3bac74428b954f1e628d4e3584e21e5ef93299d9c646385f559f1f31dd8a018 extends Twig_Template
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
        $__internal_165238e748ce44dd782821ca70d51cdfd5704941dc5d5883ae56d40d6146fc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165238e748ce44dd782821ca70d51cdfd5704941dc5d5883ae56d40d6146fc10->enter($__internal_165238e748ce44dd782821ca70d51cdfd5704941dc5d5883ae56d40d6146fc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/#/compose.js"));

        // line 1
        echo "\"use strict\";

var f = function (a, b) {
 return [\"a\", arguments.length, a, b];
}
  , g = function (a) {
 return [\"b\", arguments.length].concat(a);
}
  , h = function (a) {
 return [\"c\", arguments.length].concat(a);
};

module.exports = function (t, a) {
\ta.deep(t.call(h, g, f)(1, 2), [\"c\", 1, \"b\", 1, \"a\", 2, 1, 2]);
};
";
        
        $__internal_165238e748ce44dd782821ca70d51cdfd5704941dc5d5883ae56d40d6146fc10->leave($__internal_165238e748ce44dd782821ca70d51cdfd5704941dc5d5883ae56d40d6146fc10_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/#/compose.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var f = function (a, b) {
 return [\"a\", arguments.length, a, b];
}
  , g = function (a) {
 return [\"b\", arguments.length].concat(a);
}
  , h = function (a) {
 return [\"c\", arguments.length].concat(a);
};

module.exports = function (t, a) {
\ta.deep(t.call(h, g, f)(1, 2), [\"c\", 1, \"b\", 1, \"a\", 2, 1, 2]);
};
", "node_modules/es5-ext/test/function/#/compose.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/#/compose.js");
    }
}
