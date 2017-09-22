<?php

/* node_modules/fsevents/node_modules/rc/browser.js */
class __TwigTemplate_c78f34d04a85911974364f07b1db7ce75d97371b56e4c0c7ad04b5f4689c3a0e extends Twig_Template
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
        $__internal_1b03aec03a70f9a0925bcdbc85b0081a7160c926dcd71860785c6621eb7d0a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b03aec03a70f9a0925bcdbc85b0081a7160c926dcd71860785c6621eb7d0a27->enter($__internal_1b03aec03a70f9a0925bcdbc85b0081a7160c926dcd71860785c6621eb7d0a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/browser.js"));

        // line 1
        echo "
// when this is loaded into the browser, 
// just use the defaults...

module.exports = function (name, defaults) {
  return defaults
}
";
        
        $__internal_1b03aec03a70f9a0925bcdbc85b0081a7160c926dcd71860785c6621eb7d0a27->leave($__internal_1b03aec03a70f9a0925bcdbc85b0081a7160c926dcd71860785c6621eb7d0a27_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
// when this is loaded into the browser, 
// just use the defaults...

module.exports = function (name, defaults) {
  return defaults
}
", "node_modules/fsevents/node_modules/rc/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/browser.js");
    }
}
