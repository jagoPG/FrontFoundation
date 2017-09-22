<?php

/* node_modules/node-pre-gyp/package.json */
class __TwigTemplate_c84c75c54cf6cd388c234435da4baebcd9642cc0826bea822f662b3a80b311a6 extends Twig_Template
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
        $__internal_8e6ca212c84d33ef57f3e3820a3d5edfe18a6e05c594156a379089c608c68883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6ca212c84d33ef57f3e3820a3d5edfe18a6e05c594156a379089c608c68883->enter($__internal_8e6ca212c84d33ef57f3e3820a3d5edfe18a6e05c594156a379089c608c68883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/package.json"));

        // line 1
        echo "{
  \"name\": \"node-pre-gyp\",
  \"description\": \"Node.js native addon binary install tool\",
  \"version\" : \"0.6.37\",
  \"keywords\": [
    \"native\",
    \"addon\",
    \"module\",
    \"c\",
    \"c++\",
    \"bindings\",
    \"binary\"
  ],
  \"license\": \"BSD-3-Clause\",
  \"author\": \"Dane Springmeyer <dane@mapbox.com>\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/mapbox/node-pre-gyp.git\"
  },
  \"bin\": \"./bin/node-pre-gyp\",
  \"main\": \"./lib/node-pre-gyp.js\",
  \"dependencies\": {
    \"mkdirp\": \"^0.5.1\",
    \"nopt\": \"^4.0.1\",
    \"npmlog\": \"^4.0.2\",
    \"rc\": \"^1.1.7\",
    \"request\": \"^2.81.0\",
    \"rimraf\": \"^2.6.1\",
    \"semver\": \"^5.3.0\",
    \"tape\": \"^4.6.3\",
    \"tar\": \"^2.2.1\",
    \"tar-pack\": \"^3.4.0\"
  },
  \"devDependencies\": {
    \"aws-sdk\": \"^2.28.0\",
    \"retire\": \"^1.2.12\",
    \"jshint\": \"^2.9.4\"
  },
  \"jshintConfig\": {
    \"node\": true,
    \"globalstrict\": true,
    \"undef\": true,
    \"unused\": false,
    \"noarg\": true
  },
  \"scripts\": {
    \"pretest\": \"jshint test/build.test.js test/s3_setup.test.js test/versioning.test.js\",
    \"update-crosswalk\": \"node scripts/abi_crosswalk.js\",
    \"test\": \"jshint lib lib/util scripts bin/node-pre-gyp && tape test/*test.js\"
  }
}
";
        
        $__internal_8e6ca212c84d33ef57f3e3820a3d5edfe18a6e05c594156a379089c608c68883->leave($__internal_8e6ca212c84d33ef57f3e3820a3d5edfe18a6e05c594156a379089c608c68883_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"node-pre-gyp\",
  \"description\": \"Node.js native addon binary install tool\",
  \"version\" : \"0.6.37\",
  \"keywords\": [
    \"native\",
    \"addon\",
    \"module\",
    \"c\",
    \"c++\",
    \"bindings\",
    \"binary\"
  ],
  \"license\": \"BSD-3-Clause\",
  \"author\": \"Dane Springmeyer <dane@mapbox.com>\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/mapbox/node-pre-gyp.git\"
  },
  \"bin\": \"./bin/node-pre-gyp\",
  \"main\": \"./lib/node-pre-gyp.js\",
  \"dependencies\": {
    \"mkdirp\": \"^0.5.1\",
    \"nopt\": \"^4.0.1\",
    \"npmlog\": \"^4.0.2\",
    \"rc\": \"^1.1.7\",
    \"request\": \"^2.81.0\",
    \"rimraf\": \"^2.6.1\",
    \"semver\": \"^5.3.0\",
    \"tape\": \"^4.6.3\",
    \"tar\": \"^2.2.1\",
    \"tar-pack\": \"^3.4.0\"
  },
  \"devDependencies\": {
    \"aws-sdk\": \"^2.28.0\",
    \"retire\": \"^1.2.12\",
    \"jshint\": \"^2.9.4\"
  },
  \"jshintConfig\": {
    \"node\": true,
    \"globalstrict\": true,
    \"undef\": true,
    \"unused\": false,
    \"noarg\": true
  },
  \"scripts\": {
    \"pretest\": \"jshint test/build.test.js test/s3_setup.test.js test/versioning.test.js\",
    \"update-crosswalk\": \"node scripts/abi_crosswalk.js\",
    \"test\": \"jshint lib lib/util scripts bin/node-pre-gyp && tape test/*test.js\"
  }
}
", "node_modules/node-pre-gyp/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/package.json");
    }
}
