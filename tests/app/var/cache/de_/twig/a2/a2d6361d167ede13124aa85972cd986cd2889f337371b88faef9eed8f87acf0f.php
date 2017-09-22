<?php

/* node_modules/core-js/library/fn/regexp/split.js */
class __TwigTemplate_c86ea1ed1e043d9cca5e6eb95d71dd636d813df4255ca0e6728aa5c187c966e4 extends Twig_Template
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
        $__internal_cc589e47b2b923ef3ef4257493c4c2ca70927613093af45e4f1fbf23ce45dd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc589e47b2b923ef3ef4257493c4c2ca70927613093af45e4f1fbf23ce45dd34->enter($__internal_cc589e47b2b923ef3ef4257493c4c2ca70927613093af45e4f1fbf23ce45dd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/regexp/split.js"));

        // line 1
        echo "require('../../modules/es6.regexp.split');
var SPLIT = require('../../modules/_wks')('split');
module.exports = function (it, str, limit) {
  return RegExp.prototype[SPLIT].call(it, str, limit);
};
";
        
        $__internal_cc589e47b2b923ef3ef4257493c4c2ca70927613093af45e4f1fbf23ce45dd34->leave($__internal_cc589e47b2b923ef3ef4257493c4c2ca70927613093af45e4f1fbf23ce45dd34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/regexp/split.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.split');
var SPLIT = require('../../modules/_wks')('split');
module.exports = function (it, str, limit) {
  return RegExp.prototype[SPLIT].call(it, str, limit);
};
", "node_modules/core-js/library/fn/regexp/split.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/regexp/split.js");
    }
}
