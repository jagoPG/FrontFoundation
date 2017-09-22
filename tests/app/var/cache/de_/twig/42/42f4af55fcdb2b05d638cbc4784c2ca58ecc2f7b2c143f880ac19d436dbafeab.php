<?php

/* node_modules/es5-ext/math/expm1/is-implemented.js */
class __TwigTemplate_4f40bf335ea0de9027bbb8f5be2af6309e553e488dbab0322b79b2b704b71d68 extends Twig_Template
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
        $__internal_9987bdac395aea4d184ef43a642ff377e166b9728d77afdf7aa4af2281b05d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9987bdac395aea4d184ef43a642ff377e166b9728d77afdf7aa4af2281b05d54->enter($__internal_9987bdac395aea4d184ef43a642ff377e166b9728d77afdf7aa4af2281b05d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/expm1/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar expm1 = Math.expm1;
\tif (typeof expm1 !== \"function\") return false;
\treturn expm1(1).toFixed(15) === \"1.718281828459045\";
};
";
        
        $__internal_9987bdac395aea4d184ef43a642ff377e166b9728d77afdf7aa4af2281b05d54->leave($__internal_9987bdac395aea4d184ef43a642ff377e166b9728d77afdf7aa4af2281b05d54_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/expm1/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar expm1 = Math.expm1;
\tif (typeof expm1 !== \"function\") return false;
\treturn expm1(1).toFixed(15) === \"1.718281828459045\";
};
", "node_modules/es5-ext/math/expm1/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/expm1/is-implemented.js");
    }
}
