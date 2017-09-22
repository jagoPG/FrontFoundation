<?php

/* node_modules/util/package.json */
class __TwigTemplate_a58dfa9e0a5d7381a897bb4c0099f32d391fd98654bd0e8a88dd6c778012bbc4 extends Twig_Template
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
        $__internal_4cdf1fabfe3a003f7e5e76f5c2133ad4cc9c17790292d63d2181894b98467638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdf1fabfe3a003f7e5e76f5c2133ad4cc9c17790292d63d2181894b98467638->enter($__internal_4cdf1fabfe3a003f7e5e76f5c2133ad4cc9c17790292d63d2181894b98467638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util/package.json"));

        // line 1
        echo "{
  \"author\": {
    \"name\": \"Joyent\",
    \"url\": \"http://www.joyent.com\"
  },
  \"name\": \"util\",
  \"description\": \"Node.JS util module\",
  \"keywords\": [
    \"util\"
  ],
  \"version\": \"0.10.3\",
  \"homepage\": \"https://github.com/defunctzombie/node-util\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/defunctzombie/node-util\"
  },
  \"main\": \"./util.js\",
  \"scripts\": {
    \"test\": \"node test/node/*.js && zuul test/browser/*.js\"
  },
  \"dependencies\": {
    \"inherits\": \"2.0.1\"
  },
  \"license\": \"MIT\",
  \"devDependencies\": {
    \"zuul\": \"~1.0.9\"
  },
  \"browser\": {
    \"./support/isBuffer.js\": \"./support/isBufferBrowser.js\"
  }
}
";
        
        $__internal_4cdf1fabfe3a003f7e5e76f5c2133ad4cc9c17790292d63d2181894b98467638->leave($__internal_4cdf1fabfe3a003f7e5e76f5c2133ad4cc9c17790292d63d2181894b98467638_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"author\": {
    \"name\": \"Joyent\",
    \"url\": \"http://www.joyent.com\"
  },
  \"name\": \"util\",
  \"description\": \"Node.JS util module\",
  \"keywords\": [
    \"util\"
  ],
  \"version\": \"0.10.3\",
  \"homepage\": \"https://github.com/defunctzombie/node-util\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/defunctzombie/node-util\"
  },
  \"main\": \"./util.js\",
  \"scripts\": {
    \"test\": \"node test/node/*.js && zuul test/browser/*.js\"
  },
  \"dependencies\": {
    \"inherits\": \"2.0.1\"
  },
  \"license\": \"MIT\",
  \"devDependencies\": {
    \"zuul\": \"~1.0.9\"
  },
  \"browser\": {
    \"./support/isBuffer.js\": \"./support/isBufferBrowser.js\"
  }
}
", "node_modules/util/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util/package.json");
    }
}
