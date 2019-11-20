if (document.images)
        {
                btn1a=new Image()
                btn1a.src="imgs/home-off.jpg"
                btn1b=new Image()
                btn1b.src="imgs/home-on.jpg"

                btn2a=new Image()
                btn2a.src="imgs/about-off.jpg"
                btn2b=new Image()
                btn2b.src="imgs/about-on.jpg"

                btn3a=new Image()
                btn3a.src="imgs/wht-off.jpg"
                btn3b=new Image()
                btn3b.src="imgs/wht-on.jpg"

                btn4a=new Image()
                btn4a.src="imgs/seo-off.jpg"
                btn4b=new Image()
                btn4b.src="imgs/seo-on.jpg"

				btn5a=new Image()
                btn5a.src="imgs/prices-off.jpg"
                btn5b=new Image()
                btn5b.src="imgs/prices-on.jpg"
								
				btn6a=new Image()
                btn6a.src="imgs/contact-off.jpg"
                btn6b=new Image()
                btn6b.src="imgs/contact-on.jpg"

				}
function imgOff(imgName)
        {
                if  (document.images);
        {
                document[imgName].src = eval (imgName + "a.src");
        }
}
function imgOn(imgName)
        {
                if  (document.images)
        {
                document [imgName].src = eval (imgName + "b.src");
        }
}