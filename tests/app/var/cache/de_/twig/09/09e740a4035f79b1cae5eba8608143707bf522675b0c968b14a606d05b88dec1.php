<?php

/* node_modules/assert/package.json */
class __TwigTemplate_c2dc4667f89c14b477b7d853cbd438ac58aa12b919ddf71e1f0b4e2ecdbc3b2b extends Twig_Template
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
        $__internal_e6511a818ae4e9ec88380554cb399c46df7f112aae2639a1ae2caf09d1d03c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6511a818ae4e9ec88380554cb399c46df7f112aae2639a1ae2caf09d1d03c8e->enter($__internal_e6511a818ae4e9ec88380554cb399c46df7f112aae2639a1ae2caf09d1d03c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/assert/package.json"));

        // line 1
        echo "{
  \"name\": \"assert\",
  \"description\": \"commonjs assert - node.js api compatible\",
  \"keywords\": [
    \"assert\"
  ],
  \"version\": \"1.4.1\",
  \"homepage\": \"https://github.com/defunctzombie/commonjs-assert\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/defunctzombie/commonjs-assert.git\"
  },
  \"main\": \"./assert.js\",
  \"dependencies\": {
    \"util\": \"0.10.3\"
  },
  \"devDependencies\": {
    \"mocha\": \"~1.21.4\",
    \"zuul\": \"~3.10.0\",
    \"zuul-ngrok\": \"^4.0.0\"
  },
  \"license\": \"MIT\",
  \"scripts\": {
    \"test-node\": \"mocha --ui qunit test.js\",
    \"test-browser\": \"zuul -- test.js\",
    \"test\": \"npm run test-node && npm run test-browser\",
    \"test-native\": \"TEST_NATIVE=true mocha --ui qunit test.js\",
    \"browser-local\": \"zuul --no-coverage --local 8000 -- test.js\"
  }
}
";
        
        $__internal_e6511a818ae4e9ec88380554cb399c46df7f112aae2639a1ae2caf09d1d03c8e->leave($__internal_e6511a818ae4e9ec88380554cb399c46df7f112aae2639a1ae2caf09d1d03c8e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/assert/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"assert\",
  \"description\": \"commonjs assert - node.js api compatible\",
  \"keywords\": [
    \"assert\"
  ],
  \"version\": \"1.4.1\",
  \"homepage\": \"https://github.com/defunctzombie/commonjs-assert\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/defunctzombie/commonjs-assert.git\"
  },
  \"main\": \"./assert.js\",
  \"dependencies\": {
    \"util\": \"0.10.3\"
  },
  \"devDependencies\": {
    \"mocha\": \"~1.21.4\",
    \"zuul\": \"~3.10.0\",
    \"zuul-ngrok\": \"^4.0.0\"
  },
  \"license\": \"MIT\",
  \"scripts\": {
    \"test-node\": \"mocha --ui qunit test.js\",
    \"test-browser\": \"zuul -- test.js\",
    \"test\": \"npm run test-node && npm run test-browser\",
    \"test-native\": \"TEST_NATIVE=true mocha --ui qunit test.js\",
    \"browser-local\": \"zuul --no-coverage --local 8000 -- test.js\"
  }
}
", "node_modules/assert/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/assert/package.json");
    }
}
