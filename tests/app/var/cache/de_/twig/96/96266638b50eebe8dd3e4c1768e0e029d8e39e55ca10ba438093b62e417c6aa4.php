<?php

/* node_modules/loader-utils/lib/getCurrentRequest.js */
class __TwigTemplate_581117c19cb2b9ab15a41a058f8cf8bdd1a7e62ff9fdcbb995245d08ab2116ed extends Twig_Template
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
        $__internal_e69b6d838ab22d6eaca27a8bc3771535991e152edd3fc2b83c0d5fe8ad70a0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69b6d838ab22d6eaca27a8bc3771535991e152edd3fc2b83c0d5fe8ad70a0c0->enter($__internal_e69b6d838ab22d6eaca27a8bc3771535991e152edd3fc2b83c0d5fe8ad70a0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/getCurrentRequest.js"));

        // line 1
        echo "\"use strict\";

function getCurrentRequest(loaderContext) {
\tif(loaderContext.currentRequest)
\t\treturn loaderContext.currentRequest;
\tconst request = loaderContext.loaders
\t\t.slice(loaderContext.loaderIndex)
\t\t.map(obj => obj.request)
\t\t.concat([loaderContext.resource]);
\treturn request.join(\"!\");
}

module.exports = getCurrentRequest;
";
        
        $__internal_e69b6d838ab22d6eaca27a8bc3771535991e152edd3fc2b83c0d5fe8ad70a0c0->leave($__internal_e69b6d838ab22d6eaca27a8bc3771535991e152edd3fc2b83c0d5fe8ad70a0c0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/getCurrentRequest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

function getCurrentRequest(loaderContext) {
\tif(loaderContext.currentRequest)
\t\treturn loaderContext.currentRequest;
\tconst request = loaderContext.loaders
\t\t.slice(loaderContext.loaderIndex)
\t\t.map(obj => obj.request)
\t\t.concat([loaderContext.resource]);
\treturn request.join(\"!\");
}

module.exports = getCurrentRequest;
", "node_modules/loader-utils/lib/getCurrentRequest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/getCurrentRequest.js");
    }
}
