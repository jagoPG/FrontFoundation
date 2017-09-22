<?php

/* node_modules/es5-ext/test/error/custom.js */
class __TwigTemplate_73753f46421734a5efa687d8e30d36fd22730a07fb935d53418b8c48fcec024a extends Twig_Template
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
        $__internal_d9380a8a8bb2bb1ad346abb443c1386d655c2a6ac9c2079ff255e937e3fd436d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9380a8a8bb2bb1ad346abb443c1386d655c2a6ac9c2079ff255e937e3fd436d->enter($__internal_d9380a8a8bb2bb1ad346abb443c1386d655c2a6ac9c2079ff255e937e3fd436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/error/custom.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar T = t, err = new T(\"My Error\", \"MY_ERROR\", { errno: 123 });
\ta(err instanceof Error, true, \"Instance of error\");
\ta(err.constructor, Error, \"Constructor\");
\ta(err.name, \"Error\", \"Name\");
\ta(String(err), \"Error: My Error\", \"String representation\");
\ta(err.code, \"MY_ERROR\", \"Code\");
\ta(err.errno, 123, \"Errno\");
\ta(typeof err.stack, \"string\", \"Stack trace\");
};
";
        
        $__internal_d9380a8a8bb2bb1ad346abb443c1386d655c2a6ac9c2079ff255e937e3fd436d->leave($__internal_d9380a8a8bb2bb1ad346abb443c1386d655c2a6ac9c2079ff255e937e3fd436d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/error/custom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar T = t, err = new T(\"My Error\", \"MY_ERROR\", { errno: 123 });
\ta(err instanceof Error, true, \"Instance of error\");
\ta(err.constructor, Error, \"Constructor\");
\ta(err.name, \"Error\", \"Name\");
\ta(String(err), \"Error: My Error\", \"String representation\");
\ta(err.code, \"MY_ERROR\", \"Code\");
\ta(err.errno, 123, \"Errno\");
\ta(typeof err.stack, \"string\", \"Stack trace\");
};
", "node_modules/es5-ext/test/error/custom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/error/custom.js");
    }
}
