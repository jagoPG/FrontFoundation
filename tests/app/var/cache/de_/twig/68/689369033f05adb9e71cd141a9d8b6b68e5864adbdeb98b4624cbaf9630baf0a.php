<?php

/* node_modules/es5-ext/test/array/to-array.js */
class __TwigTemplate_9bb7ef49b7ba0d36d9ff3f65cbc9f71669c8afcebc5f9768e73a0278f036af3f extends Twig_Template
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
        $__internal_0967e476a089067a073552aa4dff56d368b4d6934ad4dec2b14540979056b3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0967e476a089067a073552aa4dff56d368b4d6934ad4dec2b14540979056b3b8->enter($__internal_0967e476a089067a073552aa4dff56d368b4d6934ad4dec2b14540979056b3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/to-array.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o = [1, 2, 3];
\ta(t(o), o, \"Array\");
\ta.deep(t(\"12r3v\"), [\"1\", \"2\", \"r\", \"3\", \"v\"], \"String\");
\ta.deep(t((function () {
 return arguments;
}(3, o, \"raz\"))),
\t\t[3, o, \"raz\"], \"Arguments\");
\ta.deep(t((function () {
 return arguments;
}(3))), [3],
\t\t\"Arguments with one numeric value\");

\ta.deep(t({ 0: \"raz\", 1: \"dwa\", length: 2 }), [\"raz\", \"dwa\"], \"Other\");
};
";
        
        $__internal_0967e476a089067a073552aa4dff56d368b4d6934ad4dec2b14540979056b3b8->leave($__internal_0967e476a089067a073552aa4dff56d368b4d6934ad4dec2b14540979056b3b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/to-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o = [1, 2, 3];
\ta(t(o), o, \"Array\");
\ta.deep(t(\"12r3v\"), [\"1\", \"2\", \"r\", \"3\", \"v\"], \"String\");
\ta.deep(t((function () {
 return arguments;
}(3, o, \"raz\"))),
\t\t[3, o, \"raz\"], \"Arguments\");
\ta.deep(t((function () {
 return arguments;
}(3))), [3],
\t\t\"Arguments with one numeric value\");

\ta.deep(t({ 0: \"raz\", 1: \"dwa\", length: 2 }), [\"raz\", \"dwa\"], \"Other\");
};
", "node_modules/es5-ext/test/array/to-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/to-array.js");
    }
}
