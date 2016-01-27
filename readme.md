# Bridge Child Theme Structure #

This is a starter package for those interested in building a child theme with Bridge. It's a flexible, well built and consistently updated theme. Perfect for starting wp projects. This starter package uses gulp and sass to compile css files within the child theme.

### Instructions ###

* Purchase and download Bridge (http://themeforest.net/item/bridge-creative-multipurpose-wordpress-theme/7315054)
* Add the core 'Bridge' theme to wp-content/themes
* Clone or download this repository into wp-content/themes
* (Optional) change the name of the folder or the 'Theme Name' in the root style.css file.
* Ensure you have nodejs gulp installed on your local machine.
* Run npm install to get the node packages.
* Run gulp to start watching the scss folder. Gulp will convert the sass, autoprefix and minify the file.

### Notes ###

* Keep style.css in the root folder for theme recognition.
* The compiled scss file lives in the 'css' folder and is enqueued through functions.php
* Change screenshot.png to a screenshot of your site and upload the image at 880 px x 660px