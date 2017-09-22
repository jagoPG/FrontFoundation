<?php

/* node_modules/lodash/fp/delay.js */
class __TwigTemplate_26f252f2454e938de5a921e683abae2fc383d636e33bcbac1570069ca747de5a extends Twig_Template
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
        $__internal_5b1fe2583ea6ba7b976909352997687ba40df3da4af8c9cbfc728e4123b55375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1fe2583ea6ba7b976909352997687ba40df3da4af8c9cbfc728e4123b55375->enter($__internal_5b1fe2583ea6ba7b976909352997687ba40df3da4af8c9cbfc728e4123b55375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/delay.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('delay', require('../delay'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5b1fe2583ea6ba7b976909352997687ba40df3da4af8c9cbfc728e4123b55375->leave($__internal_5b1fe2583ea6ba7b976909352997687ba40df3da4af8c9cbfc728e4123b55375_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('delay', require('../delay'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/delay.js");
    }
}
