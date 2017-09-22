<?php

/* node_modules/fsevents/node_modules/json-schema/draft-03/examples/address */
class __TwigTemplate_2d0e417948a51982739af4c401a2398f607ec486b65b17aca8465bf5f1569d7b extends Twig_Template
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
        $__internal_6e36c66e1f7d451ac4523770bbb82b4886671c3e21d24cbad0970bf830b48285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e36c66e1f7d451ac4523770bbb82b4886671c3e21d24cbad0970bf830b48285->enter($__internal_6e36c66e1f7d451ac4523770bbb82b4886671c3e21d24cbad0970bf830b48285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-03/examples/address"));

        // line 1
        echo "{
\t\"description\" : \"An Address following the convention of http://microformats.org/wiki/hcard\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"post-office-box\" : { \"type\" : \"string\" },
\t\t\"extended-address\" : { \"type\" : \"string\" },
\t\t\"street-address\" : { \"type\":\"string\" },
\t\t\"locality\" : { \"type\" : \"string\", \"required\" : true },
\t\t\"region\" : { \"type\" : \"string\", \"required\" : true },
\t\t\"postal-code\" : { \"type\" : \"string\" },
\t\t\"country-name\" : { \"type\" : \"string\", \"required\" : true }
\t},
\t\"dependencies\" : {
\t\t\"post-office-box\" : \"street-address\",
\t\t\"extended-address\" : \"street-address\",
\t\t\"street-address\" : \"region\",
\t\t\"locality\" : \"region\",
\t\t\"region\" : \"country-name\"
\t}
}";
        
        $__internal_6e36c66e1f7d451ac4523770bbb82b4886671c3e21d24cbad0970bf830b48285->leave($__internal_6e36c66e1f7d451ac4523770bbb82b4886671c3e21d24cbad0970bf830b48285_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-03/examples/address";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"description\" : \"An Address following the convention of http://microformats.org/wiki/hcard\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"post-office-box\" : { \"type\" : \"string\" },
\t\t\"extended-address\" : { \"type\" : \"string\" },
\t\t\"street-address\" : { \"type\":\"string\" },
\t\t\"locality\" : { \"type\" : \"string\", \"required\" : true },
\t\t\"region\" : { \"type\" : \"string\", \"required\" : true },
\t\t\"postal-code\" : { \"type\" : \"string\" },
\t\t\"country-name\" : { \"type\" : \"string\", \"required\" : true }
\t},
\t\"dependencies\" : {
\t\t\"post-office-box\" : \"street-address\",
\t\t\"extended-address\" : \"street-address\",
\t\t\"street-address\" : \"region\",
\t\t\"locality\" : \"region\",
\t\t\"region\" : \"country-name\"
\t}
}", "node_modules/fsevents/node_modules/json-schema/draft-03/examples/address", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-03/examples/address");
    }
}
