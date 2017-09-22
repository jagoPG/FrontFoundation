<?php

/* node_modules/json-schema/draft-03/examples/calendar */
class __TwigTemplate_b079f0eb2047c93fab110b89d13ae68b2fe833a2d2af1eb8999f909e9b913fa6 extends Twig_Template
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
        $__internal_f15c9905d50ef6162eda5dbc864ed243dcebcc80deb2cd58e2bfbe38f6ef2887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15c9905d50ef6162eda5dbc864ed243dcebcc80deb2cd58e2bfbe38f6ef2887->enter($__internal_f15c9905d50ef6162eda5dbc864ed243dcebcc80deb2cd58e2bfbe38f6ef2887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-03/examples/calendar"));

        // line 1
        echo "{
\t\"description\" : \"A representation of an event\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"dtstart\" : {
\t\t\t\"format\" : \"date-time\",
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Event starting time\",
\t\t\t\"required\":true
\t\t},
\t\t\"summary\" : {
\t\t\t\"type\":\"string\",
\t\t\t\"required\":true
\t\t},
\t\t\"location\" : { 
\t\t\t\"type\" : \"string\" 
\t\t},
\t\t\"url\" : {
\t\t\t\"type\" : \"string\", 
\t\t\t\"format\" : \"url\" 
\t\t},
\t\t\"dtend\" : {
\t\t\t\"format\" : \"date-time\",
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Event ending time\"
\t\t},
\t\t\"duration\" : {
\t\t\t\"format\" : \"date\",
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Event duration\"
\t\t},
\t\t\"rdate\" : {
\t\t\t\"format\" : \"date-time\",
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Recurrence date\"
\t\t},
\t\t\"rrule\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Recurrence rule\"
\t\t},
\t\t\"category\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t\"description\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t\"geo\" : { \"\$ref\" : \"http://json-schema.org/draft-03/geo\" }
\t}
}
\t\t
\t\t\t
\t\t\t

";
        
        $__internal_f15c9905d50ef6162eda5dbc864ed243dcebcc80deb2cd58e2bfbe38f6ef2887->leave($__internal_f15c9905d50ef6162eda5dbc864ed243dcebcc80deb2cd58e2bfbe38f6ef2887_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-03/examples/calendar";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"description\" : \"A representation of an event\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"dtstart\" : {
\t\t\t\"format\" : \"date-time\",
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Event starting time\",
\t\t\t\"required\":true
\t\t},
\t\t\"summary\" : {
\t\t\t\"type\":\"string\",
\t\t\t\"required\":true
\t\t},
\t\t\"location\" : { 
\t\t\t\"type\" : \"string\" 
\t\t},
\t\t\"url\" : {
\t\t\t\"type\" : \"string\", 
\t\t\t\"format\" : \"url\" 
\t\t},
\t\t\"dtend\" : {
\t\t\t\"format\" : \"date-time\",
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Event ending time\"
\t\t},
\t\t\"duration\" : {
\t\t\t\"format\" : \"date\",
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Event duration\"
\t\t},
\t\t\"rdate\" : {
\t\t\t\"format\" : \"date-time\",
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Recurrence date\"
\t\t},
\t\t\"rrule\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"description\" : \"Recurrence rule\"
\t\t},
\t\t\"category\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t\"description\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t\"geo\" : { \"\$ref\" : \"http://json-schema.org/draft-03/geo\" }
\t}
}
\t\t
\t\t\t
\t\t\t

", "node_modules/json-schema/draft-03/examples/calendar", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-03/examples/calendar");
    }
}
