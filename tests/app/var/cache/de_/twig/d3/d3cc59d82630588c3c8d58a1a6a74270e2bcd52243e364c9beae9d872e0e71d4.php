<?php

/* node_modules/lodash/_shortOut.js */
class __TwigTemplate_45a939ca3e2279475bf063d379a7d0df1fd83d599955b4904906701485987e20 extends Twig_Template
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
        $__internal_77a6445a3b3ef1bf65214ff051f8d0ab9c4dc1b0e7d6d406396d18285a9f6f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a6445a3b3ef1bf65214ff051f8d0ab9c4dc1b0e7d6d406396d18285a9f6f8e->enter($__internal_77a6445a3b3ef1bf65214ff051f8d0ab9c4dc1b0e7d6d406396d18285a9f6f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_shortOut.js"));

        // line 1
        echo "/** Used to detect hot functions by number of calls within a span of milliseconds. */
var HOT_COUNT = 800,
    HOT_SPAN = 16;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeNow = Date.now;

/**
 * Creates a function that'll short out and invoke `identity` instead
 * of `func` when it's called `HOT_COUNT` or more times in `HOT_SPAN`
 * milliseconds.
 *
 * @private
 * @param {Function} func The function to restrict.
 * @returns {Function} Returns the new shortable function.
 */
function shortOut(func) {
  var count = 0,
      lastCalled = 0;

  return function() {
    var stamp = nativeNow(),
        remaining = HOT_SPAN - (stamp - lastCalled);

    lastCalled = stamp;
    if (remaining > 0) {
      if (++count >= HOT_COUNT) {
        return arguments[0];
      }
    } else {
      count = 0;
    }
    return func.apply(undefined, arguments);
  };
}

module.exports = shortOut;
";
        
        $__internal_77a6445a3b3ef1bf65214ff051f8d0ab9c4dc1b0e7d6d406396d18285a9f6f8e->leave($__internal_77a6445a3b3ef1bf65214ff051f8d0ab9c4dc1b0e7d6d406396d18285a9f6f8e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_shortOut.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to detect hot functions by number of calls within a span of milliseconds. */
var HOT_COUNT = 800,
    HOT_SPAN = 16;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeNow = Date.now;

/**
 * Creates a function that'll short out and invoke `identity` instead
 * of `func` when it's called `HOT_COUNT` or more times in `HOT_SPAN`
 * milliseconds.
 *
 * @private
 * @param {Function} func The function to restrict.
 * @returns {Function} Returns the new shortable function.
 */
function shortOut(func) {
  var count = 0,
      lastCalled = 0;

  return function() {
    var stamp = nativeNow(),
        remaining = HOT_SPAN - (stamp - lastCalled);

    lastCalled = stamp;
    if (remaining > 0) {
      if (++count >= HOT_COUNT) {
        return arguments[0];
      }
    } else {
      count = 0;
    }
    return func.apply(undefined, arguments);
  };
}

module.exports = shortOut;
", "node_modules/lodash/_shortOut.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_shortOut.js");
    }
}
