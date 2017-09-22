<?php

/* node_modules/core-js/fn/string/big.js */
class __TwigTemplate_036f294e04c46403728ff61c5a84f390f2dc907be2d58f3057db5d7a31bea6f4 extends Twig_Template
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
        $__internal_1fb06f56ffdac03ba6d2547b52cedbdb0c6683fbe5b9b8802d887f73a14d0300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb06f56ffdac03ba6d2547b52cedbdb0c6683fbe5b9b8802d887f73a14d0300->enter($__internal_1fb06f56ffdac03ba6d2547b52cedbdb0c6683fbe5b9b8802d887f73a14d0300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/big.js"));

        // line 1
        echo "require('../../modules/es6.string.big');
module.exports = require('../../modules/_core').String.big;
";
        
        $__internal_1fb06f56ffdac03ba6d2547b52cedbdb0c6683fbe5b9b8802d887f73a14d0300->leave($__internal_1fb06f56ffdac03ba6d2547b52cedbdb0c6683fbe5b9b8802d887f73a14d0300_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/big.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.big');
module.exports = require('../../modules/_core').String.big;
", "node_modules/core-js/fn/string/big.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/big.js");
    }
}
