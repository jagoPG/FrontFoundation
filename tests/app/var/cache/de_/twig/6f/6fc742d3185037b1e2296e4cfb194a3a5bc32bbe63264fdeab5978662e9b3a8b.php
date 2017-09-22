<?php

/* node_modules/core-js/library/fn/string/virtual/match-all.js */
class __TwigTemplate_da3c73d2e7f2cf46516bba4e7942570a2c02a41a9ed7addfe1e905d120283cab extends Twig_Template
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
        $__internal_a302249b1e3951ce4c159c4c04342f8b40688d9e667e54ce4bc33348a6c1c82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a302249b1e3951ce4c159c4c04342f8b40688d9e667e54ce4bc33348a6c1c82c->enter($__internal_a302249b1e3951ce4c159c4c04342f8b40688d9e667e54ce4bc33348a6c1c82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/match-all.js"));

        // line 1
        echo "require('../../../modules/es7.string.match-all');
module.exports = require('../../../modules/_entry-virtual')('String').matchAll;
";
        
        $__internal_a302249b1e3951ce4c159c4c04342f8b40688d9e667e54ce4bc33348a6c1c82c->leave($__internal_a302249b1e3951ce4c159c4c04342f8b40688d9e667e54ce4bc33348a6c1c82c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/match-all.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.match-all');
module.exports = require('../../../modules/_entry-virtual')('String').matchAll;
", "node_modules/core-js/library/fn/string/virtual/match-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/match-all.js");
    }
}
