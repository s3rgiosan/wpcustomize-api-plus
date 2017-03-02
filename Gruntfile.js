/* global module require process */
module.exports = function(grunt) {
  var path = require('path');

  require('load-grunt-config')(grunt, {
    configPath: path.join(process.cwd(), 'grunt/config'),
    jitGrunt: {
      customTasksDir: 'grunt/tasks',
      staticMappings: {
        makepot: 'grunt-wp-i18n',
      },
    },
    data: {
      i18n: {
        author: 'Sérgio Santos <me@s3rgiosan.com>',
        support: 'https://github.com/s3rgiosan/wpcustomize-api-plus/issues',
        pluginSlug: 'wpcustomize-api-plus',
        mainFile: 'wpcustomize-api-plus',
        textDomain: 'wpcustomize-api-plus',
        potFilename: 'wpcustomize-api-plus',
      },
      badges: {
        packagist_stable: '[![Latest Stable Version](https://poser.pugx.org/s3rgiosan/wpcustomize-api-plus/v/stable)](https://packagist.org/packages/s3rgiosan/wpcustomize-api-plus)',
        packagist_downloads: '[![Total Downloads](https://poser.pugx.org/s3rgiosan/wpcustomize-api-plus/downloads)](https://packagist.org/packages/s3rgiosan/wpcustomize-api-plus)',
        packagist_license: '[![License](https://poser.pugx.org/s3rgiosan/wpcustomize-api-plus/license)](https://packagist.org/packages/s3rgiosan/wpcustomize-api-plus)',
        codacy_grade: '[![Codacy Badge](https://api.codacy.com/project/badge/Grade/b54ad9dbb04249be96356743cb391b9e)](https://www.codacy.com/app/s3rgiosan/wpcustomize-api-plus?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=s3rgiosan/wpcustomize-api-plus&amp;utm_campaign=Badge_Grade)',
        codeclimate_grade: '[![Code Climate](https://codeclimate.com/github/s3rgiosan/wpcustomize-api-plus/badges/gpa.svg)](https://codeclimate.com/github/s3rgiosan/wpcustomize-api-plus)',
      },
    },
  });
};
