# VIP-RU Sauna website

Source code for the static pages and custom WordPress extensions used by the VIP-RU Sauna website.

## Contents

- Static website pages, styles, scripts, fonts, and image assets are at the repository root.
- The custom WordPress theme is in `wordpress/wp-content/themes/vipru-sauna`.
- Project-specific WordPress extensions are in `wordpress/wp-content/mu-plugins` and `wordpress/wp-content/plugins/vipru-upload-limit`.

## Deliberately excluded

The repository omits WordPress core, runtime uploads, local certificates, deployment backups, browser cookies, generated output, and MP4 videos. These either come from upstream WordPress, contain machine-specific data, or exceed GitHub's regular file-size limit.

To use the WordPress part locally, install a compatible WordPress instance and copy the custom theme and extensions from this repository into its `wp-content` directory.
