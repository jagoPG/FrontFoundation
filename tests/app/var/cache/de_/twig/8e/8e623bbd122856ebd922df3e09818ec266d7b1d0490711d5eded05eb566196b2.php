<?php

/* node_modules/fsevents/node_modules/once/once.js */
class __TwigTemplate_1722def00570dce0c3f32584d2f995b200c0459ea6e4577ace9b6e0a9bed66fb extends Twig_Template
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
        $__internal_00c9f2c5fc95f053ea0a5e0b1e0d6348f5a340e349427aa7b9b242f55d9da827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c9f2c5fc95f053ea0a5e0b1e0d6348f5a340e349427aa7b9b242f55d9da827->enter($__internal_00c9f2c5fc95f053ea0a5e0b1e0d6348f5a340e349427aa7b9b242f55d9da827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/once/once.js"));

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
        
        $__internal_00c9f2c5fc95f053ea0a5e0b1e0d6348f5a340e349427aa7b9b242f55d9da827->leave($__internal_00c9f2c5fc95f053ea0a5e0b1e0d6348f5a340e349427aa7b9b242f55d9da827_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/once/once.js";
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
", "node_modules/fsevents/node_modules/once/once.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/once/once.js");
    }
}
