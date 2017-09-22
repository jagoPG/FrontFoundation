<?php

/* node_modules/json-schema/draft-02/json-ref */
class __TwigTemplate_f7a52c49c7596b7c89b8a5ae6798abb6aa27c4fa63ce1d195ca0ac07e462e8db extends Twig_Template
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
        $__internal_575404d1c47eaef1c233d04125d2ecd208b21035a4989cca21f1c6c15f234692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575404d1c47eaef1c233d04125d2ecd208b21035a4989cca21f1c6c15f234692->enter($__internal_575404d1c47eaef1c233d04125d2ecd208b21035a4989cca21f1c6c15f234692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-02/json-ref"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/json-ref#\",
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
        
        $__internal_575404d1c47eaef1c233d04125d2ecd208b21035a4989cca21f1c6c15f234692->leave($__internal_575404d1c47eaef1c233d04125d2ecd208b21035a4989cca21f1c6c15f234692_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-02/json-ref";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/json-ref#\",
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
}", "node_modules/json-schema/draft-02/json-ref", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-02/json-ref");
    }
}
