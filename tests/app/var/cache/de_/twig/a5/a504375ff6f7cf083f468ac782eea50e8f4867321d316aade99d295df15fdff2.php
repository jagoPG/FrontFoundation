<?php

/* node_modules/lodash/_countHolders.js */
class __TwigTemplate_5b17e30df8f3b032c08300896354a30a954b18a91c3d7b0b34571ca41d27ec66 extends Twig_Template
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
        $__internal_4c74fb6909838f8397d48b8ba4eb3924d41696808f33ecc35ed5746315b9745d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c74fb6909838f8397d48b8ba4eb3924d41696808f33ecc35ed5746315b9745d->enter($__internal_4c74fb6909838f8397d48b8ba4eb3924d41696808f33ecc35ed5746315b9745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_countHolders.js"));

        // line 1
        echo "/**
 * Gets the number of `placeholder` occurrences in `array`.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} placeholder The placeholder to search for.
 * @returns {number} Returns the placeholder count.
 */
function countHolders(array, placeholder) {
  var length = array.length,
      result = 0;

  while (length--) {
    if (array[length] === placeholder) {
      ++result;
    }
  }
  return result;
}

module.exports = countHolders;
";
        
        $__internal_4c74fb6909838f8397d48b8ba4eb3924d41696808f33ecc35ed5746315b9745d->leave($__internal_4c74fb6909838f8397d48b8ba4eb3924d41696808f33ecc35ed5746315b9745d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_countHolders.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Gets the number of `placeholder` occurrences in `array`.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} placeholder The placeholder to search for.
 * @returns {number} Returns the placeholder count.
 */
function countHolders(array, placeholder) {
  var length = array.length,
      result = 0;

  while (length--) {
    if (array[length] === placeholder) {
      ++result;
    }
  }
  return result;
}

module.exports = countHolders;
", "node_modules/lodash/_countHolders.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_countHolders.js");
    }
}
