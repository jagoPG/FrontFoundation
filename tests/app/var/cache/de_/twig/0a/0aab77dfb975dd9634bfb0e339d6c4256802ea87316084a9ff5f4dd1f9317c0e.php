<?php

/* node_modules/pbkdf2/package.json */
class __TwigTemplate_e83efb30363f99560f514536cd6e30f69becbb7a14651badc5a2c558bb90bc6d extends Twig_Template
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
        $__internal_37230f232319de85672a519e42611958552e3b827a0086d10ad2e6642a53c495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37230f232319de85672a519e42611958552e3b827a0086d10ad2e6642a53c495->enter($__internal_37230f232319de85672a519e42611958552e3b827a0086d10ad2e6642a53c495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pbkdf2/package.json"));

        // line 1
        echo "{
  \"name\": \"pbkdf2\",
  \"version\": \"3.0.14\",
  \"description\": \"This library provides the functionality of PBKDF2 with the ability to use any supported hashing algorithm returned from crypto.getHashes()\",
  \"keywords\": [
    \"pbkdf2\",
    \"kdf\",
    \"salt\",
    \"hash\"
  ],
  \"homepage\": \"https://github.com/crypto-browserify/pbkdf2\",
  \"bugs\": {
    \"url\": \"https://github.com/crypto-browserify/pbkdf2/issues\"
  },
  \"license\": \"MIT\",
  \"author\": \"Daniel Cousens\",
  \"browser\": {
    \"./index.js\": \"./browser.js\",
    \"./lib/sync.js\": \"./lib/sync-browser.js\"
  },
  \"files\": [
    \"browser.js\",
    \"index.js\",
    \"lib/\"
  ],
  \"main\": \"index.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/crypto-browserify/pbkdf2.git\"
  },
  \"scripts\": {
    \"prepublish\": \"npm run test\",
    \"coverage\": \"nyc --check-coverage --branches 90 --functions 100 tape test/*.js\",
    \"lint\": \"standard\",
    \"test\": \"npm run lint && npm run unit\",
    \"bundle-test\": \"browserify test/index.js > test/bundle.js\",
    \"unit\": \"tape test/*.js\",
    \"bench\": \"node bench/\"
  },
  \"devDependencies\": {
    \"benchmark\": \"^2.1.4\",
    \"browserify\": \"*\",
    \"nyc\": \"^6.4.0\",
    \"standard\": \"*\",
    \"tape\": \"^4.5.1\"
  },
  \"dependencies\": {
    \"create-hash\": \"^1.1.2\",
    \"create-hmac\": \"^1.1.4\",
    \"ripemd160\": \"^2.0.1\",
    \"safe-buffer\": \"^5.0.1\",
    \"sha.js\": \"^2.4.8\"
  },
  \"standard\": {
    \"ignore\": [
      \"test/bundle.js\"
    ]
  },
  \"engines\": {
    \"node\": \">=0.12\"
  },
  \"nyc\": {
    \"exclude\": [
      \"lib/async.js\",
      \"test/bundle.js\"
    ]
  }
}
";
        
        $__internal_37230f232319de85672a519e42611958552e3b827a0086d10ad2e6642a53c495->leave($__internal_37230f232319de85672a519e42611958552e3b827a0086d10ad2e6642a53c495_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pbkdf2/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"pbkdf2\",
  \"version\": \"3.0.14\",
  \"description\": \"This library provides the functionality of PBKDF2 with the ability to use any supported hashing algorithm returned from crypto.getHashes()\",
  \"keywords\": [
    \"pbkdf2\",
    \"kdf\",
    \"salt\",
    \"hash\"
  ],
  \"homepage\": \"https://github.com/crypto-browserify/pbkdf2\",
  \"bugs\": {
    \"url\": \"https://github.com/crypto-browserify/pbkdf2/issues\"
  },
  \"license\": \"MIT\",
  \"author\": \"Daniel Cousens\",
  \"browser\": {
    \"./index.js\": \"./browser.js\",
    \"./lib/sync.js\": \"./lib/sync-browser.js\"
  },
  \"files\": [
    \"browser.js\",
    \"index.js\",
    \"lib/\"
  ],
  \"main\": \"index.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/crypto-browserify/pbkdf2.git\"
  },
  \"scripts\": {
    \"prepublish\": \"npm run test\",
    \"coverage\": \"nyc --check-coverage --branches 90 --functions 100 tape test/*.js\",
    \"lint\": \"standard\",
    \"test\": \"npm run lint && npm run unit\",
    \"bundle-test\": \"browserify test/index.js > test/bundle.js\",
    \"unit\": \"tape test/*.js\",
    \"bench\": \"node bench/\"
  },
  \"devDependencies\": {
    \"benchmark\": \"^2.1.4\",
    \"browserify\": \"*\",
    \"nyc\": \"^6.4.0\",
    \"standard\": \"*\",
    \"tape\": \"^4.5.1\"
  },
  \"dependencies\": {
    \"create-hash\": \"^1.1.2\",
    \"create-hmac\": \"^1.1.4\",
    \"ripemd160\": \"^2.0.1\",
    \"safe-buffer\": \"^5.0.1\",
    \"sha.js\": \"^2.4.8\"
  },
  \"standard\": {
    \"ignore\": [
      \"test/bundle.js\"
    ]
  },
  \"engines\": {
    \"node\": \">=0.12\"
  },
  \"nyc\": {
    \"exclude\": [
      \"lib/async.js\",
      \"test/bundle.js\"
    ]
  }
}
", "node_modules/pbkdf2/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pbkdf2/package.json");
    }
}
