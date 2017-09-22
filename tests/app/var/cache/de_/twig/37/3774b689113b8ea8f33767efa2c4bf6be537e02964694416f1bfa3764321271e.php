<?php

/* node_modules/tweetnacl/package.json */
class __TwigTemplate_2fa12104197f0c905c9b344fd0de31bb6d38b2b713a651d6dbb6ecf9bf983950 extends Twig_Template
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
        $__internal_b3f639bd4e1034b34e3a34c0fdde76327ad8bd917a7d214dc5115c5f990e2303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f639bd4e1034b34e3a34c0fdde76327ad8bd917a7d214dc5115c5f990e2303->enter($__internal_b3f639bd4e1034b34e3a34c0fdde76327ad8bd917a7d214dc5115c5f990e2303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tweetnacl/package.json"));

        // line 1
        echo "{
  \"name\": \"tweetnacl\",
  \"version\": \"0.14.5\",
  \"description\": \"Port of TweetNaCl cryptographic library to JavaScript\",
  \"main\": \"nacl-fast.js\",
  \"types\": \"nacl.d.ts\",
  \"directories\": {
    \"test\": \"test\"
  },
  \"scripts\": {
    \"build\": \"uglifyjs nacl.js -c -m -o nacl.min.js && uglifyjs nacl-fast.js -c -m -o nacl-fast.min.js\",
    \"test-node\": \"tape test/*.js | faucet\",
    \"test-node-all\": \"make -C test/c && tape test/*.js test/c/*.js | faucet\",
    \"test-browser\": \"NACL_SRC=\${NACL_SRC:='nacl.min.js'} && npm run build-test-browser && cat \$NACL_SRC test/browser/_bundle.js | tape-run | faucet\",
    \"build-test-browser\": \"browserify test/browser/init.js test/*.js | uglifyjs -c -m -o test/browser/_bundle.js 2>/dev/null && browserify test/browser/init.js test/*.quick.js | uglifyjs -c -m -o test/browser/_bundle-quick.js 2>/dev/null\",
    \"test\": \"npm run test-node-all && npm run test-browser\",
    \"bench\": \"node test/benchmark/bench.js\",
    \"lint\": \"eslint nacl.js nacl-fast.js test/*.js test/benchmark/*.js\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/dchest/tweetnacl-js.git\"
  },
  \"keywords\": [
    \"crypto\",
    \"cryptography\",
    \"curve25519\",
    \"ed25519\",
    \"encrypt\",
    \"hash\",
    \"key\",
    \"nacl\",
    \"poly1305\",
    \"public\",
    \"salsa20\",
    \"signatures\"
  ],
  \"author\": \"TweetNaCl-js contributors\",
  \"license\": \"Unlicense\",
  \"bugs\": {
    \"url\": \"https://github.com/dchest/tweetnacl-js/issues\"
  },
  \"homepage\": \"https://tweetnacl.js.org\",
  \"devDependencies\": {
    \"browserify\": \"^13.0.0\",
    \"eslint\": \"^2.2.0\",
    \"faucet\": \"^0.0.1\",
    \"tap-browser-color\": \"^0.1.2\",
    \"tape\": \"^4.4.0\",
    \"tape-run\": \"^2.1.3\",
    \"tweetnacl-util\": \"^0.13.3\",
    \"uglify-js\": \"^2.6.1\"
  },
  \"browser\": {
    \"buffer\": false,
    \"crypto\": false
  }
}
";
        
        $__internal_b3f639bd4e1034b34e3a34c0fdde76327ad8bd917a7d214dc5115c5f990e2303->leave($__internal_b3f639bd4e1034b34e3a34c0fdde76327ad8bd917a7d214dc5115c5f990e2303_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tweetnacl/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"tweetnacl\",
  \"version\": \"0.14.5\",
  \"description\": \"Port of TweetNaCl cryptographic library to JavaScript\",
  \"main\": \"nacl-fast.js\",
  \"types\": \"nacl.d.ts\",
  \"directories\": {
    \"test\": \"test\"
  },
  \"scripts\": {
    \"build\": \"uglifyjs nacl.js -c -m -o nacl.min.js && uglifyjs nacl-fast.js -c -m -o nacl-fast.min.js\",
    \"test-node\": \"tape test/*.js | faucet\",
    \"test-node-all\": \"make -C test/c && tape test/*.js test/c/*.js | faucet\",
    \"test-browser\": \"NACL_SRC=\${NACL_SRC:='nacl.min.js'} && npm run build-test-browser && cat \$NACL_SRC test/browser/_bundle.js | tape-run | faucet\",
    \"build-test-browser\": \"browserify test/browser/init.js test/*.js | uglifyjs -c -m -o test/browser/_bundle.js 2>/dev/null && browserify test/browser/init.js test/*.quick.js | uglifyjs -c -m -o test/browser/_bundle-quick.js 2>/dev/null\",
    \"test\": \"npm run test-node-all && npm run test-browser\",
    \"bench\": \"node test/benchmark/bench.js\",
    \"lint\": \"eslint nacl.js nacl-fast.js test/*.js test/benchmark/*.js\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/dchest/tweetnacl-js.git\"
  },
  \"keywords\": [
    \"crypto\",
    \"cryptography\",
    \"curve25519\",
    \"ed25519\",
    \"encrypt\",
    \"hash\",
    \"key\",
    \"nacl\",
    \"poly1305\",
    \"public\",
    \"salsa20\",
    \"signatures\"
  ],
  \"author\": \"TweetNaCl-js contributors\",
  \"license\": \"Unlicense\",
  \"bugs\": {
    \"url\": \"https://github.com/dchest/tweetnacl-js/issues\"
  },
  \"homepage\": \"https://tweetnacl.js.org\",
  \"devDependencies\": {
    \"browserify\": \"^13.0.0\",
    \"eslint\": \"^2.2.0\",
    \"faucet\": \"^0.0.1\",
    \"tap-browser-color\": \"^0.1.2\",
    \"tape\": \"^4.4.0\",
    \"tape-run\": \"^2.1.3\",
    \"tweetnacl-util\": \"^0.13.3\",
    \"uglify-js\": \"^2.6.1\"
  },
  \"browser\": {
    \"buffer\": false,
    \"crypto\": false
  }
}
", "node_modules/tweetnacl/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tweetnacl/package.json");
    }
}
