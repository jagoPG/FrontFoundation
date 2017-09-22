<?php

/* node_modules/normalize-path/index.js */
class __TwigTemplate_e230383aa9a3d0505d95718832408e2296b2f0744c767d3e72333b151f4210f3 extends Twig_Template
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
        $__internal_5c56d08e4ab16269bb99cd10cab14db70a83b440b10f2c56bd5ec9b2c444812f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c56d08e4ab16269bb99cd10cab14db70a83b440b10f2c56bd5ec9b2c444812f->enter($__internal_5c56d08e4ab16269bb99cd10cab14db70a83b440b10f2c56bd5ec9b2c444812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/normalize-path/index.js"));

        // line 1
        echo "/*!
 * normalize-path <https://github.com/jonschlinkert/normalize-path>
 *
 * Copyright (c) 2014-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

var removeTrailingSeparator = require('remove-trailing-separator');

module.exports = function normalizePath(str, stripTrailing) {
  if (typeof str !== 'string') {
    throw new TypeError('expected a string');
  }
  str = str.replace(/[\\\\\\/]+/g, '/');
  if (stripTrailing !== false) {
    str = removeTrailingSeparator(str);
  }
  return str;
};
";
        
        $__internal_5c56d08e4ab16269bb99cd10cab14db70a83b440b10f2c56bd5ec9b2c444812f->leave($__internal_5c56d08e4ab16269bb99cd10cab14db70a83b440b10f2c56bd5ec9b2c444812f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/normalize-path/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * normalize-path <https://github.com/jonschlinkert/normalize-path>
 *
 * Copyright (c) 2014-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

var removeTrailingSeparator = require('remove-trailing-separator');

module.exports = function normalizePath(str, stripTrailing) {
  if (typeof str !== 'string') {
    throw new TypeError('expected a string');
  }
  str = str.replace(/[\\\\\\/]+/g, '/');
  if (stripTrailing !== false) {
    str = removeTrailingSeparator(str);
  }
  return str;
};
", "node_modules/normalize-path/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/normalize-path/index.js");
    }
}
