<?php

/* node_modules/json-stringify-safe/stringify.js */
class __TwigTemplate_500b401bedb817765cd21d6edf754af283fa72720f9c952a3087f07eb4cdca5c extends Twig_Template
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
        $__internal_881852e335032bf58112f5273183dfcf58dace209fcb9310670a6c271d4442c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881852e335032bf58112f5273183dfcf58dace209fcb9310670a6c271d4442c5->enter($__internal_881852e335032bf58112f5273183dfcf58dace209fcb9310670a6c271d4442c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stringify-safe/stringify.js"));

        // line 1
        echo "exports = module.exports = stringify
exports.getSerialize = serializer

function stringify(obj, replacer, spaces, cycleReplacer) {
  return JSON.stringify(obj, serializer(replacer, cycleReplacer), spaces)
}

function serializer(replacer, cycleReplacer) {
  var stack = [], keys = []

  if (cycleReplacer == null) cycleReplacer = function(key, value) {
    if (stack[0] === value) return \"[Circular ~]\"
    return \"[Circular ~.\" + keys.slice(0, stack.indexOf(value)).join(\".\") + \"]\"
  }

  return function(key, value) {
    if (stack.length > 0) {
      var thisPos = stack.indexOf(this)
      ~thisPos ? stack.splice(thisPos + 1) : stack.push(this)
      ~thisPos ? keys.splice(thisPos, Infinity, key) : keys.push(key)
      if (~stack.indexOf(value)) value = cycleReplacer.call(this, key, value)
    }
    else stack.push(value)

    return replacer == null ? value : replacer.call(this, key, value)
  }
}
";
        
        $__internal_881852e335032bf58112f5273183dfcf58dace209fcb9310670a6c271d4442c5->leave($__internal_881852e335032bf58112f5273183dfcf58dace209fcb9310670a6c271d4442c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stringify-safe/stringify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports = module.exports = stringify
exports.getSerialize = serializer

function stringify(obj, replacer, spaces, cycleReplacer) {
  return JSON.stringify(obj, serializer(replacer, cycleReplacer), spaces)
}

function serializer(replacer, cycleReplacer) {
  var stack = [], keys = []

  if (cycleReplacer == null) cycleReplacer = function(key, value) {
    if (stack[0] === value) return \"[Circular ~]\"
    return \"[Circular ~.\" + keys.slice(0, stack.indexOf(value)).join(\".\") + \"]\"
  }

  return function(key, value) {
    if (stack.length > 0) {
      var thisPos = stack.indexOf(this)
      ~thisPos ? stack.splice(thisPos + 1) : stack.push(this)
      ~thisPos ? keys.splice(thisPos, Infinity, key) : keys.push(key)
      if (~stack.indexOf(value)) value = cycleReplacer.call(this, key, value)
    }
    else stack.push(value)

    return replacer == null ? value : replacer.call(this, key, value)
  }
}
", "node_modules/json-stringify-safe/stringify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stringify-safe/stringify.js");
    }
}
