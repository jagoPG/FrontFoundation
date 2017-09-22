<?php

/* node_modules/es5-ext/string/raw/is-implemented.js */
class __TwigTemplate_5dbf365c6883b7ed3da66c0614a313d27ca40a08884a9dbadbfd94f4db459063 extends Twig_Template
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
        $__internal_be8e8f2d76e2fef9ac79df2418476cf3f543ae2ffd1a952f04847c1be205eb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e8f2d76e2fef9ac79df2418476cf3f543ae2ffd1a952f04847c1be205eb6a->enter($__internal_be8e8f2d76e2fef9ac79df2418476cf3f543ae2ffd1a952f04847c1be205eb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/raw/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar raw = String.raw, test;
\tif (typeof raw !== \"function\") return false;
\ttest = [\"foo\\nbar\", \"marko\\n\"];
\ttest.raw = [\"foo\\\\nbar\", \"marko\\\\n\"];
\treturn raw(test, \"INSE\\nRT\") === \"foo\\\\nbarINSE\\nRTmarko\\\\n\";
};
";
        
        $__internal_be8e8f2d76e2fef9ac79df2418476cf3f543ae2ffd1a952f04847c1be205eb6a->leave($__internal_be8e8f2d76e2fef9ac79df2418476cf3f543ae2ffd1a952f04847c1be205eb6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/raw/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar raw = String.raw, test;
\tif (typeof raw !== \"function\") return false;
\ttest = [\"foo\\nbar\", \"marko\\n\"];
\ttest.raw = [\"foo\\\\nbar\", \"marko\\\\n\"];
\treturn raw(test, \"INSE\\nRT\") === \"foo\\\\nbarINSE\\nRTmarko\\\\n\";
};
", "node_modules/es5-ext/string/raw/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/raw/is-implemented.js");
    }
}
