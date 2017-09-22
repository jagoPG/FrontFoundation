<?php

/* node_modules/core-js/library/fn/string/iterator.js */
class __TwigTemplate_d21fb26bc82be2b90325ad53c6a7e641411d4170bb451939d445bacb5fad30c2 extends Twig_Template
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
        $__internal_9d405336a6e0b72257cb8053a07ee4882abf34d8eeaa2b390653a8fe6540c135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d405336a6e0b72257cb8053a07ee4882abf34d8eeaa2b390653a8fe6540c135->enter($__internal_9d405336a6e0b72257cb8053a07ee4882abf34d8eeaa2b390653a8fe6540c135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/iterator.js"));

        // line 1
        echo "require('../../modules/es6.string.iterator');
var get = require('../../modules/_iterators').String;
module.exports = function (it) {
  return get.call(it);
};
";
        
        $__internal_9d405336a6e0b72257cb8053a07ee4882abf34d8eeaa2b390653a8fe6540c135->leave($__internal_9d405336a6e0b72257cb8053a07ee4882abf34d8eeaa2b390653a8fe6540c135_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.iterator');
var get = require('../../modules/_iterators').String;
module.exports = function (it) {
  return get.call(it);
};
", "node_modules/core-js/library/fn/string/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/iterator.js");
    }
}
