<?php

/* node_modules/es5-ext/test/array/from/index.js */
class __TwigTemplate_e872f0fdeee206c5289a9635cf846c51a20de00c19cfb24b0a7207a41592dbf3 extends Twig_Template
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
        $__internal_16443e2c0907ba02d4769d509b1341d91774281a4cb71dfefe58bf04a1dab9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16443e2c0907ba02d4769d509b1341d91774281a4cb71dfefe58bf04a1dab9d9->enter($__internal_16443e2c0907ba02d4769d509b1341d91774281a4cb71dfefe58bf04a1dab9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/from/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./shim\");
";
        
        $__internal_16443e2c0907ba02d4769d509b1341d91774281a4cb71dfefe58bf04a1dab9d9->leave($__internal_16443e2c0907ba02d4769d509b1341d91774281a4cb71dfefe58bf04a1dab9d9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/from/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./shim\");
", "node_modules/es5-ext/test/array/from/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/from/index.js");
    }
}
