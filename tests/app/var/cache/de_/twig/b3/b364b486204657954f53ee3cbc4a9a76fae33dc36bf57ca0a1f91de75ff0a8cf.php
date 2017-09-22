<?php

/* node_modules/lodash/_cloneBuffer.js */
class __TwigTemplate_9b7948df5dc2fb9f9241a2d384b40b3f24810cfe4df1ea6b710383863f37fba6 extends Twig_Template
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
        $__internal_9e7a0a025c1fe7ea363a1c0204519e52f1b27f66a1329cf26f5bb6a1dbb3d897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7a0a025c1fe7ea363a1c0204519e52f1b27f66a1329cf26f5bb6a1dbb3d897->enter($__internal_9e7a0a025c1fe7ea363a1c0204519e52f1b27f66a1329cf26f5bb6a1dbb3d897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cloneBuffer.js"));

        // line 1
        echo "var root = require('./_root');

/** Detect free variable `exports`. */
var freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

/** Detect free variable `module`. */
var freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

/** Detect the popular CommonJS extension `module.exports`. */
var moduleExports = freeModule && freeModule.exports === freeExports;

/** Built-in value references. */
var Buffer = moduleExports ? root.Buffer : undefined,
    allocUnsafe = Buffer ? Buffer.allocUnsafe : undefined;

/**
 * Creates a clone of  `buffer`.
 *
 * @private
 * @param {Buffer} buffer The buffer to clone.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Buffer} Returns the cloned buffer.
 */
function cloneBuffer(buffer, isDeep) {
  if (isDeep) {
    return buffer.slice();
  }
  var length = buffer.length,
      result = allocUnsafe ? allocUnsafe(length) : new buffer.constructor(length);

  buffer.copy(result);
  return result;
}

module.exports = cloneBuffer;
";
        
        $__internal_9e7a0a025c1fe7ea363a1c0204519e52f1b27f66a1329cf26f5bb6a1dbb3d897->leave($__internal_9e7a0a025c1fe7ea363a1c0204519e52f1b27f66a1329cf26f5bb6a1dbb3d897_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cloneBuffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var root = require('./_root');

/** Detect free variable `exports`. */
var freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

/** Detect free variable `module`. */
var freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

/** Detect the popular CommonJS extension `module.exports`. */
var moduleExports = freeModule && freeModule.exports === freeExports;

/** Built-in value references. */
var Buffer = moduleExports ? root.Buffer : undefined,
    allocUnsafe = Buffer ? Buffer.allocUnsafe : undefined;

/**
 * Creates a clone of  `buffer`.
 *
 * @private
 * @param {Buffer} buffer The buffer to clone.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Buffer} Returns the cloned buffer.
 */
function cloneBuffer(buffer, isDeep) {
  if (isDeep) {
    return buffer.slice();
  }
  var length = buffer.length,
      result = allocUnsafe ? allocUnsafe(length) : new buffer.constructor(length);

  buffer.copy(result);
  return result;
}

module.exports = cloneBuffer;
", "node_modules/lodash/_cloneBuffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cloneBuffer.js");
    }
}
