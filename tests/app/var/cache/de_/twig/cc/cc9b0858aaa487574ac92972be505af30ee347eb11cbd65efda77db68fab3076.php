<?php

/* node_modules/center-align/utils.js */
class __TwigTemplate_510b271bb64236d0328bca22e072a26bb5e46f4b024819aacc862d36b7e86186 extends Twig_Template
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
        $__internal_f95602509381f897157449b13d042015bfde9d3f27a69fed08a84510ed74f359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95602509381f897157449b13d042015bfde9d3f27a69fed08a84510ed74f359->enter($__internal_f95602509381f897157449b13d042015bfde9d3f27a69fed08a84510ed74f359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/center-align/utils.js"));

        // line 1
        echo "'use strict';

/**
 * Lazily-required module dependencies (makes the application
 * faster)
 */

var utils = require('lazy-cache')(require);

/**
 * Temporarily re-assign `require` to trick browserify and
 * webpack into reconizing lazy dependencies.
 *
 * This tiny bit of ugliness has the huge dual advantage of
 * only loading modules that are actually called at some
 * point in the lifecycle of the application, whilst also
 * allowing browserify and webpack to find modules that
 * are depended on but never actually called.
 */

var fn = require;
require = utils;

/**
 * Lazily required module dependencies
 */

require('align-text', 'align');

/**
 * Restore `require`
 */

require = fn;

/**
 * Expose `utils` modules
 */

module.exports = utils;
";
        
        $__internal_f95602509381f897157449b13d042015bfde9d3f27a69fed08a84510ed74f359->leave($__internal_f95602509381f897157449b13d042015bfde9d3f27a69fed08a84510ed74f359_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/center-align/utils.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

/**
 * Lazily-required module dependencies (makes the application
 * faster)
 */

var utils = require('lazy-cache')(require);

/**
 * Temporarily re-assign `require` to trick browserify and
 * webpack into reconizing lazy dependencies.
 *
 * This tiny bit of ugliness has the huge dual advantage of
 * only loading modules that are actually called at some
 * point in the lifecycle of the application, whilst also
 * allowing browserify and webpack to find modules that
 * are depended on but never actually called.
 */

var fn = require;
require = utils;

/**
 * Lazily required module dependencies
 */

require('align-text', 'align');

/**
 * Restore `require`
 */

require = fn;

/**
 * Expose `utils` modules
 */

module.exports = utils;
", "node_modules/center-align/utils.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/center-align/utils.js");
    }
}
