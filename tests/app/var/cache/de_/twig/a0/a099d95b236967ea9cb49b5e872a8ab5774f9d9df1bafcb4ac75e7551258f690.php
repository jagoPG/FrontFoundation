<?php

/* node_modules/core-js/modules/core.get-iterator-method.js */
class __TwigTemplate_6fbe05b12c94c1a2550eeb28630f58000cadc8aad07339897141f45256760369 extends Twig_Template
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
        $__internal_c9bce22290bef5514acb077129a3ee63e4185cd0861a168c2908231f8504fccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bce22290bef5514acb077129a3ee63e4185cd0861a168c2908231f8504fccd->enter($__internal_c9bce22290bef5514acb077129a3ee63e4185cd0861a168c2908231f8504fccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.get-iterator-method.js"));

        // line 1
        echo "var classof = require('./_classof');
var ITERATOR = require('./_wks')('iterator');
var Iterators = require('./_iterators');
module.exports = require('./_core').getIteratorMethod = function (it) {
  if (it != undefined) return it[ITERATOR]
    || it['@@iterator']
    || Iterators[classof(it)];
};
";
        
        $__internal_c9bce22290bef5514acb077129a3ee63e4185cd0861a168c2908231f8504fccd->leave($__internal_c9bce22290bef5514acb077129a3ee63e4185cd0861a168c2908231f8504fccd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.get-iterator-method.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var classof = require('./_classof');
var ITERATOR = require('./_wks')('iterator');
var Iterators = require('./_iterators');
module.exports = require('./_core').getIteratorMethod = function (it) {
  if (it != undefined) return it[ITERATOR]
    || it['@@iterator']
    || Iterators[classof(it)];
};
", "node_modules/core-js/modules/core.get-iterator-method.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.get-iterator-method.js");
    }
}
