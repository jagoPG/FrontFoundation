<?php

/* node_modules/fsevents/node_modules/json-schema/draft-03/examples/calendar */
class __TwigTemplate_91e71a2ed3699e76256a5c85a11416c1738d952677c66fe92efd51b4954aacf4 extends Twig_Template
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
        $__internal_132dd86ec8544f417d12668e131ad55510f42495e7c2d3b7874b76cbcb81719b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132dd86ec8544f417d12668e131ad55510f42495e7c2d3b7874b76cbcb81719b->enter($__internal_132dd86ec8544f417d12668e131ad55510f42495e7c2d3b7874b76cbcb81719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-03/examples/calendar"));

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
        
        $__internal_132dd86ec8544f417d12668e131ad55510f42495e7c2d3b7874b76cbcb81719b->leave($__internal_132dd86ec8544f417d12668e131ad55510f42495e7c2d3b7874b76cbcb81719b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-03/examples/calendar";
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

", "node_modules/fsevents/node_modules/json-schema/draft-03/examples/calendar", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-03/examples/calendar");
    }
}
