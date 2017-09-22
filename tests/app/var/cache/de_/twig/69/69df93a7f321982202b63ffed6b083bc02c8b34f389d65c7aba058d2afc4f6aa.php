<?php

/* node_modules/lodash/_initCloneObject.js */
class __TwigTemplate_4e0224dc087a1e2aba6509569684cebca7b5785cab754ca065aa032949334768 extends Twig_Template
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
        $__internal_8905356fb23d75e5492b4181b6ace9818cfc86d949379e927fedd77273735269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8905356fb23d75e5492b4181b6ace9818cfc86d949379e927fedd77273735269->enter($__internal_8905356fb23d75e5492b4181b6ace9818cfc86d949379e927fedd77273735269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_initCloneObject.js"));

        // line 1
        echo "var baseCreate = require('./_baseCreate'),
    getPrototype = require('./_getPrototype'),
    isPrototype = require('./_isPrototype');

/**
 * Initializes an object clone.
 *
 * @private
 * @param {Object} object The object to clone.
 * @returns {Object} Returns the initialized clone.
 */
function initCloneObject(object) {
  return (typeof object.constructor == 'function' && !isPrototype(object))
    ? baseCreate(getPrototype(object))
    : {};
}

module.exports = initCloneObject;
";
        
        $__internal_8905356fb23d75e5492b4181b6ace9818cfc86d949379e927fedd77273735269->leave($__internal_8905356fb23d75e5492b4181b6ace9818cfc86d949379e927fedd77273735269_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_initCloneObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseCreate = require('./_baseCreate'),
    getPrototype = require('./_getPrototype'),
    isPrototype = require('./_isPrototype');

/**
 * Initializes an object clone.
 *
 * @private
 * @param {Object} object The object to clone.
 * @returns {Object} Returns the initialized clone.
 */
function initCloneObject(object) {
  return (typeof object.constructor == 'function' && !isPrototype(object))
    ? baseCreate(getPrototype(object))
    : {};
}

module.exports = initCloneObject;
", "node_modules/lodash/_initCloneObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_initCloneObject.js");
    }
}
