<?php

/* node_modules/is-posix-bracket/index.js */
class __TwigTemplate_cd8b816b475971f78827d33daba86eb2a4a53e3c39ab54686c9cca9575129a32 extends Twig_Template
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
        $__internal_73948d94b4bb4470204d78cbdc291cefaaf2b88804af09c60249d268304c0a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73948d94b4bb4470204d78cbdc291cefaaf2b88804af09c60249d268304c0a5a->enter($__internal_73948d94b4bb4470204d78cbdc291cefaaf2b88804af09c60249d268304c0a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-posix-bracket/index.js"));

        // line 1
        echo "/*!
 * is-posix-bracket <https://github.com/jonschlinkert/is-posix-bracket>
 *
 * Copyright (c) 2015-2016, Jon Schlinkert.
 * Licensed under the MIT License.
 */

module.exports = function isPosixBracket(str) {
  return typeof str === 'string' && /\\[([:.=+])(?:[^\\[\\]]|)+\\1\\]/.test(str);
};
";
        
        $__internal_73948d94b4bb4470204d78cbdc291cefaaf2b88804af09c60249d268304c0a5a->leave($__internal_73948d94b4bb4470204d78cbdc291cefaaf2b88804af09c60249d268304c0a5a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-posix-bracket/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * is-posix-bracket <https://github.com/jonschlinkert/is-posix-bracket>
 *
 * Copyright (c) 2015-2016, Jon Schlinkert.
 * Licensed under the MIT License.
 */

module.exports = function isPosixBracket(str) {
  return typeof str === 'string' && /\\[([:.=+])(?:[^\\[\\]]|)+\\1\\]/.test(str);
};
", "node_modules/is-posix-bracket/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-posix-bracket/index.js");
    }
}
