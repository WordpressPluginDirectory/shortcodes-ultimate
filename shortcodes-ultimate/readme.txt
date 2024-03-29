=== WP Shortcodes Plugin — Shortcodes Ultimate ===
Contributors: gn_themes
License: GPLv3
Donate link: https://getshortcodes.com/pricing/
Tags: posts, carousel, shortcode, toggle, columns
Stable tag: 7.0.5
Requires PHP: 5.4
Requires at least: 5.0
Tested up to: 6.5


A comprehensive collection of visual components for your site


== Description ==

[Shortcodes Ultimate](https://getshortcodes.com/?utm_campaign=wporg&utm_medium=readme&utm_source=description) is a comprehensive collection of various visual and functional elements, which you can use in the post editor, text widgets or even in template files. Using Shortcodes Ultimate you can easily create tabs, buttons, boxes, sliders and carousels, responsive videos and much, much more.


= Features =

- 50+ beautiful shortcodes
- 1-click shortcode insertion with live preview
- Gutenberg-ready
- Works with any theme
- Modern responsive design
- Documentation
- Custom CSS editor
- Custom widget
- Translation-ready
- RTL support
- Developer-friendly


= Links =

- [Available Shortcodes](https://getshortcodes.com/docs-category/shortcodes/?utm_campaign=wporg&utm_medium=readme&utm_source=links-available-shortcodes)
- [Documentation](https://getshortcodes.com/docs/?utm_campaign=wporg&utm_medium=readme&utm_source=links-docs)
- [Community Support Forum](https://wordpress.org/support/plugin/shortcodes-ultimate)
- [Upgrade to Pro](https://getshortcodes.com/pricing/?utm_campaign=wporg&utm_medium=readme&utm_source=links-available-shortcodes)
- [Pro Support](https://getshortcodes.com/support/open-support-ticket/?utm_campaign=wporg&utm_medium=readme&utm_source=links-support)


= Available Shortcodes =

`
Heading         Tabs        Spoiler      Accordion
Divider         Spacer      Highlight    Label
Quote           Pullquote   Dropcap      Columns
List            Button      Service      Box
Note            Expand      Lightbox     Tooltip
Private         YouTube     Vimeo        Dailymotion
Audio           Video       Table        Permalink
Members         Guests      RSS          Menu
Sub pages       Siblings    Document     Google map
Image carousel  Slider      Carousel     Gallery
Posts           Dummy text  Dummy image  Animation
Meta data       User data   Post data    Template
QR code         Scheduler
`


== Installation ==


= From within dashboard (recommended) =

1. Navigate to _Dashboard – Plugins – Add New_;
2. Search for _Shortcodes Ultimate_;
3. Click _Install_, then _Activate_.

[Video Tutorial](https://www.youtube.com/watch?v=6xhplrZJD9c).


= Manual installation =

1. Download the plugin as a `.zip` file;
2. Unzip downloaded archive and upload `shortcodes-ultimate` folder under your `/wp-content/plugins/` directory (resulted plugin path should be `/wp-content/plugins/shortcodes-ultimate/`);
3. Navigate to *Dashboard – Plugins* and activate the plugin.


== Screenshots ==

1. Insert Shortcode button added above the editor
2. Shortcode insertion window
3. Shortcode settings
4. Shortcodes: button, tabs, box, carousel
5. Shortcodes: spoiler, service, list, columns, note


== Frequently Asked Questions ==


= How this plugin works =

[How Shortcodes Ultimate plugin works](https://getshortcodes.com/docs/how-shortcodes-ultimate-plugin-works/).


= Shortcodes do not work. Why? =

The most common reasons of this issue are listed [here](https://getshortcodes.com/docs/shortcodes-do-not-work/).


= Insert shortcode button do not work. Why? =

The most common reasons of this issue are listed [here](https://getshortcodes.com/docs/insert-shortcode-button-do-not-work/).


= Can I remove default shortcodes? =

Yes, you can remove default shortcodes using 'su/data/shortcodes' filter. Tutorial: [How to remove default shortcodes](https://getshortcodes.com/docs/disabling-built-in-shortcodes/).

= Can I create custom shortcodes? =

Yes, you can create custom shortcodes using 'su/data/shortcodes' filter. Tutorial: [How to add custom shortcodes](https://getshortcodes.com/docs/registering-custom-shortcodes/).


= Can I use shortcodes in template files? =

Yes! [How to use shortcodes in template files](https://getshortcodes.com/docs/using-shortcodes-in-template-files/).


= Will this plugin work with my theme? =

Yes! Shortcodes Ultimate is designed to work with any theme, but your theme must include very basic things: 'wp_head' and 'wp_footer' template tags. Sometimes, the plugin may not work properly because of javascript errors caused by third-party plugins/themes.


= Where can I report a bug or suggest a feature? =

[Support Forum](https://wordpress.org/support/plugin/shortcodes-ultimate).


= Where can I get help? =

First, visit the [Help Center](https://getshortcodes.com/support/). If you get stuck, ask for help at the [community support forum](https://wordpress.org/support/plugin/shortcodes-ultimate).


== Upgrade Notice ==

Upgrade normally


== Changelog ==



### 7.0.5

- Tested compatibility with WordPress 6.5
- Security improvements


### 7.0.4

This update features security improvements and is recommended for all users


### 7.0.3

This update features security improvements and is recommended for all users


### 7.0.2

This update features security improvements and is recommended for all users


### 7.0.1

This update features security improvements and is recommended for all users


### 7.0.0

**IMPORTANT CHANGE**

Starting with plugin version 7.0.0 the `[su_meta]` shortcode may be
automatically disabled if your site has at least one user with a role lower than
administrator (e.g. Contributor)
[Learn more about this change](https://getshortcodes.com/docs/post-meta/#unsafe-feature)

**Security improvements**

This update features security improvements and is recommended for all users

**Other changes**
- Improved attribute handling in the *Button* shortcode



### 5.13.3

- Tested compatibility with WordPress 6.4
- Improved plugin stability
- Updated Freemius SDK


### 5.13.2

- Freemius-related security improvements
- Tested compatibility with WordPress 6.3
- Added compatibility with PHP 8.2


### 5.13.1

This update features security improvements and is recommended for all users


### 5.13.0

- Added support for WebP images in `[su_image_carousel]`
- Minor updates to the codebase
- Tested compatibility with WordPress 6.2.2
- Fixed issue with swiper.js ([forum topic](https://wordpress.org/support/topic/theme-compability-3/))
- Fixed issue with media taxonomies in `[su_custom_gallery]` ([forum topic](https://wordpress.org/support/topic/gallery-shortcode-source-taxonomy-still-not-solved/))


### 5.12.11

**Stability release**

This update provides minor improvements to the plugin codebase and bugfixes


### 5.12.10

This update provides minor improvements to the plugin codebase and removes connectivity test upon activation
It also fixes the fatal error introduced in version 5.12.9


### 5.12.9

This update provides minor improvements to the plugin codebase and removes connectivity test upon activation


### 5.12.8

**Security update**

This update features security improvements and is recommended for all users


### 5.12.7

**Security update**

This update features security improvements and is recommended for all users


### 5.12.6

* Improved PHP8 compatibility
* Added missing Opt-Out dialog stylesheet
* Fixed JS error at the About admin page
* Minor improvements to the codebase
* All images have been optimzed reducing the plugin size by 88kB
* Updated the Block Editor icon. Thanks to [@andreslav](https://wordpress.org/support/topic/feedback-the-icon-is-fuzzy/)
* Freemius SDK updated to version 2.5.3


### 5.12.5

* Added Freemius SDK
* Fixed JS error introduced in the previous update. See [forum topic](https://wordpress.org/support/topic/su-tabs-and-other-shortcodes-no-longer-work-after-recent-update/).


### 5.12.3

* Tested compatibility with WordPress 6.1


### 5.12.2

* Fixed issue with Shortcode Generator Presets, introduced in the previous update
* Tested compatibility with WordPress 6


### 5.12.1

**Security release**

This update fixes a security vulnerability in the shortcode generator. Thanks to Dave John for discovering it.


### 5.12.0

**What's new**

- New options `class` and `class_single` for the *Posts* shortcode. Use new options to specify custom CSS classes for the container and for a single post item respectively.
- Tested compatibility with WordPress 5.9


### 5.11.2

**Fixed**

- Fixed *Pro Tip* translation in shortcode generator. Thanks to (Pieterjan Deneys)[https://wordpress.org/support/topic/bug-untranslated-string/]


### 5.11.1

**What's new**

- Updated ForkAwesome library, now it includes [52 new icons](https://forkaweso.me/Fork-Awesome/icons/)

**Fixed**

- Minor improvements to the plugin settings UX
- Fixed some typos
- Fixed issue in `[su_posts]` where posts with thumbnails were generating PHP warnings. Thanks to [@dimabr](https://wordpress.org/support/topic/su_posts/#post-14756135)


### 5.11.0

**What's changed**

- *Available shortcodes* admin page have been disabled. Now you can find the most actual info about every shortcode at the plugin website under [Docs → Shortcodes](https://getshortcodes.com/docs-category/shortcodes/). This change will help me to maintain a single version of the plugin documentation and make it better for you.
- New admin page *Shortcodes → About* which contains some useful links and a getting started video

**Fixed**

- Fixed issue with `[su_box]`'s `title` attribute, now it supports nested HTML tags again
- Fixed issue with `[su_tooltip]`'s `z-index` CSS property, now it must be compatible with more themes
- Fixed issue where `[su_qrcode align="center"]` wasn't working
- Fixed issue when `su_animate` content wasn't properly indexed by search engines


### 5.10.2

**What's new**

- Plugin security have been improved. You may see a new notification in the admin area. [Learn more](https://getshortcodes.com/docs/unsafe-features/)
- Added new setting `Unsafe features` under `Shortcodes → Settings → Advanced settings`. [Learn more](https://getshortcodes.com/docs/unsafe-features/)
- Improved accessibility of the plugin settings page

**Fixed**

- Fixed *This video is unavailable* in `su_youtube_advanced` shortcode
- Fixed compatibility issue with SiteOrigin Page Builder. You can now turn on or off the old widget under `Shortcodes -> Settings Advanced settings`
- Fixed issue in `[su_note]` when it was displaying empty id attribute
- Fixed PHP warning at the new Widgets screen


### 5.10.1

**What's new**

- `su_qrcode`'s data attribute now understands the following variables: `%CURRENT_URL%` for the current page URL, and `%PERMALINK%` for post permalink

**Fixed**

- Fixed `tax_relation` attribute of the `su_posts` shortcode. Thanks to [janeri2021](https://wordpress.org/support/topic/error-in-shortcode-posts/)
- Fixed compatibility with Page Builder by SiteOrigin. [Details](https://github.com/siteorigin/so-widgets-bundle/issues/1247)
- Fixed `BlockControls` console warning in the Block Editor
- Added missing file `popper.min.js.map`
- Fixed issue with invalid z-index value in the Tooltip shortcode
- Fixed issue with the shortcode generator presets for the Tooltip shortcode


### 5.10.0

**What's new**

- Major update to the `su_tooltip` shortcode, now it works without jQuery migrate and has more options
- Fixed logic of the `su_user` shortcode


### 5.9.8

**What's new**

- Improved handling of nested dynamic elements within Tabs
- Improved handling of nested dynamic elements within Spoiler
- Tested compatibility with WordPress 5.7


### 5.9.7

**What's new**

- PHP8 support
- New filter `su/shortcode/posts/wp_query_args` that can be used to modify `[su_posts]` query
- New filter `su/shortcode/posts/allowed_template_locations` that can be used to add custom template paths in the `[su_posts]` shortcode
- Improved handling of nested dynamic elements within Tabs


### 5.9.6

Added compatiblity with WordPress 5.6
Minor improvements
Fixed readme.txt information


### 5.9.5

Added compatiblity with WordPress 5.6
Minor improvements
Fixed readme.txt information


### 5.9.4

**Fixes**

- Fixed PHP notice `A non-numeric value encountered` in `[su_dropcap]`
- Fixed PHP notice `A non-numeric value encountered` in `[su_service]`
- Updated in-plugin links


### 5.9.3

**What's new**

- New option `anchor_in_url` for `[su_tabs]` and `[su_spoiler]`. This option specifies whether an anchor will be added to page URL after clicking a tab or a spoiler.
- New option `random` for `[su_image_carousel]` which allows to shuffle carousel images

**Fixes**

- Fixed issue in `[su_image_carousel]` where images were hidden on some themes


### 5.9.2

**What's new**

- `[su_qrcode]` now supports nested shortcodes in the `data` attribute
- Improved performance by reducing the number of DB queries

**Fixes**

- Fixed issue in the Insert Shortcode tool with Taxonomy and Tax terms fields
- Fixed error `Posts: invalid template name` on some installations
- This update also fixes the plugin options issue present in 5.9.1


### 5.9.1

**What's new**

- `[su_qrcode]` now supports nested shortcodes in the `data` attribute
- Improved performance by reducing the number of DB queries

**Fixes**

- Fixed issue in the Insert Shortcode tool with Taxonomy and Tax terms fields
- Fixed error `Posts: invalid template name` on some installations


### 5.9.0

**Important changes**

Slider and Carousel shortcodes are marked as deprecated. These shortcodes will disappaer from the *Available shortcodes* page and from the *Insert shortcode* window. Deprecated shortcodes will continue to work, but you'll not be able to insert them.

You can enable deprecated shortcodes from *Dashboard → Shortcodes → Settings → Advanced settings* screen, but that's not recommended.

Use [su_image_carousel](https://getshortcodes.com/docs/image-carousel/) instead, it has more options, and much more reliable.

**What's new**

- `[su_image_carousel]` now supports media taxonomies
- New options `min_width` and `max_width` for `[su_lightbox_content]` shortcode

**Fixes**

- Fixed fatal errors `WP_Error` in `[su_slider]` and `[su_custom_gallery]`
- Fixed PHP notice `undefined variable` in `[su_post]` shortcode
- Fixed PHP notice `top_link` in `[su_divider]` shortcode
- Fixed PHP notice `filter_content` in `[su_post]` shortcode
- Fixed `related` option in `[su_dailymotion]` shortcode
- Fixed non-working *Slide Link* issue with `[su_custom_gallery]`
- Minor improvement to `[su_image_carousel]`
- Minor UI improvements


### 5.8.1

**What's new**

- New option `anchor` for `[su_divider]` shortcode


**Changes**

- `[su_document]` shortcode is now *deprecated*. It will continue to work, but will be removed from the Insert shortcode window and from documentation


**Fixes**

- Fixed fatal error on WP 5.4 in Gallery, Slider, and Carousel shortcodes. Thanks to [Jörn Lund](https://github.com/mcguffin)
- The `[su_feed]` can now work with URLs containing `&amp;`, converted by the block editor
- Fixed PHP notices in the admin part
- Translation fixes


### 5.8.0

**What's new**

- The `[su_user]` shortcode now support nested shortcodes in the `user_id` attribute
- The `[su_feed]` now has the `target` attribute, which allow opening feed links in a new tab


**Fixes**

- Updated documentation for the `[su_user]` shortcode. New fields: Nickname, First Name, Last Name, Description, & Locale
- Fixed warning in Google Search Console when testing page with the `[su_youtube]` shortcode: `Allow attribute will take precedence over ‘allowfullscreen’.`
- Fixed issue when some attributes weren't inserted by the Insert shortcode button
- Improved compatibility with PHP 7.4, thanks to [Jörn Lund](https://github.com/mcguffin)
- `[su_feed]` links now have title attribute with descriptions


### 5.7.0

**What's new**

- The `[su_user]` shortcode can now display user meta
- New option `id` (HTML Anchor) for the `[su_box]` shortcode
- New option `id` (HTML Anchor) for the `[su_note]` shortcode
- Improved compatibility with PHP 7.4, thanks to [Jörn Lund](https://github.com/vanokhin/shortcodes-ultimate/issues/100)
- New setting *Nested shortcodes alternative mode* which enables deprecated syntax for nested shortcodes. [Details](https://getshortcodes.com/docs/nested-shortcodes-shortcodes-in-attributes/#nested-shortcodes-with-the-same-tag-names)
- The `[su_feed]` shortcode is now based on SimplePie
- The `[su_quote]` shortcode now supports nesting


**Fixes**

- Fixed compatibility issue with WordPress version 4.5 (white screen at the settings screen)


### 5.6.2

**Fixes**

- Fixed YouTube autoplay in Chrome within the `[su_lightbox]` shortcode
- Fixed issue when hidden content (like YouTube embed) within spoiler remains clickable
- Other minor issues


### 5.6.1

**What's new**

- Comments in the `[su_posts]` shortcode can now be disabled from post editing screen or, using the Disable Comments plugin. Thanks to [Jörn Lund](https://github.com/vanokhin/shortcodes-ultimate/pull/98).
- `[su_image_carousel]` will now display post titles instead of image captions, where applicable. [Details & How to disable it](https://getshortcodes.com/docs/display-image-captions-instead-of-post-titles-in-the-image-carousel-shortcode/).

**Fixes**

- Fixed `Warning: A non-numeric value encountered` in `[su_slider]`, `[su_carousel]`, and `[su_custom_gallery]`
- Fixed `download` attribute of the `[su_button]` shortcode
- Fixed issue with `[su_spoiler]` where nested `[su_youtube]` remains clickable if spoiler is closed


### 5.6.0

**What's new**

- Shortcodes can now be enabled not only in Category descriptions, but in any Term description. See `Enable shortcodes in` option at plugin settings page

**Fixes**

- Fixed WP-Rocket compatibility issue, `[su_image_carousel]` didn't work on Android Chrome. [Forum topic](https://wordpress.org/support/topic/issues-with-wp-rocket-2/)
- Fixed issue with `<span>` tags in the `[su_tabs]` shortcode. [Forum topic](https://wordpress.org/support/topic/element-on-next-line-on-mobiles/)
- Fixed issue with ghost-style button colors


### 5.5.0

**What's new**

- New option `outline` for `[su_image_carousel]` which allows disabling carousel outline (when it gets focus)
- New option `mobile` for `[su_tabs]` which allows disabling tab stacking on mobile devices
- New option `texttrack` for `[su_vimeo]` which allows enabling video subtitles

**Improvements**

- `[su_youtube_advanced]` is now always served through https
- `[su_image_carousel]`: improved compatibility with various themes
- `[su_image_carousel]`: the gallery can now be loaded through AJAX
- `[su_image_carousel]`: improved keyboard navigation
- Insert Shortcode window will now remain open if the dark background clicked

**Fixes**

- Fixed `[su_image_carousel]` issue with empty image captions (with whitespace)
- Fixed `[su_image_carousel]` issue where images weren't shown when crop is disabled


### 5.4.1

This update fix various issues related to version 5.4.0


### 5.4.0

**What's new**

- New shortcode `[su_image_carousel]` which will take place of `[su_slider]` and `[su_carousel]` in the future
- New attribute `download` for the `[su_button]` shortcode (allows immediate downloading of specified URL in a button)
- New attribute `id` for the `[su_heading]` shortcode (allows linking to a heading)
- New attribute `wrapper` for the `[su_dummy_text]` shortcode (allows disabling of the div wrapper)
- New attribute `mobile` for the `[su_lightbox]` shortcode (allows disabling lightbox on mobile devices)

**Improvements**

- *Custom CSS code* field now has syntax highlighting
- `[su_button]` with `target=blank` will now be displayed with `rel='noopener noreferrer`
- Slightly improved appearance of the *Available shortcodes* screen
- *Vertical tabs* are now aligned with CSS flexbox, not JS
- Added `shortcodes.full.css` file to reference the default shortcode styles
- Minor improvements to `[su_table]`, `[su_row]`, and `[su_column]` shortcodes

**Fixes**

- Fixed issue with `[su_lightbox]` on iOS
- Removed `!important` from column styles for mobile devices

**Security**

- `[su_posts]` and `[su_template]` are now allow only templates from active theme or plugin folders
- *Error messages* are now displayed only to allowed users (user must have required capability)


### 5.3.0

**What's new**

- New shortcode `[su_csv_table]` for displaying CSV tables
- New option `indent` for the `[su_list]` shortcode, which allows adjusting of list indentation

**Fixes**

- Fixed inaccessible fields in media modal (while inserting Gallery/Slider/Carousel shortcodes)
- Fixed close icon class name in the presets menu
- Fixed issue with unwanted content inside single shortcodes
- Fixed warning when non-numeric value is used for the button size attribute
- Min-width for responsive tables is set to 100%


### 5.2.0

**Improvements**

- Tabs and accordions/spoilers are now accessible from keyboard
- Tabs are now working better with nested sliders/carousels
- Improved stability of some responsive elements, such as Google Maps
- YouTube and YouTube Advanced settings descriptions are now more clear
- New setting `Required user capability` which allows enabling the `Insert Shortcode` button for non-admin users
- New setting `Enable shortcodes in` which allows enabling shortcodes in text widgets and category descriptions

**Changes**

- youtube_advanced showinfo parameter is deprecated and removed from the plugin. [Why?](https://developers.google.com/youtube/player_parameters#release_notes_08_23_2018)
- Font Awesome replaced with [Fork Awesome](https://github.com/ForkAwesome/Fork-Awesome). Font Awesome stylesheet (v 4.7.0) will be completely removed in the next update. All icons are now use CSS class `sui` instead of `fa`


### 5.1.1

- Gutenberg compatibility enabled by default


### 5.1.0

**What's new**

- Added compatibility with the Gutenberg editor. [Learn more](https://vanokhin.com/su-now-supports-gutenberg/).

**Fixes**

- Fixed `<img>` icon appearance of the `[su_service]` shortcode


### 5.0.8

**Fixes**

- Fixed Live Preview, wasn't representing changed settings
- Fixed `[su_siblings]`, now it works again at top-level pages

**Other**

- Various code improvements
- New filters for gallery, slider, and carousel
- Returned `su_cmpt()` and `su_compatibility_mode_prefix()` utils


### 5.0.7

**Security update**

- Fixed shortcode generator preview vulnerability. [Description](https://www.pluginvulnerabilities.com/2018/09/25/full-disclosure-of-vulnerability-in-wordpress-plugin-with-700000-active-installations/).

### 5.0.6

**Fixes**

- Added missing images for `su_audio`, `su_video`, `su_slider` and `su_carousel`
- Fixed Fatal error: Call to a member function get_page_permastruct() on null in link-template.php:357
- Added missing `su_get_icon()` utility function
- Added missing `su_scattr()` utility function
- Added missing `su_do_shortcode()` utility function


### 5.0.5

**Improvements**

- Improved compatibility with fitvid.js;
- Improved appearance of the `Show more` and `Show less` links of the `su_expand` shortcode;
- The new option `mute` for `su_youtube` and `su_youtube_advanced` shortcodes;
- Support for the `youtube-nocookie.com` domain in `su_youtube` and `su_youtube_advanced` shortcodes;
- Support for nested shortcodes in the `title` attribute of the `su_button` shortcode;
- The new option `dnt` (do not track) for the `su_vimeo` shortcode, [learn more](https://help.vimeo.com/hc/en-us/articles/360001494447-Using-Player-Parameters);
- The new option `mute` for the `su_vimeo` shortcode;
- https support for the `su_dailymotion` shortcode;
- New options `title` and `rel` for the `su_permalink` shortcode;
- The `su_post` shortcode now support slugs in the `post_id` attribute;
- The new option `zoom` for `su_gmap`.

**Changes**

- Shortcodes styles merged into a single stylesheet.

**Fixes**

- Fixed warning in `su_siblings` shortcode.


### 5.0.4
* Fixed: added missing FontAwesome icons
* Fixed: is_plugin_active call removed on frontend
* Fixed: nested shortcodes
* Fixed: issue with spoiler loaded through ajax
* Fixed: [scheduler] shortcode logic

### 5.0.3
* Changed: Inview.js library replaced with [jQuery.Inview](https://github.com/protonet/jquery.inview)
* Fixed: caching issue with [su_dummy_text]
* Fixed: PHP warning in [su_posts] shortcode when specified template does not exist
* Updated: Font Awesome to version 4.7.0
* Added: responsive styles for [su_pullquote]

### 5.0.2
* Fixed: an issue where RTL stylesheet won't displayed if custom CSS field is empty
* Fixed: icon sizes at 'Dashboard - Available Shortcodes' page
* Fixed: [expand] shortcode now works when loaded through AJAX
* Fixed: border-radius on [box] shortcode
* Fixed: compatibility with 'Plugin Organizer'
* Updated: OwlCarousel jQuery plugin
* Added: new attribute 'responsive' for table shortcode: [su_table responsive="no|yes"]
* Added: new attribute 'playsinline' for youtube_advanced shortcode: [su_youtube_advanced playsinline="no|yes"]

### 5.0.1
* Fixed: serious security vulnerability, which allows attacker to run any code using filter in meta, post, or user shortcodes. Thanks to Robert L Mathews.
* Fixed: changed admin menu position (it was replacing 'Settings' menu on some installations)
* Fixed: shortcodes prefix field now accepts special characters
* Fixed: old bug when unwanted code parts was added with shortcode
* Fixed: bug, where backslashes were removed from custom CSS code
* Added: new attribute 'ID' for [button] shortcode
* Added: new filter 'su/slides_query', which can be used to modify posts query for slider, carousel and custom_gallery shortcodes
* Added: new filter 'su/assets/custom_css/template' to filter custom css output
* Minor fixes

### 5.0.0
* Read [this blog post](https://vanokhin.com/whats-new-in-shortcodes-ultimate-5/) to learn more about update
* New project website [getshortcodes.com](https://getshortcodes.com/)
* New documentation [getshortcodes.com/docs](https://getshortcodes.com/docs/)
* Added: 'Available shortcodes' admin menu
* Removed: 'Examples' admin menu
* Removed: 'Cheatsheet' admin menu
* Fixed: [feed] shortcode (now it uses SimplePie)
* Changed default content for [tabs], [row] and [accordion] shortcodes
* Fixed: [user] shortcode works when user is not logged in
* Changed: Security improvement. Plugin will now strip all HTML tags from Custom CSS code
* Minor improvements and fixes

### 4.10.2
* Improved: compatibility with PHP7 ([user] and [post] shortcodes)
* Fixed: [slider] and [custom_gallery] markup (skipped whitespaces among link attributes)
* Removed: user capability check in [permalink]

### 4.10.1
* Fixed: lightbox javascript

### 4.10.0
* Fixed: security vulnerability at 'Examples' admin page (insecure call of file_get_contents() at inc/core/tools.php:774)
* Fixed: added access check to permalink shortcode. [Pull request #20](https://github.com/gndev/shortcodes-ultimate/pull/20).
* Added: PHP7 compatibility. Checked with [php7cc](https://github.com/sstalle/php7cc) and [PHP Compatibility Checker](https://wordpress.org/plugins/php-compatibility-checker/). [Pull request #45](https://github.com/gndev/shortcodes-ultimate/pull/45).
* Added: https support for Google Maps. [Pull request #40](https://github.com/gndev/shortcodes-ultimate/pull/40).
* Added: https support for Youtube. [Pull request #39](https://github.com/gndev/shortcodes-ultimate/pull/39).

### 4.9.9
* Fixed: vote popup at plugins page
* Minor improvements, fixes

### 4.9.8.1
* Fixed: compatibility with WordPress 4.3+
* Added: lightbox captions for slider, carousel and custom_gallery. Commit by [Valentino Pistis](https://github.com/vpistis)
* Changed: text domain from 'su' to 'shortcodes-ultimate'

### 4.9.8
* Added: Spanish translation
* Updated: Font Awesome updated to 4.4.0
* Fixed: buttons line-height on narrow screens
* Fixed: nested spoilers

### 4.9.7
* Added: [document] is now compatible with https
* Fixed: carousel items width calculation
* Added: new attribute for [button title=""], [forum topic](https://wordpress.org/support/topic/how-add-title-tag-to-a-button)
* Fixed: stripslashes for [button] content

### 4.9.6
* Fixed: Quick fix for disabled custom css since previous update

### 4.9.5
* Added: basic RTL support
* Fixed: JS error (blocking shortcodes settings) on WordPress 3.5
* Fixed: minor improvement for slider/gallery posts query. [Forum topic](https://wordpress.org/support/topic/slider-code-suggestion)
* Fixed: minor imrovements on [quote], fixed markup bug for long values in cite, thanks to [Anatoly Yumashev](http://systemo.biz/)
* Added: completely redesigned search feature. Now it's like a Google, but for shortcodes =)
* Added: Insert shortcode popup window hotkey. So now, you can open Insert shortcode window, choose shortcode and insert it with just one click
* Updated: new demo video at plugin settings page (About tab)
* Updated: new plugin's banner and icon

### 4.9.4
* Updated: Japanese translation
* Updated: Polish translation
* Fixed: minor fixes in shortcode settings window
* Fixed: vulnerability in Examples preview. Added wp_nonce check. Thanks to [Kacper Szurek](http://security.szurek.pl/)
* Fixed: vulnerability at Custom CSS page. Added wp_nonce check. Thanks to [Ryan Satterfield](https://planetzuda.com/)
* Removed: skins directory creation

### 4.9.3
* Updated: owl-carousel.js
* Added: minor UI improvements
* Fixed: [vimeo] ssl issue (thanks to Adam)
* Fixed: multiple errors on cheatsheet page
* Fixed: errors when updating user profile, [forum topic](https://wordpress.org/support/topic/error-message-when-updating-users-in-wp-admin)
* Removed: global skin option at settings page

### 4.9.2
* Added: minor improvements for tabs/spoilers anchors (auto-removing extra # characters)
* Added: compatibility with TablePress's advanced editor
* Added: new option for tabs. You can now link any tab to any webpage [su_tab url="http://" target="blank"]
* Added: new option wmode for [youtube_advanced], [forum topic](http://wordpress.org/support/topic/youtube-player-option-request)
* Added: new shortcode [lightbox_content]
* Fixed: lightbox and galleries scripts, [forum topic](http://wordpress.org/support/topic/carousel-su-little-hack)
* Fixed: removed global function $.support.transition, [forum topic](http://wordpress.org/support/topic/transition-check-returns-string-instead-of-object)
* Updated: Russian language
* Updated: Japanese language
* Updated: FontAwesome, 4.1.0
* Updated: Magnific Popup, 0.9.9

### 4.9.1
* Added: New shortcode [scheduler]
* Added: New shortcode [expand]
* Added: New options for [divider]
* Added: New option `rel` for [button]
* Fixed: animations script has been changed. CSS animations will be skipped in non-supported browsers, [forum topic](http://wordpress.org/support/topic/disable-animations-on-non-supported-devicesbrowsers)
* Fixed: templates/default-loop.php - removed extra n character in comments number, [forum topic](http://wordpress.org/support/topic/minor-bug-in-templatesdefault-loopphp)
* Fixed: large DB query on sites with many users, [forum topic](http://wordpress.org/support/topic/installing-sc-ultimate-on-site-with-30000-wp-users)

### 4.9.0
* New shortcode [qrcode] allows you to generate colorful and responsive QR codes!
* Improved shortcode search. Just type shortcode name and hit Enter
* Updated Animate.css (animations library)
* Updated ACE editor (custom CSS editor)
* Responsive CSS for [tabs]
* Highly decreased plugin size

### 4.8
* Minor UI fixes (compatibility with page builders)
* Czech translation by [Punc00](http://nuze.cz/)
* Added: full compatibility with multiple editors on same page - [fourm topic](http://wordpress.org/support/topic/enhance-compatibility-with-other-plugins)
* Fixed: extra CSS class for [menu] - [forum topic](http://wordpress.org/support/topic/extra-css-class-not-working-on-menu-shortcode-video-included)
* Fixed: Swiper click event, Swiper has been updated - [forum topic](http://wordpress.org/support/topic/carousel-links-not-working)
* Fixed: [spoiler]'s content is now hidden until the page is loaded
* New dashboard page: Cheatsheet
* Minor [spoiler] fix, for hidden spoiler content
* Updated Japanese translation

### 4.7
* Long-awaited feature: slider, carousel and custom_gallery links can now be open with lightbox
* Long-awaited feature: custom links in slider, carousel and custom_gallery shortcodes
* Fixed https bug in FontAwesome enqueue
* Fixed bug with multiple users queries - [forum topic](http://wordpress.org/support/topic/plugin-making-700-sql-calls)
* New Ghost style for [button]
* Minor UI fixes (for WP 3.9+)
* New shortcode [dailymotion]
* YouTube (advanced) can now use https protocol
* Additional help notes in Shortcode Generator
* Slovak language

### 4.6
* Auto-save for shortcodes settings. Now you don't need to adjust it again and again
* New premium add-on - [Extra Shortcodes](http://gndev.info/shortcodes-ultimate/extra/)
* Minor UX improvements
* New locale - VI
* Fixed bug with tax_term IDs in [posts] shortcode, [forum topic](http://wordpress.org/support/topic/posts-tax_term-category-number)
* Fixed bug with service title, [forum topic](http://wordpress.org/support/topic/service-shortcode-not-wrapping-properly-on-mobile-browser)
* Fixed bug with animations names in shortcode generator, [forum topic](http://wordpress.org/support/topic/animations-2)
* Updated settings pages capabilities
* Added some hooks
* Updated .pot file
* Font-Awesome is now loaded from bootstrap CDN. [Technical details](http://stackoverflow.com/questions/20032426/fontawesome-doesnt-display-in-firefox).
* New review - [Shortcodes Ultimate: Ultimatize your written content](http://wisdmlabs.com/blog/how-to-style-wordpress-themes-with-shortcodes-ultimate/)
* New review - [Add 40+ New Layout Features To WordPress with Shortcodes Ultimate](http://www.makeuseof.com/tag/add-40-new-layout-features-wordpress-shortcodes-ultimate/)
* New review - [Show Me the Shortcode](http://thewpchick.com/show-shortcode/) + Video
* Updated readme.txt
* Compatibility with recent version of [SiteOrigin page builder](siteorigin.com/page-builder/) - it's free!
* Compatibility with recent version of [Visual Composer](http://vc.wpbakery.com/)
* Compatibility with recent version of [Elegant Themes page builder](http://www.elegantthemes.com/gallery/elegant-builder/)

### 4.5
* Updated some examples
* Removed import functions. Old versions of plugin (like 3.9.5) is not supported anymore
* Updated custom formatting filter
* Updated Japanese translation
* Added NL translation
* Minor fixes
* Presets. Now you need to adjust the shortcodes only once
* New WP filters for shortcodes attributes
* New option for compatibility mode prefix
* Compatibility mode is now enabled by default
* Font-awesome updated to 4.0.3
* New shortcode [meta]
* New shortcode [user]
* New shortcode [post]
* New attribute limit for [slider], [carousel] and [custom_gallery]
* Minor UX improvements

### 4.4
* __IMPORTANT__: new galleries mechanism. Your created galleries will work but will not be visible in admin panel. Now, you're able to create galleries right in "Insert shortcode" window. Also, you can now create galleries from posts, categories or even custom taxonomies.
* Removed all default links (default youtube videos)
* Updated admin page framework Sunrise
* Minor admin panel fixes
* Fixed file_get_contents() (disabled http wrappers) issue at the examples page
* Added classes Shortcodes_Ultimate_Generator, Shortcodes_Ultimate_Shortcodes and Shortcodes_Ultimate_Data
* Removed unused classes MediaUpload and ImageMeta
* New shortocde [dummy_image]
* New shortocde [dummy_text]
* New shortocde [animate]
* New shortocde [youtube_advanced]
* New admin page - Examples
* New admin page - Add-ons
* Font Awesome updated to version 4
* New attr [spoiler icon=""]
* Fixed issue with date format in [posts]
* New slider control for shortcode generator
* Small fixes

### 4.3
* New text-shadow picker for [button]
* Anchor navigation for spoilers and tabs - [forum topic](http://wordpress.org/support/topic/hyperlinks-to-spoilers-and-tabs)
* Small fixes
* IMPORTANT: removed old list icons. These icons replaced with new font-awesome icons
* New icon picker for [service], [button] and [list]
* Media manager is now works on widgets page
* Shortcodes inside of [button]
* Fixed fatal error in [media]
* New media manager added for galleries manager
* New media manager added to the file fields in Generator
* Z-index for visual composer - [forum topic](http://wordpress.org/support/topic/compatible-with-visual-composer)
* New attr for [button] onclick
* Fixed settings page
* Fixed [video] player

### 4.2
* Font Awesome icons (in Generator)
* Fixed warning in footer - [forum topic](http://wordpress.org/support/topic/bug-showing-in-online-site-after-updating-the-plugin)
* Removed warning at settings page - [forum topic](http://wordpress.org/support/topic/warning-on-settings-page)
* Removed another warning (undefined index) - [forum topic](http://wordpress.org/support/topic/undefined-index-with-wp_debug-true)
* Changed syntax for shortcodes inside of attributes - [documentation](http://gndev.info/kb/how-to-use-another-shortcodes-inside-of-attributes/)
* Small performance improvemets
* Aded font-awesome.css. Will be completely included in closest versions
* Added default taxonomy value for [posts]
* Added default post_type value for [posts]
* Added ability to use shortcodes inside of attributes
* Translated into Japanese
* Fixed [button wide=yes]
* Fixed media query for [column]
* Added new attr [column center=yes]
* Improved js code for spoilers and tabs
* Improved js code for generator
* Added pot file
* Fixed [button] css code
* Updated [accordion], [spoiler] and [tabs] js code
* Fixed [tooltip]
* Updated Greek translation
* Fixed [lightbox]
* Disabled wp_footer check
* Fixed wp_footer notice, again
* Small fix for tooltips
* Fixed wp_footer notice
* Greek translation
* Added compatibility mode prefix for spoilers inside of accordion
* Updated qTip plugin
* Added shortcode [tooltip]
* Added new attribute. [tab disabled="yes"]. Now, any tab can be disabled. [Forum topic](http://wordpress.org/support/topic/tabs-how-to-disable-one-of-the-tabs)
* Added [accordion] scrolling. [Forum topic](http://wordpress.org/support/topic/accordion-usability-issue)
* Added wp_footer check. User will be noticed if current theme doen't includes wp_footer
* Updated caching mechanism. Cache will be reseted when you add or remove terms
* Updated galleries mechanism. Removed some conflicts
* Fixed spoiler background for style=fancy
* Additional access check option for Shortcode Generator

### 4.1
* [5 metro skins](http://gndev.info/shortcodes-ultimate/metro-skins/)
* New screencast - [How to create image gallery](http://www.youtube.com/watch?v=kCWyO2F7jTw)
* New attribute "center" for [button]. Buttons can now be centered on the page
* Updated [frame]. Now it can contain other shortcodes
* Updated caching mechanism. Cache now will be reseted on plugin activation
* Fixed many PHP warnings when debug mode enabled
* Added backward compatibility for [media]. Shortcode has basic support for youtube and vimeo videos
* Fixed bug with hidden single [tab]
* Added attribute "active" for tabs container. This option allows you to select tab number that will be open by default
* Fixd button style 3D
* Added backward compatibility for [frame]
* Fixed [column] margins
* Added backward compatibility for [tabs]. Now it accepts style=3 and vertical attributes
* Added backward compatibility for [spoiler]. Now it accepts 0 and 1 as values for attribute open. Also, it now accepts style attribute (1, 2, default, fancy, simple)
* Added custom CSS import from previous versions. Styles will be imported automatically and prepended to the existing CSS-code
* Added backward compatibility for [highlight]. Now it accepts bg and background attributes
* Added backward compatibility for [label]. Now it accepts style and type attributes
* Added backward compatibility for [dropcap]. Now it accepts 1, 2 and 3 as style values
* Added backward compatibility for [permalink]. Now it accepts p and id attributes
* Added backward compatibility for [button]. Need to test
* Added backward compatibility for [members]. Now it accepts style and login attributes
* Added backward compatibility for [box]. Now it accepts color and box_color attributes
* Added backward compatibility for [note]. Now it accepts color and note_color attributes
* Added backward compatibility for [column]. Now it accepts attribute last and can be not wrapped with [row]
* Added backward compatibility for [document]. Now it accepts file and url attributes

### 4.0
* [Official plugin page](http://gndev.info/shortcodes-ultimate/)
* [Premium add-on for creating custom shortcodes](http://gndev.info/shortcodes-ultimate/maker/)
* Plugin based on [Sunrise Plugin Framework](https://github.com/gndev/sunrise)
* [GitHub repo](https://github.com/gndev/shortcodes-ultimate). Now you can easily fork and modify best plugin in the world (:
* Brand new Shortcode Generator, [demo video](http://www.youtube.com/watch?v=DR2c266yWEA)
* [Shortcodes API](http://gndev.info/kb/shortcodes-ultimate-api-overview/)
* Completely reorganized code. Added and removed some shortcodes
* For security maniacs: timthumb.php replaced by native WordPress mechanism
* For speed-up maniacs: completely rewritten assets mechanism. Now css and js files included on page depend on used shortcodes
* Added new shortcode [posts]. This is awesome and flexible mechanism to display your content in many different ways
* Now you can create your own custom skins for shortcodes
* Columns, google maps, google document viewer, youtube player, vimeo player and custom audio player is now fully responsive

### 3.9
* More screencasts
* Special widget for shortcodes
* Small fixes
* Hebrew translation
* [Awesome tutorial by Digital Cascade TV](http://www.youtube.com/watch?v=IjmaXz-b55I)
* Partners section on settings page
* Generator select improved with [Chosen](http://harvesthq.github.com/chosen/)
* Farbtastic color picker

### 3.8 (security release)
* 2 new translations (Sk, Lt)
* Donate button in control panel
* Updated timthumb.php (version 2.8.10)
* Added 2 useful screencasts

### 3.7
* Complete support for nested shortcodes. Check the FAQ page.
* New shortcode [label]
* New style for buttons [button style="5"]
* Fixed images ordering for [custom_gallery], [jcarousel] and [nivo_slider]

### 3.6
* Descriptions for [custom_gallery]
* Custom options for jwPlayer
* Fixed size option for sliders and gallery

### 3.5
* New shortcode [accordion] for muliple spoilers
* Improved spoiler shortcode (check settings page)
* Multiple tabs bugfix
* Authors can also use shortcode generator
* Nested shortcodes: spoiler, column, tabs, box, note

### 3.4
* Belarusian translation
* New shortcode [dropcap]

### 3.3
* Changed: [nivo_slider] and [jcarousel] (see docs in console)
* New shortcode: [custom_gallery]
* New parameter: [members login="0|1"]
* New shortcode: guests
* German translation

### 3.0
* Button for WYSIWIG editor (search it near Upload/Insert buttons)
* New shortcode: private (private notes for editors)
* Patched and secure timthumb.php

### 2.7
* French translation
* Fixed for work with new jQuery 1.6 in WP 3.2

### 2.5
* Theme integration

### 2.4
* New shortcode: jcarousel

### 2.3
* New admin page: Demo

### 2.2
* New shortcode: document
* New shortcode: members
* New shortcode: feed
* New attr: link="caption" for [nivo_slider]
* New attr: p for [subpages]
* New tabs style (style=3)

### 2.1
* New option: disable any script
* New option: disable any stylesheet
* New attribute for column shortcode - style
* New attribute for spoiler shortcode - style

### 2.0
* New shortcode: menu
* New shortcode: subpages
* New shortcode: siblings
* Some admin fixes
* New button attribute - class
* New button attribute - target
* Different tabs styles (1 old + 1 new)

### 1.9
* New shortcode: permalink
* New shortcode: bloginfo

### 1.8
* Some small additions
* Ajax admin page
* No-js compatibility
* Multiple tabs support

### 1.7
* Improved settings page design
* Added shortcode nivo_slider
* Added shortcode photoshop

### 1.6
* New admin panel
* Custom CSS editor with syntax hughlight
* Small fixes
* Added donation forms

### 1.5
* Added option "Compatibility mode"
* Added new button styles
* Added new list styles
* Added new shortcode media
* Added new shortcode table

### 1.4
* Added shortcode "Fancy link"

### 1.3
* Some fixes

### 1.2
* Localization support

### 1.1
* Added options page
* Fixed options saving

### 1.0
* Initial release
