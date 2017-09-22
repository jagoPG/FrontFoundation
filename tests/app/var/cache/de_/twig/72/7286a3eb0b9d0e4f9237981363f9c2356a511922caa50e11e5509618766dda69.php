<?php

/* node_modules/loader-utils/lib/getRemainingRequest.js */
class __TwigTemplate_d271448146c74b91ae5b45bc48a8d781c354364c664d29a081376036e37f8e7d extends Twig_Template
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
        $__internal_40616029e71a7c2259a2882a776afcdb7ae76a34b2fbbc6452dbf139897446fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40616029e71a7c2259a2882a776afcdb7ae76a34b2fbbc6452dbf139897446fd->enter($__internal_40616029e71a7c2259a2882a776afcdb7ae76a34b2fbbc6452dbf139897446fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/getRemainingRequest.js"));

        // line 1
        echo "\"use strict\";

function getRemainingRequest(loaderContext) {
\tif(loaderContext.remainingRequest)
\t\treturn loaderContext.remainingRequest;
\tconst request = loaderContext.loaders
\t\t.slice(loaderContext.loaderIndex + 1)
\t\t.map(obj => obj.request)
\t\t.concat([loaderContext.resource]);
\treturn request.join(\"!\");
}

module.exports = getRemainingRequest;
";
        
        $__internal_40616029e71a7c2259a2882a776afcdb7ae76a34b2fbbc6452dbf139897446fd->leave($__internal_40616029e71a7c2259a2882a776afcdb7ae76a34b2fbbc6452dbf139897446fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/getRemainingRequest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

function getRemainingRequest(loaderContext) {
\tif(loaderContext.remainingRequest)
\t\treturn loaderContext.remainingRequest;
\tconst request = loaderContext.loaders
\t\t.slice(loaderContext.loaderIndex + 1)
\t\t.map(obj => obj.request)
\t\t.concat([loaderContext.resource]);
\treturn request.join(\"!\");
}

module.exports = getRemainingRequest;
", "node_modules/loader-utils/lib/getRemainingRequest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/getRemainingRequest.js");
    }
}
