<?php

/* node_modules/es5-ext/test/array/#/fill/shim.js */
class __TwigTemplate_b2c9fd5c912fe173fad2e476161e03ea55ae9da94f7ea34b5efdaccac4987c40 extends Twig_Template
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
        $__internal_e3563001954b043572ad77a3213cf8a2e76150fd0487bc48b897dbc8df356d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3563001954b043572ad77a3213cf8a2e76150fd0487bc48b897dbc8df356d35->enter($__internal_e3563001954b043572ad77a3213cf8a2e76150fd0487bc48b897dbc8df356d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/fill/shim.js"));

        // line 1
        echo "// Taken from https://github.com/paulmillr/es6-shim/blob/master/test/array.js

\"use strict\";

module.exports = function (t, a) {
\tvar x;

\tx = [1, 2, 3, 4, 5, 6];
\ta(t.call(x, -1), x, \"Returns self object\");
\ta.deep(x, [-1, -1, -1, -1, -1, -1], \"Value\");

\ta.deep(t.call([1, 2, 3, 4, 5, 6], -1, 3), [1, 2, 3, -1, -1, -1],
\t\t\"Positive start\");
\ta.deep(t.call([1, 2, 3, 4, 5, 6], -1, -3), [1, 2, 3, -1, -1, -1],
\t\t\"Negative start\");
\ta.deep(t.call([1, 2, 3, 4, 5, 6], -1, 9), [1, 2, 3, 4, 5, 6],
\t\t\"Large start\");
};
";
        
        $__internal_e3563001954b043572ad77a3213cf8a2e76150fd0487bc48b897dbc8df356d35->leave($__internal_e3563001954b043572ad77a3213cf8a2e76150fd0487bc48b897dbc8df356d35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/fill/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Taken from https://github.com/paulmillr/es6-shim/blob/master/test/array.js

\"use strict\";

module.exports = function (t, a) {
\tvar x;

\tx = [1, 2, 3, 4, 5, 6];
\ta(t.call(x, -1), x, \"Returns self object\");
\ta.deep(x, [-1, -1, -1, -1, -1, -1], \"Value\");

\ta.deep(t.call([1, 2, 3, 4, 5, 6], -1, 3), [1, 2, 3, -1, -1, -1],
\t\t\"Positive start\");
\ta.deep(t.call([1, 2, 3, 4, 5, 6], -1, -3), [1, 2, 3, -1, -1, -1],
\t\t\"Negative start\");
\ta.deep(t.call([1, 2, 3, 4, 5, 6], -1, 9), [1, 2, 3, 4, 5, 6],
\t\t\"Large start\");
};
", "node_modules/es5-ext/test/array/#/fill/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/fill/shim.js");
    }
}
