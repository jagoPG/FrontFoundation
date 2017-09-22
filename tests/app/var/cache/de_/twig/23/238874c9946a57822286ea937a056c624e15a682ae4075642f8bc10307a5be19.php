<?php

/* node_modules/once/once.js */
class __TwigTemplate_d2e9a1b5e97fdbebb0e50aeaf1b9da94a9387ad3a359eff331b04c1c8d2bf08f extends Twig_Template
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
        $__internal_ada5dbe78c5aa9caad63df25d294a5651e021acb4a565c7dc7be4e46318a68da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada5dbe78c5aa9caad63df25d294a5651e021acb4a565c7dc7be4e46318a68da->enter($__internal_ada5dbe78c5aa9caad63df25d294a5651e021acb4a565c7dc7be4e46318a68da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/once/once.js"));

        // line 1
        echo "var wrappy = require('wrappy')
module.exports = wrappy(once)
module.exports.strict = wrappy(onceStrict)

once.proto = once(function () {
  Object.defineProperty(Function.prototype, 'once', {
    value: function () {
      return once(this)
    },
    configurable: true
  })

  Object.defineProperty(Function.prototype, 'onceStrict', {
    value: function () {
      return onceStrict(this)
    },
    configurable: true
  })
})

function once (fn) {
  var f = function () {
    if (f.called) return f.value
    f.called = true
    return f.value = fn.apply(this, arguments)
  }
  f.called = false
  return f
}

function onceStrict (fn) {
  var f = function () {
    if (f.called)
      throw new Error(f.onceError)
    f.called = true
    return f.value = fn.apply(this, arguments)
  }
  var name = fn.name || 'Function wrapped with `once`'
  f.onceError = name + \" shouldn't be called more than once\"
  f.called = false
  return f
}
";
        
        $__internal_ada5dbe78c5aa9caad63df25d294a5651e021acb4a565c7dc7be4e46318a68da->leave($__internal_ada5dbe78c5aa9caad63df25d294a5651e021acb4a565c7dc7be4e46318a68da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/once/once.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var wrappy = require('wrappy')
module.exports = wrappy(once)
module.exports.strict = wrappy(onceStrict)

once.proto = once(function () {
  Object.defineProperty(Function.prototype, 'once', {
    value: function () {
      return once(this)
    },
    configurable: true
  })

  Object.defineProperty(Function.prototype, 'onceStrict', {
    value: function () {
      return onceStrict(this)
    },
    configurable: true
  })
})

function once (fn) {
  var f = function () {
    if (f.called) return f.value
    f.called = true
    return f.value = fn.apply(this, arguments)
  }
  f.called = false
  return f
}

function onceStrict (fn) {
  var f = function () {
    if (f.called)
      throw new Error(f.onceError)
    f.called = true
    return f.value = fn.apply(this, arguments)
  }
  var name = fn.name || 'Function wrapped with `once`'
  f.onceError = name + \" shouldn't be called more than once\"
  f.called = false
  return f
}
", "node_modules/once/once.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/once/once.js");
    }
}
