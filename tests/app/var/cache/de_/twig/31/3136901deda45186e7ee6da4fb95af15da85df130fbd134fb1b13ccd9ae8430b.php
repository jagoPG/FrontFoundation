<?php

/* node_modules/core-js/library/fn/array/virtual/flatten.js */
class __TwigTemplate_e2782015712d128cf84ccfae0b51ace1f703f24ac731b1493c2351c11a64524f extends Twig_Template
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
        $__internal_84b9b07309b4557b1fafe729567324956bed007a290c9cc8b181326ae5c1facf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b9b07309b4557b1fafe729567324956bed007a290c9cc8b181326ae5c1facf->enter($__internal_84b9b07309b4557b1fafe729567324956bed007a290c9cc8b181326ae5c1facf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/flatten.js"));

        // line 1
        echo "require('../../../modules/es7.array.flatten');
module.exports = require('../../../modules/_entry-virtual')('Array').flatten;
";
        
        $__internal_84b9b07309b4557b1fafe729567324956bed007a290c9cc8b181326ae5c1facf->leave($__internal_84b9b07309b4557b1fafe729567324956bed007a290c9cc8b181326ae5c1facf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.array.flatten');
module.exports = require('../../../modules/_entry-virtual')('Array').flatten;
", "node_modules/core-js/library/fn/array/virtual/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/flatten.js");
    }
}
