<?php

/* node_modules/lodash/fp/sortBy.js */
class __TwigTemplate_93590037edfa3c7a16a404f1e25ba5b77f0781ed0b79f6d7f4c32252551b3fb9 extends Twig_Template
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
        $__internal_d2e3df0b166f92814daacae08d784795bc634ec42e0962766227bc44bff864ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e3df0b166f92814daacae08d784795bc634ec42e0962766227bc44bff864ed->enter($__internal_d2e3df0b166f92814daacae08d784795bc634ec42e0962766227bc44bff864ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortBy', require('../sortBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d2e3df0b166f92814daacae08d784795bc634ec42e0962766227bc44bff864ed->leave($__internal_d2e3df0b166f92814daacae08d784795bc634ec42e0962766227bc44bff864ed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortBy', require('../sortBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortBy.js");
    }
}
