<?php

/* node_modules/es5-ext/math/fround/is-implemented.js */
class __TwigTemplate_e30d21257705a310424ec60ae3370ecea6f1d5160a04103db42df050f76dee93 extends Twig_Template
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
        $__internal_9258cc00505d90a20430207697bc685ca6ecd78349e18ae470b626a2b1a6db27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9258cc00505d90a20430207697bc685ca6ecd78349e18ae470b626a2b1a6db27->enter($__internal_9258cc00505d90a20430207697bc685ca6ecd78349e18ae470b626a2b1a6db27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/fround/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar fround = Math.fround;
\tif (typeof fround !== \"function\") return false;
\treturn fround(1.337) === 1.3370000123977661;
};
";
        
        $__internal_9258cc00505d90a20430207697bc685ca6ecd78349e18ae470b626a2b1a6db27->leave($__internal_9258cc00505d90a20430207697bc685ca6ecd78349e18ae470b626a2b1a6db27_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/fround/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar fround = Math.fround;
\tif (typeof fround !== \"function\") return false;
\treturn fround(1.337) === 1.3370000123977661;
};
", "node_modules/es5-ext/math/fround/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/fround/is-implemented.js");
    }
}
