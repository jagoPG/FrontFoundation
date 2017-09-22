<?php

/* node_modules/es5-ext/math/log2/is-implemented.js */
class __TwigTemplate_212d1c884b685ee9ddf2c65bdc0af655a1222d6a7c1fbd7120e00cd3e8b2539d extends Twig_Template
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
        $__internal_9c62f106e65303dca08e1d46b741de8f28f0fa8533bd60f71e8b620c5886175d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c62f106e65303dca08e1d46b741de8f28f0fa8533bd60f71e8b620c5886175d->enter($__internal_9c62f106e65303dca08e1d46b741de8f28f0fa8533bd60f71e8b620c5886175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log2/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar log2 = Math.log2;
\tif (typeof log2 !== \"function\") return false;
\treturn log2(3).toFixed(15) === \"1.584962500721156\";
};
";
        
        $__internal_9c62f106e65303dca08e1d46b741de8f28f0fa8533bd60f71e8b620c5886175d->leave($__internal_9c62f106e65303dca08e1d46b741de8f28f0fa8533bd60f71e8b620c5886175d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log2/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar log2 = Math.log2;
\tif (typeof log2 !== \"function\") return false;
\treturn log2(3).toFixed(15) === \"1.584962500721156\";
};
", "node_modules/es5-ext/math/log2/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log2/is-implemented.js");
    }
}
