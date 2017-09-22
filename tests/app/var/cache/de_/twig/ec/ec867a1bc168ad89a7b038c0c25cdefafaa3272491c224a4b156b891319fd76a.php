<?php

/* node_modules/fsevents/node_modules/asynckit/serial.js */
class __TwigTemplate_8c6efec25c46122e0ebff8bdad9f914ddf533cdf0aaacb5350eb476aefc7cfe8 extends Twig_Template
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
        $__internal_7ba5288dd4ca22a21fa9edd6a7c73c6ef1b8b2119c9a922ea62ce83051f75bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba5288dd4ca22a21fa9edd6a7c73c6ef1b8b2119c9a922ea62ce83051f75bc1->enter($__internal_7ba5288dd4ca22a21fa9edd6a7c73c6ef1b8b2119c9a922ea62ce83051f75bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/serial.js"));

        // line 1
        echo "var serialOrdered = require('./serialOrdered.js');

// Public API
module.exports = serial;

/**
 * Runs iterator over provided array elements in series
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} callback - invoked when all elements processed
 * @returns {function} - jobs terminator
 */
function serial(list, iterator, callback)
{
  return serialOrdered(list, iterator, null, callback);
}
";
        
        $__internal_7ba5288dd4ca22a21fa9edd6a7c73c6ef1b8b2119c9a922ea62ce83051f75bc1->leave($__internal_7ba5288dd4ca22a21fa9edd6a7c73c6ef1b8b2119c9a922ea62ce83051f75bc1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/serial.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var serialOrdered = require('./serialOrdered.js');

// Public API
module.exports = serial;

/**
 * Runs iterator over provided array elements in series
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} callback - invoked when all elements processed
 * @returns {function} - jobs terminator
 */
function serial(list, iterator, callback)
{
  return serialOrdered(list, iterator, null, callback);
}
", "node_modules/fsevents/node_modules/asynckit/serial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/serial.js");
    }
}
