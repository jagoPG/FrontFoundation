<?php

/* node_modules/lodash/_setToString.js */
class __TwigTemplate_c634f49cf7578dc5d196e5542b35d1ca9a0fcd048a0eba788e399ce4947d80c7 extends Twig_Template
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
        $__internal_2b2f5344df40f4ab2e782df4278ce1b5c4db46c0b131a202b9e9814e702440d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2f5344df40f4ab2e782df4278ce1b5c4db46c0b131a202b9e9814e702440d8->enter($__internal_2b2f5344df40f4ab2e782df4278ce1b5c4db46c0b131a202b9e9814e702440d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_setToString.js"));

        // line 1
        echo "var baseSetToString = require('./_baseSetToString'),
    shortOut = require('./_shortOut');

/**
 * Sets the `toString` method of `func` to return `string`.
 *
 * @private
 * @param {Function} func The function to modify.
 * @param {Function} string The `toString` result.
 * @returns {Function} Returns `func`.
 */
var setToString = shortOut(baseSetToString);

module.exports = setToString;
";
        
        $__internal_2b2f5344df40f4ab2e782df4278ce1b5c4db46c0b131a202b9e9814e702440d8->leave($__internal_2b2f5344df40f4ab2e782df4278ce1b5c4db46c0b131a202b9e9814e702440d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_setToString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSetToString = require('./_baseSetToString'),
    shortOut = require('./_shortOut');

/**
 * Sets the `toString` method of `func` to return `string`.
 *
 * @private
 * @param {Function} func The function to modify.
 * @param {Function} string The `toString` result.
 * @returns {Function} Returns `func`.
 */
var setToString = shortOut(baseSetToString);

module.exports = setToString;
", "node_modules/lodash/_setToString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_setToString.js");
    }
}
