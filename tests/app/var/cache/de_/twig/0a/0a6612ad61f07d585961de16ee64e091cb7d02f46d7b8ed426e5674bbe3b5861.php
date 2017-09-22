<?php

/* node_modules/core-js/fn/function/index.js */
class __TwigTemplate_771ae52944d42422b65681cacbdb03c798bb076d93b5492d254d2a46e61e57f3 extends Twig_Template
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
        $__internal_947e39fe8d8044613bb1dad19dabeed70245f8ecbb069e54b8589175a8c7c5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947e39fe8d8044613bb1dad19dabeed70245f8ecbb069e54b8589175a8c7c5d9->enter($__internal_947e39fe8d8044613bb1dad19dabeed70245f8ecbb069e54b8589175a8c7c5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/function/index.js"));

        // line 1
        echo "require('../../modules/es6.function.bind');
require('../../modules/es6.function.name');
require('../../modules/es6.function.has-instance');
require('../../modules/core.function.part');
module.exports = require('../../modules/_core').Function;
";
        
        $__internal_947e39fe8d8044613bb1dad19dabeed70245f8ecbb069e54b8589175a8c7c5d9->leave($__internal_947e39fe8d8044613bb1dad19dabeed70245f8ecbb069e54b8589175a8c7c5d9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/function/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.function.bind');
require('../../modules/es6.function.name');
require('../../modules/es6.function.has-instance');
require('../../modules/core.function.part');
module.exports = require('../../modules/_core').Function;
", "node_modules/core-js/fn/function/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/function/index.js");
    }
}
