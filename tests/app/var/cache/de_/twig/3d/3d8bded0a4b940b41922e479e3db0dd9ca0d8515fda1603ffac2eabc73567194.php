<?php

/* node_modules/lodash/_initCloneArray.js */
class __TwigTemplate_06673661c77e18e641db2dc0d40f01b3e8933895b6742fbad300f108cf096aa4 extends Twig_Template
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
        $__internal_4649e91b11552485bbcbfc44accf9da454ae1de42d10d5abf5a28733e065a9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4649e91b11552485bbcbfc44accf9da454ae1de42d10d5abf5a28733e065a9e2->enter($__internal_4649e91b11552485bbcbfc44accf9da454ae1de42d10d5abf5a28733e065a9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_initCloneArray.js"));

        // line 1
        echo "/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Initializes an array clone.
 *
 * @private
 * @param {Array} array The array to clone.
 * @returns {Array} Returns the initialized clone.
 */
function initCloneArray(array) {
  var length = array.length,
      result = array.constructor(length);

  // Add properties assigned by `RegExp#exec`.
  if (length && typeof array[0] == 'string' && hasOwnProperty.call(array, 'index')) {
    result.index = array.index;
    result.input = array.input;
  }
  return result;
}

module.exports = initCloneArray;
";
        
        $__internal_4649e91b11552485bbcbfc44accf9da454ae1de42d10d5abf5a28733e065a9e2->leave($__internal_4649e91b11552485bbcbfc44accf9da454ae1de42d10d5abf5a28733e065a9e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_initCloneArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Initializes an array clone.
 *
 * @private
 * @param {Array} array The array to clone.
 * @returns {Array} Returns the initialized clone.
 */
function initCloneArray(array) {
  var length = array.length,
      result = array.constructor(length);

  // Add properties assigned by `RegExp#exec`.
  if (length && typeof array[0] == 'string' && hasOwnProperty.call(array, 'index')) {
    result.index = array.index;
    result.input = array.input;
  }
  return result;
}

module.exports = initCloneArray;
", "node_modules/lodash/_initCloneArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_initCloneArray.js");
    }
}
