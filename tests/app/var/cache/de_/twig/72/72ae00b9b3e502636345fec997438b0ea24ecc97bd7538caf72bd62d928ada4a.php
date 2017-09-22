<?php

/* node_modules/core-js/modules/core.number.iterator.js */
class __TwigTemplate_8c624132be3c312379166a0a8850b7574d1ded1662a39781106d6abd502c6f4f extends Twig_Template
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
        $__internal_3b54a1d68f42aa6bffc59f5ed2ffd9ca2999f9f1b25ad8e59174bf7561dd534c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b54a1d68f42aa6bffc59f5ed2ffd9ca2999f9f1b25ad8e59174bf7561dd534c->enter($__internal_3b54a1d68f42aa6bffc59f5ed2ffd9ca2999f9f1b25ad8e59174bf7561dd534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.number.iterator.js"));

        // line 1
        echo "'use strict';
require('./_iter-define')(Number, 'Number', function (iterated) {
  this._l = +iterated;
  this._i = 0;
}, function () {
  var i = this._i++;
  var done = !(i < this._l);
  return { done: done, value: done ? undefined : i };
});
";
        
        $__internal_3b54a1d68f42aa6bffc59f5ed2ffd9ca2999f9f1b25ad8e59174bf7561dd534c->leave($__internal_3b54a1d68f42aa6bffc59f5ed2ffd9ca2999f9f1b25ad8e59174bf7561dd534c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.number.iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('./_iter-define')(Number, 'Number', function (iterated) {
  this._l = +iterated;
  this._i = 0;
}, function () {
  var i = this._i++;
  var done = !(i < this._l);
  return { done: done, value: done ? undefined : i };
});
", "node_modules/core-js/modules/core.number.iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.number.iterator.js");
    }
}
