<?php

/* node_modules/es5-ext/object/is-number-value.js */
class __TwigTemplate_bb8eaafc4ecd18014e3c2d94bdb26a192d4bcbfdc765181b763a1a848e0476e7 extends Twig_Template
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
        $__internal_695e0d46ed5ede8f9db526433c34db38ee6da11a730bc02e76f235b4125a3873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695e0d46ed5ede8f9db526433c34db38ee6da11a730bc02e76f235b4125a3873->enter($__internal_695e0d46ed5ede8f9db526433c34db38ee6da11a730bc02e76f235b4125a3873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-number-value.js"));

        // line 1
        echo "\"use strict\";

var isValue = require(\"./is-value\");

module.exports = function (value) {
\tif (!isValue(value)) return false;
\ttry {
\t\treturn !isNaN(value);
\t} catch (e) {
\t\treturn false;
\t}
};
";
        
        $__internal_695e0d46ed5ede8f9db526433c34db38ee6da11a730bc02e76f235b4125a3873->leave($__internal_695e0d46ed5ede8f9db526433c34db38ee6da11a730bc02e76f235b4125a3873_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-number-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isValue = require(\"./is-value\");

module.exports = function (value) {
\tif (!isValue(value)) return false;
\ttry {
\t\treturn !isNaN(value);
\t} catch (e) {
\t\treturn false;
\t}
};
", "node_modules/es5-ext/object/is-number-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-number-value.js");
    }
}
