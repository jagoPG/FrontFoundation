<?php

/* node_modules/debug/src/index.js */
class __TwigTemplate_4a4efa2311199487a4a104767c3afddb6b04e74cb77d1b06f513bc9c43af7bff extends Twig_Template
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
        $__internal_eac7b4f1b4aad25eedce56b3c94b4275eb8930479fc3dd87026023424dd8192f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac7b4f1b4aad25eedce56b3c94b4275eb8930479fc3dd87026023424dd8192f->enter($__internal_eac7b4f1b4aad25eedce56b3c94b4275eb8930479fc3dd87026023424dd8192f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/debug/src/index.js"));

        // line 1
        echo "/**
 * Detect Electron renderer process, which is node, but we should
 * treat as a browser.
 */

if (typeof process !== 'undefined' && process.type === 'renderer') {
  module.exports = require('./browser.js');
} else {
  module.exports = require('./node.js');
}
";
        
        $__internal_eac7b4f1b4aad25eedce56b3c94b4275eb8930479fc3dd87026023424dd8192f->leave($__internal_eac7b4f1b4aad25eedce56b3c94b4275eb8930479fc3dd87026023424dd8192f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/debug/src/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Detect Electron renderer process, which is node, but we should
 * treat as a browser.
 */

if (typeof process !== 'undefined' && process.type === 'renderer') {
  module.exports = require('./browser.js');
} else {
  module.exports = require('./node.js');
}
", "node_modules/debug/src/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/debug/src/index.js");
    }
}
