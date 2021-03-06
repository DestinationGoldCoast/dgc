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

Note: The style.css and theme.js file that is enqueued will vary depending on the environmnet, eg, localhost:81 is my local environmnet so a non minified stylesheet will be loaded.

**REM**
The `<html>` tag has a font-size of 10px for your rem computed value, eg, if you set the `<p>` font-size to 1.6rem it will be 16px. This makes calculation straight forward and for different media queries you can also easily change all rem calculated properties by changing the `<html>` size.

**Animate.css**
To allow for some easy animation, animate.css has been included. To animate an element, add the class `animated` and one of the [animation options](https://github.com/daneden/animate.css#animations), eg, `<p class="animated slideInDown">This p will be animated with awesomeness</p>`

### Hooks: ###
There are built in hooks to help with the seperation of view and functionality. A hook allows you to 'hook' a function to a location in the html. This can be done with the [add_action()](https://developer.wordpress.org/reference/functions/add_action/) function.

**Hook list:**
You bet there is, slightly long to be in a readme file so I kept it in a safe location - [hook list](https://github.com/DestinationGoldCoast/dgc/wiki/Hook-List)

**Hook methods/functions**
To keep the functionality that utililses hooks in one place, there is a hook-functions.php file in the `inc` folder where you can keep all the things.

## Production ##
As part of the build process, there is a gulp task to get some files ready for production, the need to know:
* style.css is a minified version of build/css/style.css

## Credits ##
* _s is the base theme by Automattic - https://underscores.me/
* Animate.css by Daniel Eden - https://github.com/daneden/animate.css
* Normalize.css by Nicolas Gallagher - https://github.com/necolas/normalize.css
* Bootstrap by the Bootstrap Team and contributors - https://getbootstrap.com
