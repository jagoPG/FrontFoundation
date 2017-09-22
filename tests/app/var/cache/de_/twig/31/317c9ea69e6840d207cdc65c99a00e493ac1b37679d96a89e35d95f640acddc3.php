<?php

/* node_modules/core-js/fn/weak-map.js */
class __TwigTemplate_f0c3da880dc15dd81973d5a65a13b46a3b64c0c2882f0149e43316de2fb3fe3f extends Twig_Template
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
        $__internal_805d54c6b8f6b42e98321d8d7e41b074f67a5653d7dba9df6f3f7f56fa675ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805d54c6b8f6b42e98321d8d7e41b074f67a5653d7dba9df6f3f7f56fa675ebf->enter($__internal_805d54c6b8f6b42e98321d8d7e41b074f67a5653d7dba9df6f3f7f56fa675ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/weak-map.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-map');
require('../modules/es7.weak-map.of');
require('../modules/es7.weak-map.from');
module.exports = require('../modules/_core').WeakMap;
";
        
        $__internal_805d54c6b8f6b42e98321d8d7e41b074f67a5653d7dba9df6f3f7f56fa675ebf->leave($__internal_805d54c6b8f6b42e98321d8d7e41b074f67a5653d7dba9df6f3f7f56fa675ebf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/weak-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-map');
require('../modules/es7.weak-map.of');
require('../modules/es7.weak-map.from');
module.exports = require('../modules/_core').WeakMap;
", "node_modules/core-js/fn/weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/weak-map.js");
    }
}
