<?php

/* node_modules/es5-ext/test/string/#/@@iterator/shim.js */
class __TwigTemplate_6f2407be9f05a0c790f2e0cede7c8119f947143f212f5e9c76dfcefdeb846001 extends Twig_Template
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
        $__internal_4cce19bb9d1214c5b4a53e26bbc221d579458d0c7e135cae58d189e52a8c00ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cce19bb9d1214c5b4a53e26bbc221d579458d0c7e135cae58d189e52a8c00ff->enter($__internal_4cce19bb9d1214c5b4a53e26bbc221d579458d0c7e135cae58d189e52a8c00ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/@@iterator/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar it = t.call(\"r💩z\");
\ta.deep(it.next(), { done: false, value: \"r\" }, \"#1\");
\ta.deep(it.next(), { done: false, value: \"💩\" }, \"#2\");
\ta.deep(it.next(), { done: false, value: \"z\" }, \"#3\");
\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
};
";
        
        $__internal_4cce19bb9d1214c5b4a53e26bbc221d579458d0c7e135cae58d189e52a8c00ff->leave($__internal_4cce19bb9d1214c5b4a53e26bbc221d579458d0c7e135cae58d189e52a8c00ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/@@iterator/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar it = t.call(\"r💩z\");
\ta.deep(it.next(), { done: false, value: \"r\" }, \"#1\");
\ta.deep(it.next(), { done: false, value: \"💩\" }, \"#2\");
\ta.deep(it.next(), { done: false, value: \"z\" }, \"#3\");
\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
};
", "node_modules/es5-ext/test/string/#/@@iterator/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/@@iterator/shim.js");
    }
}
