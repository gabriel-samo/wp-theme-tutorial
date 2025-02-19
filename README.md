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

## Add Tailwind CSS to the Theme
- Initialize npm project ```npm init -y```.

- Install Tailwind CSS using npm ```npm install -D tailwindcss@3```.

- Initialize Tailwind CSS ```npx tailwindcss init```.

- Create ```src/input.css``` file and add the following code:

    ```css 
    @tailwind base;
    @tailwind components;
    @tailwind utilities;
    ``` 

- Create ```functions.php``` file and add the following code:

    ```php
    function brad_enqueue_tailwind() {
      wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/css/tailwind.css');
    }

    add_action('wp_enqueue_scripts', 'brad_enqueue_tailwind');
    ```
  - This code will enqueue the Tailwind CSS file to the theme.

- Add a script to the ```package.json``` file to watch for changes in the ```input.css``` file and compile it to the ```tailwind.css``` file.
  ```json
  "scripts": {
    "tailwind": "npx tailwindcss -i ./src/input.css -o ./css/tailwind.css --watch"
  }
  ```

- Run Tailwind CSS ```npm run tailwind```.
  
  <h1><i> 
    <u><b>NOTE:</b></u> In order for Tailwind CSS to work, Dont forget to add:
  </i></h1>

  ```php
  get_header();
  ```
## Section 4, Lesson 12:

- Create ```header.php``` file.
  - The file should start the html boilerplate.
  - Add ```<?php wp_head(); ?>``` to the head of the page.
  - ```wp_head();``` is used to add styles to the head of the page.

- Create ```footer.php``` file.
  - The file should end the html boilerplate.
  - Add ```<?php wp_footer(); ?>``` to the end of the body.
  - ```wp_footer();``` is used to add scripts to the footer of the page.

- Add ```get_header();``` and ```get_footer();``` to every template file.
  - ```get_header();``` will add the header to the page.
  - ```get_footer();``` will add the footer to the page.
