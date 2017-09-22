<?php

/* node_modules/json-schema/draft-00/json-ref */
class __TwigTemplate_d69f07ddc3ac7784bc32629b3f0437a2a61647aeb8f783a9e67f33c4cf3b5bd3 extends Twig_Template
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
        $__internal_13c9f6f6aeaca6ec052417b641773f63faa79ffe41784bd726433cb8cbda5f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c9f6f6aeaca6ec052417b641773f63faa79ffe41784bd726433cb8cbda5f49->enter($__internal_13c9f6f6aeaca6ec052417b641773f63faa79ffe41784bd726433cb8cbda5f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-00/json-ref"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-00/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-00/json-ref#\",
\t
\t\"items\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}";
        
        $__internal_13c9f6f6aeaca6ec052417b641773f63faa79ffe41784bd726433cb8cbda5f49->leave($__internal_13c9f6f6aeaca6ec052417b641773f63faa79ffe41784bd726433cb8cbda5f49_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-00/json-ref";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-00/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-00/json-ref#\",
\t
\t\"items\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}", "node_modules/json-schema/draft-00/json-ref", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-00/json-ref");
    }
}
