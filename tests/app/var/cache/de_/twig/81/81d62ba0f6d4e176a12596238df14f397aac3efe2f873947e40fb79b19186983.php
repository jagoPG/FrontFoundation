<?php

/* node_modules/lodash/isElement.js */
class __TwigTemplate_3bd46424620c69c0c9cdfd0769f689f8b36e1f409f809475d15850b4ef8dcaf1 extends Twig_Template
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
        $__internal_29a316a837773f906cc3b156a7c89ece2abab1b1be5f7ad7f07a8af782f60149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a316a837773f906cc3b156a7c89ece2abab1b1be5f7ad7f07a8af782f60149->enter($__internal_29a316a837773f906cc3b156a7c89ece2abab1b1be5f7ad7f07a8af782f60149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isElement.js"));

        // line 1
        echo "var isObjectLike = require('./isObjectLike'),
    isPlainObject = require('./isPlainObject');

/**
 * Checks if `value` is likely a DOM element.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a DOM element, else `false`.
 * @example
 *
 * _.isElement(document.body);
 * // => true
 *
 * _.isElement('<body>');
 * // => false
 */
function isElement(value) {
  return isObjectLike(value) && value.nodeType === 1 && !isPlainObject(value);
}

module.exports = isElement;
";
        
        $__internal_29a316a837773f906cc3b156a7c89ece2abab1b1be5f7ad7f07a8af782f60149->leave($__internal_29a316a837773f906cc3b156a7c89ece2abab1b1be5f7ad7f07a8af782f60149_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isElement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObjectLike = require('./isObjectLike'),
    isPlainObject = require('./isPlainObject');

/**
 * Checks if `value` is likely a DOM element.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a DOM element, else `false`.
 * @example
 *
 * _.isElement(document.body);
 * // => true
 *
 * _.isElement('<body>');
 * // => false
 */
function isElement(value) {
  return isObjectLike(value) && value.nodeType === 1 && !isPlainObject(value);
}

module.exports = isElement;
", "node_modules/lodash/isElement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isElement.js");
    }
}
