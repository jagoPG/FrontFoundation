<?php

/* node_modules/console-browserify/package.json */
class __TwigTemplate_da3cd91867e275fccc67f653597a56ddb1f01ded86727e4a7fed8b478ed1920d extends Twig_Template
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
        $__internal_63ebc1801f2b2fae0334537835bd8b17d0897d0a14ddc3e5aadca489c9d64d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ebc1801f2b2fae0334537835bd8b17d0897d0a14ddc3e5aadca489c9d64d9b->enter($__internal_63ebc1801f2b2fae0334537835bd8b17d0897d0a14ddc3e5aadca489c9d64d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/console-browserify/package.json"));

        // line 1
        echo "{
  \"name\": \"console-browserify\",
  \"version\": \"1.1.0\",
  \"description\": \"Emulate console for all the browsers\",
  \"keywords\": [],
  \"author\": \"Raynos <raynos2@gmail.com>\",
  \"repository\": \"git://github.com/Raynos/console-browserify.git\",
  \"main\": \"index\",
  \"homepage\": \"https://github.com/Raynos/console-browserify\",
  \"contributors\": [
    {
      \"name\": \"Raynos\"
    }
  ],
  \"bugs\": {
    \"url\": \"https://github.com/Raynos/console-browserify/issues\",
    \"email\": \"raynos2@gmail.com\"
  },
  \"dependencies\": {
    \"date-now\": \"^0.1.4\"
  },
  \"devDependencies\": {
    \"tape\": \"^2.12.3\",
    \"jsonify\": \"0.0.0\",
    \"tap-spec\": \"^0.1.8\",
    \"run-browser\": \"^1.3.0\",
    \"tap-dot\": \"^0.2.1\"
  },
  \"licenses\": [
    {
      \"type\": \"MIT\",
      \"url\": \"http://github.com/Raynos/console-browserify/raw/master/LICENSE\"
    }
  ],
  \"scripts\": {
    \"test\": \"node ./test/index.js | tap-spec\",
    \"dot\": \"node ./test/index.js | tap-dot\",
    \"start\": \"node ./index.js\",
    \"cover\": \"istanbul cover --report none --print detail ./test/index.js\",
    \"view-cover\": \"istanbul report html && google-chrome ./coverage/index.html\",
    \"browser\": \"run-browser test/index.js\",
    \"phantom\": \"run-browser test/index.js -b | tap-spec\",
    \"build\": \"browserify test/index.js -o test/static/bundle.js\",
    \"testem\": \"testem\"
  },
  \"testling\": {
    \"files\": \"test/index.js\",
    \"browsers\": [
      \"ie/8..latest\",
      \"firefox/16..latest\",
      \"firefox/nightly\",
      \"chrome/22..latest\",
      \"chrome/canary\",
      \"opera/12..latest\",
      \"opera/next\",
      \"safari/5.1..latest\",
      \"ipad/6.0..latest\",
      \"iphone/6.0..latest\",
      \"android-browser/4.2..latest\"
    ]
  }
}
";
        
        $__internal_63ebc1801f2b2fae0334537835bd8b17d0897d0a14ddc3e5aadca489c9d64d9b->leave($__internal_63ebc1801f2b2fae0334537835bd8b17d0897d0a14ddc3e5aadca489c9d64d9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/console-browserify/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"console-browserify\",
  \"version\": \"1.1.0\",
  \"description\": \"Emulate console for all the browsers\",
  \"keywords\": [],
  \"author\": \"Raynos <raynos2@gmail.com>\",
  \"repository\": \"git://github.com/Raynos/console-browserify.git\",
  \"main\": \"index\",
  \"homepage\": \"https://github.com/Raynos/console-browserify\",
  \"contributors\": [
    {
      \"name\": \"Raynos\"
    }
  ],
  \"bugs\": {
    \"url\": \"https://github.com/Raynos/console-browserify/issues\",
    \"email\": \"raynos2@gmail.com\"
  },
  \"dependencies\": {
    \"date-now\": \"^0.1.4\"
  },
  \"devDependencies\": {
    \"tape\": \"^2.12.3\",
    \"jsonify\": \"0.0.0\",
    \"tap-spec\": \"^0.1.8\",
    \"run-browser\": \"^1.3.0\",
    \"tap-dot\": \"^0.2.1\"
  },
  \"licenses\": [
    {
      \"type\": \"MIT\",
      \"url\": \"http://github.com/Raynos/console-browserify/raw/master/LICENSE\"
    }
  ],
  \"scripts\": {
    \"test\": \"node ./test/index.js | tap-spec\",
    \"dot\": \"node ./test/index.js | tap-dot\",
    \"start\": \"node ./index.js\",
    \"cover\": \"istanbul cover --report none --print detail ./test/index.js\",
    \"view-cover\": \"istanbul report html && google-chrome ./coverage/index.html\",
    \"browser\": \"run-browser test/index.js\",
    \"phantom\": \"run-browser test/index.js -b | tap-spec\",
    \"build\": \"browserify test/index.js -o test/static/bundle.js\",
    \"testem\": \"testem\"
  },
  \"testling\": {
    \"files\": \"test/index.js\",
    \"browsers\": [
      \"ie/8..latest\",
      \"firefox/16..latest\",
      \"firefox/nightly\",
      \"chrome/22..latest\",
      \"chrome/canary\",
      \"opera/12..latest\",
      \"opera/next\",
      \"safari/5.1..latest\",
      \"ipad/6.0..latest\",
      \"iphone/6.0..latest\",
      \"android-browser/4.2..latest\"
    ]
  }
}
", "node_modules/console-browserify/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/console-browserify/package.json");
    }
}
