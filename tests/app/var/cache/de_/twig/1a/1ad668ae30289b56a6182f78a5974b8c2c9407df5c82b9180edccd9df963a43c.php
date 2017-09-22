<?php

/* node_modules/es5-ext/test/object/assign/shim.js */
class __TwigTemplate_101e6f2b7217145762abf5d57bdcfe06f13469d030589b43237823933570fcdc extends Twig_Template
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
        $__internal_97c73e9085e77d9016d74535b1a85468de6413f85266cb9fd595c596354ffe82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c73e9085e77d9016d74535b1a85468de6413f85266cb9fd595c596354ffe82->enter($__internal_97c73e9085e77d9016d74535b1a85468de6413f85266cb9fd595c596354ffe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/assign/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o1 = { a: 1, b: 2 }
\t  , o2 = { b: 3, c: 4 };

\ta(t(o1, o2), o1, \"Returns self\");
\ta.deep(o1, { a: 1, b: 3, c: 4 }, \"Single: content\");

\ta.deep(t({}, o1, o2), { a: 1, b: 3, c: 4 }, \"Multi argument\");
};
";
        
        $__internal_97c73e9085e77d9016d74535b1a85468de6413f85266cb9fd595c596354ffe82->leave($__internal_97c73e9085e77d9016d74535b1a85468de6413f85266cb9fd595c596354ffe82_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/assign/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o1 = { a: 1, b: 2 }
\t  , o2 = { b: 3, c: 4 };

\ta(t(o1, o2), o1, \"Returns self\");
\ta.deep(o1, { a: 1, b: 3, c: 4 }, \"Single: content\");

\ta.deep(t({}, o1, o2), { a: 1, b: 3, c: 4 }, \"Multi argument\");
};
", "node_modules/es5-ext/test/object/assign/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/assign/shim.js");
    }
}
