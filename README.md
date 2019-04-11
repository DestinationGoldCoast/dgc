# DGC #


## Development ##
You will find a "build" folder, this is where you will find all the good things like a home for SASS, JS and a sprinkle of GULP.

### Build Folders: ###
* CSS: When SASS is compiled it will output in this folder.
* JS: Currently not used.
* Node_modules: NPM packages get installed here, not committed to GitHub.
* SASS: Home to all the SASS files.

### Requirements: ###
You will need SASS and GULP installed on your development machine, some handy link:
* SASS:	https://sass-lang.com/
* GULP:	https://gulpjs.com/
If you are new to GULP, I suggest reading - https://css-tricks.com/gulp-for-beginners/

### Gulp Tasks Included: ###
* Gulp SASS: Allows you to compile SASS to css.
* GULP Auto prefixer: Add browser specific support.
* GULP Minify: Minifies files to help reduce load time.
* GULP Watch: Watches for changes and performs tasks.
Each task has a link to the npm package with install instructions (if needed).

### Dev Time: ###
Once you have gulp running, you just need to run 'gulp watch' from the cmd promot while in the build folder. Now you can make changes and everything will recompile.

Note: The stylesheet that is enqueued will vary depending on the environmnet, eg, localhost:81 is my local environmnet so a non minified stylesheet is loaded.

### Hooks: ###
There are built in hooks to help with the seperation of view and functionality. A hook allows you to 'hook' a function to a location in the html. This can be done with the [add_action()](https://developer.wordpress.org/reference/functions/add_action/) function.

**Hook list:**
* hook_before_html
	* After the opening <body> tag.
	* File: header.php

* hook_before_header
	* Before the opening <header> tag.
	* File: header.php

* hook_top_header
	* After the opening <header> tag.
	* File: header.php

* hook_bottom_header
	* Before the closing </header> tag.
	* File: header.php

* hook_after_header
	* After the closing </header> tag.
	* File: header.php

* hook_before_content
	* Before the opening <div id="content"> tag.
	* File: header.php

* hook_top_content
	* After the opening <div id="content"> tag.
	* File: header.php

* hook_bottom_content
	* Before the closing id="content" </div> tag.
	* File: footer.php

* hook_after_content
	* After the closing id="content" </div> tag.
	* File: footer.php

* hook_before_aside
	* Before the opening <aside> tag.
	* File: sidebar.php

* hook_top_aside
	* After the opening <aside> tag.
	* File: sidebar.php

* hook_bottom_aside
	* Before the closing </aside> tag.
	* File: sidebar.php

* hook_after_aside
	* After the closing </aside> tag.
	* File: sidebar.php

* hook_after_html
	* Before the closing </body> tag.
	* File: footer.php


## Production ##
As part of the build process, there is a gulp task to get some files ready for production, the need to know:
* style.css is a minified version of build/css/style.css

## Credits ##
* _s is the base theme by Automattic - https://underscores.me/
