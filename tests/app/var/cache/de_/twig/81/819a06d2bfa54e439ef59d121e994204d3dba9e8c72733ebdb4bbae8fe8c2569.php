<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/package.json */
class __TwigTemplate_4911bb8518c61e551694b6ed014bba0e6a8c462b8cafff9ba1876bcad6f9c437 extends Twig_Template
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
        $__internal_eba69c83e96340c976d1edf517fb50385c2472acd9851ae399edc619b4c484b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba69c83e96340c976d1edf517fb50385c2472acd9851ae399edc619b4c484b6->enter($__internal_eba69c83e96340c976d1edf517fb50385c2472acd9851ae399edc619b4c484b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/package.json"));

        // line 1
        echo "{
  \"name\": \"acorn\",
  \"description\": \"ECMAScript parser\",
  \"homepage\": \"https://github.com/ternjs/acorn\",
  \"main\": \"dist/acorn.js\",
  \"jsnext:main\": \"dist/acorn.es.js\",
  \"version\": \"4.0.13\",
  \"engines\": {
    \"node\": \">=0.4.0\"
  },
  \"maintainers\": [
    {
      \"name\": \"Marijn Haverbeke\",
      \"email\": \"marijnh@gmail.com\",
      \"web\": \"http://marijnhaverbeke.nl\"
    },
    {
      \"name\": \"Ingvar Stepanyan\",
      \"email\": \"me@rreverser.com\",
      \"web\": \"http://rreverser.com/\"
    }
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/ternjs/acorn.git\"
  },
  \"license\": \"MIT\",
  \"scripts\": {
    \"prepublish\": \"npm test\",
    \"test\": \"node test/run.js\",
    \"pretest\": \"npm run build\",
    \"build\": \"npm run build:main && npm run build:walk && npm run build:loose && npm run build:bin\",
    \"build:main\": \"rollup -c rollup/config.main.js\",
    \"build:walk\": \"rollup -c rollup/config.walk.js\",
    \"build:loose\": \"rollup -c rollup/config.loose.js\",
    \"build:bin\": \"rollup -c rollup/config.bin.js\"
  },
  \"bin\": {
    \"acorn\": \"./bin/acorn\"
  },
  \"devDependencies\": {
    \"rollup\": \"^0.34.1\",
    \"rollup-plugin-buble\": \"^0.11.0\",
    \"unicode-9.0.0\": \"^0.7.0\"
  }
}
";
        
        $__internal_eba69c83e96340c976d1edf517fb50385c2472acd9851ae399edc619b4c484b6->leave($__internal_eba69c83e96340c976d1edf517fb50385c2472acd9851ae399edc619b4c484b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"acorn\",
  \"description\": \"ECMAScript parser\",
  \"homepage\": \"https://github.com/ternjs/acorn\",
  \"main\": \"dist/acorn.js\",
  \"jsnext:main\": \"dist/acorn.es.js\",
  \"version\": \"4.0.13\",
  \"engines\": {
    \"node\": \">=0.4.0\"
  },
  \"maintainers\": [
    {
      \"name\": \"Marijn Haverbeke\",
      \"email\": \"marijnh@gmail.com\",
      \"web\": \"http://marijnhaverbeke.nl\"
    },
    {
      \"name\": \"Ingvar Stepanyan\",
      \"email\": \"me@rreverser.com\",
      \"web\": \"http://rreverser.com/\"
    }
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/ternjs/acorn.git\"
  },
  \"license\": \"MIT\",
  \"scripts\": {
    \"prepublish\": \"npm test\",
    \"test\": \"node test/run.js\",
    \"pretest\": \"npm run build\",
    \"build\": \"npm run build:main && npm run build:walk && npm run build:loose && npm run build:bin\",
    \"build:main\": \"rollup -c rollup/config.main.js\",
    \"build:walk\": \"rollup -c rollup/config.walk.js\",
    \"build:loose\": \"rollup -c rollup/config.loose.js\",
    \"build:bin\": \"rollup -c rollup/config.bin.js\"
  },
  \"bin\": {
    \"acorn\": \"./bin/acorn\"
  },
  \"devDependencies\": {
    \"rollup\": \"^0.34.1\",
    \"rollup-plugin-buble\": \"^0.11.0\",
    \"unicode-9.0.0\": \"^0.7.0\"
  }
}
", "node_modules/acorn-dynamic-import/node_modules/acorn/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/package.json");
    }
}
