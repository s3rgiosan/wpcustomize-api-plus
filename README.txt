=== Customize API Plus ===
Contributors: s3rgiosan
Tags: customize, customizer, library, datepicker
Requires at least: 4.7
Tested up to: 4.7
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A collection of custom controls you can use in your WordPress theme customizer.

== Description ==

A collection of custom controls you can use in your WordPress theme customizer.

This library is based on the awesome work by [Paul Underwood](https://github.com/paulund/wordpress-theme-customizer-custom-controls).

So far this collection consists of:

* Date Picker - [jQuery UI Datepicker](http://jqueryui.com/datepicker/)

= Usage =

= Adds a [jQuery UI Datepicker](http://jqueryui.com/datepicker/) control =

```php
$wp_customize->add_control(
    new s3rgiosan\WP\Plugin\Customize\Date\DatePicker(
        $wp_customize,
        'field_id',
        array(
            'type'        => 'date_picker',
            'label'       => 'Date',
            'description' => 'The start date.',
            'input_attrs' => array(
                'placeholder' => 'YYYY-MM-DD',
                'js_opts'     => array(
                    'dateFormat' => 'yy-mm-dd'
                ),
            ),
        )
    )
);
```

Use `js_opts` to pass options to the [jQuery UI Datepicker](http://api.jqueryui.com/datepicker/).


== Installation ==

Even though Customize API Plus exists as a plugin, it doesn't do anything by
itself, but it does make its classes and functions available so you don't have
to include it as a dependency in every single one of your plugins or themes.

= Dashboard =

1. Go to the 'Plugins' menu, and choose 'Add New'.
2. Search for 'wpcustomize-api-plus', and then click 'Install Now'.
2. Click 'Activate'.

= FTP =

1. Download and extract the .zip file.
2. Upload the unzipped folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu.

= Composer =

`composer require s3rgiosan/wpcustomize-api-plus`

== Frequently Asked Questions ==

= Where can I report bugs? =

Bugs can be reported on the [GitHub repository](https://github.com/s3rgiosan/wpcustomize-api-plus/issues).

= How can I contribute? =

Join in on our [GitHub repository](https://github.com/s3rgiosan/wpcustomize-api-plus) and read our [contribution](https://github.com/s3rgiosan/wpcustomize-api-plus/blob/master/CONTRIBUTING.md) guidelines.

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0 =
Initial release.
