<?php

/* node_modules/esrecurse/gulpfile.babel.js */
class __TwigTemplate_c8dab16215a42d8d9189193b91ad507a19c1870adcc84be29075e786eba6f50c extends Twig_Template
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
        $__internal_36344e293d862e40fb853dd78bbd6c9d796ad43d479f232f4d4042953d4ee1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36344e293d862e40fb853dd78bbd6c9d796ad43d479f232f4d4042953d4ee1a1->enter($__internal_36344e293d862e40fb853dd78bbd6c9d796ad43d479f232f4d4042953d4ee1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/esrecurse/gulpfile.babel.js"));

        // line 1
        echo "// Copyright (C) 2014 Yusuke Suzuki <utatane.tea@gmail.com>
//
// Redistribution and use in source and binary forms, with or without
// modification, are permitted provided that the following conditions are met:
//
//   * Redistributions of source code must retain the above copyright
//     notice, this list of conditions and the following disclaimer.
//   * Redistributions in binary form must reproduce the above copyright
//     notice, this list of conditions and the following disclaimer in the
//     documentation and/or other materials provided with the distribution.
//
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \"AS IS\"
// AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
// IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
// ARE DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
// DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
// (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
// LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
// ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
// (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
// THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

import gulp from 'gulp';
import mocha from 'gulp-mocha';
import eslint from 'gulp-eslint';
import minimist from 'minimist';
import git from 'gulp-git';
import bump from 'gulp-bump';
import filter from 'gulp-filter';
import tagVersion from 'gulp-tag-version';
import 'babel-register';

const SOURCE = [
    '*.js'
];

let ESLINT_OPTION = {
    parser: 'babel-eslint',
    parserOptions: {
        'sourceType': 'module'
    },
    rules: {
        'quotes': 0,
        'eqeqeq': 0,
        'no-use-before-define': 0,
        'no-shadow': 0,
        'no-new': 0,
        'no-underscore-dangle': 0,
        'no-multi-spaces': 0,
        'no-native-reassign': 0,
        'no-loop-func': 0
    },
    env: {
        'node': true
    }
};

gulp.task('test', function() {
    let options = minimist(process.argv.slice(2), {
        string: 'test',
        default: {
            test: 'test/*.js'
        }
    }
    );
    return gulp.src(options.test).pipe(mocha({reporter: 'spec'}));
});

gulp.task('lint', () =>
    gulp.src(SOURCE)
    .pipe(eslint(ESLINT_OPTION))
    .pipe(eslint.formatEach('stylish', process.stderr))
    .pipe(eslint.failOnError())
);

let inc = importance =>
    gulp.src(['./package.json'])
        .pipe(bump({type: importance}))
        .pipe(gulp.dest('./'))
        .pipe(git.commit('Bumps package version'))
        .pipe(filter('package.json'))
        .pipe(tagVersion({
            prefix: ''
        }))
;

gulp.task('travis', [ 'lint', 'test' ]);
gulp.task('default', [ 'travis' ]);

gulp.task('patch', [ ], () => inc('patch'));
gulp.task('minor', [ ], () => inc('minor'));
gulp.task('major', [ ], () => inc('major'));
";
        
        $__internal_36344e293d862e40fb853dd78bbd6c9d796ad43d479f232f4d4042953d4ee1a1->leave($__internal_36344e293d862e40fb853dd78bbd6c9d796ad43d479f232f4d4042953d4ee1a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/esrecurse/gulpfile.babel.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright (C) 2014 Yusuke Suzuki <utatane.tea@gmail.com>
//
// Redistribution and use in source and binary forms, with or without
// modification, are permitted provided that the following conditions are met:
//
//   * Redistributions of source code must retain the above copyright
//     notice, this list of conditions and the following disclaimer.
//   * Redistributions in binary form must reproduce the above copyright
//     notice, this list of conditions and the following disclaimer in the
//     documentation and/or other materials provided with the distribution.
//
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \"AS IS\"
// AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
// IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
// ARE DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
// DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
// (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
// LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
// ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
// (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
// THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

import gulp from 'gulp';
import mocha from 'gulp-mocha';
import eslint from 'gulp-eslint';
import minimist from 'minimist';
import git from 'gulp-git';
import bump from 'gulp-bump';
import filter from 'gulp-filter';
import tagVersion from 'gulp-tag-version';
import 'babel-register';

const SOURCE = [
    '*.js'
];

let ESLINT_OPTION = {
    parser: 'babel-eslint',
    parserOptions: {
        'sourceType': 'module'
    },
    rules: {
        'quotes': 0,
        'eqeqeq': 0,
        'no-use-before-define': 0,
        'no-shadow': 0,
        'no-new': 0,
        'no-underscore-dangle': 0,
        'no-multi-spaces': 0,
        'no-native-reassign': 0,
        'no-loop-func': 0
    },
    env: {
        'node': true
    }
};

gulp.task('test', function() {
    let options = minimist(process.argv.slice(2), {
        string: 'test',
        default: {
            test: 'test/*.js'
        }
    }
    );
    return gulp.src(options.test).pipe(mocha({reporter: 'spec'}));
});

gulp.task('lint', () =>
    gulp.src(SOURCE)
    .pipe(eslint(ESLINT_OPTION))
    .pipe(eslint.formatEach('stylish', process.stderr))
    .pipe(eslint.failOnError())
);

let inc = importance =>
    gulp.src(['./package.json'])
        .pipe(bump({type: importance}))
        .pipe(gulp.dest('./'))
        .pipe(git.commit('Bumps package version'))
        .pipe(filter('package.json'))
        .pipe(tagVersion({
            prefix: ''
        }))
;

gulp.task('travis', [ 'lint', 'test' ]);
gulp.task('default', [ 'travis' ]);

gulp.task('patch', [ ], () => inc('patch'));
gulp.task('minor', [ ], () => inc('minor'));
gulp.task('major', [ ], () => inc('major'));
", "node_modules/esrecurse/gulpfile.babel.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/esrecurse/gulpfile.babel.js");
    }
}
