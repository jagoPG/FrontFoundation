<?php

/* node_modules/lodash/fp/bindKey.js */
class __TwigTemplate_252b14112e9134110ef17bc03d4be5fc95820ba72dc9fd237083922fcc5868b7 extends Twig_Template
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
        $__internal_db665c8141aaef324a011dd705282a4a05051a7e0716f0488eda115fa2ecae77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db665c8141aaef324a011dd705282a4a05051a7e0716f0488eda115fa2ecae77->enter($__internal_db665c8141aaef324a011dd705282a4a05051a7e0716f0488eda115fa2ecae77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/bindKey.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('bindKey', require('../bindKey'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_db665c8141aaef324a011dd705282a4a05051a7e0716f0488eda115fa2ecae77->leave($__internal_db665c8141aaef324a011dd705282a4a05051a7e0716f0488eda115fa2ecae77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/bindKey.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('bindKey', require('../bindKey'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/bindKey.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/bindKey.js");
    }
}
