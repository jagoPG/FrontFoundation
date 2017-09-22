<?php

/* node_modules/enhanced-resolve/lib/getInnerRequest.js */
class __TwigTemplate_092b6ae7e429b683991c17f889a17bb843be80f392d705fb1281dd729c4d1cab extends Twig_Template
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
        $__internal_4e4709e856b4a150cb6f846ad4297271ad061580df919a4fc0f855f5335f27e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4709e856b4a150cb6f846ad4297271ad061580df919a4fc0f855f5335f27e7->enter($__internal_4e4709e856b4a150cb6f846ad4297271ad061580df919a4fc0f855f5335f27e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/getInnerRequest.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
module.exports = function getInnerRequest(resolver, request) {
\tif(typeof request.__innerRequest === \"string\" &&
\t\trequest.__innerRequest_request === request.request &&
\t\trequest.__innerRequest_relativePath === request.relativePath)
\t\treturn request.__innerRequest;
\tvar innerRequest;
\tif(request.request) {
\t\tinnerRequest = request.request;
\t\tif(/^\\.\\.?\\//.test(innerRequest) && request.relativePath) {
\t\t\tinnerRequest = resolver.join(request.relativePath, innerRequest);
\t\t}
\t} else {
\t\tinnerRequest = request.relativePath;
\t}
\trequest.__innerRequest_request = request.request;
\trequest.__innerRequest_relativePath = request.relativePath;
\treturn request.__innerRequest = innerRequest;
};
";
        
        $__internal_4e4709e856b4a150cb6f846ad4297271ad061580df919a4fc0f855f5335f27e7->leave($__internal_4e4709e856b4a150cb6f846ad4297271ad061580df919a4fc0f855f5335f27e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/getInnerRequest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
module.exports = function getInnerRequest(resolver, request) {
\tif(typeof request.__innerRequest === \"string\" &&
\t\trequest.__innerRequest_request === request.request &&
\t\trequest.__innerRequest_relativePath === request.relativePath)
\t\treturn request.__innerRequest;
\tvar innerRequest;
\tif(request.request) {
\t\tinnerRequest = request.request;
\t\tif(/^\\.\\.?\\//.test(innerRequest) && request.relativePath) {
\t\t\tinnerRequest = resolver.join(request.relativePath, innerRequest);
\t\t}
\t} else {
\t\tinnerRequest = request.relativePath;
\t}
\trequest.__innerRequest_request = request.request;
\trequest.__innerRequest_relativePath = request.relativePath;
\treturn request.__innerRequest = innerRequest;
};
", "node_modules/enhanced-resolve/lib/getInnerRequest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/getInnerRequest.js");
    }
}
