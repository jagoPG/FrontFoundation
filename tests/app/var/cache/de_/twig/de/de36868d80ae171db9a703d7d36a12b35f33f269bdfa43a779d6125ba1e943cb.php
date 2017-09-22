<?php

/* node_modules/lodash/_arrayPush.js */
class __TwigTemplate_c4a6ed379efd93b8f73b38b22113a6685ba38423aeff0472b6d92e07d5fc9b1a extends Twig_Template
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
        $__internal_85e97236703346efb57e8b08248499c621c1bc5575fd255d430dbafa4007431d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e97236703346efb57e8b08248499c621c1bc5575fd255d430dbafa4007431d->enter($__internal_85e97236703346efb57e8b08248499c621c1bc5575fd255d430dbafa4007431d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayPush.js"));

        // line 1
        echo "/**
 * Appends the elements of `values` to `array`.
 *
 * @private
 * @param {Array} array The array to modify.
 * @param {Array} values The values to append.
 * @returns {Array} Returns `array`.
 */
function arrayPush(array, values) {
  var index = -1,
      length = values.length,
      offset = array.length;

  while (++index < length) {
    array[offset + index] = values[index];
  }
  return array;
}

module.exports = arrayPush;
";
        
        $__internal_85e97236703346efb57e8b08248499c621c1bc5575fd255d430dbafa4007431d->leave($__internal_85e97236703346efb57e8b08248499c621c1bc5575fd255d430dbafa4007431d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayPush.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Appends the elements of `values` to `array`.
 *
 * @private
 * @param {Array} array The array to modify.
 * @param {Array} values The values to append.
 * @returns {Array} Returns `array`.
 */
function arrayPush(array, values) {
  var index = -1,
      length = values.length,
      offset = array.length;

  while (++index < length) {
    array[offset + index] = values[index];
  }
  return array;
}

module.exports = arrayPush;
", "node_modules/lodash/_arrayPush.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayPush.js");
    }
}
