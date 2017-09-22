<?php

/* node_modules/core-js/library/fn/weak-set/index.js */
class __TwigTemplate_229b8ed46311939331d1d851dde1c5f35ecc146992ae3c7f206ae62c123a6dc0 extends Twig_Template
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
        $__internal_d624a7c9e8eb2ef2c48a9daa09f51c55c35cbfa575022a7f5e83beca254ac41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d624a7c9e8eb2ef2c48a9daa09f51c55c35cbfa575022a7f5e83beca254ac41c->enter($__internal_d624a7c9e8eb2ef2c48a9daa09f51c55c35cbfa575022a7f5e83beca254ac41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/weak-set/index.js"));

        // line 1
        echo "require('../../modules/es6.object.to-string');
require('../../modules/web.dom.iterable');
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.of');
require('../../modules/es7.weak-set.from');
module.exports = require('../../modules/_core').WeakSet;
";
        
        $__internal_d624a7c9e8eb2ef2c48a9daa09f51c55c35cbfa575022a7f5e83beca254ac41c->leave($__internal_d624a7c9e8eb2ef2c48a9daa09f51c55c35cbfa575022a7f5e83beca254ac41c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/weak-set/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.to-string');
require('../../modules/web.dom.iterable');
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.of');
require('../../modules/es7.weak-set.from');
module.exports = require('../../modules/_core').WeakSet;
", "node_modules/core-js/library/fn/weak-set/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/weak-set/index.js");
    }
}
