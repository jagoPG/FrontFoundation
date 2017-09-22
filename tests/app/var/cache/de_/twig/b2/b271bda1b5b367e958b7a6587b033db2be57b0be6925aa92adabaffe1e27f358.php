<?php

/* node_modules/lodash/_lazyClone.js */
class __TwigTemplate_c06f4a15723b15e5003e1547c34100079dcd8f489a73785929cb6fe04a984ff6 extends Twig_Template
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
        $__internal_69f2cf03e99f42336e4b0118f0df2216a1629f9bb5bdf725aa50b4ba3e5dabdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f2cf03e99f42336e4b0118f0df2216a1629f9bb5bdf725aa50b4ba3e5dabdc->enter($__internal_69f2cf03e99f42336e4b0118f0df2216a1629f9bb5bdf725aa50b4ba3e5dabdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_lazyClone.js"));

        // line 1
        echo "var LazyWrapper = require('./_LazyWrapper'),
    copyArray = require('./_copyArray');

/**
 * Creates a clone of the lazy wrapper object.
 *
 * @private
 * @name clone
 * @memberOf LazyWrapper
 * @returns {Object} Returns the cloned `LazyWrapper` object.
 */
function lazyClone() {
  var result = new LazyWrapper(this.__wrapped__);
  result.__actions__ = copyArray(this.__actions__);
  result.__dir__ = this.__dir__;
  result.__filtered__ = this.__filtered__;
  result.__iteratees__ = copyArray(this.__iteratees__);
  result.__takeCount__ = this.__takeCount__;
  result.__views__ = copyArray(this.__views__);
  return result;
}

module.exports = lazyClone;
";
        
        $__internal_69f2cf03e99f42336e4b0118f0df2216a1629f9bb5bdf725aa50b4ba3e5dabdc->leave($__internal_69f2cf03e99f42336e4b0118f0df2216a1629f9bb5bdf725aa50b4ba3e5dabdc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_lazyClone.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var LazyWrapper = require('./_LazyWrapper'),
    copyArray = require('./_copyArray');

/**
 * Creates a clone of the lazy wrapper object.
 *
 * @private
 * @name clone
 * @memberOf LazyWrapper
 * @returns {Object} Returns the cloned `LazyWrapper` object.
 */
function lazyClone() {
  var result = new LazyWrapper(this.__wrapped__);
  result.__actions__ = copyArray(this.__actions__);
  result.__dir__ = this.__dir__;
  result.__filtered__ = this.__filtered__;
  result.__iteratees__ = copyArray(this.__iteratees__);
  result.__takeCount__ = this.__takeCount__;
  result.__views__ = copyArray(this.__views__);
  return result;
}

module.exports = lazyClone;
", "node_modules/lodash/_lazyClone.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_lazyClone.js");
    }
}
