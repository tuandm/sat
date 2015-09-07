#### Question 1
* Using HTML / JavaScript, explain how you would implement a gallery interface where the user would upload photos, and they would appear on the page instantly.
Discuss alternative implementations following progressive enhancement.

#### Answer
Basically, we will render image with data uri when user browsing and selecting an image. Submitting images to server can be done via async way (with AJAX), or sync way (with 'Save' button or something like this). In detail

* 1.a. Build HTML for gallery to have frames for images, it will be easier for users to have 'Browse' buttons for each frame.
* 1.b. Bind clicking event on 'Browse' button, to trigger clicking event of file element for each frame.
* 1.c. Bind changing event on file element, to use FileReader object for getting data URI, then display in <img> tab (src='data:image/jpeg;base64,/...')
* 1.d. Using Ajax, or form submitting to send images to server.

#### Note
- FileReader is only supported by Firefox 3.6+, Chrome 7+, IE 10+, Safari 6.0.2+, Opera 12.02+ (https://developer.mozilla.org/en/docs/Web/API/FileReader)
- They have a great plugin that builds the image visualization: http://www.jasny.net/bootstrap/javascript/#fileinput
- The problem will be more quite complex, if we use paginating. In this case, PHP should be a good help.
