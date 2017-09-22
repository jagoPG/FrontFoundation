<?php

/* node_modules/decamelize/index.js */
class __TwigTemplate_181897c8f12ece6f6da3a4556422f4d9e440d7f057d93022160cb663980f0422 extends Twig_Template
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
        $__internal_985cce61788b154dde12011480976b2795bb8bb084f04b1c00c0831fea867244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985cce61788b154dde12011480976b2795bb8bb084f04b1c00c0831fea867244->enter($__internal_985cce61788b154dde12011480976b2795bb8bb084f04b1c00c0831fea867244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/decamelize/index.js"));

        // line 1
        echo "'use strict';
module.exports = function (str, sep) {
\tif (typeof str !== 'string') {
\t\tthrow new TypeError('Expected a string');
\t}

\tsep = typeof sep === 'undefined' ? '_' : sep;

\treturn str
\t\t.replace(/([a-z\\d])([A-Z])/g, '\$1' + sep + '\$2')
\t\t.replace(/([A-Z]+)([A-Z][a-z\\d]+)/g, '\$1' + sep + '\$2')
\t\t.toLowerCase();
};
";
        
        $__internal_985cce61788b154dde12011480976b2795bb8bb084f04b1c00c0831fea867244->leave($__internal_985cce61788b154dde12011480976b2795bb8bb084f04b1c00c0831fea867244_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/decamelize/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function (str, sep) {
\tif (typeof str !== 'string') {
\t\tthrow new TypeError('Expected a string');
\t}

\tsep = typeof sep === 'undefined' ? '_' : sep;

\treturn str
\t\t.replace(/([a-z\\d])([A-Z])/g, '\$1' + sep + '\$2')
\t\t.replace(/([A-Z]+)([A-Z][a-z\\d]+)/g, '\$1' + sep + '\$2')
\t\t.toLowerCase();
};
", "node_modules/decamelize/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/decamelize/index.js");
    }
}
