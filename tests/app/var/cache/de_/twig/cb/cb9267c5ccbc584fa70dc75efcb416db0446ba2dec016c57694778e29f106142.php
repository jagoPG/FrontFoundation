<?php

/* node_modules/lodash/_lazyReverse.js */
class __TwigTemplate_9d68b42c460aa033510e7be06e79e1d4722d2673ec7ba4be5e1c8d27a329d424 extends Twig_Template
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
        $__internal_3f80563edb66c415f2d81180317e326a64f4c5554e2fb220a8fac20ec5ba29b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f80563edb66c415f2d81180317e326a64f4c5554e2fb220a8fac20ec5ba29b7->enter($__internal_3f80563edb66c415f2d81180317e326a64f4c5554e2fb220a8fac20ec5ba29b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_lazyReverse.js"));

        // line 1
        echo "var LazyWrapper = require('./_LazyWrapper');

/**
 * Reverses the direction of lazy iteration.
 *
 * @private
 * @name reverse
 * @memberOf LazyWrapper
 * @returns {Object} Returns the new reversed `LazyWrapper` object.
 */
function lazyReverse() {
  if (this.__filtered__) {
    var result = new LazyWrapper(this);
    result.__dir__ = -1;
    result.__filtered__ = true;
  } else {
    result = this.clone();
    result.__dir__ *= -1;
  }
  return result;
}

module.exports = lazyReverse;
";
        
        $__internal_3f80563edb66c415f2d81180317e326a64f4c5554e2fb220a8fac20ec5ba29b7->leave($__internal_3f80563edb66c415f2d81180317e326a64f4c5554e2fb220a8fac20ec5ba29b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_lazyReverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var LazyWrapper = require('./_LazyWrapper');

/**
 * Reverses the direction of lazy iteration.
 *
 * @private
 * @name reverse
 * @memberOf LazyWrapper
 * @returns {Object} Returns the new reversed `LazyWrapper` object.
 */
function lazyReverse() {
  if (this.__filtered__) {
    var result = new LazyWrapper(this);
    result.__dir__ = -1;
    result.__filtered__ = true;
  } else {
    result = this.clone();
    result.__dir__ *= -1;
  }
  return result;
}

module.exports = lazyReverse;
", "node_modules/lodash/_lazyReverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_lazyReverse.js");
    }
}
