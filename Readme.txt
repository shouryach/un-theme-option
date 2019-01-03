Dynamic Siteurl For Widget

Description: This is for the dynamic site url on widget area of wordpress. We need to change the links of the widget texts while we are moving the live server. Now we can don't need to think about it again. It's true. Just follow my steps.

Step 1. Activate the plugin

Step 2. Go to the Dwv Setting Panel.

Step 3. Step the variable name you want to use instead of static site url's. Like :{{site_url}}

Step 4. Add code with the variable in widget. 

Example : <a href="https:example.com">Go To Home Page</a> --- we are using this code before

Now you should use <a href="{{site_url}}">Go To Home Page</a>
