<?php

/* node_modules/is-extglob/index.js */
class __TwigTemplate_a60eee1722b5c5a370a38f1aecee55e00dc68dcd00dbc7a38590f626de37b3a2 extends Twig_Template
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
        $__internal_40b7425f61ce0f4f9e700d0e11698918b09f939041208b14fccd2177978b124b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b7425f61ce0f4f9e700d0e11698918b09f939041208b14fccd2177978b124b->enter($__internal_40b7425f61ce0f4f9e700d0e11698918b09f939041208b14fccd2177978b124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-extglob/index.js"));

        // line 1
        echo "/*!
 * is-extglob <https://github.com/jonschlinkert/is-extglob>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

module.exports = function isExtglob(str) {
  return typeof str === 'string'
    && /[@?!+*]\\(/.test(str);
};
";
        
        $__internal_40b7425f61ce0f4f9e700d0e11698918b09f939041208b14fccd2177978b124b->leave($__internal_40b7425f61ce0f4f9e700d0e11698918b09f939041208b14fccd2177978b124b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-extglob/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * is-extglob <https://github.com/jonschlinkert/is-extglob>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

module.exports = function isExtglob(str) {
  return typeof str === 'string'
    && /[@?!+*]\\(/.test(str);
};
", "node_modules/is-extglob/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-extglob/index.js");
    }
}
