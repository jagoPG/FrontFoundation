<?php

/* node_modules/lin3s-event-bus/package.json */
class __TwigTemplate_89cd9b68d8fa335b765bdce73c86fdcad12ec127fd6921408b28627eaae4444b extends Twig_Template
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
        $__internal_86d3526ea9391a9e5aef44d5d757af7190dc7ec0493065f11389a8e5117b2055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d3526ea9391a9e5aef44d5d757af7190dc7ec0493065f11389a8e5117b2055->enter($__internal_86d3526ea9391a9e5aef44d5d757af7190dc7ec0493065f11389a8e5117b2055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-event-bus/package.json"));

        // line 1
        echo "{
  \"name\": \"lin3s-event-bus\",
  \"version\": \"0.6.0\",
  \"license\": \"MIT\",
  \"description\": \"Simple but powerful event bus written in ES2015\",
  \"keywords\": [
    \"lin3s\",
    \"event-bus\",
    \"es6\",
    \"es2015\"
  ],
  \"authors\": [
    {
      \"name\": \"LIN3S\",
      \"email\": \"info@lin3s.com\",
      \"homepage\": \"https://lin3s.com\"
    }
  ],
  \"main\": \"dist/lin3s-event-bus.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/LIN3S/EventBusJS\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/LIN3S/EventBusJS/issues\"
  },
  \"files\": [
    \"dist\",
    \"README.md\"
  ],
  \"scripts\": {
    \"test\": \"ava\",
    \"prebuild\": \"rimraf dist\",
    \"build\": \"npm-run-all --parallel build:*\",
    \"build:main\": \"webpack --output-filename lin3s-event-bus.js\",
    \"build:main.min\": \"webpack --output-filename lin3s-event-bus.js -p\",
    \"build:umd\": \"webpack --output-filename lin3s-event-bus.umd.js --env.libraryTarget umd\",
    \"build:umd.min\": \"webpack --output-filename lin3s-event-bus.umd.min.js --env.libraryTarget umd -p\"
  },
  \"babel\": {
    \"presets\": [
      \"es2015\",
      \"stage-2\"
    ]
  },
  \"dependencies\": {
    \"lodash.debounce\": \"^4.0.8\"
  },
  \"devDependencies\": {
    \"ava\": \"^0.15.2\",
    \"babel-cli\": \"^6.14.0\",
    \"babel-loader\": \"^6.2.5\",
    \"babel-preset-es2015\": \"^6.9.0\",
    \"babel-preset-stage-2\": \"^6.13.0\",
    \"babel-register\": \"^6.14.0\",
    \"babelify\": \"^7.3.0\",
    \"npm-run-all\": \"^3.0.0\",
    \"rimraf\": \"^2.5.4\",
    \"webpack\": \"^2.2\"
  },
  \"peerDependencies\": {
    \"lodash.debounce\": \"^4.0.8\"
  }
}
";
        
        $__internal_86d3526ea9391a9e5aef44d5d757af7190dc7ec0493065f11389a8e5117b2055->leave($__internal_86d3526ea9391a9e5aef44d5d757af7190dc7ec0493065f11389a8e5117b2055_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-event-bus/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"lin3s-event-bus\",
  \"version\": \"0.6.0\",
  \"license\": \"MIT\",
  \"description\": \"Simple but powerful event bus written in ES2015\",
  \"keywords\": [
    \"lin3s\",
    \"event-bus\",
    \"es6\",
    \"es2015\"
  ],
  \"authors\": [
    {
      \"name\": \"LIN3S\",
      \"email\": \"info@lin3s.com\",
      \"homepage\": \"https://lin3s.com\"
    }
  ],
  \"main\": \"dist/lin3s-event-bus.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/LIN3S/EventBusJS\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/LIN3S/EventBusJS/issues\"
  },
  \"files\": [
    \"dist\",
    \"README.md\"
  ],
  \"scripts\": {
    \"test\": \"ava\",
    \"prebuild\": \"rimraf dist\",
    \"build\": \"npm-run-all --parallel build:*\",
    \"build:main\": \"webpack --output-filename lin3s-event-bus.js\",
    \"build:main.min\": \"webpack --output-filename lin3s-event-bus.js -p\",
    \"build:umd\": \"webpack --output-filename lin3s-event-bus.umd.js --env.libraryTarget umd\",
    \"build:umd.min\": \"webpack --output-filename lin3s-event-bus.umd.min.js --env.libraryTarget umd -p\"
  },
  \"babel\": {
    \"presets\": [
      \"es2015\",
      \"stage-2\"
    ]
  },
  \"dependencies\": {
    \"lodash.debounce\": \"^4.0.8\"
  },
  \"devDependencies\": {
    \"ava\": \"^0.15.2\",
    \"babel-cli\": \"^6.14.0\",
    \"babel-loader\": \"^6.2.5\",
    \"babel-preset-es2015\": \"^6.9.0\",
    \"babel-preset-stage-2\": \"^6.13.0\",
    \"babel-register\": \"^6.14.0\",
    \"babelify\": \"^7.3.0\",
    \"npm-run-all\": \"^3.0.0\",
    \"rimraf\": \"^2.5.4\",
    \"webpack\": \"^2.2\"
  },
  \"peerDependencies\": {
    \"lodash.debounce\": \"^4.0.8\"
  }
}
", "node_modules/lin3s-event-bus/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-event-bus/package.json");
    }
}
