<?php

/* node_modules/validate-npm-package-license/index.js */
class __TwigTemplate_3dc9b5d8f9fb0c58e9d7d636fa5b2b4d613cb7995769a8da745da871db0f7f84 extends Twig_Template
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
        $__internal_4fa24b2f2fd97befa67abb6f963fa5f3b105156814e4cdc1ce1d7a47af44b50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa24b2f2fd97befa67abb6f963fa5f3b105156814e4cdc1ce1d7a47af44b50d->enter($__internal_4fa24b2f2fd97befa67abb6f963fa5f3b105156814e4cdc1ce1d7a47af44b50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/validate-npm-package-license/index.js"));

        // line 1
        echo "var parse = require('spdx-expression-parse');
var correct = require('spdx-correct');

var genericWarning = (
  'license should be ' +
  'a valid SPDX license expression (without \"LicenseRef\"), ' +
  '\"UNLICENSED\", or ' +
  '\"SEE LICENSE IN <filename>\"'
);

var fileReferenceRE = /^SEE LICEN[CS]E IN (.+)\$/;

function startsWith(prefix, string) {
  return string.slice(0, prefix.length) === prefix;
}

function usesLicenseRef(ast) {
  if (ast.hasOwnProperty('license')) {
    var license = ast.license;
    return (
      startsWith('LicenseRef', license) ||
      startsWith('DocumentRef', license)
    );
  } else {
    return (
      usesLicenseRef(ast.left) ||
      usesLicenseRef(ast.right)
    );
  }
}

module.exports = function(argument) {
  var ast;

  try {
    ast = parse(argument);
  } catch (e) {
    var match
    if (
      argument === 'UNLICENSED' ||
      argument === 'UNLICENCED'
    ) {
      return {
        validForOldPackages: true,
        validForNewPackages: true,
        unlicensed: true
      };
    } else if (match = fileReferenceRE.exec(argument)) {
      return {
        validForOldPackages: true,
        validForNewPackages: true,
        inFile: match[1]
      };
    } else {
      var result = {
        validForOldPackages: false,
        validForNewPackages: false,
        warnings: [genericWarning]
      };
      var corrected = correct(argument);
      if (corrected) {
        result.warnings.push(
          'license is similar to the valid expression \"' + corrected + '\"'
        );
      }
      return result;
    }
  }

  if (usesLicenseRef(ast)) {
    return {
      validForNewPackages: false,
      validForOldPackages: false,
      spdx: true,
      warnings: [genericWarning]
    };
  } else {
    return {
      validForNewPackages: true,
      validForOldPackages: true,
      spdx: true
    };
  }
};
";
        
        $__internal_4fa24b2f2fd97befa67abb6f963fa5f3b105156814e4cdc1ce1d7a47af44b50d->leave($__internal_4fa24b2f2fd97befa67abb6f963fa5f3b105156814e4cdc1ce1d7a47af44b50d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/validate-npm-package-license/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('spdx-expression-parse');
var correct = require('spdx-correct');

var genericWarning = (
  'license should be ' +
  'a valid SPDX license expression (without \"LicenseRef\"), ' +
  '\"UNLICENSED\", or ' +
  '\"SEE LICENSE IN <filename>\"'
);

var fileReferenceRE = /^SEE LICEN[CS]E IN (.+)\$/;

function startsWith(prefix, string) {
  return string.slice(0, prefix.length) === prefix;
}

function usesLicenseRef(ast) {
  if (ast.hasOwnProperty('license')) {
    var license = ast.license;
    return (
      startsWith('LicenseRef', license) ||
      startsWith('DocumentRef', license)
    );
  } else {
    return (
      usesLicenseRef(ast.left) ||
      usesLicenseRef(ast.right)
    );
  }
}

module.exports = function(argument) {
  var ast;

  try {
    ast = parse(argument);
  } catch (e) {
    var match
    if (
      argument === 'UNLICENSED' ||
      argument === 'UNLICENCED'
    ) {
      return {
        validForOldPackages: true,
        validForNewPackages: true,
        unlicensed: true
      };
    } else if (match = fileReferenceRE.exec(argument)) {
      return {
        validForOldPackages: true,
        validForNewPackages: true,
        inFile: match[1]
      };
    } else {
      var result = {
        validForOldPackages: false,
        validForNewPackages: false,
        warnings: [genericWarning]
      };
      var corrected = correct(argument);
      if (corrected) {
        result.warnings.push(
          'license is similar to the valid expression \"' + corrected + '\"'
        );
      }
      return result;
    }
  }

  if (usesLicenseRef(ast)) {
    return {
      validForNewPackages: false,
      validForOldPackages: false,
      spdx: true,
      warnings: [genericWarning]
    };
  } else {
    return {
      validForNewPackages: true,
      validForOldPackages: true,
      spdx: true
    };
  }
};
", "node_modules/validate-npm-package-license/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/validate-npm-package-license/index.js");
    }
}
