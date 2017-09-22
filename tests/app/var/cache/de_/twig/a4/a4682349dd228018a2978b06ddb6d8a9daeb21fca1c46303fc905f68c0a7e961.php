<?php

/* node_modules/es5-ext/test/iterable/is.js */
class __TwigTemplate_f983ffc4acfa92b2c770fcf94bf8ed856332dacaebbd60311f6547e5cf4a88a8 extends Twig_Template
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
        $__internal_508309937715dc9dcc1f049edbfd2df34ed525eec3fcde55e2aaac48a2fdb5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508309937715dc9dcc1f049edbfd2df34ed525eec3fcde55e2aaac48a2fdb5bb->enter($__internal_508309937715dc9dcc1f049edbfd2df34ed525eec3fcde55e2aaac48a2fdb5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/iterable/is.js"));

        // line 1
        echo "\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function (t, a) {
\tvar x;
\ta(t([]), true, \"Array\");
\ta(t(\"\"), true, \"String\");
\ta(t((function () {
 return arguments;
}())), true, \"Arguments\");
\ta(t({ length: 0 }), true, \"List object\");
\ta(t(function () {}), false, \"Function\");
\ta(t({}), false, \"Plain object\");
\ta(t(/raz/), false, \"Regexp\");
\ta(t(), false, \"No argument\");
\ta(t(null), false, \"Null\");
\ta(t(undefined), false, \"Undefined\");
\tx = {};
\tx[iteratorSymbol] = function () {};
\ta(t(x), true, \"Iterable\");
};
";
        
        $__internal_508309937715dc9dcc1f049edbfd2df34ed525eec3fcde55e2aaac48a2fdb5bb->leave($__internal_508309937715dc9dcc1f049edbfd2df34ed525eec3fcde55e2aaac48a2fdb5bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/iterable/is.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function (t, a) {
\tvar x;
\ta(t([]), true, \"Array\");
\ta(t(\"\"), true, \"String\");
\ta(t((function () {
 return arguments;
}())), true, \"Arguments\");
\ta(t({ length: 0 }), true, \"List object\");
\ta(t(function () {}), false, \"Function\");
\ta(t({}), false, \"Plain object\");
\ta(t(/raz/), false, \"Regexp\");
\ta(t(), false, \"No argument\");
\ta(t(null), false, \"Null\");
\ta(t(undefined), false, \"Undefined\");
\tx = {};
\tx[iteratorSymbol] = function () {};
\ta(t(x), true, \"Iterable\");
};
", "node_modules/es5-ext/test/iterable/is.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/iterable/is.js");
    }
}
