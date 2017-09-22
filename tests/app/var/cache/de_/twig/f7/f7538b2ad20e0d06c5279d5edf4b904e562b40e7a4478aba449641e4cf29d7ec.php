<?php

/* node_modules/lodash/fp/times.js */
class __TwigTemplate_c9c1b33e57662a49092d7dce3a5f1fe4a59396b53101adaea3d4c1f084dfa26f extends Twig_Template
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
        $__internal_49c4d1af12faf87061628747f5cee3195619b3de75d01379379c97729672e3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c4d1af12faf87061628747f5cee3195619b3de75d01379379c97729672e3cd->enter($__internal_49c4d1af12faf87061628747f5cee3195619b3de75d01379379c97729672e3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/times.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('times', require('../times'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_49c4d1af12faf87061628747f5cee3195619b3de75d01379379c97729672e3cd->leave($__internal_49c4d1af12faf87061628747f5cee3195619b3de75d01379379c97729672e3cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/times.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('times', require('../times'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/times.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/times.js");
    }
}
