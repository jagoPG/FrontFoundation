<?php

/* node_modules/lodash/fp/bindAll.js */
class __TwigTemplate_f45d1c875b826f6ac1a62d46060a2707539fbdcaa31c9b101b15b03881a7b4fc extends Twig_Template
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
        $__internal_eeba683a6e9951adb17f49098a4bd38bcbd33b6d33d6be7a9f445ffeb247d078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeba683a6e9951adb17f49098a4bd38bcbd33b6d33d6be7a9f445ffeb247d078->enter($__internal_eeba683a6e9951adb17f49098a4bd38bcbd33b6d33d6be7a9f445ffeb247d078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/bindAll.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('bindAll', require('../bindAll'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_eeba683a6e9951adb17f49098a4bd38bcbd33b6d33d6be7a9f445ffeb247d078->leave($__internal_eeba683a6e9951adb17f49098a4bd38bcbd33b6d33d6be7a9f445ffeb247d078_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/bindAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('bindAll', require('../bindAll'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/bindAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/bindAll.js");
    }
}
