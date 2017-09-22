<?php

/* node_modules/base64-js/package.json */
class __TwigTemplate_f29e4b9d62f0b30757e0488df0261046a1e067b9b7480036c4a56a295ec336af extends Twig_Template
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
        $__internal_e8bee9d38f2b3e5b0b87896b6fd0e9ddb61285137d92e9ce63aa218da9e9e3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bee9d38f2b3e5b0b87896b6fd0e9ddb61285137d92e9ce63aa218da9e9e3d0->enter($__internal_e8bee9d38f2b3e5b0b87896b6fd0e9ddb61285137d92e9ce63aa218da9e9e3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/base64-js/package.json"));

        // line 1
        echo "{
  \"name\": \"base64-js\",
  \"version\": \"1.2.1\",
  \"description\": \"Base64 encoding/decoding in pure JS\",
  \"keywords\": [
    \"base64\"
  ],
  \"homepage\": \"https://github.com/beatgammit/base64-js\",
  \"bugs\": {
    \"url\": \"https://github.com/beatgammit/base64-js/issues\"
  },
  \"license\": \"MIT\",
  \"author\": \"T. Jameson Little <t.jameson.little@gmail.com>\",
  \"files\": [
    \"test\",
    \"index.js\",
    \"base64js.min.js\"
  ],
  \"main\": \"index.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/beatgammit/base64-js.git\"
  },
  \"scripts\": {
    \"build\": \"browserify -s base64js -r ./ | uglifyjs -m > base64js.min.js\",
    \"lint\": \"standard\",
    \"test\": \"npm run lint && npm run unit\",
    \"unit\": \"tape test/*.js\"
  },
  \"devDependencies\": {
    \"benchmark\": \"^2.1.4\",
    \"browserify\": \"^14.0.0\",
    \"standard\": \"*\",
    \"tape\": \"4.x\",
    \"uglify-js\": \"^2.8.29\"
  }
}
";
        
        $__internal_e8bee9d38f2b3e5b0b87896b6fd0e9ddb61285137d92e9ce63aa218da9e9e3d0->leave($__internal_e8bee9d38f2b3e5b0b87896b6fd0e9ddb61285137d92e9ce63aa218da9e9e3d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/base64-js/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"base64-js\",
  \"version\": \"1.2.1\",
  \"description\": \"Base64 encoding/decoding in pure JS\",
  \"keywords\": [
    \"base64\"
  ],
  \"homepage\": \"https://github.com/beatgammit/base64-js\",
  \"bugs\": {
    \"url\": \"https://github.com/beatgammit/base64-js/issues\"
  },
  \"license\": \"MIT\",
  \"author\": \"T. Jameson Little <t.jameson.little@gmail.com>\",
  \"files\": [
    \"test\",
    \"index.js\",
    \"base64js.min.js\"
  ],
  \"main\": \"index.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/beatgammit/base64-js.git\"
  },
  \"scripts\": {
    \"build\": \"browserify -s base64js -r ./ | uglifyjs -m > base64js.min.js\",
    \"lint\": \"standard\",
    \"test\": \"npm run lint && npm run unit\",
    \"unit\": \"tape test/*.js\"
  },
  \"devDependencies\": {
    \"benchmark\": \"^2.1.4\",
    \"browserify\": \"^14.0.0\",
    \"standard\": \"*\",
    \"tape\": \"4.x\",
    \"uglify-js\": \"^2.8.29\"
  }
}
", "node_modules/base64-js/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/base64-js/package.json");
    }
}
