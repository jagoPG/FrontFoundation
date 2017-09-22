<?php

/* node_modules/es5-ext/test/error/valid-error.js */
class __TwigTemplate_61fc434bc0ca0edb9dcab6a2fd522899c95e25f953f8773e9b3880baf700382b extends Twig_Template
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
        $__internal_8ab3d4539087e98c3778ebb53be1604285d9f019e1f15542f76c2574dafdbd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab3d4539087e98c3778ebb53be1604285d9f019e1f15542f76c2574dafdbd8d->enter($__internal_8ab3d4539087e98c3778ebb53be1604285d9f019e1f15542f76c2574dafdbd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/error/valid-error.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar e = new Error();
\ta(t(e), e, \"Error\");
\ta.throws(function () {
\t\tt({});
\t}, \"Other\");
};
";
        
        $__internal_8ab3d4539087e98c3778ebb53be1604285d9f019e1f15542f76c2574dafdbd8d->leave($__internal_8ab3d4539087e98c3778ebb53be1604285d9f019e1f15542f76c2574dafdbd8d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/error/valid-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar e = new Error();
\ta(t(e), e, \"Error\");
\ta.throws(function () {
\t\tt({});
\t}, \"Other\");
};
", "node_modules/es5-ext/test/error/valid-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/error/valid-error.js");
    }
}
