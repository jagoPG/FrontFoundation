<?php

/* node_modules/filename-regex/index.js */
class __TwigTemplate_d65e868e3206acc4d2da88c2c8f2b94a9f104a550628ac546239de0b47c0749c extends Twig_Template
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
        $__internal_c24cee8be3f8bc3bd4ab7668a775dac57d0eac7f87484e6d669c418203fffed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24cee8be3f8bc3bd4ab7668a775dac57d0eac7f87484e6d669c418203fffed8->enter($__internal_c24cee8be3f8bc3bd4ab7668a775dac57d0eac7f87484e6d669c418203fffed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/filename-regex/index.js"));

        // line 1
        echo "/*!
 * filename-regex <https://github.com/regexps/filename-regex>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert
 * Licensed under the MIT license.
 */

module.exports = function filenameRegex() {
  return /([^\\\\\\/]+)\$/;
};
";
        
        $__internal_c24cee8be3f8bc3bd4ab7668a775dac57d0eac7f87484e6d669c418203fffed8->leave($__internal_c24cee8be3f8bc3bd4ab7668a775dac57d0eac7f87484e6d669c418203fffed8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/filename-regex/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * filename-regex <https://github.com/regexps/filename-regex>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert
 * Licensed under the MIT license.
 */

module.exports = function filenameRegex() {
  return /([^\\\\\\/]+)\$/;
};
", "node_modules/filename-regex/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/filename-regex/index.js");
    }
}
