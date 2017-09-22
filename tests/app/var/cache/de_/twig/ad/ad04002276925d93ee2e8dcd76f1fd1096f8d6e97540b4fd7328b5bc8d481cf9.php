<?php

/* node_modules/lodash/fp/reverse.js */
class __TwigTemplate_c77734fd9823341cdd6ffc4b740dcf1ac438a1c6068adb071e5ee4482fad8217 extends Twig_Template
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
        $__internal_d4abfc2295500e3d448883a8ad9e23683921116082545fc9be721c9aa268a42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4abfc2295500e3d448883a8ad9e23683921116082545fc9be721c9aa268a42d->enter($__internal_d4abfc2295500e3d448883a8ad9e23683921116082545fc9be721c9aa268a42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/reverse.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('reverse', require('../reverse'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d4abfc2295500e3d448883a8ad9e23683921116082545fc9be721c9aa268a42d->leave($__internal_d4abfc2295500e3d448883a8ad9e23683921116082545fc9be721c9aa268a42d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/reverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('reverse', require('../reverse'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/reverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/reverse.js");
    }
}
