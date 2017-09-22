<?php

/* node_modules/lodash/_createBind.js */
class __TwigTemplate_9563d93f9495e9d113ef2c2c9bd7c94e54096e5e200bc72fbb7b9fc93a49e2d2 extends Twig_Template
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
        $__internal_292e10037b053276daf470fba57b8725291f94aaf8de128f739240af034c9b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292e10037b053276daf470fba57b8725291f94aaf8de128f739240af034c9b92->enter($__internal_292e10037b053276daf470fba57b8725291f94aaf8de128f739240af034c9b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createBind.js"));

        // line 1
        echo "var createCtor = require('./_createCtor'),
    root = require('./_root');

/** Used to compose bitmasks for function metadata. */
var WRAP_BIND_FLAG = 1;

/**
 * Creates a function that wraps `func` to invoke it with the optional `this`
 * binding of `thisArg`.
 *
 * @private
 * @param {Function} func The function to wrap.
 * @param {number} bitmask The bitmask flags. See `createWrap` for more details.
 * @param {*} [thisArg] The `this` binding of `func`.
 * @returns {Function} Returns the new wrapped function.
 */
function createBind(func, bitmask, thisArg) {
  var isBind = bitmask & WRAP_BIND_FLAG,
      Ctor = createCtor(func);

  function wrapper() {
    var fn = (this && this !== root && this instanceof wrapper) ? Ctor : func;
    return fn.apply(isBind ? thisArg : this, arguments);
  }
  return wrapper;
}

module.exports = createBind;
";
        
        $__internal_292e10037b053276daf470fba57b8725291f94aaf8de128f739240af034c9b92->leave($__internal_292e10037b053276daf470fba57b8725291f94aaf8de128f739240af034c9b92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createBind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createCtor = require('./_createCtor'),
    root = require('./_root');

/** Used to compose bitmasks for function metadata. */
var WRAP_BIND_FLAG = 1;

/**
 * Creates a function that wraps `func` to invoke it with the optional `this`
 * binding of `thisArg`.
 *
 * @private
 * @param {Function} func The function to wrap.
 * @param {number} bitmask The bitmask flags. See `createWrap` for more details.
 * @param {*} [thisArg] The `this` binding of `func`.
 * @returns {Function} Returns the new wrapped function.
 */
function createBind(func, bitmask, thisArg) {
  var isBind = bitmask & WRAP_BIND_FLAG,
      Ctor = createCtor(func);

  function wrapper() {
    var fn = (this && this !== root && this instanceof wrapper) ? Ctor : func;
    return fn.apply(isBind ? thisArg : this, arguments);
  }
  return wrapper;
}

module.exports = createBind;
", "node_modules/lodash/_createBind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createBind.js");
    }
}
