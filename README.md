<img src="src/icon.svg" alt="icon" width="100" height="100">

# Social Share plugin for Craft CMS 3 

If you want to add different Social Media icons  and share your blog posts and pages link.


## Installation

#### Requirements

This plugin requires Craft CMS 3.0.0, or later.

#### Plugin Store

Log into your control panel and click on 'Plugin Store'. Search for 'Social Share'.

#### Composer

1. Open your terminal and go to your Craft project:

```bash
cd /path/to/project
```

2. Then tell Composer to load the plugin:

```bash
composer require ds/craft-socialshare
```

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Social Share.

#### Examples

```twig
    {{ craft.dssocialshare.getSocial() }}
```
