<?php

/* node_modules/es5-ext/test/array/#/entries/is-implemented.js */
class __TwigTemplate_966368332e50ff2220cb5e94161ba5ac4c5b8734c4b7e08351bd5045e4b8d22e extends Twig_Template
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
        $__internal_0a2d071ab7b1d08226e42e3e3b2edfe7290836d483b05479ddacb62480d14de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2d071ab7b1d08226e42e3e3b2edfe7290836d483b05479ddacb62480d14de9->enter($__internal_0a2d071ab7b1d08226e42e3e3b2edfe7290836d483b05479ddacb62480d14de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/entries/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_0a2d071ab7b1d08226e42e3e3b2edfe7290836d483b05479ddacb62480d14de9->leave($__internal_0a2d071ab7b1d08226e42e3e3b2edfe7290836d483b05479ddacb62480d14de9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/entries/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/array/#/entries/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/entries/is-implemented.js");
    }
}
