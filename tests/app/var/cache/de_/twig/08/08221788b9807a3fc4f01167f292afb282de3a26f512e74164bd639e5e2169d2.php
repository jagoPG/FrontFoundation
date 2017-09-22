<?php

/* node_modules/core-js/modules/core.get-iterator.js */
class __TwigTemplate_bd03925635839d6a16a36b88bff54db6819634ba0d54a12b82b9a12c10501e7b extends Twig_Template
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
        $__internal_267951db50d842de027e15bbb63281d8e37515f43e260e9a9614fd0f57e34546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267951db50d842de027e15bbb63281d8e37515f43e260e9a9614fd0f57e34546->enter($__internal_267951db50d842de027e15bbb63281d8e37515f43e260e9a9614fd0f57e34546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.get-iterator.js"));

        // line 1
        echo "var anObject = require('./_an-object');
var get = require('./core.get-iterator-method');
module.exports = require('./_core').getIterator = function (it) {
  var iterFn = get(it);
  if (typeof iterFn != 'function') throw TypeError(it + ' is not iterable!');
  return anObject(iterFn.call(it));
};
";
        
        $__internal_267951db50d842de027e15bbb63281d8e37515f43e260e9a9614fd0f57e34546->leave($__internal_267951db50d842de027e15bbb63281d8e37515f43e260e9a9614fd0f57e34546_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.get-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var anObject = require('./_an-object');
var get = require('./core.get-iterator-method');
module.exports = require('./_core').getIterator = function (it) {
  var iterFn = get(it);
  if (typeof iterFn != 'function') throw TypeError(it + ' is not iterable!');
  return anObject(iterFn.call(it));
};
", "node_modules/core-js/modules/core.get-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.get-iterator.js");
    }
}
