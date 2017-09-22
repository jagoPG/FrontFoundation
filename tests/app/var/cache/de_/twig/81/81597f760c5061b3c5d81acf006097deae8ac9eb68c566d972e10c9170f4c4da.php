<?php

/* node_modules/lodash/fp/unionWith.js */
class __TwigTemplate_02a8e8fda61eec7e703f767f66244aa4abc2ac65d140b6ad4307a683b6c324ab extends Twig_Template
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
        $__internal_c464dd50f6ee7bfdbe7aac25b96f1e86bd1a494c424b563826c526d2d2962b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c464dd50f6ee7bfdbe7aac25b96f1e86bd1a494c424b563826c526d2d2962b64->enter($__internal_c464dd50f6ee7bfdbe7aac25b96f1e86bd1a494c424b563826c526d2d2962b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/unionWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('unionWith', require('../unionWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c464dd50f6ee7bfdbe7aac25b96f1e86bd1a494c424b563826c526d2d2962b64->leave($__internal_c464dd50f6ee7bfdbe7aac25b96f1e86bd1a494c424b563826c526d2d2962b64_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/unionWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('unionWith', require('../unionWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/unionWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/unionWith.js");
    }
}
