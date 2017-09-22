<?php

/* node_modules/core-js/library/modules/core.get-iterator.js */
class __TwigTemplate_5c350523f759537b53ee6d15ba3f90565262af24bccc982b9d2b0368f579e987 extends Twig_Template
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
        $__internal_8bb38bd9ad7db8f06119c88cf9ab95c86289427c6baec4e8ae2f29a407b317eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb38bd9ad7db8f06119c88cf9ab95c86289427c6baec4e8ae2f29a407b317eb->enter($__internal_8bb38bd9ad7db8f06119c88cf9ab95c86289427c6baec4e8ae2f29a407b317eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.get-iterator.js"));

        // line 1
        echo "var anObject = require('./_an-object');
var get = require('./core.get-iterator-method');
module.exports = require('./_core').getIterator = function (it) {
  var iterFn = get(it);
  if (typeof iterFn != 'function') throw TypeError(it + ' is not iterable!');
  return anObject(iterFn.call(it));
};
";
        
        $__internal_8bb38bd9ad7db8f06119c88cf9ab95c86289427c6baec4e8ae2f29a407b317eb->leave($__internal_8bb38bd9ad7db8f06119c88cf9ab95c86289427c6baec4e8ae2f29a407b317eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.get-iterator.js";
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
", "node_modules/core-js/library/modules/core.get-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.get-iterator.js");
    }
}
