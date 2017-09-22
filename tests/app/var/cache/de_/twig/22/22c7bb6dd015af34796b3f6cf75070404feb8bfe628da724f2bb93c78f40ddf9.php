<?php

/* node_modules/lodash/_cloneDataView.js */
class __TwigTemplate_a86646b6647f941dbe83a65799775cfd3a3e5fbf6b4a0d2d1c53dd7d3a8869c2 extends Twig_Template
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
        $__internal_bd5ac2f96e67a58ee655599ce6aafa9e1c21df95b9d342b5c27d7c8f0abfb735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5ac2f96e67a58ee655599ce6aafa9e1c21df95b9d342b5c27d7c8f0abfb735->enter($__internal_bd5ac2f96e67a58ee655599ce6aafa9e1c21df95b9d342b5c27d7c8f0abfb735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cloneDataView.js"));

        // line 1
        echo "var cloneArrayBuffer = require('./_cloneArrayBuffer');

/**
 * Creates a clone of `dataView`.
 *
 * @private
 * @param {Object} dataView The data view to clone.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Object} Returns the cloned data view.
 */
function cloneDataView(dataView, isDeep) {
  var buffer = isDeep ? cloneArrayBuffer(dataView.buffer) : dataView.buffer;
  return new dataView.constructor(buffer, dataView.byteOffset, dataView.byteLength);
}

module.exports = cloneDataView;
";
        
        $__internal_bd5ac2f96e67a58ee655599ce6aafa9e1c21df95b9d342b5c27d7c8f0abfb735->leave($__internal_bd5ac2f96e67a58ee655599ce6aafa9e1c21df95b9d342b5c27d7c8f0abfb735_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cloneDataView.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var cloneArrayBuffer = require('./_cloneArrayBuffer');

/**
 * Creates a clone of `dataView`.
 *
 * @private
 * @param {Object} dataView The data view to clone.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Object} Returns the cloned data view.
 */
function cloneDataView(dataView, isDeep) {
  var buffer = isDeep ? cloneArrayBuffer(dataView.buffer) : dataView.buffer;
  return new dataView.constructor(buffer, dataView.byteOffset, dataView.byteLength);
}

module.exports = cloneDataView;
", "node_modules/lodash/_cloneDataView.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cloneDataView.js");
    }
}
