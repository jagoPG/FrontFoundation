<?php

/* node_modules/opener/opener.js */
class __TwigTemplate_ca51033eb9ceab9f2b56a48925ae22beaf70fa36578b43ec681fd693591e3492 extends Twig_Template
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
        $__internal_bfd68d8c0812861316e8380149030263179c3bf56b96f1240b2e89603b583718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd68d8c0812861316e8380149030263179c3bf56b96f1240b2e89603b583718->enter($__internal_bfd68d8c0812861316e8380149030263179c3bf56b96f1240b2e89603b583718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/opener/opener.js"));

        // line 1
        echo "#!/usr/bin/env node

\"use strict\";

var childProcess = require(\"child_process\");

function opener(args, options, callback) {
    // http://stackoverflow.com/q/1480971/3191, but see below for Windows.
    var command = process.platform === \"win32\" ? \"cmd\" :
                  process.platform === \"darwin\" ? \"open\" :
                  \"xdg-open\";

    if (typeof args === \"string\") {
        args = [args];
    }

    if (typeof options === \"function\") {
        callback = options;
        options = {};
    }

    if (options && typeof options === \"object\" && options.command) {
        if (process.platform === \"win32\") {
            // *always* use cmd on windows
            args = [options.command].concat(args);
        } else {
            command = options.command;
        }
    }

    if (process.platform === \"win32\") {
        // On Windows, we really want to use the \"start\" command. But, the rules regarding arguments with spaces, and
        // escaping them with quotes, can get really arcane. So the easiest way to deal with this is to pass off the
        // responsibility to \"cmd /c\", which has that logic built in.
        //
        // Furthermore, if \"cmd /c\" double-quoted the first parameter, then \"start\" will interpret it as a window title,
        // so we need to add a dummy empty-string window title: http://stackoverflow.com/a/154090/3191
        //
        // Additionally, on Windows ampersand needs to be escaped when passed to \"start\"
        args = args.map(function(value) {
            return value.replace(/&/g, '^&');
        });
        args = [\"/c\", \"start\", '\"\"'].concat(args);
    }

    return childProcess.execFile(command, args, options, callback);
}

// Export `opener` for programmatic access.
// You might use this to e.g. open a website: `opener(\"http://google.com\")`
module.exports = opener;

// If we're being called from the command line, just execute, using the command-line arguments.
if (require.main && require.main.id === module.id) {
    opener(process.argv.slice(2), function (error) {
        if (error) {
            throw error;
        }
    });
}
";
        
        $__internal_bfd68d8c0812861316e8380149030263179c3bf56b96f1240b2e89603b583718->leave($__internal_bfd68d8c0812861316e8380149030263179c3bf56b96f1240b2e89603b583718_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/opener/opener.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

\"use strict\";

var childProcess = require(\"child_process\");

function opener(args, options, callback) {
    // http://stackoverflow.com/q/1480971/3191, but see below for Windows.
    var command = process.platform === \"win32\" ? \"cmd\" :
                  process.platform === \"darwin\" ? \"open\" :
                  \"xdg-open\";

    if (typeof args === \"string\") {
        args = [args];
    }

    if (typeof options === \"function\") {
        callback = options;
        options = {};
    }

    if (options && typeof options === \"object\" && options.command) {
        if (process.platform === \"win32\") {
            // *always* use cmd on windows
            args = [options.command].concat(args);
        } else {
            command = options.command;
        }
    }

    if (process.platform === \"win32\") {
        // On Windows, we really want to use the \"start\" command. But, the rules regarding arguments with spaces, and
        // escaping them with quotes, can get really arcane. So the easiest way to deal with this is to pass off the
        // responsibility to \"cmd /c\", which has that logic built in.
        //
        // Furthermore, if \"cmd /c\" double-quoted the first parameter, then \"start\" will interpret it as a window title,
        // so we need to add a dummy empty-string window title: http://stackoverflow.com/a/154090/3191
        //
        // Additionally, on Windows ampersand needs to be escaped when passed to \"start\"
        args = args.map(function(value) {
            return value.replace(/&/g, '^&');
        });
        args = [\"/c\", \"start\", '\"\"'].concat(args);
    }

    return childProcess.execFile(command, args, options, callback);
}

// Export `opener` for programmatic access.
// You might use this to e.g. open a website: `opener(\"http://google.com\")`
module.exports = opener;

// If we're being called from the command line, just execute, using the command-line arguments.
if (require.main && require.main.id === module.id) {
    opener(process.argv.slice(2), function (error) {
        if (error) {
            throw error;
        }
    });
}
", "node_modules/opener/opener.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/opener/opener.js");
    }
}
