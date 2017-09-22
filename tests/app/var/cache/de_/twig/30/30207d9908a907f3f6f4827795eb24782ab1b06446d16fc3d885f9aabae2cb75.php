<?php

/* node_modules/es5-ext/test/error/is-error.js */
class __TwigTemplate_3caf00439130e7b20ce7d6c244a89155125d3a4bdb6cf315bd540c6069c4a552 extends Twig_Template
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
        $__internal_8a84054d8016f7e575a2c193799c40b5b0e68ebeb8dce2f5aca61d10c8d6644a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a84054d8016f7e575a2c193799c40b5b0e68ebeb8dce2f5aca61d10c8d6644a->enter($__internal_8a84054d8016f7e575a2c193799c40b5b0e68ebeb8dce2f5aca61d10c8d6644a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/error/is-error.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(), false, \"Undefined\");
\ta(t(1), false, \"Primitive\");
\ta(t({}), false, \"Objectt\");
\ta(t({ toString: function () {
 return \"[object Error]\";
} }), false,
\t\t\"Fake error\");
\ta(t(new Error()), true, \"Error\");
\ta(t(new EvalError()), true, \"EvalError\");
\ta(t(new RangeError()), true, \"RangeError\");
\ta(t(new ReferenceError()), true, \"ReferenceError\");
\ta(t(new SyntaxError()), true, \"SyntaxError\");
\ta(t(new TypeError()), true, \"TypeError\");
\ta(t(new URIError()), true, \"URIError\");
};
";
        
        $__internal_8a84054d8016f7e575a2c193799c40b5b0e68ebeb8dce2f5aca61d10c8d6644a->leave($__internal_8a84054d8016f7e575a2c193799c40b5b0e68ebeb8dce2f5aca61d10c8d6644a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/error/is-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(), false, \"Undefined\");
\ta(t(1), false, \"Primitive\");
\ta(t({}), false, \"Objectt\");
\ta(t({ toString: function () {
 return \"[object Error]\";
} }), false,
\t\t\"Fake error\");
\ta(t(new Error()), true, \"Error\");
\ta(t(new EvalError()), true, \"EvalError\");
\ta(t(new RangeError()), true, \"RangeError\");
\ta(t(new ReferenceError()), true, \"ReferenceError\");
\ta(t(new SyntaxError()), true, \"SyntaxError\");
\ta(t(new TypeError()), true, \"TypeError\");
\ta(t(new URIError()), true, \"URIError\");
};
", "node_modules/es5-ext/test/error/is-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/error/is-error.js");
    }
}
