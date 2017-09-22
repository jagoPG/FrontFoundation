<?php

/* node_modules/isobject/index.js */
class __TwigTemplate_ddf80d912ecaf510095bc084bd31fc6fa70cd94fddb8bbdfdbbaf22b5bd91fc7 extends Twig_Template
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
        $__internal_cb87dac730733faaafa4cd2cee2832c470fca369fe91cdf733361282eb0db0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb87dac730733faaafa4cd2cee2832c470fca369fe91cdf733361282eb0db0bc->enter($__internal_cb87dac730733faaafa4cd2cee2832c470fca369fe91cdf733361282eb0db0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isobject/index.js"));

        // line 1
        echo "/*!
 * isobject <https://github.com/jonschlinkert/isobject>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var isArray = require('isarray');

module.exports = function isObject(val) {
  return val != null && typeof val === 'object' && isArray(val) === false;
};
";
        
        $__internal_cb87dac730733faaafa4cd2cee2832c470fca369fe91cdf733361282eb0db0bc->leave($__internal_cb87dac730733faaafa4cd2cee2832c470fca369fe91cdf733361282eb0db0bc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isobject/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * isobject <https://github.com/jonschlinkert/isobject>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var isArray = require('isarray');

module.exports = function isObject(val) {
  return val != null && typeof val === 'object' && isArray(val) === false;
};
", "node_modules/isobject/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isobject/index.js");
    }
}
