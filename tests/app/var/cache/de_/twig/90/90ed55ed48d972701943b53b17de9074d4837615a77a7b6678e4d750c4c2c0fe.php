<?php

/* node_modules/is-dotfile/index.js */
class __TwigTemplate_560d168f62cbfaeb6afa90699292da1d3a6004a0887112194857a79d92057f8c extends Twig_Template
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
        $__internal_f8f6ea0ae77817e8b7bcb0cdb4e12c0457bd4839c26712616bfba738dc501963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f6ea0ae77817e8b7bcb0cdb4e12c0457bd4839c26712616bfba738dc501963->enter($__internal_f8f6ea0ae77817e8b7bcb0cdb4e12c0457bd4839c26712616bfba738dc501963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-dotfile/index.js"));

        // line 1
        echo "/*!
 * is-dotfile <https://github.com/jonschlinkert/is-dotfile>
 *
 * Copyright (c) 2015-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

module.exports = function(str) {
  if (str.charCodeAt(0) === 46 /* . */ && str.indexOf('/', 1) === -1) {
    return true;
  }
  var slash = str.lastIndexOf('/');
  return slash !== -1 ? str.charCodeAt(slash + 1) === 46  /* . */ : false;
};
";
        
        $__internal_f8f6ea0ae77817e8b7bcb0cdb4e12c0457bd4839c26712616bfba738dc501963->leave($__internal_f8f6ea0ae77817e8b7bcb0cdb4e12c0457bd4839c26712616bfba738dc501963_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-dotfile/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * is-dotfile <https://github.com/jonschlinkert/is-dotfile>
 *
 * Copyright (c) 2015-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

module.exports = function(str) {
  if (str.charCodeAt(0) === 46 /* . */ && str.indexOf('/', 1) === -1) {
    return true;
  }
  var slash = str.lastIndexOf('/');
  return slash !== -1 ? str.charCodeAt(slash + 1) === 46  /* . */ : false;
};
", "node_modules/is-dotfile/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-dotfile/index.js");
    }
}
