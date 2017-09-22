<?php

/* node_modules/lodash/fp/commit.js */
class __TwigTemplate_c8a25135750507396a27188b6c7da097527f912ba8afe4a9b1cbe1b34d62a033 extends Twig_Template
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
        $__internal_1e47d64c5c2e484767c083d8c0e034fcb9ddf827cc0a5166bbd926c1a1489048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e47d64c5c2e484767c083d8c0e034fcb9ddf827cc0a5166bbd926c1a1489048->enter($__internal_1e47d64c5c2e484767c083d8c0e034fcb9ddf827cc0a5166bbd926c1a1489048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/commit.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('commit', require('../commit'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_1e47d64c5c2e484767c083d8c0e034fcb9ddf827cc0a5166bbd926c1a1489048->leave($__internal_1e47d64c5c2e484767c083d8c0e034fcb9ddf827cc0a5166bbd926c1a1489048_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/commit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('commit', require('../commit'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/commit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/commit.js");
    }
}
