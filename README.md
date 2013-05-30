#PHP SDK Instructions #

This PHP implementation is intended to be a complete package for integrating with SnowShoeStamp's API.
With minimal modifications, you should be able to have this SDK up and running in just a few minutes.

---

1. Take the directory that contains this README, and place all the files and the /inc directory in the directory
on your server where your app will reside. You should note that our index.php file does nothing more than 
redirect the user to our servers, so you can easily take its contents and move them to whatever page your user
will be on when they will be prompted to proceed to the stamp screen. 

2. To get the app running, you will need to register on our site. Go to beta.snowshoestamp.com and register an
app with us. You will need to enter a callback url, and this callback url is wherever you've put the file called
callback.php  

3. As mentioned before, index.php just redirects to the stamp screen. The address of the stamp screen is
https://beta.snowshoestamp.com/applications/client/ &#60;your app key here&#62;/    If you are using our index.php, 
you'll see a comment showing you where to put the app key. If you're linking to it from somewhere else,
you can link to the above address, replacing &#60;your app key&#62; with the app key you can find on your Application
page on our site.

4. Now open callback.php  You will see two comments telling you where to put your app key and app secret. 
Enter them there.

5. The app is now ready to go. Navigate to index.php (or whatever page links you to the stamp screen), stamp
the screen, and you should see an output of the returned JSON. Obviously, you will want to do more with this information than just print it to the screen. The JSON will contain, among other things, the stamp that was found if there was one, any error messages, and a receipt data string, which can be used to track your API call if you need to contact us. It is up to you to parse this JSON to obtain the stamp information; we recommend using the serial number as the identifying element. Additionally, its important to note that the status code will be different depending on whether a stampwas found or not. A found stamp returns a 200 and a JSON containing stamp data. If no stamp is found, the API returns a 400 and the JSON contains an error message stating no stamp was found. At this point, what you do
with the data is up to you.