<?php

/* node_modules/asynckit/serial.js */
class __TwigTemplate_5686ef55ffc61a5a682894292b882d18b39adf09db5e1a660658437015079c86 extends Twig_Template
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
        $__internal_ee05f9fd7774abd6c3c412d43bf8d6f411b04e3b458845616e8917bac54fcc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee05f9fd7774abd6c3c412d43bf8d6f411b04e3b458845616e8917bac54fcc33->enter($__internal_ee05f9fd7774abd6c3c412d43bf8d6f411b04e3b458845616e8917bac54fcc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/serial.js"));

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
        
        $__internal_ee05f9fd7774abd6c3c412d43bf8d6f411b04e3b458845616e8917bac54fcc33->leave($__internal_ee05f9fd7774abd6c3c412d43bf8d6f411b04e3b458845616e8917bac54fcc33_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/serial.js";
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
", "node_modules/asynckit/serial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/serial.js");
    }
}
