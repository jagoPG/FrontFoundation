<?php

/* node_modules/set-immediate-shim/index.js */
class __TwigTemplate_36e816ca385dc2b3d65eb47aaefc543e44a9c722e3fdd2cf92014c7bccbd53b8 extends Twig_Template
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
        $__internal_5e3a7a309d729146bd6b9fef7abf4e22bd732eec4975edeaa47e3271c5085a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3a7a309d729146bd6b9fef7abf4e22bd732eec4975edeaa47e3271c5085a6f->enter($__internal_5e3a7a309d729146bd6b9fef7abf4e22bd732eec4975edeaa47e3271c5085a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/set-immediate-shim/index.js"));

        // line 1
        echo "'use strict';
module.exports = typeof setImmediate === 'function' ? setImmediate :
\tfunction setImmediate() {
\t\tvar args = [].slice.apply(arguments);
\t\targs.splice(1, 0, 0);
\t\tsetTimeout.apply(null, args);
\t};
";
        
        $__internal_5e3a7a309d729146bd6b9fef7abf4e22bd732eec4975edeaa47e3271c5085a6f->leave($__internal_5e3a7a309d729146bd6b9fef7abf4e22bd732eec4975edeaa47e3271c5085a6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/set-immediate-shim/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = typeof setImmediate === 'function' ? setImmediate :
\tfunction setImmediate() {
\t\tvar args = [].slice.apply(arguments);
\t\targs.splice(1, 0, 0);
\t\tsetTimeout.apply(null, args);
\t};
", "node_modules/set-immediate-shim/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/set-immediate-shim/index.js");
    }
}
