<?php

/* node_modules/has-flag/index.js */
class __TwigTemplate_213fc21dd75e0d2c97385caaa181691c80bc369bf09335820af873846f9fc778 extends Twig_Template
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
        $__internal_a18c7baaff489c6000cc22f25fdb4997b0ff1e6026a85771f51c472c7f24d308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18c7baaff489c6000cc22f25fdb4997b0ff1e6026a85771f51c472c7f24d308->enter($__internal_a18c7baaff489c6000cc22f25fdb4997b0ff1e6026a85771f51c472c7f24d308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/has-flag/index.js"));

        // line 1
        echo "'use strict';
module.exports = function (flag, argv) {
\targv = argv || process.argv;

\tvar terminatorPos = argv.indexOf('--');
\tvar prefix = /^-{1,2}/.test(flag) ? '' : '--';
\tvar pos = argv.indexOf(prefix + flag);

\treturn pos !== -1 && (terminatorPos === -1 ? true : pos < terminatorPos);
};
";
        
        $__internal_a18c7baaff489c6000cc22f25fdb4997b0ff1e6026a85771f51c472c7f24d308->leave($__internal_a18c7baaff489c6000cc22f25fdb4997b0ff1e6026a85771f51c472c7f24d308_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/has-flag/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function (flag, argv) {
\targv = argv || process.argv;

\tvar terminatorPos = argv.indexOf('--');
\tvar prefix = /^-{1,2}/.test(flag) ? '' : '--';
\tvar pos = argv.indexOf(prefix + flag);

\treturn pos !== -1 && (terminatorPos === -1 ? true : pos < terminatorPos);
};
", "node_modules/has-flag/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/has-flag/index.js");
    }
}
