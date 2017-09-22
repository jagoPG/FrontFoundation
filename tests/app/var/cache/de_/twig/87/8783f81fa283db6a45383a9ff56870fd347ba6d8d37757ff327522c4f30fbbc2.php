<?php

/* node_modules/resolve/test/mock.js */
class __TwigTemplate_77f5d367d004e6bf1739e0cd6ca624f3511cf7e5ea2a267dc6eb20423c1b7d5f extends Twig_Template
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
        $__internal_0d8ea7cd12d89d9e45c0941e527eb81febac11e61197e8efb599f52bfceb9be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8ea7cd12d89d9e45c0941e527eb81febac11e61197e8efb599f52bfceb9be7->enter($__internal_0d8ea7cd12d89d9e45c0941e527eb81febac11e61197e8efb599f52bfceb9be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/mock.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('mock', function (t) {
    t.plan(8);

    var files = {};
    files[path.resolve('/foo/bar/baz.js')] = 'beep';

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file, cb) {
                cb(null, Object.prototype.hasOwnProperty.call(files, path.resolve(file)));
            },
            readFile: function (file, cb) {
                cb(null, files[path.resolve(file)]);
            }
        };
    }

    resolve('./baz', opts('/foo/bar'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/bar/baz.js'));
        t.equal(pkg, undefined);
    });

    resolve('./baz.js', opts('/foo/bar'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/bar/baz.js'));
        t.equal(pkg, undefined);
    });

    resolve('baz', opts('/foo/bar'), function (err, res) {
        t.equal(err.message, \"Cannot find module 'baz' from '\" + path.resolve('/foo/bar') + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });

    resolve('../baz', opts('/foo/bar'), function (err, res) {
        t.equal(err.message, \"Cannot find module '../baz' from '\" + path.resolve('/foo/bar') + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('mock from package', function (t) {
    t.plan(8);

    var files = {};
    files[path.resolve('/foo/bar/baz.js')] = 'beep';

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file, cb) {
                cb(null, Object.prototype.hasOwnProperty.call(files, file));
            },
            'package': { main: 'bar' },
            readFile: function (file, cb) {
                cb(null, files[file]);
            }
        };
    }

    resolve('./baz', opts('/foo/bar'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/bar/baz.js'));
        t.equal(pkg && pkg.main, 'bar');
    });

    resolve('./baz.js', opts('/foo/bar'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/bar/baz.js'));
        t.equal(pkg && pkg.main, 'bar');
    });

    resolve('baz', opts('/foo/bar'), function (err, res) {
        t.equal(err.message, \"Cannot find module 'baz' from '\" + path.resolve('/foo/bar') + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });

    resolve('../baz', opts('/foo/bar'), function (err, res) {
        t.equal(err.message, \"Cannot find module '../baz' from '\" + path.resolve('/foo/bar') + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('mock package', function (t) {
    t.plan(2);

    var files = {};
    files[path.resolve('/foo/node_modules/bar/baz.js')] = 'beep';
    files[path.resolve('/foo/node_modules/bar/package.json')] = JSON.stringify({
        main: './baz.js'
    });

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file, cb) {
                cb(null, Object.prototype.hasOwnProperty.call(files, path.resolve(file)));
            },
            readFile: function (file, cb) {
                cb(null, files[path.resolve(file)]);
            }
        };
    }

    resolve('bar', opts('/foo'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/node_modules/bar/baz.js'));
        t.equal(pkg && pkg.main, './baz.js');
    });
});

test('mock package from package', function (t) {
    t.plan(2);

    var files = {};
    files[path.resolve('/foo/node_modules/bar/baz.js')] = 'beep';
    files[path.resolve('/foo/node_modules/bar/package.json')] = JSON.stringify({
        main: './baz.js'
    });

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file, cb) {
                cb(null, Object.prototype.hasOwnProperty.call(files, path.resolve(file)));
            },
            'package': { main: 'bar' },
            readFile: function (file, cb) {
                cb(null, files[path.resolve(file)]);
            }
        };
    }

    resolve('bar', opts('/foo'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/node_modules/bar/baz.js'));
        t.equal(pkg && pkg.main, './baz.js');
    });
});
";
        
        $__internal_0d8ea7cd12d89d9e45c0941e527eb81febac11e61197e8efb599f52bfceb9be7->leave($__internal_0d8ea7cd12d89d9e45c0941e527eb81febac11e61197e8efb599f52bfceb9be7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/mock.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');
var test = require('tape');
var resolve = require('../');

test('mock', function (t) {
    t.plan(8);

    var files = {};
    files[path.resolve('/foo/bar/baz.js')] = 'beep';

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file, cb) {
                cb(null, Object.prototype.hasOwnProperty.call(files, path.resolve(file)));
            },
            readFile: function (file, cb) {
                cb(null, files[path.resolve(file)]);
            }
        };
    }

    resolve('./baz', opts('/foo/bar'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/bar/baz.js'));
        t.equal(pkg, undefined);
    });

    resolve('./baz.js', opts('/foo/bar'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/bar/baz.js'));
        t.equal(pkg, undefined);
    });

    resolve('baz', opts('/foo/bar'), function (err, res) {
        t.equal(err.message, \"Cannot find module 'baz' from '\" + path.resolve('/foo/bar') + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });

    resolve('../baz', opts('/foo/bar'), function (err, res) {
        t.equal(err.message, \"Cannot find module '../baz' from '\" + path.resolve('/foo/bar') + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('mock from package', function (t) {
    t.plan(8);

    var files = {};
    files[path.resolve('/foo/bar/baz.js')] = 'beep';

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file, cb) {
                cb(null, Object.prototype.hasOwnProperty.call(files, file));
            },
            'package': { main: 'bar' },
            readFile: function (file, cb) {
                cb(null, files[file]);
            }
        };
    }

    resolve('./baz', opts('/foo/bar'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/bar/baz.js'));
        t.equal(pkg && pkg.main, 'bar');
    });

    resolve('./baz.js', opts('/foo/bar'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/bar/baz.js'));
        t.equal(pkg && pkg.main, 'bar');
    });

    resolve('baz', opts('/foo/bar'), function (err, res) {
        t.equal(err.message, \"Cannot find module 'baz' from '\" + path.resolve('/foo/bar') + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });

    resolve('../baz', opts('/foo/bar'), function (err, res) {
        t.equal(err.message, \"Cannot find module '../baz' from '\" + path.resolve('/foo/bar') + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('mock package', function (t) {
    t.plan(2);

    var files = {};
    files[path.resolve('/foo/node_modules/bar/baz.js')] = 'beep';
    files[path.resolve('/foo/node_modules/bar/package.json')] = JSON.stringify({
        main: './baz.js'
    });

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file, cb) {
                cb(null, Object.prototype.hasOwnProperty.call(files, path.resolve(file)));
            },
            readFile: function (file, cb) {
                cb(null, files[path.resolve(file)]);
            }
        };
    }

    resolve('bar', opts('/foo'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/node_modules/bar/baz.js'));
        t.equal(pkg && pkg.main, './baz.js');
    });
});

test('mock package from package', function (t) {
    t.plan(2);

    var files = {};
    files[path.resolve('/foo/node_modules/bar/baz.js')] = 'beep';
    files[path.resolve('/foo/node_modules/bar/package.json')] = JSON.stringify({
        main: './baz.js'
    });

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file, cb) {
                cb(null, Object.prototype.hasOwnProperty.call(files, path.resolve(file)));
            },
            'package': { main: 'bar' },
            readFile: function (file, cb) {
                cb(null, files[path.resolve(file)]);
            }
        };
    }

    resolve('bar', opts('/foo'), function (err, res, pkg) {
        if (err) return t.fail(err);
        t.equal(res, path.resolve('/foo/node_modules/bar/baz.js'));
        t.equal(pkg && pkg.main, './baz.js');
    });
});
", "node_modules/resolve/test/mock.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/mock.js");
    }
}
