<?php

/* node_modules/es5-ext/number/min-safe-integer/index.js */
class __TwigTemplate_f1a97e027a3c3618179a9619429a555007005e1c603f262325ebed82f4539771 extends Twig_Template
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
        $__internal_7d73f75b28f0db296838f3939af55b0030ab596903676cae404eed5405fa0464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d73f75b28f0db296838f3939af55b0030ab596903676cae404eed5405fa0464->enter($__internal_7d73f75b28f0db296838f3939af55b0030ab596903676cae404eed5405fa0464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/min-safe-integer/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = -(Math.pow(2, 53) - 1);
";
        
        $__internal_7d73f75b28f0db296838f3939af55b0030ab596903676cae404eed5405fa0464->leave($__internal_7d73f75b28f0db296838f3939af55b0030ab596903676cae404eed5405fa0464_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/min-safe-integer/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = -(Math.pow(2, 53) - 1);
", "node_modules/es5-ext/number/min-safe-integer/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/min-safe-integer/index.js");
    }
}
