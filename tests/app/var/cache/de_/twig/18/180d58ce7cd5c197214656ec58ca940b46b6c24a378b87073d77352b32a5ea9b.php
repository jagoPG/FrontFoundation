<?php

/* node_modules/lodash/_cloneTypedArray.js */
class __TwigTemplate_19070d5946af421f28f0d105881e2c30a157e7900097cb4da82374306f9b62a9 extends Twig_Template
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
        $__internal_b2f0a4bb8d266c780175ee535ee66a2ac0bd2ee0472fb9621bba394f35514e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f0a4bb8d266c780175ee535ee66a2ac0bd2ee0472fb9621bba394f35514e41->enter($__internal_b2f0a4bb8d266c780175ee535ee66a2ac0bd2ee0472fb9621bba394f35514e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cloneTypedArray.js"));

        // line 1
        echo "var cloneArrayBuffer = require('./_cloneArrayBuffer');

/**
 * Creates a clone of `typedArray`.
 *
 * @private
 * @param {Object} typedArray The typed array to clone.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Object} Returns the cloned typed array.
 */
function cloneTypedArray(typedArray, isDeep) {
  var buffer = isDeep ? cloneArrayBuffer(typedArray.buffer) : typedArray.buffer;
  return new typedArray.constructor(buffer, typedArray.byteOffset, typedArray.length);
}

module.exports = cloneTypedArray;
";
        
        $__internal_b2f0a4bb8d266c780175ee535ee66a2ac0bd2ee0472fb9621bba394f35514e41->leave($__internal_b2f0a4bb8d266c780175ee535ee66a2ac0bd2ee0472fb9621bba394f35514e41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cloneTypedArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var cloneArrayBuffer = require('./_cloneArrayBuffer');

/**
 * Creates a clone of `typedArray`.
 *
 * @private
 * @param {Object} typedArray The typed array to clone.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Object} Returns the cloned typed array.
 */
function cloneTypedArray(typedArray, isDeep) {
  var buffer = isDeep ? cloneArrayBuffer(typedArray.buffer) : typedArray.buffer;
  return new typedArray.constructor(buffer, typedArray.byteOffset, typedArray.length);
}

module.exports = cloneTypedArray;
", "node_modules/lodash/_cloneTypedArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cloneTypedArray.js");
    }
}
