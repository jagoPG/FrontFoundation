<?php

/* node_modules/lodash/_nativeKeysIn.js */
class __TwigTemplate_3464e116901e008cd94bccec616fafa7409ebe7010d1571e842286baf356b93f extends Twig_Template
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
        $__internal_55775e9da50069075b076a47f1b67c5a70bef06239ccba2eaaa41bd4e5b78d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55775e9da50069075b076a47f1b67c5a70bef06239ccba2eaaa41bd4e5b78d64->enter($__internal_55775e9da50069075b076a47f1b67c5a70bef06239ccba2eaaa41bd4e5b78d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_nativeKeysIn.js"));

        // line 1
        echo "/**
 * This function is like
 * [`Object.keys`](http://ecma-international.org/ecma-262/7.0/#sec-object.keys)
 * except that it includes inherited enumerable properties.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property names.
 */
function nativeKeysIn(object) {
  var result = [];
  if (object != null) {
    for (var key in Object(object)) {
      result.push(key);
    }
  }
  return result;
}

module.exports = nativeKeysIn;
";
        
        $__internal_55775e9da50069075b076a47f1b67c5a70bef06239ccba2eaaa41bd4e5b78d64->leave($__internal_55775e9da50069075b076a47f1b67c5a70bef06239ccba2eaaa41bd4e5b78d64_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_nativeKeysIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This function is like
 * [`Object.keys`](http://ecma-international.org/ecma-262/7.0/#sec-object.keys)
 * except that it includes inherited enumerable properties.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property names.
 */
function nativeKeysIn(object) {
  var result = [];
  if (object != null) {
    for (var key in Object(object)) {
      result.push(key);
    }
  }
  return result;
}

module.exports = nativeKeysIn;
", "node_modules/lodash/_nativeKeysIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_nativeKeysIn.js");
    }
}
