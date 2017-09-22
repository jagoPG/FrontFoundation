<?php

/* node_modules/esutils/package.json */
class __TwigTemplate_1b9f21ca20dd710d8c86ed388b7d9785bf66a1de4e135da90ccb1d8d40a2e6f9 extends Twig_Template
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
        $__internal_7bc7dd53230cdec72f06dcfdd3a1a0abbff85f4a718ded98510178d2a0bf0dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc7dd53230cdec72f06dcfdd3a1a0abbff85f4a718ded98510178d2a0bf0dd9->enter($__internal_7bc7dd53230cdec72f06dcfdd3a1a0abbff85f4a718ded98510178d2a0bf0dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/esutils/package.json"));

        // line 1
        echo "{
  \"name\": \"esutils\",
  \"description\": \"utility box for ECMAScript language tools\",
  \"homepage\": \"https://github.com/estools/esutils\",
  \"main\": \"lib/utils.js\",
  \"version\": \"2.0.2\",
  \"engines\": {
    \"node\": \">=0.10.0\"
  },
  \"directories\": {
    \"lib\": \"./lib\"
  },
  \"files\": [
    \"LICENSE.BSD\",
    \"README.md\",
    \"lib\"
  ],
  \"maintainers\": [
    {
      \"name\": \"Yusuke Suzuki\",
      \"email\": \"utatane.tea@gmail.com\",
      \"web\": \"http://github.com/Constellation\"
    }
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"http://github.com/estools/esutils.git\"
  },
  \"devDependencies\": {
    \"chai\": \"~1.7.2\",
    \"coffee-script\": \"~1.6.3\",
    \"jshint\": \"2.6.3\",
    \"mocha\": \"~2.2.1\",
    \"regenerate\": \"~1.2.1\",
    \"unicode-7.0.0\": \"^0.1.5\"
  },
  \"licenses\": [
    {
      \"type\": \"BSD\",
      \"url\": \"http://github.com/estools/esutils/raw/master/LICENSE.BSD\"
    }
  ],
  \"scripts\": {
    \"test\": \"npm run-script lint && npm run-script unit-test\",
    \"lint\": \"jshint lib/*.js\",
    \"unit-test\": \"mocha --compilers coffee:coffee-script -R spec\",
    \"generate-regex\": \"node tools/generate-identifier-regex.js\"
  }
}
";
        
        $__internal_7bc7dd53230cdec72f06dcfdd3a1a0abbff85f4a718ded98510178d2a0bf0dd9->leave($__internal_7bc7dd53230cdec72f06dcfdd3a1a0abbff85f4a718ded98510178d2a0bf0dd9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/esutils/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"esutils\",
  \"description\": \"utility box for ECMAScript language tools\",
  \"homepage\": \"https://github.com/estools/esutils\",
  \"main\": \"lib/utils.js\",
  \"version\": \"2.0.2\",
  \"engines\": {
    \"node\": \">=0.10.0\"
  },
  \"directories\": {
    \"lib\": \"./lib\"
  },
  \"files\": [
    \"LICENSE.BSD\",
    \"README.md\",
    \"lib\"
  ],
  \"maintainers\": [
    {
      \"name\": \"Yusuke Suzuki\",
      \"email\": \"utatane.tea@gmail.com\",
      \"web\": \"http://github.com/Constellation\"
    }
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"http://github.com/estools/esutils.git\"
  },
  \"devDependencies\": {
    \"chai\": \"~1.7.2\",
    \"coffee-script\": \"~1.6.3\",
    \"jshint\": \"2.6.3\",
    \"mocha\": \"~2.2.1\",
    \"regenerate\": \"~1.2.1\",
    \"unicode-7.0.0\": \"^0.1.5\"
  },
  \"licenses\": [
    {
      \"type\": \"BSD\",
      \"url\": \"http://github.com/estools/esutils/raw/master/LICENSE.BSD\"
    }
  ],
  \"scripts\": {
    \"test\": \"npm run-script lint && npm run-script unit-test\",
    \"lint\": \"jshint lib/*.js\",
    \"unit-test\": \"mocha --compilers coffee:coffee-script -R spec\",
    \"generate-regex\": \"node tools/generate-identifier-regex.js\"
  }
}
", "node_modules/esutils/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/esutils/package.json");
    }
}
