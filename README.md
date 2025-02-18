# Brad Udemy WordPress Theme Development Tutorial

This is a WordPress theme following the tutorial by Brad in Udemy.

## Section 3, Lesson 8:
- Create ```style.css``` for theme details to show in the backend.
  - ```Theme Name:``` is the name of the theme.
  - ```Theme URI:``` is the URI of the theme.
  - ```Author:``` is the author of the theme.
  - ```Author URI:``` is the URI of the author.
  - ```Description:``` is the description of the theme.
  - ```Version:``` is the version of the theme.
  - ```License:``` is the license of the theme.
  - ```License URI:``` is the URI of the license.
  - ```Text Domain:``` is the text domain of the theme.
  - ```Tags:``` is the tags of the theme.
- Create ```index.php``` that is the main page of the theme.
- Added ```screenshot.jpg``` file to the root of the theme folder. This file is used to display the theme in the WordPress admin dashboard.

## Section 4, Lesson 11:
- Modify ```index.php``` to display the posts.
  - ```while (have_posts()) {``` is used to loop through the posts.
  - ```the_post();``` is used to display the post.
  - ```the_title();``` is used to display the title of the post.
  - ```the_content();``` is used to display the content of the post.
  - ```the_permalink();``` is used to display the permalink of the post.
- Create ```single.php``` that is the single post page template of the theme.
- Create ```page.php``` that is the page template of the theme.