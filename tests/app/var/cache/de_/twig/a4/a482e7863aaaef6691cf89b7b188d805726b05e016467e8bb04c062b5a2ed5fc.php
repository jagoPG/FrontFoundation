<?php

/* node_modules/es5-ext/number/is-integer/shim.js */
class __TwigTemplate_eab2bfedf75a184aeea423e6c25f3cb76d63584f39156e813f0735ff79b79bad extends Twig_Template
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
        $__internal_4a09f123db8cf200e54fa74f0a65ea1a8177e1ebf2ca03068531e053863f8748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a09f123db8cf200e54fa74f0a65ea1a8177e1ebf2ca03068531e053863f8748->enter($__internal_4a09f123db8cf200e54fa74f0a65ea1a8177e1ebf2ca03068531e053863f8748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-integer/shim.js"));

        // line 1
        echo "// Credit: http://www.2ality.com/2014/05/is-integer.html

\"use strict\";

module.exports = function (value) {
\tif (typeof value !== \"number\") return false;
\treturn value % 1 === 0;
};
";
        
        $__internal_4a09f123db8cf200e54fa74f0a65ea1a8177e1ebf2ca03068531e053863f8748->leave($__internal_4a09f123db8cf200e54fa74f0a65ea1a8177e1ebf2ca03068531e053863f8748_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-integer/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Credit: http://www.2ality.com/2014/05/is-integer.html

\"use strict\";

module.exports = function (value) {
\tif (typeof value !== \"number\") return false;
\treturn value % 1 === 0;
};
", "node_modules/es5-ext/number/is-integer/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-integer/shim.js");
    }
}
