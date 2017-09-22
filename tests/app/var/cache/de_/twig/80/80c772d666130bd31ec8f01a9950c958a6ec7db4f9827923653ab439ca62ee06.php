<?php

/* node_modules/lodash/fp/isEqual.js */
class __TwigTemplate_0a70db11384b88029a1b10e791dedb047094a212d5e3f017078ae6994d50f041 extends Twig_Template
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
        $__internal_90734d71eb2f0533388ca7e30b30c2f55db29d98a2bd7c118fba3c1919bf9258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90734d71eb2f0533388ca7e30b30c2f55db29d98a2bd7c118fba3c1919bf9258->enter($__internal_90734d71eb2f0533388ca7e30b30c2f55db29d98a2bd7c118fba3c1919bf9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isEqual.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isEqual', require('../isEqual'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_90734d71eb2f0533388ca7e30b30c2f55db29d98a2bd7c118fba3c1919bf9258->leave($__internal_90734d71eb2f0533388ca7e30b30c2f55db29d98a2bd7c118fba3c1919bf9258_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isEqual.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isEqual', require('../isEqual'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isEqual.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isEqual.js");
    }
}
