<?php

/* node_modules/lodash/fp/spread.js */
class __TwigTemplate_52dbb0e01cbcac7ed6bb87421d0278b2dd48ca603be0dcc2f3938dec5b442c7e extends Twig_Template
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
        $__internal_8008b240a524831e2657bd73947d0ef4fc56190faa8f55be9d958d95be8efe75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8008b240a524831e2657bd73947d0ef4fc56190faa8f55be9d958d95be8efe75->enter($__internal_8008b240a524831e2657bd73947d0ef4fc56190faa8f55be9d958d95be8efe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/spread.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('spread', require('../spread'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_8008b240a524831e2657bd73947d0ef4fc56190faa8f55be9d958d95be8efe75->leave($__internal_8008b240a524831e2657bd73947d0ef4fc56190faa8f55be9d958d95be8efe75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/spread.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('spread', require('../spread'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/spread.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/spread.js");
    }
}
